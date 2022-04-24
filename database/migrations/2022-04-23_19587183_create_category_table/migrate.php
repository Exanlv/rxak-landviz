<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->create('categories', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->integer('weight');
});
