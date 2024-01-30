<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
    public function index()
    {
        helper(['form']);

        $data = [];
        $data['categories'] = [
            'Student',
            'Teacher',
            'Principal'
        ];

        if ($_POST) {
            print_r($_POST);
        }

        if ($this->request->getMethod() == 'post') {
            $rules = [
                // 'email' => 'required',
                // 'rules' => 'required/valid_email',
                // 'label' => 'Email address',
                // 'errors' => [
                //     'required' => 'Email cannot be blank',
                //     'valid_email' => 'Add a valid email'

                // ]

                'theFile' => [
                    'rules' => 'uploaded[theFile]',
                    'label'
                ]


            ];

            if(this->validate($rules)) {
                //Login user
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('form', $data);
    }

}
