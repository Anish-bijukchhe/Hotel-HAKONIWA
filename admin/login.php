<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/admincss.css">
    <title>Document</title>
</head>

<body>
    <section class=loginPanel>
        <h1>
            Welcome Admin
        </h1>

        <form>
            <div class="mb-6">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email and password with anyone else.</div>
            </div>
            <div class="mb-6">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    <section class="board">
        <a href="../web/index.php"><img src="../images/logo.png" alt="hotel image"></a>
        <ul style="margin:20px;padding:30px;">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Booking.com</a></li>
            <li><a href="#">Expedia</a></li>

        </ul>

    </section>

</body>

</html>