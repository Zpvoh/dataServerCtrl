<?php
header("content-type:text/html; charset=utf-8");

$host='localhost:3306';
$user='root';
$hmac_info='651d52949a7a05a5071b4d30a820805cec4b62887763efd42656e0df9c7b064a';
$pass=$_COOKIE['ps'];
$key=$_COOKIE['key'];
if(hash_hmac('ripemd256', $pass, $key)!=$hmac_info){
    echo "Invalid password or key";
    exit();
}

$db=new mysqli($host, $user, $pass, "articles");
if($db->connect_errno){
    echo "There is no such database.";
    exit();
}

$id=$_GET['id'];
$query="select * from articles where id={$id}";
$result=$db->query($query);
$article=$result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" href="css/bulma.min.css"/>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.0/mini-default.min.css">
    <link rel="stylesheet" href="Trumbowyg-master/dist/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="css/cover.css">
    <link rel="icon" href="easyicon.ico">
    <script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/css/fileinput.min.css" media="all"
          rel="stylesheet" type="text/css"/>
    <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
    <!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
    <!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
        wish to resize images before upload. This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/piexif.min.js"
            type="text/javascript"></script>
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
        This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/sortable.min.js"
            type="text/javascript"></script>
    <!-- purify.min.js is only needed if you wish to purify HTML content in your preview for
        HTML files. This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/plugins/purify.min.js"
            type="text/javascript"></script>
    <!-- popper.min.js below is needed if you use bootstrap 4.x. You can also use the bootstrap js
       3.3.x versions without popper.min.js. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
        dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            type="text/javascript"></script>
    <!-- the main fileinput plugin file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/fileinput.min.js"></script>
    <!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/themes/fa/theme.js"></script>
    <!-- optionally if you need translation for your language then include  locale file as mentioned below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.9/js/locales/(lang).js"></script>

    <script src="Trumbowyg-master/dist/trumbowyg.min.js"></script>
    <script src="Trumbowyg-master/dist/langs/zh_cn.min.js"></script>
    <script src="js/handleCookie.js"></script>
    <script src="js/modify.js"></script>
    <title>编辑文章</title>
</head>
<body name="<?php echo $id ?>" id="body">

<input type="checkbox" id="changeInfo" class="modal">
<div>
    <div class="card">
        <label for="changeInfo" class="modal-close" ></label>

        <div id="article" name="article" action="" method="post">
                题目：
                <input type="text" name="name" class="col-sm-10" id="nameText" value="<?php echo $article['title']?>"><br>
                主题风格：
                <input type="text" name="theme" class="col-sm-10" id="themeText" value="<?php echo $article['theme']?>">
            <div>
                描述：
                <textarea class="col-sm-10" id="description"><?php echo $article['description']?></textarea>
            </div>
        </div>

    </div>
</div>

<input type="checkbox" id="changeCover" class="modal">
<div>
    <div class="card" id="changeCoverCard">
        <label for="changeCover" class="modal-close" ></label>
        <section id="coverSection"><input id="cover" name="cover" type="file" class="col-sm-10"></section>
    </div>
</div>

<span name="<?php echo $article['cover_img']?>" id="cover_path"/>



<h1>
    <?php echo $article['title']?>
</h1>

<div id="form">
    <div id="editor">
        <?php echo $article['content']?>
    </div>
</div>

<input type="button" class="button secondary col-sm-1" id="submit" value="提交">
<label for="changeInfo" class="button primary col-sm-1">修改信息</label>
<label for="changeCover" class="button primary col-sm-1">更改封面</label>


<script>
    $('#editor').trumbowyg({
        lang: 'zh-cn',
        btns: [
            ['undo', 'redo'], // Only supported in Blink browsers
            ['viewHTML'],
            ['formatting'],
            ['strong', 'em'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ]
    });

</script>

</body>
</html>
