<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    function partnership(){
        return view("infos.contact.partenariat");
    }
}
