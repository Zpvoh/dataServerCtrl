$(document).ready(function () {
    $("#submit").click(function () {
        $.post("addArticle.php",
            {
                name:$("#nameText").val(),
                theme:$("#themeText").val(),
                content:$("#contentText").val()
            },function (data, status) {
                console.log(data);
            });
    });
});
