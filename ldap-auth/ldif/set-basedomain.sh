#! /bin/sh

ldapadd -H ldapi:/// -x -D cn=Manager,dc=example,dc=com -W -f ./set-basedomain.ldif
