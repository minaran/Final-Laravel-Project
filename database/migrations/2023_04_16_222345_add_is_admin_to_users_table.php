<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. // parcijalno smo migaciju uradili da dodamo jednu kolonu is_admin, zato nije Schema::create...vec Sh..table
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->boolean('is_admin')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
