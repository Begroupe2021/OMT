<?php

namespace Imanghafoori\LaravelMicroscope\ErrorTypes;

trait MicroEvent
{
    public $data;

    public static function warn($absPath, $lineNumber, $name)
    {
        $e = new self();
        $e->data = compact('absPath', 'lineNumber', 'name');
        event($e);
    }
}
