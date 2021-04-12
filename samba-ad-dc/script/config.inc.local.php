<?php
$keyphrase = "secret";
$ldap_binddn = "cn=manager,dc=example,dc=com";
$ldap_bindpw = "secret";
$ldap_base = "dc=example,dc=com";

$ldap_login_attribute = "cn";
$ad_mode = true;
$ad_options['force_unlock'] = true;
$ad_options['change_expired_password'] = true;
$who_change_password = "manager";

?>
