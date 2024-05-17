<?php

namespace Database\Seeders;

use Database\Seeders\Traits\DisableForeignKey;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    use TruncateTable, DisableForeignKey;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->DisableForeignKey();
        $this->truncate('users');
        $users =  \App\Models\User::factory(10)->create();
        $this->EnableForeignKey();
    }
}
