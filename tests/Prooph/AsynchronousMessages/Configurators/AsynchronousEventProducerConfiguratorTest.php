<?php declare(strict_types = 1);

namespace LidskaSila\Prooph\Tests\AsynchronousMessages;

use LidskaSila\Prooph\AsynchronousMessages\AsynchronousMessageProducer;
use LidskaSila\Prooph\Tests\Configurators\ProophExtensionTestCase;

class AsynchronousEventProducerConfiguratorTest extends ProophExtensionTestCase
{

	const TEST_PRODUCER_ROUTE_KEY = 'producerRouteKey';

	public function testGet_FromTestContainer_ShouldReturnExpectedInstance()
	{
		$this->givenTestContainer('AsynchronousMessages/AsynchronousEventProducerTest.neon');

		$producer = $this->whenGetServiceByNameFromContainer('prooph.asynchronous_messaging.events');

		$this->thenIsInstanceOfExpectedClass(AsynchronousMessageProducer::class, $producer);
	}

	protected function setUp()
	{
		parent::setUp();
	}
}