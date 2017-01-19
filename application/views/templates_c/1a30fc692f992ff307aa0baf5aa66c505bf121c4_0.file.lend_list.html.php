<?php /* Smarty version 3.1.27, created on 2016-01-27 18:02:43
         compiled from "/home/fooloo/www/rent/application/views/templates/lend_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:115013478456a887b36a9950_64297548%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a30fc692f992ff307aa0baf5aa66c505bf121c4' => 
    array (
      0 => '/home/fooloo/www/rent/application/views/templates/lend_list.html',
      1 => 1453885200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115013478456a887b36a9950_64297548',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a887b3753959_74520707',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a887b3753959_74520707')) {
function content_56a887b3753959_74520707 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '115013478456a887b36a9950_64297548';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_css'=>"page",'_js'=>"page"), 0);
?>

<form action="/rent/index.php/lend_list/regist" method="post" enctype="multipart/form-data">
    <input type="file" name="userfile" accept="image/*;capture=camera" />
    <label for="entry_name">品物</label>
    <input id="entry_name" name="entry_name" type="text"  data-clear-btn="true" data-clear-btn-text="クリア" />
    <label for="entry_keywd">検索キーワード：</label>
    <input id="entry_keywd" name="entry_keywd" type="search" />
    
    <button class="ui-btn">登録</button>
    <a href="index.html" class="ui-btn">登録</a>
    
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>