<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * Order Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Order implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'pet_id' => 'int',
        'quantity' => 'int',
        'ship_date' => '\DateTime',
        'status' => 'string',
        'complete' => 'bool'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'pet_id' => 'petId',
        'quantity' => 'quantity',
        'ship_date' => 'shipDate',
        'status' => 'status',
        'complete' => 'complete'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'pet_id' => 'setPetId',
        'quantity' => 'setQuantity',
        'ship_date' => 'setShipDate',
        'status' => 'setStatus',
        'complete' => 'setComplete'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'pet_id' => 'getPetId',
        'quantity' => 'getQuantity',
        'ship_date' => 'getShipDate',
        'status' => 'getStatus',
        'complete' => 'getComplete'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $id 
      * @var int
      */
    protected $id;
    /**
      * $pet_id 
      * @var int
      */
    protected $pet_id;
    /**
      * $quantity 
      * @var int
      */
    protected $quantity;
    /**
      * $ship_date 
      * @var \DateTime
      */
    protected $ship_date;
    /**
      * $status Order Status
      * @var string
      */
    protected $status;
    /**
      * $complete 
      * @var bool
      */
    protected $complete = false;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->pet_id = $data["pet_id"];
            $this->quantity = $data["quantity"];
            $this->ship_date = $data["ship_date"];
            $this->status = $data["status"];
            $this->complete = $data["complete"];
        }
    }
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    /**
     * Gets pet_id
     * @return int
     */
    public function getPetId()
    {
        return $this->pet_id;
    }
  
    /**
     * Sets pet_id
     * @param int $pet_id 
     * @return $this
     */
    public function setPetId($pet_id)
    {
        
        $this->pet_id = $pet_id;
        return $this;
    }
    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
  
    /**
     * Sets quantity
     * @param int $quantity 
     * @return $this
     */
    public function setQuantity($quantity)
    {
        
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Gets ship_date
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->ship_date;
    }
  
    /**
     * Sets ship_date
     * @param \DateTime $ship_date 
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        
        $this->ship_date = $ship_date;
        return $this;
    }
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Order Status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("placed", "approved", "delivered");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'placed', 'approved', 'delivered'");
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Gets complete
     * @return bool
     */
    public function getComplete()
    {
        return $this->complete;
    }
  
    /**
     * Sets complete
     * @param bool $complete 
     * @return $this
     */
    public function setComplete($complete)
    {
        
        $this->complete = $complete;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
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
