<?php
/**
 * PackageInfoRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eBay国际物流平台商户接口
 *
 * eBay国际物流平台商户接口
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PackageInfoRequest Class Doc Comment
 *
 * @category Class
 * @description 包裹信息
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackageInfoRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consign_preference_id' => 'string',
        'incoterms' => 'int',
        'item_list' => '\Swagger\Client\Model\ItemRequest[]',
        'package_comment' => 'string',
        'package_height' => 'float',
        'package_length' => 'float',
        'package_weight' => 'float',
        'package_width' => 'float',
        'service_id' => 'string',
        'ship_from_address_id' => 'string',
        'ship_to_address' => '\Swagger\Client\Model\ShipToAddressRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consign_preference_id' => null,
        'incoterms' => 'int32',
        'item_list' => null,
        'package_comment' => null,
        'package_height' => null,
        'package_length' => null,
        'package_weight' => null,
        'package_width' => null,
        'service_id' => null,
        'ship_from_address_id' => null,
        'ship_to_address' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'consign_preference_id' => 'consignPreferenceId',
        'incoterms' => 'incoterms',
        'item_list' => 'itemList',
        'package_comment' => 'packageComment',
        'package_height' => 'packageHeight',
        'package_length' => 'packageLength',
        'package_weight' => 'packageWeight',
        'package_width' => 'packageWidth',
        'service_id' => 'serviceId',
        'ship_from_address_id' => 'shipFromAddressId',
        'ship_to_address' => 'shipToAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consign_preference_id' => 'setConsignPreferenceId',
        'incoterms' => 'setIncoterms',
        'item_list' => 'setItemList',
        'package_comment' => 'setPackageComment',
        'package_height' => 'setPackageHeight',
        'package_length' => 'setPackageLength',
        'package_weight' => 'setPackageWeight',
        'package_width' => 'setPackageWidth',
        'service_id' => 'setServiceId',
        'ship_from_address_id' => 'setShipFromAddressId',
        'ship_to_address' => 'setShipToAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consign_preference_id' => 'getConsignPreferenceId',
        'incoterms' => 'getIncoterms',
        'item_list' => 'getItemList',
        'package_comment' => 'getPackageComment',
        'package_height' => 'getPackageHeight',
        'package_length' => 'getPackageLength',
        'package_weight' => 'getPackageWeight',
        'package_width' => 'getPackageWidth',
        'service_id' => 'getServiceId',
        'ship_from_address_id' => 'getShipFromAddressId',
        'ship_to_address' => 'getShipToAddress'
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
        return self::$swaggerModelName;
    }

    const DDP = 0;
    const DDU = 1;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncotermsAllowableValues()
    {
        return [
            self::DDP,
            self::DDU,
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
        $this->container['consign_preference_id'] = isset($data['consign_preference_id']) ? $data['consign_preference_id'] : null;
        $this->container['incoterms'] = isset($data['incoterms']) ? $data['incoterms'] : null;
        $this->container['item_list'] = isset($data['item_list']) ? $data['item_list'] : null;
        $this->container['package_comment'] = isset($data['package_comment']) ? $data['package_comment'] : null;
        $this->container['package_height'] = isset($data['package_height']) ? $data['package_height'] : null;
        $this->container['package_length'] = isset($data['package_length']) ? $data['package_length'] : null;
        $this->container['package_weight'] = isset($data['package_weight']) ? $data['package_weight'] : null;
        $this->container['package_width'] = isset($data['package_width']) ? $data['package_width'] : null;
        $this->container['service_id'] = isset($data['service_id']) ? $data['service_id'] : null;
        $this->container['ship_from_address_id'] = isset($data['ship_from_address_id']) ? $data['ship_from_address_id'] : null;
        $this->container['ship_to_address'] = isset($data['ship_to_address']) ? $data['ship_to_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['consign_preference_id'] === null) {
            $invalidProperties[] = "'consign_preference_id' can't be null";
        }
        $allowedValues = $this->getIncotermsAllowableValues();
        if (!in_array($this->container['incoterms'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'incoterms', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['package_height'] === null) {
            $invalidProperties[] = "'package_height' can't be null";
        }
        if ($this->container['package_length'] === null) {
            $invalidProperties[] = "'package_length' can't be null";
        }
        if ($this->container['package_weight'] === null) {
            $invalidProperties[] = "'package_weight' can't be null";
        }
        if ($this->container['package_width'] === null) {
            $invalidProperties[] = "'package_width' can't be null";
        }
        if ($this->container['service_id'] === null) {
            $invalidProperties[] = "'service_id' can't be null";
        }
        if ($this->container['ship_from_address_id'] === null) {
            $invalidProperties[] = "'ship_from_address_id' can't be null";
        }
        if ($this->container['ship_to_address'] === null) {
            $invalidProperties[] = "'ship_to_address' can't be null";
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

        if ($this->container['consign_preference_id'] === null) {
            return false;
        }
        $allowedValues = $this->getIncotermsAllowableValues();
        if (!in_array($this->container['incoterms'], $allowedValues)) {
            return false;
        }
        if ($this->container['package_height'] === null) {
            return false;
        }
        if ($this->container['package_length'] === null) {
            return false;
        }
        if ($this->container['package_weight'] === null) {
            return false;
        }
        if ($this->container['package_width'] === null) {
            return false;
        }
        if ($this->container['service_id'] === null) {
            return false;
        }
        if ($this->container['ship_from_address_id'] === null) {
            return false;
        }
        if ($this->container['ship_to_address'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets consign_preference_id
     *
     * @return string
     */
    public function getConsignPreferenceId()
    {
        return $this->container['consign_preference_id'];
    }

    /**
     * Sets consign_preference_id
     *
     * @param string $consign_preference_id 交运偏好ID
     *
     * @return $this
     */
    public function setConsignPreferenceId($consign_preference_id)
    {
        $this->container['consign_preference_id'] = $consign_preference_id;

        return $this;
    }

    /**
     * Gets incoterms
     *
     * @return int
     */
    public function getIncoterms()
    {
        return $this->container['incoterms'];
    }

    /**
     * Sets incoterms
     *
     * @param int $incoterms 国贸条规，枚举类型，可用值:DDP - 卖家承担关税；DDU - 买家承担关税，为空时默认值为DDU
     *
     * @return $this
     */
    public function setIncoterms($incoterms)
    {
        $allowedValues = $this->getIncotermsAllowableValues();
        if (!is_null($incoterms) && !in_array($incoterms, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'incoterms', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['incoterms'] = $incoterms;

        return $this;
    }

    /**
     * Gets item_list
     *
     * @return \Swagger\Client\Model\ItemRequest[]
     */
    public function getItemList()
    {
        return $this->container['item_list'];
    }

    /**
     * Sets item_list
     *
     * @param \Swagger\Client\Model\ItemRequest[] $item_list item_list
     *
     * @return $this
     */
    public function setItemList($item_list)
    {
        $this->container['item_list'] = $item_list;

        return $this;
    }

    /**
     * Gets package_comment
     *
     * @return string
     */
    public function getPackageComment()
    {
        return $this->container['package_comment'];
    }

    /**
     * Sets package_comment
     *
     * @param string $package_comment 包裹备注信息
     *
     * @return $this
     */
    public function setPackageComment($package_comment)
    {
        $this->container['package_comment'] = $package_comment;

        return $this;
    }

    /**
     * Gets package_height
     *
     * @return float
     */
    public function getPackageHeight()
    {
        return $this->container['package_height'];
    }

    /**
     * Sets package_height
     *
     * @param float $package_height 包裹高度（cm）
     *
     * @return $this
     */
    public function setPackageHeight($package_height)
    {
        $this->container['package_height'] = $package_height;

        return $this;
    }

    /**
     * Gets package_length
     *
     * @return float
     */
    public function getPackageLength()
    {
        return $this->container['package_length'];
    }

    /**
     * Sets package_length
     *
     * @param float $package_length 包裹长度（cm）
     *
     * @return $this
     */
    public function setPackageLength($package_length)
    {
        $this->container['package_length'] = $package_length;

        return $this;
    }

    /**
     * Gets package_weight
     *
     * @return float
     */
    public function getPackageWeight()
    {
        return $this->container['package_weight'];
    }

    /**
     * Sets package_weight
     *
     * @param float $package_weight 包裹重量（g）
     *
     * @return $this
     */
    public function setPackageWeight($package_weight)
    {
        $this->container['package_weight'] = $package_weight;

        return $this;
    }

    /**
     * Gets package_width
     *
     * @return float
     */
    public function getPackageWidth()
    {
        return $this->container['package_width'];
    }

    /**
     * Sets package_width
     *
     * @param float $package_width 包裹宽度（cm）
     *
     * @return $this
     */
    public function setPackageWidth($package_width)
    {
        $this->container['package_width'] = $package_width;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string $service_id 物流服务ID
     *
     * @return $this
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets ship_from_address_id
     *
     * @return string
     */
    public function getShipFromAddressId()
    {
        return $this->container['ship_from_address_id'];
    }

    /**
     * Sets ship_from_address_id
     *
     * @param string $ship_from_address_id 发货地址ID
     *
     * @return $this
     */
    public function setShipFromAddressId($ship_from_address_id)
    {
        $this->container['ship_from_address_id'] = $ship_from_address_id;

        return $this;
    }

    /**
     * Gets ship_to_address
     *
     * @return \Swagger\Client\Model\ShipToAddressRequest
     */
    public function getShipToAddress()
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address
     *
     * @param \Swagger\Client\Model\ShipToAddressRequest $ship_to_address 收货地址
     *
     * @return $this
     */
    public function setShipToAddress($ship_to_address)
    {
        $this->container['ship_to_address'] = $ship_to_address;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


