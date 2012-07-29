<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentReferenceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class UploadDocumentReferenceDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadDocumentReferenceDetail';

    /**
     * Set LineNumber
     *
     * @param nonNegativeInteger $lineNumber
     * return UploadDocumentReferenceDetail
     */
    public function setLineNumber($lineNumber)
    {
        $this->LineNumber = $lineNumber;
        return $this;
    }
    
    /**
     * Set CustomerReference
     *
     * @param string $customerReference
     * return UploadDocumentReferenceDetail
     */
    public function setCustomerReference($customerReference)
    {
        $this->CustomerReference = $customerReference;
        return $this;
    }
    
    /**
     * Set DocumentProducer
     *
     * @param \FedEx\Pickup\SimpleType\UploadDocumentProducerType  $documentProducer
     * return UploadDocumentReferenceDetail
     */
    public function setDocumentProducer(\FedEx\Pickup\SimpleType\UploadDocumentProducerType $documentProducer)
    {
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    
    /**
     * Set DocumentType
     *
     * @param \FedEx\Pickup\SimpleType\UploadDocumentType  $documentType
     * return UploadDocumentReferenceDetail
     */
    public function setDocumentType(\FedEx\Pickup\SimpleType\UploadDocumentType $documentType)
    {
        $this->DocumentType = $documentType;
        return $this;
    }
    
    /**
     * Set DocumentId
     *
     * @param string $documentId
     * return UploadDocumentReferenceDetail
     */
    public function setDocumentId($documentId)
    {
        $this->DocumentId = $documentId;
        return $this;
    }
    
    /**
     * Set DocumentIdProducer
     *
     * @param \FedEx\Pickup\SimpleType\UploadDocumentIdProducer  $documentIdProducer
     * return UploadDocumentReferenceDetail
     */
    public function setDocumentIdProducer(\FedEx\Pickup\SimpleType\UploadDocumentIdProducer $documentIdProducer)
    {
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    

    
}