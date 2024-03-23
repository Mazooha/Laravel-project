<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'files';
    protected $guarded = false;

    public function page(){
        return $this->belongsTo(Page::class, 'page_id', 'id');
    }
}
