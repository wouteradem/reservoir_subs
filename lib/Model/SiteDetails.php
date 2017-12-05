<?php
/**
 * SiteDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ACSF API
 *
 * This is Acquia Site Factory API described in Swagger format.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * SiteDetails Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SiteDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SiteDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created' => 'int',
        'owner' => 'string',
        'stack_id' => 'int',
        'groups' => 'int[]',
        'site' => 'string',
        'domain' => 'string',
        'domains' => 'string[]',
        'part_of_collection' => 'bool',
        'collection_id' => 'int',
        'collection_domains' => 'string[]',
        'is_primary' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'created' => 'int64',
        'owner' => null,
        'stack_id' => 'int64',
        'groups' => null,
        'site' => null,
        'domain' => null,
        'domains' => null,
        'part_of_collection' => null,
        'collection_id' => 'int64',
        'collection_domains' => null,
        'is_primary' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created' => 'created',
        'owner' => 'owner',
        'stack_id' => 'stack_id',
        'groups' => 'groups',
        'site' => 'site',
        'domain' => 'domain',
        'domains' => 'domains',
        'part_of_collection' => 'part_of_collection',
        'collection_id' => 'collection_id',
        'collection_domains' => 'collection_domains',
        'is_primary' => 'is_primary'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'owner' => 'setOwner',
        'stack_id' => 'setStackId',
        'groups' => 'setGroups',
        'site' => 'setSite',
        'domain' => 'setDomain',
        'domains' => 'setDomains',
        'part_of_collection' => 'setPartOfCollection',
        'collection_id' => 'setCollectionId',
        'collection_domains' => 'setCollectionDomains',
        'is_primary' => 'setIsPrimary'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'owner' => 'getOwner',
        'stack_id' => 'getStackId',
        'groups' => 'getGroups',
        'site' => 'getSite',
        'domain' => 'getDomain',
        'domains' => 'getDomains',
        'part_of_collection' => 'getPartOfCollection',
        'collection_id' => 'getCollectionId',
        'collection_domains' => 'getCollectionDomains',
        'is_primary' => 'getIsPrimary'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['stack_id'] = isset($data['stack_id']) ? $data['stack_id'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['part_of_collection'] = isset($data['part_of_collection']) ? $data['part_of_collection'] : null;
        $this->container['collection_id'] = isset($data['collection_id']) ? $data['collection_id'] : null;
        $this->container['collection_domains'] = isset($data['collection_domains']) ? $data['collection_domains'] : null;
        $this->container['is_primary'] = isset($data['is_primary']) ? $data['is_primary'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['site'] === null) {
            $invalid_properties[] = "'site' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['site'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param int $created In UNIX timestamp format.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param string $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets stack_id
     * @return int
     */
    public function getStackId()
    {
        return $this->container['stack_id'];
    }

    /**
     * Sets stack_id
     * @param int $stack_id
     * @return $this
     */
    public function setStackId($stack_id)
    {
        $this->container['stack_id'] = $stack_id;

        return $this;
    }

    /**
     * Gets groups
     * @return int[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     * @param int[] $groups
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets site
     * @return string
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     * @param string $site
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets domains
     * @return string[]
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     * @param string[] $domains
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets part_of_collection
     * @return bool
     */
    public function getPartOfCollection()
    {
        return $this->container['part_of_collection'];
    }

    /**
     * Sets part_of_collection
     * @param bool $part_of_collection
     * @return $this
     */
    public function setPartOfCollection($part_of_collection)
    {
        $this->container['part_of_collection'] = $part_of_collection;

        return $this;
    }

    /**
     * Gets collection_id
     * @return int
     */
    public function getCollectionId()
    {
        return $this->container['collection_id'];
    }

    /**
     * Sets collection_id
     * @param int $collection_id
     * @return $this
     */
    public function setCollectionId($collection_id)
    {
        $this->container['collection_id'] = $collection_id;

        return $this;
    }

    /**
     * Gets collection_domains
     * @return string[]
     */
    public function getCollectionDomains()
    {
        return $this->container['collection_domains'];
    }

    /**
     * Sets collection_domains
     * @param string[] $collection_domains
     * @return $this
     */
    public function setCollectionDomains($collection_domains)
    {
        $this->container['collection_domains'] = $collection_domains;

        return $this;
    }

    /**
     * Gets is_primary
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->container['is_primary'];
    }

    /**
     * Sets is_primary
     * @param bool $is_primary
     * @return $this
     */
    public function setIsPrimary($is_primary)
    {
        $this->container['is_primary'] = $is_primary;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

