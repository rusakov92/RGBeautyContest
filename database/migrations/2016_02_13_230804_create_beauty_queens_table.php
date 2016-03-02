<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBeautyQueensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beauty_queens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('rg_number');
            $table->timestamps();
        });

        $date = date('Y-m-d H:i:s');

        $data = [
            ['name' => 'Name name', 'rg_number' => 17, 'created_at' => $date, 'updated_at' => $date],
        ];

        DB::table('beauty_queens')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beauty_queens');
    }
}
