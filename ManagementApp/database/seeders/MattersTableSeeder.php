<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matter;

class MattersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 100件ダミーデータを作成
        \App\Models\Matter::factory()->count(100)->create();
        // factory(App\Models\Matter::class, 100)->create();
    }
}
