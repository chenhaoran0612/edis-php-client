<?php
/**
 * DropoffSiteInfoResponses
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
 * DropoffSiteInfoResponses Class Doc Comment
 *
 * @category Class
 * @description ç©æµæå¡åé¡µä¿¡æ¯
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DropoffSiteInfoResponses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DropoffSiteInfoResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'city' => 'string',
        'contact' => 'string',
        'country' => 'string',
        'district' => 'string',
        'dropoff_site_id' => 'string',
        'mobile' => 'string',
        'name' => 'string',
        'province' => 'string',
        'street1' => 'string',
        'street2' => 'string',
        'street3' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'city' => null,
        'contact' => null,
        'country' => null,
        'district' => null,
        'dropoff_site_id' => null,
        'mobile' => null,
        'name' => null,
        'province' => null,
        'street1' => null,
        'street2' => null,
        'street3' => null
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
        'contact' => 'contact',
        'country' => 'country',
        'district' => 'district',
        'dropoff_site_id' => 'dropoffSiteId',
        'mobile' => 'mobile',
        'name' => 'name',
        'province' => 'province',
        'street1' => 'street1',
        'street2' => 'street2',
        'street3' => 'street3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'contact' => 'setContact',
        'country' => 'setCountry',
        'district' => 'setDistrict',
        'dropoff_site_id' => 'setDropoffSiteId',
        'mobile' => 'setMobile',
        'name' => 'setName',
        'province' => 'setProvince',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'street3' => 'setStreet3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'contact' => 'getContact',
        'country' => 'getCountry',
        'district' => 'getDistrict',
        'dropoff_site_id' => 'getDropoffSiteId',
        'mobile' => 'getMobile',
        'name' => 'getName',
        'province' => 'getProvince',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'street3' => 'getStreet3'
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
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['dropoff_site_id'] = isset($data['dropoff_site_id']) ? $data['dropoff_site_id'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['street1'] = isset($data['street1']) ? $data['street1'] : null;
        $this->container['street2'] = isset($data['street2']) ? $data['street2'] : null;
        $this->container['street3'] = isset($data['street3']) ? $data['street3'] : null;
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
        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['district'] === null) {
            $invalidProperties[] = "'district' can't be null";
        }
        if ($this->container['dropoff_site_id'] === null) {
            $invalidProperties[] = "'dropoff_site_id' can't be null";
        }
        if ($this->container['mobile'] === null) {
            $invalidProperties[] = "'mobile' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['province'] === null) {
            $invalidProperties[] = "'province' can't be null";
        }
        if ($this->container['street1'] === null) {
            $invalidProperties[] = "'street1' can't be null";
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
        if ($this->container['contact'] === null) {
            return false;
        }
        if ($this->container['country'] === null) {
            return false;
        }
        if ($this->container['district'] === null) {
            return false;
        }
        if ($this->container['dropoff_site_id'] === null) {
            return false;
        }
        if ($this->container['mobile'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['province'] === null) {
            return false;
        }
        if ($this->container['street1'] === null) {
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
     * @param string $city å¸
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string $contact èç³»äºº
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

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
     * @param string $country å½å®¶
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * @param string $district åºå¿
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets dropoff_site_id
     *
     * @return string
     */
    public function getDropoffSiteId()
    {
        return $this->container['dropoff_site_id'];
    }

    /**
     * Sets dropoff_site_id
     *
     * @param string $dropoff_site_id ç«ç¹ID
     *
     * @return $this
     */
    public function setDropoffSiteId($dropoff_site_id)
    {
        $this->container['dropoff_site_id'] = $dropoff_site_id;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile èç³»çµè¯
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name ç«ç¹åç§°
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $province ç
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets street1
     *
     * @return string
     */
    public function getStreet1()
    {
        return $this->container['street1'];
    }

    /**
     * Sets street1
     *
     * @param string $street1 è¡éå°å1
     *
     * @return $this
     */
    public function setStreet1($street1)
    {
        $this->container['street1'] = $street1;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string $street2 è¡éå°å2
     *
     * @return $this
     */
    public function setStreet2($street2)
    {
        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Gets street3
     *
     * @return string
     */
    public function getStreet3()
    {
        return $this->container['street3'];
    }

    /**
     * Sets street3
     *
     * @param string $street3 è¡éå°å3
     *
     * @return $this
     */
    public function setStreet3($street3)
    {
        $this->container['street3'] = $street3;

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


