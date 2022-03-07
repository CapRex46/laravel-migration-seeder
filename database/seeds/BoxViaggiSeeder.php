<?php

use App\BoxViaggi;
use Illuminate\Database\Seeder;

class BoxViaggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boxviaggi = new BoxViaggi();

        $boxviaggi ->trips = "Trips" ;
        $boxviaggi ->season = "Season" ;
        $boxviaggi ->country = "Country";
        $boxviaggi -> description = "Description";
        $boxviaggi -> days = 5; 
        $boxviaggi -> save();
    }
}
