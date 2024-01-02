<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Models\Card;
use App\Models\Town;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class UniversitiesCardController extends BaseController
{
    public function __invoke($id)
    {


        $locaty = App::currentLocale();
        $cards = Card::find($id);
        $towns = Town::all();

        return view('site.universities-id',compact('locaty','cards','towns'));
    }
}
