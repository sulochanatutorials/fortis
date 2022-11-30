<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Exceptions\Response412Exception;
use FortisAPILib\Models\ResponseTransationLevel3;
use FortisAPILib\Models\ResponseTransationLevel3Master;
use FortisAPILib\Models\ResponseTransationLevel3Visa;
use FortisAPILib\Models\V1TransactionsLevel3MasterCardRequest;
use FortisAPILib\Models\V1TransactionsLevel3VisaRequest;

class Level3DataController extends BaseController
{
    /**
     * Create a new Level3 entry for a MasterCard
     *
     * @param string $transactionId Transaction ID
     * @param V1TransactionsLevel3MasterCardRequest $body
     *
     * @return ResponseTransationLevel3Master Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewLevel3EntryForAMasterCard(
        string $transactionId,
        V1TransactionsLevel3MasterCardRequest $body
    ): ResponseTransationLevel3Master {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/v1/transactions/{transaction_id}/level3/master-card'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('transaction_id', $transactionId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTransationLevel3Master::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new Level3 entry for a Visa
     *
     * @param string $transactionId Transaction ID
     * @param V1TransactionsLevel3VisaRequest $body
     *
     * @return ResponseTransationLevel3Visa Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewLevel3EntryForAVisa(
        string $transactionId,
        V1TransactionsLevel3VisaRequest $body
    ): ResponseTransationLevel3Visa {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/transactions/{transaction_id}/level3/visa')
            ->auth('global')
            ->parameters(
                TemplateParam::init('transaction_id', $transactionId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTransationLevel3Visa::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Delete a single level3 record
     *
     * @param string $transactionId Transaction ID
     * @param string $level3Id Level 3 ID
     *
     * @return ResponseTransationLevel3 Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteASingleLevel3Record(string $transactionId, string $level3Id): ResponseTransationLevel3
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/v1/transactions/{transaction_id}/level3/{level3_id}'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('transaction_id', $transactionId),
                TemplateParam::init('level3_id', $level3Id)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTransationLevel3::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * View single level3 record
     *
     * @param string $transactionId Transaction ID
     * @param string $level3Id Level 3 ID
     *
     * @return ResponseTransationLevel3 Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function viewSingleLevel3Record(string $transactionId, string $level3Id): ResponseTransationLevel3
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/v1/transactions/{transaction_id}/level3/{level3_id}'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('transaction_id', $transactionId),
                TemplateParam::init('level3_id', $level3Id)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTransationLevel3::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
