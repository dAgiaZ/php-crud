var imgWidth = 180;
var numImgs = 67;
var cont = 0;
var position = 0
FilePond.setOptions({
    server: '../controllers/spriter.php',
    instantUpload: false
});

$(function(){
    $('#prev').click(function(){
        position -= imgWidth;
        if(cont != numImgs){
            $('#sprite_container img').css('margin-left', position);
            cont++;
        }
    });
    $('#next').click(function(){
        position +=  imgWidth;
        if(cont != numImgs){
            $('#sprite_container img').css('margin-left', position);
            cont++;
        }
    });
    var inputElement = document.getElementById('file_input');
    var pond = FilePond.create( inputElement );

});
