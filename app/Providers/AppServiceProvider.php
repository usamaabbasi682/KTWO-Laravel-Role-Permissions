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
        $lightLogo=$setting->getFirstMedia('light_logo');
        $faviconIcon = $setting->getFirstMedia('favicon_icon');
        $header_image = $setting->getFirstMedia('header_image');
        view()->share('lightLogo',$lightLogo);
        view()->share('faviconIcon',$faviconIcon);
        view()->share('header_image',$header_image);
        view()->share('login_heading',$setting->login_page_heading);

        Blade::directive('datetime', function(string $expression) {
            return "<?php echo ($expression)->format('d-m-y h:i A'); ?>";
        });
        
    }
}
