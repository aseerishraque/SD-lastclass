<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(EmployeesTableSeeder::class);
       // $this->call(StudentsTableSeeder::class);
        $this->call(TeachersTableSeeder::class);

         DB::table('categories')->insert(
            array(
                array('name'=>'Electronics'),
                array('name'=>'Fruits & Veg'),
                array('name'=>'Mens Fashion')
            )
        );

         $this->call(ProductsTableSeeder::class);

    }
}
