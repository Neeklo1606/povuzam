<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\App;

class AboutController extends BaseController
{
    public function __invoke()
    {
        $locaty = App::currentLocale();


        return view('site.about',compact('locaty'));
    }
}
