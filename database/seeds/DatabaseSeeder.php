<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::where('email', 'admin@example.com')->first();
        if ($user === null) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('secret'),
                'is_admin' => 1,
            ]);
        }
        $users = factory(App\User::class, 10)->create();

        DB::table('cocktails')->insert([
                'name' => "Beer",
                'image_url' => "image/beer.png",
                'price' => 3.50
            ]);
        DB::table('cocktails')->insert([
                'name' => "Red Wine",
                'image_url' => "image/redwine.png",
                'price' => 6.00
            ]);
        DB::table('cocktails')->insert([
                'name' => "White Wine",
                'image_url' => "image/whitewine.png",
                'price' => 6.00
            ]);
        DB::table('cocktails')->insert([
                'name' => "Cosmopolitan",
                'image_url' => "image/cosmopolitan.png",
                'price' => 8.00
            ]);
        DB::table('cocktails')->insert([
                'name' => "Vodka Tonic",
                'image_url' => "image/vodkatonic.png",
                'price' => 8.00
            ]);
        DB::table('cocktails')->insert([
                'name' => "Whiskey Sour",
                'image_url' => "image/whiskeysour.png",
                'price' => 8.00
            ]);
        DB::table('cocktails')->insert([
                'name' => "Nyquil",
                'image_url' => "image/nyquil.jpeg",
                'price' => 11.00
            ]);
    }
}
