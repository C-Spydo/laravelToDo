<?php
/**
 * Created by PhpStorm.
 * User: oluomotoso
 * Date: 12/14/18
 * Time: 3:45 PM
 */
namespace App\Traits;
use Ramsey\Uuid\Uuid;

trait UseUUID
{
    //public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = (string)Uuid::uuid4()->getHex();
        });
    }
}
