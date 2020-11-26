@extends('layouts.app')
@section('content')
{{-- <?php
    $url="localhost/phpmyadmin/";
    $username='root';
    $password='';
    $database_name="jinhaumusicshop";
    $conn=mysqli_connect($url,$username,$password,$database_name);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>
<script language="javascript">
    function signup_check() {
        // Email value
        if (document.signup_form.email.value=="") {
            alert("Please Enter your Email Address");
            document.signup_form.email.focus();
            return false;
        }

        e = document.signup_form.email.value;
        f1 = e.indexOf('@');
        f2 = e.indexOf('@', f1+1);
        e1 = e.indexOf('.');
        e2 = e.indexOf('.', e1+1);
        n = e.length;

        if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1)) {
            alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
        }

        // Password value
        if(document.form1.password.value=="") {
            alert("Plese Enter Your Password");
	        document.form1.password.focus();
	        return false;
        }

    }
</script> --}}


<form class="form-signin" name="signup_form" method="POST" onsubmit="return ckeck();">
  <img class="mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020, jinhau</p>
</form>
@endsection

