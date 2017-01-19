<?php /* Smarty version 3.1.27, created on 2016-01-14 20:05:11
         compiled from "/home/fooloo/www/rent/application/views/templates/header.html" */ ?>
<?php
/*%%SmartyHeaderCode:1432470167569780e7e96791_53964621%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0219a758f89e5249d62c834907b5fbbddc863b4' => 
    array (
      0 => '/home/fooloo/www/rent/application/views/templates/header.html',
      1 => 1452766260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1432470167569780e7e96791_53964621',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569780e7e9f9d0_40180699',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569780e7e9f9d0_40180699')) {
function content_569780e7e9f9d0_40180699 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1432470167569780e7e96791_53964621';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href="../css/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../js/jquery.mobile-1.4.5.min.css" />
<?php echo '<script'; ?>
 src="../js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/jquery.mobile-1.4.5.min.js"><?php echo '</script'; ?>
>

<title>レンタル</title>
</head>
<body>
<!--初期アクセスで表示されるページ-->
<div id="home" data-role="page">
<!--
    < div data-role="header">
    <h2>Shere System</h2>
  </div>
-->
    <div id="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div><?php }
}
?>