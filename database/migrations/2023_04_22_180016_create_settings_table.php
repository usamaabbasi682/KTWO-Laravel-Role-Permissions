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
            $table->string('login_page_heading')->nullable(true)->default('Welcome back! Please log in to access your account.');
            $table->boolean('allow_registration')->nullable(true)->default(false);
            $table->boolean('allow_forgot_pwd')->nullable(true)->default(false);
            $table->timestamps();
        });
        
        if (Schema::hasTable('settings')) 
        {
            $mediaItems = [];
            Setting::create([
                'app_name' => env('APP_NAME'),
                'app_url' => env('APP_URL'),
            ]);  
             
            $settings = Setting::firstOrFail();
            $filePaths = [
                '/app/auth/bg1.jpg', '/app/auth/bg1-dark.jpg', '/app/auth/bg2.jpg', '/app/auth/bg2-dark.jpg',
                '/app/auth/bg3.jpg', '/app/auth/bg3-dark.jpg', '/app/auth/bg4.jpg', '/app/auth/bg4-dark.jpg',
                '/app/auth/bg5.jpg', '/app/auth/bg5-dark.jpg', '/app/auth/bg6.jpg', '/app/auth/bg6-dark.jpg',
                '/app/auth/bg7.jpg', '/app/auth/bg7-dark.jpg', '/app/auth/bg8.jpg', '/app/auth/bg8-dark.jpg',
                '/app/auth/bg9.jpg', '/app/auth/bg9-dark.jpg', '/app/auth/bg10.jpeg', '/app/auth/bg10-dark.jpeg',
            ];
    
            foreach($filePaths as $filePath) {
                $mediaItems=$settings->addMedia(storage_path($filePath))->preservingOriginal()->toMediaCollection('auth_page_media');
            }
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
