<html>
<body>
    <h2>Your password has been changed.</h2>
<br>
<?php
// Example LDAP_URL: "ldap://ldap.acme.com"
define("LDAP_URL", "ldap://ldap.acme.com");
// Example UID_POSTFIX: ",ou=people,dc=acme,dc=com" (note, the comma before "ou=" is important!)
define("UID_POSTFIX", ",ou=people,dc=acme,dc=com");
$command = 'ldappasswd -H "'.LDAP_URL.'" -D "uid='.$_POST["login"].''.UID_POSTFIX.'" -w \''.$_POST["oldpass"].'\' -a \''.$_POST["oldpass"].'\' -s \''.$_POST["newpass"].'\'';
exec($command);
?>
</body>
</html>