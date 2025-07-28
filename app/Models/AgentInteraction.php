<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AgentInteraction extends Model
{
    protected $fillable = ['assigned_task_id', 'sender', 'message'];

    public function assignedTask(): BelongsTo
    {
        return $this->belongsTo(AssignedTask::class);
    }
}
