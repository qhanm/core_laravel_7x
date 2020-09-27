<?php

namespace App\Http\Forms\Backend;

use App\Http\Components\QForm;
use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class LoginForm extends QForm
{
    public function buildForm()
    {
        $this->addTextInput('email')
            ->addInputPassword('password')
            ->addButton('Login', 'submit', 'btn btn-primary btn-block waves-effect waves-light');
    }
}
