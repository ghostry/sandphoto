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
        <style>
            #main{max-width: 550px;margin-left: auto;margin-right: auto;}
            #previewImg{width: 100%;}
            .entry-title{text-align: center;}
            #submit{width: 100%;height: 50px;border-radius: 15px;background-image:#666;color:#fff;font-weight: bold;font-size: 24px;}
            #target_type{width: 100%;}
            #container_type{width: 100%;}
            #filename{width: 100%;}
        </style>
    </head>
    <body>
        <div id="main">
            <h1 class="entry-title">证件照片排版在线生成器</h1>
            <script type="text/javascript">
                /*aria2首页底部通栏*/
                var cpro_id = "u2188749";
            </script>
            <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
            <form id="sandphotoform" action="sandphoto.php" method="POST" enctype="multipart/form-data">
                <strong>第一步</strong>, 选择你要冲洗的证件照片的尺寸：<br />
                <?php $parser->render_select('target_type', 0, 12); ?><br />
                <strong>第二步<strong>, 选择用多大的照片冲洗（一般选择6寸的就好，这个价格最合适）:<br />
                        <?php $parser->render_select('container_type', 12); ?><br />
                        <strong>第三步</strong>, 选择背景颜色：<br />
                        <label><input id="bgcolorid" type="radio" name="bgcolorid" value="blue" checked="checked" /> 蓝色</label>
                        <label><input id="bgcolorid" type="radio" name="bgcolorid" value="white" />白色</label><br />
                        将来的照片就是这个样子的：<br />
                        <img id="previewImg" alt="" /><br />
                        <strong>第四步</strong>, 选择你的证件照片：<br />
                        <input id="filename" type="file" name="filename" /><br />
                        <strong>最后一步</strong>, 点击下载，照片就可以去冲印了：<br />
                        <input type="submit" value="下载" id="submit" /><br />
                        如果你的照片比较大， 上传会花一些时间， 别着急， 请耐心等待。<br /><br />
                        </form>
                        </div><!-- #main -->
                        <script type="text/javascript">
                /*aria2首页底部通栏*/
                var cpro_id = "u2188749";
                        </script>
                        <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
                        <div style="display: none;">
                            <script>
                var _hmt = _hmt || [];
                (function () {
                    var hm = document.createElement("script");
                    hm.src = "//hm.baidu.com/hm.js?66f93ccb2b104821525aafcab2bd85e2";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(hm, s);
                })();
                            </script>
                        </div>
                        </body>
                        </html>

