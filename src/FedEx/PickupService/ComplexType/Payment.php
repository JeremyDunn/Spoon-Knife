<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the monetary compensation given to FedEx for services rendered to the customer.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Payment
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Payment';

    /**
     * Identifies the method of payment for a service. See PaymentType for list of valid enumerated values.
     *
     * @param \FedEx\Pickup\SimpleType\PaymentType  $paymentType
     * return Payment
     */
    public function setPaymentType(\FedEx\Pickup\SimpleType\PaymentType $paymentType)
    {
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Descriptive data identifying the party responsible for payment for a service.
     *
     * @param Payor $payor
     * return Payment
     */
    public function setPayor(Payor $payor)
    {
        $this->Payor = $payor;
        return $this;
    }
    
    /**
     * Set CreditCard
     *
     * @param CreditCard $creditCard
     * return Payment
     */
    public function setCreditCard(CreditCard $creditCard)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    
    /**
     * Set CreditCardTransactionDetail
     *
     * @param CreditCardTransactionDetail $creditCardTransactionDetail
     * return Payment
     */
    public function setCreditCardTransactionDetail(CreditCardTransactionDetail $creditCardTransactionDetail)
    {
        $this->CreditCardTransactionDetail = $creditCardTransactionDetail;
        return $this;
    }
    
    /**
     * Descriptive data for the payor's cash payment.
     *
     * @param Money $amount
     * return Payment
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}