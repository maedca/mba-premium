<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
	use SoftDeletes;
	
    protected $fillable = [
		'status',
		'date',
		'university_id', //universidad
		'user_id' //asistente
	];

	protected $dates = [
		'date',
		'deleted_at'
	];

	public function university()
	{
		return $this->belongsTo(User::class, 'university_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
