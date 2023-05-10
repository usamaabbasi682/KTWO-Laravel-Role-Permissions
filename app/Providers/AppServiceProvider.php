<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\{Auth,Blade};
use App\Models\Setting;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $setting=Setting::first();
        view()->share('lightLogo',$setting->getFirstMedia('light_logo'));
        view()->share('faviconIcon',$setting->getFirstMedia('favicon_icon'));
        view()->share('header_image',$setting->getFirstMedia('header_image'));
        view()->share('login_heading',$setting->login_page_heading);
        view()->share('login_page_bg_media',$setting->getFirstMedia('auth_selected_media'));
        view()->share('allowRegistration',$setting->allow_registration);
        view()->share('allowForgotPwd',$setting->allow_forgot_pwd);

        Blade::directive('datetime', function(string $expression) {
            return "<?php echo ($expression)->format('d-m-y h:i A'); ?>";
        });
        
    }
}
