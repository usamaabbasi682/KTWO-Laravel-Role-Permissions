<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth,App};
use App\Models\{Setting};
use App\Http\Requests\Setting\MailerRequest;
use Spatie\Permission\Models\Permission;

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
        $header_image=$settings->getFirstMedia('header_image');
        $favicon_icon=$settings->getFirstMedia('favicon_icon');
        return view('settings.index',compact('light_logo','header_image','favicon_icon','settings'));
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
        if ((Permission::where('name','update-setting')->doesntExist() || !Auth::user()->hasPermissionTo('update-setting')) && !Auth::user()->hasRole('admin')) {
            abort(403,'This action is unauthorized.');
        } 

        $validation=$request->validate([
            'app_name' => 'required|max:10|string',
            'app_url' => 'required|url',
            'login_page_heading' => 'nullable|max:150|string'
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
    
            if ($request->has('header_image')) {
                $darkLogo = $settings->getFirstMedia('header_image');
                if (!empty($darkLogo)) {
                    $darkLogo->delete();
                }
                $settings->addMediaFromRequest('header_image')->toMediaCollection('header_image');
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
                $settings->update([
                    'app_name' => $request->input('app_name'),
                    'app_url' => $request->input('app_url'),
                    'login_page_heading' => $request->input('login_page_heading'),
                ]);
                $this->setEnv('APP_NAME', $settings->app_name);
                $this->setEnv('APP_URL', $request->app_url);
            }  else {
                $settings->update([
                    'login_page_heading' => $request->input('login_page_heading'),
                ]); 
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

}
