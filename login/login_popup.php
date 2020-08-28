<script type="text/javascript">
function signOut() {
 
 var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function () {
    console.log('User signed out.');
  });

}
</script>
<!-- fb login api  start -->
<script src="../js/ajax_functions.js"></script>





    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=2345358899113828&autoLogAppEvents=1"></script>
<script>

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{2345358899113828}',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : '{v4.0}'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };

  
  (function(d, s, id) {                      // Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    FB.api('/me', function(response) {
        
        FB.api(response.id,'GET',{"fields":"email,name,id,picture"},
          function(response) {
             loginfb(response.email,response.name,response.picture);
          }
            );
    });
  }

</script>
 
<div id="stat" ></div>
<div class="loginpopup panel custompanel" >
           <div class="panel-heading">Subsites login pannel <button onclick="closelogin()" class="close-button">X</button></div>
 <center>         
 <div class="panel-body" >
      <ul class="nav nav-tabs" data-tabs="tabs">
<li class="active col-xs-6" id="loginbtn"><a href="#login" data-toggle="tab"><span style="font-size:20px;">Login</span></a></li>
<li class="col-xs-6" id="signupbtn"><a href="#signup" data-toggle="tab"><span style="font-size:20px;">Signup</span> </a> </li>

  </ul>

  <div class="tab-content" style=" align-items:center; justify-content:center;">
      <div class="tab-pane active" id="login">
        <div class="row">
          <div class="col-sm-12">
            <div class="alert alert-info" style="text-align: center;">
              <strong>Login! </strong>Enter your registerd email id and password to login.
            </div>

            <div>
              
             <div class="inner-addon left-addon">
                   <i class="glyphicon glyphicon-user inner-addon"></i>
                   <input type="email" id="email_l" name="email" class="textfield form-control input-md" placeholder="username" required>
              </div>                          
              
             <br> 
             <div class="inner-addon left-addon">
                   <i class="glyphicon glyphicon-lock inner-addon"></i>          
                   <input Type="password" id="password_l" class="textfield form-control input" name="password" required placeholder="password">
             </div>
         
             
             <span><a style="margin-right:60%; font-size:13px;"  href="forgot password/">Forgot Password?</a></span>
             
             <br><span id="loginerror" style="color:red;font-size:13px;"><br>
             </span><br><br>
                <button onclick="logina()" type="submit" class="btn btn-lg btn-success" value="Login" style=" cursor:pointer; align-self:center;">login</button>
              <br><br><h4>or</h4>
                
             <div>
                 <div class="g-signin2" data-onsuccess="onSignIn" data-theme="light" style="width:250px;height:37px; font-size:100px;" value="Continue with Google">
                    
                 </div>
             </div>
             <div>
             <br><br>
            <div class="fb-login-button" data-width=""  data-scope="public_profile" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="true"
                onlogin="checkLoginState();"></div>
             </div>
             <br><br>             <br><br>

      </div>
      </div>
   
    </div>
    </div>

      <div class="tab-pane" id="signup">
        <div class="row">
          <div class="col-sm-12">

            <div class="col-sm-12 alert alert-info" style="text-align: center;">
              <strong>Signup! </strong>Provide follwing details to signup.
            </div>

            <div>
               <div class="inner-addon left-addon">
               <i class="glyphicon glyphicon-user inner-addon"></i>

                 <input type="text" class="textfield form-control" id="fullname_s" name="name" placeholder="full name">
                      </div><br>

                <div class="inner-addon left-addon">
                 <i class="glyphicon glyphicon-user inner-addon"></i>
                 <input type="email" class="textfield form-control" id="email_s" name="email" required placeholder="email id">
                </div><br>

                <div class="inner-addon left-addon">
                 <i class="glyphicon glyphicon-lock inner-addon"></i>
                 <input type="password" class="textfield  form-control" id="password_s" name="password" required placeholder="password">
                </div><br>
                      
                <div class="text text-danger" id="signuperror" style="text-align: center;"></div><br>
                  <button class="btn btn-lg btn-success" onclick="signupa()" value="signup" style="align:center">  signup
                  </button> <br><h4>or</h4><br>
                
                  <div>
                  <div class="g-signin2" data-onsuccess="onSignIn" data-theme="light" style="width:250px;height:37px; font-size:100px;" value="Continue with Google">
                     
                 </div>
             </div>
             <br><br>
             <div>
            <div class="fb-login-button" data-width=""  data-scope="email" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="true"
                onlogin="checkLoginState();"></div>
             </div>
              
             
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div></center>