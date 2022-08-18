<?php
    require_once './CommonCrudController.php';

    $crudObj = new CommonCrudController();

    $formData = [];
    $formData['name']     = 'rashel rana';
    $formData['email']    = 'islamrashel131@gmail.com';
    $formData['password'] = '00001';

    

    $crudObj->select('admins', " name, email");
    echo "<pre>";
    print_r($crudObj->resultDisplay());
    echo "</pre>";