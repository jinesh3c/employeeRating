<?php

use Illuminate\Database\Seeder;
use App\Model\Attribute;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Attribute::create(['title' => 'Expertise and Competence']);
        Attribute::create(['title' => 'Responsiveness']);
        Attribute::create(['title' => 'Communication and Reporting']);
        Attribute::create(['title' => 'Trustworthiness (Confidentiality)']);
        Attribute::create(['title' => 'Quality of Service']);
    }
}
