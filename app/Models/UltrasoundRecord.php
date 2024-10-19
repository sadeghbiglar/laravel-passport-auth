<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UltrasoundRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'national_id',
        'phone_number',
        'exam_type',
        'exam_date',
        'gestational_age',
        'fetal_heart_rate',
        'amniotic_fluid_index',
        'comments',
    ];
}
