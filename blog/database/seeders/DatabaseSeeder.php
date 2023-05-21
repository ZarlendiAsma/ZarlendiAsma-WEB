<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
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
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Zarlendi Asma',
            'email' => 'zarlendi@gmail.com',
            'password' => bcrypt('123'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judulpertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, animi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum mollitia ut enim id consequuntur dolores aspernatur, recusandae quos provident. Tempora tempore itaque obcaecati aliquid non ratione fuga impedit numquam pariatur ducimus cum repellat, odit aut vel hic quod alias, quas minus atque inventore? Rerum doloremque corporis alias consequuntur at? Libero vitae eligendi illum quaerat modi sequi, ut nobis itaque esse, suscipit atque assumenda nesciunt labore consequuntur inventore eveniet! Cum sint numquam, consectetur inventore aliquam eaque autem! Doloribus iste commodi repellendus, earum repudiandae pariatur facere natus quidem praesentium saepe nam provident voluptas porro placeat animi. Accusantium voluptate optio tenetur numquam explicabo!',
            'category_id' => 1,
            'user_id' => 3
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judulKedua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, animi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum mollitia ut enim id consequuntur dolores aspernatur, recusandae quos provident. Tempora tempore itaque obcaecati aliquid non ratione fuga impedit numquam pariatur ducimus cum repellat, odit aut vel hic quod alias, quas minus atque inventore? Rerum doloremque corporis alias consequuntur at? Libero vitae eligendi illum quaerat modi sequi, ut nobis itaque esse, suscipit atque assumenda nesciunt labore consequuntur inventore eveniet! Cum sint numquam, consectetur inventore aliquam eaque autem! Doloribus iste commodi repellendus, earum repudiandae pariatur facere natus quidem praesentium saepe nam provident voluptas porro placeat animi. Accusantium voluptate optio tenetur numquam explicabo!',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judulKetiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, animi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum mollitia ut enim id consequuntur dolores aspernatur, recusandae quos provident. Tempora tempore itaque obcaecati aliquid non ratione fuga impedit numquam pariatur ducimus cum repellat, odit aut vel hic quod alias, quas minus atque inventore? Rerum doloremque corporis alias consequuntur at? Libero vitae eligendi illum quaerat modi sequi, ut nobis itaque esse, suscipit atque assumenda nesciunt labore consequuntur inventore eveniet! Cum sint numquam, consectetur inventore aliquam eaque autem! Doloribus iste commodi repellendus, earum repudiandae pariatur facere natus quidem praesentium saepe nam provident voluptas porro placeat animi. Accusantium voluptate optio tenetur numquam explicabo!',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judulKeempat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, animi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum mollitia ut enim id consequuntur dolores aspernatur, recusandae quos provident. Tempora tempore itaque obcaecati aliquid non ratione fuga impedit numquam pariatur ducimus cum repellat, odit aut vel hic quod alias, quas minus atque inventore? Rerum doloremque corporis alias consequuntur at? Libero vitae eligendi illum quaerat modi sequi, ut nobis itaque esse, suscipit atque assumenda nesciunt labore consequuntur inventore eveniet! Cum sint numquam, consectetur inventore aliquam eaque autem! Doloribus iste commodi repellendus, earum repudiandae pariatur facere natus quidem praesentium saepe nam provident voluptas porro placeat animi. Accusantium voluptate optio tenetur numquam explicabo!',
            'category_id' => 1,
            'user_id' => 5
        ]);
    }
}
