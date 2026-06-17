<?php
/**
 * Tests for BlockTide
 */

use PHPUnit\Framework\TestCase;
use Blocktide\Blocktide;

class BlocktideTest extends TestCase {
    private Blocktide $instance;

    protected function setUp(): void {
        $this->instance = new Blocktide(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocktide::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
