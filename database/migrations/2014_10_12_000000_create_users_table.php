<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        $date = date('Y-m-d H:i:s');

        $data = [];
        for ($users = 0; $users < 320; ++$users) {
            $data[] = [
                'name' => substr(md5(uniqid(rand(), true)), 0, 10),
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }

        $data[] = ['name' => 'admin', 'created_at' => $date, 'updated_at' => $date];

        DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
