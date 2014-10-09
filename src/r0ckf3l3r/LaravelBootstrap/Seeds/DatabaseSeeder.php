<?php
namespace r0ckf3l3r\LaravelBootstrap\Seeds;
use Illuminate\Database\Seeder;
use Eloquent;

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();
        $this->call('r0ckf3l3r\LaravelBootstrap\Seeds\ExampleUserSeeder');
        $this->call('r0ckf3l3r\LaravelBootstrap\Seeds\ExampleSettingsSeeder');
        $this->command->info('All Tables Seeded');
    }

}
