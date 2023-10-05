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
            <option value="pay">pay.ir</option>
            <option value="zarinpal">زرین پال</option>
        </select>
        <p>{{$plan->name}}</p>
        inp
{{--        <select name="type_permission" id="">--}}
{{--            <option value="1">برنزی</option>--}}
{{--            <option value="2">طلایی</option>--}}
{{--            <option value="3">نقره ای</option>--}}
{{--        </select>--}}
        <button type="submit">پرداخت</button>

    </form>
</body>

</html>
