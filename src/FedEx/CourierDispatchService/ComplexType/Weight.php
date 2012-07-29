<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class Weight
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Weight';

    /**
     * Identifies the unit of measure associated with a weight value. See WeightUnits for the valid values.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\WeightUnits  $units
     * return Weight
     */
    public function setUnits(\FedEx\CourierDispatchService\SimpleType\WeightUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Identifies the weight value of the package.
     *
     * @param decimal $value
     * return Weight
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}