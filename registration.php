<!--
Into this file, we create a layout for registration page.
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

            <form class="login100-form validate-form" action="registration_code.php" method="POST">
					<span class="login100-form-title">
						Member Login
					</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="firstname" id="firstname" placeholder="Enter Firstname">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-grin" aria-hidden="true"</i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" name="lastname" id="lastname" placeholder="Enter Lastname">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-grin" aria-hidden="true"</i>
						</span>
                </div>

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
                    <button class="login100-form-btn" name="create">
                        Registrar
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="index.php">
                        Iniciar Sesion
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




