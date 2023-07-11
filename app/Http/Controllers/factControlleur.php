<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateFormeRequest;

class factControlleur extends Controller
{
    public function exemple()
    {
        $name = 'Azim Ladeleh';
        $age = 18;
        $numero = ['1', '2', '3', '4'];
        return view('accueil', [
            'nom' => $name,
            'age' => $age,
            'product' => '',
            'nums' => $numero
        ]);
    }
    
    public function test()
    {
        return view('test');
    }

    public function store(ValidateFormeRequest $request)
    {
        // dd($request);
        $verify = $request;

        if($verify){
            echo 'Tout s\'est bien passé';
        }else{
            return redirect()->back();
        }
       
    }
}
