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
use FortisAPILib\Controllers\TerminalsController;
use FortisAPILib\Exceptions;

class TerminalsControllerTest extends BaseTestController
{
    /**
     * @var TerminalsController TerminalsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getTerminalsController();
    }

    public function testTestListAllTerminalsRelated()
    {
        // Parameters for the API call
        $page = null;
        $sort = null;
        $filter = null;
        $expand = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listAllTerminalsRelated($page, $sort, $filter, $expand);
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
                '{"type":"TerminalsCollection","list":[{"location_id":"11e95f8ec39de8fbdb0a4f1a' .
                '","default_product_transaction_id":"11e95f8ec39de8fbdb0a4f1a","terminal_applica' .
                'tion_id":"11e95f8ec39de8fbdb0a4f1a","terminal_cvm_id":"11e95f8ec39de8fbdb0a4f1a' .
                '","terminal_manufacturer_code":1,"title":"My terminal","mac_address":"3D:F2:C9:' .
                'A6:B3:4F","local_ip_address":"192.168.0.10","port":10009,"serial_number":"12345' .
                '67890","terminal_number":"973456789012367","terminal_timeouts":{"card_entry_tim' .
                'eout":47,"device_terms_prompt_timeout":30,"overall_timeout":125,"pin_entry_time' .
                'out":40,"signature_input_timeout":35,"signature_submit_timeout":38,"status_disp' .
                'lay_time":12,"tip_cashback_timeout":25,"transaction_timeout":17},"tip_percents"' .
                ':{"percent_1":0,"percent_2":2,"percent_3":99},"header_line_1":"line 1 sample","' .
                'header_line_2":"line 2 sample","header_line_3":"line 3 sample","header_line_4":' .
                '"line 4 sample","header_line_5":"line 5 sample","trailer_line_1":"trailer 1 sam' .
                'ple","trailer_line_2":"trailer 2 sample","trailer_line_3":"trailer 3 sample","t' .
                'railer_line_4":"trailer 4 sample","trailer_line_5":"trailer 5 sample","default_' .
                'checkin":"2021-12-01","default_checkout":"2021-12-01","default_room_rate":56,"d' .
                'efault_room_number":"303","debit":false,"emv":false,"cashback_enable":false,"pr' .
                'int_enable":false,"sig_capture_enable":false,"is_provisioned":false,"tip_enable' .
                '":false,"validated_decryption":false,"communication_type":"http","id":"11e95f8e' .
                'c39de8fbdb0a4f1a","created_ts":1422040992,"modified_ts":1422040992,"last_regist' .
                'ration_ts":1422040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1a","modified_us' .
                'er_id":"11e95f8ec39de8fbdb0a4f1a","location":{"id":"11e95f8ec39de8fbdb0a4f1a","' .
                'created_ts":1422040992,"modified_ts":1422040992,"account_number":"5454545454545' .
                '454","address":{"city":"Novi","state":"MI","postal_code":"48375","country":"US"' .
                ',"street":"43155 Main Street STE 2310-C","street2":"43155 Main Street STE 2310-' .
                'C"},"branding_domain_id":"11e95f8ec39de8fbdb0a4f1a","contact_email_trx_receipt_' .
                'default":true,"default_ach":"11e608a7d515f1e093242bb2","default_cc":"11e608a442' .
                'a5f1e092242dda","developer_company_id":"11e95f8ec39de8fbdb0a4f1a","email_reply_' .
                'to":"email@domain.com","fax":"3339998822","location_api_id":"location-111111","' .
                'location_api_key":"AE34BBCAADF4AE34BBCAADF4","location_c1":"custom 1","location' .
                '_c2":"custom 2","location_c3":"custom data 3","name":"Sample Company Headquarte' .
                'rs","office_phone":"2481234567","office_ext_phone":"1021021209","recurring_noti' .
                'fication_days_default":0,"tz":"America/New_York","parent_id":"11e95f8ec39de8fbd' .
                'b0a4f1a","ticket_hash_key":"A5F443CADF4AE34BBCAADF4"},"created_user":{"account_' .
                'number":"5454545454545454","address":"43155 Main Street STE 2310-C","branding_d' .
                'omain_url":"{branding_domain_url}","cell_phone":"3339998822","city":"Novi","com' .
                'pany_name":"Fortis Payment Systems, LLC","contact_id":"11e95f8ec39de8fbdb0a4f1a' .
                '","date_of_birth":"2021-12-01","domain_id":"11e95f8ec39de8fbdb0a4f1a","email":"' .
                'email@domain.com","email_trx_receipt":true,"home_phone":"3339998822","first_nam' .
                'e":"John","last_name":"Smith","locale":"en-US","office_phone":"3339998822","off' .
                'ice_ext_phone":"5","primary_location_id":"11e95f8ec39de8fbdb0a4f1a","requires_n' .
                'ew_password":null,"state":"Michigan","terms_condition_code":"20220308","tz":"Am' .
                'erica/New_York","ui_prefs":{"entry_page":"dashboard","page_size":2,"report_expo' .
                'rt_type":"csv","process_method":"virtual_terminal","default_terminal":"11e95f8e' .
                'c39de8fbdb0a4f1a"},"username":"{user_name}","user_api_key":"234bas8dfn8238f923w' .
                '2","user_hash_key":null,"user_type_code":100,"password":null,"zip":"48375","loc' .
                'ation_id":"11e95f8ec39de8fbdb0a4f1a","status_id":true,"id":"11e95f8ec39de8fbdb0' .
                'a4f1a","status":true,"login_attempts":0,"last_login_ts":1422040992,"created_ts"' .
                ':1422040992,"modified_ts":1422040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1' .
                'a","terms_accepted_ts":1422040992,"terms_agree_ip":"192.168.0.10","current_date' .
                '_time":"2019-03-11T10:38:26-0700"},"terminal_application":{"standalone":true,"e' .
                'mv_capable":true,"nfc_capable":false,"pin_capable":true,"print_capable":false,"' .
                'msr_capable":true,"sig_capture_capable":false,"mpos_terminal":false,"title":"In' .
                'genico Link2500","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"modif' .
                'ied_ts":1422040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1a"},"changelogs":[' .
                '{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"action":"CREATE","mod' .
                'el":"TransactionRequest","model_id":"11ec829598f0d4008be9aba4","user_id":"11e95' .
                'f8ec39de8fbdb0a4f1a","changelog_details":[{"id":"11e95f8ec39de8fbdb0a4f1a","cha' .
                'ngelog_id":"11e95f8ec39de8fbdb0a4f1a","field":"next_run_ts","old_value":"164361' .
                '6000"}],"user":{"id":"11e95f8ec39de8fbdb0a4f1a","username":"email@domain.com","' .
                'first_name":"Bob","last_name":"Fairview"}}],"terminal_routers":[{"mac_address":' .
                '"3D:F2:C9:A6:B3:4F","location_id":"11e95f8ec39de8fbdb0a4f1a","id":"11e95f8ec39d' .
                'e8fbdb0a4f1a","created_ts":1422040992,"modified_ts":1422040992,"created_user_id' .
                '":"11e95f8ec39de8fbdb0a4f1a"}],"has_terminal_routers":true,"terminal_cvm":{"ter' .
                'minal_manufacturer_code":4,"title":"CVM One","contact_data":null,"contactless_d' .
                'ata":null,"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"modified_ts"' .
                ':1422040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1a","modified_user_id":"11' .
                'e95f8ec39de8fbdb0a4f1a"},"terminal_manufacturer":{"title":"My terminal","idtype' .
                '":"mac","code":"4","created_ts":1422040992,"modified_ts":1422040992,"created_us' .
                'er_id":"11e95f8ec39de8fbdb0a4f1a","modified_user_id":"11e95f8ec39de8fbdb0a4f1a"' .
                '}}],"links":{"type":"Links","first":"/v1/endpoint?page[size]=10&page[number]=1"' .
                ',"previous":"/v1/endpoint?page[size]=10&page[number]=5","last":"/v1/endpoint?pa' .
                'ge[size]=10&page[number]=42"},"pagination":{"type":"Pagination","total_count":4' .
                '23,"page_count":42,"page_number":6,"page_size":10},"sort":{"type":"Sorting","fi' .
                'elds":[{"field":"last_name","order":"asc"}]}}'
            )))
            ->assert();
    }

    public function testTestViewSingleTerminalsRecord()
    {
        // Parameters for the API call
        $terminalId = '11e95f8ec39de8fbdb0a4f1a';
        $expand = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->viewSingleTerminalsRecord($terminalId, $expand);
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
                '{"type":"Terminal","data":{"location_id":"11e95f8ec39de8fbdb0a4f1a","default_p' .
                'roduct_transaction_id":"11e95f8ec39de8fbdb0a4f1a","terminal_application_id":"11' .
                'e95f8ec39de8fbdb0a4f1a","terminal_cvm_id":"11e95f8ec39de8fbdb0a4f1a","terminal_' .
                'manufacturer_code":1,"title":"My terminal","mac_address":"3D:F2:C9:A6:B3:4F","l' .
                'ocal_ip_address":"192.168.0.10","port":10009,"serial_number":"1234567890","term' .
                'inal_number":"973456789012367","terminal_timeouts":{"card_entry_timeout":47,"de' .
                'vice_terms_prompt_timeout":30,"overall_timeout":125,"pin_entry_timeout":40,"sig' .
                'nature_input_timeout":35,"signature_submit_timeout":38,"status_display_time":12' .
                ',"tip_cashback_timeout":25,"transaction_timeout":17},"tip_percents":{"percent_1' .
                '":0,"percent_2":2,"percent_3":99},"header_line_1":"line 1 sample","header_line_' .
                '2":"line 2 sample","header_line_3":"line 3 sample","header_line_4":"line 4 samp' .
                'le","header_line_5":"line 5 sample","trailer_line_1":"trailer 1 sample","traile' .
                'r_line_2":"trailer 2 sample","trailer_line_3":"trailer 3 sample","trailer_line_' .
                '4":"trailer 4 sample","trailer_line_5":"trailer 5 sample","default_checkin":"20' .
                '21-12-01","default_checkout":"2021-12-01","default_room_rate":56,"default_room_' .
                'number":"303","debit":false,"emv":false,"cashback_enable":false,"print_enable":' .
                'false,"sig_capture_enable":false,"is_provisioned":false,"tip_enable":false,"val' .
                'idated_decryption":false,"communication_type":"http","id":"11e95f8ec39de8fbdb0a' .
                '4f1a","created_ts":1422040992,"modified_ts":1422040992,"last_registration_ts":1' .
                '422040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1a","modified_user_id":"11e9' .
                '5f8ec39de8fbdb0a4f1a","location":{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":' .
                '1422040992,"modified_ts":1422040992,"account_number":"5454545454545454","addres' .
                's":{"city":"Novi","state":"MI","postal_code":"48375","country":"US","street":"4' .
                '3155 Main Street STE 2310-C","street2":"43155 Main Street STE 2310-C"},"brandin' .
                'g_domain_id":"11e95f8ec39de8fbdb0a4f1a","contact_email_trx_receipt_default":tru' .
                'e,"default_ach":"11e608a7d515f1e093242bb2","default_cc":"11e608a442a5f1e092242d' .
                'da","developer_company_id":"11e95f8ec39de8fbdb0a4f1a","email_reply_to":"email@d' .
                'omain.com","fax":"3339998822","location_api_id":"location-111111","location_api' .
                '_key":"AE34BBCAADF4AE34BBCAADF4","location_c1":"custom 1","location_c2":"custom' .
                ' 2","location_c3":"custom data 3","name":"Sample Company Headquarters","office_' .
                'phone":"2481234567","office_ext_phone":"1021021209","recurring_notification_day' .
                's_default":0,"tz":"America/New_York","parent_id":"11e95f8ec39de8fbdb0a4f1a","ti' .
                'cket_hash_key":"A5F443CADF4AE34BBCAADF4"},"created_user":{"account_number":"545' .
                '4545454545454","address":"43155 Main Street STE 2310-C","branding_domain_url":"' .
                '{branding_domain_url}","cell_phone":"3339998822","city":"Novi","company_name":"' .
                'Fortis Payment Systems, LLC","contact_id":"11e95f8ec39de8fbdb0a4f1a","date_of_b' .
                'irth":"2021-12-01","domain_id":"11e95f8ec39de8fbdb0a4f1a","email":"email@domain' .
                '.com","email_trx_receipt":true,"home_phone":"3339998822","first_name":"John","l' .
                'ast_name":"Smith","locale":"en-US","office_phone":"3339998822","office_ext_phon' .
                'e":"5","primary_location_id":"11e95f8ec39de8fbdb0a4f1a","requires_new_password"' .
                ':null,"state":"Michigan","terms_condition_code":"20220308","tz":"America/New_Yo' .
                'rk","ui_prefs":{"entry_page":"dashboard","page_size":2,"report_export_type":"cs' .
                'v","process_method":"virtual_terminal","default_terminal":"11e95f8ec39de8fbdb0a' .
                '4f1a"},"username":"{user_name}","user_api_key":"234bas8dfn8238f923w2","user_has' .
                'h_key":null,"user_type_code":100,"password":null,"zip":"48375","location_id":"1' .
                '1e95f8ec39de8fbdb0a4f1a","status_id":true,"id":"11e95f8ec39de8fbdb0a4f1a","stat' .
                'us":true,"login_attempts":0,"last_login_ts":1422040992,"created_ts":1422040992,' .
                '"modified_ts":1422040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1a","terms_ac' .
                'cepted_ts":1422040992,"terms_agree_ip":"192.168.0.10","current_date_time":"2019' .
                '-03-11T10:38:26-0700"},"terminal_application":{"standalone":true,"emv_capable":' .
                'true,"nfc_capable":false,"pin_capable":true,"print_capable":false,"msr_capable"' .
                ':true,"sig_capture_capable":false,"mpos_terminal":false,"title":"Ingenico Link2' .
                '500","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"modified_ts":1422' .
                '040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1a"},"changelogs":[{"id":"11e95' .
                'f8ec39de8fbdb0a4f1a","created_ts":1422040992,"action":"CREATE","model":"Transac' .
                'tionRequest","model_id":"11ec829598f0d4008be9aba4","user_id":"11e95f8ec39de8fbd' .
                'b0a4f1a","changelog_details":[{"id":"11e95f8ec39de8fbdb0a4f1a","changelog_id":"' .
                '11e95f8ec39de8fbdb0a4f1a","field":"next_run_ts","old_value":"1643616000"}],"use' .
                'r":{"id":"11e95f8ec39de8fbdb0a4f1a","username":"email@domain.com","first_name":' .
                '"Bob","last_name":"Fairview"}}],"terminal_routers":[{"mac_address":"3D:F2:C9:A6' .
                ':B3:4F","location_id":"11e95f8ec39de8fbdb0a4f1a","id":"11e95f8ec39de8fbdb0a4f1a' .
                '","created_ts":1422040992,"modified_ts":1422040992,"created_user_id":"11e95f8ec' .
                '39de8fbdb0a4f1a"}],"has_terminal_routers":true,"terminal_cvm":{"terminal_manufa' .
                'cturer_code":4,"title":"CVM One","contact_data":null,"contactless_data":null,"i' .
                'd":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"modified_ts":1422040992,' .
                '"created_user_id":"11e95f8ec39de8fbdb0a4f1a","modified_user_id":"11e95f8ec39de8' .
                'fbdb0a4f1a"},"terminal_manufacturer":{"title":"My terminal","idtype":"mac","cod' .
                'e":"4","created_ts":1422040992,"modified_ts":1422040992,"created_user_id":"11e9' .
                '5f8ec39de8fbdb0a4f1a","modified_user_id":"11e95f8ec39de8fbdb0a4f1a"}}}'
            )))
            ->assert();
    }
}