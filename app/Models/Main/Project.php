<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;
// Add
use Illuminate\Support\Str;
use App\Models\Other\ProjectStatus;

class Project extends Model
{
    /**
     * UUIDs
     */
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id',
        'name',
        'description',
        'status_id',
        'start_date',
        'end_date',
        'picture',

        'created_at',
    ];


    /**
     * status
     */
    public function status(){
        return $this->hasOne(ProjectStatus::class, 'id', 'status_id');
    }


}
