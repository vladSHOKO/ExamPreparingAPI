<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AssignedTask extends Model
{
    protected $fillable = [
        'user_id',
        'assignment_id',
        'custom_question',
        'student_answer',
        'is_completed',
        'started_at',
        'completed_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }

    public function interactions(): HasMany
    {
        return $this->hasMany(AgentInteraction::class);
    }
}
