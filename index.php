<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');

?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="img/img-02.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="POST" action="login_code.php">
					<span class="login100-form-title">
						Member Login
					</span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" id="email" placeholder="Enter email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" id="pwd" placeholder="Enter password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="login">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="registration.php">
                        Crear cuenta
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


