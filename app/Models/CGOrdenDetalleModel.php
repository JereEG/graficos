<?php

namespace App\Models;

use CodeIgniter\Model;

class CGOrdenDetalleModel extends Model
{
    protected $table = 'ordendetalle';
    protected $primaryKey = ['IDorden', 'IDproducto'];
    protected $allowedFields = ['precio', 'cantidad'];

     public function getVentasPorAñosCG()
{
    try {
        // Cambiar a la segunda base de datos
        $otherDB = \Config\Database::connect('otherDataBase');
        $builder = $otherDB->table("ordendetalle");
        $builder->select("orden.anioVenta as anio, SUM(ordendetalle.precio * ordendetalle.cantidad) as total");
        $builder->join("orden", "orden.OrderID = ordendetalle.IDorden");
        $builder->join("productos", "productos.productoID = ordendetalle.IDproducto");
        $builder->groupBy("orden.anioVenta");


        $query = $builder->get();
        return $query->getResultArray();
    } catch (\Exception $e) {
        log_message('error', 'Error en la consulta de categorías en el Modelo: ' . $e->getMessage());
        return [['errorEnConsulta'], [1]];
    }
}
}
