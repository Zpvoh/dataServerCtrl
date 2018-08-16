$(document).ready(function () {
    $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});

    $("#submit").click(function () {
        $.post("addArticle.php",
            {
                name:$("#nameText").val(),
                theme:$("#themeText").val(),
                content:document.getElementById("editor").innerHTML,
                password:$('#passwordText').val(),
                key:$("#keyText").val()
            }, function(data, status) {
                console.log(data);
                $("#nameText").val("");
                $("#themeText").val("");
                $("#passwordText").val("");
                $('#keyText').val("");
                document.getElementById("editor").innerHTML="<p></p>";
            });
    });
});
