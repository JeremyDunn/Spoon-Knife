<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes the kind of pending shipment being requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PendingShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentDetail';

    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\PendingShipmentType  $type
     * return PendingShipmentDetail
     */
    public function setType(\FedEx\RateService\SimpleType\PendingShipmentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Date after which the pending shipment will no longer be available for completion.
     *
     * @param date $expirationDate
     * return PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Only used with type of EMAIL.
     *
     * @param EMailLabelDetail $emailLabelDetail
     * return PendingShipmentDetail
     */
    public function setEmailLabelDetail(EMailLabelDetail $emailLabelDetail)
    {
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    

    
}