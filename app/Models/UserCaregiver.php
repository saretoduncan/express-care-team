<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserCaregiver extends Model
{
    use HasFactory;

    protected $table = 'user_caregiver';
    protected $fillable = ["user_id", "date_of_birth", "gender", "phone_number", "state", "city", "zipcode", "street"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
