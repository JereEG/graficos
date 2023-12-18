<?php

namespace App\Models;

use CodeIgniter\Model;

class CGOrdenDetalleModel extends Model
{
    protected $table = 'ordendetalle';
    protected $primaryKey = ['IDorden', 'IDproducto'];
    protected $allowedFields = ['precio', 'cantidad'];
}
