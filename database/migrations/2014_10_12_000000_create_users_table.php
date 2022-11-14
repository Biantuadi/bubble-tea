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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user');
            $table->string('phone_number')->default('+33 06 00 52 01 23');
            $table->string('address')->default('18 rue Heloise 75000, Paris');
            $table->string('bio')->default('Je suis un utilisateur de la plateforme, je peux créer des annonces et les modifier');
            $table->string('avatar')->default('https://smsh-862737-juc1ugur1qwqqqo4.stackpathdns.com/2569356/wp-content/uploads/2020/11/AdobeStock_241083104-1400x934.jpg?size=1400x934&lossy=1&strip=1&webp=1');
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
