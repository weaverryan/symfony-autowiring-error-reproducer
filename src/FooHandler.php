<?php

namespace App;

use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactoryInterface;

class FooHandler
{
    public function __construct(ArgumentMetadataFactoryInterface $foo)
    {
    }
}
