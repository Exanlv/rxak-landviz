<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('projects', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('image');
    $table->string('description');
    $table->json('languages');
    $table->boolean('highlighted');
    $table->timestamps();
});