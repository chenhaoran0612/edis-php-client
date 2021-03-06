<?php
/**
 * BatteryQualResponses
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
 * Swagger Codegen version: 2.4.4
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
 * BatteryQualResponses Class Doc Comment
 *
 * @category Class
 * @description 带电认证信息
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatteryQualResponses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BatteryQualResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'battery_type' => 'int',
        'elec_qua_id' => 'string',
        'elec_qua_name' => 'string',
        'expire_date' => 'string',
        'remark' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'battery_type' => 'int32',
        'elec_qua_id' => null,
        'elec_qua_name' => null,
        'expire_date' => null,
        'remark' => null
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
        'battery_type' => 'batteryType',
        'elec_qua_id' => 'elecQuaId',
        'elec_qua_name' => 'elecQuaName',
        'expire_date' => 'expireDate',
        'remark' => 'remark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'battery_type' => 'setBatteryType',
        'elec_qua_id' => 'setElecQuaId',
        'elec_qua_name' => 'setElecQuaName',
        'expire_date' => 'setExpireDate',
        'remark' => 'setRemark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'battery_type' => 'getBatteryType',
        'elec_qua_id' => 'getElecQuaId',
        'elec_qua_name' => 'getElecQuaName',
        'expire_date' => 'getExpireDate',
        'remark' => 'getRemark'
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

    const BATTERY_TYPE_0 = 0;
    const BATTERY_TYPE_1 = 1;
    const BATTERY_TYPE_2 = 2;
    const BATTERY_TYPE_3 = 3;
    const BATTERY_TYPE_4 = 4;
    const BATTERY_TYPE_5 = 5;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBatteryTypeAllowableValues()
    {
        return [
            self::BATTERY_TYPE_0,
            self::BATTERY_TYPE_1,
            self::BATTERY_TYPE_2,
            self::BATTERY_TYPE_3,
            self::BATTERY_TYPE_4,
            self::BATTERY_TYPE_5,
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
        $this->container['battery_type'] = isset($data['battery_type']) ? $data['battery_type'] : null;
        $this->container['elec_qua_id'] = isset($data['elec_qua_id']) ? $data['elec_qua_id'] : null;
        $this->container['elec_qua_name'] = isset($data['elec_qua_name']) ? $data['elec_qua_name'] : null;
        $this->container['expire_date'] = isset($data['expire_date']) ? $data['expire_date'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['battery_type'] === null) {
            $invalidProperties[] = "'battery_type' can't be null";
        }
        $allowedValues = $this->getBatteryTypeAllowableValues();
        if (!is_null($this->container['battery_type']) && !in_array($this->container['battery_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'battery_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['elec_qua_id'] === null) {
            $invalidProperties[] = "'elec_qua_id' can't be null";
        }
        if ($this->container['elec_qua_name'] === null) {
            $invalidProperties[] = "'elec_qua_name' can't be null";
        }
        if ($this->container['expire_date'] === null) {
            $invalidProperties[] = "'expire_date' can't be null";
        }
        if ($this->container['remark'] === null) {
            $invalidProperties[] = "'remark' can't be null";
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
     * Gets battery_type
     *
     * @return int
     */
    public function getBatteryType()
    {
        return $this->container['battery_type'];
    }

    /**
     * Sets battery_type
     *
     * @param int $battery_type 带电类型，枚举类:LiBatteryTypeEnum
     *
     * @return $this
     */
    public function setBatteryType($battery_type)
    {
        $allowedValues = $this->getBatteryTypeAllowableValues();
        if (!in_array($battery_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'battery_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['battery_type'] = $battery_type;

        return $this;
    }

    /**
     * Gets elec_qua_id
     *
     * @return string
     */
    public function getElecQuaId()
    {
        return $this->container['elec_qua_id'];
    }

    /**
     * Sets elec_qua_id
     *
     * @param string $elec_qua_id 证书ID
     *
     * @return $this
     */
    public function setElecQuaId($elec_qua_id)
    {
        $this->container['elec_qua_id'] = $elec_qua_id;

        return $this;
    }

    /**
     * Gets elec_qua_name
     *
     * @return string
     */
    public function getElecQuaName()
    {
        return $this->container['elec_qua_name'];
    }

    /**
     * Sets elec_qua_name
     *
     * @param string $elec_qua_name 证书名称
     *
     * @return $this
     */
    public function setElecQuaName($elec_qua_name)
    {
        $this->container['elec_qua_name'] = $elec_qua_name;

        return $this;
    }

    /**
     * Gets expire_date
     *
     * @return string
     */
    public function getExpireDate()
    {
        return $this->container['expire_date'];
    }

    /**
     * Sets expire_date
     *
     * @param string $expire_date 有效时间
     *
     * @return $this
     */
    public function setExpireDate($expire_date)
    {
        $this->container['expire_date'] = $expire_date;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark 备注
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

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


