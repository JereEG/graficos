<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomersModel extends Model
{
    protected $table      = 'customers';
    protected $primaryKey = 'CustomerID';

    protected $allowedFields = ['CustomerID', 'CompanyName', 'ContactName', 'ContactTitle', 'Address', 'City', 'Region', 'PostalCode', 'Country', 'Phone', 'Fax'];

    public function getCustomers()
    {
         try {
             $builder = $this->db->table("customers");

            $builder->select('Country, COUNT(Country) as CustomerCount');
            $builder->groupBy('Country');

            $query = $builder->get();
            return $query->getResultArray();
         } catch (\Exception $e) {
   
            log_message('error', 'Error en la consulta de categorías: ' . $e->getMessage());
            return [['red'], [1]];
        }
    }
}