<?php

use Illuminate\Database\Seeder;
use App\Crud;
use Faker\Factory;

class CrudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Crud::truncate();
        $cruds = factory(App\Crud::class, 50) -> create();
    }
}
