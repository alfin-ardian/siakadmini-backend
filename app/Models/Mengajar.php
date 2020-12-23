<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model{
    protected $table = 'mengajar';
    protected $guarded = [];
    protected $primaryKey = 'idkelas';


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}