<?php

namespace App\Http\Controllers;

use App\Components\CFormBuilder;
use App\Forms\LoginForm;
use App\Http\Requests\LoginRequest;
use App\Models\Auth\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //public function index(User $user, Request $request)
    //{
    //    dd($request->fullUrl());
    //    return view('test.index')->withUsers($user->sortable()->paginate(100));
    //}

    public function store(LoginRequest $request)
    {
        $validator = $request->validate();
    }


    public function create(CFormBuilder $formBuilder)
    {
        $userModel = new User();
        $userModel->username = 'quacchoainam';
        $userModel->password = '111';
        $userModel->content = 'This is content test <strong>Quach Hoai Nam</strong>';
        $userModel->is_login = 1;
        $userModel->languages = 'en';
        $form = $formBuilder->create(LoginForm::class,[
            'method' => 'POST',
            'url' => route('test.store'),
            'model' => $userModel
        ]);

        return view('test.create', compact('form'));
    }
}
