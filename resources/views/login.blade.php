
<section>
        <style>
            *{
    margin:5px;
    padding:5px;
    font-family: sans-serif;
}
body{
    background-color: #999999;
}
.whole{
    background-color: #fff;
    margin-top: 130px !important;
    border:0px solid black;
    width:25%;
    margin:auto;
    box-shadow: -8px 14px 12px -1px rgba(0,0,0,0.74);
-webkit-box-shadow: -8px 14px 12px -1px rgba(0,0,0,0.74);
-moz-box-shadow: -8px 14px 12px -1px rgba(0,0,0,0.74);
}
.login{
    font-size: 30px;
    text-align: center;
    color: #fff;
    border: 0px solid black;
    background-image: linear-gradient(to right top, #006600, #0a590b, #114b11, #143f15, #163216);
    width:98%;
    margin-left: -7px;
    margin-top: -5px;
    height: 40px;
    padding: 10px;
}

.box{
    margin-left: -20px;
}
.form-group{
    font-size: 16px;
    color:#000;
    
}
.form-control{
    width:100%;
}
.btn{
    background-image: linear-gradient(to right top, #006600, #0a590b, #114b11, #143f15, #163216);
    color:#fff;
    height: 40px;
    width: 100%;
    margin-top: 15px;
    margin-left: 15px;
    border-radius: 7px;
}
label[for=email]{
    margin-right:360px;
}
label[for=pwd]{
    margin-right:360px;
}
input[type="text"]{
    padding: 8px;
    border-radius: 7px;
}
input[type="password"]{
    padding: 8px;
    border-radius: 7px;
}
    
</style>
  
        <div class="whole">
    <h1 class="login" id="login/reg">LOG IN</h1> 

   <div class="box" id="login" style="display:block">
    
    <form action="login" method="post">
    {{ csrf_field() }}
          <div class="form-group">
            <label for="email">Email:</label><br>
             <input type="text" class="form-control" placeholder="Enter your username" value="" name="email">
          </div>
          <div class="form-group">
          <label for="pwd">Password:</label><br>
          <input type="password" class="form-control" placeholder="Enter your password" id="pwd" value="" name="password">
          </div>
          <div class="remember">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me<br>
          </div>

        
  <button type="submit"class="btn">Login</button> 
  </form>
   </div>
   </div>
  
   

</section>