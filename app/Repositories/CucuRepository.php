<?php

namespace App\Repositories;

use App\User;
use App\Cucu;

class CucuRepository
{
	
	public function forUser(Cucu $cucu)
	{
		return $cucu->cucus()
					 ->orderBy('created_at', 'asc')
					 ->get();
	}

}