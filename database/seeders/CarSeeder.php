<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brandId    = Brand::get();
        $categoryId = Category::get();

        Car::create([
            'name'        => 'TAHOMA COUPE',
            'category_id' => $categoryId[2]['id'],
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 1500000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'TULIP M-100',
            'category_id' => $categoryId[2]['id'],
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 1658000,
            'status'      => 1
        ]);
        
        Car::create([
            'name'        => 'PREVION',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 1490000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SULTAN RS Clássico',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 1789000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DOMINATOR ASP',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 1775000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DOMINATOR GTT',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 1220000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FUTO GTX',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 1590000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'REMUS',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[1]['id'],
            'convertible' => 0,
            'price'       => 1027500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'CALICO GTF',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 1995000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'WARRENER HKR',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[55]['id'],
            'convertible' => 0,
            'price'       => 1260000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RT3000',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 1,
            'price'       => 1715000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BRIOSO 300',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[22]['id'],
            'convertible' => 0,
            'price'       => 457500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SLAMTRUCK',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 1,
            'price'       => 1310000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'WEEVIL',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[62]['id'],
            'convertible' => 0,
            'price'       => 652500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PENUMBRA FF',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[34]['id'],
            'convertible' => 0,
            'price'       => 1380000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'CLUB',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[62]['id'],
            'convertible' => 0,
            'price'       => 1280000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BEATER DUKES',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[25]['id'],
            'convertible' => 0,
            'price'       => 378000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BLISTA KANJO',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 0,
            'price'       => 435000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DRIFT YOSEMITE',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 1308000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RETINUE MK II',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 1620000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ASBO',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[63]['id'],
            'convertible' => 0,
            'price'       => 306000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PEYOTE GASSER',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 805000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ZION CLÁSSICO',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[53]['id'],
            'convertible' => 0,
            'price'       => 812000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GAUNTLET HELLFIRE',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 745000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'NEBULA TURBO',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[55]['id'],
            'convertible' => 0,
            'price'       => 797000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GAUNTLET CLÁSSOCP',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 615000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ISSI SPORT',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[57]['id'],
            'convertible' => 0,
            'price'       => 897000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'IMPALER',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 331835,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'VAMOS',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 596000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FUTO',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 9000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RUINER',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[25]['id'],
            'convertible' => 0,
            'price'       => 10000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ROMERO HEARSE',
            'category_id' => $categoryId[13]['id'],            
            'brand_id'    => $brandId[9]['id'],
            'convertible' => 0,
            'price'       => 45000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PRAIRIE',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[4]['id'],
            'convertible' => 0,
            'price'       => 25000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'MICHELLI GT',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[31]['id'],
            'convertible' => 0,
            'price'       => 1225000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DOMINATOR GTX',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 725000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ISSI CLÁSSICO',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[57]['id'],
            'convertible' => 0,
            'price'       => 360000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ELLIE',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 565000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FAGALOA',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[55]['id'],
            'convertible' => 0,
            'price'       => 335000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'HOTRING SABRE',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 830000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'HERMES',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[0]['id'],
            'convertible' => 0,
            'price'       => 535000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SENTINEL CLÁSSICO',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[53]['id'],
            'convertible' => 0,
            'price'       => 487500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'YOSEMITE',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[11]['id'],
            'convertible' => 0,
            'price'       => 485000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RETINUE',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 615000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'TORNADO RAT ROT',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 378000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'OMNIS',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[38]['id'],
            'convertible' => 0,
            'price'       => 'GRÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'TROPOS RALLYE',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[31]['id'],
            'convertible' => 0,
            'price'       => 816000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BRIOSO R/A',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[22]['id'],
            'convertible' => 0,
            'price'       => 155000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DRIFT TAMPA',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 995000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'STALLION BURGER',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 'GRÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PISSWASSER DOMINATOR',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 'GTÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'REDWOOD GAUNTLET',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 'GRÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'TAMPA',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 375000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'TAT-TRUCK',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 37500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SLAMVAN',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 49500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'MASSACRO (STPCL)',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[14]['id'],
            'convertible' => 0,
            'price'       => 385000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'JESTER (STPCL)',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 0,
            'price'       => 350000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PIGALLE',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[31]['id'],
            'convertible' => 0,
            'price'       => 400000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BLADE',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 160000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RHAPSODY',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 140000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PANTO',
            'category_id' => $categoryId[4]['id'],            
            'brand_id'    => $brandId[2]['id'],
            'convertible' => 0,
            'price'       => 85000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SURFER',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[62]['id'],
            'convertible' => 0,
            'price'       => 11000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'YOUGA',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 16000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PICADOR',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[10]['id'],
            'convertible' => 0,
            'price'       => 9000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DOMINATOR',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 35000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'F620',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[39]['id'],
            'convertible' => 0,
            'price'       => 80000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FUSILADE',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[47]['id'],
            'convertible' => 0,
            'price'       => 36000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PENUMBRA',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[34]['id'],
            'convertible' => 0,
            'price'       => 24000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SENTIL XS',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[53]['id'],
            'convertible' => 0,
            'price'       => 60000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SENTINEL CONVERSIVEL',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[53]['id'],
            'convertible' => 1,
            'price'       => 95000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RAT-LOADER',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 6000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DUKES',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[25]['id'],
            'convertible' => 0,
            'price'       => 'GRÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BLISTA COMPACTO',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 0,
            'price'       => 'GRÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'STALLION',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 'GRÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SCHWARTZER',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[2]['id'],
            'convertible' => 0,
            'price'       => 80000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ZION',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[53]['id'],
            'convertible' => 0,
            'price'       => 60000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ZION CABRIO',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[53]['id'],
            'convertible' => 1,
            'price'       => 65000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GAUNTLET',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 32000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'VIGERO',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 21000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ISSI',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[57]['id'],
            'convertible' => 0,
            'price'       => 18000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ISSI RALLY',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[57]['id'],
            'convertible' => 0,
            'price'       => 1835000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SURFER PERSONALIZADO',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[62]['id'],
            'convertible' => 0,
            'price'       => 590000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'JOURNEY II',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[61]['id'],
            'convertible' => 0,
            'price'       => 592500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BUFFALO STX',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 1612500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SEMNOLE FRONTIER',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[8]['id'],
            'convertible' => 0,
            'price'       => 678000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SUGOI',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 0,
            'price'       => 1224000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SULTAN CLÁSSICO',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 1288500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DYNASTY',
            'category_id' => $categoryId[3]['id'],            
            'brand_id'    => $brandId[57]['id'],
            'convertible' => 0,
            'price'       => 450000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'TULIP',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 718000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BEEJAY XL',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 27000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FQ 2',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[20]['id'],
            'convertible' => 0,
            'price'       => 50000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SERRANO',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[2]['id'],
            'convertible' => 0,
            'price'       => 60000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'HABANERO',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[18]['id'],
            'convertible' => 0,
            'price'       => 42000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'CHEBUREK',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[46]['id'],
            'convertible' => 0,
            'price'       => 145000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'STREITER',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[2]['id'],
            'convertible' => 0,
            'price'       => 500000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'YOUGA CLASSICO',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 195000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SPRUNK BUFFALO',
            'category_id' => $categoryId[1]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 'GRÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RUMPO PERS.',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 130000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GUARDIAN',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 375000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GANG BURRITO',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 65000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'KURUMA',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 95000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'KURUMA (BLINDADO)',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 525000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'JACKAL',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[39]['id'],
            'convertible' => 0,
            'price'       => 60000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ORACLE XS',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[53]['id'],
            'convertible' => 0,
            'price'       => 82000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SCHAFTER',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[2]['id'],
            'convertible' => 0,
            'price'       => 65000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SURGE',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[10]['id'],
            'convertible' => 0,
            'price'       => 38000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'WARRENER',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[55]['id'],
            'convertible' => 0,
            'price'       => 120000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GLENDALE',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[2]['id'],
            'convertible' => 0,
            'price'       => 200000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'REGINA',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[19]['id'],
            'convertible' => 0,
            'price'       => 8000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PRIMO',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[0]['id'],
            'convertible' => 0,
            'price'       => 9000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BUFFLA',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 35000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BUFFALO S',
            'category_id' => $categoryId[2]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 96000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'TAILGATER',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[38]['id'],
            'convertible' => 0,
            'price'       => 55000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ASEA',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 12000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GRANGER',
            'category_id' => $categoryId[10]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 35000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'INGOT',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[55]['id'],
            'convertible' => 0,
            'price'       => 9000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'INTRUDER',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 16000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'MINIVAN',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 30000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PREMIER',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 100000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RADIUS',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 32000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'STANIER',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 10000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'WASHINGTON',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[0]['id'],
            'convertible' => 0,
            'price'       => 15000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ASTEROPE',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 26000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PARADISE',
            'category_id' => $categoryId[11]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 25000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FUGITIVE',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[10]['id'],
            'convertible' => 0,
            'price'       => 24000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DILETTANTE',
            'category_id' => $categoryId[5]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 25000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PATRIOT MILITAR',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[35]['id'],
            'convertible' => 0,
            'price'       => 1710000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'OUTLAW',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[37]['id'],
            'convertible' => 0,
            'price'       => 1268000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'VAGRANT',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[63]['id'],
            'convertible' => 0,
            'price'       => 2214000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'HELLION',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[1]['id'],
            'convertible' => 0,
            'price'       => 835000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'CARACARA 4X4',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 875000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'KAMACHO',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[8]['id'],
            'convertible' => 0,
            'price'       => 345000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RIATA',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 380000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'TROPYH TRUCK',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 550000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DESERT RAID',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 695000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DUNE',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[36]['id'],
            'convertible' => 0,
            'price'       => 1385000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'seminole',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[8]['id'],
            'convertible' => 0,
            'price'       => 30000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'rumpo',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 13000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'KALAHARI CONVERSÍVEL',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[8]['id'],
            'convertible' => 1,
            'price'       => 40000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'REBEL (LIMPO)',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 22000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RANCHER XL',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 9000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BIFTA',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[62]['id'],
            'convertible' => 1,
            'price'       => 75000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'KALAHARI',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[8]['id'],
            'convertible' => 0,
            'price'       => 25000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SANDKING SWB',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 38000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BODHI',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[8]['id'],
            'convertible' => 1,
            'price'       => 25000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DUNE BUGGY',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[62]['id'],
            'convertible' => 0,
            'price'       => 20000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'REBEL',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 3000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'VAPID SADLER',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 35000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SANDKING XL',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 45000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'INJECTION',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[62]['id'],
            'convertible' => 0,
            'price'       => 16000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BISON',
            'category_id' => $categoryId[9]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 30000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GRANGER 3600LX',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[13]['id'],
            'convertible' => 0,
            'price'       => 1380000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'I-WAGEN',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[38]['id'],
            'convertible' => 0,
            'price'       => 1720000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'LANDSTALKER XL',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[17]['id'],
            'convertible' => 0,
            'price'       => 1220000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'EVERON',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[29]['id'],
            'convertible' => 0,
            'price'       => 1475000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ONIBUS DE FESTA',
            'category_id' => NULL,            
            'brand_id'    => NULL,
            'convertible' => 0,
            'price'       => 1385000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PATROT STRETCH',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[35]['id'],
            'convertible' => 0,
            'price'       => 460000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PATRIOT',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[35]['id'],
            'convertible' => 0,
            'price'       => 50000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'CONTENDER',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 250000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'LANDSTALKER',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[17]['id'],
            'convertible' => 0,
            'price'       => 58000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GRESLEY',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[5]['id'],
            'convertible' => 0,
            'price'       => 29000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BOBCAT XL',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[54]['id'],
            'convertible' => 0,
            'price'       => 23000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'CAVALCADE',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[0]['id'],
            'convertible' => 0,
            'price'       => 70000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BALLER',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[21]['id'],
            'convertible' => 0,
            'price'       => 90000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'CAVALCADE',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[0]['id'],
            'convertible' => 0,
            'price'       => 60000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ROCOTO',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[38]['id'],
            'convertible' => 0,
            'price'       => 85000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FELON',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[31]['id'],
            'convertible' => 0,
            'price'       => 90000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FELON GT',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[31]['id'],
            'convertible' => 0,
            'price'       => 95000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ORACLE',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[53]['id'],
            'convertible' => 0,
            'price'       => 80000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'STRETCH',
            'category_id' => $categoryId[6]['id'],            
            'brand_id'    => $brandId[17]['id'],
            'convertible' => 0,
            'price'       => 30000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'WOLFSBANE',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 95000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FAGGIO MOD',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[40]['id'],
            'convertible' => 0,
            'price'       => 55000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'VORTEX',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[40]['id'],
            'convertible' => 0,
            'price'       => 'GRÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'STREET BLAZER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[37]['id'],
            'convertible' => 0,
            'price'       => 81000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'MANCHEZ',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[34]['id'],
            'convertible' => 0,
            'price'       => 67000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ESSKEY',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[41]['id'],
            'convertible' => 0,
            'price'       => 264000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'NIGHTBLADE',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 95000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DEFILER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[48]['id'],
            'convertible' => 0,
            'price'       => 412000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'AVARUS',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[64]['id'],
            'convertible' => 0,
            'price'       => 116000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ZOMBIE BOBBER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 99000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ZOMBIE CHOPPER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 'GRÁTIS',
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'CHIMERA',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 210000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DAEMON',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 145000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RAT BIKE',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 48000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BAGGER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 16000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FAGGIO SPORT',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[41]['id'],
            'convertible' => 0,
            'price'       => 47500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'CLIFFHANGER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 225000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BF400',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[37]['id'],
            'convertible' => 0,
            'price'       => 95000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'GARGOYLE',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 120000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'ENDURO',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 0,
            'price'       => 48000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'NEMESIS',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[43]['id'],
            'convertible' => 0,
            'price'       => 12000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'HAKUCHOU',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[48]['id'],
            'convertible' => 0,
            'price'       => 82000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'INNOVATION',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[64]['id'],
            'convertible' => 0,
            'price'       => 92500,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SOVEREIGN',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[59]['id'],
            'convertible' => 0,
            'price'       => 120000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'HOT ROD BLAZER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[37]['id'],
            'convertible' => 0,
            'price'       => 69000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SHANCEZ',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[34]['id'],
            'convertible' => 0,
            'price'       => 8000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BATI 801',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[41]['id'],
            'convertible' => 0,
            'price'       => 15000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BATI 801RR',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[41]['id'],
            'convertible' => 0,
            'price'       => 15000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RUFFIAN',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[41]['id'],
            'convertible' => 0,
            'price'       => 10000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'VADER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[48]['id'],
            'convertible' => 0,
            'price'       => 9000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'BLAZER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[37]['id'],
            'convertible' => 0,
            'price'       => 8000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'PCJ 600',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[48]['id'],
            'convertible' => 0,
            'price'       => 9000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'SHANCEZ (PATROCÍNIO)',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[34]['id'],
            'convertible' => 0,
            'price'       => 7000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'FAGGIO',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[43]['id'],
            'convertible' => 0,
            'price'       => 5000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'AKUMA',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 0,
            'price'       => 9000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'DOUBLE-T',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 0,
            'price'       => 120000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'HEXER',
            'category_id' => $categoryId[14]['id'],            
            'brand_id'    => $brandId[64]['id'],
            'convertible' => 0,
            'price'       => 15000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'VETO MODERNO',
            'category_id' => $categoryId[19]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 0,
            'price'       => 995000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'VETO CLÁSSICO',
            'category_id' => $categoryId[19]['id'],            
            'brand_id'    => $brandId[15]['id'],
            'convertible' => 0,
            'price'       => 895000,
            'status'      => 1
        ]);

        Car::create([
            'name'        => 'RC BANDITO',
            'category_id' => $categoryId[19]['id'],            
            'brand_id'    => null,
            'convertible' => 0,
            'price'       => 1590000,
            'status'      => 1
        ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $categoryId[]['id'],            
        //     'brand_id'    => $brandId[]['id'],
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        
        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => $brandId[]['id'],
        //     'brand_id'    => $categoryId[]['id'],            
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        
        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        //         Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        // Car::create([
        //     'name'        => '',
        //     'category_id' => '',
        //     'brand_id'    => '',
        //     'convertible' => '',
        //     'price'       => '',
        //     'status'      => 1
        // ]);

        
    }
}
