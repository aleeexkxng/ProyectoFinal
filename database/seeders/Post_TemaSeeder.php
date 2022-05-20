<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Tema;

class Post_TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tema')->insert(['tema_id' => '1', 'post_id' => '1']);
        DB::table('post_tema')->insert(['tema_id' => '2', 'post_id' => '2']);
        DB::table('post_tema')->insert(['tema_id' => '3', 'post_id' => '3']);
        DB::table('post_tema')->insert(['tema_id' => '4', 'post_id' => '4']);
        DB::table('post_tema')->insert(['tema_id' => '5', 'post_id' => '5']);
        DB::table('post_tema')->insert(['tema_id' => '6', 'post_id' => '6']);
    }
}
