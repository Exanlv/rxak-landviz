<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('users', function (Blueprint $table) {
    $table->id();
    $table->string('username');
    $table->string('email');
    $table->string('password');
    $table->timestamps();
});