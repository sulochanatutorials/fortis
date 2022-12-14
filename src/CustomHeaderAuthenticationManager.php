<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib;

use Core\Authentication\CoreAuth;
use Core\Request\Parameters\HeaderParam;

/**
 * Utility class for authorization and token management.
 */
class CustomHeaderAuthenticationManager extends CoreAuth implements CustomHeaderAuthenticationCredentials
{
    private $userId;

    private $userApiKey;

    private $developerId;

    /**
     * Returns an instance of this class.
     *
     * @param string $userId User ID
     * @param string $userApiKey User API Key
     * @param string $developerId Developer ID
     */
    public function __construct(string $userId, string $userApiKey, string $developerId)
    {
        parent::__construct(
            HeaderParam::init('user-id', $userId)->required(),
            HeaderParam::init('user-api-key', $userApiKey)->required(),
            HeaderParam::init('developer-id', $developerId)->required()
        );
        $this->userId = $userId;
        $this->userApiKey = $userApiKey;
        $this->developerId = $developerId;
    }

    /**
     * String value for userId.
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * String value for userApiKey.
     */
    public function getUserApiKey(): string
    {
        return $this->userApiKey;
    }

    /**
     * String value for developerId.
     */
    public function getDeveloperId(): string
    {
        return $this->developerId;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $userId User ID
     * @param string $userApiKey User API Key
     * @param string $developerId Developer ID
     */
    public function equals(string $userId, string $userApiKey, string $developerId): bool
    {
        return $userId == $this->userId &&
            $userApiKey == $this->userApiKey &&
            $developerId == $this->developerId;
    }
}
