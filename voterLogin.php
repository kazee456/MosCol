<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= initial-scale=1.0">
    <title>Register/Login</title>
     <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="forms.css">
     <style>
      body{text-align:center;}
      
    </style>
</head>
<body>

<div class="form">
    <form action="action.php" method="post">
    <label for="firstName">FIRST NAME:</label>
    <input type="text" id="firstName" name="firstName" placeholder="" required>
     <label for="middleName">MIDDLE NAME:</label>
    <input type="text" id="middleName" name="middleName" placeholder="" required>
    <label for="surName">SURNAME:</label>
    <input type="text" id="surName" name="surName" placeholder="" required>
    <label for="idNumber">ID NUMBER:</label>
    <input type="text" id="idNumber" name="idNumber" placeholder="" required>
    <label for="password">PASSWORD:</label>
    <input type="text" id="password" name="pwd" placeholder="" required>
    <input type="submit" value="login" class="submit">
    </form>
</div>
<h4 style="text-align:center"><a href="voter_registration.php">click to register as voter</a></h4>


</body>
</html>



