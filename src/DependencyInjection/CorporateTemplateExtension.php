<?php

namespace CorporateTemplate;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CorporateTemplateBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
