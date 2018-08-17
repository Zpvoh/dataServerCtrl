var password=getCookie("ps");
var key=getCookie("key");
var cover_img="";

function sendRequest() {
    if(password=="" || key==""){
        password=prompt("Please input the password");
        key=prompt("Please input the key");
        setCookie("ps", password, 1);
        setCookie("key", key, 1);
    }

    cover_img=$("#cover_path").attr("name");
    $.post("update.php", {
            "id": $("#body").attr("name"),
            "name": $("#nameText").val(),
            "theme": $("#themeText").val(),
            "content": document.getElementById("editor").innerHTML,
            "description": $("#description").val(),
            "cover_img": cover_img,
            "password": password,
            "key": key
        },
        function(data, status) {
            console.log(data);
            //alert(data);
        });
}

function tick(){

}

$(document).ready(function () {
    $("#cover").fileinput({
        'showUpload':true,
        'allowedFileTypes':'image',
        'allowedFileExtensions' : ['jpg', 'png','gif'],
        'previewFileType':'image',
        'uploadUrl':'uploadCover.php',
        'initialPreview':"<img src='"+$("#cover_path").attr("name")+"'>"
    });

    $("#cover").on("filepreupload", function (e, data, pid, index) {
        $("#cover_path").attr("name", "covers/"+data['filenames'][0]);
        //cover_img="covers/"+data['filenames'][0];
    });

    $("#submit").click(sendRequest);

    setInterval(sendRequest, 30000);
});
