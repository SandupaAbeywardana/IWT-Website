 // this identifies your website in the createToken call below
 pay.setPublishableKey('test_key_goes_here');

 function stripeResponseHandler(status, response) {
     if (response.error) {
         // re-enable the submit button
         $('.submit-button').removeAttr("disabled");
         // show hidden div
         document.getElementById('a_x200').style.display = 'block';
         // show the errors on the form
         $(".payment-errors").html(response.error.message);
     } else {
         var form$ = $("#payment-form");
         // token contains id, last4, and card type
         var token = response['id'];
         var posted = document.getElementById("post-price").value
             // insert the token into the form so it gets submitted to the server
         form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
         form$.append("<input type='hidden' name='posted' value='" + posted + "' />");
         // and submit
         form$.get(0).submit();



     }
 }