<?php

use Illuminate\Database\Seeder;

class UnitQuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $unit_quantity = new \App\UnitQuantity();
        $unit_quantity->nom = 'g';
        $unit_quantity->save();

        $unit_quantity1 = new \App\UnitQuantity();
        $unit_quantity1->nom = 'L';
        $unit_quantity1->save();

        $unit_quantity2 = new \App\UnitQuantity();
        $unit_quantity2->nom = 'mL';
        $unit_quantity2->save();

        $unit_quantity3 = new \App\UnitQuantity();
        $unit_quantity3->nom = 'kg';
        $unit_quantity3->save();
    }
}
