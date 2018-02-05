$(document).ready(function(){

    $(function(){
        $.ajax({
            url: "fetch.php",
            method: "GET",
            dataType: 'json',
            success: function(data, textStatus, jqXHR) {
                $list = $('.sidebar ul');
                $.each( data, function( key, val ) {
                    $list.append("<li><a href='files/"+val[0]+"' target='_blank'>"+val[0]+"</a></li>");
                });
            }
        });
    });

    $(".save").click(function(){
        var content=$("#content-box").val();
        var filename=$("#file-name").val();
        if(content.trim(' ')==="" || filename.trim(' ')===""){
            displayResult("*Fields should not be empty","red");
            return false;
        }
        else{
            $.ajax({
                url: "creator.php",
                type: 'POST',
                data: {content:content, filename:filename},
                dataType: 'text',
                success: function(data) {
                    if(data==="false"){
                        displayResult("*File name already exist","red");
                    }
                    else{
                        displayResult("Saved successfully","green");
                        $(".reset").click();
                        $list = $('.sidebar ul');
                        var obj = jQuery.parseJSON(data);
                        $list.append("<li><a href='files/"+obj.file_name+"' target='_blank'>"+obj.file_name+"</a></li>");
                    }
                },
                error: function (data){
                    displayResult("*Process failed","red");
                }
            });
        }
    });
    
    function displayResult(text,color){
        $res = $(".result");
        $res.text(text);
        $res.css({"color":color});
        setTimeout(function (){
            $res.fadeOut("1000");
        },3000);
        $res.show();
    }
    
    
    $(".creator-form").submit(function (){
        return false;
    });
});