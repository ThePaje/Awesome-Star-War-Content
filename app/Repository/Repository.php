<?php

namespace App\Repository;

interface Repository
{

	public function search(string $search, string $page, string $format);

	public function find(int $id, string $format);

	public function findByUrl(string $url, string $format);

}
