<?php

/**
 * Stripe Payment Intents Update Request.
 */
namespace Nyehandel\Omnipay\Stripe\Message\PaymentIntents;

use Money\Formatter\DecimalMoneyFormatter;

/**
 * Stripe Payment Intents Update Request.
 *
 * Updates properties on a PaymentIntent object without confirming.
 *
 * @see \Nyehandel\Omnipay\Stripe\PaymentIntentsGateway
 * @see \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\CreatePaymentMethodRequest
 * @see \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\ConfirmPaymentIntentRequest
 * @link https://stripe.com/docs/api/payment_intents/update
 */
class UpdateRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getData()
    {
        $this->validate('paymentIntentReference');

        $data = [];

        if ($this->getAmountInteger()) {
            $data['amount'] = $this->getAmountInteger();
        }

        if ($this->getCurrency()) {
            $data['currency'] = strtolower($this->getCurrency());
        }

        $data['description'] = $this->getDescription();
        $data['metadata'] = $this->getMetadata();

        if ($this->getCustomerReference()) {
            $data['customer'] = $this->getCustomerReference();
        }

        return $data;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return $this->endpoint . '/payment_intents/' . $this->getPaymentIntentReference();
    }

    /**
     * @inheritdoc
     */
    protected function createResponse($data, $headers = [])
    {
        return $this->response = new Response($this, $data, $headers);
    }
}
