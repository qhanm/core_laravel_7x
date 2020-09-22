<?php

namespace App\Forms;

use App\Components\CForm;

class LoginForm extends CForm
{

    public function buildForm()
    {
        $this->addTextInput('username')
            ->addTextInput('password')
            ->addTextarea('content')
            ->addSwitch('is_login', ['on' => 'Yes', 'off' => 'No'])
            ->addMultiSelect('languages', [
                'choices' => ['en' => 'English', 'fr' => 'French', 'vn' => 'Viet Nam', 'dk' => 'Denmark'],
                'selected' => function($data){
                    return $data;
                },
                'empty_value' => '=== Select language ===',
            ])
            ->add('date', 'date')
            ->addButton('Send', 'btn-danger')
            ->add('submit', 'submit', ['label' => 'Save form']);
    }
}
