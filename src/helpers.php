<?php

use Spatie\Activitylog\ActivityLogger;

if (! function_exists('activity')) {
    /**
     * @param string $logName
     */
    function activity($logName = null)
    {
        $defaultLogName = config('laravel-activitylog.default_log_name');

        return app(ActivityLogger::class)->useLog($logName != null ? $logName : $defaultLogName);
    }
}
