<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="btn-home" style="background-color: grey;margin: auto;height: 45px;display: flex;align-items: center;justify-content: end" >
    <a class="btn btn-outline-light bi bi-house" href="/"></a>
</div>
<div class="sing-in-form">
    <form action="" method="post">
        <div class="col-md">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="login" required>
        </div>
        <br>
        <div class="col-md">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-login" name="click">Log In</button>
        </div>
        <div>
            <a href=""> You haven`t account? </a>
        </div>
    </form>
</div>
</body>
</html>