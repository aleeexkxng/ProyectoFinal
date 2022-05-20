<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(
            [
                'title' => 'Tips de viaje',
                'user_id' => '1',
                'description' => 'El mejor tip es planear con tiempo, siemrpe es mejor ver desde antes temas de de hospedaje y costos, asimismo, los precios del hospedaje y vuelo (en su caso) dismunyen en función de que tanto se acerque la fecha'
            ]
        );
        Post::create(
            [
                'title' => '¿Cómo sacar tu RFC?',
                'user_id' => '2',
                'description' => 'Esto lo puede realizar en la pagina del SAT, solo que en algunas ocasiones esta te pedira agendar una cita, como consejo trata de evitar hacerla por meses como abril o mayo, ya que es temporada alta para ellos, una vez con cita el proceso dura alrededor de 40 min'
            ]
        );
        Post::create(
            [
                'title' => 'Receta cereal',
                'user_id' => '1',
                'description' => '1- Compras el cereal 2- lo sirves en un tazón 3- le echas leche '
            ]
        );
        Post::create(
            [
                'title' => 'Mi carro no enciende',
                'user_id' => '2',
                'description' => 'Si tu auto no enciende, puede que solo se haya descargado, sino aun pasandole corriente no enciende entonces llama a la grua'
            ]
        );
        Post::create(
            [
                'title' => 'Cuánto ahorrar?',
                'user_id' => '1',
                'description' => 'En mi experiencia personal recomiendo ahorrar el 10% de tu sueldo mensual, 5% por quincena'
            ]
        );
        Post::create(
            [
                'title' => 'Mejores bolsas de basura',
                'user_id' => '1',
                'description' => 'Las que me han salido mejores son las que tienen el cordón para amarrarse solas'
            ]
        );
    }
}
