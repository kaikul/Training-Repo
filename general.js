$(document).ready(function(){
    $("#username").on('change',function(){
        var username=$(this).val();

        $.ajax({
            method:"post",
            url:"co.php",
            data:data,
            datatype:"html",
            success:function(r){
                if(r=="1"){
                    $("#info").html("username already exist");
                }else{
                    $("#info").html("username available");
                }

            }
        })
    })
    $("#email").on('change',function(){
        var email=$(this).val();
        $.ajax({
            method:"post",
            url:"co.php",
            data:data,
            datatype:"html",
            success:function(r){
                if(r==1){
                    $("#info").html("email already exist");
                }else{
                    $("#info").html("email available");
                }
            }
        })
    })
})