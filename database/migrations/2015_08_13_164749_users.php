<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('photo');
            $table->enum('role',['admin','author','user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
           array(
               array(
                    'name' => 'Chanifuddin Fanani',
                    'email' => 'chanifuddin@gmail.com',
                    'password' => '$2y$10$guhL7NKKkWq2mnW/trSAZ.Jh3C9mggTLmSM4ry2cLX0la3PNTASAm',
                    'role' => 'admin',
                    'created_at' => '2015-08-12 07:14:21',
                    'updated_at' => '2015-08-13 06:33:01',
               ),
               array(
                    'name' => 'Ach. Chanifuddin Fanani',
                    'email' => 'chanifuddin@live.com',
                    'password' => '$2y$10$guhL7NKKkWq2mnW/trSAZ.Jh3C9mggTLmSM4ry2cLX0la3PNTASAm',
                    'role' => 'admin',
                    'created_at' => '2015-08-12 07:14:21',
                    'updated_at' => '2015-08-13 06:33:01',
               )
           )
        );
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
