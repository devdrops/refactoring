<?php

namespace Exemplo;

class Sale
{
    private $customer;

    public function getCustomer()
    {
        return $this->customer;
    }
}

class Customer
{
    private $email;

    public function getEmail()
    {
        return $this->email;
    }
}

class MailService
{
    public function sendEmail()
    {
        $customer = $sale->getCustomer();

        $this->setRecipient($customer->getEmail());

        // E segue com o serviço de e-mail
    }
}
