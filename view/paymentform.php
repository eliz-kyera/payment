
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" async defer></script>
    <script src="https://js.paystack.co/v2/inline.js" async defer></script> 
    <script src="./view/paymentform.js" async defer></script>
</head>
<body>
    <form id="paymentForm" >

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="omar@gmail.com" id="email">
        </div>
        <br>
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" name="fname" value="Omar" id="fname">
        </div>
        <br>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" value="Sanchez" id="lname">
        </div>
        <br>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" value="100" id="amount">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" name="submit" onclick="payWithPaystack(event)"> Pay </button>
        </div>
    </form>

</body>
</html>