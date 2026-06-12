<?php
/**
 * Tests for CryptoSpin
 */

use PHPUnit\Framework\TestCase;
use Cryptospin\Cryptospin;

class CryptospinTest extends TestCase {
    private Cryptospin $instance;

    protected function setUp(): void {
        $this->instance = new Cryptospin(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptospin::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
