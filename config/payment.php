<?php

return [
                 'drivers' => [
                                  'pay' => [
                                                  'class' => new \App\Services\PaymentService\Drivers\PayDriver(),
                                                   'api_key' => 'test',
                                  ],
                                 'idpay' =>[
                                               'class' =>new \App\Services\PaymentService\Drivers\IdPayDriver(),
                                                'api_key' => 'test'
                                             ]
                 ]
];
