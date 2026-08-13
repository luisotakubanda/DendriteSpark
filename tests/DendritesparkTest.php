<?php
/**
 * Tests for DendriteSpark
 */

use PHPUnit\Framework\TestCase;
use Dendritespark\Dendritespark;

class DendritesparkTest extends TestCase {
    private Dendritespark $instance;

    protected function setUp(): void {
        $this->instance = new Dendritespark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dendritespark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
