<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete table
        DB::table('places')->truncate();

        //create table

        $place=new \App\Models\Place();
        $place->name="Kulmbach";
        $place->slug="Kulmbach";
        $place->image="1.jpeg";
        $place->category_id=3;
        $place->overview="dfdfdf";
        $place->address="fdf";
        $place->user_id=1;
        $place->latitude="21.3924513";
        $place->longitude="39.8226124";
        $place->view_count=2000;
        $place->save();
    }
}
