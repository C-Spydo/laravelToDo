<?php

namespace App\Models;

use App\Traits\UseUUID;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use UseUUID;
    public $incrementing = false;

    protected $guarded=[];
}
