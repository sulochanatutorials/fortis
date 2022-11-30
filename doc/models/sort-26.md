
# Sort 26

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort26`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `additionalAmounts` | `?array` | Optional | - | getAdditionalAmounts(): ?array | setAdditionalAmounts(?array additionalAmounts): void |
| `billingAddress` | `?array` | Optional | - | getBillingAddress(): ?array | setBillingAddress(?array billingAddress): void |
| `checkinDate` | `?array` | Optional | - | getCheckinDate(): ?array | setCheckinDate(?array checkinDate): void |
| `checkoutDate` | `?array` | Optional | - | getCheckoutDate(): ?array | setCheckoutDate(?array checkoutDate): void |
| `clerkNumber` | `?array` | Optional | - | getClerkNumber(): ?array | setClerkNumber(?array clerkNumber): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `customData` | `?array` | Optional | - | getCustomData(): ?array | setCustomData(?array customData): void |
| `customerId` | `?array` | Optional | - | getCustomerId(): ?array | setCustomerId(?array customerId): void |
| `description` | `?array` | Optional | - | getDescription(): ?array | setDescription(?array description): void |
| `identityVerification` | `?array` | Optional | - | getIdentityVerification(): ?array | setIdentityVerification(?array identityVerification): void |
| `iiasInd` | `?array` | Optional | - | getIiasInd(): ?array | setIiasInd(?array iiasInd): void |
| `imageFront` | `?array` | Optional | - | getImageFront(): ?array | setImageFront(?array imageFront): void |
| `imageBack` | `?array` | Optional | - | getImageBack(): ?array | setImageBack(?array imageBack): void |
| `installment` | `?array` | Optional | - | getInstallment(): ?array | setInstallment(?array installment): void |
| `installmentNumber` | `?array` | Optional | - | getInstallmentNumber(): ?array | setInstallmentNumber(?array installmentNumber): void |
| `installmentCount` | `?array` | Optional | - | getInstallmentCount(): ?array | setInstallmentCount(?array installmentCount): void |
| `locationApiId` | `?array` | Optional | - | getLocationApiId(): ?array | setLocationApiId(?array locationApiId): void |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `productTransactionId` | `?array` | Optional | - | getProductTransactionId(): ?array | setProductTransactionId(?array productTransactionId): void |
| `advanceDeposit` | `?array` | Optional | - | getAdvanceDeposit(): ?array | setAdvanceDeposit(?array advanceDeposit): void |
| `noShow` | `?array` | Optional | - | getNoShow(): ?array | setNoShow(?array noShow): void |
| `notificationEmailAddress` | `?array` | Optional | - | getNotificationEmailAddress(): ?array | setNotificationEmailAddress(?array notificationEmailAddress): void |
| `orderNumber` | `?array` | Optional | - | getOrderNumber(): ?array | setOrderNumber(?array orderNumber): void |
| `poNumber` | `?array` | Optional | - | getPoNumber(): ?array | setPoNumber(?array poNumber): void |
| `quickInvoiceId` | `?array` | Optional | - | getQuickInvoiceId(): ?array | setQuickInvoiceId(?array quickInvoiceId): void |
| `recurring` | `?array` | Optional | - | getRecurring(): ?array | setRecurring(?array recurring): void |
| `recurringNumber` | `?array` | Optional | - | getRecurringNumber(): ?array | setRecurringNumber(?array recurringNumber): void |
| `roomNum` | `?array` | Optional | - | getRoomNum(): ?array | setRoomNum(?array roomNum): void |
| `roomRate` | `?array` | Optional | - | getRoomRate(): ?array | setRoomRate(?array roomRate): void |
| `saveAccount` | `?array` | Optional | - | getSaveAccount(): ?array | setSaveAccount(?array saveAccount): void |
| `saveAccountTitle` | `?array` | Optional | - | getSaveAccountTitle(): ?array | setSaveAccountTitle(?array saveAccountTitle): void |
| `subtotalAmount` | `?array` | Optional | - | getSubtotalAmount(): ?array | setSubtotalAmount(?array subtotalAmount): void |
| `surchargeAmount` | `?array` | Optional | - | getSurchargeAmount(): ?array | setSurchargeAmount(?array surchargeAmount): void |
| `tags` | `?array` | Optional | - | getTags(): ?array | setTags(?array tags): void |
| `tax` | `?array` | Optional | - | getTax(): ?array | setTax(?array tax): void |
| `tipAmount` | `?array` | Optional | - | getTipAmount(): ?array | setTipAmount(?array tipAmount): void |
| `transactionAmount` | `?array` | Optional | - | getTransactionAmount(): ?array | setTransactionAmount(?array transactionAmount): void |
| `secondaryAmount` | `?array` | Optional | - | getSecondaryAmount(): ?array | setSecondaryAmount(?array secondaryAmount): void |
| `transactionApiId` | `?array` | Optional | - | getTransactionApiId(): ?array | setTransactionApiId(?array transactionApiId): void |
| `transactionC1` | `?array` | Optional | - | getTransactionC1(): ?array | setTransactionC1(?array transactionC1): void |
| `transactionC2` | `?array` | Optional | - | getTransactionC2(): ?array | setTransactionC2(?array transactionC2): void |
| `transactionC3` | `?array` | Optional | - | getTransactionC3(): ?array | setTransactionC3(?array transactionC3): void |
| `bankFundedOnlyOverride` | `?array` | Optional | - | getBankFundedOnlyOverride(): ?array | setBankFundedOnlyOverride(?array bankFundedOnlyOverride): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `modifiedTs` | `?array` | Optional | - | getModifiedTs(): ?array | setModifiedTs(?array modifiedTs): void |
| `terminalId` | `?array` | Optional | - | getTerminalId(): ?array | setTerminalId(?array terminalId): void |
| `accountHolderName` | `?array` | Optional | - | getAccountHolderName(): ?array | setAccountHolderName(?array accountHolderName): void |
| `accountType` | `?array` | Optional | - | getAccountType(): ?array | setAccountType(?array accountType): void |
| `tokenApiId` | `?array` | Optional | - | getTokenApiId(): ?array | setTokenApiId(?array tokenApiId): void |
| `tokenId` | `?array` | Optional | - | getTokenId(): ?array | setTokenId(?array tokenId): void |
| `achIdentifier` | `?array` | Optional | - | getAchIdentifier(): ?array | setAchIdentifier(?array achIdentifier): void |
| `achSecCode` | `?array` | Optional | - | getAchSecCode(): ?array | setAchSecCode(?array achSecCode): void |
| `authAmount` | `?array` | Optional | - | getAuthAmount(): ?array | setAuthAmount(?array authAmount): void |
| `authCode` | `?array` | Optional | - | getAuthCode(): ?array | setAuthCode(?array authCode): void |
| `avs` | `?array` | Optional | - | getAvs(): ?array | setAvs(?array avs): void |
| `avsEnhanced` | `?array` | Optional | - | getAvsEnhanced(): ?array | setAvsEnhanced(?array avsEnhanced): void |
| `cardholderPresent` | `?array` | Optional | - | getCardholderPresent(): ?array | setCardholderPresent(?array cardholderPresent): void |
| `cardPresent` | `?array` | Optional | - | getCardPresent(): ?array | setCardPresent(?array cardPresent): void |
| `checkNumber` | `?array` | Optional | - | getCheckNumber(): ?array | setCheckNumber(?array checkNumber): void |
| `customerIp` | `?array` | Optional | - | getCustomerIp(): ?array | setCustomerIp(?array customerIp): void |
| `cvvResponse` | `?array` | Optional | - | getCvvResponse(): ?array | setCvvResponse(?array cvvResponse): void |
| `entryModeId` | `?array` | Optional | - | getEntryModeId(): ?array | setEntryModeId(?array entryModeId): void |
| `emvReceiptData` | `?array` | Optional | - | getEmvReceiptData(): ?array | setEmvReceiptData(?array emvReceiptData): void |
| `firstSix` | `?array` | Optional | - | getFirstSix(): ?array | setFirstSix(?array firstSix): void |
| `lastFour` | `?array` | Optional | - | getLastFour(): ?array | setLastFour(?array lastFour): void |
| `paymentMethod` | `?array` | Optional | - | getPaymentMethod(): ?array | setPaymentMethod(?array paymentMethod): void |
| `terminalSerialNumber` | `?array` | Optional | - | getTerminalSerialNumber(): ?array | setTerminalSerialNumber(?array terminalSerialNumber): void |
| `transactionSettlementStatus` | `?array` | Optional | - | getTransactionSettlementStatus(): ?array | setTransactionSettlementStatus(?array transactionSettlementStatus): void |
| `chargeBackDate` | `?array` | Optional | - | getChargeBackDate(): ?array | setChargeBackDate(?array chargeBackDate): void |
| `isRecurring` | `?array` | Optional | - | getIsRecurring(): ?array | setIsRecurring(?array isRecurring): void |
| `notificationEmailSent` | `?array` | Optional | - | getNotificationEmailSent(): ?array | setNotificationEmailSent(?array notificationEmailSent): void |
| `par` | `?array` | Optional | - | getPar(): ?array | setPar(?array par): void |
| `reasonCodeId` | `?array` | Optional | - | getReasonCodeId(): ?array | setReasonCodeId(?array reasonCodeId): void |
| `recurringId` | `?array` | Optional | - | getRecurringId(): ?array | setRecurringId(?array recurringId): void |
| `settleDate` | `?array` | Optional | - | getSettleDate(): ?array | setSettleDate(?array settleDate): void |
| `statusCode` | `?array` | Optional | - | getStatusCode(): ?array | setStatusCode(?array statusCode): void |
| `transactionBatchId` | `?array` | Optional | - | getTransactionBatchId(): ?array | setTransactionBatchId(?array transactionBatchId): void |
| `typeId` | `?array` | Optional | - | getTypeId(): ?array | setTypeId(?array typeId): void |
| `verbiage` | `?array` | Optional | - | getVerbiage(): ?array | setVerbiage(?array verbiage): void |
| `voidDate` | `?array` | Optional | - | getVoidDate(): ?array | setVoidDate(?array voidDate): void |
| `batch` | `?array` | Optional | - | getBatch(): ?array | setBatch(?array batch): void |
| `termsAgree` | `?array` | Optional | - | getTermsAgree(): ?array | setTermsAgree(?array termsAgree): void |
| `responseMessage` | `?array` | Optional | - | getResponseMessage(): ?array | setResponseMessage(?array responseMessage): void |
| `returnDate` | `?array` | Optional | - | getReturnDate(): ?array | setReturnDate(?array returnDate): void |
| `trxSourceId` | `?array` | Optional | - | getTrxSourceId(): ?array | setTrxSourceId(?array trxSourceId): void |
| `accountVault` | `?array` | Optional | - | getAccountVault(): ?array | setAccountVault(?array accountVault): void |
| `quickInvoice` | `?array` | Optional | - | getQuickInvoice(): ?array | setQuickInvoice(?array quickInvoice): void |
| `logEmails` | `?array` | Optional | - | getLogEmails(): ?array | setLogEmails(?array logEmails): void |
| `isVoidable` | `?array` | Optional | - | getIsVoidable(): ?array | setIsVoidable(?array isVoidable): void |
| `isReversible` | `?array` | Optional | - | getIsReversible(): ?array | setIsReversible(?array isReversible): void |
| `isRefundable` | `?array` | Optional | - | getIsRefundable(): ?array | setIsRefundable(?array isRefundable): void |
| `isCompletable` | `?array` | Optional | - | getIsCompletable(): ?array | setIsCompletable(?array isCompletable): void |
| `isSettled` | `?array` | Optional | - | getIsSettled(): ?array | setIsSettled(?array isSettled): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `contact` | `?array` | Optional | - | getContact(): ?array | setContact(?array contact): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `productTransaction` | `?array` | Optional | - | getProductTransaction(): ?array | setProductTransaction(?array productTransaction): void |
| `allTags` | `?array` | Optional | - | getAllTags(): ?array | setAllTags(?array allTags): void |
| `tagTransactions` | `?array` | Optional | - | getTagTransactions(): ?array | setTagTransactions(?array tagTransactions): void |
| `declinedRecurringNotification` | `?array` | Optional | - | getDeclinedRecurringNotification(): ?array | setDeclinedRecurringNotification(?array declinedRecurringNotification): void |
| `paymentRecurringNotification` | `?array` | Optional | - | getPaymentRecurringNotification(): ?array | setPaymentRecurringNotification(?array paymentRecurringNotification): void |
| `developerCompany` | `?array` | Optional | - | getDeveloperCompany(): ?array | setDeveloperCompany(?array developerCompany): void |
| `terminal` | `?array` | Optional | - | getTerminal(): ?array | setTerminal(?array terminal): void |
| `hostedPaymentPage` | `?array` | Optional | - | getHostedPaymentPage(): ?array | setHostedPaymentPage(?array hostedPaymentPage): void |
| `transactionLevel3` | `?array` | Optional | - | getTransactionLevel3(): ?array | setTransactionLevel3(?array transactionLevel3): void |
| `developerCompanyId` | `?array` | Optional | - | getDeveloperCompanyId(): ?array | setDeveloperCompanyId(?array developerCompanyId): void |
| `transactionHistories` | `?array` | Optional | - | getTransactionHistories(): ?array | setTransactionHistories(?array transactionHistories): void |
| `surchargeTransaction` | `?array` | Optional | - | getSurchargeTransaction(): ?array | setSurchargeTransaction(?array surchargeTransaction): void |
| `surcharge` | `?array` | Optional | - | getSurcharge(): ?array | setSurcharge(?array surcharge): void |
| `signature` | `?array` | Optional | - | getSignature(): ?array | setSignature(?array signature): void |
| `reasonCode` | `?array` | Optional | - | getReasonCode(): ?array | setReasonCode(?array reasonCode): void |
| `type` | `?array` | Optional | - | getType(): ?array | setType(?array type): void |
| `status` | `?array` | Optional | - | getStatus(): ?array | setStatus(?array status): void |
| `transactionBatch` | `?array` | Optional | - | getTransactionBatch(): ?array | setTransactionBatch(?array transactionBatch): void |
| `transactionSplits` | `?array` | Optional | - | getTransactionSplits(): ?array | setTransactionSplits(?array transactionSplits): void |
| `postbackLogs` | `?array` | Optional | - | getPostbackLogs(): ?array | setPostbackLogs(?array postbackLogs): void |
| `currencyType` | `?array` | Optional | - | getCurrencyType(): ?array | setCurrencyType(?array currencyType): void |
| `transactionReferences` | `?array` | Optional | - | getTransactionReferences(): ?array | setTransactionReferences(?array transactionReferences): void |

## Example (as JSON)

```json
{
  "additional_amounts": null,
  "billing_address": null,
  "checkin_date": null,
  "checkout_date": null,
  "clerk_number": null,
  "contact_api_id": null,
  "contact_id": null,
  "custom_data": null,
  "customer_id": null,
  "description": null,
  "identity_verification": null,
  "iias_ind": null,
  "image_front": null,
  "image_back": null,
  "installment": null,
  "installment_number": null,
  "installment_count": null,
  "location_api_id": null,
  "location_id": null,
  "product_transaction_id": null,
  "advance_deposit": null,
  "no_show": null,
  "notification_email_address": null,
  "order_number": null,
  "po_number": null,
  "quick_invoice_id": null,
  "recurring": null,
  "recurring_number": null,
  "room_num": null,
  "room_rate": null,
  "save_account": null,
  "save_account_title": null,
  "subtotal_amount": null,
  "surcharge_amount": null,
  "tags": null,
  "tax": null,
  "tip_amount": null,
  "transaction_amount": null,
  "secondary_amount": null,
  "transaction_api_id": null,
  "transaction_c1": null,
  "transaction_c2": null,
  "transaction_c3": null,
  "bank_funded_only_override": null,
  "id": null,
  "created_ts": null,
  "modified_ts": null,
  "terminal_id": null,
  "account_holder_name": null,
  "account_type": null,
  "token_api_id": null,
  "token_id": null,
  "ach_identifier": null,
  "ach_sec_code": null,
  "auth_amount": null,
  "auth_code": null,
  "avs": null,
  "avs_enhanced": null,
  "cardholder_present": null,
  "card_present": null,
  "check_number": null,
  "customer_ip": null,
  "cvv_response": null,
  "entry_mode_id": null,
  "emv_receipt_data": null,
  "first_six": null,
  "last_four": null,
  "payment_method": null,
  "terminal_serial_number": null,
  "transaction_settlement_status": null,
  "charge_back_date": null,
  "is_recurring": null,
  "notification_email_sent": null,
  "par": null,
  "reason_code_id": null,
  "recurring_id": null,
  "settle_date": null,
  "status_code": null,
  "transaction_batch_id": null,
  "type_id": null,
  "verbiage": null,
  "void_date": null,
  "batch": null,
  "terms_agree": null,
  "response_message": null,
  "return_date": null,
  "trx_source_id": null,
  "account_vault": null,
  "quick_invoice": null,
  "log_emails": null,
  "is_voidable": null,
  "is_reversible": null,
  "is_refundable": null,
  "is_completable": null,
  "is_settled": null,
  "created_user": null,
  "location": null,
  "contact": null,
  "changelogs": null,
  "product_transaction": null,
  "all_tags": null,
  "tagTransactions": null,
  "declined_recurring_notification": null,
  "payment_recurring_notification": null,
  "developer_company": null,
  "terminal": null,
  "hosted_payment_page": null,
  "transaction_level3": null,
  "developer_company_id": null,
  "transaction_histories": null,
  "surcharge_transaction": null,
  "surcharge": null,
  "signature": null,
  "reason_code": null,
  "type": null,
  "status": null,
  "transaction_batch": null,
  "transaction_splits": null,
  "postback_logs": null,
  "currency_type": null,
  "transaction_references": null
}
```

