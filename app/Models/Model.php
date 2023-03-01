<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Model extends BaseModel
{
    use HasFactory;

    public $incrementing  = false;

    // define static method
    public static function boot(){
        parent::boot();

        // register model hoop
        static::creating(function($model){
            // set id equal to string to generate uuid for the model
            // $model->id = Str::uuid(); // not appicable to use for other models
            $model->{$model->getKeyName()} = (string)Str::uuid();  // cast into string
        });
    }

    protected $guarded = [];
}
