<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login E-VOTING | <?= get_pengaturan('penyelenggara') ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="shortcut icon" href="<?= get_url_file(get_pengaturan('site_icon')) ?>" type="image/x-icon">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/other/') ?>dist/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel='stylesheet' href='<?= base_url('assets/other/') ?>plugins/sweetalert2/dist/sweetalert2.min.css'>
</head>

<body>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

    /* BASIC */

    html {
      background-color: white;
    }

    body {
      font-family: "Poppins", sans-serif;
      height: 100vh;
    }

    a {
      color: white;
      display: inline-block;
      text-decoration: none;
      font-weight: 400;
    }

    h1 {
      text-align: center;
      font-size: 50px;
      font-weight: 600;
      display: inline-block;
      margin: 40px 8px 10px 8px;
      color: #cccccc;
      font-family: myFirstFont;
    }



    /* STRUCTURE */

    .wrapper {
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;
      width: 100%;
      min-height: 100%;
      padding: 20px;
    }

    #formContent {
      -webkit-border-radius: 10px 10px 10px 10px;
      border-radius: 10px 10px 10px 10px;
      background: #fff;
      padding: 30px;
      width: 90%;
      max-width: 370px;
      position: relative;
      padding: 0px;
      -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    #formFooter {
      background-color: #3493ed;
      border-top: 1px solid #dce8f1;
      padding: 25px;
      text-align: center;
      font-size: 10px;
      font-weight: 600;
      color: #edf6ff;
      -webkit-border-radius: 0 0 10px 10px;
      border-radius: 0 0 10px 10px;
    }

    .tombol {
      background-color: #FFD700;
      color: white;
      padding: 7px 20px;
      font-size: 13px;
      text-align: center;
      -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
      margin: 5px 10px 10px 10px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    /* TABS */

    h1.inactive {
      color: #cccccc;

    }

    @font-face {
      font-family: myFirstFont;
      src: url(<?= base_url('assets/other/') ?>sans/Allura-Regular.woff);
    }

    h1.active {
      color: white;
      text-align: center;
      font-size: 2em font-weight: bolder font-family: myFirstFont;
    }



    /* FORM TYPOGRAPHY*/

    input[type=button],
    input[type=submit],
    input[type=reset] {
      background-color: #56baed;
      border: none;
      color: white;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
      margin: 15px 20px 20px 20px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
      background-color: #39ace7;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
      -moz-transform: scale(0.95);
      -webkit-transform: scale(0.95);
      -o-transform: scale(0.95);
      -ms-transform: scale(0.95);
      transform: scale(0.95);
    }

    input[type=text],
    input[type=password] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #e6f7ff;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
    }

    input[type=text]:placeholder {
      color: #cccccc;
    }



    /* ANIMATIONS */

    /* Simple CSS3 Fade-in-down Animation */
    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-moz-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .fadeIn {
      opacity: 0;
      -webkit-animation: fadeIn ease-in 1;
      -moz-animation: fadeIn ease-in 1;
      animation: fadeIn ease-in 1;

      -webkit-animation-fill-mode: forwards;
      -moz-animation-fill-mode: forwards;
      animation-fill-mode: forwards;

      -webkit-animation-duration: 1s;
      -moz-animation-duration: 1s;
      animation-duration: 1s;
    }

    .fadeIn.first {
      -webkit-animation-delay: 0.4s;
      -moz-animation-delay: 0.4s;
      animation-delay: 0.4s;
    }

    .fadeIn.second {
      -webkit-animation-delay: 0.6s;
      -moz-animation-delay: 0.6s;
      animation-delay: 0.6s;
    }

    .fadeIn.third {
      -webkit-animation-delay: 0.8s;
      -moz-animation-delay: 0.8s;
      animation-delay: 0.8s;
    }

    .fadeIn.fourth {
      -webkit-animation-delay: 1s;
      -moz-animation-delay: 1s;
      animation-delay: 1s;
    }

    /* OTHERS */

    *:focus {
      outline: none;
    }

    #icon {
      width: 60%;
    }

    * {
      box-sizing: border-box;
    }



    /* Checkbox */


    form label {
      display: inline-block;
      position: relative;
      cursor: pointer;
      font-family: myFirstFont;
      font-size: 21px;
      line-height: 28px;
      vertical-align: top;
    }

    /*MULAI MENDESAIN CUSTOM CHECKBOX DAN RADIO BUTTON*/
    form .form-check {
      display: inline-block;
      position: relative;
      width: 50px;
      height: 25px;
    }

    form .form-check::before {
      content: "";
      display: inline-block;
      position: relative;
      width: 50px;
      height: 25px;
      background: #fff;
      border: 3px solid #58baed;
      border-radius: 30px;
      -moz-border-radius: 30px;
    }

    form .form-check::after {
      content: "";
      display: inline-block;
      position: absolute;
      width: 21px;
      height: 19px;
      border-radius: 25px;
      -moz-border-radius: 25px;
      background: #3493ed;
      left: 3px;
      top: 3px;
      transition: 0.3s;
      -moz-transition: 0.3s;
      -webkit-transition: 0.3s;
      -khtml-transition: 0.3s;
    }


    form .form-check:checked::after {
      left: 27px;
      background: #009432;
    }
  </style>

  <section class='content-header' style='height:33%;z-index:0;background-image:url(<?= base_url('assets/other/') ?>dist/img/background_siswa4.png);'>
    <form id='formlogin' action='<?= site_url('user/userauth/ajax_login') ?>'
      class='login100-form validate-form'>
      <center class='fadeIn first'>
        <img class='animated infinite pulse delay-5s' src='<?= get_url_file(get_pengaturan('site_logo')) ?>' style='max-width:75px; width=' 75'
          id='icon' alt='User Icon' />
        <h1 class='active' box-shadow='0px 10px 10px 0px rgba(0,0,0,0.1)'>Login</h1>
        <div style='color:white; font-size:11px; margin-top:-15px; margin-left:74px'><i> E-VOTING</i>
        </div>
      </center>
      <div class='wrapper fadeInDown'>
        <div id='formContent'>
          <div class='fadeIn first'>
            <br>
            </span>
          </div>
          <form>
            <div style='color:#2f3640; font-size:19px; margin-top:0px; margin-left:22px; margin-right:22px'
              class='animated infinite pulse delay-5s'> <?= get_pengaturan('penyelenggara') ?></div>
            <div style='color:#2f3640; font-size:12px; margin-top:0px; margin-left:22px; margin-right:22px'>
              Login dengan <b>username</b> dan <b>password </b> <br> yang telah diberikan
            </div>
            <br>
            <input class='form-control' placeholder='Username' name='username' type='text' class='fadeIn second'
              name='login' placeholder='login' required="true"><span class='fa fa-lg fa-envelope' />
            <input class='form-control' id='pass' placeholder='Password' name='password' type='password'
              class='fadeIn third' placeholder='password' required="true">
            <input type='checkbox' onclick='showpass()' name='check' id='txt' class='form-check'>
            <label>
              <font color="#53b7eb"> Show Password</font>
            </label>
            <input type='submit' name='submit' class='fadeIn fourth' value='Masuk'>
          </form>

          <div id="formFooter">
            <div style="color:white; font-size:15px">E-VOTING
            </div>
          </div>

        </div>
      </div>

      <script src="<?= base_url('assets/other/') ?>dist/vendor/jquery/jquery-3.2.1.min.js"></script>
      <script src='<?= base_url('assets/other/') ?>plugins/sweetalert2/dist/sweetalert2.min.js'></script>
      <!--===============================================================================================-->
      <script>
        $(document).ready(function () {
          $('#formlogin').submit(function (e) {
            var homeurl;
            homeurl = '<?= site_url()?>';
            e.preventDefault();
            $.ajax({
              type: 'POST',
              url: $(this).attr('action'),
              data: $(this).serialize(),
              success: function (data) {
                if (data == "ok") {
                  console.log('sukses');
                  window.location = homeurl;
                }
                if (data == "td") {
                  swal({
                    position: 'top-end',
                    type: 'warning',
                    title: 'Username atau Password Salah',
                    showConfirmButton: false,
                    timer: 2500
                  });
                }
                if (data == "nologin") {
                  swal({
                    position: 'top-end',
                    type: 'warning',
                    title: 'Anda sudah memilih',
                    showConfirmButton: false,
                    timer: 2500
                  });
                }
                if (data == "ta") {
                  swal({
                    position: 'top-end',
                    type: 'warning',
                    title: 'Akun belum diaktifkan silahkan hubungi panitia ujian',
                    showConfirmButton: false,
                    timer: 2500
                  });
                }

              }
            })
            return false;
          });

        });

        function showpass() {
          var x = document.getElementById("pass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
      </script>
      <script>
        $(document).bind('contextmenu', function (e) {
          alert('Maaf Tidak bisa klik kanan atau copas')
          location.reload();
          return false;
        });
        document.onkeydown = function (e) {
          if (event.keyCode == 123) {
            return false;
          }
          if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            alert('Maaf Tidak bisa klik kanan atau copas')
            return false;
          }
          if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            alert('Maaf Tidak bisa klik kanan atau copas')
            return false;
          }
          if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            alert('Maaf Tidak bisa klik kanan atau copas')
            return false;
          }
        }
      </script>
</body>

</html>