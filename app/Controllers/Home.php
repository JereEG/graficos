<?php

namespace App\Controllers;
use App\Models\Categoria_model;
use App\Models\CustomersModel;
use App\Models\CGCategoriaModel;
use App\Models\CGEmpleadoModel;

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

             /*log_message('info', 'Respuesta del servidor: ' . json_encode($categorias));*/


            return json_encode($categorias);
        } catch (\Exception $e) {
            var_dump($e);
            header("HTTP/1.1 500 Internal Server Error");
            return json_encode(['error' => 'Error interno del servidor']);
        }
    }
    public function graficarClientes()
    {
        try {
            $cat = new CustomersModel();
           
            $customets = $cat->getCustomers();

             //log_message('info', 'Respuesta del servidor: \n\n\n' . json_encode($customets));


            return json_encode($customets);
        } catch (\Exception $e) {
            var_dump($e);
            header("HTTP/1.1 500 Internal Server Error");
            return json_encode(['error' => 'Error interno del servidor']);
        }
    }
     public function getTotalPorCategoriasCG()
    {
        try {
            $cat = new CGCategoriaModel();
           
            $totalPorCategoria = $cat->getTotalPorCategoriasCG();

             log_message('info', 'Respuesta del servidor: ' . json_encode($totalPorCategoria));


            return json_encode($totalPorCategoria);
        } catch (\Exception $e) {
            var_dump($e);
            header("HTTP/1.1 500 Internal Server Error");
            return json_encode(['error' => 'Error interno del servidor']);
        }
    }
    public function getVentasPorEmpleado()
{
    try {
        $cat = new CGEmpleadoModel();
        $totalPorEmpleado = $cat->getVentasPorEmpleadoCG();

        // Solo envía el JSON y evita los mensajes de log
        header('Content-Type: application/json');
        echo json_encode($totalPorEmpleado);
    } catch (\Exception $e) {
        // Loguear el error
        log_message('error', 'Error en getVentasPorEmpleado: ' . $e->getMessage());

        // Configurar el tipo de contenido y devolver un JSON de error
        header('Content-Type: application/json', true, 500);
        echo json_encode(['error' => 'Error interno del servidor']);
    }
}

 
}
