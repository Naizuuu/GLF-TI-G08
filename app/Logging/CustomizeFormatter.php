<?php

namespace App\Logging;

use Monolog\Formatter\LineFormatter;

class CustomizeFormatter
{
    public function __invoke($logger)
    {
        foreach($logger->getHandlers() as $handler) {
            $handler->setFormatter(new LineFormatter('[%datetime%] TRABAJOINTEGRAL.%level_name%: %message% %context%'.PHP_EOL));
        }
    }
}