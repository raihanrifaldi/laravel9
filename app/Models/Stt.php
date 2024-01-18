<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Stt extends Model
{
    use HasFactory, Sortable;
    protected $table = 'stt';
    // protected $fillable = ['event, time, speech'];
    protected $guarded = [];

    public $sortable = [

        'id', 'usid', 'event', 'time'
    ];
}
