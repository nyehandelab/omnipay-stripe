<?php

/**
 * Stripe Payment Intents Gateway.
 */

namespace Nyehandel\Omnipay\Stripe;

/**
 * Stripe Payment Intents Gateway.
 *
 * @see \Nyehandel\Omnipay\Stripe\AbstractGateway
 * @see \Nyehandel\Omnipay\Stripe\Message\AbstractRequest
 *
 * @link https://stripe.com/docs/api
 *
 */
class PaymentIntentsGateway extends AbstractGateway
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Stripe Payment Intents';
    }

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\AuthorizeRequest
     */
    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\AuthorizeRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * In reality, we're confirming the payment intent.
     * This method exists as an alias to in line with how Omnipay interfaces define things.
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\ConfirmPaymentIntentRequest
     */
    public function completeAuthorize(array $options = [])
    {
        return $this->confirm($options);
    }

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\UpdateRequest
     */
    public function update(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\UpdateRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\CaptureRequest
     */
    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\CaptureRequest', $parameters);
    }

    /**
     * Confirm a Payment Intent. Use this to confirm a payment intent created by a Purchase or Authorize request.
     *
     * @param array $parameters
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\ConfirmPaymentIntentRequest
     */
    public function confirm(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\ConfirmPaymentIntentRequest', $parameters);
    }

    /**
     * Cancel a Payment Intent.
     *
     * @param array $parameters
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\CancelPaymentIntentRequest
     */
    public function cancel(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\CancelPaymentIntentRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\PurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\PurchaseRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * In reality, we're confirming the payment intent.
     * This method exists as an alias to in line with how Omnipay interfaces define things.
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\ConfirmPaymentIntentRequest
     */
    public function completePurchase(array $options = [])
    {
        return $this->confirm($options);
    }

    /**
     * Fetch a payment intent. Use this to check the status of it.
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\FetchPaymentIntentRequest
     */
    public function fetchPaymentIntent(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\FetchPaymentIntentRequest', $parameters);
    }

    //
    // Cards
    // @link https://stripe.com/docs/api/payment_methods
    //

    /**
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\FetchPaymentMethodRequest
     */
    public function fetchCard(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\FetchPaymentMethodRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\CreatePaymentMethodRequest
     */
    public function createCard(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\CreatePaymentMethodRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\CreatePaymentMethodRequest
     */
    public function attachCard(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\AttachPaymentMethodRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\UpdatePaymentMethodRequest
     */
    public function updateCard(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\UpdatePaymentMethodRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\PaymentIntents\DetachPaymentMethodRequest
     */
    public function deleteCard(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\PaymentIntents\DetachPaymentMethodRequest', $parameters);
    }

    // Setup Intent

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\SetupIntents\CreateSetupIntentRequest
     */
    public function createSetupIntent(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\SetupIntents\CreateSetupIntentRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Nyehandel\Omnipay\Stripe\Message\SetupIntents\CreateSetupIntentRequest
     */
    public function retrieveSetupIntent(array $parameters = array())
    {
        return $this->createRequest('\Nyehandel\Omnipay\Stripe\Message\SetupIntents\RetrieveSetupIntentRequest', $parameters);
    }
}
