<?php

namespace App\Controllers;
use App\Models\Categoria_model;

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

    public function graficar()
    {
        try {
            $cat = new Categoria_model();
           
            $categorias = $cat->get_categorias();

             log_message('info', 'Respuesta del servidor: ' . json_encode($categorias));


            return json_encode($categorias);
        } catch (\Exception $e) {
            var_dump($e);
            header("HTTP/1.1 500 Internal Server Error");
            return json_encode(['error' => 'Error interno del servidor']);
        }
    }

 
}
