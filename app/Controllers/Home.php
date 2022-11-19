<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $data = [
            'test' => 'Anjay!'
        ];
        return $this->respond($data, 200);
    }
}
