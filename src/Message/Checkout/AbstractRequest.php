<?php

/**
 * Stripe Abstract Request.
 */

namespace Nyehandel\Omnipay\Stripe\Message\Checkout;

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
}
