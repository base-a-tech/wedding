<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * メールアドレス入力フォーム表示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('admin.auth.password_request');
    }

    public function broker()
    {
        return Password::broker('admins');
    }

    /**
     * メール送信後ページ表示
     * @param Request $request
     * @param $response
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sendResetLinkResponse(Request $request, $response)
    {
        return view('admin.auth.password_request_complete');
    }
}
