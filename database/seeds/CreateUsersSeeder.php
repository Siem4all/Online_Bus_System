<?php
  
use Illuminate\Database\Seeder;
use App\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'gc@gc.com',
                'is_admin'=>'1',
                'is_conductor'=>'0',
               'password'=> bcrypt('admingc12345'),
            ],
            [
               'name'=>'Conductor',
               'email'=>'ece@ece.com',
                'is_admin'=>'0',
                'is_conductor'=>'1',
               'password'=> bcrypt('ece12345'),
            ],
            [
               'name'=>'User',
               'email'=>'user@user.com',
                'is_admin'=>'0',
                'is_conductor'=>'0',
               'password'=> bcrypt('user12345'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}