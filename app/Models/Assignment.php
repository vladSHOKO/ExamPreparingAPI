<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assignment extends Model
{
    protected $fillable = ['title', 'description', 'correct_answer'];

    public function assignedTasks(): HasMany
    {
        return $this->hasMany(AssignedTask::class);
    }
}
