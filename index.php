<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <form class="col-md-6 offset-md-3" action="makepdf.php" method="POST">
                <h1>Create your Own PDF</h1>
                <p>Fill out details below and PDF Will Generate</p>

                <div class="row mb-2">

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="fname" placeholder="First Name" autocomplete="off" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control"  name="lname" placeholder="Surame" autocomplete="off" required>
                    </div>

                </div>

                <div class="mb-2">
                    <input type="email" class="form-control"  name="email" placeholder="Email" autocomplete="off" required>
                </div>

                <div class="mb-2">
                    <input type="tel" class="form-control"  name="phone" placeholder="Phone" autocomplete="off" required>
                </div>
                <div class="mb-2">
                    <textarea name="message" class="form-control"  placeholder="Your Message"></textarea>
                </div>
                <button class="btn btn-success btn-lg btn-block" type="submit">Create PDF</button>
                

        </form>
    </div>


    
</body>
</html>