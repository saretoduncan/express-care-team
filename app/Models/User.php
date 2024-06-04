<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'terms_accepted',
        'email',
        'password',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'terms_accepted' => 'boolean'
        ];
    }
    //roles relationship
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(UserRoles::class, 'users_roles', 'user_id', 'role_id');
    }
    public function hasRole(string $role)
    {
        return $this->roles()->where('role', $role)->first();
    }
    //caregiver relationship
    public function caregiver(): HasOne
    {
        return $this->hasOne(UserCaregiver::class);
    }

    //provider relationship
    public function provider(): HasOne
    {
        return $this->hasOne(UserProvider::class);
    }
}
