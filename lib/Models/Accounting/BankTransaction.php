<?php
/**
 * BankTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.1.1
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * BankTransaction Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BankTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'contact' => '\XeroAPI\XeroPHP\Models\Accounting\Contact',
        'line_items' => '\XeroAPI\XeroPHP\Models\Accounting\LineItem[]',
        'bank_account' => '\XeroAPI\XeroPHP\Models\Accounting\Account',
        'is_reconciled' => 'bool',
        'date' => '\DateTime',
        'reference' => 'string',
        'currency_code' => '\XeroAPI\XeroPHP\Models\Accounting\CurrencyCode',
        'currency_rate' => 'double',
        'url' => 'string',
        'status' => 'string',
        'line_amount_types' => '\XeroAPI\XeroPHP\Models\Accounting\LineAmountTypes',
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'bank_transaction_id' => 'string',
        'prepayment_id' => 'string',
        'overpayment_id' => 'string',
        'updated_date_utc' => '\DateTime',
        'has_attachments' => 'bool',
        'status_attribute_string' => 'string',
        'validation_errors' => '\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'contact' => null,
        'line_items' => null,
        'bank_account' => null,
        'is_reconciled' => null,
        'date' => 'date',
        'reference' => null,
        'currency_code' => null,
        'currency_rate' => 'double',
        'url' => null,
        'status' => null,
        'line_amount_types' => null,
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'bank_transaction_id' => 'uuid',
        'prepayment_id' => 'uuid',
        'overpayment_id' => 'uuid',
        'updated_date_utc' => 'date-time',
        'has_attachments' => null,
        'status_attribute_string' => null,
        'validation_errors' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'Type',
        'contact' => 'Contact',
        'line_items' => 'LineItems',
        'bank_account' => 'BankAccount',
        'is_reconciled' => 'IsReconciled',
        'date' => 'Date',
        'reference' => 'Reference',
        'currency_code' => 'CurrencyCode',
        'currency_rate' => 'CurrencyRate',
        'url' => 'Url',
        'status' => 'Status',
        'line_amount_types' => 'LineAmountTypes',
        'sub_total' => 'SubTotal',
        'total_tax' => 'TotalTax',
        'total' => 'Total',
        'bank_transaction_id' => 'BankTransactionID',
        'prepayment_id' => 'PrepaymentID',
        'overpayment_id' => 'OverpaymentID',
        'updated_date_utc' => 'UpdatedDateUTC',
        'has_attachments' => 'HasAttachments',
        'status_attribute_string' => 'StatusAttributeString',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'contact' => 'setContact',
        'line_items' => 'setLineItems',
        'bank_account' => 'setBankAccount',
        'is_reconciled' => 'setIsReconciled',
        'date' => 'setDate',
        'reference' => 'setReference',
        'currency_code' => 'setCurrencyCode',
        'currency_rate' => 'setCurrencyRate',
        'url' => 'setUrl',
        'status' => 'setStatus',
        'line_amount_types' => 'setLineAmountTypes',
        'sub_total' => 'setSubTotal',
        'total_tax' => 'setTotalTax',
        'total' => 'setTotal',
        'bank_transaction_id' => 'setBankTransactionId',
        'prepayment_id' => 'setPrepaymentId',
        'overpayment_id' => 'setOverpaymentId',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'has_attachments' => 'setHasAttachments',
        'status_attribute_string' => 'setStatusAttributeString',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'contact' => 'getContact',
        'line_items' => 'getLineItems',
        'bank_account' => 'getBankAccount',
        'is_reconciled' => 'getIsReconciled',
        'date' => 'getDate',
        'reference' => 'getReference',
        'currency_code' => 'getCurrencyCode',
        'currency_rate' => 'getCurrencyRate',
        'url' => 'getUrl',
        'status' => 'getStatus',
        'line_amount_types' => 'getLineAmountTypes',
        'sub_total' => 'getSubTotal',
        'total_tax' => 'getTotalTax',
        'total' => 'getTotal',
        'bank_transaction_id' => 'getBankTransactionId',
        'prepayment_id' => 'getPrepaymentId',
        'overpayment_id' => 'getOverpaymentId',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'has_attachments' => 'getHasAttachments',
        'status_attribute_string' => 'getStatusAttributeString',
        'validation_errors' => 'getValidationErrors'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const TYPE_RECEIVE = 'RECEIVE';
    const TYPE_RECEIVE_OVERPAYMENT = 'RECEIVE-OVERPAYMENT';
    const TYPE_RECEIVE_PREPAYMENT = 'RECEIVE-PREPAYMENT';
    const TYPE_SPEND = 'SPEND';
    const TYPE_SPEND_OVERPAYMENT = 'SPEND-OVERPAYMENT';
    const TYPE_SPEND_PREPAYMENT = 'SPEND-PREPAYMENT';
    const TYPE_RECEIVE_TRANSFER = 'RECEIVE-TRANSFER';
    const TYPE_SPEND_TRANSFER = 'SPEND-TRANSFER';
    const STATUS_AUTHORISED = 'AUTHORISED';
    const STATUS_DELETED = 'DELETED';
    const STATUS_VOIDED = 'VOIDED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RECEIVE,
            self::TYPE_RECEIVE_OVERPAYMENT,
            self::TYPE_RECEIVE_PREPAYMENT,
            self::TYPE_SPEND,
            self::TYPE_SPEND_OVERPAYMENT,
            self::TYPE_SPEND_PREPAYMENT,
            self::TYPE_RECEIVE_TRANSFER,
            self::TYPE_SPEND_TRANSFER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AUTHORISED,
            self::STATUS_DELETED,
            self::STATUS_VOIDED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['bank_account'] = isset($data['bank_account']) ? $data['bank_account'] : null;
        $this->container['is_reconciled'] = isset($data['is_reconciled']) ? $data['is_reconciled'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_rate'] = isset($data['currency_rate']) ? $data['currency_rate'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['line_amount_types'] = isset($data['line_amount_types']) ? $data['line_amount_types'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['bank_transaction_id'] = isset($data['bank_transaction_id']) ? $data['bank_transaction_id'] : null;
        $this->container['prepayment_id'] = isset($data['prepayment_id']) ? $data['prepayment_id'] : null;
        $this->container['overpayment_id'] = isset($data['overpayment_id']) ? $data['overpayment_id'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['has_attachments'] = isset($data['has_attachments']) ? $data['has_attachments'] : false;
        $this->container['status_attribute_string'] = isset($data['status_attribute_string']) ? $data['status_attribute_string'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }
        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
        }
        if ($this->container['bank_account'] === null) {
            $invalidProperties[] = "'bank_account' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type See Bank Transaction Types
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['type'] = $type;

        return $this;
    }



    /**
     * Gets contact
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Contact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {

        $this->container['contact'] = $contact;

        return $this;
    }



    /**
     * Gets line_items
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\LineItem[] $line_items See LineItems
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {

        $this->container['line_items'] = $line_items;

        return $this;
    }



    /**
     * Gets bank_account
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Account
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Account $bank_account bank_account
     *
     * @return $this
     */
    public function setBankAccount($bank_account)
    {

        $this->container['bank_account'] = $bank_account;

        return $this;
    }



    /**
     * Gets is_reconciled
     *
     * @return bool|null
     */
    public function getIsReconciled()
    {
        return $this->container['is_reconciled'];
    }

    /**
     * Sets is_reconciled
     *
     * @param bool|null $is_reconciled Boolean to show if transaction is reconciled
     *
     * @return $this
     */
    public function setIsReconciled($is_reconciled)
    {

        $this->container['is_reconciled'] = $is_reconciled;

        return $this;
    }



    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Date of transaction – YYYY-MM-DD
     *
     * @return $this
     */
    public function setDate($date)
    {

        $this->container['date'] = $date;

        return $this;
    }



    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Reference for the transaction. Only supported for SPEND and RECEIVE transactions.
     *
     * @return $this
     */
    public function setReference($reference)
    {

        $this->container['reference'] = $reference;

        return $this;
    }



    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {

        $this->container['currency_code'] = $currency_code;

        return $this;
    }



    /**
     * Gets currency_rate
     *
     * @return double|null
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param double|null $currency_rate Exchange rate to base currency when money is spent or received. e.g.0.7500 Only used for bank transactions in non base currency. If this isn’t specified for non base currency accounts then either the user-defined rate (preference) or the XE.com day rate will be used. Setting currency is only supported on overpayments.
     *
     * @return $this
     */
    public function setCurrencyRate($currency_rate)
    {

        $this->container['currency_rate'] = $currency_rate;

        return $this;
    }



    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL link to a source document – shown as “Go to App Name”
     *
     * @return $this
     */
    public function setUrl($url)
    {

        $this->container['url'] = $url;

        return $this;
    }



    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status See Bank Transaction Status Codes
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;

        return $this;
    }



    /**
     * Gets line_amount_types
     *
     * @return string|null
     */
    public function getLineAmountTypes()
    {
        return $this->container['line_amount_types'];
    }

    /**
     * Sets line_amount_types
     *
     * @param string|null $line_amount_types line_amount_types
     *
     * @return $this
     */
    public function setLineAmountTypes($line_amount_types)
    {

        $this->container['line_amount_types'] = $line_amount_types;

        return $this;
    }



    /**
     * Gets sub_total
     *
     * @return double|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param double|null $sub_total Total of bank transaction excluding taxes
     *
     * @return $this
     */
    public function setSubTotal($sub_total)
    {

        $this->container['sub_total'] = $sub_total;

        return $this;
    }



    /**
     * Gets total_tax
     *
     * @return double|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param double|null $total_tax Total tax on bank transaction
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {

        $this->container['total_tax'] = $total_tax;

        return $this;
    }



    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double|null $total Total of bank transaction tax inclusive
     *
     * @return $this
     */
    public function setTotal($total)
    {

        $this->container['total'] = $total;

        return $this;
    }



    /**
     * Gets bank_transaction_id
     *
     * @return string|null
     */
    public function getBankTransactionId()
    {
        return $this->container['bank_transaction_id'];
    }

    /**
     * Sets bank_transaction_id
     *
     * @param string|null $bank_transaction_id Xero generated unique identifier for bank transaction
     *
     * @return $this
     */
    public function setBankTransactionId($bank_transaction_id)
    {

        $this->container['bank_transaction_id'] = $bank_transaction_id;

        return $this;
    }



    /**
     * Gets prepayment_id
     *
     * @return string|null
     */
    public function getPrepaymentId()
    {
        return $this->container['prepayment_id'];
    }

    /**
     * Sets prepayment_id
     *
     * @param string|null $prepayment_id Xero generated unique identifier for a Prepayment. This will be returned on BankTransactions with a Type of SPEND-PREPAYMENT or RECEIVE-PREPAYMENT
     *
     * @return $this
     */
    public function setPrepaymentId($prepayment_id)
    {

        $this->container['prepayment_id'] = $prepayment_id;

        return $this;
    }


    /**
     * Gets overpayment_id
     *
     * @return string|null
     */
    public function getOverpaymentId()
    {
        return $this->container['overpayment_id'];
    }

    /**
     * Sets overpayment_id
     *
     * @param string|null $overpayment_id Xero generated unique identifier for an Overpayment. This will be returned on BankTransactions with a Type of SPEND-OVERPAYMENT or RECEIVE-OVERPAYMENT
     *
     * @return $this
     */
    public function setOverpaymentId($overpayment_id)
    {

        $this->container['overpayment_id'] = $overpayment_id;

        return $this;
    }


    /**
     * Gets updated_date_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }

    /**
     * Sets updated_date_utc
     *
     * @param \DateTime|null $updated_date_utc Last modified date UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets has_attachments
     *
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->container['has_attachments'];
    }

    /**
     * Sets has_attachments
     *
     * @param bool|null $has_attachments Boolean to indicate if a bank transaction has an attachment
     *
     * @return $this
     */
    public function setHasAttachments($has_attachments)
    {

        $this->container['has_attachments'] = $has_attachments;

        return $this;
    }


    /**
     * Gets status_attribute_string
     *
     * @return string|null
     */
    public function getStatusAttributeString()
    {
        return $this->container['status_attribute_string'];
    }

    /**
     * Sets status_attribute_string
     *
     * @param string|null $status_attribute_string A string to indicate if a invoice status
     *
     * @return $this
     */
    public function setStatusAttributeString($status_attribute_string)
    {

        $this->container['status_attribute_string'] = $status_attribute_string;

        return $this;
    }



    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


