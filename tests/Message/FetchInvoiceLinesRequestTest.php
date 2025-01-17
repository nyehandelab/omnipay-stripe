<?php

namespace Nyehandel\Omnipay\Stripe\Message;

use Omnipay\Tests\TestCase;

class FetchInvoiceLinesRequestTest extends TestCase
{
    public function setUp()
    {
        $this->request = new FetchInvoiceLinesRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->setInvoiceReference('in_17ZPbRCryC4r2g4vIdAFxptK');
    }

    public function testEndpoint()
    {
        $this->assertSame('https://api.stripe.com/v1/invoices/in_17ZPbRCryC4r2g4vIdAFxptK/lines', $this->request->getEndpoint());
    }

    public function testSendSuccess()
    {
        $this->setMockHttpResponse('FetchInvoiceLinesSuccess.txt');
        $response = $this->request->send();

        $this->assertTrue($response->isSuccessful());
        $this->assertFalse($response->isRedirect());
        $this->assertNull($response->getMessage());
    }

    public function testSendFailure()
    {
        $this->setMockHttpResponse('FetchInvoiceLinesFailure.txt');
        $response = $this->request->send();

        $this->assertFalse($response->isSuccessful());
        $this->assertFalse($response->isRedirect());
        $this->assertSame('No such invoice: in_17ZPbRCryC4r2g4vIdAFxptK', $response->getMessage());
    }
}
