<?php

namespace App\Models;

use CodeIgniter\Model;

class CGCategoriaModel extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'categoriaID';
    protected $allowedFields = ['categoriaNombre'];

    public function getTotalPorCategoriasCG()
{
    try {
        // Cambiar a la segunda base de datos
        //$db = \Config\Database::connect('otherDataBase');
        $otherDB = $otherDB = \Config\Database::connect('otherDataBase');
        $builder = $otherDB->table("productos"); 

        $builder->select('categoriaNombre, SUM(stock) as total');
        $builder->join('categorias', 'categorias.categoriaID = productos.IDcategoria'); 
        $builder->groupBy('categoriaNombre'); 
        
        $query = $builder->get();
        return $query->getResultArray();
    } catch (\Exception $e) {
        log_message('error', 'Error en la consulta de categorías en el Modelo: ' . $e->getMessage());
        return [['red'], [1]];
    }
}

}
