<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('app_name')->nullable(true);
            $table->string('app_url')->nullable(true);
            $table->timestamps();
        });
        
        if (Schema::hasTable('settings')) 
        {
            Setting::create([
                'app_name' => env('APP_NAME'),
                'app_url' => env('APP_URL'),
            ]);   
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
