<?php 

class Employee 
{
    /**
     * index action
     */
    public function index() {
        // create the model object
        include "model/employees.php";
        $employeesModel = new Employees();

        // get info for the view
        $employees = $employeesModel->getEmployees();

        // include the view
        include "view/employee.php";
    } 

    /**
     * submit action
     */
    public function submit() {
        echo "my submit page";
    }
}
