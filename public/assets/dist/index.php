<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dept. Of Water Resources | Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="dist/img/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="plugins/font/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="plugins/font/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="login/css/util.css">
  <link rel="stylesheet" type="text/css" href="login/css/main.css">
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
<!--===============================================================================================-->
<style>
.login-bg{
    background-image: url(login/images/login-bg.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
/*position: fixed;*/
    /*left: 0;
    top: 0;*/
   /*height: 100vh;
    width: 100%;*/
    background-attachment: fixed;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
    box-shadow: 0px 0px 28px 0px rgb(0 0 0 / 75%);
    -webkit-box-shadow: 0px 0px 28px 0px rgb(0 39 126);
    -moz-box-shadow: 0px 0px 28px 0px rgba(0,0,0,0.75);
}
.left-bg{
background: linear-gradient(146deg, #0081d9 0%, #01416c 100%);
border-top-left-radius: 14px;
border-bottom-left-radius: 14px;
}
.wel-back{
    position: absolute;
    top: 25px;
    padding: 10px 20px 10px 15px;
    background: linear-gradient(146deg, #0081d9 0%, #01416c 100%);
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    color: white;
    font-weight: 600;
}
.log-heading{
    color: #015085;
    font-weight: 600!important;
}
.lgn-btn{
    background: linear-gradient(146deg, #0081d9 0%, #01416c 100%);
    border-radius: 25px;
    color: white;
    border: 0px;
    font-size: 16px;
    font-weight: 500;
    padding: 10px 35px 10px 35px;
}
.captcha{
    margin: auto;
    font-size: 20px;
    font-weight: 600;
    color: #01558e;
    padding-top: 7px;
  }
  .field-icon {
    float: right;
    /* margin-left: -7px; */
    margin-right: 7px;
    margin-top: -33px;
    position: relative;
    z-index: 2;
    color: #5e5e5e;
}
.img-fluid {
    max-width: 75%;
    height: auto;
}
.refre{
      color: #5e5e5e;
}
.courser{
  cursor: pointer;
}
@media only screen and (max-width: 600px){
  .wel-back {
    top: -24px;
  }
}
</style>
</head>
<body>
	
<section class="vh-100 login-bg">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-7 d-none d-md-block left-bg text-center">
              <img src="login/images/img1.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-5 d-flex align-items-center">
              <div class="wel-back">Welcome</div>
              <div class="card-body p-4 p-lg-5 text-black">

                <form id="loginform">

                  <h5 class="fw-normal mb-3 pb-3 text-center log-heading" style="letter-spacing: 1px;">Login to your Account</h5>

                  <div class="form-group mb-4">
                    <select class="form-control form-control-lg" name="tac_type_id" id="tac_type_id" />
                        <option value="" selected disabled>--Authority Type--</option>
                        <option value="1">DoWR</option>
                        <option value="2">Engineer-in-Chief</option>
                        <option value="3">Controlling Authority (CO)</option>
                        <option value="4">Circle</option>
                        <option value="5">Division</option>
                    </select>
                  </div>


                  <div class="form-group mb-4">
                    <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="username" />
                    <span class="fa fa-fw fa-user field-icon"></span>
                  </div>

                  <div class="form-group mb-4">
                    <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" autocomplete="off" />
                    <span class="fa fa-fw fa-eye field-icon"  onclick="show_pwd();"></span>
                  </div>
                  <div class="row">
                    <div class="form-group mb-4 col-5">
                       <label class="captcha" id="txtCaptcha">5+5 =</label>
                       <i class="fa fa-refresh courser" onclick="DrawCaptchabackend();"></i>
                    </div>

                    <div class="form-group mb-4 col-7">
                      <input type="text" class="form-control form-control-lg" placeholder="Enter Ceptcha" id="txtInput" type="text" name="prof"  onpaste="return false;" ondrop="return false;"  autocomplete="off"/>
                      <input type="hidden"  id="captcha_add"  name="captcha_add" >
                      <div id="error_msg_captcha" class="er_msg"></div> 
                    </div>
                  </div>
                  <div class="pt-1 mb-4 text-center">
                    <button type="button" class="btn btn-dark btn-lg btn-block lgn-btn" onclick='login();' >Login</button>
                  </div>
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--===============================================================================================-->
  <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="login/js/main.js"></script>
  <script src="js/login.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>

<script>
// $(function () {
//   $.validator.setDefaults({
//     submitHandler: function () {
//       alert( "Form successful submitted!" );
//     }
//   });
//   $('#loginform').validate({
//     rules: {
//       worktype: {
//         required: true,
//       },
//       email: {
//         required: true,
//         email: true,
//       },
//       password: {
//         required: true,
//         minlength: 5
//       },
//       terms: {
//         required: true
//       },
//     },
//     messages: {
//       worktype: {
//         required: "Please Select TAC Type",
//         email: "Please select a vaild TAC Type"
//       },
//       email: {
//         required: "Please enter a email address",
//         email: "Please enter a vaild email address"
//       },
//       password: {
//         required: "Please provide a password",
//         minlength: "Your password must be at least 5 characters long"
//       },
//       terms: "Please accept our terms"
//     },
//     errorElement: 'span',
//     errorPlacement: function (error, element) {
//       error.addClass('invalid-feedback');
//       element.closest('.form-group').append(error);
//     },
//     highlight: function (element, errorClass, validClass) {
//       $(element).addClass('is-invalid');
//     },
//     unhighlight: function (element, errorClass, validClass) {
//       $(element).removeClass('is-invalid');
//     }
//   });
// });
  
get_tac_type();
 $(document).keypress(function (e) {
            if (e.which == 13) {
                // alert('enter key is pressed');
                login();
            }
        });

 DrawCaptchabackend();

var intervalId = window.setInterval(function(){
        DrawCaptchabackend();
}, 50000);

</script>
<script src="plugins/toastr/toastr.min.js"></script>
</body>
</html>