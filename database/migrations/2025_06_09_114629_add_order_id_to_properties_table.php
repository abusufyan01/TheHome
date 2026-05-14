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
    Schema::table('properties', function (Blueprint $table) {
        $table->unsignedBigInteger('order_id')->nullable()->after('agent_id');

        // Optional: Add foreign key constraint (recommended)
        $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
public function down(): void
{
    Schema::table('properties', function (Blueprint $table) {
        $table->dropForeign(['order_id']);
        $table->dropColumn('order_id');
    });
}



    
};
