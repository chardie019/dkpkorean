<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['UPDCHECK_BOX'])) ? $this->_tpldata['.'][0]['UPDCHECK_BOX'] : '') . '
if ($this->_tpldata['.'][0]['IS_PLUS_VERSION']) { 
echo '
} else {
echo '
}
echo '
if ($this->_tpldata['.'][0]['CMAPI_AVAILABLE']) { 
echo '
} else if ($this->_tpldata['.'][0]['CMAPI_TO_OLD']) { 
echo '
} else {
echo '
}
echo '
if ($this->_tpldata['.'][0]['SHOW_CLASSCOLOR']) { 
echo '
$_classes_count = (isset($this->_tpldata['classes.'])) ?  sizeof($this->_tpldata['classes.']) : 0;
if ($_classes_count) {
for ($_classes_i = 0; $_classes_i < $_classes_count; $_classes_i++)
{
echo '
// END classes
echo '
}
echo '
$_roles_count = (isset($this->_tpldata['roles.'])) ?  sizeof($this->_tpldata['roles.']) : 0;
if ($_roles_count) {
for ($_roles_i = 0; $_roles_i < $_roles_count; $_roles_i++)
{
echo '
// END roles
echo '
}
?>