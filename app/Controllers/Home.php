<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {


        //var_dump(session());
        $data['titulo'] = 'Principal';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/principal');
        echo view('front/footer_view');


        //return view("nueva_plantilla.php");
        //return view("plantilla.php");
        //return view("principal.html");
        //return view('welcome_message');    
    }
 
}
