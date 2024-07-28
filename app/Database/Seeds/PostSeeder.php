<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        //  membuat data
        $posts_data = [
            [
                'title'  => 'dega weeee',
                'slug'   => 'try',
                'content'=> 'Lorem ipsum dolor sit amet, consectetur
adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.'
            ],
            [
                'title'  => 'Learn !',
                'slug'   => 'lorem ipsum',
                'content'=> 'Sed ut perspiciatis unde omnis iste natus error
sit voluptatem accusantium doloremque laudantium, totam rem aperiam.'
            ],
            [
                'title'  => 'hm',
                'slug'   => 'undefined',
                'content'=> 'At vero eos et accusamus et iusto odio
dignissimos ducimus qui blanditiis voluptatum deleniti atque corrupti quos.'
            ]
        ];

        foreach($posts_data as $data) {
            // insert semua data kedalam tabel
            $this->db->table('posts')->replace($data);
        }
    }
}