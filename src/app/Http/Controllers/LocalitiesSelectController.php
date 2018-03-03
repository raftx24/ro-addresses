<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\RoAddresses\app\Models\Locality;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class LocalitiesSelectController extends Controller
{
    use OptionsBuilder;

    protected $label = 'displayLabel';
    protected $class = Locality::class;
    protected $queryAttributes = ['name', 'siruta', 'township'];

    public function query()
    {
        return Locality::active();
    }
}
