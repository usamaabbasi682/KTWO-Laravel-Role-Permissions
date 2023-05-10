<?php 

namespace App\Traits;

use App\Models\Setting;

trait SettingTrait {

    public function checkRegistrationPermission() 
    {
        $setting=Setting::first();
        return $setting->allow_registration;
    }
}

?>