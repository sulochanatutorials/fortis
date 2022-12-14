<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class V1QuickInvoicesRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $locationId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $ccProductTransactionId;

    /**
     * @var array
     */
    private $achProductTransactionId = [];

    /**
     * @var string
     */
    private $dueDate;

    /**
     * @var ItemList[]
     */
    private $itemList;

    /**
     * @var bool|null
     */
    private $allowOverpayment;

    /**
     * @var array
     */
    private $email = [];

    /**
     * @var array
     */
    private $contactId = [];

    /**
     * @var array
     */
    private $contactApiId = [];

    /**
     * @var array
     */
    private $customerId = [];

    /**
     * @var array
     */
    private $expireDate = [];

    /**
     * @var bool|null
     */
    private $allowPartialPay;

    /**
     * @var bool|null
     */
    private $attachFilesToEmail;

    /**
     * @var bool|null
     */
    private $sendEmail;

    /**
     * @var array
     */
    private $invoiceNumber = [];

    /**
     * @var array
     */
    private $itemHeader = [];

    /**
     * @var array
     */
    private $itemFooter = [];

    /**
     * @var array
     */
    private $amountDue = [];

    /**
     * @var array
     */
    private $notificationEmail = [];

    /**
     * @var array
     */
    private $paymentStatusId = [];

    /**
     * @var array
     */
    private $statusId = [];

    /**
     * @var array
     */
    private $note = [];

    /**
     * @var array
     */
    private $notificationDaysBeforeDueDate = [];

    /**
     * @var array
     */
    private $notificationDaysAfterDueDate = [];

    /**
     * @var bool|null
     */
    private $notificationOnDueDate;

    /**
     * @var bool|null
     */
    private $sendTextToPay;

    /**
     * @var array[]|null
     */
    private $files;

    /**
     * @var array
     */
    private $remainingBalance = [];

    /**
     * @var array
     */
    private $singlePaymentMinAmount = [];

    /**
     * @var array
     */
    private $singlePaymentMaxAmount = ['value' => 9999999.99];

    /**
     * @var array
     */
    private $cellPhone = [];

    /**
     * @param string $locationId
     * @param string $title
     * @param string $ccProductTransactionId
     * @param string $dueDate
     * @param ItemList[] $itemList
     */
    public function __construct(
        string $locationId,
        string $title,
        string $ccProductTransactionId,
        string $dueDate,
        array $itemList
    ) {
        $this->locationId = $locationId;
        $this->title = $title;
        $this->ccProductTransactionId = $ccProductTransactionId;
        $this->dueDate = $dueDate;
        $this->itemList = $itemList;
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @required
     * @maps location_id
     */
    public function setLocationId(string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Title.
     * Title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * Title
     *
     * @required
     * @maps title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Cc Product Transaction Id.
     * Transaction ID
     */
    public function getCcProductTransactionId(): string
    {
        return $this->ccProductTransactionId;
    }

    /**
     * Sets Cc Product Transaction Id.
     * Transaction ID
     *
     * @required
     * @maps cc_product_transaction_id
     */
    public function setCcProductTransactionId(string $ccProductTransactionId): void
    {
        $this->ccProductTransactionId = $ccProductTransactionId;
    }

    /**
     * Returns Ach Product Transaction Id.
     * ACH Product Transaction Id
     */
    public function getAchProductTransactionId(): ?string
    {
        if (count($this->achProductTransactionId) == 0) {
            return null;
        }
        return $this->achProductTransactionId['value'];
    }

    /**
     * Sets Ach Product Transaction Id.
     * ACH Product Transaction Id
     *
     * @maps ach_product_transaction_id
     */
    public function setAchProductTransactionId(?string $achProductTransactionId): void
    {
        $this->achProductTransactionId['value'] = $achProductTransactionId;
    }

    /**
     * Unsets Ach Product Transaction Id.
     * ACH Product Transaction Id
     */
    public function unsetAchProductTransactionId(): void
    {
        $this->achProductTransactionId = [];
    }

    /**
     * Returns Due Date.
     * Due Date, Format: Y-m-d
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * Sets Due Date.
     * Due Date, Format: Y-m-d
     *
     * @required
     * @maps due_date
     */
    public function setDueDate(string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Returns Item List.
     * Item List
     *
     * @return ItemList[]
     */
    public function getItemList(): array
    {
        return $this->itemList;
    }

    /**
     * Sets Item List.
     * Item List
     *
     * @required
     * @maps item_list
     *
     * @param ItemList[] $itemList
     */
    public function setItemList(array $itemList): void
    {
        $this->itemList = $itemList;
    }

    /**
     * Returns Allow Overpayment.
     * Allow Overpayment.
     */
    public function getAllowOverpayment(): ?bool
    {
        return $this->allowOverpayment;
    }

    /**
     * Sets Allow Overpayment.
     * Allow Overpayment.
     *
     * @maps allow_overpayment
     */
    public function setAllowOverpayment(?bool $allowOverpayment): void
    {
        $this->allowOverpayment = $allowOverpayment;
    }

    /**
     * Returns Email.
     * Email
     */
    public function getEmail(): ?string
    {
        if (count($this->email) == 0) {
            return null;
        }
        return $this->email['value'];
    }

    /**
     * Sets Email.
     * Email
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email['value'] = $email;
    }

    /**
     * Unsets Email.
     * Email
     */
    public function unsetEmail(): void
    {
        $this->email = [];
    }

    /**
     * Returns Contact Id.
     * Contact ID
     */
    public function getContactId(): ?string
    {
        if (count($this->contactId) == 0) {
            return null;
        }
        return $this->contactId['value'];
    }

    /**
     * Sets Contact Id.
     * Contact ID
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId['value'] = $contactId;
    }

    /**
     * Unsets Contact Id.
     * Contact ID
     */
    public function unsetContactId(): void
    {
        $this->contactId = [];
    }

    /**
     * Returns Contact Api Id.
     * Contact API Id
     */
    public function getContactApiId(): ?string
    {
        if (count($this->contactApiId) == 0) {
            return null;
        }
        return $this->contactApiId['value'];
    }

    /**
     * Sets Contact Api Id.
     * Contact API Id
     *
     * @maps contact_api_id
     */
    public function setContactApiId(?string $contactApiId): void
    {
        $this->contactApiId['value'] = $contactApiId;
    }

    /**
     * Unsets Contact Api Id.
     * Contact API Id
     */
    public function unsetContactApiId(): void
    {
        $this->contactApiId = [];
    }

    /**
     * Returns Customer Id.
     * Customer Id
     */
    public function getCustomerId(): ?string
    {
        if (count($this->customerId) == 0) {
            return null;
        }
        return $this->customerId['value'];
    }

    /**
     * Sets Customer Id.
     * Customer Id
     *
     * @maps customer_id
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId['value'] = $customerId;
    }

    /**
     * Unsets Customer Id.
     * Customer Id
     */
    public function unsetCustomerId(): void
    {
        $this->customerId = [];
    }

    /**
     * Returns Expire Date.
     * Expire Date.
     */
    public function getExpireDate(): ?string
    {
        if (count($this->expireDate) == 0) {
            return null;
        }
        return $this->expireDate['value'];
    }

    /**
     * Sets Expire Date.
     * Expire Date.
     *
     * @maps expire_date
     */
    public function setExpireDate(?string $expireDate): void
    {
        $this->expireDate['value'] = $expireDate;
    }

    /**
     * Unsets Expire Date.
     * Expire Date.
     */
    public function unsetExpireDate(): void
    {
        $this->expireDate = [];
    }

    /**
     * Returns Allow Partial Pay.
     * Allow partial pay
     */
    public function getAllowPartialPay(): ?bool
    {
        return $this->allowPartialPay;
    }

    /**
     * Sets Allow Partial Pay.
     * Allow partial pay
     *
     * @maps allow_partial_pay
     */
    public function setAllowPartialPay(?bool $allowPartialPay): void
    {
        $this->allowPartialPay = $allowPartialPay;
    }

    /**
     * Returns Attach Files to Email.
     * Attach Files to Email
     */
    public function getAttachFilesToEmail(): ?bool
    {
        return $this->attachFilesToEmail;
    }

    /**
     * Sets Attach Files to Email.
     * Attach Files to Email
     *
     * @maps attach_files_to_email
     */
    public function setAttachFilesToEmail(?bool $attachFilesToEmail): void
    {
        $this->attachFilesToEmail = $attachFilesToEmail;
    }

    /**
     * Returns Send Email.
     * Send Email
     */
    public function getSendEmail(): ?bool
    {
        return $this->sendEmail;
    }

    /**
     * Sets Send Email.
     * Send Email
     *
     * @maps send_email
     */
    public function setSendEmail(?bool $sendEmail): void
    {
        $this->sendEmail = $sendEmail;
    }

    /**
     * Returns Invoice Number.
     * Invoice number
     */
    public function getInvoiceNumber(): ?string
    {
        if (count($this->invoiceNumber) == 0) {
            return null;
        }
        return $this->invoiceNumber['value'];
    }

    /**
     * Sets Invoice Number.
     * Invoice number
     *
     * @maps invoice_number
     */
    public function setInvoiceNumber(?string $invoiceNumber): void
    {
        $this->invoiceNumber['value'] = $invoiceNumber;
    }

    /**
     * Unsets Invoice Number.
     * Invoice number
     */
    public function unsetInvoiceNumber(): void
    {
        $this->invoiceNumber = [];
    }

    /**
     * Returns Item Header.
     * Item Header
     */
    public function getItemHeader(): ?string
    {
        if (count($this->itemHeader) == 0) {
            return null;
        }
        return $this->itemHeader['value'];
    }

    /**
     * Sets Item Header.
     * Item Header
     *
     * @maps item_header
     */
    public function setItemHeader(?string $itemHeader): void
    {
        $this->itemHeader['value'] = $itemHeader;
    }

    /**
     * Unsets Item Header.
     * Item Header
     */
    public function unsetItemHeader(): void
    {
        $this->itemHeader = [];
    }

    /**
     * Returns Item Footer.
     * Item footer
     */
    public function getItemFooter(): ?string
    {
        if (count($this->itemFooter) == 0) {
            return null;
        }
        return $this->itemFooter['value'];
    }

    /**
     * Sets Item Footer.
     * Item footer
     *
     * @maps item_footer
     */
    public function setItemFooter(?string $itemFooter): void
    {
        $this->itemFooter['value'] = $itemFooter;
    }

    /**
     * Unsets Item Footer.
     * Item footer
     */
    public function unsetItemFooter(): void
    {
        $this->itemFooter = [];
    }

    /**
     * Returns Amount Due.
     * Amount Due
     */
    public function getAmountDue(): ?float
    {
        if (count($this->amountDue) == 0) {
            return null;
        }
        return $this->amountDue['value'];
    }

    /**
     * Sets Amount Due.
     * Amount Due
     *
     * @maps amount_due
     */
    public function setAmountDue(?float $amountDue): void
    {
        $this->amountDue['value'] = $amountDue;
    }

    /**
     * Unsets Amount Due.
     * Amount Due
     */
    public function unsetAmountDue(): void
    {
        $this->amountDue = [];
    }

    /**
     * Returns Notification Email.
     * Notification email
     */
    public function getNotificationEmail(): ?string
    {
        if (count($this->notificationEmail) == 0) {
            return null;
        }
        return $this->notificationEmail['value'];
    }

    /**
     * Sets Notification Email.
     * Notification email
     *
     * @maps notification_email
     */
    public function setNotificationEmail(?string $notificationEmail): void
    {
        $this->notificationEmail['value'] = $notificationEmail;
    }

    /**
     * Unsets Notification Email.
     * Notification email
     */
    public function unsetNotificationEmail(): void
    {
        $this->notificationEmail = [];
    }

    /**
     * Returns Payment Status Id.
     * Payment Status Id
     */
    public function getPaymentStatusId(): ?float
    {
        if (count($this->paymentStatusId) == 0) {
            return null;
        }
        return $this->paymentStatusId['value'];
    }

    /**
     * Sets Payment Status Id.
     * Payment Status Id
     *
     * @maps payment_status_id
     */
    public function setPaymentStatusId(?float $paymentStatusId): void
    {
        $this->paymentStatusId['value'] = $paymentStatusId;
    }

    /**
     * Unsets Payment Status Id.
     * Payment Status Id
     */
    public function unsetPaymentStatusId(): void
    {
        $this->paymentStatusId = [];
    }

    /**
     * Returns Status Id.
     * Status Id
     */
    public function getStatusId(): ?float
    {
        if (count($this->statusId) == 0) {
            return null;
        }
        return $this->statusId['value'];
    }

    /**
     * Sets Status Id.
     * Status Id
     *
     * @maps status_id
     */
    public function setStatusId(?float $statusId): void
    {
        $this->statusId['value'] = $statusId;
    }

    /**
     * Unsets Status Id.
     * Status Id
     */
    public function unsetStatusId(): void
    {
        $this->statusId = [];
    }

    /**
     * Returns Note.
     * Note
     */
    public function getNote(): ?string
    {
        if (count($this->note) == 0) {
            return null;
        }
        return $this->note['value'];
    }

    /**
     * Sets Note.
     * Note
     *
     * @maps note
     */
    public function setNote(?string $note): void
    {
        $this->note['value'] = $note;
    }

    /**
     * Unsets Note.
     * Note
     */
    public function unsetNote(): void
    {
        $this->note = [];
    }

    /**
     * Returns Notification Days Before Due Date.
     * Notification days before due date
     */
    public function getNotificationDaysBeforeDueDate(): ?int
    {
        if (count($this->notificationDaysBeforeDueDate) == 0) {
            return null;
        }
        return $this->notificationDaysBeforeDueDate['value'];
    }

    /**
     * Sets Notification Days Before Due Date.
     * Notification days before due date
     *
     * @maps notification_days_before_due_date
     */
    public function setNotificationDaysBeforeDueDate(?int $notificationDaysBeforeDueDate): void
    {
        $this->notificationDaysBeforeDueDate['value'] = $notificationDaysBeforeDueDate;
    }

    /**
     * Unsets Notification Days Before Due Date.
     * Notification days before due date
     */
    public function unsetNotificationDaysBeforeDueDate(): void
    {
        $this->notificationDaysBeforeDueDate = [];
    }

    /**
     * Returns Notification Days After Due Date.
     * Notification days after due date
     */
    public function getNotificationDaysAfterDueDate(): ?int
    {
        if (count($this->notificationDaysAfterDueDate) == 0) {
            return null;
        }
        return $this->notificationDaysAfterDueDate['value'];
    }

    /**
     * Sets Notification Days After Due Date.
     * Notification days after due date
     *
     * @maps notification_days_after_due_date
     */
    public function setNotificationDaysAfterDueDate(?int $notificationDaysAfterDueDate): void
    {
        $this->notificationDaysAfterDueDate['value'] = $notificationDaysAfterDueDate;
    }

    /**
     * Unsets Notification Days After Due Date.
     * Notification days after due date
     */
    public function unsetNotificationDaysAfterDueDate(): void
    {
        $this->notificationDaysAfterDueDate = [];
    }

    /**
     * Returns Notification on Due Date.
     * Notification on due date
     */
    public function getNotificationOnDueDate(): ?bool
    {
        return $this->notificationOnDueDate;
    }

    /**
     * Sets Notification on Due Date.
     * Notification on due date
     *
     * @maps notification_on_due_date
     */
    public function setNotificationOnDueDate(?bool $notificationOnDueDate): void
    {
        $this->notificationOnDueDate = $notificationOnDueDate;
    }

    /**
     * Returns Send Text to Pay.
     * Send Text To Pay
     */
    public function getSendTextToPay(): ?bool
    {
        return $this->sendTextToPay;
    }

    /**
     * Sets Send Text to Pay.
     * Send Text To Pay
     *
     * @maps send_text_to_pay
     */
    public function setSendTextToPay(?bool $sendTextToPay): void
    {
        $this->sendTextToPay = $sendTextToPay;
    }

    /**
     * Returns Files.
     * Files
     *
     * @return array[]|null
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    /**
     * Sets Files.
     * Files
     *
     * @maps files
     *
     * @param array[]|null $files
     */
    public function setFiles(?array $files): void
    {
        $this->files = $files;
    }

    /**
     * Returns Remaining Balance.
     * Remaining Balance
     */
    public function getRemainingBalance(): ?float
    {
        if (count($this->remainingBalance) == 0) {
            return null;
        }
        return $this->remainingBalance['value'];
    }

    /**
     * Sets Remaining Balance.
     * Remaining Balance
     *
     * @maps remaining_balance
     */
    public function setRemainingBalance(?float $remainingBalance): void
    {
        $this->remainingBalance['value'] = $remainingBalance;
    }

    /**
     * Unsets Remaining Balance.
     * Remaining Balance
     */
    public function unsetRemainingBalance(): void
    {
        $this->remainingBalance = [];
    }

    /**
     * Returns Single Payment Min Amount.
     * Single Payment Min Amount
     */
    public function getSinglePaymentMinAmount(): ?float
    {
        if (count($this->singlePaymentMinAmount) == 0) {
            return null;
        }
        return $this->singlePaymentMinAmount['value'];
    }

    /**
     * Sets Single Payment Min Amount.
     * Single Payment Min Amount
     *
     * @maps single_payment_min_amount
     */
    public function setSinglePaymentMinAmount(?float $singlePaymentMinAmount): void
    {
        $this->singlePaymentMinAmount['value'] = $singlePaymentMinAmount;
    }

    /**
     * Unsets Single Payment Min Amount.
     * Single Payment Min Amount
     */
    public function unsetSinglePaymentMinAmount(): void
    {
        $this->singlePaymentMinAmount = [];
    }

    /**
     * Returns Single Payment Max Amount.
     * Single Payment Max Amount
     */
    public function getSinglePaymentMaxAmount(): ?float
    {
        if (count($this->singlePaymentMaxAmount) == 0) {
            return null;
        }
        return $this->singlePaymentMaxAmount['value'];
    }

    /**
     * Sets Single Payment Max Amount.
     * Single Payment Max Amount
     *
     * @maps single_payment_max_amount
     */
    public function setSinglePaymentMaxAmount(?float $singlePaymentMaxAmount): void
    {
        $this->singlePaymentMaxAmount['value'] = $singlePaymentMaxAmount;
    }

    /**
     * Unsets Single Payment Max Amount.
     * Single Payment Max Amount
     */
    public function unsetSinglePaymentMaxAmount(): void
    {
        $this->singlePaymentMaxAmount = [];
    }

    /**
     * Returns Cell Phone.
     * Cell Phone
     */
    public function getCellPhone(): ?string
    {
        if (count($this->cellPhone) == 0) {
            return null;
        }
        return $this->cellPhone['value'];
    }

    /**
     * Sets Cell Phone.
     * Cell Phone
     *
     * @maps cell_phone
     */
    public function setCellPhone(?string $cellPhone): void
    {
        $this->cellPhone['value'] = $cellPhone;
    }

    /**
     * Unsets Cell Phone.
     * Cell Phone
     */
    public function unsetCellPhone(): void
    {
        $this->cellPhone = [];
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['location_id']                           = $this->locationId;
        $json['title']                                 = $this->title;
        $json['cc_product_transaction_id']             = $this->ccProductTransactionId;
        if (!empty($this->achProductTransactionId)) {
            $json['ach_product_transaction_id']        = $this->achProductTransactionId['value'];
        }
        $json['due_date']                              = $this->dueDate;
        $json['item_list']                             = $this->itemList;
        if (isset($this->allowOverpayment)) {
            $json['allow_overpayment']                 = $this->allowOverpayment;
        }
        if (!empty($this->email)) {
            $json['email']                             = $this->email['value'];
        }
        if (!empty($this->contactId)) {
            $json['contact_id']                        = $this->contactId['value'];
        }
        if (!empty($this->contactApiId)) {
            $json['contact_api_id']                    = $this->contactApiId['value'];
        }
        if (!empty($this->customerId)) {
            $json['customer_id']                       = $this->customerId['value'];
        }
        if (!empty($this->expireDate)) {
            $json['expire_date']                       = $this->expireDate['value'];
        }
        if (isset($this->allowPartialPay)) {
            $json['allow_partial_pay']                 = $this->allowPartialPay;
        }
        if (isset($this->attachFilesToEmail)) {
            $json['attach_files_to_email']             = $this->attachFilesToEmail;
        }
        if (isset($this->sendEmail)) {
            $json['send_email']                        = $this->sendEmail;
        }
        if (!empty($this->invoiceNumber)) {
            $json['invoice_number']                    = $this->invoiceNumber['value'];
        }
        if (!empty($this->itemHeader)) {
            $json['item_header']                       = $this->itemHeader['value'];
        }
        if (!empty($this->itemFooter)) {
            $json['item_footer']                       = $this->itemFooter['value'];
        }
        if (!empty($this->amountDue)) {
            $json['amount_due']                        = $this->amountDue['value'];
        }
        if (!empty($this->notificationEmail)) {
            $json['notification_email']                = $this->notificationEmail['value'];
        }
        if (!empty($this->paymentStatusId)) {
            $json['payment_status_id']                 = $this->paymentStatusId['value'];
        }
        if (!empty($this->statusId)) {
            $json['status_id']                         = $this->statusId['value'];
        }
        if (!empty($this->note)) {
            $json['note']                              = $this->note['value'];
        }
        if (!empty($this->notificationDaysBeforeDueDate)) {
            $json['notification_days_before_due_date'] = $this->notificationDaysBeforeDueDate['value'];
        }
        if (!empty($this->notificationDaysAfterDueDate)) {
            $json['notification_days_after_due_date']  = $this->notificationDaysAfterDueDate['value'];
        }
        if (isset($this->notificationOnDueDate)) {
            $json['notification_on_due_date']          = $this->notificationOnDueDate;
        }
        if (isset($this->sendTextToPay)) {
            $json['send_text_to_pay']                  = $this->sendTextToPay;
        }
        if (isset($this->files)) {
            $json['files']                             = $this->files;
        }
        if (!empty($this->remainingBalance)) {
            $json['remaining_balance']                 = $this->remainingBalance['value'];
        }
        if (!empty($this->singlePaymentMinAmount)) {
            $json['single_payment_min_amount']         = $this->singlePaymentMinAmount['value'];
        }
        if (!empty($this->singlePaymentMaxAmount)) {
            $json['single_payment_max_amount']         = $this->singlePaymentMaxAmount['value'];
        }
        if (!empty($this->cellPhone)) {
            $json['cell_phone']                        = $this->cellPhone['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
