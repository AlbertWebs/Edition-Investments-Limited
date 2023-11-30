<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersData = [
            [
               'name'   =>'Admin',
               'email'  =>'admin@example.com',

               'password' => Hash::make('12345678')
            ],
            [
               'name'       => 'User',
               'email'      => 'user@example.com',

               'password'   => Hash::make('12345678')
            ],
        ];
        foreach ($usersData as $key => $val) {
            User::create($val);
        }
    }
}
