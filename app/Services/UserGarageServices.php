<?php

namespace App\Services;

use App\Models\Car;
use App\Models\UserCars;
use App\Models\UserGarage;
use App\Models\UsersCarsGarages;

class UserGarageServices
{
    public function index()
    {
        return $this->garage();
    }

    public function garage()
    {
        $user = auth()->user()->id;
        $realtionGarage = UserGarage::whereUserId($user)->with('garages')->get();

        foreach($realtionGarage as $value){
            $response[] = [
                $value['garages'][0]['name'].' - '.$value['garages'][0]['parking'] => UsersCarsGarages::whereUserIdAndUserGarageId($user, $value['garage_id'])
                ->with('cars', 'garages')
                ->get()
            ];
        }

        $response = isset($response) ? $response : false;
        return $response;
    }

    public function comboSelect()
    {
        $comboCar    = $this->comboCar(auth()->user()->id);
        $comboGarage = $this->comboGarage(auth()->user()->id);

        $response = [
            $comboCar,
            $comboGarage
        ];
        
        return response($response, 200);
    }

    public function comboCar($id)
    {
        $cars = UserCars::whereUserId($id)->get();
    
        foreach($cars as $car){
            $check = UsersCarsGarages::whereUserIdAndUserCarIdAndUserGarageId($id, $car['id'], !0)->first();   
           
            if(empty($check)){
                $checkCar[] = [
                    'car_id' => $car['car_id']
                ];
            }
        }
    
        
        
        foreach($checkCar as $value){            
            $aCars = Car::whereId($value['car_id'])->first();
            
            $response[] = [
                'combo' => 'car' ,
                'id'    => $aCars['id'],
                'name'  => $aCars['name']
            ];                 
        }

        return $response;
    }

    public function comboGarage($id)
    {
        $garages = UserGarage::whereUserId($id)->with('garages')->get();

        foreach($garages as $value){            
            $aGarages[] = [
                'combo'   => 'garage',
                'id'      => $value['garages'][0]['id'],
                'name'    => $value['garages'][0]['name'],
                'parking' => $value['garages'][0]['parking']
            ];
        }

        foreach ($aGarages as $value) {
            $check = [
                'parking' => UsersCarsGarages::whereUserIdAndUserGarageId($id, $value['id'])->count()
            ];
            
            if($check['parking'] < $value['parking']){
                $response[] = $value;
            }
        }

        return $response;
    }
}