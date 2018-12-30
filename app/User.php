<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class User
 * @package App
 * @property integer $points
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    static public function subPoints($points){
        $user  = User::find(auth()->user()->id);
        $user->points -= $points;
        $user->save();
        return true;
    }

    static public function addPoints($points){
        $user  = User::find(auth()->user()->id);
        $user->points += $points;
        $user->save();
        return true;
    }
}
