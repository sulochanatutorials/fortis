<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Tests\Controllers;

use Core\TestCase\CoreTestCase;
use Core\Types\CallbackCatcher;
use FortisAPILib\FortisAPIClient;
use FortisAPILib\Tests\ClientFactory;
use PHPUnit\Framework\TestCase;

class BaseTestController extends TestCase
{
    /**
     * @var CallbackCatcher Callback
     */
    protected static $callbackCatcher;

    protected function newTestCase($result): CoreTestCase
    {
        return new CoreTestCase($this, self::$callbackCatcher, $result);
    }

    protected static function getClient(): FortisAPIClient
    {
        self::$callbackCatcher = new CallbackCatcher();
        return ClientFactory::create(self::$callbackCatcher);
    }
}
