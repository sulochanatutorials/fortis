<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use FortisAPILib\Controllers\Level3DataController;
use FortisAPILib\Exceptions;

class Level3DataControllerTest extends BaseTestController
{
    /**
     * @var Level3DataController Level3DataController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getLevel3DataController();
    }

    public function testTestDeleteASingleLevel3Record()
    {
        // Parameters for the API call
        $transactionId = '11e95f8ec39de8fbdb0a4f1a';
        $level3Id = '11e95f8ec39de8fbdb0a4f1a';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->deleteASingleLevel3Record($transactionId, $level3Id);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"type":"TransationLevel3","data":{"id":"11e95f8ec39de8fbdb0a4f1a","transactio' .
                'n_id":"11e95f8ec39de8fbdb0a4f1a","level3_data":{"destination_country_code":"840' .
                '","duty_amount":0,"freight_amount":0,"national_tax":2,"sales_tax":200,"shipfrom' .
                '_zip_code":"AZ1234","shipto_zip_code":"FL1234","tax_amount":10,"tax_exempt":0,"' .
                'customer_vat_registration":"12345678","merchant_vat_registration":"123456","ord' .
                'er_date":"171006","summary_commodity_code":"C1K2","tax_rate":0,"unique_vat_ref_' .
                'number":"vat1234","line_items":[{"description":"cool drink","commodity_code":"c' .
                'c123456","discount_amount":0,"other_tax_amount":0,"product_code":"fanta123456",' .
                '"quantity":12,"tax_amount":4,"tax_rate":0,"unit_code":"gll","unit_cost":3,"alte' .
                'rnate_tax_id":"1234","debit_credit":"C","discount_rate":11,"tax_type_applied":"' .
                '22","tax_type_id":"11"}]}}}'
            )))
            ->assert();
    }

    public function testTestViewSingleLevel3Record()
    {
        // Parameters for the API call
        $transactionId = '11e95f8ec39de8fbdb0a4f1a';
        $level3Id = '11e95f8ec39de8fbdb0a4f1a';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->viewSingleLevel3Record($transactionId, $level3Id);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"type":"TransationLevel3","data":{"id":"11e95f8ec39de8fbdb0a4f1a","transactio' .
                'n_id":"11e95f8ec39de8fbdb0a4f1a","level3_data":{"destination_country_code":"840' .
                '","duty_amount":0,"freight_amount":0,"national_tax":2,"sales_tax":200,"shipfrom' .
                '_zip_code":"AZ1234","shipto_zip_code":"FL1234","tax_amount":10,"tax_exempt":0,"' .
                'customer_vat_registration":"12345678","merchant_vat_registration":"123456","ord' .
                'er_date":"171006","summary_commodity_code":"C1K2","tax_rate":0,"unique_vat_ref_' .
                'number":"vat1234","line_items":[{"description":"cool drink","commodity_code":"c' .
                'c123456","discount_amount":0,"other_tax_amount":0,"product_code":"fanta123456",' .
                '"quantity":12,"tax_amount":4,"tax_rate":0,"unit_code":"gll","unit_cost":3,"alte' .
                'rnate_tax_id":"1234","debit_credit":"C","discount_rate":11,"tax_type_applied":"' .
                '22","tax_type_id":"11"}]}}}'
            )))
            ->assert();
    }
}