<?php
use CRM_Postinstall_ExtensionUtil as E;

/**
 * JvTasks.Postinstall API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/api-architecture/
 */
function _civicrm_api3_jv_tasks_Postinstall_spec(&$spec) {

}

/**
 * JvTasks.Postinstall API
 *
 * @param array $params
 *
 * @return array
 *   API result descriptor
 *
 * @see civicrm_api3_create_success
 *
 * @throws API_Exception
 */
function civicrm_api3_jv_tasks_Postinstall($params) {
  $helper = new CRM_Postinstall_Helper();
  $helper -> setComponents();
  $helper-> setCiviCasePermissions();
  $helper-> setGDPRPermissions();
  return civicrm_api3_create_success($returnValues, $params, 'JvTasks', 'Postinstall');
}
