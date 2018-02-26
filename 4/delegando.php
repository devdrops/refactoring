<?php

namespace Exemplo;

class Sale
{
    private $customer;

    public function getCustomerEmail()
    {
        return $this->customer->getEmail();
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
        // Desta forma, MailService é ignorante sobre Customer,
        // então não precisa receber o objeto completo,
        // somente aquilo que interessa para sua tarefa.
        $this->setRecipient($sale->getCustomerEmail());

        // ...
    }
}
