

function onSignIn(googleUser) {

   var profile = googleUser.getBasicProfile();
   var email=profile.getEmail();
   var name=profile.getName();
   var pic=profile.getImageUrl();
   location.reload();
   loging(email,name,pic);
  // This is null if the 'email' scope is not present.
 }

 function signOut() {
 
   var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });

 }

 function logout(){

   var ajaxRequest;  // The variable that makes Ajax possible!


try {        
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
} catch (e) {
   
   // Internet Explorer Browsers
   try {
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   } catch (e) {
      
      try {
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
}

// Create a function that will receive data
// sent from the server and will update
// div section in the same page.
ajaxRequest.onreadystatechange = function() {

  if(ajaxRequest.readyState == 4) {

if(ajaxRequest.responseText==1){
   signOut();
   location.reload(); 


            }
      }
   }

   ajaxRequest.open("GET","login/logout.php", true);
      ajaxRequest.send(null);


}
 
function signupa() {  
            var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers 
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
                     var namea = document.getElementById('signuperror');


                  if(ajaxRequest.responseText==1){

                        closelogin();
                     
                        alert("A verification email has been sent to "+email+" please check your email account to verify your subsites account.");
                 //window.location.assign("index.php");

               }
               else
                if(ajaxRequest.responseText==0)
               {
               namea.innerHTML = "We are unable to contact your email. This error occurs when your email id does not exist. Please retry with a new email id.";
                     }
                else
                  namea.innerHTML = ajaxRequest.responseText;

            }
            
            // Now get the value from user and pass it to
            // server script.
            var name= document.getElementById('fullname_s').value;
            var email= document.getElementById('email_s').value;
            var password= document.getElementById('password_s').value;
            

            var queryString ="email="+email;

            queryString +="&name="+name;
               
               queryString +="&password="+password;

            ajaxRequest.open("GET","login/signup.php?" +queryString, true);
            ajaxRequest.send(null);
            
            }



function logina(){

         var ajaxRequest;  // The variable that makes Ajax possible!
         
         try {        
            // Opera 8.0+, Firefox, Safari
            ajaxRequest = new XMLHttpRequest();
         } catch (e) {
            
            // Internet Explorer Browsers
            try {
               ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
               
               try {
                  ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
               } catch (e) {
                  // Something went wrong
                  alert("Your browser broke!");
                  return false;
               }
            }
         }
         
         // Create a function that will receive data
         // sent from the server and will update
         // div section in the same page.
         ajaxRequest.onreadystatechange = function() {
         
           if(ajaxRequest.readyState == 4) {
                var namea = document.getElementById('loginerror');

               namea.innerHTML ='<img src="images/loading.gif">';




                if(ajaxRequest.responseText==1){

                  document.location.reload();
                  }
           else
           {
            
              namea.innerHTML = ajaxRequest.responseText;
              var str=ajaxRequest.responseText;

              if(str=="All fields are required"){
                

                  document.getElementById('email_l').style.borderColor="red";
                  document.getElementById('password_l').style.borderColor="red";

              }
              else
                if(ajaxRequest.responseText=="You are not registered with us. Please signup."){
                

                  document.getElementById('signupbtn').value="red";
                  //document.getElementById('password_l').style.bordercolor="red";

              }
              else
                if(ajaxRequest.responseText=="you entered wrong password. try again!"){
                

                  document.getElementById('password_l').value="red";
                  //document.getElementById('password_l').style.bordercolor="red";

              }

           
           }
         }
      }
         
         // Now get the value from user and pass it to
         // server script.
        
         var email= document.getElementById('email_l').value;
         var password= document.getElementById('password_l').value;
         

         var queryString = "email=" + email;
         queryString +="&password=" + password;

      ajaxRequest.open("GET","login/login.php?" +queryString, true);
         ajaxRequest.send(null);

   
   }


function loging(email,name,pic) { 

      var ajaxRequest;  // The variable that makes Ajax possible!
      
      try {        
         // Opera 8.0+, Firefox, Safari
         ajaxRequest = new XMLHttpRequest();
      } catch (e) {
         
         // Internet Explorer Browsers 
         try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
         } catch (e) {
            
            try {
               ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
               // Something went wrong
               alert("Your browser broke!");
               return false;
            }
         }
      }
      
      // Create a function that will receive data
      // sent from the server and will update
      // div section in the same page.
       ajaxRequest.onreadystatechange = function() {
   
     if(ajaxRequest.readyState == 4) {


            if(ajaxRequest.responseText==1){
              
              
         }
         else
          if(ajaxRequest.responseText==0)
         {
         namea.innerHTML = "Something went wrong with your account.";
               }
          else{
              alert(ajaxRequest.responseText);

          }
}
      }
      
      var queryString ="email="+email;
       queryString +="&name="+name;
       queryString +="&pic="+pic;


      ajaxRequest.open("GET","login/loging.php?" +queryString, true);
      ajaxRequest.send(null);
      
     
     
     
     
      }

function loginfb(email,name,pic) {  

            var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers 
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
             ajaxRequest.onreadystatechange = function() {
         
           if(ajaxRequest.readyState == 4) {


                  if(ajaxRequest.responseText==1){
                  document.location.reload();

               }
               else
                if(ajaxRequest.responseText==0)
               {
               namea.innerHTML = "Something went wrong with your account.";
                     }
                else{
                    alert(ajaxRequest.responseText);

                }
}
            }
            
            var queryString ="email="+email;
             queryString +="&name="+name;
             queryString +="&pic="+pic;


            ajaxRequest.open("GET","login/loginfb.php?" +queryString, true);
            ajaxRequest.send(null);
            
         }



   function quicklook(domain) {  
      var ajaxRequest;  // The variable that makes Ajax possible!
      
      try {        
         // Opera 8.0+, Firefox, Safari
         ajaxRequest = new XMLHttpRequest();
      } catch (e) {
         
         // Internet Explorer Browsers 
         try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
         } catch (e) {
            
            try {
               ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
               // Something went wrong
               alert("Your browser broke!");
               return false;
            }
         }
      }
      
      // Create a function that will receive data
      // sent from the server and will update
      // div section in the same page.
      ajaxRequest.onreadystatechange = function() {
      

            if(ajaxRequest.readyState == 4){

           
              document.getElementById('quicklookbody').innerHTML=ajaxRequest.responseText;

         }
        

      }
      
      // Now get the value from user and pass it to

      var queryString ="domain="+domain;

      ajaxRequest.open("GET","php/quicklook.php?" +queryString, true);
      ajaxRequest.send(null);
      
      }


   
 function searchsuggestion(text){

               var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState == 4) {

                  document.getElementById('searchsugg').style.Display="block";

                     document.getElementById('searchsugg').innerHTML=ajaxRequest.responseText;

               
               }
            }
         
            queryString = "q="+text;

            ajaxRequest.open("GET", "php/searchsuggestion.php?" +queryString, true);
            ajaxRequest.send(null);
}


 function show_tutorials(domain){

               var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState == 4) {

                     document.getElementById('tutorials').innerHTML=ajaxRequest.responseText;
               
               }
            }
         
            queryString = "q="+domain;

            ajaxRequest.open("GET", "php/showtutorials.php?" +queryString, true);
            ajaxRequest.send(null);
}

 function liketutorial(domain){

               var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState == 4) {

                     document.getElementById('tutorials').innerHTML=ajaxRequest.responseText;
               
               }
            }
         
            queryString = "q="+domain;

            ajaxRequest.open("GET", "php/showtutorials.php?" +queryString, true);
            ajaxRequest.send(null);
}



function add_comment(comment,domain){     
            var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState == 4) {

                     if(ajaxRequest.responseText=="0")
                     {
                           openlogin();

                     }
                     else{

                        show_comments(domain);
                  
               }
               
               }
            }
         
            
            queryString =  "comment="+comment;

            queryString +="&domain="+domain;

            ajaxRequest.open("GET", "php/add_comment.php?" +queryString, true);
            ajaxRequest.send(null);
            
            }


function add_reply(){     
            var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState == 4) {

                     if(ajaxRequest.responseText==0)
                     {
                           login_popup();

                     }
                     else{

                        show_comments(domain);
                  
               }
               
               }
            }
            
            // Now get the value from user and pass it to
            // server script.
            var comment =document.getElementById('comment_box').value;
            var domain=document.getElementById('domain_name_site').value;
         
            
            queryString =  "comment="+comment;

            queryString +="&domain="+domain;

            ajaxRequest.open("GET", "php/add_comment.php?" +queryString, true);
            ajaxRequest.send(null);
            
            }




function show_comments(domain){    
            var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState == 4) {
                  var a=document.getElementById("comments");

                     a.innerHTML="hello";

                   a.innerHTML=ajaxRequest.responseText;
               }
            }
            
            // Now get the value from user and pass it to
            // server script.
          
            queryString =  "domain="+domain;


            ajaxRequest.open("GET", "php/show_comments.php?" +queryString, true);
            ajaxRequest.send(null);
            
            } 


function show_bookmarks(){     
            var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState == 4) {
                  document.getElementById("bookmrk").innerHTML=ajaxRequest.responseText;
              
               }
            }
            
            // Now get the value from user and pass it to
            // server script.


            ajaxRequest.open("GET", "php/show_bookmarks.php", true);
            ajaxRequest.send(null);
            
            } 



            //Browser Support Code
function addbookmark(domainname){  
            var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState == 4) {

                if (ajaxRequest.responseText=="0") {
                  show_bookmarks();
                  alert(domainname+" removed from bookmark.");
                

                }
                else
                  if (ajaxRequest.responseText=="1") {
                     show_bookmarks();
                  alert(domainname+" added to bookmark.");
                 
                  
                }

                else
                  {
                    openlogin();
                   
                  }
               
               }
            }
            
            // Now get the value from user and pass it to
            // server script.
            
            queryString ="domain="+domainname;

            ajaxRequest.open("GET", "php/add_faveroit.php?" +queryString, true);
            ajaxRequest.send(null);
            
            }



function previewlogo(){
   var str=document.getElementById("url_name").value;
          if (str.length == 0) { 
              document.getElementById("logopreview").innerHTML = str.length;
              return;
          }
           else {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                      document.getElementById("logopreview").innerHTML = "<img src=\""+xmlhttp.responseText+"\" style=\"height:60px;width:60px;\">";
                      document.getElementById("logosrc").value = xmlhttp.responseText;
                  }
              };
              xmlhttp.open("GET", "../php/showlogopreview.php?q=" + str, true);
              xmlhttp.send();
          }
      }

function findcategory() {
   var str=document.getElementById("url_name").value;
          if (str.length == 0) { 
              document.getElementById("category").innerHTML = "";
              return;
          }
           else {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                      document.getElementById("category").value = xmlhttp.responseText;
                  }
              };
              xmlhttp.open("GET", "../php/findcategory.php?q=" + str, true);
              xmlhttp.send();
          }
   }  

   function finddescription() {
   var str=document.getElementById("sitename").value;
          if (str.length == 0) { 
              document.getElementById("description").innerHTML = "";
              return;
          }
           else {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {


                      var regX = /(<([^>]+)>)/ig;
                      var regX=xmlhttp.responseText.replace(regX, "");

                     regX.replace(/ *\[[^)]*\] */g, "");
                      
                      document.getElementById("description").innerHTML = regX;
                  }
              };
              xmlhttp.open("GET", "../php/finddescription.php?q=" + str, true);
              xmlhttp.send();
          }
   }    


   function printsiteinfo(rank){
     
      var ajaxRequest;  // The variable that makes Ajax possible!
      
      try {        
         // Opera 8.0+, Firefox, Safari
         ajaxRequest = new XMLHttpRequest();
      } catch (e) {
         
         // Internet Explorer Browsers
         try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
         } catch (e) {
            
            try {
               ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
               // Something went wrong
               alert("Your browser broke!");
               return false;
            }
         }
      }
      
      // Create a function that will receive data
      // sent from the server and will update
      // div section in the same page.
      ajaxRequest.onreadystatechange = function() {
      
         if(ajaxRequest.readyState == 4) {
            var a=document.getElementById("sitedata");
            var b=document.getElementById("sitedata").innerHTML;

             a.innerHTML=b+ajaxRequest.responseText;

             return 1;
         }
      }
      
      // Now get the value from user and pass it to
      // server script.


      ajaxRequest.open("GET", "../php/printsitedata.php?rank="+rank, true);
      ajaxRequest.send(null);
      
      } 