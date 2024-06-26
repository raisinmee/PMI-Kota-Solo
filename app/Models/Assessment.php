<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $table = 'assessment';
    protected $primaryKey = 'id_assessment';
    public $timestamps = true;

    protected $fillable = [
        'id_relawan',
        'id_report',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_relawan');
    }

    public function report()
    {
        return $this->belongsTo(Report::class, 'id_report');
    }

    public function kejadianBencana()
    {
        return $this->hasMany(KejadianBencana::class, 'id_assessment');
    }
}
