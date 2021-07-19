<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Adldap\Laravel\Facades\Adldap;

class ldapController extends Controller
{
    //

    public function index()
    {
        $user = Adldap::search()->users()->find('Said');
        // $user = Adldap::make()->user([
        //     'cn' => 'John Doe',
        // ]);
        // $user->cn = 'Jane Doe';

        // // Saving a user:
        // $user->save();
        dd($user);
    }
}
