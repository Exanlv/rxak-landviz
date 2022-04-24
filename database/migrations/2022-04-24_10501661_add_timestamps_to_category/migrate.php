<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->table('categories', function (Blueprint $table) {
    $table->timestamps();
});