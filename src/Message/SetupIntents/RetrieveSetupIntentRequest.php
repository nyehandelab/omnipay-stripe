<?php

/**
 * Stripe Create Payment Method Request.
 */

namespace Nyehandel\Omnipay\Stripe\Message\SetupIntents;

/**
 * Stripe create setup intent
 *
 * ### Example
 *
 * <code>
 *
 * </code>
 *
 * @see \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\AttachPaymentMethodRequest
 * @see \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\DetachPaymentMethodRequest
 * @see \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\UpdatePaymentMethodRequest
 * @link https://stripe.com/docs/api/setup_intents/create
 */
class RetrieveSetupIntentRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getData()
    {
        $this->validate('setupIntentReference');

        return [];
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return $this->endpoint . '/setup_intents/' . $this->getSetupIntentReference();
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

    /**
     * @inheritdoc
     */
    protected function createResponse($data, $headers = [])
    {
        return $this->response = new Response($this, $data, $headers);
    }
}
