<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    function info (){
        return view("infos.contact.info");
    }
}
