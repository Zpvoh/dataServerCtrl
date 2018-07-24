$(document).ready(function () {
    $("#submit").click(function () {
        $.post("addArticle.php",
            {
                name:$("#nameText").val(),
                theme:$("#themeText").val(),
                content:document.getElementById("editor").innerHTML
            },function (data, status) {
                console.log(data);
                $("#nameText").val("");
                $("#themeText").val("");
                document.getElementById("editor").innerHTML="";
            });
    });
});
