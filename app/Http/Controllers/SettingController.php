<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Setting,Mailer};
use App\Http\Requests\Setting\MailerRequest;

class SettingController extends Controller
{
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
        $mailer = Mailer::first();
        $light_logo=$settings->getFirstMedia('light_logo');
        $dark_logo=$settings->getFirstMedia('dark_logo');
        $favicon_icon=$settings->getFirstMedia('favicon_icon');
        return view('settings.index',compact('light_logo','dark_logo','favicon_icon','settings','mailer'));
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
    
            $settings->update($validation);
    
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
        $mailer = Mailer::first();
        Mailer::updateOrCreate(
            ['id' => $mailer->id],
            ['mail_mailer' => $request->input('mailer'),'mail_host'=>$request->input('host'),'mail_port'=>$request->input('port'),'mail_username'=>$request->input('username'),'mail_pwd'=>$request->input('password'),'mail_enc'=>$request->input('encryption'),'mail_from_addr'=>$request->input('from_address'),'mail_from_name'=>$request->input('from_name')]
        );
        return to_route('settings.show')->with('success','Email Setting Update Successfully.');
    }
}
