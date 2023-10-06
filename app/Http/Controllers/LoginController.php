<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    protected function validateLogin($data)
    {

        Validator::make($data, [
            'email' => 'required|string',
            'password' => 'required|string',
        ])->validate();

    }

    public function login(Request $request)
    {
        $this->validateLogin($request->all());

            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))
            )
            {
                return redirect()->route('HomePage');
            }
            else
            {
                return redirect()->back()->with('خطا');
            }

    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
    return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
}
