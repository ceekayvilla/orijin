<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Emadadly\LaravelUuid\Uuids;

class Brand extends Model{
    use Uuids;
    use SoftDeletes;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table='brands';
    protected $primaryKey = 'id';
    protected $fillable = [ 
     'name',
     'description',
    ];
}