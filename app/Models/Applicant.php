<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Applicant extends Model
{
    protected $fillable = [
        'job_id',
        'user_id',
        'full_name',
        'contact_phone',
        'contact_email',
        'message',
        'location',
        'resume_path',
    ];

    // relation to job
    public function job(): BelongsTo{
        return $this->belongsTo(Job::class);
    }

    // relation to user
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    // relation to applicants
    public function applicants(): HasMany{
        return $this->hasMany(Applicant::class, 'user_id');
    }
}
