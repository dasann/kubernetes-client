<?php namespace Dasann\Kubernetes\Repositories;

use Dasann\Kubernetes\Collections\IngressCollection;

class IngressRepository extends Repository
{
	protected string $uri = 'ingresses';

	protected function createCollection($response): IngressCollection
	{
		return new IngressCollection($response['items']);
	}
}
