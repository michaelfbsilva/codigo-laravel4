<?php

class Categoria extends Eloquent {
    
    protected $table = 'categorias';
    
    public function foto() {
        return $this->hasMany('Foto', 'categorias_id');
    } 
    
}
