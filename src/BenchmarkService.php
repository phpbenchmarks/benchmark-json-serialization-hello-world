<?php

namespace PhpBenchmarks\BenchmarkJsonSerializationHelloWorld;

class BenchmarkService
{
    /** @return array */
    public static function getDataToSerialize()
    {
        return ['Hello World !'];
    }

    /** @return bool */
    public static function isWriteToResponseBody()
    {
        return @$_GET['phpBenchmarksShowResults'] === '1';
    }
}
