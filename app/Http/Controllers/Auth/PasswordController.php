<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request)
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $oldPassword = $request->user()->password;

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        // Log password change for security auditing
        Log::info('Password changed for user: ' . $request->user()->email);

        return back()->with('status', 'password-updated');
    }
}
