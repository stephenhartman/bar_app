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
        $users = factory(App\User::class, 10)-create();
    }
}
