<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <meta name="author" content="Pero Peric" />
    <script src="js/datum-podnozje.js"></script>
    <link rel='icon' href='favicon.ico' type='image/x-icon'> 
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/login.css">
         
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Prijava</span>

                <form action="includes/session/otvori-sesiju.php" method="POST">
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Unesi e-mail" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="lozinka" class="password" placeholder="Unesi lozinku" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Zapamti me</label>
                        </div>
                        
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Prijavi se">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Nemaš račun?
                        <a href="#" class="text signup-link">Registriraj se</a>
                    </span><br>
                    <span class="text">Vrati se na početnu.</span>
                        <a href="index.php" class="text login-link">Početna</a>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup" >
                <span class="title">Registrirajte se</span>

                <form method="POST" action="unos_korisnika_spremi.php" enctype="multipart/form-data">
                    
                    <div class="input-field">
                        <input type="text" placeholder="E-mail ili Korisnicko ime" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="lozinka1"  placeholder="Lozinka" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="lozinka2" placeholder="Potvrdi lozinku" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    
                    <div class="input-field button">
                        <input type="submit" value="Registracija">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Imate li račun?
                        <a href="login.php" class="text login-link">Prijavi se</a>
                    </span><br>
                    <span class="text">Vrati se na početnu.</span>
                        <a href="index.php" class="text login-link">Početna</a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>
</html>

 