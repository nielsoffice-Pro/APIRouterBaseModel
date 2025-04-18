<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsapiExamTypeApi extends Model
{
    use HasFactory;

    protected $table = 'msapi_exam_type';

    protected $fillable = [
        'user_id',
        'ms_type',
        'ms_categories',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
