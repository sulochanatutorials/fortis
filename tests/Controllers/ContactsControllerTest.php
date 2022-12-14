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
use FortisAPILib\Controllers\ContactsController;
use FortisAPILib\Exceptions;

class ContactsControllerTest extends BaseTestController
{
    /**
     * @var ContactsController ContactsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getContactsController();
    }

    public function testTestListAllContacts()
    {
        // Parameters for the API call
        $page = null;
        $sort = null;
        $filter = null;
        $expand = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->listAllContacts($page, $sort, $filter, $expand);
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
                '{"type":"ContactsCollection","list":[{"location_id":"11e95f8ec39de8fbdb0a4f1a"' .
                ',"account_number":"54545433332","contact_api_id":"137","first_name":"John","las' .
                't_name":"Smith","cell_phone":"3339998822","balance":245.36,"address":{"city":"N' .
                'ovi","state":"Michigan","postal_code":"48375","country":"US","street":"43155 Ma' .
                'in Street STE 2310-C"},"company_name":"Fortis Payment Systems, LLC","header_mes' .
                'sage":"This is a sample message for you","date_of_birth":"2021-12-01","email_tr' .
                'x_receipt":true,"home_phone":"3339998822","office_phone":"3339998822","office_p' .
                'hone_ext":"5","header_message_type":0,"update_if_exists":1,"contact_c1":"any","' .
                'contact_c2":"anything","contact_c3":"something","parent_id":"11e95f8ec39de8fbdb' .
                '0a4f1a","email":"email@domain.com","id":"11e95f8ec39de8fbdb0a4f1a","created_ts"' .
                ':1422040992,"modified_ts":1422040992,"active":true,"received_emails":[{"subject' .
                '":"Payment Receipt - 12skiestech","body":"This email is being sent from a serve' .
                'r.","source_address":"\\"12skiestech A7t3qi\\" <noreply@zeamster.email>","retur' .
                'n_path":"\\"12skiestech A7t3qi\\" <noreply@zeamster.email>","provider_id":"0100' .
                '017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000","domain_id":"11e95f8e' .
                'c39de8fbdb0a4f1a","reason_sent":"Contact Email","reason_model":"Transaction","r' .
                'eason_model_id":"11e95f8ec39de8fbdb0a4f1a","reply_to":"\\"Zeamster\\" <emma.p@z' .
                'eamster.com>","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992}],"is_del' .
                'etable":true,"location":{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":142204099' .
                '2,"modified_ts":1422040992,"account_number":"5454545454545454","address":{"city' .
                '":"Novi","state":"MI","postal_code":"48375","country":"US","street":"43155 Main' .
                ' Street STE 2310-C","street2":"43155 Main Street STE 2310-C"},"branding_domain_' .
                'id":"11e95f8ec39de8fbdb0a4f1a","contact_email_trx_receipt_default":true,"defaul' .
                't_ach":"11e608a7d515f1e093242bb2","default_cc":"11e608a442a5f1e092242dda","deve' .
                'loper_company_id":"11e95f8ec39de8fbdb0a4f1a","email_reply_to":"email@domain.com' .
                '","fax":"3339998822","location_api_id":"location-111111","location_api_key":"AE' .
                '34BBCAADF4AE34BBCAADF4","location_c1":"custom 1","location_c2":"custom 2","loca' .
                'tion_c3":"custom data 3","name":"Sample Company Headquarters","office_phone":"2' .
                '481234567","office_ext_phone":"1021021209","recurring_notification_days_default' .
                '":0,"tz":"America/New_York","parent_id":"11e95f8ec39de8fbdb0a4f1a","ticket_hash' .
                '_key":"A5F443CADF4AE34BBCAADF4"},"user":{"account_number":"5454545454545454","a' .
                'ddress":"43155 Main Street STE 2310-C","branding_domain_url":"{branding_domain_' .
                'url}","cell_phone":"3339998822","city":"Novi","company_name":"Fortis Payment Sy' .
                'stems, LLC","contact_id":"11e95f8ec39de8fbdb0a4f1a","date_of_birth":"2021-12-01' .
                '","domain_id":"11e95f8ec39de8fbdb0a4f1a","email":"email@domain.com","email_trx_' .
                'receipt":true,"home_phone":"3339998822","first_name":"John","last_name":"Smith"' .
                ',"locale":"en-US","office_phone":"3339998822","office_ext_phone":"5","primary_l' .
                'ocation_id":"11e95f8ec39de8fbdb0a4f1a","requires_new_password":null,"state":"Mi' .
                'chigan","terms_condition_code":"20220308","tz":"America/New_York","ui_prefs":{"' .
                'entry_page":"dashboard","page_size":2,"report_export_type":"csv","process_metho' .
                'd":"virtual_terminal","default_terminal":"11e95f8ec39de8fbdb0a4f1a"},"username"' .
                ':"{user_name}","user_api_key":"234bas8dfn8238f923w2","user_hash_key":null,"user' .
                '_type_code":100,"password":null,"zip":"48375","location_id":"11e95f8ec39de8fbdb' .
                '0a4f1a","status_id":true,"id":"11e95f8ec39de8fbdb0a4f1a","status":true,"login_a' .
                'ttempts":0,"last_login_ts":1422040992,"created_ts":1422040992,"modified_ts":142' .
                '2040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1a","terms_accepted_ts":142204' .
                '0992,"terms_agree_ip":"192.168.0.10","current_date_time":"2019-03-11T10:38:26-0' .
                '700"},"recurrings":[{"account_vault_id":"11e95f8ec39de8fbdb0a4f1a","active":tru' .
                'e,"description":"Description","end_date":"2021-12-01","installment_total_count"' .
                ':20,"interval":1,"interval_type":"d","location_id":"11e95f8ec39de8fbdb0a4f1a","' .
                'notification_days":2,"payment_method":"cc","product_transaction_id":"11e95f8ec3' .
                '9de8fbdb0a4f1a","recurring_id":"11e95f8ec39de8fbdb0a4f1a","recurring_api_id":"r' .
                'ecurring1234abcd","start_date":"2021-12-01","status":"active","transaction_amou' .
                'nt":3,"terms_agree":true,"terms_agree_ip":"192.168.0.10","recurring_c1":"recurr' .
                'ing custom data 1","recurring_c2":"recurring custom data 2","recurring_c3":"rec' .
                'urring custom data 3","send_to_proc_as_recur":true,"id":"11e95f8ec39de8fbdb0a4f' .
                '1a","next_run_date":"2021-12-01","created_ts":1422040992,"modified_ts":14220409' .
                '92,"recurring_type_id":"i"}],"email_blacklist":{"id":"11e95f8ec39de8fbdb0a4f1a"' .
                ',"isBlacklisted":true,"detail":true,"created_ts":1422040992},"sms_blacklist":{"' .
                'id":"11e95f8ec39de8fbdb0a4f1a","isBlacklisted":true,"detail":true,"created_ts":' .
                '1422040992},"changelogs":[{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040' .
                '992,"action":"CREATE","model":"TransactionRequest","model_id":"11ec829598f0d400' .
                '8be9aba4","user_id":"11e95f8ec39de8fbdb0a4f1a","changelog_details":[{"id":"11e9' .
                '5f8ec39de8fbdb0a4f1a","changelog_id":"11e95f8ec39de8fbdb0a4f1a","field":"next_r' .
                'un_ts","old_value":"1643616000"}],"user":{"id":"11e95f8ec39de8fbdb0a4f1a","user' .
                'name":"email@domain.com","first_name":"Bob","last_name":"Fairview"}}],"postback' .
                '_logs":[{"id":"11e95f8ec39de8fbdb0a4f1a","postback_config_id":"11e95f8ec39de8fb' .
                'db0a4f1a","changelog_id":"11e95f8ec39de8fbdb0a4f1a","next_run_ts":1422040992,"c' .
                'reated_ts":1422040992,"model_id":"11e95f8ec39de8fbdb0a4f1a"}],"created_user":{"' .
                'account_number":"5454545454545454","address":"43155 Main Street STE 2310-C","br' .
                'anding_domain_url":"{branding_domain_url}","cell_phone":"3339998822","city":"No' .
                'vi","company_name":"Fortis Payment Systems, LLC","contact_id":"11e95f8ec39de8fb' .
                'db0a4f1a","date_of_birth":"2021-12-01","domain_id":"11e95f8ec39de8fbdb0a4f1a","' .
                'email":"email@domain.com","email_trx_receipt":true,"home_phone":"3339998822","f' .
                'irst_name":"John","last_name":"Smith","locale":"en-US","office_phone":"33399988' .
                '22","office_ext_phone":"5","primary_location_id":"11e95f8ec39de8fbdb0a4f1a","re' .
                'quires_new_password":null,"state":"Michigan","terms_condition_code":"20220308",' .
                '"tz":"America/New_York","ui_prefs":{"entry_page":"dashboard","page_size":2,"rep' .
                'ort_export_type":"csv","process_method":"virtual_terminal","default_terminal":"' .
                '11e95f8ec39de8fbdb0a4f1a"},"username":"{user_name}","user_api_key":"234bas8dfn8' .
                '238f923w2","user_hash_key":null,"user_type_code":100,"password":null,"zip":"483' .
                '75","location_id":"11e95f8ec39de8fbdb0a4f1a","status_id":true,"id":"11e95f8ec39' .
                'de8fbdb0a4f1a","status":true,"login_attempts":0,"last_login_ts":1422040992,"cre' .
                'ated_ts":1422040992,"modified_ts":1422040992,"created_user_id":"11e95f8ec39de8f' .
                'bdb0a4f1a","terms_accepted_ts":1422040992,"terms_agree_ip":"192.168.0.10","curr' .
                'ent_date_time":"2019-03-11T10:38:26-0700"},"parent":{"location_id":"11e95f8ec39' .
                'de8fbdb0a4f1a","account_number":"54545433332","contact_api_id":"137","first_nam' .
                'e":"John","last_name":"Smith","cell_phone":"3339998822","balance":245.36,"addre' .
                'ss":{"city":"Novi","state":"Michigan","postal_code":"48375","country":"US","str' .
                'eet":"43155 Main Street STE 2310-C"},"company_name":"Fortis Payment Systems, LL' .
                'C","header_message":"This is a sample message for you","date_of_birth":"2021-12' .
                '-01","email_trx_receipt":true,"home_phone":"3339998822","office_phone":"3339998' .
                '822","office_phone_ext":"5","header_message_type":0,"update_if_exists":1,"conta' .
                'ct_c1":"any","contact_c2":"anything","contact_c3":"something","parent_id":"11e9' .
                '5f8ec39de8fbdb0a4f1a","email":"email@domain.com","id":"11e95f8ec39de8fbdb0a4f1a' .
                '","created_ts":1422040992,"modified_ts":1422040992,"active":true},"children":{"' .
                'location_id":"11e95f8ec39de8fbdb0a4f1a","account_number":"54545433332","contact' .
                '_api_id":"137","first_name":"John","last_name":"Smith","cell_phone":"3339998822' .
                '","balance":245.36,"address":{"city":"Novi","state":"Michigan","postal_code":"4' .
                '8375","country":"US","street":"43155 Main Street STE 2310-C"},"company_name":"F' .
                'ortis Payment Systems, LLC","header_message":"This is a sample message for you"' .
                ',"date_of_birth":"2021-12-01","email_trx_receipt":true,"home_phone":"3339998822' .
                '","office_phone":"3339998822","office_phone_ext":"5","header_message_type":0,"u' .
                'pdate_if_exists":1,"contact_c1":"any","contact_c2":"anything","contact_c3":"som' .
                'ething","parent_id":"11e95f8ec39de8fbdb0a4f1a","email":"email@domain.com","id":' .
                '"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"modified_ts":1422040992,"ac' .
                'tive":true}}],"links":{"type":"Links","first":"/v1/endpoint?page[size]=10&page[' .
                'number]=1","previous":"/v1/endpoint?page[size]=10&page[number]=5","last":"/v1/e' .
                'ndpoint?page[size]=10&page[number]=42"},"pagination":{"type":"Pagination","tota' .
                'l_count":423,"page_count":42,"page_number":6,"page_size":10},"sort":{"type":"So' .
                'rting","fields":[{"field":"last_name","order":"asc"}]}}'
            )))
            ->assert();
    }

    public function testTestDeleteContact()
    {
        // Parameters for the API call
        $contactId = '11e95f8ec39de8fbdb0a4f1a';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->deleteContact($contactId);
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
                '{"type":"Contact","data":{"location_id":"11e95f8ec39de8fbdb0a4f1a","account_nu' .
                'mber":"54545433332","contact_api_id":"137","first_name":"John","last_name":"Smi' .
                'th","cell_phone":"3339998822","balance":245.36,"address":{"city":"Novi","state"' .
                ':"Michigan","postal_code":"48375","country":"US","street":"43155 Main Street ST' .
                'E 2310-C"},"company_name":"Fortis Payment Systems, LLC","header_message":"This ' .
                'is a sample message for you","date_of_birth":"2021-12-01","email_trx_receipt":t' .
                'rue,"home_phone":"3339998822","office_phone":"3339998822","office_phone_ext":"5' .
                '","header_message_type":0,"update_if_exists":1,"contact_c1":"any","contact_c2":' .
                '"anything","contact_c3":"something","parent_id":"11e95f8ec39de8fbdb0a4f1a","ema' .
                'il":"email@domain.com","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,' .
                '"modified_ts":1422040992,"active":true,"received_emails":[{"subject":"Payment R' .
                'eceipt - 12skiestech","body":"This email is being sent from a server.","source_' .
                'address":"\\"12skiestech A7t3qi\\" <noreply@zeamster.email>","return_path":"\\"' .
                '12skiestech A7t3qi\\" <noreply@zeamster.email>","provider_id":"0100017e67bcc530' .
                '-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000","domain_id":"11e95f8ec39de8fbdb0a' .
                '4f1a","reason_sent":"Contact Email","reason_model":"Transaction","reason_model_' .
                'id":"11e95f8ec39de8fbdb0a4f1a","reply_to":"\\"Zeamster\\" <emma.p@zeamster.com>' .
                '","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992}],"is_deletable":true' .
                ',"location":{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"modified_' .
                'ts":1422040992,"account_number":"5454545454545454","address":{"city":"Novi","st' .
                'ate":"MI","postal_code":"48375","country":"US","street":"43155 Main Street STE ' .
                '2310-C","street2":"43155 Main Street STE 2310-C"},"branding_domain_id":"11e95f8' .
                'ec39de8fbdb0a4f1a","contact_email_trx_receipt_default":true,"default_ach":"11e6' .
                '08a7d515f1e093242bb2","default_cc":"11e608a442a5f1e092242dda","developer_compan' .
                'y_id":"11e95f8ec39de8fbdb0a4f1a","email_reply_to":"email@domain.com","fax":"333' .
                '9998822","location_api_id":"location-111111","location_api_key":"AE34BBCAADF4AE' .
                '34BBCAADF4","location_c1":"custom 1","location_c2":"custom 2","location_c3":"cu' .
                'stom data 3","name":"Sample Company Headquarters","office_phone":"2481234567","' .
                'office_ext_phone":"1021021209","recurring_notification_days_default":0,"tz":"Am' .
                'erica/New_York","parent_id":"11e95f8ec39de8fbdb0a4f1a","ticket_hash_key":"A5F44' .
                '3CADF4AE34BBCAADF4"},"user":{"account_number":"5454545454545454","address":"431' .
                '55 Main Street STE 2310-C","branding_domain_url":"{branding_domain_url}","cell_' .
                'phone":"3339998822","city":"Novi","company_name":"Fortis Payment Systems, LLC",' .
                '"contact_id":"11e95f8ec39de8fbdb0a4f1a","date_of_birth":"2021-12-01","domain_id' .
                '":"11e95f8ec39de8fbdb0a4f1a","email":"email@domain.com","email_trx_receipt":tru' .
                'e,"home_phone":"3339998822","first_name":"John","last_name":"Smith","locale":"e' .
                'n-US","office_phone":"3339998822","office_ext_phone":"5","primary_location_id":' .
                '"11e95f8ec39de8fbdb0a4f1a","requires_new_password":null,"state":"Michigan","ter' .
                'ms_condition_code":"20220308","tz":"America/New_York","ui_prefs":{"entry_page":' .
                '"dashboard","page_size":2,"report_export_type":"csv","process_method":"virtual_' .
                'terminal","default_terminal":"11e95f8ec39de8fbdb0a4f1a"},"username":"{user_name' .
                '}","user_api_key":"234bas8dfn8238f923w2","user_hash_key":null,"user_type_code":' .
                '100,"password":null,"zip":"48375","location_id":"11e95f8ec39de8fbdb0a4f1a","sta' .
                'tus_id":true,"id":"11e95f8ec39de8fbdb0a4f1a","status":true,"login_attempts":0,"' .
                'last_login_ts":1422040992,"created_ts":1422040992,"modified_ts":1422040992,"cre' .
                'ated_user_id":"11e95f8ec39de8fbdb0a4f1a","terms_accepted_ts":1422040992,"terms_' .
                'agree_ip":"192.168.0.10","current_date_time":"2019-03-11T10:38:26-0700"},"recur' .
                'rings":[{"account_vault_id":"11e95f8ec39de8fbdb0a4f1a","active":true,"descripti' .
                'on":"Description","end_date":"2021-12-01","installment_total_count":20,"interva' .
                'l":1,"interval_type":"d","location_id":"11e95f8ec39de8fbdb0a4f1a","notification' .
                '_days":2,"payment_method":"cc","product_transaction_id":"11e95f8ec39de8fbdb0a4f' .
                '1a","recurring_id":"11e95f8ec39de8fbdb0a4f1a","recurring_api_id":"recurring1234' .
                'abcd","start_date":"2021-12-01","status":"active","transaction_amount":3,"terms' .
                '_agree":true,"terms_agree_ip":"192.168.0.10","recurring_c1":"recurring custom d' .
                'ata 1","recurring_c2":"recurring custom data 2","recurring_c3":"recurring custo' .
                'm data 3","send_to_proc_as_recur":true,"id":"11e95f8ec39de8fbdb0a4f1a","next_ru' .
                'n_date":"2021-12-01","created_ts":1422040992,"modified_ts":1422040992,"recurrin' .
                'g_type_id":"i"}],"email_blacklist":{"id":"11e95f8ec39de8fbdb0a4f1a","isBlacklis' .
                'ted":true,"detail":true,"created_ts":1422040992},"sms_blacklist":{"id":"11e95f8' .
                'ec39de8fbdb0a4f1a","isBlacklisted":true,"detail":true,"created_ts":1422040992},' .
                '"changelogs":[{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"action"' .
                ':"CREATE","model":"TransactionRequest","model_id":"11ec829598f0d4008be9aba4","u' .
                'ser_id":"11e95f8ec39de8fbdb0a4f1a","changelog_details":[{"id":"11e95f8ec39de8fb' .
                'db0a4f1a","changelog_id":"11e95f8ec39de8fbdb0a4f1a","field":"next_run_ts","old_' .
                'value":"1643616000"}],"user":{"id":"11e95f8ec39de8fbdb0a4f1a","username":"email' .
                '@domain.com","first_name":"Bob","last_name":"Fairview"}}],"postback_logs":[{"id' .
                '":"11e95f8ec39de8fbdb0a4f1a","postback_config_id":"11e95f8ec39de8fbdb0a4f1a","c' .
                'hangelog_id":"11e95f8ec39de8fbdb0a4f1a","next_run_ts":1422040992,"created_ts":1' .
                '422040992,"model_id":"11e95f8ec39de8fbdb0a4f1a"}],"created_user":{"account_numb' .
                'er":"5454545454545454","address":"43155 Main Street STE 2310-C","branding_domai' .
                'n_url":"{branding_domain_url}","cell_phone":"3339998822","city":"Novi","company' .
                '_name":"Fortis Payment Systems, LLC","contact_id":"11e95f8ec39de8fbdb0a4f1a","d' .
                'ate_of_birth":"2021-12-01","domain_id":"11e95f8ec39de8fbdb0a4f1a","email":"emai' .
                'l@domain.com","email_trx_receipt":true,"home_phone":"3339998822","first_name":"' .
                'John","last_name":"Smith","locale":"en-US","office_phone":"3339998822","office_' .
                'ext_phone":"5","primary_location_id":"11e95f8ec39de8fbdb0a4f1a","requires_new_p' .
                'assword":null,"state":"Michigan","terms_condition_code":"20220308","tz":"Americ' .
                'a/New_York","ui_prefs":{"entry_page":"dashboard","page_size":2,"report_export_t' .
                'ype":"csv","process_method":"virtual_terminal","default_terminal":"11e95f8ec39d' .
                'e8fbdb0a4f1a"},"username":"{user_name}","user_api_key":"234bas8dfn8238f923w2","' .
                'user_hash_key":null,"user_type_code":100,"password":null,"zip":"48375","locatio' .
                'n_id":"11e95f8ec39de8fbdb0a4f1a","status_id":true,"id":"11e95f8ec39de8fbdb0a4f1' .
                'a","status":true,"login_attempts":0,"last_login_ts":1422040992,"created_ts":142' .
                '2040992,"modified_ts":1422040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1a","' .
                'terms_accepted_ts":1422040992,"terms_agree_ip":"192.168.0.10","current_date_tim' .
                'e":"2019-03-11T10:38:26-0700"},"parent":{"location_id":"11e95f8ec39de8fbdb0a4f1' .
                'a","account_number":"54545433332","contact_api_id":"137","first_name":"John","l' .
                'ast_name":"Smith","cell_phone":"3339998822","balance":245.36,"address":{"city":' .
                '"Novi","state":"Michigan","postal_code":"48375","country":"US","street":"43155 ' .
                'Main Street STE 2310-C"},"company_name":"Fortis Payment Systems, LLC","header_m' .
                'essage":"This is a sample message for you","date_of_birth":"2021-12-01","email_' .
                'trx_receipt":true,"home_phone":"3339998822","office_phone":"3339998822","office' .
                '_phone_ext":"5","header_message_type":0,"update_if_exists":1,"contact_c1":"any"' .
                ',"contact_c2":"anything","contact_c3":"something","parent_id":"11e95f8ec39de8fb' .
                'db0a4f1a","email":"email@domain.com","id":"11e95f8ec39de8fbdb0a4f1a","created_t' .
                's":1422040992,"modified_ts":1422040992,"active":true},"children":{"location_id"' .
                ':"11e95f8ec39de8fbdb0a4f1a","account_number":"54545433332","contact_api_id":"13' .
                '7","first_name":"John","last_name":"Smith","cell_phone":"3339998822","balance":' .
                '245.36,"address":{"city":"Novi","state":"Michigan","postal_code":"48375","count' .
                'ry":"US","street":"43155 Main Street STE 2310-C"},"company_name":"Fortis Paymen' .
                't Systems, LLC","header_message":"This is a sample message for you","date_of_bi' .
                'rth":"2021-12-01","email_trx_receipt":true,"home_phone":"3339998822","office_ph' .
                'one":"3339998822","office_phone_ext":"5","header_message_type":0,"update_if_exi' .
                'sts":1,"contact_c1":"any","contact_c2":"anything","contact_c3":"something","par' .
                'ent_id":"11e95f8ec39de8fbdb0a4f1a","email":"email@domain.com","id":"11e95f8ec39' .
                'de8fbdb0a4f1a","created_ts":1422040992,"modified_ts":1422040992,"active":true}}' .
                '}'
            )))
            ->assert();
    }

    public function testTestViewSingleContact()
    {
        // Parameters for the API call
        $contactId = '11e95f8ec39de8fbdb0a4f1a';
        $expand = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->viewSingleContact($contactId, $expand);
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
                '{"type":"Contact","data":{"location_id":"11e95f8ec39de8fbdb0a4f1a","account_nu' .
                'mber":"54545433332","contact_api_id":"137","first_name":"John","last_name":"Smi' .
                'th","cell_phone":"3339998822","balance":245.36,"address":{"city":"Novi","state"' .
                ':"Michigan","postal_code":"48375","country":"US","street":"43155 Main Street ST' .
                'E 2310-C"},"company_name":"Fortis Payment Systems, LLC","header_message":"This ' .
                'is a sample message for you","date_of_birth":"2021-12-01","email_trx_receipt":t' .
                'rue,"home_phone":"3339998822","office_phone":"3339998822","office_phone_ext":"5' .
                '","header_message_type":0,"update_if_exists":1,"contact_c1":"any","contact_c2":' .
                '"anything","contact_c3":"something","parent_id":"11e95f8ec39de8fbdb0a4f1a","ema' .
                'il":"email@domain.com","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,' .
                '"modified_ts":1422040992,"active":true,"received_emails":[{"subject":"Payment R' .
                'eceipt - 12skiestech","body":"This email is being sent from a server.","source_' .
                'address":"\\"12skiestech A7t3qi\\" <noreply@zeamster.email>","return_path":"\\"' .
                '12skiestech A7t3qi\\" <noreply@zeamster.email>","provider_id":"0100017e67bcc530' .
                '-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000","domain_id":"11e95f8ec39de8fbdb0a' .
                '4f1a","reason_sent":"Contact Email","reason_model":"Transaction","reason_model_' .
                'id":"11e95f8ec39de8fbdb0a4f1a","reply_to":"\\"Zeamster\\" <emma.p@zeamster.com>' .
                '","id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992}],"is_deletable":true' .
                ',"location":{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"modified_' .
                'ts":1422040992,"account_number":"5454545454545454","address":{"city":"Novi","st' .
                'ate":"MI","postal_code":"48375","country":"US","street":"43155 Main Street STE ' .
                '2310-C","street2":"43155 Main Street STE 2310-C"},"branding_domain_id":"11e95f8' .
                'ec39de8fbdb0a4f1a","contact_email_trx_receipt_default":true,"default_ach":"11e6' .
                '08a7d515f1e093242bb2","default_cc":"11e608a442a5f1e092242dda","developer_compan' .
                'y_id":"11e95f8ec39de8fbdb0a4f1a","email_reply_to":"email@domain.com","fax":"333' .
                '9998822","location_api_id":"location-111111","location_api_key":"AE34BBCAADF4AE' .
                '34BBCAADF4","location_c1":"custom 1","location_c2":"custom 2","location_c3":"cu' .
                'stom data 3","name":"Sample Company Headquarters","office_phone":"2481234567","' .
                'office_ext_phone":"1021021209","recurring_notification_days_default":0,"tz":"Am' .
                'erica/New_York","parent_id":"11e95f8ec39de8fbdb0a4f1a","ticket_hash_key":"A5F44' .
                '3CADF4AE34BBCAADF4"},"user":{"account_number":"5454545454545454","address":"431' .
                '55 Main Street STE 2310-C","branding_domain_url":"{branding_domain_url}","cell_' .
                'phone":"3339998822","city":"Novi","company_name":"Fortis Payment Systems, LLC",' .
                '"contact_id":"11e95f8ec39de8fbdb0a4f1a","date_of_birth":"2021-12-01","domain_id' .
                '":"11e95f8ec39de8fbdb0a4f1a","email":"email@domain.com","email_trx_receipt":tru' .
                'e,"home_phone":"3339998822","first_name":"John","last_name":"Smith","locale":"e' .
                'n-US","office_phone":"3339998822","office_ext_phone":"5","primary_location_id":' .
                '"11e95f8ec39de8fbdb0a4f1a","requires_new_password":null,"state":"Michigan","ter' .
                'ms_condition_code":"20220308","tz":"America/New_York","ui_prefs":{"entry_page":' .
                '"dashboard","page_size":2,"report_export_type":"csv","process_method":"virtual_' .
                'terminal","default_terminal":"11e95f8ec39de8fbdb0a4f1a"},"username":"{user_name' .
                '}","user_api_key":"234bas8dfn8238f923w2","user_hash_key":null,"user_type_code":' .
                '100,"password":null,"zip":"48375","location_id":"11e95f8ec39de8fbdb0a4f1a","sta' .
                'tus_id":true,"id":"11e95f8ec39de8fbdb0a4f1a","status":true,"login_attempts":0,"' .
                'last_login_ts":1422040992,"created_ts":1422040992,"modified_ts":1422040992,"cre' .
                'ated_user_id":"11e95f8ec39de8fbdb0a4f1a","terms_accepted_ts":1422040992,"terms_' .
                'agree_ip":"192.168.0.10","current_date_time":"2019-03-11T10:38:26-0700"},"recur' .
                'rings":[{"account_vault_id":"11e95f8ec39de8fbdb0a4f1a","active":true,"descripti' .
                'on":"Description","end_date":"2021-12-01","installment_total_count":20,"interva' .
                'l":1,"interval_type":"d","location_id":"11e95f8ec39de8fbdb0a4f1a","notification' .
                '_days":2,"payment_method":"cc","product_transaction_id":"11e95f8ec39de8fbdb0a4f' .
                '1a","recurring_id":"11e95f8ec39de8fbdb0a4f1a","recurring_api_id":"recurring1234' .
                'abcd","start_date":"2021-12-01","status":"active","transaction_amount":3,"terms' .
                '_agree":true,"terms_agree_ip":"192.168.0.10","recurring_c1":"recurring custom d' .
                'ata 1","recurring_c2":"recurring custom data 2","recurring_c3":"recurring custo' .
                'm data 3","send_to_proc_as_recur":true,"id":"11e95f8ec39de8fbdb0a4f1a","next_ru' .
                'n_date":"2021-12-01","created_ts":1422040992,"modified_ts":1422040992,"recurrin' .
                'g_type_id":"i"}],"email_blacklist":{"id":"11e95f8ec39de8fbdb0a4f1a","isBlacklis' .
                'ted":true,"detail":true,"created_ts":1422040992},"sms_blacklist":{"id":"11e95f8' .
                'ec39de8fbdb0a4f1a","isBlacklisted":true,"detail":true,"created_ts":1422040992},' .
                '"changelogs":[{"id":"11e95f8ec39de8fbdb0a4f1a","created_ts":1422040992,"action"' .
                ':"CREATE","model":"TransactionRequest","model_id":"11ec829598f0d4008be9aba4","u' .
                'ser_id":"11e95f8ec39de8fbdb0a4f1a","changelog_details":[{"id":"11e95f8ec39de8fb' .
                'db0a4f1a","changelog_id":"11e95f8ec39de8fbdb0a4f1a","field":"next_run_ts","old_' .
                'value":"1643616000"}],"user":{"id":"11e95f8ec39de8fbdb0a4f1a","username":"email' .
                '@domain.com","first_name":"Bob","last_name":"Fairview"}}],"postback_logs":[{"id' .
                '":"11e95f8ec39de8fbdb0a4f1a","postback_config_id":"11e95f8ec39de8fbdb0a4f1a","c' .
                'hangelog_id":"11e95f8ec39de8fbdb0a4f1a","next_run_ts":1422040992,"created_ts":1' .
                '422040992,"model_id":"11e95f8ec39de8fbdb0a4f1a"}],"created_user":{"account_numb' .
                'er":"5454545454545454","address":"43155 Main Street STE 2310-C","branding_domai' .
                'n_url":"{branding_domain_url}","cell_phone":"3339998822","city":"Novi","company' .
                '_name":"Fortis Payment Systems, LLC","contact_id":"11e95f8ec39de8fbdb0a4f1a","d' .
                'ate_of_birth":"2021-12-01","domain_id":"11e95f8ec39de8fbdb0a4f1a","email":"emai' .
                'l@domain.com","email_trx_receipt":true,"home_phone":"3339998822","first_name":"' .
                'John","last_name":"Smith","locale":"en-US","office_phone":"3339998822","office_' .
                'ext_phone":"5","primary_location_id":"11e95f8ec39de8fbdb0a4f1a","requires_new_p' .
                'assword":null,"state":"Michigan","terms_condition_code":"20220308","tz":"Americ' .
                'a/New_York","ui_prefs":{"entry_page":"dashboard","page_size":2,"report_export_t' .
                'ype":"csv","process_method":"virtual_terminal","default_terminal":"11e95f8ec39d' .
                'e8fbdb0a4f1a"},"username":"{user_name}","user_api_key":"234bas8dfn8238f923w2","' .
                'user_hash_key":null,"user_type_code":100,"password":null,"zip":"48375","locatio' .
                'n_id":"11e95f8ec39de8fbdb0a4f1a","status_id":true,"id":"11e95f8ec39de8fbdb0a4f1' .
                'a","status":true,"login_attempts":0,"last_login_ts":1422040992,"created_ts":142' .
                '2040992,"modified_ts":1422040992,"created_user_id":"11e95f8ec39de8fbdb0a4f1a","' .
                'terms_accepted_ts":1422040992,"terms_agree_ip":"192.168.0.10","current_date_tim' .
                'e":"2019-03-11T10:38:26-0700"},"parent":{"location_id":"11e95f8ec39de8fbdb0a4f1' .
                'a","account_number":"54545433332","contact_api_id":"137","first_name":"John","l' .
                'ast_name":"Smith","cell_phone":"3339998822","balance":245.36,"address":{"city":' .
                '"Novi","state":"Michigan","postal_code":"48375","country":"US","street":"43155 ' .
                'Main Street STE 2310-C"},"company_name":"Fortis Payment Systems, LLC","header_m' .
                'essage":"This is a sample message for you","date_of_birth":"2021-12-01","email_' .
                'trx_receipt":true,"home_phone":"3339998822","office_phone":"3339998822","office' .
                '_phone_ext":"5","header_message_type":0,"update_if_exists":1,"contact_c1":"any"' .
                ',"contact_c2":"anything","contact_c3":"something","parent_id":"11e95f8ec39de8fb' .
                'db0a4f1a","email":"email@domain.com","id":"11e95f8ec39de8fbdb0a4f1a","created_t' .
                's":1422040992,"modified_ts":1422040992,"active":true},"children":{"location_id"' .
                ':"11e95f8ec39de8fbdb0a4f1a","account_number":"54545433332","contact_api_id":"13' .
                '7","first_name":"John","last_name":"Smith","cell_phone":"3339998822","balance":' .
                '245.36,"address":{"city":"Novi","state":"Michigan","postal_code":"48375","count' .
                'ry":"US","street":"43155 Main Street STE 2310-C"},"company_name":"Fortis Paymen' .
                't Systems, LLC","header_message":"This is a sample message for you","date_of_bi' .
                'rth":"2021-12-01","email_trx_receipt":true,"home_phone":"3339998822","office_ph' .
                'one":"3339998822","office_phone_ext":"5","header_message_type":0,"update_if_exi' .
                'sts":1,"contact_c1":"any","contact_c2":"anything","contact_c3":"something","par' .
                'ent_id":"11e95f8ec39de8fbdb0a4f1a","email":"email@domain.com","id":"11e95f8ec39' .
                'de8fbdb0a4f1a","created_ts":1422040992,"modified_ts":1422040992,"active":true}}' .
                '}'
            )))
            ->assert();
    }
}
