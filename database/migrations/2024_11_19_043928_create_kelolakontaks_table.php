<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kelolakontaks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('no_hp');
            $table->string('url_ig');
            $table->string('email');
            $table->string('url_fb');
            $table->string('url_yt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelolakontaks');
    }
};
