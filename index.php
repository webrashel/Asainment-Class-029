<?php
    require_once './CommonCrudController.php';

    $crudObj = new CommonCrudController();

    $formData = [];
    $formData['name']     = 'Md. towhid islam';
    $formData['email']    = 'towhidislam@gmail.com';
    $formData['password'] = 'abc@123';

    

    $crudObj->select('admins', " name, email");
    echo "<pre>";
    print_r($crudObj->resultDisplay());
    echo "</pre>";