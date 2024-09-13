<?php
function housing_schemes_services_resource() {
  $api = array(
    'housing_schemes' => array(
      'operations' => array(
        'retrieve' => array(
          'help' => 'Retrieves housing schemes info.',
          'file' => array(
            'type' => 'inc',
            'module' => 'housing_schemes_services',
            'name' => 'includes/housing_schemes.services',
          ),
          'callback' => 'housing_schemes_services_resource_retrieve',
          'access callback' => 'user_access',
          'access arguments' => array('access content'),
          'access arguments append' => FALSE,
          'args' => array(
            array(
              'name' => 'nid',
              'type' => 'int',
              'description' => 'Function to perform',
              'source' => array(
                'path' => '0'
              ),
              'optional' => TRUE,
              'default' => '0',
            ),
          ),
        ),
      ),
    ),
  );

  return $api;
}
/**
 * [housing_schemes_services_resource_retrieve] definition.
 * Returns the information about a housing scheme.
 * @param $nid
 *   The nid of the housing_scheme node.
 * @return array
 *	The node processed information array.
 */
function housing_schemes_services_resource_retrieve($nid) {
  $node = node_load($nid);
  //Check if the node type is housing schemes.
  if ($node->type == 'housing_schemes') {
    //Get PROPERTY DESCRIPTION data from field collection.
    $property_description = $node->field_property_description['vi'][0]['value'];
    // here we are loading field collection
    $pd_item = field_collection_item_load($property_description);

    //getting field collection item value.
    $pd_item_values = array(
      'scheme_type' => $pd_item->field_scheme_type['vi'][0]['value'],
      'area' => $pd_item->field_area['vi'][0]['value'],
      'property_type' => $pd_item->field_property_type['vi'][0]['value'],
      'budget' => $pd_item->field_budget['vi'][0]['value'],
    );

    //PROPERTY DESCRIPTION ENDS.



    //Create return object.
    $return_obj = array(
      'scheme_name' => $node->title,
      'scheme_id' => $node->nid,
      'created_date' => $node->created,
      'about_scheme'=>$node->field_about_scheme['vi'][0]['value'],
      'distance_from_the_city'=>$node->field_from_city['vi'][0]['value'],
      'nearest_major_city' => $node->field_nearest_city['vi'][0]['value'],
      'locality_review' =>$node->field_locality_review['vi'][0]['value'],
      'property_description' => $pd_item_values,
    );
  }

  return $return_obj;
}
?>
