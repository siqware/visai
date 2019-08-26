<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _Echo extends Model
{
    protected $fillable = ['patient_id', 'title', 'type', 'result', 'conclusion', 'user', 'attachment', 'created_at'];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
