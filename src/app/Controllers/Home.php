<?php

namespace App\Controllers;
use App\Models\StudentModel;

class Home extends BaseController
{
    public function index(): string
    {
        $studentModel = new StudentModel();
        $data['results'] = $studentModel->findAll();

        // $db = \Config\Database::connect();
        // $result = $db->query('select * from student');

        // $db = \Config\Database::connect("default");
        // $result = $db->query('select * from student');
        print_r($data['results']);

        return view('welcome_message', $data);
    }
}
