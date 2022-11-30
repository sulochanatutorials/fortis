<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Models\Expand47Enum;
use FortisAPILib\Models\Filter12;
use FortisAPILib\Models\Page;
use FortisAPILib\Models\ResponseTransaction;
use FortisAPILib\Models\ResponseTransactionBinInfo;
use FortisAPILib\Models\ResponseTransactionsCollection;
use FortisAPILib\Models\Sort26;

class TransactionsReadController extends BaseController
{
    /**
     * Get BIN info record associated with a transaction
     *
     * @param string $transactionId Transaction ID
     *
     * @return ResponseTransactionBinInfo Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getBINInfo(string $transactionId): ResponseTransactionBinInfo
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/transactions/{transaction_id}/bin-info')
            ->auth('global')
            ->parameters(TemplateParam::init('transaction_id', $transactionId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTransactionBinInfo::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get single transaction record
     *
     * @param string $transactionId Transaction ID
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
    public function getTransaction(string $transactionId, ?array $expand = null): ResponseTransaction
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/transactions/{transaction_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('transaction_id', $transactionId),
                QueryParam::init('expand', $expand)->serializeBy([Expand47Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTransaction::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * List transactions
     *
     * @param Page|null $page Use this field to specify paginate your results, by using page size
     *        and number. You can use one of the following methods:
     *        >/endpoint?page={ "number": 1, "size": 50 }
     *        >
     *        >/endpoint?page[number]=1&page[size]=50
     *        >
     * @param Sort26|null $sort You can use any `field_name` from this endpoint results, and you can
     *        combine more than one field for more complex sorting. You can use one of the
     *        following methods:
     *        >/endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
     *        >
     *        >/endpoint?sort[field_name]=asc&sort[field_name2]=desc
     *        >
     * @param Filter12|null $filter You can use any `field_name` from this endpoint results as a
     *        filter, and you can also use more than one field to create AND conditions. For date
     *        fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater
     *        than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the
     *        following methods:
     *        >/endpoint?filter={ "field_name": "Value" }
     *        >
     *        >/endpoint?filter[field_name]=Value
     *        >
     *        >/endpoint?filter={ "created_ts": "today" }
     *        >
     *        >/endpoint?filter[created_ts]=today
     *        >
     *        >/endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }
     *        >
     *        >/endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today
     *        >
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTransactionsCollection Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listTransactions(
        ?Page $page = null,
        ?Sort26 $sort = null,
        ?Filter12 $filter = null,
        ?array $expand = null
    ): ResponseTransactionsCollection {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/transactions')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('sort', $sort),
                QueryParam::init('filter', $filter),
                QueryParam::init('expand', $expand)->serializeBy([Expand47Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTransactionsCollection::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
