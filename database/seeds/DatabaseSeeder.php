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
        App\User::create([
            'name' => 'Meliza Romo',
            'email' => 'meliza@hotmail.com',
            'password' => bcrypt('123')
        ]);

        factory(App\Producto::class, 10)->create();

        factory(App\Regalo::class, 30)->create();
    }
}
