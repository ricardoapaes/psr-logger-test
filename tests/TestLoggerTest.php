<?php

namespace Psr\Log\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Log\Test\TestLogger;

class TestLoggerTest extends TestCase {
	public function testInstance() {
		$this->assertInstanceOf(TestLogger::class, new TestLogger());
	}
}
