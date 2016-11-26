@extends('layouts.app')

@section('content')

<div class="container">

     <form class="form-signin">
       <h2 class="form-signin-heading">Register</h2>
       <label for="inputEmail" class="sr-only">Name</label>
       <input type="name" id="inputName" class="form-control" placeholder="Name" required autofocus>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
       <label for="inputPassword" class="sr-only">Password</label>
       <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
       <div class="checkbox">
         <label>
           <input type="checkbox" value="remember-me"> Remember me
         </label>
       </div>
       <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
     </form>

   </div> <!-- /container -->


@endsection
