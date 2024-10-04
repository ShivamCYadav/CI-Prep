<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';
    protected $allowedFields = [
        'employee_id', 'employee_name', 'employee_email', 
        'employee_address', 'employee_dob', 'employee_phone_number'
    ];
}
