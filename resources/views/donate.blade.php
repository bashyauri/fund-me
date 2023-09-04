@extends('layouts.app')

@section('content')
    {{-- Content goes here--}}
     <!-- Page content-->
     <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Get in touch</h1>
                    <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form onsubmit="makePayment()" id="payment-form">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="js-firstName" placeholder="Enter First Name" name="firstName">
                                <label for="email">First Name</label>
                             </div>
                             <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="js-lastName" placeholder="Enter Last Name" name="lastName">
                                <label for="email">Last Name</label>
                             </div>
                             <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="js-email" placeholder="Enter Email" name="email">
                                <label for="email">Email</label>
                             </div>
                             <div class="form-floating  mb-3">
                                <input type="text" class="form-control" id="js-narration" placeholder="Enter Narration" name="narration">
                                <label for="pwd">Narration</label>
                             </div>
                             <div class="form-floating  mb-3">
                                <input type="text" class="form-control" id="js-amount" placeholder="Enter Amount" name="amount">
                                <label for="pwd">Amount</label>
                             </div>
                             <input type="button" onclick="makePayment()" value="Submit" button class="btn btn-primary btn-lg"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://remitademo.net/payment/v1/remita-pay-inline.bundle.js"></script>
    <script>

	      function makePayment() {
	          var form = document.querySelector("#payment-form");
	          var paymentEngine = RmPaymentEngine.init({
	              key: 'QzAwMDAyNzEyNTl8MTEwNjE4NjF8OWZjOWYwNmMyZDk3MDRhYWM3YThiOThlNTNjZTE3ZjYxOTY5NDdmZWE1YzU3NDc0ZjE2ZDZjNTg1YWYxNWY3NWM4ZjMzNzZhNjNhZWZlOWQwNmJhNTFkMjIxYTRiMjYzZDkzNGQ3NTUxNDIxYWNlOGY4ZWEyODY3ZjlhNGUwYTY=',
	              transactionId: Math.floor(Math.random()*1101233), // Replace with a reference you generated or remove the entire field for us to auto-generate a reference for you. Note that you will be able to check the status of this transaction using this transaction Id
	              customerId: form.querySelector('input[name="email"]').value,
	              firstName: form.querySelector('input[name="firstName"]').value,
	              lastName: form.querySelector('input[name="lastName"]').value,
	              email: form.querySelector('input[name="email"]').value,
	              amount: form.querySelector('input[name="amount"]').value,
	              narration: form.querySelector('input[name="narration"]').value,
	              onSuccess: function (response) {
	                  console.log('callback Successful Response', response);
	              },
	              onError: function (response) {
	                  console.log('callback Error Response', response);

	              },
	              onClose: function () {
	                  console.log("closed");
	              }
	          });
	           paymentEngine.showPaymentWidget();
	      }

	      window.onload = function () {
	          setDemoData();
	      };

    </script>

@endsection
