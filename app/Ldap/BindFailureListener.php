<?php

namespace App\Ldap;

use LdapRecord\Laravel\Auth\ListensForLdapBindFailure;

class BindFailureListener
{
    use ListensForLdapBindFailure;
}
