<?php

namespace App\Factory;

abstract class Payment
{
    public function __construct(protected $gateway)
    {

    }



}
