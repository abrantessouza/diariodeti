<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class DiarioController extends Controller{

    public function home(){

        $staticText1 = ['Ola, esse e o primeiro post', 'Esse texto e exclusivo parao teste simulando um post usando o framework
                 Laravel, e esse texto na verdade faz parte de um array em uma variavel global dentro do controller '];

        $staticText2 = ['Ola, esse e o segundo post', 'Esse texto e exclusivo parao teste simulando um post usando o framework
                 Laravel, e esse texto na verdade faz parte de um array em uma variavel global dentro do controller '];

        $staticText3 = ['Ola, esse e o terceiro post', 'Esse texto e exclusivo parao teste simulando um post usando o framework
                 Laravel, e esse texto na verdade faz parte de um array em uma variavel global dentro do controller '];

        return view("diario/index", ['texto1' => $staticText1, 'texto2' => $staticText2, 'texto3' => $staticText3] );
    }

    public function about(){

        $autor = 'Autor: Thiago Abrantes';
        $arraySkills = [ 'PHP','C#','Python','ASP.NET','JAVA'];
        return view("diario/about", ['autor' => $autor, 'skills' => $arraySkills] );

    }

}