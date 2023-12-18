<?php

namespace App\Models;

use CodeIgniter\Model;

class CGProductoModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'productoID';
    protected $allowedFields = ['nombreproducto', 'IDcategoria', 'precio', 'stock'];
}
