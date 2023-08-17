<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php70\Rector\ClassMethod\Php4ConstructorRector;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {

    // register a single rule
    $rectorConfig->rule(
        Php4ConstructorRector::class
    );

    // define sets of rules
        $rectorConfig->sets([
            LevelSetList::UP_TO_PHP_82 ,
            LevelSetList::UP_TO_PHP_81 ,
            LevelSetList::UP_TO_PHP_80 ,
            LevelSetList::UP_TO_PHP_74 ,
            LevelSetList::UP_TO_PHP_73 ,
            LevelSetList::UP_TO_PHP_72 ,
            LevelSetList::UP_TO_PHP_71 ,
            LevelSetList::UP_TO_PHP_70 ,
            LevelSetList::UP_TO_PHP_56 ,
            LevelSetList::UP_TO_PHP_55 ,
            LevelSetList::UP_TO_PHP_54 ,
            LevelSetList::UP_TO_PHP_53
        ]);
};
