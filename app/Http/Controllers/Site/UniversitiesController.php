<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Models\Card;
use App\Models\Town;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class UniversitiesController extends BaseController
{
    public function __invoke()
    {


        $locaty = App::currentLocale();
        $cards = Card::paginate(10);
        $towns = Town::all();

        return view('site.universities',compact('locaty','cards','towns'));
    }
}
