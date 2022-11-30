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
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Exceptions\Response412Exception;
use FortisAPILib\Models\Expand34Enum;
use FortisAPILib\Models\Filter10;
use FortisAPILib\Models\Page;
use FortisAPILib\Models\ResponseTerminal;
use FortisAPILib\Models\ResponseTerminalsCollection;
use FortisAPILib\Models\Sort24;
use FortisAPILib\Models\V1TerminalsRequest;
use FortisAPILib\Models\V1TerminalsRequest1;

class TerminalsController extends BaseController
{
    /**
     * Create a new terminal device
     *
     * @param V1TerminalsRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTerminal Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewTerminalDevice(V1TerminalsRequest $body, ?array $expand = null): ResponseTerminal
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/terminals')
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand34Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTerminal::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * List all terminals related
     *
     * @param Page|null $page Use this field to specify paginate your results, by using page size
     *        and number. You can use one of the following methods:
     *        >/endpoint?page={ "number": 1, "size": 50 }
     *        >
     *        >/endpoint?page[number]=1&page[size]=50
     *        >
     * @param Sort24|null $sort You can use any `field_name` from this endpoint results, and you can
     *        combine more than one field for more complex sorting. You can use one of the
     *        following methods:
     *        >/endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
     *        >
     *        >/endpoint?sort[field_name]=asc&sort[field_name2]=desc
     *        >
     * @param Filter10|null $filter You can use any `field_name` from this endpoint results as a
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
     * @return ResponseTerminalsCollection Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllTerminalsRelated(
        ?Page $page = null,
        ?Sort24 $sort = null,
        ?Filter10 $filter = null,
        ?array $expand = null
    ): ResponseTerminalsCollection {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/terminals')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('sort', $sort),
                QueryParam::init('filter', $filter),
                QueryParam::init('expand', $expand)->serializeBy([Expand34Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTerminalsCollection::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * View single terminals record
     *
     * @param string $terminalId Terminal ID
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTerminal Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function viewSingleTerminalsRecord(string $terminalId, ?array $expand = null): ResponseTerminal
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/terminals/{terminal_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('terminal_id', $terminalId),
                QueryParam::init('expand', $expand)->serializeBy([Expand34Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTerminal::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Update terminal record
     *
     * @param string $terminalId Terminal ID
     * @param V1TerminalsRequest1 $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTerminal Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateTerminalRecord(
        string $terminalId,
        V1TerminalsRequest1 $body,
        ?array $expand = null
    ): ResponseTerminal {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/v1/terminals/{terminal_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('terminal_id', $terminalId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand34Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTerminal::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
