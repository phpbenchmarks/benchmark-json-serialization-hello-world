<p align="center">
  <img src="http://www.phpbenchmarks.com/images/logo_github.png">
  <br>
  <a href="http://www.phpbenchmarks.com" target="_blank">www.phpbenchmarks.com</a>
</p>

## What is www.phpbenchmarks.com?

You will find lot of benchmarks for PHP frameworks and template engines.

You can compare results between Apache Bench and Siege, PHP 5.6 to 7.3 and versions of your favorites PHP code.

## What is this repository?

It's data for [JSON serialization hello world](http://www.phpbenchmarks.com/en/documentation/benchmark/json-serialization-hello-world) benchmark.

You can find how we benchmark it [here](http://www.phpbenchmarks.com/en/benchmark-protocol).

## How to use it?

You will need this repository for JSON serialization of "Hello world" benchmark.

You can retrieve data to serialize with `PhpBenchmarks\BenchmarkJsonSerializationHelloWorld\BenchmarkService::getDataToSerialize()`.

As serialization don't need to write anything to response body,
when we validate your serialization we add a parameter into query string
to indicate you need to write serialization result into response body.

Use `PhpBenchmarks\BenchmarkJsonSerializationHelloWorld\BenchmarkService::isWriteToResponseBody()` to know if you have to do it or not.
