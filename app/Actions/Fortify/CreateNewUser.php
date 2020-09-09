<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Rules\Password;

class CreateNewUser implements CreatesNewUsers
{
    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'contactno' => ['required', 'string', 'contactno', 'max:10', 'unique:users'],
            'password' => ['required', 'string', new Password, 'confirmed'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'contactno' => $input['contactno'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
