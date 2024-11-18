<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('rambu', function (Blueprint $table) {
            $table->json('dokumentasi')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('rambu', function (Blueprint $table) {
            $table->string('dokumentasi')->nullable()->change();
        });
    }
    
};
