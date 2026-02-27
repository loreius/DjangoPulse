<?php
/**
 * Tests for DjangoPulse
 */

use PHPUnit\Framework\TestCase;
use Djangopulse\Djangopulse;

class DjangopulseTest extends TestCase {
    private Djangopulse $instance;

    protected function setUp(): void {
        $this->instance = new Djangopulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Djangopulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
