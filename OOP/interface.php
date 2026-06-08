<?php

// 1. INTERFACE (Thutiam / Contract)
interface PaymentInterface
{
    public function payPawisa($amount);
}

// ----------------------------------------------------

// 2. PAYPAL CLASS - He ta hi `implements` i zawn mek kha a awm e!
class PayPalGateway implements PaymentInterface
{

    public function payPawisa($amount)
    {
        echo "PayPal hmangin ₹" . $amount . " kan thawn lut e. 💳<br>";
    }
}

// 3. STRIPE CLASS - Hetah pawh hian `implements` kan hmang leh thlap
class StripeGateway implements PaymentInterface
{

    public function payPawisa($amount)
    {
        echo "Stripe hmangin ₹" . $amount . " kan thawn lut leh e. 🚀<br>";
    }
}

// ----------------------------------------------------

// 4. ORDER CONTROLLER (A taka he khawl (gateways) pahnih lo hmangtu tur)
class OrderController
{
    // PaymentInterface zawm tawh phawt chu hetah hian a luh theih
    private PaymentInterface $paymentGateway;

    // Constructor chhungah khian 'PaymentInterface' kan lo dil a ni
    public function __construct(PaymentInterface $gateway)
    {
        $this->paymentGateway = $gateway;
    }

    public function processCheckout($totalAmount)
    {
        echo "Order siam mek a ni...<br>";
        // A thun luh apiang kha hetah hian a rawn thawk tawp mai
        $this->paymentGateway->payPawisa($totalAmount);
    }
}

// ----------------------------------------------------
// 5. A TAKA OUTPUT KAN CHHUAHNA (TEST-NA)

// Entirnan: PayPal hmang turin kan hrilh a
$chosenGateway = new PayPalGateway();
$checkout = new OrderController($chosenGateway);
$checkout->processCheckout(2500);

echo "-----------------------------------<br>";

// Entirnan: Stripe hmang turin kan hrilh leh thut a
$chosenGateway2 = new StripeGateway();
$checkout2 = new OrderController($chosenGateway2);
$checkout2->processCheckout(4000);

?>