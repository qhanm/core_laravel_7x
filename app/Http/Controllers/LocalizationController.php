<?php

namespace App\Http\Controllers;

use App\Http\Components\QController;
use App\Http\Constants\QLocalization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends QController
{
    public function switchLanguage($locale)
    {
        $locale = session()->get('locale');
        if(!in_array($locale, QLocalization::getListLocalization())){
            return view('errors.404');
        }else{
            $locale = QLocalization::LANG_VN;
        }

        App::setLocale($locale);

        return back();
    }
}
