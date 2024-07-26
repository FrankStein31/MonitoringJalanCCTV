<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'nis', 'class', 'role', 'access_token',
    ];

    protected $hidden = [
        'password', 'access_token',
    ];

    protected $casts = [
        'is_deleted' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function promoteToStudent()
    {
        if ($this->role !== 'student') {
            $this->role = 'student';
            $this->save();
        }
    }


    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
}