<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 10%;
            padding-left: 35%;
        }
    </style>
</head>

<body>
    <div class="card col-md-5">
        <div class="card-header text-justify">
            SIGN UP Form
        </div>

            <form method="post" action="proses_sign.php">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="VARCHAR" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
                </div> <br>

                <div class="form-group">
                    <label>Address</label>
                    <input type="VARCHAR" name="address" class="form-control" id="address" placeholder="Masukan Address">
                </div><br>

                <div class="form-group">
                    <label>Email</label>
                    <input type="VARCHAR" name="email" class="form-control" id="email" placeholder="Masukan Email">
                </div><br>

                <div class="form-group">
                    <label>HomePage</label>
                    <input type="VARCHAR" name="homepage" class="form-control" id="homepage" placeholder="Masukan HomePage">
                </div><br>

                <div class="form-group">
                    <label>UserName</label>
                    <input type="VARCHAR" name="username" class="form-control" id="username" placeholder="Masukan Username">
                </div><br>

                <div class="form-group">
                    <label>Password</label>
                    <input type="VARCHAR" name="password" class="form-control" id="password" placeholder="Masukan Password">
                </div><br>

                <button type="submit" name="masuk" class="btn btn-primary">Sign up</button>
            </form>
        </div>
    </div>
</body>

</html>