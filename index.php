<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Paystack</title>
</head>

<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      PAYSTACK
    </a>
  </div>
</nav>

    <div class ="container-sm">
<form class="row g-3" method ="post" action ="redirect.php">
<div class="col-auto">
    <label for="" class="">Email</label>
    <input type="email" class="form-control" name="email" placeholder="johndoe@gmail.com">
  </div>
  <div class="col-auto">
    <label for="" class="">Amount</label>
    <input type="number" class="form-control" id="" name = "amount" placeholder="Amount">
  </div>
  <div class="col-auto" style ="margin-top: 40px">
    <button type="submit" class="btn btn-primary mb-3">Pay</button>
  </div>
</form>
</div>
    
</body>
</html>