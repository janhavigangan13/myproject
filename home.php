<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
    </div>

    <div class="row">

      <div class="col-sm-4">

      </div>
      <div class="col-sm-4">
        
        <div class="register_form">
         <form action="" method="POST">
  <div class="form-group">
    <label class="label_txt">Full Name</label>
    <input type="text" class="form-control" name="full name" required="" >
  </div>
    
    <div class="form-group">
    <label class="label_txt">Username</label>
    <input type="text" class="form-control" name="username" required="" >
  </div>

  <div class="form-group">
    <label class="label_txt">Email</label>
    <input type="email" class="form-control" name="email" required="" >
  </div>

  <div class="form-group">
    <label class="label_txt">Password</label>
    <input type="password" class="form-control" name="password" required="" >
  </div>
  <div class="form-group">
    <label for="label_txt">Confirm Password</label>
    <input type="password" name="passwordconfirm" class="form-control" required="">
  </div>
  
  <button type="submit" name="register" class="btn btn-primary form_btn">Register</button>
  <p>Have an account? <a href="login.php"></a></p>
</form>
    </div>
  </div>
    <div class="col-sm-4">
    </div>

  </div>
</div>

  <style type="text/css">
body{
  background:#EAE9E5;
}
body  .register_form{
    width: 380px;
    height:550px;
        margin-top:65%;
    margin-left:100%;
      transform: translate {-50%,-50%}
  background:#fff;
  padding: 30px;
  box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
  border-radius:5px;
}
.form_btn{
  background:#fb641b;
  box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
  border:none;
  color:#fff;
  width:100%;
}
.label_txt{
  font-size:12px;
}
.form-control{border-radius:25px}
.errmsg{
  margin: 2px auto;
  border-radius: 5px;
  border: 1px solid red;
  background: pink;
  text-align: left;
  color: brown;
  padding: 1px;
}
  </style>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>