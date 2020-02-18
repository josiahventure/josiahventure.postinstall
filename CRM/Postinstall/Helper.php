<?php

class CRM_Postinstall_Helper {

  /**
   * CRM_Postinstall_Helper constructor.
   */
  public function __construct() {
  }


  /**
   * Disables the module CiviPlegde (#6042)
   * @throws \CiviCRM_API3_Exception
   */
  public function setComponents(){
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

  /**
   * Install missing CiviCase permissions (#6044)
   */
  public function setCiviCasePermissions(){
    $role = user_role_load_by_name('administrator');
    user_role_grant_permissions($role->rid,[
        'administer CiviCase',
        'access all cases and activities',
        'access my cases and activities',
        'add cases',
        'basic case information',
        'delete in CiviCase'
      ]);


  }

}
