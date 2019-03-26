<?php
/**
 * GetTrackingDetailResponsesData
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
 * GetTrackingDetailResponsesData Class Doc Comment
 *
 * @category Class
 * @description ç©æµè·è¸ª
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetTrackingDetailResponsesData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetTrackingDetailResponsesData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'city' => 'string',
        'country' => 'string',
        'description_en' => 'string',
        'description_zh' => 'string',
        'district' => 'string',
        'event_postal_code' => 'string',
        'event_time' => '\DateTime',
        'province' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'city' => null,
        'country' => null,
        'description_en' => null,
        'description_zh' => null,
        'district' => null,
        'event_postal_code' => null,
        'event_time' => 'date-time',
        'province' => null,
        'status' => null
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
        'city' => 'city',
        'country' => 'country',
        'description_en' => 'descriptionEn',
        'description_zh' => 'descriptionZh',
        'district' => 'district',
        'event_postal_code' => 'eventPostalCode',
        'event_time' => 'eventTime',
        'province' => 'province',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country' => 'setCountry',
        'description_en' => 'setDescriptionEn',
        'description_zh' => 'setDescriptionZh',
        'district' => 'setDistrict',
        'event_postal_code' => 'setEventPostalCode',
        'event_time' => 'setEventTime',
        'province' => 'setProvince',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country' => 'getCountry',
        'description_en' => 'getDescriptionEn',
        'description_zh' => 'getDescriptionZh',
        'district' => 'getDistrict',
        'event_postal_code' => 'getEventPostalCode',
        'event_time' => 'getEventTime',
        'province' => 'getProvince',
        'status' => 'getStatus'
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
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['description_en'] = isset($data['description_en']) ? $data['description_en'] : null;
        $this->container['description_zh'] = isset($data['description_zh']) ? $data['description_zh'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['event_postal_code'] = isset($data['event_postal_code']) ? $data['event_postal_code'] : null;
        $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['description_en'] === null) {
            $invalidProperties[] = "'description_en' can't be null";
        }
        if ($this->container['description_zh'] === null) {
            $invalidProperties[] = "'description_zh' can't be null";
        }
        if ($this->container['district'] === null) {
            $invalidProperties[] = "'district' can't be null";
        }
        if ($this->container['event_time'] === null) {
            $invalidProperties[] = "'event_time' can't be null";
        }
        if ($this->container['province'] === null) {
            $invalidProperties[] = "'province' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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

        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['country'] === null) {
            return false;
        }
        if ($this->container['description_en'] === null) {
            return false;
        }
        if ($this->container['description_zh'] === null) {
            return false;
        }
        if ($this->container['district'] === null) {
            return false;
        }
        if ($this->container['event_time'] === null) {
            return false;
        }
        if ($this->container['province'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city åè£¹æå¨å¸
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country åè£¹æå¨å½å®¶
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets description_en
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->container['description_en'];
    }

    /**
     * Sets description_en
     *
     * @param string $description_en è±ææè¿°
     *
     * @return $this
     */
    public function setDescriptionEn($description_en)
    {
        $this->container['description_en'] = $description_en;

        return $this;
    }

    /**
     * Gets description_zh
     *
     * @return string
     */
    public function getDescriptionZh()
    {
        return $this->container['description_zh'];
    }

    /**
     * Sets description_zh
     *
     * @param string $description_zh ä¸­ææè¿°
     *
     * @return $this
     */
    public function setDescriptionZh($description_zh)
    {
        $this->container['description_zh'] = $description_zh;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district åè£¹æå¨åºå¿
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets event_postal_code
     *
     * @return string
     */
    public function getEventPostalCode()
    {
        return $this->container['event_postal_code'];
    }

    /**
     * Sets event_postal_code
     *
     * @param string $event_postal_code åè£¹æå¨å°é®ç¼
     *
     * @return $this
     */
    public function setEventPostalCode($event_postal_code)
    {
        $this->container['event_postal_code'] = $event_postal_code;

        return $this;
    }

    /**
     * Gets event_time
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param \DateTime $event_time æ¶é´
     *
     * @return $this
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string $province åè£¹æå¨ç/å·
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status ç©æµè·è¸ªç¶æ
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


