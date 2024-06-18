<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProvider extends Model
{
    use HasFactory;
    protected $table = "user_provider";
    protected $fillable = ["user_id", "home_name", "website", "work_email", "phone_number", "state", "city", "zipcode", "street", "home_description"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}
