<?php

namespace App\Http\Controllers\Backend;

use App\Http\Components\QController;
use App\Http\Components\QFormBuilder;
use App\Http\Constants\QRouteBackend;
use App\Http\Forms\Backend\LoginForm;
use App\Http\Models\Users;
use App\Http\Requests\Backend\LoginRequest;

class AuthController extends QController
{
    public function authentication(LoginRequest $request)
    {
        $request->validate();
    }

    public function login(QFormBuilder $formBuilder)
    {
        $model = new Users();
        $form = $formBuilder->create(LoginForm::class, [
            'method' => 'POST',
            'url' => route(QRouteBackend::AUTH_AUTHENTICATION),
            'model' => $model,
        ]);
        return view('backend.auth.login', compact('form'));
    }

    public function logout()
    {

    }
}
