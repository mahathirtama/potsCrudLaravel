<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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


        User::create([
            'name' => 'Mahathirtama Ahmad',
            'username' => 'Mahathirtama',
            'email' => 'mahathirtama.ahmad@gmail.com',
            'password' => bcrypt('rahasia123')
        ]);

        // User::create([
        //     'name' => 'Mahendradatta Ahmad',
        //     'email' => 'datta@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Post::factory(20)->create();

        // Post::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates magni obcaecati beatae doloremque culpa unde aspernatur excepturi est consequatur, quisquam, nostrum commodi veniam. Suscipit, sint fuga explicabo nisi expedita laudantium aliquid eius, error, hic commodi porro? Sequi ab, officiis asperiores inventore eaque tempore sunt quia enim eligendi rerum quis, consequuntur, at maiores debitis laborum ullam earum voluptatem? Quod pariatur dignissimos vero, adipisci officia aspernatur fuga atque ipsam quisquam incidunt, voluptate rem quae eius explicabo aut aliquid quas illo, inventore assumenda quibusdam ducimus maxime praesentium unde id! Vero enim magni totam? Dignissimos veritatis porro quia tempore at! Iure ex officiis nisi!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates magni obcaecati beatae doloremque culpa unde aspernatur excepturi est consequatur, quisquam, nostrum commodi veniam. Suscipit, sint fuga explicabo nisi expedita laudantium aliquid eius, error, hic commodi porro? Sequi ab, officiis asperiores inventore eaque tempore sunt quia enim eligendi rerum quis, consequuntur, at maiores debitis laborum ullam earum voluptatem? Quod pariatur dignissimos vero, adipisci officia aspernatur fuga atque ipsam quisquam incidunt, voluptate rem quae eius explicabo aut aliquid quas illo, inventore assumenda quibusdam ducimus maxime praesentium unde id! Vero enim magni totam? Dignissimos veritatis porro quia tempore at! Iure ex officiis nisi!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates magni obcaecati beatae doloremque culpa unde aspernatur excepturi est consequatur, quisquam, nostrum commodi veniam. Suscipit, sint fuga explicabo nisi expedita laudantium aliquid eius, error, hic commodi porro? Sequi ab, officiis asperiores inventore eaque tempore sunt quia enim eligendi rerum quis, consequuntur, at maiores debitis laborum ullam earum voluptatem? Quod pariatur dignissimos vero, adipisci officia aspernatur fuga atque ipsam quisquam incidunt, voluptate rem quae eius explicabo aut aliquid quas illo, inventore assumenda quibusdam ducimus maxime praesentium unde id! Vero enim magni totam? Dignissimos veritatis porro quia tempore at! Iure ex officiis nisi!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quae!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates magni obcaecati beatae doloremque culpa unde aspernatur excepturi est consequatur, quisquam, nostrum commodi veniam. Suscipit, sint fuga explicabo nisi expedita laudantium aliquid eius, error, hic commodi porro? Sequi ab, officiis asperiores inventore eaque tempore sunt quia enim eligendi rerum quis, consequuntur, at maiores debitis laborum ullam earum voluptatem? Quod pariatur dignissimos vero, adipisci officia aspernatur fuga atque ipsam quisquam incidunt, voluptate rem quae eius explicabo aut aliquid quas illo, inventore assumenda quibusdam ducimus maxime praesentium unde id! Vero enim magni totam? Dignissimos veritatis porro quia tempore at! Iure ex officiis nisi!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
