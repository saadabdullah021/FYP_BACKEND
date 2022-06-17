<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class Diseases extends Controller
{
    public function allDiseases()
    {
        $data['imgUrl'] = url('/storage/images');
        $data['diseases']  = Disease::select('id', 'picture')->get();
        if ($data['diseases']) {
            return json_encode($data, 200);
        } else {
            return json_encode('No disease found.', 200);
        }
    }

    public function getDisease(Request $request)
    {
        $data['imgUrl'] = url('/storage/images');
        $data['disease'] = Disease::where('id', $request->id)->first();
        if ($data['disease']) {
            return json_encode($data, 200);
        } else {
            return json_encode('No disease found.', 200);
        }
        return json_encode($data, 200);
    }
}
