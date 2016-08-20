<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="/Application/Home/Public/Js/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="/Application/Home/Public/Js/jquery.validate.js"></script>
        <script src="/Application/Home/Public/Js/messages_zh.js"></script>
        <script src="/Application/Home/Public/Js/base.js"></script>
        <style>
            *{
                margin:0px;
            }
            .left{
               float:left;
               border:1px solid #eee;
               background: rgb(59,74,89);
               width:15%;
               height:1200px;
            }
            .right{
               float:right;
               border:1px solid #eee;
               height:1200px;
               width:85%;
            }
            .img{
                position:absolute;
                top:20px;
                left:30px;
            }
            #menu{
                position: absolute;
                top:100px;
                width:197px;
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="left">
                <img src="/Public/img/head.png" class="img"> 
                <span style="color:#f7ecb5;position: absolute;top:35px;left:90px;">姗姗</span>
                 <div id="menu" class="list-group">
               
                        <a class="act list-group-item active" >全部文件</a>
                        <div>
                                <span name='index/user' class="list-group-item">1111</span>
                                <span name='index/useradd' class="list-group-item">2222</span>       
                        </div> 
                        <a class="act list-group-item active" >已发文件</a>
                        <div>
                                <span class="list-group-item">111</span>
                                <span class="list-group-item">1111</span>
                        </div> 
                        <a class="act list-group-item active" >已收文件</a>
                        <div>
                                <span class="list-group-item">留言</span>
                               <span class="list-group-item">留言</span>       
                        </div> 
                        
            </div>
                    
                 
            </div>
            <div class="right">
                <img src="/Public/img/3956DC7F-EBCD-4403-9041-B004D307DE27@1x.png" alt="">
                <form action="<?php echo U('home/index/search');?>" style='margin:60px;'>
                    <input type="text" value="" style='border-radius: 30px;' name='sear'>
                    <img src="/Public/img/search.png" alt="" width='30px' >
                </form>
                 <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="table-responsive cl">
                     <table  class="table table-bordered table-hover">
                         <tr　>
                             <th class='css'>姓名</th>
                             <th class='css'>电话</th>
                             <th class='css'>添加时间</th>
                             <th class='css'>团队</th>

                         </tr>
                         <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                             <td class='css'><?php echo ($v["uname"]); ?></td>
                             <td class='css'><?php echo ($v["phone"]); ?></td>
                             <td class='css'><?php echo (date("y-m-d H:i",$v["addtime"])); ?></td>
                             <td class='css'><?php echo ($v["team"]); ?></td>

                         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                     </table>

                 </div>
                    </div>

                </div>
    </body>
</html>