

function verifyd(){
var vcode=document.getElementById("vcode").value;
var uidd=document.getElementById("uiddf").value;  
 var newmessage=vcode.replace(/<script>/gi,"");
  var newmessage2=newmessage.replace(/[>]/gi,"");
    var newmessage3=newmessage2.replace(/[<]/gi,"");  
      var newmessage4=newmessage3.replace(/alert/gi,"");  
     var newmessage5=newmessage4.replace(/[#]/gi,"");    

var xmd=new XMLHttpRequest();
    xmd.onreadystatechange=function(){
        if(xmd.status==200 && xmd.readyState==4){
            document.getElementById("aseed").innerHTML=xmd.responseText;
        }
    }
    xmd.open("GET","verifyemail.php?vcode="+newmessage5+"&uid="+uidd,true);
    xmd.send();    
    }


function delmes(mesid){
swal({
  title: "هل أنت متأكد من رغبتك فى حذف هذه الرسالة؟",
  text: "بمجرد الحذف لن تستطع استرجاع الرسالة",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      var xxxx=new XMLHttpRequest();
    xxxx.onreadystatechange=function(){
        if(xxxx.status==200 & xxxx.readyState==4){
           $("#mmmm"+mesid).remove(); 
        }
    }
xxxx.open("GET","remo.php?mesid="+mesid,true);
  xxxx.send();
    swal("تم حذف الرسالة بنجاح", {
      icon: "success",
    });
  } else {
    swal("لم يتم الحذف");
  }
});
  
  
    
    
}

$(document).ready(function(){
   $('#formdis').click(function(){
      $('#sdshow').show(); 
   }); 
});
$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "perded.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#loading').hide();
$("#message").html(data);
}
});
}));

// Function to preview image after validation
$(function() {
$("#file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '160px');
$('#previewing').attr('height', '100px');
   
};
});



$('input').focus(function(){
   $('.footed').addClass('hide-footer'); 
});

$('input').focusout(function(){
   $('.footed').removeClass('hide-footer'); 
});


$('textarea').focus(function(){
   $('.footed').addClass('hide-footer'); 
});

$('textarea').focusout(function(){
   $('.footed').removeClass('hide-footer'); 
});