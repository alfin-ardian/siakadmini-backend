<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class kurikulum extends Model{
    protected $table = 'kurikulum';
    protected $guarded = [];


    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}