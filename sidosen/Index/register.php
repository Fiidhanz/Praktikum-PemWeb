<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="register.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <center>
    <div class="logo">
        <div class="header">
            <img src="../Image/logodosen.png" alt="Logo" class="logo" width="150" height="180">
        </center>
    <center>
    <form action="register-proses.php" method="post">
    <h2>Register</h2><br>
            <tr> 
                <td>Nama Lengkap:</td> 
                <td><input 	type="text" 	name="name" ></td> 
            </tr>
            <tr> 
                <td>Username :</td> 
                <td><input 	type="text" 	name="user" ></td> 
            </tr>  
            <tr> 
                <td>Password : </td> 
                <td><input type="password" name="user_pass" ></td> 
            </tr> 
            <tr> 
                <td>Email : </td> 
                <td><input 	type="email" 	name="mail" ></td> 
            </tr> 
            <tr> 
                <td>Jenis Kelamin : </td> 
                <td> <br>
                    <input type="radio" name="gender"> Laki - Laki <br>
                    <input 	type="radio" 	name="gender"> Perempuan 
                </td> 
            </tr> 
        </table> 
        <br><br> 

        <div class="buttons">
            <a href="login.php" class="button" type="register" value="input data" onclick="alert('BERHASIL DAFTAR')">DAFTAR</a><br>
        <a href="login.php">  Login </a> 
    </form> 
    </center>
    </form>
    <br>
    <div class="footer">
        <center>
        <div class="footer-text"> &copy; 2024 SiDosen 2218018</div>
    </center>
    </div>
</body>
</html>