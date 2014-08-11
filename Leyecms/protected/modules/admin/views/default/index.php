
<div class="portlet-content">

<p>系统类型及版本号：<?php echo php_uname(); ?></p>

<p>PHP运行方式：<?php echo php_sapi_name(); ?></p>

<p>当前进程用户名：<?php echo Get_Current_User(); ?></p>

<p>PHP版本：<?php echo PHP_VERSION; ?></p>

<p>Zend版本：<?php echo Zend_Version(); ?></p>

<p>PHP安装路径：<?php echo DEFAULT_INCLUDE_PATH; ?></p>

<p>Http请求中Host值：<?php echo $_SERVER["HTTP_HOST"]; ?></p>

<p>服务器IP： <?php echo GetHostByName($_SERVER['SERVER_NAME']); ?></p>

<p>接受请求的服务器IP： <?php echo GetHostByName($_SERVER['SERVER_NAME']); ?></p>

<p>客户端IP：<?php echo $_SERVER['REMOTE_ADDR']; ?></p>

<p>服务器解译引擎：<?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>

<p>服务器语言：<?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></p>

<p>服务器Web端口：<?php echo $_SERVER['SERVER_PORT']; ?></p>

</div>