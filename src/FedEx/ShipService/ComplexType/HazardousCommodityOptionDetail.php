<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Customer-provided specifications for handling individual commodities.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityOptionDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HazardousCommodityOptionDetail';

    /**
     * Specifies how the customer wishes the label text to be handled for this commodity in this package.
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityLabelTextOptionType  $labelTextOption
     * return HazardousCommodityOptionDetail
     */
    public function setLabelTextOption(\FedEx\ShipService\SimpleType\HazardousCommodityLabelTextOptionType $labelTextOption)
    {
        $this->LabelTextOption = $labelTextOption;
        return $this;
    }
    
    /**
     * Text used in labeling the commodity under control of the labelTextOption field.
     *
     * @param string $customerSuppliedLabelText
     * return HazardousCommodityOptionDetail
     */
    public function setCustomerSuppliedLabelText($customerSuppliedLabelText)
    {
        $this->CustomerSuppliedLabelText = $customerSuppliedLabelText;
        return $this;
    }
    

    
}