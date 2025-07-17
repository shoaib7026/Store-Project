<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Show the password reset form.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', [
            'token' => $request->route('token'),
            'email' => $request->email,
        ]);
    }

    /**
     * Handle the password reset submission.
     */
    public function store(Request $request): RedirectResponse
    {
        // Step 1: Validate input
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Optional Debug (uncomment if needed):
        /*
        $tokenInDB = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        dd([
            'email_from_form' => $request->email,
            'token_from_form' => $request->token,
            'token_from_db' => $tokenInDB->token ?? 'Not found',
            'matches' => $tokenInDB ? Hash::check($request->token, $tokenInDB->token) : 'No token found in DB',
        ]);
        */

        // Step 2: Try resetting the password
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // Step 3: Handle result
        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', 'Password successfully reset!');
        } else {
            return back()->withInput($request->only('email'))
                         ->withErrors(['email' => __($status)]);
        }
    }
}
