<?php

namespace Spatie\Activitylog\Exceptions;

use Exception;
use Spatie\Activitylog\Models\Activity;

class InvalidConfiguration extends Exception
{
    /**
     * @param string $className
     * @return static
     */
    public static function modelIsNotValid($className)
    {
        return new static("The given model class `$className` does not extend `".Activity::class.'`');
    }
}
