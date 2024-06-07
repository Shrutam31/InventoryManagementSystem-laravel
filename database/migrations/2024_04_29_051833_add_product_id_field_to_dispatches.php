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
        Schema::table('dispatches', function (Blueprint $table) {
            $table->string('product_id')->after('category');
            $table->string('name')->after('product_id');
            $table->string('description')->after('name');
            $table->string('price')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dispatches', function (Blueprint $table) {
            $table->dropColumn('product_id');
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('price');
            
        });
    }
};
