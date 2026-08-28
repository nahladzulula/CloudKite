<?php
/**
 * Tests for CloudKite
 */

use PHPUnit\Framework\TestCase;
use Cloudkite\Cloudkite;

class CloudkiteTest extends TestCase {
    private Cloudkite $instance;

    protected function setUp(): void {
        $this->instance = new Cloudkite(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cloudkite::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
