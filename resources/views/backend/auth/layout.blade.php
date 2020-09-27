<?php
use App\Http\Constants\QLocalization;

$locale = session()->get('locale');

$listLanguage = [];
foreach (QLocalization::getListLocalization() as $lang){
    $listLanguage[] = (object)[
        'key' => 'lang',
        'value' => $lang
    ];
}

$listLanguage = collect($listLanguage);
$listLanguage = $listLanguage->whereNotIn('value', [$locale])->all();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('themes/skote/assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('themes/skote/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('themes/skote/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('themes/skote/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
</head>

<body>
<div class="home-btn d-none d-sm-block">
    <div class="d-flex">
        <div class="dropdown d-inline-block">
            <?php
                $langDefault = 'themes/skote/assets/images/flags/en.jpg';
                if(session()->has('locale')){
                    $langDefault = 'themes/skote/assets/images/flags/' . QLocalization::getListImage()[$locale];
                }
            ?>
            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="" src="{{ asset($langDefault) }}" alt="Header Language" height="16">
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                @foreach($listLanguage as $lang)
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('themes/skote/assets/images/flags/'. $lang->value .'.jpg') }}" alt="user-image" class="mr-1" height="12">
                            <span class="align-middle">{{\App\Http\Constants\QLocalization::getListName()[$lang->value]}}</span>
                        </a>
                @endforeach
            </div>
        </div>

    </div>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    @yield('content')
                </div>
                <div class="mt-5 text-center">
                    <div>
                        <p>Don't have an account ? <a href="auth-register.html" class="font-weight-medium text-primary"> Signup now </a> </p>
                        <p>© 2020 Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('themes/skote/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('themes/skote/assets/libs/node-waves/waves.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('themes/skote/assets/js/app.js')  }}"></script>
</body>
</html>
