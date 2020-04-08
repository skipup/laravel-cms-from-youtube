<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Profile;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Myo Thant Kyaw',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'is_admin'=>'1'
        ]);
        Profile::create([
            'user_id'=>'1',
            'profile_image'=>'default.png',
            'about'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod deserunt vero dolorem neque temporibus inventore reprehenderit dolore, similique vitae rerum tempore nesciunt sunt ab, laborum ducimus. Dolor magni perspiciatis obcaecati.',
            'facebook_link'=>'www.facebook.com',
            'youtube_link'=>'www.youtube.com',
        ]);

    }
}
?>

