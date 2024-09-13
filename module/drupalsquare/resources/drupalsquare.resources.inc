<?php
function _drupalsquare_resource_access() {
  return true;
}
function _drupalsquare_resource_retrieve($uid) {
  $account = user_load($uid);
  if (isset($account->data['check_in'])){
    return array(
      'uid' => $account->uid,
      'name' => $account->name,
      'last_checkin' => $account->data['check_in'],
    );
  }else{
    return FALSE;
  }
}

function _drupalsquare_resource_checkin($uid,$date = null) {
  $account = user_load($uid);
  $account->data['check_in'] = is_null($date) ? REQUEST_TIME : $date;
  user_save($account);
  return 'luu thanh cong';
}

