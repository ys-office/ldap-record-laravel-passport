#! /bin/sh

ldapsearch -D 'cn=Manager,dc=example,dc=com' -w 123456 -b 'ou=People,dc=example,dc=com' -LLL
