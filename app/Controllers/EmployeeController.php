<?php

namespace App\Controllers;

class EmployeeController extends BaseController{
    public function index()
    {
        // Check if there is a session flash message and pass it to the view
        $session = session();
        $message = $session->getFlashdata('message');

        return view('welcome_message', ['message' => $message]);
    }

    public function save()
    {
        $employeeModel = new \App\Models\EmployeeModel();
        $data = [
            'employee_id' => $this->request->getPost('employee_id'),
            'employee_name' => $this->request->getPost('employee_name'),
            'employee_email' => $this->request->getPost('employee_email'),
            'employee_address' => $this->request->getPost('employee_address'),
            'employee_dob' => $this->request->getPost('employee_dob'),
            'employee_phone_number' => $this->request->getPost('employee_phone_number')
        ];
        $employeeModel->save($data);

        // Set flashdata for success message
        $session = session();
        $session->setFlashdata('message', 'Employee data added successfully!');

        return redirect()->to('/');
    }
}
