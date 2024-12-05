<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->id();           
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('group_id');
            $table->date('expired_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('membership');
    }
};
