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
        Schema::table('complaints', function (Blueprint $table) {
            $table->string("guest_name")->after("image")->nullable();
            $table->string("guest_email")->after("guest_name")->nullable();
            $table->string("guest_telp")->after("guest_email")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('complaints', function (Blueprint $table) {
            $table->dropColumn("guest_name");
            $table->dropColumn("guest_email");
            $table->dropColumn("guest_telp");
        });
    }
};
