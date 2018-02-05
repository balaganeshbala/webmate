function chooseFile() {
    $("#fileInput").click();
}

function refreshList(){
    $.ajax({
        url: "fetch.php",
        method: "GET",
        dataType: 'json',
        success: function(data, textStatus, jqXHR) {
            $list = $('.sidebar ul');
            $list.empty();
            $.each( data, function( key, val ) {
                $list.append("<li><a href='"+val[0]+"' target='_blank'>"+val[1]+"</a></li>");
            });
        }
    });
}

$(document).ready(function (){

    refreshList();
    
    $(".upload-button").click(function (){
        chooseFile();
    });
    
    $("#fileInput").change(function (){
        var bar = $('.bar');
        var percent = $('.percent');
        var status = $('#status');
        
        $('#upload-form').ajaxForm({
            target: '.upload-result',
            beforeSubmit:function(e){
                $('.upload-button').hide();
                $('.progress').show();
                
                status.empty();
                var percentVal = '0%';
                bar.width(percentVal);
                percent.html(percentVal);
            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
                bar.width(percentVal);
                percent.html(percentVal);
                        //console.log(percentVal, position, total);
            },
            success:function(e){
                var percentVal = '100%';
                bar.width(percentVal);
                percent.html(percentVal);
                $('.progress').fadeOut('slow');
                $('.upload-button').show();
                refreshList();
            },
            error:function(e){
                alert("Upload failed");
            }
        }).submit();
    });
    
});