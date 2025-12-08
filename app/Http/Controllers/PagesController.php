<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         return view ('pages.index');
    }

    public function overview()
    {
        //
         return view ('pages.userprofile.overview');
    }

    public function project()
    {
        //
         return view ('pages.userprofile.project');
    }

    public function campaigns()
    {
        //
         return view ('pages.userprofile.campaigns');
    }

    public function documents()
    {
        //
         return view ('pages.userprofile.documents');
    } 

    public function followers()
    {
        //
         return view ('pages.userprofile.followers');
    } 

    public function activity()
    {
        //
         return view ('pages.userprofile.activity');
    } 

    public function overview1()
    {
        //
         return view ('pages.account.overview');
    }

    public function settings()
    {
        //
         return view ('pages.account.settings');
    }

    public function security()
    {
        //
         return view ('pages.account.security');
    }

    public function activity1()
    {
        //
         return view ('pages.account.activity');
    } 

    public function billing()
    {
        //
         return view ('pages.account.billing');
    }

    public function statements()
    {
        //
         return view ('pages.account.statements');
    }

    public function referrals()
    {
        //
         return view ('pages.account.referrals');
    }

    public function api()
    {
        //
         return view ('pages.account.api');
    }

    public function logs()
    {
        //
         return view ('pages.account.logs');
    }

    public function signin()
    {
        //
         return view ('pages.authentication.corporate-layout.sign-in');
    }

    public function signup()
    {
        //
         return view ('pages.authentication.corporate-layout.sign-up');
    }

    public function twofactor()
    {
        //
         return view ('pages.authentication.corporate-layout.two-factor');
    }

    public function ResetPassword()
    {
        //
         return view ('pages.authentication.corporate-layout.reset-password');
    }

    public function NewPassword()
    {
        //
         return view ('pages.authentication.corporate-layout.new-password');
    }

    public function signin1()
    {
        //
         return view ('pages.authentication.overlay-layout.sign-in');
    }

    public function signup1()
    {
        //
         return view ('pages.authentication.overlay-layout.sign-up');
    }

    public function twofactor1()
    {
        //
         return view ('pages.authentication.overlay-layout.two-factor');
    }

    public function ResetPassword1()
    {
        //
         return view ('pages.authentication.overlay-layout.reset-password');
    }

    public function NewPassword1()
    {
        //
         return view ('pages.authentication.overlay-layout.new-password');
    }

    public function signin2()
    {
        //
         return view ('pages.authentication.creative-layout.sign-in');
    }

    public function signup2()
    {
        //
         return view ('pages.authentication.creative-layout.sign-up');
    }

    public function twofactor2()
    {
        //
         return view ('pages.authentication.creative-layout.two-factor');
    }

    public function ResetPassword2()
    {
        //
         return view ('pages.authentication.creative-layout.reset-password');
    }

    public function NewPassword2()
    {
        //
         return view ('pages.authentication.creative-layout.new-password');
    }

    public function signin3()
    {
        //
         return view ('pages.authentication.fancy-layout.sign-in');
    }

    public function signup3()
    {
        //
         return view ('pages.authentication.fancy-layout.sign-up');
    }

    public function twofactor3()
    {
        //
         return view ('pages.authentication.fancy-layout.two-factor');
    }

    public function ResetPassword3()
    {
        //
         return view ('pages.authentication.fancy-layout.reset-password');
    }

    public function NewPassword3()
    {
        //
         return view ('pages.authentication.fancy-layout.new-password');
    }

    public function WelcomeMessage()
    {
        //
         return view ('pages.authentication.email-templates.welcome-message');
    }

    public function ResetPassword4()
    {
        //
         return view ('pages.authentication.email-templates.reset-password');
    }

    public function subscription()
    {
        //
         return view ('pages.authentication.email-templates.subscription-confirmed');
    }

    public function card()
    {
        //
         return view ('pages.authentication.email-templates.card-declined');
    }

    public function promo1()
    {
        //
         return view ('pages.authentication.email-templates.promo1');
    }

    public function promo2()
    {
        //
         return view ('pages.authentication.email-templates.promo2');
    }

    public function promo3()
    {
        //
         return view ('pages.authentication.email-templates.promo3');
    }

    public function MultiSteps()
    {
        //
         return view ('pages.authentication.multi-steps-sign-up');
    }

    public function welcome()
    {
        //
         return view ('pages.authentication.welcome');
    }

    public function VerifyEmail()
    {
        //
         return view ('pages.authentication.verify-email');
    }

    public function ComingSoon()
    {
        //
         return view ('pages.authentication.coming-soon');
    }

    public function PasswordConfirmation()
    {
        //
         return view ('pages.authentication.coming-soon');
    }

    public function AccountDeactivated()
    {
        //
         return view ('pages.authentication.coming-soon');
    }

    public function error404()
    {
        //
         return view ('pages.authentication.error-404');
    }

    public function error500()
    {
        //
         return view ('pages.authentication.error-500');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
