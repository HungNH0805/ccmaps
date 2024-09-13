<?php
$link = node_load(29)->field_mo_ta_slider['und'][0]['value'];
function _ccmaps_resource_access() {
  return TRUE;
}

function _ccmaps_resource_retrieve($nid) {
  $node = node_load($nid);
  if (!empty($node)) {
    return $node;
  }
  else {
    return FALSE;
  }
}

function _ccmaps_get_all_hall_level($tid) {
  $terms = taxonomy_get_children($tid);
  if (!empty($terms)) {
    foreach ($terms as $id => $term) {
      $all_halls[] = [
        'tid' => $term->tid,
        'name' => $term->name,
        'image' => file_create_url(reset($term->field_image)['0']['uri']),
      ];
    }
    return [
      'data' => $all_halls,
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    return [
      'status' => FALSE,
      'code' => 400,
    ];
  }
}

function _ccmaps_get_all_attributes($tid) {
  $terms = entity_load('taxonomy_term', FALSE, ['vid' => 4]);
  if (!empty($terms)) {
    foreach ($terms as $id => $term) {
      $all_attributes[] = [
        'tid' => $term->tid,
        'name' => $term->name,
      ];
    }
    return [
      'data' => $all_attributes,
      'status' => TRUE,
      'code' => 200,
    ];
  }
  return [
    'status' => FALSE,
    'code' => 400,
  ];
}

function _ccmaps_get_base($hall_level_tid, $attribute_id) {
  if (isset($hall_level_tid) && isset($attribute_id)) {
    $query = new EntityFieldQuery();
    $query->entityCondition('entity_type', 'node')
      ->entityCondition('bundle', 'hall')
      ->fieldCondition('field_type_hall', 'tid', $hall_level_tid)
      ->fieldCondition('field_attributes', 'tid', $attribute_id);
    $result = $query->execute();
    if (isset($result['node'])) {
      $base_nid = array_keys($result['node']);
      $bases = entity_load('node', $base_nid);
    }
    foreach ($bases as $id => $base) {
      $views_count = $base->field_views_count['und'][0]['value'];
      $filter_base[] = [
        'nid' => $base->nid,
        'title' => $base->title,
        'image' => file_create_url($base->field_images['und'][0]['uri']),
        'views' => $views_count,
        'downloads' => intval($base->field_downloads['und'][0]['value']),
        'likes' => (intval($base->field_likes_count['und'][0]['value'])),
        'link_downloads' => node_load(29)->field_mo_ta_slider['und'][0]['value'],
      ];
    }
    return [
      'data' => $filter_base,
      'status' => TRUE,
      'code' => 200,
    ];
  }
  elseif (!isset($hall_level_tid) && !isset($attribute_id)) {
    return [
      'status' => FALSE,
      'code' => 400,
    ];
  }
  else {
    if (isset($hall_level_tid)) {
      $query = new EntityFieldQuery();
      $query->entityCondition('entity_type', 'node')
        ->entityCondition('bundle', 'hall')
        ->fieldCondition('field_type_hall', 'tid', $hall_level_tid);
      $result = $query->execute();
      if (isset($result['node'])) {
        $base_nids = array_keys($result['node']);
        $bases = entity_load('node', $base_nids);
      }
      foreach ($bases as $id => $base) {
        $views_count = $base->field_views_count['und'][0]['value'];
        $filter_base[] = [
          'nid' => $base->nid,
          'title' => $base->title,
          'image' => file_create_url($base->field_images['und'][0]['uri']),
          'views' => $views_count,
          'downloads' => intval($base->field_downloads['und'][0]['value']),
          'likes' => (intval($base->field_likes_count['und'][0]['value'])),
          'link_downloads' => node_load(29)->field_mo_ta_slider['und'][0]['value'],
        ];
      }
      return [
        'data' => $filter_base,
        'status' => TRUE,
        'code' => 200,
      ];
    }
    else {
      return [
        'status' => FALSE,
        'code' => 400,
      ];
    }
  }
}

function _ccmaps_base_retrieve($nid) {
  $base = node_load($nid);
  if ($base->type == 'hall') {
    // update views count + 1
    $wrapper = entity_metadata_wrapper('node', $nid);
    $var = $wrapper->field_views_count->value() + 1;
    $wrapper->field_views_count->set($var);
    $wrapper->save();

    $views_count = $base->field_views_count['und'][0]['value'];
    return [
      'data' => [
        'nid' => $base->nid,
        'title' => $base->title,
        'image' => file_create_url($base->field_images['und'][0]['uri']),
        'views' => $views_count,
        'downloads' => intval($base->field_downloads['und'][0]['value']),
        'likes' => (intval($base->field_likes_count['und'][0]['value'])),
        'link_downloads' => (node_load(29)->field_mo_ta_slider['und'][0]['value']),
      ],
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    return [
      'status' => FALSE,
      'code' => 400,
    ];
  }
}

function _base_resource_like_update($nid) {
  $base = node_load($nid);
  if ($base->type == 'hall') {
    $wrapper = entity_metadata_wrapper('node', $nid);
    $var = $wrapper->field_likes_count->value() + 1;
    $wrapper->field_likes_count->set($var);
    $wrapper->save();
    return [
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    return [
      'status' => FALSE,
      'code' => 400,
    ];
  }
}

function _base_resource_download_update($nid) {
  try {
    $base = node_load($nid);
    $base->field_downloads['und'][0]['value']++;
    node_save($base);
    return [
      'status' => TRUE,
      'code' => 200,
    ];
  }
  catch (Exception $e) {
    // Do your error handling here.
    return [
      'status' => FALSE,
      'code' => 400,
    ];
  }
}

//function _ccmaps_get_base_topmap($hall_level_tid = 'null', $attribute_tid = 'null') {
//  $op_hall_level = '!=';
//  $op_attributes = '!=';
//  if (!is_null($hall_level_tid)){
//    $op_hall_level = '=';
//  }
//  if (!is_null($attribute_tid)){
//    $op_attributes = '=';
//  }
//  $q = new EntityFieldQuery;
//  $q->entityCondition('entity_type', 'node')
//    ->entityCondition('bundle', 'hall')
//    ->fieldCondition('field_attributes', 'tid', "$attribute_tid",$op_attributes)
//    ->fieldCondition('field_type_hall', 'tid', "$hall_level_tid",$op_hall_level)
//    ->fieldOrderBy('field_downloads', 'value', 'DESC');
//  $result = $q->execute();
//  if (isset($result['node'])) {
//    $base_nids = array_keys($result['node']);
//    $bases = entity_load('node', $base_nids);
//  }
//  foreach ($bases as $id => $base){
//    $views_count = intval(strip_tags(views_embed_view('api_node_view_count','block_node_view_count_api',$base->nid)));
//    $filter_base[] = array(
//      'nid' => $base->nid,
//      'title' => $base->title,
//      'image' => file_create_url($base->field_images['und'][0]['uri']),
//      'views' => $views_count,
//      'downloads' => intval($base->field_downloads['und'][0]['value']),
//      'link_downloads' => node_load(29)->field_mo_ta_slider['und'][0]['value'],
//    );
//  }
//  return array(
//    'data' => $filter_base,
//    'status' => TRUE,
//    'code' => 200,
//  );
//}
function _ccmaps_get_base_topmap() {
  $terms = taxonomy_get_children(1);
  if (!empty($terms)) {
    foreach ($terms as $id => $term) {
      $all_halls[] = [
        'tid' => $term->tid,
        'name' => $term->name,
        'image' => file_create_url(reset($term->field_image)['0']['uri']),
      ];
    }
    return [
      'data' => $all_halls,
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    return [
      'status' => FALSE,
      'code' => 400,
    ];
  }
}

function _ccmaps_get_config_block($tid) {
  if ($tid != 0) {
    $q = new EntityFieldQuery();
    $q->entityCondition('entity_type', 'node')
      ->entityCondition('bundle', 'config_block')
      ->fieldCondition('field_tags', 'tid', $tid)
      ->propertyOrderBy('created', 'ASC');
    $result = $q->execute();
    if (isset($result['node'])) {
      $base_nids = array_keys($result['node']);
      $bases = entity_load('node', $base_nids);
    }
    foreach ($bases as $id => $base) {
      $filter_base[] = [
        'nid' => $base->nid,
        'title' => $base->title,
        'image' => file_create_url(reset($base->field_image)['0']['uri']),
      ];
    }
    return [
      'data' => $filter_base,
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    $q = new EntityFieldQuery();
    $q->entityCondition('entity_type', 'node')
      ->entityCondition('bundle', 'config_block')
      ->fieldCondition('field_tags', 'tid', 26)
      ->propertyOrderBy('created', 'ASC');
    $result = $q->execute();
    if (isset($result['node'])) {
      $base_nids = array_keys($result['node']);
      $bases = entity_load('node', $base_nids);
    }
    foreach ($bases as $id => $base) {
      $filter_base[] = [
        'nid' => $base->nid,
        'title' => $base->title,
        'image' => file_create_url(reset($base->field_image)['0']['uri']),
      ];
    }
    return [
      'data' => $filter_base,
      'status' => TRUE,
      'code' => 200,
    ];
  }
}

function _ccmaps_get_base_funny_map() {
  $q = new EntityFieldQuery();
  $q->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'hall')
    ->fieldCondition('field_attributes', 'tid', '11')
    ->propertyOrderBy('created', 'DESC');
  $result = $q->execute();
  if (isset($result['node'])) {
    //update views count + 1

    $base_nids = array_keys($result['node']);
    $bases = entity_load('node', $base_nids);
    foreach ($bases as $id => $base) {
      $views_count = intval(strip_tags(views_embed_view('api_node_view_count', 'block_node_view_count_api', $base->nid)));
      $filter_base[] = [
        'nid' => $base->nid,
        'title' => $base->title,
        'image' => file_create_url($base->field_images['und'][0]['uri']),
        'views' => $views_count,
        'downloads' => intval($base->field_downloads['und'][0]['value']),
        'likes' => intval($base->field_likes_count['und'][0]['value']),
        'link_downloads' => node_load(29)->field_mo_ta_slider['und'][0]['value'],
      ];
    }
  }
  return [
    'data' => $filter_base,
    'status' => TRUE,
    'code' => 200,
  ];
}

function _ccmaps_troops_combo() {
  $combos = node_load_multiple([], ['type' => 'troops_combo']);
  foreach ($combos as $id => $combo) {
    $filter_combo[] = [
      'nid' => $combo->nid,
      'title' => $combo->title,
      'body' => strip_tags($combo->body['und'][0]['value']),
      'link_video' => $combo->field_link['und'][0]['value'],
    ];
  }
  return [
    'data' => $filter_combo,
    'status' => TRUE,
    'code' => 200,
  ];
}

function _ccmaps_troops_combo_retrieve($nid) {
  $combo = node_load($nid);
  if ($combo->type == 'troops_combo') {
    return [
      'data' => [
        'nid' => $combo->nid,
        'title' => $combo->title,
        'body' => strip_tags($combo->body['und'][0]['value']),
        'link_video' => $combo->field_link['und'][0]['value'],
      ],
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    return [
      'status' => FALSE,
      'code' => 400,
    ];
  }
}

function _ccmaps_builder_base() {
  $terms = taxonomy_get_children(2);
  if (!empty($terms)) {
    foreach ($terms as $id => $term) {
      $all_halls[] = [
        'tid' => $term->tid,
        'name' => $term->name,
        'image' => file_create_url(reset($term->field_image)['0']['uri']),
      ];
    }
    return [
      'data' => $all_halls,
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    return [
      'status' => FALSE,
      'code' => 400,
    ];
  }
}

function _ccmaps_gems_tip_index() {
  $q = new EntityFieldQuery();
  $q->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'bai_viet')
    ->fieldCondition('field_chuyen_muc', 'tid', 29)
    ->propertyOrderBy('created', 'ASC');
  $result = $q->execute();
  if (isset($result['node'])) {
    $gems_tip_nids = array_keys($result['node']);
    $gems_tips = entity_load('node', $gems_tip_nids);
  }
  foreach ($gems_tips as $id => $gems_tip) {
    $filter_gems_tip[] = [
      'nid' => $gems_tip->nid,
      'title' => $gems_tip->title,
      'image' => !empty($gems_tip->field_image) ? file_create_url($gems_tip->field_image['und'][0]['uri']) : 'https://cocbuilders.com/sites/default/files/default_images/unnamed_1_0.png',
    ];
  }
  return [
    'data' => $filter_gems_tip,
    'status' => TRUE,
    'code' => 200,
  ];
}

function _ccmaps_gems_tip_retrieve($nid) {
  $gems_tip = node_load($nid);
  if ($gems_tip->type == 'bai_viet') {
    // update views count + 1
    return [
      'data' => [
        'nid' => $gems_tip->nid,
        'title' => $gems_tip->title,
        'body' => strip_tags($gems_tip->body['und'][0]['value']),
      ],
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    return [
      'status' => FALSE,
      'code' => 400,
    ];
  }
}

function _ccmaps_time_to_gem($minutes = 0, $hours = 0, $days = 0) {
  // Assuming you're receiving values for days, hours, minutes, seconds via POST or some other method
  $seconds = 0;
  $ranges = [60, 3600, 86400, 604800];
  $gems = [1, 20, 260, 1000];
  $result = 0;
  $seconds = $seconds + $minutes * 60 + $hours * 3600 + $days * 86400;

  if ($seconds < 0) {
    $result = 0;
  }
  else {
    if ($seconds == 0) {
      $result = 0;
    }
    else {
      if ($seconds <= $ranges[0]) {
        $result = 1;
      }
      else {
        if ($seconds <= $ranges[1]) {
          $result = floor(($seconds - $ranges[0]) / (($ranges[1] - $ranges[0]) / ($gems[1] - $gems[0])) + $gems[0]);
        }
        else {
          if ($seconds <= $ranges[2]) {
            $result = floor(($seconds - $ranges[1]) / (($ranges[2] - $ranges[1]) / ($gems[2] - $gems[1])) + $gems[1]);
          }
          else {
            $result = floor(($seconds - $ranges[2]) / (($ranges[3] - $ranges[2]) / ($gems[3] - $gems[2])) + $gems[2]);
          }
        }
      }
    }
  }

  // In PHP, you'll likely want to return the result or echo it in a format suitable for your application
  // Instead of directly manipulating the DOM like in JavaScript
  if ($result != 1) {
    $output = $result;
  }
  else {
    $output = $result;
  }

  return [
    'data' => $result,
    'status' => TRUE,
    'code' => 200,
  ];
}

function doCalcResourceToGems($resources) {
  $ranges = [100, 1000, 10000, 100000, 1000000, 10000000];
  $gems = [1, 5, 25, 125, 600, 3000];
  $storagemax = (5250000 * 4) + 2000000;
  $base = 1;
  if (is_nan($resources)) {
    return 0;
  }
  else {
    if ($resources < 0) {
      return 0;
    }
    else {
      if ($resources == 0) {
        return 0;
      }
      else {
        if ($resources <= $ranges[0]) {
          return $gems[0];
        }
      }
    }
  }

  for ($i = 1; $i < count($ranges) - 1; $i++) {
    if ($resources <= $ranges[$i]) {
      return round(((($resources - $ranges[$i - 1]) / (($ranges[$i] - $ranges[$i - 1]) / ($gems[$i] - $gems[$i - 1]))) + $gems[$i - 1]) * $base);
    }
  }

  if ($resources <= $storagemax) {
    return round(((($resources - $ranges[count($ranges) - 2]) / (($ranges[count($ranges) - 1] - $ranges[count($ranges) - 2]) / ($gems[count($gems) - 1] - $gems[count($gems) - 2]))) + $gems[count($gems) - 2]) * $base);
  }
  else {
    return doCalcResourceToGems($resources % $storagemax) + floor($resources / $storagemax) * doCalcResourceToGems($storagemax);
  }

  return 0;
}

function _ccmaps_gold_to_gem($resources) {
  $ranges = [100, 1000, 10000, 100000, 1000000, 10000000];
  $gems = [1, 5, 25, 125, 600, 3000];
  $storagemax = (5250000 * 4) + 2000000;
  $base = 1;
  $result = 0;
  if (is_nan($resources)) {
    return [
      'data' => 0,
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    if ($resources < 0) {
      return [
        'data' => 0,
        'status' => TRUE,
        'code' => 200,
      ];
    }
    else {
      if ($resources == 0) {
        return [
          'data' => 0,
          'status' => TRUE,
          'code' => 200,
        ];
      }
      else {
        if ($resources <= $ranges[0]) {
          return [
            'data' => $gems[0],
            'status' => TRUE,
            'code' => 200,
          ];
        }
      }
    }
  }

  for ($i = 1; $i < count($ranges) - 1; $i++) {
    if ($resources <= $ranges[$i]) {
      $result = round(((($resources - $ranges[$i - 1]) / (($ranges[$i] - $ranges[$i - 1]) / ($gems[$i] - $gems[$i - 1]))) + $gems[$i - 1]) * $base);
      return [
        'data' => $result,
        'status' => TRUE,
        'code' => 200,
      ];
    }
  }

  if ($resources <= $storagemax) {
    $result = round(((($resources - $ranges[count($ranges) - 2]) / (($ranges[count($ranges) - 1] - $ranges[count($ranges) - 2]) / ($gems[count($gems) - 1] - $gems[count($gems) - 2]))) + $gems[count($gems) - 2]) * $base);
    return [
      'data' => $result,
      'status' => TRUE,
      'code' => 200,
    ];
  }
  else {
    $result = doCalcResourceToGems($resources % $storagemax) + floor($resources / $storagemax) * doCalcResourceToGems($storagemax);
    return [
      'data' => $result,
      'status' => TRUE,
      'code' => 200,
    ];
  }
}

function doCalcDarkElixirToGems($resources) {
  $ranges = [1, 10, 100, 1000, 10000, 100000];
  $gems = [1, 5, 25, 125, 600, 3000];
  $storagemax = 360000 + 20000;

  if (is_nan($resources)) {
    return 0;
  }
  else {
    if ($resources < 0) {
      return 0;
    }
    else {
      if ($resources == 0) {
        return 0;
      }
      else {
        if ($resources <= $ranges[0]) {
          return $gems[0];
        }
      }
    }
  }

  for ($i = 1; $i < count($ranges) - 1; $i++) {
    if ($resources <= $ranges[$i]) {
      return round(($resources - $ranges[$i - 1]) / (($ranges[$i] - $ranges[$i - 1]) / ($gems[$i] - $gems[$i - 1])) + $gems[$i - 1]);
    }
  }

  if ($resources <= $storagemax) {
    return round(($resources - $ranges[count($ranges) - 2]) / (($ranges[count($ranges) - 1] - $ranges[count($ranges) - 2]) / ($gems[count($gems) - 1] - $gems[count($gems) - 2])) + $gems[count($gems) - 2]);
  }
  else {
    return doCalcDarkElixirToGems($resources % $storagemax) + floor($resources / $storagemax) * doCalcDarkElixirToGems($storagemax);
  }

  return 0;
}

function _ccmaps_dark_elixir_to_gem($resources) {
  // Assuming you're receiving the 'de_input_' value via POST or some other method
  $result = doCalcDarkElixirToGems($resources);
  return [
    'data' => $result,
    'status' => TRUE,
    'code' => 200,
  ];
}

function gemsToUSD($gems) {
  // 1. Base Prices: Define an array or associative array with the base prices of Gem packages in your region
  $gemPackages = [
    80 => 0.99,  // Pocketful of Gems
    500 => 4.99,  // Pile of Gems
    1200 => 9.99, // Bag of Gems
    2500 => 19.99, // Sack of Gems
    6500 => 49.99, // Box of Gems
    14000 => 99.99, // Chest of Gems
  ];

  // 2. Check for Special Offers (Hypothetical - Replace with actual logic if possible)
  // Assume a 20% discount on the 'Box of Gems' package
  if (/* condition to check if the offer is active */ TRUE) {
    $gemPackages[6500] *= 0.8; // Apply the 20% discount
  }

  // 3. Calculate USD Value
  $usdValue = 0;
  foreach ($gemPackages as $gemAmount => $usdPrice) {
    while ($gems >= $gemAmount) {
      $usdValue += $usdPrice;
      $gems -= $gemAmount;
    }
  }

  // 4. Handle Leftover Gems
  if ($gems > 0) {
    $smallestGemPackage = min(array_keys($gemPackages));
    $pricePerGem = $gemPackages[$smallestGemPackage] / $smallestGemPackage;
    $leftoverValue = $gems * $pricePerGem;
    $usdValue += $leftoverValue;
  }

  return $usdValue;
}

function _ccmaps_gem_to_usd($gems) {
  $usdValue = gemsToUSD($gems);
  return array(
    'data' => $usdValue,
    'status' => TRUE,
    'code' => 200,
  );
}

function calculateEXP($level) {
  // Check if level is valid
  if ($level == 0) {
    return 0;
  }
  else {
    if ($level <= 200) {
      $xp = ($level - 1) * 50;
      return $xp;
    }
    else {
      if ($level >= 201 && $level <= 299) {
        $xp = ($level - 200) * 500 + 9500;
      }
      else {
        if ($level >= 300) {
          $xp = ($level - 300) * 1000 + 60000;
        }
      }
    }
  }
  return $xp;
}
function _ccmaps_xp_each_level($level) {
  $result = calculateEXP($level);
  return array(
    'data' => $result,
    'status' => TRUE,
    'code' => 200,
  );
}
function calculateTotalEXP($level) {
  // Check if level is valid
  if ($level == 0) {
    return 0;
  }
  else if ($level <= 201) {
    // Formula: (a - 1) * (a - 2) * 25 + 30
    $xp = ($level - 1) * ($level - 2) * 25 + 30;
  }
  else if ($level >= 202 && $level <= 299) {
    // Formula: 250 * (a - 200) ^ 2 + 9250 * (a - 200) + 985530
    $xp = 250 * pow(($level - 200), 2) + 9250 * ($level - 200) + 985530;
  }
  else if ($level >= 299) {
    // Formula: 500 * (a - 300) ^ 2 + 59500 * (a - 300) + 4410530
    $xp = 500 * pow(($level - 300), 2) + 59500 * ($level - 300) + 4410530;
  }
  return $xp;
}
function _ccmaps_total_xp_level($level) {
  $result = calculateTotalEXP($level);
  return array(
    'data' => $result,
    'status' => TRUE,
    'code' => 200,
  );
}
