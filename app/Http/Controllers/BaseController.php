<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Services\Service;
use Illuminate\Support\Facades\App;

class BaseController extends Controller
{

    public $service;
    public $current;
    public $currency;
    public $price;

    public function __construct(Service $service)
    {
        $this->service = $service;
        $ip = \Request::ip();

        $data = \Location::get($ip);
    if ($data && $data->countryCode != 'RU'){
        App::setLocale('en');
    }else{
        App::setLocale('ru');
    }


    }

}
