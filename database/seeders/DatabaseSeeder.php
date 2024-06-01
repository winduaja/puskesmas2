<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Upload;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     "name" => "Fathan Prasetya ",
        //     "email" => "FathanPrasetya@gmail.com",
        //     "password" => bcrypt("1234")

        // ]);

        // User::create([
        //     "name" => "Faruch Efendi ",
        //     "email" => "Faruch@gmail.com",
        //     "password" => bcrypt("1234")

        // ]);

        User::factory(3)->create();

        Category::create([
            "name" => "Posyandu Remaja",
            "slug" => "posyandu-remaja"
        ]);

        Category::create([
            "name" => "Vaksin Boster",
            "slug" => "vaksin-boster"
        ]);
        Category::create([
            "name" => "Penyuluhan Kesehatan",
            "slug" => "penyeluhan-kesehatan"
        ]);

        Upload::factory(20)->create();
        // Upload::create([
        //     "title" => "Berita Pertama",
        //     "slug" => "berita-pertama",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempore amet sapiente similique rerum pariatur sunt assumenda iure, laboriosam fugiat nemo id reprehenderit placeat et harum ipsam porro nobis inventore obcaecati dolor tenetur aliquid! Officia quo cum enim quidem aspernatur assumenda ad quaerat voluptatibus architecto maxime? Laudantium similique illum unde nulla cumque nemo eaque perspiciatis voluptatem soluta consequuntur, cupiditate officia sapiente enim eos. Magni quidem harum voluptatum pariatur, nostrum est reprehenderit laudantium aperiam, sint, dolores eos. Temporibus quasi voluptates a pariatur dolore eligendi. Doloremque possimus deserunt quos nemo dolorem. Quae voluptas labore quam blanditiis quasi odit reiciendis velit dolorem corporis.",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);

        // Upload::create([
        //     "title" => "Berita Kedua",
        //     "slug" => "berita-kedua",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempore amet sapiente similique rerum pariatur sunt assumenda iure, laboriosam fugiat nemo id reprehenderit placeat et harum ipsam porro nobis inventore obcaecati dolor tenetur aliquid! Officia quo cum enim quidem aspernatur assumenda ad quaerat voluptatibus architecto maxime? Laudantium similique illum unde nulla cumque nemo eaque perspiciatis voluptatem soluta consequuntur, cupiditate officia sapiente enim eos. Magni quidem harum voluptatum pariatur, nostrum est reprehenderit laudantium aperiam, sint, dolores eos. Temporibus quasi voluptates a pariatur dolore eligendi. Doloremque possimus deserunt quos nemo dolorem. Quae voluptas labore quam blanditiis quasi odit reiciendis velit dolorem corporis.",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);

        // Upload::create([
        //     "title" => "Berita Ketiga",
        //     "slug" => "berita-ketiga",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempore amet sapiente similique rerum pariatur sunt assumenda iure, laboriosam fugiat nemo id reprehenderit placeat et harum ipsam porro nobis inventore obcaecati dolor tenetur aliquid! Officia quo cum enim quidem aspernatur assumenda ad quaerat voluptatibus architecto maxime? Laudantium similique illum unde nulla cumque nemo eaque perspiciatis voluptatem soluta consequuntur, cupiditate officia sapiente enim eos. Magni quidem harum voluptatum pariatur, nostrum est reprehenderit laudantium aperiam, sint, dolores eos. Temporibus quasi voluptates a pariatur dolore eligendi. Doloremque possimus deserunt quos nemo dolorem. Quae voluptas labore quam blanditiis quasi odit reiciendis velit dolorem corporis.",
        //     "category_id" => 2,
        //     "user_id" => 1
        // ]);
        // Upload::create([
        //     "title" => "Berita Keempat",
        //     "slug" => "berita-keempat",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus tempore amet sapiente similique rerum pariatur sunt assumenda iure, laboriosam fugiat nemo id reprehenderit placeat et harum ipsam porro nobis inventore obcaecati dolor tenetur aliquid! Officia quo cum enim quidem aspernatur assumenda ad quaerat voluptatibus architecto maxime? Laudantium similique illum unde nulla cumque nemo eaque perspiciatis voluptatem soluta consequuntur, cupiditate officia sapiente enim eos. Magni quidem harum voluptatum pariatur, nostrum est reprehenderit laudantium aperiam, sint, dolores eos. Temporibus quasi voluptates a pariatur dolore eligendi. Doloremque possimus deserunt quos nemo dolorem. Quae voluptas labore quam blanditiis quasi odit reiciendis velit dolorem corporis.",
        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);


    }
}
