<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>

    <form id="paymentForm">
        <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>
  

        

        <script src="https://js.paystack.co/v1/inline.js"></script> 

        <script>
            const paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener("submit", payWithPaystack, false);
            function payWithPaystack() {
                event.preventDefault();

                let handler = PaystackPop.setup({
                    key: 'pk_test_172deac8df704ae4731462096e7c6a6b5865eeba', // Replace with your public key
                    email: document.getElementById("email-address").value,
                    amount: document.getElementById("amount").value * 100,
                    currency: "GHS",
                    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                    // label: "Optional string that replaces customer email"
                    onClose: function(){
                        alert('Window closed.');
                    },
                         callback: function(response){
                            let message = 'Payment complete! Reference: ' + response.reference;
                            alert(message);

                             $.get('actions/process_paystack.php?ref=' + response.reference, function(data){
                                alert(data);
                            }
                                );
                            
                             
                        }
                });

                            handler.openIframe();

            }

</script>


</body>
</html>