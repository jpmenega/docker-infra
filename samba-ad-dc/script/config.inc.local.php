<?php
$keyphrase = "secret";
$ldap_binddn = "cn=manager,dc=example,dc=com";
$ldap_bindpw = "secret";
$ldap_base = "dc=example,dc=com";

$ldap_login_attribute = "cn";
$ldap_filter = "(&(objectClass=person)($ldap_login_attribute={login}))";
$ad_mode = true;
$ad_options['force_unlock'] = true;
$ad_options['change_expired_password'] = true;
$who_change_password = "manager";
$use_questions = false;
$use_sms = false;
$lang = "pt-BR";

$mail_address_use_ldap = true;
$notify_on_change = true;
$mail_smtp_auth = true;

$mail_from = "admin@example.com";
$mail_from_name = "Self Service Password";
$mail_smtp_host = 'localhost';
$mail_smtp_user = '';
$mail_smtp_pass = '';
$mail_smtp_port = 25;

$background_image = "images/unsplash-sky.jpeg"
?>
