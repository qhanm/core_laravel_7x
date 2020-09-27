@extends('backend.auth.layout')

@section('content')
    <div class="bg-soft-primary">
        <div class="row">
            <div class="col-7">
                <div class="text-primary p-4">
                    <h5 class="text-primary">Welcome Back !</h5>
                    <p>Sign in to continue to Skote.</p>
                </div>
            </div>
            <div class="col-5 align-self-end">
                <img src="{{ asset('themes/skote/assets/images/profile-img.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="card-body pt-0">
        <div>
            <a href="index.html">
                <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                        <img src="{{ asset('themes/skote/assets/images/logo.svg') }}" alt="" class="rounded-circle" height="34">
                    </span>
                </div>
            </a>
        </div>
        <div class="p-2">
            {!! form($form) !!}
        </div>

    </div>
@endsection
