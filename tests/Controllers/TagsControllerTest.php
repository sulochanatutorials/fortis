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
use FortisAPILib\Controllers\TagsController;
use FortisAPILib\Exceptions;

class TagsControllerTest extends BaseTestController
{
    /**
     * @var TagsController TagsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getTagsController();
    }

    public function testTestListAllTagsRelated()
    {
        // Parameters for the API call
        $page = null;
        $sort = null;
        $filter = null;
        $expand = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listAllTagsRelated($page, $sort, $filter, $expand);
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
                '{"type":"TagsCollection","list":[{"location_id":"11e95f8ec39de8fbdb0a4f1a","ti' .
                'tle":"My terminal","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"mod' .
                'ified_ts":1422040992,"location":{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1' .
                '422040992,"modified_ts":1422040992,"account_number":"5454545454545454","address' .
                '":{"city":"Novi","state":"MI","postal_code":"48375","country":"US","street":"43' .
                '155 Main Street STE 2310-C","street2":"43155 Main Street STE 2310-C"},"branding' .
                '_domain_id":"11e95f8ec39de8fbdb0a4f1a","contact_email_trx_receipt_default":true' .
                ',"default_ach":"11e608a7d515f1e093242bb2","default_cc":"11e608a442a5f1e092242dd' .
                'a","developer_company_id":"11e95f8ec39de8fbdb0a4f1a","email_reply_to":"email@do' .
                'main.com","fax":"3339998822","location_api_id":"location-111111","location_api_' .
                'key":"AE34BBCAADF4AE34BBCAADF4","location_c1":"custom 1","location_c2":"custom ' .
                '2","location_c3":"custom data 3","name":"Sample Company Headquarters","office_p' .
                'hone":"2481234567","office_ext_phone":"1021021209","recurring_notification_days' .
                '_default":0,"tz":"America/New_York","parent_id":"11e95f8ec39de8fbdb0a4f1a","tic' .
                'ket_hash_key":"A5F443CADF4AE34BBCAADF4"}}],"links":{"type":"Links","first":"/v1' .
                '/endpoint?page[size]=10&page[number]=1","previous":"/v1/endpoint?page[size]=10&' .
                'page[number]=5","last":"/v1/endpoint?page[size]=10&page[number]=42"},"paginatio' .
                'n":{"type":"Pagination","total_count":423,"page_count":42,"page_number":6,"page' .
                '_size":10},"sort":{"type":"Sorting","fields":[{"field":"last_name","order":"asc' .
                '"}]}}'
            )))
            ->assert();
    }

    public function testTestDeleteTagRecord()
    {
        // Parameters for the API call
        $tagId = '11e95f8ec39de8fbdb0a4f1a';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->deleteTagRecord($tagId);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(204)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"type":"Tag","data":{"location_id":"11e95f8ec39de8fbdb0a4f1a","title":"My ter' .
                'minal","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"modified_ts":14' .
                '22040992,"location":{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"m' .
                'odified_ts":1422040992,"account_number":"5454545454545454","address":{"city":"N' .
                'ovi","state":"MI","postal_code":"48375","country":"US","street":"43155 Main Str' .
                'eet STE 2310-C","street2":"43155 Main Street STE 2310-C"},"branding_domain_id":' .
                '"11e95f8ec39de8fbdb0a4f1a","contact_email_trx_receipt_default":true,"default_ac' .
                'h":"11e608a7d515f1e093242bb2","default_cc":"11e608a442a5f1e092242dda","develope' .
                'r_company_id":"11e95f8ec39de8fbdb0a4f1a","email_reply_to":"email@domain.com","f' .
                'ax":"3339998822","location_api_id":"location-111111","location_api_key":"AE34BB' .
                'CAADF4AE34BBCAADF4","location_c1":"custom 1","location_c2":"custom 2","location' .
                '_c3":"custom data 3","name":"Sample Company Headquarters","office_phone":"24812' .
                '34567","office_ext_phone":"1021021209","recurring_notification_days_default":0,' .
                '"tz":"America/New_York","parent_id":"11e95f8ec39de8fbdb0a4f1a","ticket_hash_key' .
                '":"A5F443CADF4AE34BBCAADF4"}}}'
            )))
            ->assert();
    }

    public function testTestViewSingleTagsRecord()
    {
        // Parameters for the API call
        $tagId = '11e95f8ec39de8fbdb0a4f1a';
        $expand = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->viewSingleTagsRecord($tagId, $expand);
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
                '{"type":"Tag","data":{"location_id":"11e95f8ec39de8fbdb0a4f1a","title":"My ter' .
                'minal","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"modified_ts":14' .
                '22040992,"location":{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"m' .
                'odified_ts":1422040992,"account_number":"5454545454545454","address":{"city":"N' .
                'ovi","state":"MI","postal_code":"48375","country":"US","street":"43155 Main Str' .
                'eet STE 2310-C","street2":"43155 Main Street STE 2310-C"},"branding_domain_id":' .
                '"11e95f8ec39de8fbdb0a4f1a","contact_email_trx_receipt_default":true,"default_ac' .
                'h":"11e608a7d515f1e093242bb2","default_cc":"11e608a442a5f1e092242dda","develope' .
                'r_company_id":"11e95f8ec39de8fbdb0a4f1a","email_reply_to":"email@domain.com","f' .
                'ax":"3339998822","location_api_id":"location-111111","location_api_key":"AE34BB' .
                'CAADF4AE34BBCAADF4","location_c1":"custom 1","location_c2":"custom 2","location' .
                '_c3":"custom data 3","name":"Sample Company Headquarters","office_phone":"24812' .
                '34567","office_ext_phone":"1021021209","recurring_notification_days_default":0,' .
                '"tz":"America/New_York","parent_id":"11e95f8ec39de8fbdb0a4f1a","ticket_hash_key' .
                '":"A5F443CADF4AE34BBCAADF4"}}}'
            )))
            ->assert();
    }
}
