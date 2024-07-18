<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll(){

        $bands = $this->getBands();

        return response()->json($bands);
    }

    public function getById($id){
        
        $band = null;

        foreach($this->getBands() as $_band){
            if ($_band['id'] == $id){
                $band = $_band;
            } 
        }

        return response()->json($band);

    }

    public function getBandsByGender($gender){
        
        $bands = [];

        foreach($this->getBands() as $_band){
            if ($_band['gender'] == $gender){
                $bands[] = $_band;
            }
        }

        return response()->json($bands);
    }

    public function store(Request $request){

        $validade = $request->validate([
            'id' => 'numeric',
            'name' => 'required'
        ]);

        return response()->json($request->all());

    }

    protected function getBands(){
        
        return [
            [
                'id' => 1, 'name' => 'breaking benjamin', 'gender' => 'Rock'
            ],
            [
                'id' => 2, 'name' => 'Creed', 'gender' => 'heavy metal'
            ],
            [
                'id' => 3, 'name' => 'Nickelback', 'gender' => 'Hard rock'
            ]
        ];
    }
}
