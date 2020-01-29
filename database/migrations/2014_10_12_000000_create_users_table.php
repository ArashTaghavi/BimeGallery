<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('is_admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        $user = [
            'name' => 'مدیر سایت',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$r8RSHq78QJvDUa./.9DeuO/O3iAZZpbT/E1tIAtZHMLrTAy4gtCWG',
            'is_admin' => 1,
            'created_at'=>date('Y/m/d h:i:s'),
            'updated_at'=>date('Y/m/d h:i:s'),
        ];
        \Illuminate\Support\Facades\DB::table('users')->insert($user);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
