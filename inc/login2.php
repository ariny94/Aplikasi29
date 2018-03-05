<!DOCTYPE html>
<html>
<head>
<?php include "inc/head.php";?>
<style type="text/css">
	/*Font CDN*/

	@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);

	/*Font CDN*/


	/*Global CSS*/

	html,
	body {
	    font-family: 'Roboto', sans-serif;
	    font-size: 20px;
	    height: 100%;
	}
	a,
	a:hover,
	a:focus,
	focus {
	    outline: none !important;
	    text-decoration: none;
	    color: #fff;
	}
	.container{
	    max-width:800px;
	    width: 100%;
	    
	}
	li,
	ul {
	    margin: 0;
	    padding: 0;
	}

	/*Global CSS*/


	/*Main CSS*/


	/*Login Signup Page*/

	.bg-image {
	    background: url(http://jskrishna.com/work/merkury/images/background-login.jpg) no-repeat 0 0 / cover;
	    position: relative;
	    width: 100%;
	    height: 100vh;
	    display: table;
	}

	.login-header {
	    display: inline-block;
	    width: 100%;
	    background: #0e1a35;
	}

	.login-signup {
	    display: table-cell;
	    vertical-align: middle;
	    width: 100%;
	}

	.login-logo img {
	    cursor: pointer;
	    max-width: 171px;
	    padding: 23px 15px 22px;
	    width: 100%;
	}

	.login-header .navbar-right {
	    margin-right: 0px;
	}

	.login-header .nav-tabs > li.active > a,
	.login-header .nav-tabs > li.active > a:focus,
	.login-header .nav-tabs > li.active > a:hover {
	    background-color: transparent;
	    border: none;
	    color: #fff;
	}

	.login-header .nav-tabs > li > a {
	    border: medium none;
	    border-radius: 0;
	    font-size: 14px;
	    font-weight: 500;
	    line-height: 48px;
	    padding: 15px 30px;
	    color: #fff;
	}

	.login-header .nav-tabs {
	    border-bottom: none;
	}

	.login-header .nav-tabs > li {
	    margin-bottom: 0px;
	}

	.login-header .nav > li > a:focus,
	.login-header .nav > li > a:hover {
	    background: none;
	    text-decoration: none;
	}

	.login-header .nav-tabs > li.active {
	    border-bottom: 6px solid #5584ff;
	}

	.login-inner h1 {
	    color: #8492af;
	    font-size: 35px;
	    font-weight: 300;
	    text-align: center;
	    margin-top: 0;
	}

	.login-inner h1 span {
	    color: #5584ff;
	}

	.login-form {
	    text-align: center;
	}

	.login-form input {
	    -moz-border-bottom-colors: none;
	    -moz-border-left-colors: none;
	    -moz-border-right-colors: none;
	    -moz-border-top-colors: none;
	    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
	    border-color: -moz-use-text-color -moz-use-text-color #d4d9e3;
	    border-image: none;
	    border-style: none none solid;
	    border-width: medium medium 1px;
	    font-size: 13px;
	    font-weight: 300;
	    width: 100%;
	    color: #8492af;
	    padding: 15px 50px;
	    font-size: 17px;
	    max-width: 550px;
	}

	.login-form label {
	    margin-bottom: 30px;
	    width: 100%;
	}

	.user input {
	    background: rgba(0, 0, 0, 0) url("http://jskrishna.com/work/merkury/images/user.png") no-repeat scroll 7px 12px;
	}

	.pass input {
	    background: rgba(0, 0, 0, 0) url("http://jskrishna.com/work/merkury/images/password.png") no-repeat scroll 7px 12px;
	}

	.mail input {
	    background: rgba(0, 0, 0, 0) url("http://jskrishna.com/work/merkury/images/mail.png") no-repeat scroll 4px 12px;
	}

	.login-signup .tab-content {
	    background: #ffffff none repeat scroll 0 0;
	    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
	    display: inline-block;
	    margin-top: -8px;
	    width: 100%;
	}

	.form-btn {
	    background: #5584ff none repeat scroll 0 0;
	    border: medium none;
	    border-radius: 100px;
	    color: #ffffff;
	    font-weight: 400;
	    max-width: 250px;
	    padding: 10px 0;
	    position: relative;
	    width: 100%;
	    margin-bottom: 10px;
	    box-shadow: 0 2px 8px #d2d2d2;
	    -moz-box-shadow: 0 2px 8px #d2d2d2;
	    -webkit-box-shadow: 0 2px 8px #d2d2d2;
	}

	.form-btn::before {
	    content: "";
	    font-family: FontAwesome;
	    position: absolute;
	    right: 17px;
	    top: 9px;
	}

	.form-details {
	    padding: 35px 0;
	}

	.tab-content .tab-pane {
	    padding:35px 0;
	}


	/*Login Signup Page*/



	@media only screen and (max-device-width: 767px) {
	    .login-logo img {
	        margin: 0 auto;
	    }
	    .login-details .nav-tabs > li {
	        text-align: center;
	        width: 50%;
	    }
	    .login-signup .login-inner h1 {
	        font-size: 26px;
	        margin-bottom: 0;
	        margin-top: 10px;
	    }
	    .login-inner .login-form input {
	        font-size: 15px;
	        max-width: 100%;
	        padding: 15px 45px;
	    }
	    .login-inner .form-details {
	        padding: 25px;
	    }
	    .login-inner .login-form label {
	        margin-bottom: 20px;
	        width: 100%;
	    }
	    .login-inner .form-btn {
	        margin: 0;
	        max-width: 180px;
	    }
	    .tab-content .tab-pane {
	        padding: 20px 0;
	    }
	    #navigation .navi a {
	        font-size: 14px;
	        padding: 20px;
	        text-align: center;
	    }
	    #navigation .navi i {
	        margin-right: 0px;
	    }
	    #navigation .navi a:hover,
	    #navigation .navi .active a {
	        background: #122143 none repeat scroll 0 0;
	        border-left: none;
	        display: block;
	        padding-left: 20px;
	    }
	    header .header-top img {
	        max-width: 38px !important;
	    }
	    .v-align header {
	        padding: 12px 15px;
	    }
	    header .header-top li {
	        padding-left: 13px;
	        padding-right: 6px;
	    }
	    .navbar-default .navbar-toggle {
	        border-color: rgba(0, 0, 0, 0);
	    }
	    .navbar-header .navbar-toggle {
	        float: left;
	        margin: 0;
	        padding: 0;
	        top: 12px;
	    }
	    button,
	        html [type="button"],
	        [type="reset"],
	        [type="submit"] {
	            outline: medium none;
	    }
	    .user-dashboard .sales h2 {
	        color: #8492af;
	        float: left;
	        font-size: 14px;
	        font-weight: 600;
	        margin: 0;
	        padding: 13px 0 0;
	}
	    .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
	        font-size: 11px;
	}
	    .user-dashboard .sales button {
	        font-size: 11px;
	        padding-right: 23px;
	}  
	    .user-dashboard .sales h2 {
	    font-size: 12px;
	}
	.gutter{
	    padding: 0;
	}
	}

	@media only screen and (max-device-width: 992px) {
	    header .header-top li {
	        padding-left: 20px !important;
	        padding-right: 0;
	}
	    header .logo img {
	        max-width: 125px !important;
	}

	}

	@media only screen and (min-device-width: 767px) and (max-device-width: 998px){
	      .user-dashboard .header-top {
	        padding-top: 5px;
	}
	    .user-dashboard .header-rightside {
	        display: inline-block;
	        float: left;
	        width: 100%;
	}
	    .user-dashboard .header-rightside .header-top img {
	        max-width: 41px !important;
	} 
	    .user-dashboard .sales button {
	    font-size: 10px;
	}
	    .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
	    font-size: 12px;
	}
	    .user-dashboard .sales h2 {
	    font-size: 15px;
	}
	}
	@media only screen and (min-device-width:998px) and (max-device-width: 1350px){
	        #navigation .logo img {
	    max-width: 130px;
	    padding: 16px 0 17px;
	    width: 100%;
	}
	}
</style>
</head>
<body>
<div class="login-area">
        <div class="bg-image">
            <div class="login-signup">
                <div class="container">
                    <div class="login-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="login-logo">
                                    <img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkury_logo" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="login-details">
                                    <ul class="nav nav-tabs navbar-right">
                                        <li><a data-toggle="tab" href="#register">Register</a></li>
                                        <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="tab-content">
                        <div id="register" class="tab-pane">
                           <div class="login-inner">
                                <div class="title">
                                    <h1>Welcome <span>back!</span></h1>
                                </div>
                                <div class="login-form">
                                    <form>
                                        <div class="form-details">
                                            <label class="user">
                                                <input type="text" name="username" placeholder="Full Name" id="username">
                                            </label>
                                            <label class="mail">
                                                <input type="email" name="mail" placeholder="Email Address" id="mail">
                                            </label>
                                            <label class="pass">
                                                <input type="password" name="passsword" placeholder="Password" id="password">
                                            </label>
                                            <label class="pass">
                                                <input type="password" name="passsword" placeholder="Confirm Password" id="password">
                                            </label>
                                        </div>
                                        <button type="submit" class="form-btn" onsubmit="">Sent</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="login" class="tab-pane fade in active">
                            <div class="login-inner">
                                <div class="title">
                                    <h1>Welcome <span>back!</span></h1>
                                </div>
                                <div class="login-form">
                                    <form>
                                        <div class="form-details">
                                            <label class="user">
                                                <input type="text" name="username" placeholder="Username" id="username">
                                            </label>
                                            <label class="pass">
                                                <input type="password" name="passsword" placeholder="Password" id="password">
                                            </label>
                                        </div>
                                        <button type="submit" class="form-btn" onsubmit="">Sent</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "inc/footer.php"; ?>
</body>
</html>