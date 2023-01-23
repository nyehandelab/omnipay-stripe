<?php

/**
 * Stripe Abstract Request.
 */

namespace Nyehandel\Omnipay\Stripe\Message\SetupIntents;

/**
 * Stripe Payment Intent Abstract Request.
 *
 * This is the parent class for all Stripe payment intent requests.
 * It adds just a getter and setter.
 *
 * @see \Nyehandel\Omnipay\Stripe\PaymentIntentsGateway
 * @see \Nyehandel\Omnipay\Stripe\Message\AbstractRequest
 * @link https://stripe.com/docs/api/payment_intents
 */
abstract class AbstractRequest extends \Nyehandel\Omnipay\Stripe\Message\AbstractRequest
{
    /**
     * @param string $value
     *
     * @return AbstractRequest provides a fluent interface.
     */
    public function setSetupIntentReference($value)
    {
        return $this->setParameter('setupIntentReference', $value);
    }

    /**
     * @return mixed
     */
    public function getSetupIntentReference()
    {
        return $this->getParameter('setupIntentReference');
    }
}
