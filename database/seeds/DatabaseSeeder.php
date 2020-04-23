<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
           
DB::table('users')->insert([
               'id'       => '1', 
               'name' => 'Catalina',
               'email' => 'cata@correo.net',
               'password' => bcrypt('1234'),
               'created_at' => now(),
               'updated_at' => now()  
               
      ]);
           DB::table('users')->insert([
               'id'       => '2', 
               'name' => 'Miguel',
               'email' => 'miguel@correo.net',
               'password' => bcrypt('1234'),
               'created_at' => now(),
               'updated_at' => now()  
               
      ]);

          DB::table('users')->insert([
               'id'       => '3', 
               'name' => 'Carl Sagan',
               'email' => 'sagan@correo.net',
               'password' => bcrypt('1234'),
               'created_at' => now(),
               'updated_at' => now()  
               
      ]);
        




           DB::table('categories')->insert([
                   'id'       => '1', 
                   'name' => 'Programación',
                   'created_at' => now(),
                   'updated_at' => now()  
                       
           ]); 

             DB::table('categories')->insert([
                   'id'       => '2', 
                   'name' => 'Diseño',
                   'created_at' => now(),
                   'updated_at' => now()  
                       
           ]);

            DB::table('categories')->insert([
                   'id'       => '3', 
                   'name' => 'Software',
                   'created_at' => now(),
                   'updated_at' => now()  
                       
           ]); 

            DB::table('categories')->insert([
                   'id'       => '4', 
                   'name' => 'Tecnología',
                   'created_at' => now(),
                   'updated_at' => now()  
                       
           ]); 


            factory('App\Post',20)->create();
           

}
}
