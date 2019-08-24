<?php
use Illuminate\Database\Seeder;
use App\User;
class InsertUsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
        'id' => 1000000001,
        'name' => 'Bob',
        'password' => Hash::make('Bob')
        ]);
        User::create([
        'id' => 1000000002,
        'name' => 'Alice',
        'password' => Hash::make('Alice')
        ]);
        User::create([
        'id' => 1000000000,
        'name' => 'Admin',
        'password' => Hash::make('Admin'),
        'is_admin' => 1
        ]);
    }
}