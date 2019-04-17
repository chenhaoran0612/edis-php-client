<?php
/**
 * SkuBatteryResponses
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
 * SkuBatteryResponses Class Doc Comment
 *
 * @category Class
 * @description 带电认证信息
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SkuBatteryResponses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SkuBatteryResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'elec_qua_id' => 'string',
        'elec_qua_name' => 'string',
        'remark' => 'string',
        'type' => 'int',
        'useful_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'elec_qua_id' => null,
        'elec_qua_name' => null,
        'remark' => null,
        'type' => 'int32',
        'useful_time' => null
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
        'elec_qua_id' => 'elecQuaId',
        'elec_qua_name' => 'elecQuaName',
        'remark' => 'remark',
        'type' => 'type',
        'useful_time' => 'usefulTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'elec_qua_id' => 'setElecQuaId',
        'elec_qua_name' => 'setElecQuaName',
        'remark' => 'setRemark',
        'type' => 'setType',
        'useful_time' => 'setUsefulTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'elec_qua_id' => 'getElecQuaId',
        'elec_qua_name' => 'getElecQuaName',
        'remark' => 'getRemark',
        'type' => 'getType',
        'useful_time' => 'getUsefulTime'
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

    const TYPE_0 = 0;
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    const TYPE_3 = 3;
    const TYPE_4 = 4;
    const TYPE_5 = 5;
    const TYPE_6 = 6;
    const TYPE_7 = 7;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_0,
            self::TYPE_1,
            self::TYPE_2,
            self::TYPE_3,
            self::TYPE_4,
            self::TYPE_5,
            self::TYPE_6,
            self::TYPE_7,
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
        $this->container['elec_qua_id'] = isset($data['elec_qua_id']) ? $data['elec_qua_id'] : null;
        $this->container['elec_qua_name'] = isset($data['elec_qua_name']) ? $data['elec_qua_name'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['useful_time'] = isset($data['useful_time']) ? $data['useful_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['elec_qua_id'] === null) {
            $invalidProperties[] = "'elec_qua_id' can't be null";
        }
        if ($this->container['elec_qua_name'] === null) {
            $invalidProperties[] = "'elec_qua_name' can't be null";
        }
        if ($this->container['remark'] === null) {
            $invalidProperties[] = "'remark' can't be null";
        }
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

        if ($this->container['useful_time'] === null) {
            $invalidProperties[] = "'useful_time' can't be null";
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
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type 带电类型，枚举类:LiBatteryTypeEnum
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
     * Gets useful_time
     *
     * @return string
     */
    public function getUsefulTime()
    {
        return $this->container['useful_time'];
    }

    /**
     * Sets useful_time
     *
     * @param string $useful_time 有效时间
     *
     * @return $this
     */
    public function setUsefulTime($useful_time)
    {
        $this->container['useful_time'] = $useful_time;

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


