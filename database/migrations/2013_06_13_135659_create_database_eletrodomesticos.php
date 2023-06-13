<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDatabaseEletrodomesticos extends Migration
{
    public function up()
    {
        $databaseName = 'eletrodomesticos';

        if (!DB::statement("SELECT 1 FROM pg_database WHERE datname = '{$databaseName}'")) {
            DB::statement("CREATE DATABASE {$databaseName}");
        }
    }

    public function down()
    {

    }
}