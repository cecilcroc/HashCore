<?php
/**
 * Tests for HashCore
 */

use PHPUnit\Framework\TestCase;
use Hashcore\Hashcore;

class HashcoreTest extends TestCase {
    private Hashcore $instance;

    protected function setUp(): void {
        $this->instance = new Hashcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hashcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
