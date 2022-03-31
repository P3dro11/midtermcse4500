<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_note',
        'software_note',
        'content_note',
        'equipment_id'
    ];
    protected $table = "note";

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}

