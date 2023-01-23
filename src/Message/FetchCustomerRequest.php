<?php

/**
 * Stripe Delete Customer Request.
 */
namespace Nyehandel\Omnipay\Stripe\Message;

/**
 * Stripe Fetch Customer Request.
 *
 *
 * @link https://stripe.com/docs/api#retrieve_customer
 */
class FetchCustomerRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('customerReference');
        return;
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/customers/' . $this->getCustomerReference();
    }
}
