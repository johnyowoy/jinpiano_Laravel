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
            $table->id();
            $table->string('email')->unique(); // varchar(150)
            $table->string('password'); // varchar(60)
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name'); // varchar(50)
            $table->string('type'); // varchar(1)
            $table->string('created_at'); // datatime
            $table->string('updated_at'); // datatime
            $table->rememberToken();
            $table->timestamps();
        });
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
