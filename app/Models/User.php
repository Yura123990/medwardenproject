<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected static function boot()
{
    parent::boot();

    static::created(function ($user) {
        if ($user->role === 'doctor') {
            // Create a record in the "doctors" table for the user
            Doctor::create(['user_id' => $user->id]);
        }
    });

    static::updated(function ($user) {
        if ($user->isDirty('role') && $user->role === 'doctor') {
            // Check if the role has changed to 'doctor' and create/update the "doctors" record
            $doctor = Doctor::where('user_id', $user->id)->first();
            if ($doctor) {
                // Update the existing "doctors" record
                $doctor->update(['user_id' => $user->id]);
            } else {
                // Create a new "doctors" record
                Doctor::create(['user_id' => $user->id]);
            }
        }
    });

}
}
