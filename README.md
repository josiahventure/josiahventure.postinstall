# Josiah Venture Post Installation tasks

Automates a number of configuration tasks.

## How to use

The tasks can executed with an api call:
`drush cvapi JvTasks.postinstall `

## Tasks

* Disables CiviPledge (or restricts the CiviCRM modules to the following set "CiviEvent","CiviContribute","CiviMember","CiviMail","CiviReport" and "CiviCase")
* Install missing CiviCase permissions (#6044)
* Install missing GDPR permissions (#6045)
* Delete provinces (or states) from Czech Republic, Poland and Slovakia in order to replace them with regions
