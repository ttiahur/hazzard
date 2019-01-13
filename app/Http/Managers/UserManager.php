<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 11.01.2019
 * Time: 20:32
 */

namespace App\Http\Managers;


use App\Bets;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class UserManager
{
    static public function account()
    {
        $user = User::find(auth()->user()->id);
        return $user;
    }

    static public function addPoints($points)
    {
        $user = User::find(auth()->user()->id);
        $user->points += $points;
        $user->save();
        return $user->points;
    }

    static public function update($request)
    {
        $user = User::find(auth()->user()->id);
        $user->name = $request->post('name');
        $user->surname = $request->post('surname');
        $user->email = $request->post('email');
        $user->phone_number = $request->post('phone_number');
        $user->city = $request->post('city');
        $user->street = $request->post('street');
        $user->post_code = $request->post('post_code');

        $password = $request->post('password');
        $password2 = $request->post('password2');
        if (strlen($password) >= 6 && $password === $password2) {
            $user->password = Hash::make($password);
        }
        $user->save();
        return $user;
    }

}
