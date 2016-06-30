<?php
include("sandphoto.inc");
$parser = new PhotoTypeParser();
$parser->parse('phototype.txt');
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8" />
        <title>证件照片在线生成器</title>
        <script type="text/javascript" src="jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="sandphoto.js"></script>
    </head>
    <body class="page page-id-15 page-template-default">
        <div id="wrapper" class="hfeed">
            <div id="main">
                <div id="container">
                    <div id="content" role="main">
                        <div id="post-15" class="post-15 page type-page status-publish hentry">
                            <h1 class="entry-title">证件照片排版在线生成器</h1>
                            <div class="entry-content">
                                <form id="sandphotoform" action="sandphoto.php" method="POST" enctype="multipart/form-data">
                                    <strong>第一步</strong>, 选择你要冲洗的证件照片的尺寸：<br />
                                    <?php $parser->render_select('target_type', 0, 12); ?><br />
                                    <strong>第二步<strong>, 选择用多大的照片冲洗（一般选择6寸的就好，这个价格最合适）:<br />
                                            <?php $parser->render_select('container_type', 12); ?><br />
                                            <strong>第三步</strong>, 选择背景颜色：<br />
                                            <input id="bgcolorid" type="radio" name="bgcolorid" value="blue" checked="checked" /> 蓝色
                                            <input id="bgcolorid" type="radio" name="bgcolorid" value="white" />白色<br />
                                            将来的照片就是这个样子的：<br />
                                            <img id="previewImg" alt="" /><br />
                                            <strong>第四步</strong>, 选择你的证件照片：<br />
                                            <input id="filename" type="file" name="filename" /><br />
                                            <strong>最后一步</strong>, 点击下载，照片就可以去冲印了：<br />
                                            <input type="submit" value="下载" /><br />
                                            如果你的照片比较大， 上传会花一些时间， 别着急， 请耐心等待。<br />
                                            </form>
                                            </div><!-- .entry-content -->
                                            </div><!-- #post-## -->
                                            </div><!-- #content -->
                                            </div><!-- #container -->
                                            </div><!-- #main -->
                                            </div><!-- #wrapper -->
                                            </body>
                                            </html>
