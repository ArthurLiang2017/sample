<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Models\User::class)->times(50)->make();
        User::insert($users->toArray());

        $user = User::find(1);
        $user->name = 'ArthurLiang';
        $user->email = 'arthur_liang@qq.com';
        $user->password = 'password';
        $user->is_admin = true;
        $user->activated = true;
        $user->save();
    }
}
