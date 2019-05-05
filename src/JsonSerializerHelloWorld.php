<?php

namespace PhpBenchmarks\JsonSerializerHelloWorld;

class JsonSerializerHelloWorld
{
    public static function getDataToSerialize()
    {
        return ['Hello World !'];
    }

    public static function isWriteToResponseBody()
    {
        return @$_GET['phpBenchmarksShowResults'] === '1';
    }
}
