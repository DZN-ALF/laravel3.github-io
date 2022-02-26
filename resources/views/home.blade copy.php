<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <form id="loginform" class="form-vertical no-padding no-margin" action="ceklogin.php" method="post">
        <div class="lock">
            <i class="icon-lock"></i>
        </div>
        <div class="control-wrap">
            <h4>User Login</h4>
            <div class="control-group">
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span><input id="input-username" name="userid" type="text" placeholder="User Id">
                    </div>
                </div>
            </div>
            
            
          
            
            <div class="control-group">
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-key"></i></span><input id="input-password" name="password" type="password" placeholder="Password">
                    </div>
                </div>
            </div>
            
            
              <div class="control-group">
                <div class="controls">
                  <div class="mtop10">
                        <div class="block-hint pull-left small">
                            <input type="checkbox" id=""> Remember Me
                        </div>
                        <div class="block-hint pull-right">
                            <a href="javascript:;" class="" id="forget-password">Forgot Password?</a>
                        </div>
                    </div>
  
                    <div class="clearfix space5"></div>
               
               
               </div>
               </div>
            
            
            
        </div>
  
        <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Login">
      </form>
</body>
</html>