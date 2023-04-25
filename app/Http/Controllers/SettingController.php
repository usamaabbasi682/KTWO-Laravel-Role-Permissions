<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth,App};
use App\Models\{Setting};
use App\Http\Requests\Setting\MailerRequest;

class SettingController extends Controller
{

    /**
    * Function which update the env file.
    */
    public function setEnv($name, $value)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                $name . '=' . env($name), $name . '=' . $value, file_get_contents($path)
            ));
        }
    }

    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {
        abort(404); 
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        $settings = Setting::first();
        $light_logo=$settings->getFirstMedia('light_logo');
        $dark_logo=$settings->getFirstMedia('dark_logo');
        $favicon_icon=$settings->getFirstMedia('favicon_icon');
        return view('settings.index',compact('light_logo','dark_logo','favicon_icon','settings'));
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        $validation=$request->validate([
            'app_name' => 'required|max:10|string',
            'app_url' => 'required|url',
        ]);

        try {
            $settings = Setting::first();
            if ($request->has('light_logo')) {
                $lightLogo = $settings->getFirstMedia('light_logo');
                if (!empty($lightLogo)) {
                    $lightLogo->delete();
                }
                $settings->addMediaFromRequest('light_logo')->toMediaCollection('light_logo');
            }
    
            if ($request->has('dark_logo')) {
                $darkLogo = $settings->getFirstMedia('dark_logo');
                if (!empty($darkLogo)) {
                    $darkLogo->delete();
                }
                $settings->addMediaFromRequest('dark_logo')->toMediaCollection('dark_logo');
            }
    
            if ($request->has('favicon_icon')) {
                $faviconIcon = $settings->getFirstMedia('favicon_icon');
                if (!empty($faviconIcon)) {
                    $faviconIcon->delete();
                }
                $settings->addMediaFromRequest('favicon_icon')->toMediaCollection('favicon_icon');
            }


            // Updating Data in Table and .env file
            if(env('APP_NAME') != $request->input('app_name') || env('APP_URL') != $request->input('app_url')) {
                $settings->update($validation);
                $this->setEnv('APP_NAME', $settings->app_name);
                $this->setEnv('APP_URL', $request->app_url);
            }
    
            return to_route('settings.show')->with('success','Setting Update Successfully.');
        } catch (\Exception $e) {
            return to_route('settings.show')->with('error','Something Went Wrong!!');
        }
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }

    public function update_mailer(MailerRequest $request) {
        $request->validated();
        
        $fromAddr= '"'.$request->input('from_address').'"';
        $this->setEnv('MAIL_MAILER',$request->input('mailer'));
        $this->setEnv('MAIL_HOST',$request->input('host'));
        $this->setEnv('MAIL_PORT',$request->input('port'));
        $this->setEnv('MAIL_USERNAME',$request->input('username'));
        $this->setEnv('MAIL_PASSWORD',$request->input('password'));
        $this->setEnv('MAIL_ENCRYPTION',$request->input('encryption'));
        // $this->setEnv('MAIL_FROM_ADDRESS',$fromAddr);
        // $this->setEnv('MAIL_FROM_NAME',$mailer->mail_from_name);

        return to_route('settings.show')->with('success','Email Setting Update Successfully.');
    }

}
