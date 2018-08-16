$(document).ready(function () {
    var cover_img="";
    $("#cover").fileinput({
        'showUpload':true,
        'allowedFileTypes':'image',
        'allowedFileExtensions' : ['jpg', 'png','gif'],
        'previewFileType':'image',
        'uploadUrl':'uploadCover.php',
    });

    $("#cover").on("filepreupload", function (e, data, pid, index) {
        cover_img="covers/"+data['filenames'][0];
    })

    $("#submit").click(function () {
        $.post("addArticle.php", {
            "name": $("#nameText").val(),
            "theme": $("#themeText").val(),
            "content": document.getElementById("editor").innerHTML,
            "description": $("#description").val(),
                "cover_img": cover_img,
            "password": $('#passwordText').val(),
            "key": $("#keyText").val()
            },
            function(data, status) {
                console.log(data);
                $("#nameText").val("");
                $("#themeText").val("");
                $("#passwordText").val("");
                $('#keyText').val("");
                $("#description").val("");
                document.getElementById("editor").innerHTML="<p></p>";
            });
    });
});
