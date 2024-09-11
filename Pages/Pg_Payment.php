<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <link rel="icon" type="image/x-icon" href="../music/assets/Images/headset.png">
	<meta charset="UTF-8"> 
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0"> 
	<title>TuneSYNC</title> 
	<link rel="stylesheet" href="../Styles/Payment.css"> 
</head> 

<body> 
	<div class="container"> 

		<form action="#"> 

			<div class="row"> 

				<div class="col"> 
					<h3 class="title"> 
						Billing Address 
					</h3> 

					<div class="inputBox"> 
						<label for="name"> 
							Full Name: 
						</label> 
						<input type="text" id="name"
							placeholder="Enter your full name"
							required> 
					</div> 

					<div class="inputBox"> 
						<label for="email"> 
							Email: 
						</label> 
						<input type="text" id="email"
							placeholder="Enter email address"
							required> 
					</div> 

					<div class="inputBox"> 
						<label for="address"> 
							Address: 
						</label> 
						<input type="text" id="address"
							placeholder="Enter address"
							required> 
					</div> 

					<div class="inputBox"> 
						<label for="city"> 
							City: 
						</label> 
						<input type="text" id="city"
							placeholder="Enter city"
							required> 
					</div> 

					<div class="flex"> 

						<div class="inputBox"> 
							<label for="state"> 
								State: 
							</label> 
							<input type="text" id="state"
								placeholder="Enter state"
								required> 
						</div> 

						<div class="inputBox"> 
							<label for="zip"> 
								Zip Code: 
							</label> 
							<input type="number" id="zip"
								placeholder="123 456"
								required> 
						</div> 

					</div> 

				</div> 
				<div class="col"> 
					<h3 class="title">Payment</h3> 

					<div class="inputBox"> 
						<label for="name"> 
							Card Accepted: 
						</label> 
						<img src="../assets-1/cards.webp"
							alt="credit/debit card image"> 
					</div> 

					<div class="inputBox"> 
						<label for="cardName"> 
							Name On Card: 
						</label> 
						<input type="text" id="cardName"
							placeholder="Enter card name"
							required> 
					</div> 

					<div class="inputBox"> 
						<label for="cardNum"> 
							Card Number: 
						</label> 
						<input type="text" id="cardNum"
							placeholder="1111-2222-3333-4444"
							maxlength="19" required> 
					</div> 

					<div class="inputBox"> 
						<label for="month">Exp Month:</label> 
						<select name="" id="month"> 
							<option value="">Choose month</option> 
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option> 
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
						</select> 
					</div> 


					<div class="flex"> 
						<div class="inputBox"> 
							<label for="year">Exp Year:</label> 
							<select name="" id="year"> 
								<option value="">Choose Year</option> 
								<option value="2023">2023</option> 
								<option value="2024">2024</option> 
								<option value="2025">2025</option> 
								<option value="2026">2026</option> 
								<option value="2027">2027</option> 
							</select> 
						</div> 

						<div class="inputBox"> 
							<label for="cvv">CVV</label> 
							<input type="number" id="cvv"
								placeholder="123" required> 
						</div> 
					</div> 

				</div> 

			</div> 

			<input onclick="noti()" type="submit" value="Proceed to Checkout"
				class="submit_btn"> 

            <div class="msg">
                <h5 id="msg" style="cursor: pointer;" onclick="location.href='Pg_Price.php'" >Return Back</h5>
            </div>
		</form> 

	</div> 
	<script type="text/javascript" src="../Scripts/script.js"></script> 
    <script>
        function noti(){
            var name =document.getElementById("name").value;
            var email =document.getElementById("email").value;
            var cvv =document.getElementById("cvv").value;
            var cardnum =document.getElementById("cardNum").value;
            var year =document.getElementById("year").value;
            var month =document.getElementById("month").value;
            if(name ==="" || email==="" || cardnum==="" || cvv==="" || month==="" || year===""){
                // alert("Please fill out the fields.");
                document.getElementById("msg").innerHTML="Please fill out the fields.";
            }else{
                // alert("Payment successfully done!");
                document.getElementById("msg").innerHTML="Payment successfully done!";
                document.getElementById("msg").style.backgroundColor = "#18ef04";
            }
        }
    </script>
</body> 

</html>
