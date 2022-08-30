<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Asesmen Awal Wyata Guna</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="avatar.png" alt="avatar" style="height: 50px; width: 50px;">
                        <h4 class="card-title">Login</h4>
                    </div>
                    <form method="POST" class="my-login-validation" novalidate="">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="username" required autofocus>
                            <div class="invalid-feedback">Harap masukan username</div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required data-eye>
                            <div class="invalid-feedback">Harap masukan password</div>
                        </div>
                        <div class="form-group m-0">
                        <button type="submit" class="btn btn-login btn-primary btn-block">Login</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
        
        <script src="assets/jquery.min.js"></script>
        <script src="assets/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="login.js"></script>
        <script>
            $(document).ready(function(){
                $(".btn-login").click( function() {
                    var username = $("#username").val();
                    var password = $("#password").val();

                    if(username.length == "") {
                        Swal.fire('Oops...', 'Username Wajib Diisi !', 'warning');
                    } else if(password.length == "") {
                        Swal.fire('Oops...', 'Password Wajib Diisi !', 'warning');
                    } else {
                        $.ajax ({
                            url: "ambildata.php",
                            type: "POST",
                            data: {
                                "username": username,
                                "password": password
                            },
                            success: function(response){
                                if(response == "admin"){
                                    window.location.href = "admin.php";
                                } else if(response == "user"){
                                    window.location.href = "home.php";
                                } else {
                                    Swal.fire({
                                        title: 'Opps!',
                                        text: 'Username atau Password Anda Salah',
                                        icon: 'error'
                                    });
                                }
                                console.log(response);
                            },
                            error:function(response){
                                Swal.fire({
                                    title: 'Opps!',
                                    text: 'Username atau Password Anda Salah',
                                    icon: 'error'
                                });
                                console.log(response);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>