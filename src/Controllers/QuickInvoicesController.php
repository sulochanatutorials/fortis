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
use FortisAPILib\Models\Expand11Enum;
use FortisAPILib\Models\Filter6;
use FortisAPILib\Models\Page;
use FortisAPILib\Models\ResponseQuickInvoice;
use FortisAPILib\Models\ResponseQuickInvoicesCollection;
use FortisAPILib\Models\Sort20;
use FortisAPILib\Models\V1QuickInvoicesRequest;
use FortisAPILib\Models\V1QuickInvoicesRequest1;
use FortisAPILib\Models\V1QuickInvoicesTransactionRequest;

class QuickInvoicesController extends BaseController
{
    /**
     * Create a new quick invoice
     *
     * @param V1QuickInvoicesRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseQuickInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewQuickInvoice(V1QuickInvoicesRequest $body, ?array $expand = null): ResponseQuickInvoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/quick-invoices')
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand11Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseQuickInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * List all quick invoices related
     *
     * @param Page|null $page Use this field to specify paginate your results, by using page size
     *        and number. You can use one of the following methods:
     *        >/endpoint?page={ "number": 1, "size": 50 }
     *        >
     *        >/endpoint?page[number]=1&page[size]=50
     *        >
     * @param Sort20|null $sort You can use any `field_name` from this endpoint results, and you can
     *        combine more than one field for more complex sorting. You can use one of the
     *        following methods:
     *        >/endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
     *        >
     *        >/endpoint?sort[field_name]=asc&sort[field_name2]=desc
     *        >
     * @param Filter6|null $filter You can use any `field_name` from this endpoint results as a
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
     * @return ResponseQuickInvoicesCollection Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllQuickInvoicesRelated(
        ?Page $page = null,
        ?Sort20 $sort = null,
        ?Filter6 $filter = null,
        ?array $expand = null
    ): ResponseQuickInvoicesCollection {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/quick-invoices')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('sort', $sort),
                QueryParam::init('filter', $filter),
                QueryParam::init('expand', $expand)->serializeBy([Expand11Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseQuickInvoicesCollection::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Resend Notification Email
     *
     * @param string $quickInvoiceId Quick Invoice ID
     *
     * @return ResponseQuickInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function resendNotificationEmail(string $quickInvoiceId): ResponseQuickInvoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/quick-invoices/{quick_invoice_id}/resend')
            ->auth('global')
            ->parameters(TemplateParam::init('quick_invoice_id', $quickInvoiceId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseQuickInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Associate Transaction with Ouick Invoice
     *
     * @param string $quickInvoiceId Quick Invoice ID
     * @param V1QuickInvoicesTransactionRequest $body
     *
     * @return ResponseQuickInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function associateTransactionWithOuickInvoice(
        string $quickInvoiceId,
        V1QuickInvoicesTransactionRequest $body
    ): ResponseQuickInvoice {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/v1/quick-invoices/{quick_invoice_id}/transaction'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('quick_invoice_id', $quickInvoiceId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseQuickInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Remove transaction from Quick Invoice
     *
     * @param string $quickInvoiceId Quick Invoice ID
     * @param V1QuickInvoicesTransactionRequest $body
     *
     * @return ResponseQuickInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function removeTransactionFromQuickInvoice(
        string $quickInvoiceId,
        V1QuickInvoicesTransactionRequest $body
    ): ResponseQuickInvoice {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/v1/quick-invoices/{quick_invoice_id}/transaction'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('quick_invoice_id', $quickInvoiceId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseQuickInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Delete quick Invoice
     *
     * @param string $quickInvoiceId Quick Invoice ID
     *
     * @return ResponseQuickInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteQuickInvoice(string $quickInvoiceId): ResponseQuickInvoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/v1/quick-invoices/{quick_invoice_id}')
            ->auth('global')
            ->parameters(TemplateParam::init('quick_invoice_id', $quickInvoiceId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseQuickInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * View single quick invoice record
     *
     * @param string $quickInvoiceId Quick Invoice ID
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseQuickInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function viewSingleQuickInvoiceRecord(string $quickInvoiceId, ?array $expand = null): ResponseQuickInvoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/quick-invoices/{quick_invoice_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('quick_invoice_id', $quickInvoiceId),
                QueryParam::init('expand', $expand)->serializeBy([Expand11Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseQuickInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Update quick invoice
     *
     * @param string $quickInvoiceId Quick Invoice ID
     * @param V1QuickInvoicesRequest1 $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseQuickInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateQuickInvoice(
        string $quickInvoiceId,
        V1QuickInvoicesRequest1 $body,
        ?array $expand = null
    ): ResponseQuickInvoice {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/v1/quick-invoices/{quick_invoice_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('quick_invoice_id', $quickInvoiceId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand11Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseQuickInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}