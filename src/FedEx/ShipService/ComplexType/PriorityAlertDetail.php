<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PriorityAlertDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PriorityAlertDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PriorityAlertDetail';

    /**
     * Set Content
     *
     * @param string[] $content
     * return PriorityAlertDetail
     */
    public function setContent(array $content)
    {
        $this->Content = $content;
        return $this;
    }
    

    
}