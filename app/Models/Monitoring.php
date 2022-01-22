<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = [
        'tanggal_mulai',
        'tanggal_berakhir'
    ];

    public function scopeFilter($query, $filter)
    {
        if(isset($filter)) {
            return $query->where('project_leader', 'like', "%{$filter}%");
        }

    }
}
