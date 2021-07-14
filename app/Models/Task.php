<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'taskname', 'vendor', 'siteid'
    ];


    public function site()
    {
        return $this->belongsTo(Site::class, 'siteid');
    }
}
