function clearsearch(){

    document.getElementById('searchfieldm').value="";
    document.getElementById('searchfieldm').focus();
  
}

$(document).ready(function(){
    $("#drop-btn").click(function(){
        $(".dropdown").slideToggle();
        $("#dropdownbackground").toggle();
    });
});

$(document).ready(function(){
    $("#dropdownbackground").click(function(){
        $(".dropdown").slideToggle("fast");
        $("#dropdownbackground").slideToggle("fast");
    });
});
$(document).ready(function(){
    $("#options,#close-option,#sidenavclose,#sidenavbackground").click(function(){
        $("#mySidenav").slideToggle("fast");
        $("#sidenavbackground").SlideToggle("fast");
 });
});

$(document).ready(function(){

    $("#srch-btn").click(function(){
        $("#searchbar").slideDown("fast"); 
        document.getElementById('searchfieldm').focus();
        document.getElementById("searchsugg").style.display="block";
       });
});
$(document).ready(function(){

    $("#close-searchbar").click(function(){
        $("#searchbar").slideUp("fast"); 

        document.getElementById("searchsugg").style.display="none";
    });
});

$(document).ready(function(){
    $("#foreground").click(function(){
        $("#login_popup").slideToggle("fast");
        $("#foreground").slideToggle("fast");
    });
});

$(document).ready(function(){
    $(".quicklooktoggle").click(function(){
        $("#quicklook").slideToggle("fast");
        
    });
});
