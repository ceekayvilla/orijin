<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Emadadly\LaravelUuid\Uuids;

class Recipe extends Model{
    use Uuids;
    //use SoftDeletes;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table='recipes';
    protected $primaryKey = 'id';
    protected $fillable = [ 
     'name',
     'description',
    ];
}