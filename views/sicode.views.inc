<?php
// $Id: sicode.views.inc,v 1.0 2012/08/06 10:00:00 by albert $

/**
 * Implements hook_views_data().
 */
function sicode_views_data() {
  $data = array();
  // set views group as a prefix in the UI
  $data['sicode']['table']['group'] = t('Signup Code');
  // join regcode's table
  $data['sicode']['table']['join'] = array(
    'regcode' => array(
      'left_field' => 'code',
      'field' => 'code',
    ),
  );
  // provide sicode table's field
  $data['sicode']['id'] = array(
    'title' => t('Signup Code ID'),
    'help' => t('The unique index for the sicode'),
    'field' => array(
      'handler' => 'views_handler_field_numeric',
      'click sortable' => TRUE,
     ),
    'filter' => array(
      'handler' => 'views_handler_filter_numeric',
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
  );
  $data['sicode']['sid'] = array(
    'title' => t('SID'),
    'help' => t('The unique index for the sicode'),
    'field' => array(
      'handler' => 'views_handler_field_numeric',
      'click sortable' => TRUE,
     ),
    'filter' => array(
      'handler' => 'views_handler_filter_numeric',
    ),
    'sort' => array(
      'handler' => 'views_handler_sort',
    ),
  );
  // Sicode Owner
  $data['sicode_owner']['table']['group'] = t('Signup Code Owner');
  $data['sicode_owner']['table']['join'] = array(
    'regcode' => array(
      'left_field' => 'code',
      'field' => 'code',
    ),
  );
  $data['sicode_owner']['uid'] = array(
    'title' => t('User'),
    'help' => t('The user who is Signup code owner.'),
    'relationship' => array(
      'base' => 'users',
      'handler' => 'views_handler_relationship',
      'label' => t('Sicode owner'),
    ),
  );

  return $data;
}
