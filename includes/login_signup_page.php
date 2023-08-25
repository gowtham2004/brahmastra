<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:520px; max-height:100%; max-width:100%;">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="font-size:100%">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="font-size:100%">Sign Up</label>
		<div class="login-form">
		
			<div class="sign-in-htm">
			<form class="group" action="login_register.php" method="post">
				<div class="group">
					<label for="user" class="label">EMAIL ADDRESS</label>
					<input id="email" name="email" required="required" type="email" class="input"  placeholder="Enter Your Email Here" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Enter a valid email address">
				</div>
				<div class="group">
					<label for="pass" class="label">PASSWORD</label>
					<input id="password" name="password" required="required"   type="password" class="input" data-type="password" placeholder="Enter your password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="login" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				
			</div>
			</form>
			<form class="sign-up-htm" action="login_register.php" autocomplete="on" method="post" enctype="multipart/form-data">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">NAME</label>
					<input id="username" name="username" required="required" type="text" class="input" placeholder="Enter your name" pattern="[A-Za-z ]+" title="Only letters and spaces are allowed">
				</div>
				<div class="group">
					<label for="pass" class="label">EMAIL ADDRESS</label>
					<input id="email" name="email" required=""  class="input" type="email" placeholder="Enter your Email-id"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Enter a valid email address">
				</div>
				<div class="group">
					<label for="pass" class="label">WHATSAPP NUMBER</label>
					<input id="wnum" name="wnum" required="required"  type="text" class="input" placeholder="Enter your Whatsapp Number" pattern="[0-9]{10}" title="Enter a 10-digit mobile number">
				</div>
				<div class="group">
					<label for="pass" class="label">PASSWORD</label>
					<input id="password" name="password" required="required"  type="password" class="input" data-type="password" placeholder="Enter your password">
				</div>
				
				<div class="group">
					<input type="submit" name="signup" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
						</div>
						</form>
		</div>
	</div>
</div>
     
    </div>

  </div>
</div>