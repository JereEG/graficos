<?php

namespace App\Models;

use CodeIgniter\Model;

class Categoria_model extends Model{

    protected $table = 'categories';
    protected $primaryKey = 'CategoryID';
    protected $allowedFields = ['CategoryName', 'Description', 'Picture'];

    public function get_categorias()
    {
         try {
            $builder = $this->db->table("products");

            $builder->select('CategoryName , sum(UnitsInStock) as total');
            $builder->join('categories', 'categories.CategoryID = products.CategoryID');
            $builder->groupBy('CategoryName');

            $query = $builder->get();
            return $query->getResultArray();
         } catch (\Exception $e) {
   
            log_message('error', 'Error en la consulta de categorías: ' . $e->getMessage());
            return [['red'], [1]];
        }
    }


    /*
    public function get_categorias(){

        $db = \Config\Database::connect();

        $builder = $this->db->table("products");

        $builder->select('CategoryName , sum(UnitsInStock) as total');

        $builder->join('categories', 'categories.CategoryID = products.CategoryID');
        
        $builder->groupBy('CategoryName');

        $query = $builder->get();
        return $query->getResultArray();

}
*/



}