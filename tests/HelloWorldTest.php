<?php

namespace Sokil\PhpLibraryStarterKit;

class HelloWorldTest extends \PHPU
{
    public function testSayHello()
    {
        $helloWorldManager = new HelloWorld();

        ob_start();
        $helloWorldManager->sayHello();
        $result = ob_get_clean();

        $this->assertSame('Hello World', $result);
    }
}