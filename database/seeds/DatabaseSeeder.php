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

        DB::table('cocktail')->insert([
                'name' => "Beer",
                'image_url' => "image/beer.png"
            ]);
        DB::table('cocktail')->insert([
                'name' => "Red Wine",
                'image_url' => "image/redwine.png"
            ]);
        DB::table('cocktail')->insert([
                'name' => "White Wine",
                'image_url' => "image/whitewine.png"
            ]);
        DB::table('cocktail')->insert([
                'name' => "Cosmopolitan",
                'image_url' => "image/cosompolitan.png"
            ]);
        DB::table('cocktail')->insert([
                'name' => "Vodka Tonic",
                'image_url' => "image/vodkatonic.png"
            ]);
        DB::table('cocktail')->insert([
                'name' => "Whiskey Sour",
                'image_url' => "image/whiskeysour.png"
            ]);
        DB::table('cocktail')->insert([
                'name' => "Nyquil",
                'image_url' => "image/nyquil.jpeg"
            ]);
    }
}
