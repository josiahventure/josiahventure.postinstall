<?php

class CRM_Postinstall_Helper {

  /**
   * CRM_Postinstall_Helper constructor.
   */
  public function __construct() {
  }

  public function setModules(){

    $enabled_components =  [
      "CiviEvent",
      "CiviContribute",
      "CiviMember",
      "CiviMail",
      "CiviReport",
      "CiviCase"
    ];

    civicrm_api3('Setting','create',[
      'enable_components'=> $enabled_components
    ]);

  }

}
