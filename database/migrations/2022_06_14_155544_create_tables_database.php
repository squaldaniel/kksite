<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTablesDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::select(DB::RAW('create table comunity_pessoas(
            id bigint auto_increment primary key,
            email varchar(60) unique,
            snhpwd text,
            nome varchar(30),
            sobrenome varchar(50)
        )engine=innodb charset=utf8mb4'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables_database');
    }
}
