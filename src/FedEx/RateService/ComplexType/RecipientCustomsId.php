<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RecipientCustomsId
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RecipientCustomsId';

    /**
     * Specifies the kind of identification being used.
     *
     * @param \FedEx\RateService\SimpleType\RecipientCustomsIdType  $type
     * return RecipientCustomsId
     */
    public function setType(\FedEx\RateService\SimpleType\RecipientCustomsIdType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Contains the actual ID value, of the type specified above.
     *
     * @param string $value
     * return RecipientCustomsId
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}