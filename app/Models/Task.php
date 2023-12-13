<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'project_name',
        'due_date',
        'category',
        'assignedto',
    ];
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
