<?php /* Smarty version 3.1.27, created on 2016-01-14 20:05:11
         compiled from "/home/fooloo/www/rent/application/views/templates/menu_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:1962203463569780e7d53664_51859633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af99dec31f499ac6180f5cc2431bedc97be2652' => 
    array (
      0 => '/home/fooloo/www/rent/application/views/templates/menu_list.html',
      1 => 1450695480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1962203463569780e7d53664_51859633',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569780e7e89a25_99730048',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569780e7e89a25_99730048')) {
function content_569780e7e89a25_99730048 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1962203463569780e7d53664_51859633';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_css'=>"page",'_js'=>"page"), 0);
?>

<form action="/rent/index.php/mail/send" method="post"><input type="hidden" name="mode" value="email_regist" />
    <div style="height:50px"><a href="/rent/index.php/rent_list">レンタルリスト</a></div>
      <div role="main" class="ui-content">
  <a href="#sub" data-role="button">サブ画面へ</a>
  </div>
    
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>