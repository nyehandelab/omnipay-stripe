<?php
/**
 * CreateSourceRequest
 */
namespace Nyehandel\Omnipay\Stripe\Message;

/**
 * Class CreateSourceRequest
 *
 * TODO : Add docblock
 */
class CompletePurchaseRequest extends PurchaseRequest
{
    public function getData()
    {
        $data = parent::getData();

        return $data;
    }
}
