<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Service\PHPService;

class ServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $service =  new PHPService();

        $result = $service->IdCheck(1,1);

        $this->assertTrue($result);
    }
}
