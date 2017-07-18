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
        $this->call(UserTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(UiSkinTableSeeder::class);
        $this->call(UiLayoutTableSeeder::class);
    }
}
