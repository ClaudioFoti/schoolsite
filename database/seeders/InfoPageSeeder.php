<?php

namespace Database\Seeders;

use App\Models\InfoPage;
use Database\Factories\InfoPageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InfoPage::factory(5)->create();
    }
}
