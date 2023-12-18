<?php

namespace App\Models;

use CodeIgniter\Model;

class CGEmpleadoModel extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'empleadoID';
    protected $allowedFields = ['apellido', 'nombre', 'direccion', 'pais', 'ciudad'];

  public function getVentasPorEmpleadoCG()
{
    try {
        // Cambiar a la segunda base de datos
        $otherDB = \Config\Database::connect('otherDataBase');
        $builder = $otherDB->table("empleados");

        $builder->select("CONCAT(apellido, ' ', nombre) as nombreCompleto, SUM(ordendetalle.cantidad * ordendetalle.precio) as total");
        $builder->join('orden', 'orden.IDempleado = empleados.empleadoID');
        $builder->join('ordendetalle', 'ordendetalle.IDorden = orden.OrderID');
        $builder->join('productos', 'productos.productoID = ordendetalle.IDproducto'); // Cambié el orden del JOIN
        $builder->groupBy('nombreCompleto');

        $query = $builder->get();
        return $query->getResultArray();
    } catch (\Exception $e) {
        log_message('error', 'Error en la consulta de categorías en el Modelo: ' . $e->getMessage());
        return [['errorEnConsulta'], [1]];
    }
}

}
