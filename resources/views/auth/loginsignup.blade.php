<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel="stylesheet" href="switches.css" />
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input  class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
                                        <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Log In</h4>
                                            <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                        
                                                    <!-- Email Address -->
                                                    <div class="form-group">
                                                        <input id="email" class="form-style" type="email" name="email" autocomplete="off" :value="old('email')" placeholder="Your Email" required />
                                                        <i class="input-icon uil uil-at"></i>
                                                    </div><br>
                                                    
                                                    <!-- Password -->
                                                    <div class="form-group mt-2">
                                                        <x-input id="password" class="form-style" type="password" name="password" placeholder="Your Password" required />
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                    </div><br>
                                        
                                                    <!-- terms and conditions -->
                                                    <div class="block mt-4">
                                                        <label for="terms and conditions" >
                                                            <input style="display: block;left:0px" id="terms and conditions" type="checkbox" name="terms and conditions" required>
                                                            <span style="left:0px;margin-top:10px">Check here if you agree for the terms and conditions of our website</span>
                                                        </label>
                                                    </div>
                                                    
                                                    <!-- Remember Me -->
                                                    <div class="block mt-4">
                                                        <label for="remember_me" class="inline-flex items-center">
                                                            <input style="display: block;left:0px" id="remember_me" type="checkbox" name="remember">
                                                            <span id="remember">Remember me</span>
                                                        </label><br><br>
                                                        <div style="margin-top:15px" class="g-recaptcha" data-sitekey="6LeROnohAAAAAB0ONyrADAFuaz-srQx6j0quBx-s" 
                                                        data-callback="recaptcha_callback"
                                                        required>
                                                        </div>
                                                    </div><br>
                                        
                                                    
                                                    <div style="display: inline-block"> 
                                                        @if (Route::has('password.request'))
                                                            <a href="{{ route('password.request') }}">
                                                                Forgot your password?
                                                            </a>
                                                        @endif
                                                    </div>
                                                    <div style="display: inline-block;top:10cm"> 
                                                        <button class="btn mt-4">
                                                            Log in
                                                        </button>
                                                    </div>
                                                    
                                                </form>
                                        </div>
			      					</div>
			      				</div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
                                            
                                                    <form style="margin-bottom: auto" method="POST" action="{{ route('register') }}">
                                                        @csrf
                                            
                                                        <!-- Name -->
                                                        <div class="form-group">
                                                            <input id="name" class="form-style" type="text" name="name" :value="old('name')" autocomplete="off" placeholder="Your Full Name" required  />
                                                            <i class="input-icon uil uil-user"></i>
                                                        </div>
                                            
                                                        <!-- Email Address -->
                                                        <div class="form-group mt-2">
                                                            <input id="email"  class="form-style" type="email" name="email" :value="old('email')" autocomplete="off" placeholder="Your Email" required />
                                                            <i class="input-icon uil uil-at"></i>
                                                        </div>
                                            
                                                        <!-- tel -->
                                                        <div class="form-group mt-2">
                                                            <input id="text" autocomplete="off" class="form-style"
                                                                            type="tel"
                                                                            name="tel"
                                                                            required autocomplete="tel"
                                                                            pattern="[0-9]{2} [0-9]{3}[0-9]{3}" 
                                                                            placeholder="12 345678"
                                                                            :value="old('tel')"
                                                                            />
                                                            <i class="input-icon uil uil-phone"></i>
                                                        </div>
                                            
                                                        <!-- Password -->
                                                        <div class="form-group mt-2">
                                                            <input id="password" class="form-style"
                                                                            type="password"
                                                                            name="password"
                                                                            required autocomplete="new-password"
                                                                            placeholder="Your Password"/>
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                        </div>
                                            
                                                        <!-- Confirm Password -->
                                                        <div class="form-group mt-2">
                                                            <input id="password_confirmation" class="form-style"
                                                                            type="password"
                                                                            name="password_confirmation" required 
                                                                            placeholder="Rewrite Your Password"/>
                                                            <i class="input-icon uil uil-lock-alt"></i>               
                                                        </div>
                                            
                                                        <!-- terms and conditions -->
                                                <div class="block mt-4">
                                                    <label for="terms and conditions" >
                                                        <input style="display: block;left:0px" id="terms and conditions" type="checkbox" name="terms and conditions" required>
                                                        <span style="left:0px;margin-top:10px">Check here if you agree for the terms and conditions of our website</span>
                                                    </label><br><br>
                                                    <div class="g-recaptcha" data-sitekey="6LeROnohAAAAAB0ONyrADAFuaz-srQx6j0quBx-s" 
                                                    data-callback="recaptcha_callback" required></div>
                                                    </div>
                                                </div>

                                                <div class="flex items-center justify-end mt-4">
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                        {{ __('Already registered?') }}
                                                    </a>
                                    
                                                    <button class="btn mt-4">
                                                        {{ __('Register') }}
                                                    </button>

                                                </div>
                                                </form>
                                                
                                            
                                        </div>
                                    </div>
                                </div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
    
  </body>
</html>
