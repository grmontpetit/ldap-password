# ldap-password

## Requisites
- linux
- ldappasswd (apt-get install ldappasswd)

## About
This is a simple application to let users change their ldap password. The application is using the exec command with ldappasswd utility in linux.

## How to use
Change the constants in submit.php:
define("LDAP_URL", "ldap://ldap.acme.com");
define("UID_POSTFIX", ",ou=people,dc=acme,dc=com");
