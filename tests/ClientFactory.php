<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Tests;

use Core\Types\CallbackCatcher;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): \FortisAPILib\FortisAPIClient
    {
        $clientBuilder = \FortisAPILib\FortisAPIClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(
        \FortisAPILib\FortisAPIClientBuilder $builder
    ): \FortisAPILib\FortisAPIClientBuilder {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        \FortisAPILib\FortisAPIClientBuilder $builder
    ): \FortisAPILib\FortisAPIClientBuilder {
        $timeout = getenv('FORTIS_API_LIB_TIMEOUT');
        $numberOfRetries = getenv('FORTIS_API_LIB_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('FORTIS_API_LIB_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('FORTIS_API_LIB_ENVIRONMENT');
        $userId = getenv('FORTIS_API_LIB_USER_ID');
        $userApiKey = getenv('FORTIS_API_LIB_USER_API_KEY');
        $developerId = getenv('FORTIS_API_LIB_DEVELOPER_ID');

        if ($timeout !== false && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if ($numberOfRetries !== false && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if ($maximumRetryWaitTime !== false && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if ($environment !== false) {
            $builder->environment($environment);
        }

        if ($userId !== false) {
            $builder->userId($userId);
        }

        if ($userApiKey !== false) {
            $builder->userApiKey($userApiKey);
        }

        if ($developerId !== false) {
            $builder->developerId($developerId);
        }

        return $builder;
    }
}
