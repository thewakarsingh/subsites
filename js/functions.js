
function openlogin(){


  document.getElementById('login_popup').style.display="block";
  document.getElementById('foreground').style.display="block";
  
  }
  
  
  function closelogin(){
  
  
  document.getElementById('login_popup').style.display="none";
  document.getElementById('foreground').style.display="none";
  
  }
  
  function displaypage(){
  
  
  document.getElementById("loading").style.display="none";
  
  
  }
  
  function clearsearch(){
      document.getElementById('searchfield').value="";
      document.getElementById('searchfield').focus();
  
  }
  
  function printsiteinfoa(temp){
      
      
  var  info='<div class="col-sm-3"><div class="sitebox" style="border:solid 1px #888; border-radius:7px;">'+
                '<a href="http://www.'+temp[1]+'"><img class="card-image sitelogo" src="'+temp[2]+'"alt="'+temp[1]+'" style="width:100%"></a>'+
                '<br><br><div class="container" style="height:40px;"><div class="row">'+
                  '<div class="col col-xs-2"><a value="'+temp[1]+'" onclick="addbookmark(this.value)" class="glyphicon glyphicon-bookmark" style="cursor:pointer;font-size:20px; float:right;"></a>'+
                  '</div><div class="col col-xs-8><h3 style="text-align:center;">'+temp[1]+'</h3>'+
                  '</div><div class="col col-xs-2"><a class="glyphicon glyphicon-star" style="font-size:20px; float:left; text-decoration:none; color:black; " href="site.php?domain_name='+temp[1]+'"></a>'+
  
                '</div></div></div></div></div>';
  
  document.write(info);
  }
  
  