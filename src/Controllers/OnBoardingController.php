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
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Exceptions\Response412Exception;
use FortisAPILib\Models\ResponseOnboarding;
use FortisAPILib\Models\V1OnboardingRequest;

class OnBoardingController extends BaseController
{
    /**
     * This method can be used to pre-populate data on the Merchant Processing Application (MPA), a form
     * that prospective merchants must complete and sign prior to approval. Using this method will reduce
     * the effort required by the merchant at boarding time, in scenarios where data about the prospective
     * merchant has already been collected. This method will return an Application ID, which can be sent to
     * a prospective merchant to obtain and complete the pre-filled application.
     *
     *
     * Properties that are marked "Required" indicate the minimum required data for creating and saving an
     * MPA. When using this method, you must provide data for each "Required" property, or you will not
     * receive an Application ID. Properties that are marked "Required for completion" are those which need
     * to be provided to Fortis before the Merchant Processing Application can be approved. These
     * properties may be omitted or left blank when using this method, however, the merchant will be
     * required to provide this data before the application can be submitted. Properties that are marked
     * "Conditionally Required" may be required for completion of the Merchant Processing Application,
     * depending on the values provided for other fields. See the description for each of these properties
     * for more information about their requirement criteria.
     *
     * @param V1OnboardingRequest $body
     *
     * @return ResponseOnboarding Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function merchantBoarding(V1OnboardingRequest $body): ResponseOnboarding
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/onboarding')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(401, ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn(412, ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseOnboarding::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
