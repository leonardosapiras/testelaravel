<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends \Illuminate\Database\Eloquent\Model {

	//setColumnAttribute
	public function setDataXAttribute($value) {
		$this->attributes['data_x'] = \Carbon::createFromFormat('d/m/Y', $value);
		//$this->attributes['data_x'] = \Carbon::parse($value);
	}
	
	//scopeName
	public function scopeDataXPreenchida($query) {
		
		//$query->where('data_x', null, 'is not null');
		
		$query->whereRaw('data_x is not null');
	}
	
	public function scopeDataXNaoPreenchida($query) {
		
		$query->whereRaw('data_x is null');
	}
	
	protected $dates = ['data_x'];

}