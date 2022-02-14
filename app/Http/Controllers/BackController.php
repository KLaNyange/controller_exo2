<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    function back (){
        $backs = [
            (object)['nom' => 'Naruto', 'fonction' => 'stack laravel', 'src' => 'img/back/naruto.png'],
            (object)['nom' => 'Sasuke', 'fonction' => 'stack laravel', 'src' => 'img/back/sasuke.jpeg'],
            (object)['nom' => 'Sakura', 'fonction' => 'stack laravel', 'src' => 'img/back/sakura.jpeg'],
            (object)['nom' => 'Kakashi', 'fonction' => 'stack laravel', 'src' => 'img/back/kakashi.png'],
        ];
        return view("team.web.dev.backend", compact("backs"));
    }
}
