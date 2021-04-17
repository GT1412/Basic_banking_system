<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body>
    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('User created');
                               window.location='transfermoney.php';
                     </script>";
        }
    }
    ?>

    <?php
    include 'navbar.php';
    ?>

    <h2 class="text-center">Create a User</h2>
    <br>
    <div class="screen-body">
        <div class="screen-body-item left">
            <img class="img-solid" src="img/user3.png" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
            <form class="app-form" method="post">
                <div class="app-form-group">
                    <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                </div>
                <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                </div>
                <div class="app-form-group">
                    <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                </div>
                <br>
                <div class="app-form-group button">
                    <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                    <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                </div>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>