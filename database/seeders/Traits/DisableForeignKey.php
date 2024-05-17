<?php


namespace Database\Seeders\Traits;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


trait DisableForeignKey
{

    protected function DisableForeignKey()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    }

    protected function EnableForeignKey()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
