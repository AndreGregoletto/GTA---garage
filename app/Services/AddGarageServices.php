<?php

namespace App\Services;

use App\Models\Garage;
use App\Models\UserGarage;

class AddGarageServices
{
    public function index()
    {
        $param = [
            'pag'     => $_POST['pag'],
            'name'    => $_POST['name'],
            'parking' => $_POST['parking']
        ];

        $garages = Garage::whereStatus(1)->skip($param['pag'])->take(10);
        $pags    = Garage::whereStatus(1);

        $response = $this->filter($garages, $pags, $param);

        return response()->json($response);
    }

    public function filter($garages, $pags, $param)
    {
        if(!empty($param['name'])){
            $garages = $garages->whereName('LIKE', '%'.$param['name'].'%');
            $pags    = $pags->whereName('LIKE', '%'.$param['name'].'%');
        }

        if(!empty($param['parking'])){
            $garages = $garages->whereParking('LIKE', '%'.$param['parking'].'%');
            $pags    = $pags->whereParking('LIKE', '%'.$param['parking'].'%');
        }

        return $response = [
            'paginas' => count($pags->get()),
            'garages' => $garages->get()
        ];
    }

    public function addGarage($id)
    {
        $data = [
            'user_id'   => auth()->user()->id,
            'garage_id' => $id
        ];

        UserGarage::create($data);

        $garage = Garage::whereId($id)->first();
        return response()->json(utf8_decode($garage['name']." Adicionado com sucesso"), 200);
    }
}