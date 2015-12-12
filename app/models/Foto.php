<?php

class Foto extends Eloquent {
    
    protected $table = 'fotos';
    
    public function categoria() {
        return $this->belongsTo('Categoria', 'id');
    }
    
    
}
