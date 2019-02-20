<?php
/**
 * Created by PhpStorm.
 * User: Hart
 * Date: 2019/2/20
 * Time: 11:15
 */
?>
!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>解析接口</title>
    <link href="css/pucms.css" rel="stylesheet">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/pucms.js" type="text/javascript"></script>
</head>
<body style="overflow-y:hidden;">
<div class="panel">
    <a href="javascript:QQ('http://jx.jfysz.cn/jx.php/?url=<?php echo $_GET["url"]; ?>')">【A线】</a>
    <a href="javascript:QQ('http://api.bingdou.net/?url=<?php echo $_GET["url"]; ?>')">【B线】</a>
</div>
<p class="slide">
    <a class="WANG-WANG">播放线路</a></p>
<div style="margin:-36px auto;width:100%;height:100%;">
    <iframe id="WANG" scrolling="no" allowtransparency="true" frameborder="0"
            src="http://jx.jfysz.cn/jx.php/?url=<?php echo $_GET["url"]; ?>"width="100%" scrolling="no" height="100%" align="middle" frameborder="no" hspace="0" vspace="0" allowFullscreen="true" marginheight="0" marginwidth="0" name="tv"></iframe>
    <script type="text/javascript"> function QQ(url) {
            $('#WANG').attr('src', decodeURIComponent(decodeURIComponent(url))).show();
        } </script>
</div>
</body>
</html>
