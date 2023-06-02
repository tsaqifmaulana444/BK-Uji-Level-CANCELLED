<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }
}
