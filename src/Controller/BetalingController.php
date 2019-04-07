<?php
// api/src/Controller/CreateBookPublication.php

namespace App\Controller;

use App\Entity\Factuur;

class BetalingController
{
	public function __invoke(Factuur $data): Factuur
	{
		//$this->bookPublishingHandler->handle($data);
		
		return $data;
	}
}