<?php

namespace PhpCommonEnums\HttpMethod\Tests\Enumeration;

use PhpCommonEnums\HttpMethod\Enumeration\HttpMethodEnum;
use PHPUnit\Framework\TestCase;

class HttpMethodEnumTest extends TestCase
{
    public function testExpectedValue(): void
    {
        self::assertEquals(
            'GET',
            HttpMethodEnum::Get->value
        );
        self::assertEquals(
            'HEAD',
            HttpMethodEnum::Head->value
        );
        self::assertEquals(
            'POST',
            HttpMethodEnum::Post->value
        );
        self::assertEquals(
            'PUT',
            HttpMethodEnum::Put->value
        );
        self::assertEquals(
            'DELETE',
            HttpMethodEnum::Delete->value
        );
        self::assertEquals(
            'CONNECT',
            HttpMethodEnum::Connect->value
        );
        self::assertEquals(
            'OPTIONS',
            HttpMethodEnum::Options->value
        );
        self::assertEquals(
            'TRACE',
            HttpMethodEnum::Trace->value
        );
        self::assertEquals(
            'PATCH',
            HttpMethodEnum::Patch->value
        );
    }
}
