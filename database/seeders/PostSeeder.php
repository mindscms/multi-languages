<?php

namespace Database\Seeders;

use App\Models\Post;
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

        $post01['title'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];
        $post01['body'] = [
            'en' => 'Awesome translated post!',
            'ar' => 'مشاركة مترجمة رائعة!',
            'ca' => '¡Impresionante publicación traducida!'
        ];

        Post::create($post01);


    }
}
