<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lga;
use Illuminate\Support\Str;

class LgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lgas = array(
            array("lga_name" => "Barkin Ladi"),
            array("lga_name" => "Bassa"),
            array("lga_name" => "Bokkos"),
            array("lga_name" => "Jos East"),
            array("lga_name" => "Jos North"),
            array("lga_name" => "Jos South"),
            array("lga_name" => "Kanam"),
            array("lga_name" => "Kanke"),
            array("lga_name" => "Langtang North"),
            array("lga_name" => "Langtang South"),
            array("lga_name" => "Mangu"),
            array("lga_name" => "Mikang"),
            array("lga_name" => "Pankshin"),
            array("lga_name" => "Qua'an Pan"),
            array("lga_name" => "Riyom"),
            array("lga_name" => "Shendam"),
            array("lga_name" => "Wase"),
        );

        foreach($lgas as $lga) {
            $lg = new Lga;
            $lg->lga_name = $lga['lga_name'];
            $lg->slug = Str::slug($lga['lga_name'], '_');
            $lg->save();
        }
    }
}
