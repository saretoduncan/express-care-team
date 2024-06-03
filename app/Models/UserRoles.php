<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class UserRoles extends Model
{
    use HasFactory;
    protected $table = "roles";
    protected $fillable = ["role"];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'users_roles','role_id','user_id');
    }
}
