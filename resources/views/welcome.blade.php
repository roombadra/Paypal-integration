<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Integration</title>
</head>

<body>

    <h2> Product: Mobile Phone</h2>
    <h4>Price: $150 </h4>
    <form action="{{ route('paypal') }}" method="POST">
        @csrf
        <input type="hidden" name="price" value="150">
        <button type="submit">Pay with Paypal</button>
    </form>
</body>

</html>
