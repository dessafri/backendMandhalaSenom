<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mentorModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nama', 'jabatan', 'photo'];
    protected $table = 'mentor';

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
