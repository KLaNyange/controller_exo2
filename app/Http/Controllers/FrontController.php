<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function front (){
        $fronts = [
            (object)['nom' => 'Yuji Itadori', 'fonction' => 'stack react', 'src' => 'img/front/yuji.png'],
            (object)['nom' => 'Megumi fushigoro', 'fonction' => 'stack react', 'src' => 'img/front/megumi.png'],
            (object)['nom' => 'Gojo Satoru', 'fonction' => 'stack react', 'src' => 'img/front/gojo.jpeg'],
            (object)['nom' => 'Mechamaru', 'fonction' => 'stack react', 'src' => 'img/front/mechamaru.png'],
            (object)['nom' => 'Nanami', 'fonction' => 'stack react', 'src' => 'img/front/nanami.png'],
        ];
        return view("team.web.dev.frontend", compact("fronts"));
    }
}
