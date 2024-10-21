<?php

declare(strict_types=1);

use Framework\TemplateEngine;
use App\Config\Paths;

// Factory function (creates an instance of a class)
return [
    TemplateEngine::class => fn() => new TemplateEngine(Paths::VIEW)
];
