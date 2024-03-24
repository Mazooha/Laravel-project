<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'files';
    protected $guarded = false;

    public function page(){
        return $this->belongsTo(Page::class, 'page_id', 'id');
    }
}
