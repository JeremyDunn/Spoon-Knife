<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The constraints on the scheduling of a dispatch, where that dispatch would be made by the Carrier, occur on the PickupDate,
						and would be scheduled (created by means of a CourierDispatchRequest) on a date related to the PickupDate as described
						by the "ScheduleDay" (SAME_DAY meaning that the creation would occur on the PickupDate, and FUTURE_DAY meaning that the creation
						would occur on a date prior to the PickupDate).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupScheduleOption
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupScheduleOption';

    /**
     * the carrier to which this PickupScheduleOption applies
     *
     * @param \FedEx\Pickup\SimpleType\CarrierCodeType  $carrier
     * return PickupScheduleOption
     */
    public function setCarrier(\FedEx\Pickup\SimpleType\CarrierCodeType $carrier)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    
    /**
     * Descriptive information about the shipment.
     *
     * @param string $description
     * return PickupScheduleOption
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Tells whether this option describes a dispatch created on the dispatch date (SAME_DAY), or on a prior date (FUTURE_DAY)
     *
     * @param \FedEx\Pickup\SimpleType\PickupRequestType  $scheduleDay
     * return PickupScheduleOption
     */
    public function setScheduleDay(\FedEx\Pickup\SimpleType\PickupRequestType $scheduleDay)
    {
        $this->ScheduleDay = $scheduleDay;
        return $this;
    }
    
    /**
     * True if this pickup option is available.
     *
     * @param boolean $available
     * return PickupScheduleOption
     */
    public function setAvailable($available)
    {
        $this->Available = $available;
        return $this;
    }
    
    /**
     * Identifies the date (in the postal code's time zone) to which this PickupScheduleOption refers.
     *
     * @param date $pickupDate
     * return PickupScheduleOption
     */
    public function setPickupDate($pickupDate)
    {
        $this->PickupDate = $pickupDate;
        return $this;
    }
    
    /**
     * Identifies the latest allowed ready time (in the postal code's time zone) for a postal code. As a local time, it will not include a Time Zone Designator
     *
     * @param time $cutOffTime
     * return PickupScheduleOption
     */
    public function setCutOffTime(time $cutOffTime)
    {
        $this->CutOffTime = $cutOffTime;
        return $this;
    }
    
    /**
     * Identifies the minimum required length of the window of time between the ReadyTime and the CustomerCloseTime.
     *
     * @param duration $accessTime
     * return PickupScheduleOption
     */
    public function setAccessTime(duration $accessTime)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    
    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * @param boolean $residentialAvailable
     * return PickupScheduleOption
     */
    public function setResidentialAvailable($residentialAvailable)
    {
        $this->ResidentialAvailable = $residentialAvailable;
        return $this;
    }
    
    /**
     * Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @param \FedEx\Pickup\SimpleType\CountryRelationshipType  $countryRelationship
     * return PickupScheduleOption
     */
    public function setCountryRelationship(\FedEx\Pickup\SimpleType\CountryRelationshipType $countryRelationship)
    {
        $this->CountryRelationship = $countryRelationship;
        return $this;
    }
    

    
}