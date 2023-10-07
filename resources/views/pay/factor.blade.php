<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('checkout.pay') }}" method="POST">
        @csrf
        <select name="type_payment" id="">
            <option value="zarinpal">زرین پال</option>
            <option value="pay">pay.ir</option>
        </select>
        <input type="hidden" name="permission" value="{{$plan->permission}}">
        <input type="hidden" name="amount" value="{{$plan->price}}">
        <input type="hidden" name="planId" value="{{$plan->id}}">


        {{ $plan->name }}
        {{ $plan->price }}

        {{--        <select name="type_permission" id=""> --}}
        {{--            <option value="1">برنزی</option> --}}
        {{--            <option value="2">طلایی</option> --}}
        {{--            <option value="3">نقره ای</option> --}}
        {{--        </select> --}}
        <button type="submit">پرداخت</button>

    </form>
</body>

</html>
