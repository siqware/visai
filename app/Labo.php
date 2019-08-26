<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labo extends Model
{
    protected $fillable = [
        'patient_id',
        'wbc',
        'rbc',
        'lym',
        'mid',
        'gran',
        'lym_perc',
        'mid_perc',
        'gran_perc',
        'hgb',
        'hct',
        'mcv',
        'mch',
        'mchc',
        'plt',
        'triglyceride',
        'cholesterol',
        'glucose',
        'calcium',
        'ac_urique',
        'creatinine',
        'magnesium',
        'sgot',
        'sgpt',
        'crp',
        'h_pylori',
        'hbsag',
        'hbsab',
        'hcv',
        'blood_pressure',
        'pulse',
        'heat',
        'sp_two',
        'user',
        'created_at',
    ];
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
