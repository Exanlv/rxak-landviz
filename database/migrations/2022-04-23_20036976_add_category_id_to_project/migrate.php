<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->table('projects', function (Blueprint $table) {
    $table->bigInteger('category_id', false, true)->references('id')->on('categories')->after('highlighted')->nullable();
});