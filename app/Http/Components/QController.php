<?php
namespace App\Http\Components;

use App\Http\Constants\QLocalization;
use App\Http\Controllers\Controller;

class QController extends Controller
{
    public function __construct()
    {
        if(!session()->has('locale')){
            session()->put('locale', QLocalization::LANG_VN);
        }
    }
}
