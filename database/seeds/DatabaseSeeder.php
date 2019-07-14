<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jeffrey',
            'email' => 'jeffrey@protonmail.com',
            'role' => 'admin',
            'password' => bcrypt('11111111')
        ]);

        DB::table('users')->insert([
            'name' => 'Ahmed',
            'email' => 'ahmed@protonmail.com',
            'password' => bcrypt('11111111')
        ]);


        DB::table('goals')->insert([
            'owner_id' => 2,
            'title' => 'Become A YouTube Blogger',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Integer vel velit in ante blandit tempor et sit amet nisi. Phasellus aliquet pulvinar neque nec venenatis. 
                Donec quis tortor nisl. Mauris et finibus ipsum. Etiam scelerisque sagittis sem, ac tempor mi aliquam in. 
                Aliquam sed nulla quis neque interdum vulputate. Integer quis sagittis arcu. Fusce sed faucibus ipsum. 
                Curabitur non leo malesuada, posuere augue pretium, consequat nisl. Morbi et velit nisl. 
                Aenean rutrum, neque feugiat dapibus vestibulum, massa lorem finibus leo, et facilisis urna metus elementum nibh.
                Pellentesque sed justo sed odio posuere luctus. Nam ante nibh, aliquam vitae mauris id, posuere ornare quam. 
                Fusce nec dui lectus. Sed non aliquet odio. Duis vitae elit a neque luctus sagittis. 
                Suspendisse efficitur ante non est maximus consectetur. Nulla a tellus placerat, auctor purus non, gravida massa. 
                Duis quis lacus vitae nunc lobortis suscipit. Cras consectetur tortor at quam sagittis, vel luctus est pretium. 
                Nam euismod, turpis sit amet imperdiet semper, dui mi faucibus lacus, et condimentum lectus ligula sed mi. 
                Proin cursus egestas leo, id cursus augue tincidunt vel. Donec convallis tempor orci, 
                vel ultrices orci scelerisque vitae. Fusce metus metus, sollicitudin vel venenatis non, varius at nisi. 
                Pellentesque quis dui mauris. Sed porttitor, risus eu efficitur rutrum, sapien est ullamcorper augue, 
                vitae dictum dui magna sit amet quam. Vestibulum dictum, eros malesuada accumsan sollicitudin, 
                enim magna placerat felis, vitae dictum arcu massa non magna.'
        ]);

        DB::table('goals')->insert([
            'owner_id' => 2,
            'title' => 'Learn Hebrew',
            'description' =>
                'Maecenas cursus nibh sed ultricies ullamcorper. Donec mauris lorem, euismod sit amet nibh vitae, 
                pellentesque imperdiet eros. Phasellus ac commodo elit, in sollicitudin ante. Aliquam erat volutpat. 
                Maecenas fringilla nisl a nisl gravida, condimentum accumsan massa vulputate. Donec ac accumsan arcu. 
                Morbi sagittis mi est, vel placerat libero lacinia ut. Phasellus ac massa et odio aliquam lobortis eget 
                at sapien. Mauris tempor eleifend nunc, et dictum nulla ultricies quis. Curabitur iaculis condimentum auctor. 
                Proin mauris tortor, fermentum et finibus non, pellentesque et justo. Class aptent taciti sociosqu ad litora 
                torquent per conubia nostra, per inceptos himenaeos. Nullam lobortis lectus purus, sit amet ultricies 
                eros rutrum sit amet. Mauris finibus vel elit ac semper.
                Aliquam suscipit lorem vel tempus eleifend. Donec vel nunc iaculis metus bibendum vulputate. 
                Praesent velit eros, mattis a est vitae, efficitur posuere ligula. Pellentesque quis est id lacus 
                imperdiet pellentesque. Duis velit est, dapibus et auctor at, tristique id tellus. 
                Proin interdum lorem id mi dapibus, eget imperdiet enim interdum. Duis sagittis interdum porttitor. 
                Sed consequat, diam nec lobortis rutrum, orci augue tincidunt massa, eget rutrum est tortor non justo. 
                Morbi sodales euismod dignissim. Suspendisse et sodales erat, ut viverra nibh.'
        ]);

        DB::table('goals')->insert([
            'owner_id' => 1,
            'title' => 'Become A Princess',
            'description' =>
                'Donec dignissim vitae ligula a accumsan. Integer a metus et dui convallis blandit laoreet a neque. 
                Mauris placerat, augue at viverra eleifend, neque nulla rutrum ante, ut lobortis eros sapien eget est. 
                Quisque imperdiet erat diam, vel viverra mauris ullamcorper placerat. 
                Aliquam sed mauris quis ante dapibus gravida. Integer pharetra neque ante, 
                ut accumsan arcu congue vitae. Vestibulum vitae cursus velit. 
                Nam tristique dui in elementum consectetur. Morbi nec blandit diam. 
                Ut elementum justo lectus, sit amet rhoncus nisl interdum viverra. 
                Mauris pulvinar hendrerit sem. Mauris ut molestie erat.'
        ]);


        DB::table('tasks')->insert([
            'goal_id' => 1,
            'description' => 'Buy A Microphone'
        ]);

        DB::table('tasks')->insert([
            'goal_id' => 2,
            'description' => 'Buy A Hebrew Book'
        ]);

        DB::table('tasks')->insert([
            'goal_id' => 3,
            'description' => 'Buy A Crown'
        ]);
    }
}
