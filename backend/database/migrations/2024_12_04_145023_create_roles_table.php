<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Create the role_user pivot table
        Schema::create('role_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->primary(['user_id', 'role_id']);
        });

        // Insert default roles
        DB::table('roles')->insert([
            ['name' => 'Station Staff', 'slug' => 'station_staff', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Station Owner', 'slug' => 'station_owner', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Office Staff', 'slug' => 'office_staff', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Depot Staff', 'slug' => 'depot_staff', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Greystar Admin', 'slug' => 'greystar_admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'App Admin', 'slug' => 'app_admin', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('roles');
    }
};
