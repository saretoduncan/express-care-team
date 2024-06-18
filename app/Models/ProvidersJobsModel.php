<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProvidersJobsModel extends Model
{
    use HasFactory;
    protected $table = 'providers_jobs';
    protected $fillable = ['work_type','user_id', 'start_date', 'end_date', 'shift_start','shift_end', 'people_needed', 'rate_per_hour', 'payment_period', 'role', 'certificates_needed'];

    protected function cast()
    {
        return [
            'certificate_needed' => 'array'
        ];
    }
    public  function provider(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    

}
