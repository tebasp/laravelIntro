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
        // Aqui mandamos a llamar a los factory´s si hay

        // Creamos un usuario con datos
        // Si usamos el factory de usarios no sabremos sus credenciales
        App\User::create([
            'name' => 'Esteban Palomeque',
            'email' => 'i@admin.com',
            'password' => bcrypt('123456'),
        ]);

        // Como si hay factory lo llamamos directamente
        factory(App\Post::class, 24)->create();
    }
}
