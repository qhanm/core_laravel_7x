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
            ->addSelect2('languages', [
                'choices' => ['en' => 'English', 'fr' => 'French'],
                'selected' => function($data){
                    return $data;
                },
                'empty_value' => '=== Select language ===',
            ])
            ->add('submit', 'submit', ['label' => 'Save form']);
    }
}
