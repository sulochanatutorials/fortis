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
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Exceptions\Response412Exception;
use FortisAPILib\Models\Expand47Enum;
use FortisAPILib\Models\ResponseTransaction;
use FortisAPILib\Models\V1TransactionsAchCreditKeyedRequest;
use FortisAPILib\Models\V1TransactionsAchCreditPrevTrxnRequest;
use FortisAPILib\Models\V1TransactionsAchCreditTokenRequest;
use FortisAPILib\Models\V1TransactionsAchDebitKeyedRequest;
use FortisAPILib\Models\V1TransactionsAchDebitPrevTrxnRequest;
use FortisAPILib\Models\V1TransactionsAchDebitTokenRequest;

class TransactionsACHController extends BaseController
{
    /**
     * Create a new keyed ACH credit transaction
     *
     * @param V1TransactionsAchCreditKeyedRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTransaction Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function aCHCredit(V1TransactionsAchCreditKeyedRequest $body, ?array $expand = null): ResponseTransaction
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/transactions/ach/credit/keyed')
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand47Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTransaction::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new ACH credit transaction using previous transaction id
     *
     * @param V1TransactionsAchCreditPrevTrxnRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTransaction Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function aCHCreditPreviousTransaction(
        V1TransactionsAchCreditPrevTrxnRequest $body,
        ?array $expand = null
    ): ResponseTransaction {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/transactions/ach/credit/prev-trxn')
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand47Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTransaction::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new tokenized ACH credit transaction
     *
     * @param V1TransactionsAchCreditTokenRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTransaction Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function aCHCreditTokenized(
        V1TransactionsAchCreditTokenRequest $body,
        ?array $expand = null
    ): ResponseTransaction {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/transactions/ach/credit/token')
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand47Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTransaction::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new keyed ACH debit transaction
     *
     * @param V1TransactionsAchDebitKeyedRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTransaction Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function aCHDebit(V1TransactionsAchDebitKeyedRequest $body, ?array $expand = null): ResponseTransaction
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/transactions/ach/debit/keyed')
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand47Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTransaction::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new ACH debit transaction using previous transaction id
     *
     * @param V1TransactionsAchDebitPrevTrxnRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTransaction Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function aCHDebitPreviousTransaction(
        V1TransactionsAchDebitPrevTrxnRequest $body,
        ?array $expand = null
    ): ResponseTransaction {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/transactions/ach/debit/prev-trxn')
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand47Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTransaction::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new tokenized ACH debit transaction
     *
     * @param V1TransactionsAchDebitTokenRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTransaction Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function aCHDebitTokenized(
        V1TransactionsAchDebitTokenRequest $body,
        ?array $expand = null
    ): ResponseTransaction {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/transactions/ach/debit/token')
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand47Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTransaction::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}