<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cucu extends Model
{
    protected $fillable = ['nama', 'tanggal_lahir', 'alamat'];

	public function cucus()
	{
		return $this->hasMany(Cucu::class);
	}
}
