<?php

namespace App\controllers;

use App\models\Product;

class ApplicationController
{
    public function productAction()
    {
        $model = new Product();
        $data = $model->getProducts($_GET['type']);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }
}