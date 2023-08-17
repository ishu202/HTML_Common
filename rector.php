<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php70\Rector\ClassMethod\Php4ConstructorRector;

return static function (RectorConfig $rectorConfig): void {

    // register a single rule
    $rectorConfig->rule(
        Php4ConstructorRector::class
    );

    // define sets of rules
    //    $rectorConfig->sets([
    //        LevelSetList::UP_TO_PHP_82
    //    ]);
};
