<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Berita::factory(10)->create();
        Category::factory(5)->create();
        // User::create([
        //     'name' => 'Jono Kentang',
        //     'email' => 'jono@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Didin Knalpot',
        //     'email' => 'didin@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Category::create([
        //     'nama' => 'pelabuhan',
        //     'slug' => 'pelabuhan',
        // ]);

        // Category::create([
        //     'nama' => 'kegiatan uptd ppppl',
        //     'slug' => 'kegiatan-uptd-ppppl',
        // ]);

        // Berita::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-petama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laudantium accusamus exercitationem cupiditate fugiat quo. Optio aperiam itaque nostrum, fugiat debitis recusandae non similique sapiente consequatur, minima vero tempore omnis?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ut cumque dolorum consectetur tempore quo provident natus nihil libero iure dolore unde officia nemo, in, numquam doloribus consequuntur est illo tenetur cupiditate error! Incidunt, quae earum quam, dolore odio nulla omnis tenetur molestiae deleniti, neque vitae fugiat facilis expedita est.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aspernatur adipisci excepturi fuga iste esse ea laborum quasi nesciunt iure eligendi dolorum cupiditate accusamus soluta neque ratione, eos magnam cum sit est. Veritatis non totam nostrum reiciendis eaque quaerat obcaecati dolorum ut alias sed, ratione excepturi, temporibus laboriosam velit libero.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam doloribus inventore molestias sed veritatis doloremque voluptatum! Quis, dolorem fugit? Iusto labore alias sed consectetur pariatur laudantium! Illo nobis unde atque cumque officiis quod veniam facere, commodi modi maiores, qui sapiente.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ratione porro, neque nam obcaecati necessitatibus consequatur fugit minus nemo nostrum numquam, ad laudantium voluptatem, exercitationem quis voluptates nobis ducimus modi voluptate. Sunt blanditiis ad odit fugit quis possimus deserunt non expedita eius perspiciatis iure, dignissimos libero nemo vel quam illo. Itaque illo aliquid vel dolore obcaecati dignissimos sunt omnis minus.</p>'
        // ]);

        // Berita::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laudantium accusamus exercitationem cupiditate fugiat quo. Optio aperiam itaque nostrum, fugiat debitis recusandae non similique sapiente consequatur, minima vero tempore omnis?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ut cumque dolorum consectetur tempore quo provident natus nihil libero iure dolore unde officia nemo, in, numquam doloribus consequuntur est illo tenetur cupiditate error! Incidunt, quae earum quam, dolore odio nulla omnis tenetur molestiae deleniti, neque vitae fugiat facilis expedita est.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aspernatur adipisci excepturi fuga iste esse ea laborum quasi nesciunt iure eligendi dolorum cupiditate accusamus soluta neque ratione, eos magnam cum sit est. Veritatis non totam nostrum reiciendis eaque quaerat obcaecati dolorum ut alias sed, ratione excepturi, temporibus laboriosam velit libero.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam doloribus inventore molestias sed veritatis doloremque voluptatum! Quis, dolorem fugit? Iusto labore alias sed consectetur pariatur laudantium! Illo nobis unde atque cumque officiis quod veniam facere, commodi modi maiores, qui sapiente.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ratione porro, neque nam obcaecati necessitatibus consequatur fugit minus nemo nostrum numquam, ad laudantium voluptatem, exercitationem quis voluptates nobis ducimus modi voluptate. Sunt blanditiis ad odit fugit quis possimus deserunt non expedita eius perspiciatis iure, dignissimos libero nemo vel quam illo. Itaque illo aliquid vel dolore obcaecati dignissimos sunt omnis minus.</p>'
        // ]);

        // Berita::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laudantium accusamus exercitationem cupiditate fugiat quo. Optio aperiam itaque nostrum, fugiat debitis recusandae non similique sapiente consequatur, minima vero tempore omnis?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint ut cumque dolorum consectetur tempore quo provident natus nihil libero iure dolore unde officia nemo, in, numquam doloribus consequuntur est illo tenetur cupiditate error! Incidunt, quae earum quam, dolore odio nulla omnis tenetur molestiae deleniti, neque vitae fugiat facilis expedita est.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aspernatur adipisci excepturi fuga iste esse ea laborum quasi nesciunt iure eligendi dolorum cupiditate accusamus soluta neque ratione, eos magnam cum sit est. Veritatis non totam nostrum reiciendis eaque quaerat obcaecati dolorum ut alias sed, ratione excepturi, temporibus laboriosam velit libero.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam doloribus inventore molestias sed veritatis doloremque voluptatum! Quis, dolorem fugit? Iusto labore alias sed consectetur pariatur laudantium! Illo nobis unde atque cumque officiis quod veniam facere, commodi modi maiores, qui sapiente.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ratione porro, neque nam obcaecati necessitatibus consequatur fugit minus nemo nostrum numquam, ad laudantium voluptatem, exercitationem quis voluptates nobis ducimus modi voluptate. Sunt blanditiis ad odit fugit quis possimus deserunt non expedita eius perspiciatis iure, dignissimos libero nemo vel quam illo. Itaque illo aliquid vel dolore obcaecati dignissimos sunt omnis minus.</p>'
        // ]);
    }
}
