<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;

class UploadsController extends Controller
{
    //
    public function storeImg (Request $request) {
        $array=array();
        $name = 'img_' . time() . '.'. $request->file->getClientOriginalName();
        $request->file->move('images/userUpload', $name);
        $path['path'] = $name;
        array_push($array, $path);
        return response()->json($array);
    }
}
