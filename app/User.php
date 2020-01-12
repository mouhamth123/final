<?php

namespace App;
use App\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable implements MustVerifyEmail
{




    public function isAdmin(){
        return strtolower(@$this->type) === 'admin'? true : false;
     }
     
     /**Cett méthode va determiner si le user connecté a un role moderator*/
     public function isSimple(){
        return strtolower(@$this->type) === 'simple'? true : false;
     }
     
    public function image()
    {
        return $this->hasMany('App\Image');
    }
    
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
