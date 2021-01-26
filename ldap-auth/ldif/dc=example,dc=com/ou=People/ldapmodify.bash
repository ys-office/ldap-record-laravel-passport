#! /bin/bash

usage () {

  echo "Usage: ${0} <LDIF>" 2>&1

  exit 1

}

[ ${#} -eq 1 ] || usage

ldapmodify -H ldapi:/// -x -D cn=Manager,dc=example,dc=com -w 123456 -f ${1}
