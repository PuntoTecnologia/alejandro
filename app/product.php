<?php

namespace app;
use DB;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'productos';
    public $imagenes=[];
      public function image(){
    	return $this->hasMany('app\image','producto_id');
    }
}
