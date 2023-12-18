<?php

namespace App\Models;

use CodeIgniter\Model;

class CGClienteModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'clienteID';
    protected $allowedFields = ['direccion', 'pais', 'ciudad'];
}
