<?php

namespace App\Services\PaymentService\Drivers;

require_once("zarinpal_function.php");

use App\Models\User;
use App\Services\PaymentService\Core\interfaces\PaymentDriver;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;
use zarinpal;

class ZarinDriver implements PaymentDriver
{

    public function pay(Authenticatable|User $user, int $amount, Collection|null $additionalData)
    {
        $zp     = new zarinpal();
        $result = $zp->request('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx', $amount, '$Description', '$Email', '$Mobile', route('index'), $SandBox = true, $ZarinGate = true);

        if (isset($result["Status"]) && $result["Status"] == 100) {
            // Success and redirect to pay
            $zp->redirect($result["StartPay"]);
        } else {
            // error
            echo "خطا در ایجاد تراکنش";
            echo "<br />کد خطا : " . $result["Status"];
            echo "<br />تفسیر و علت خطا : " . $result["Message"];
        }
    }


    public function verify(Authenticatable|User $user, array $data)
    {
        $MerchantID 	= "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx";
        $Amount 		= 100;
        $ZarinGate 		= true;
        $SandBox 		= true;

        $zp 	= new zarinpal();
        $result = $zp->verify($MerchantID, $Amount, $SandBox, $ZarinGate);

        if (isset($result["Status"]) && $result["Status"] == 100)
        {
            return collect([
                'status' => true,
                'data' =>[
                    'permission' => $data['permission']
                ]
            ]);
            // Success
            echo "تراکنش با موفقیت انجام شد";
            echo "<br />مبلغ : ". $result["Amount"];
            echo "<br />کد پیگیری : ". $result["RefID"];
            echo "<br />Authority : ". $result["Authority"];
        } else {
            // error
            echo "پرداخت ناموفق";
            echo "<br />کد خطا : ". $result["Status"];
            echo "<br />تفسیر و علت خطا : ". $result["Message"];
        }
    }
}
