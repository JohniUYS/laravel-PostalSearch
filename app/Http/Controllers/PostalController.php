<?php

namespace App\Http\Controllers;

use App\Models\Postal;

class PostalController extends Controller
{

    public function find($postal)
    {
        $result = Postal::find($postal);
        return view('result', ['postal' => $result->postal, 'area' => $result->area, 'district' => $result->district, 'isDNR' => $result->isDNR]);
    }
}
