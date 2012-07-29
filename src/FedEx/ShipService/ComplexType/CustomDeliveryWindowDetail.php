<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomDeliveryWindowDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomDeliveryWindowDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomDeliveryWindowDetail';

    /**
     * Indicates the type of custom delivery being requested.
     *
     * @param \FedEx\ShipService\SimpleType\CustomDeliveryWindowType  $type
     * return CustomDeliveryWindowDetail
     */
    public function setType(\FedEx\ShipService\SimpleType\CustomDeliveryWindowType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Time by which delivery is requested.
     *
     * @param time $requestTime
     * return CustomDeliveryWindowDetail
     */
    public function setRequestTime(time $requestTime)
    {
        $this->RequestTime = $requestTime;
        return $this;
    }
    
    /**
     * Range of dates for custom delivery request; only used if type is BETWEEN.
     *
     * @param DateRange $requestRange
     * return CustomDeliveryWindowDetail
     */
    public function setRequestRange(DateRange $requestRange)
    {
        $this->RequestRange = $requestRange;
        return $this;
    }
    
    /**
     * Date for custom delivery request; only used for types of ON, BETWEEN, or AFTER.
     *
     * @param date $requestDate
     * return CustomDeliveryWindowDetail
     */
    public function setRequestDate($requestDate)
    {
        $this->RequestDate = $requestDate;
        return $this;
    }
    

    
}