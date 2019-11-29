<?php

declare(strict_types=1);

namespace Sokil\PhpLibraryStarterKit;

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testSayHello(): void
    {
        $helloWorldManager = new HelloWorld();

        ob_start();
        $helloWorldManager->sayHello();
        $result = ob_get_clean();

        $this->assertSame('Hello World', $result);
    }
}
