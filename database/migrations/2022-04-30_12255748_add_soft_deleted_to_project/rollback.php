<?php

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

Manager::schema()->table('projects', function (Blueprint $table) {
    $table->dropColumn('deleted_at');
});