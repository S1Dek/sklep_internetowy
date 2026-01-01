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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('full_name')->after('user_id');
            $table->string('email')->after('full_name');
            $table->string('phone')->nullable()->after('email');
            $table->string('address_line')->after('phone');
            $table->string('postal_code')->after('address_line');
            $table->string('city')->after('postal_code');
            $table->text('notes')->nullable()->after('city');
        });
    }
    /**
     * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'full_name',
                'email',
                'phone',
                'address_line',
                'postal_code',
                'city',
                'notes',
            ]);
        });
    }
};
