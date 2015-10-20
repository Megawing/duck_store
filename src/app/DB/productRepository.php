<?php

namespace App\DB;

class ProducrRepository
{
	private $connection;
	public function __construct(Connection $connection)
{
	$this-> connection = $connection;
}

}
//дальше см. на видео