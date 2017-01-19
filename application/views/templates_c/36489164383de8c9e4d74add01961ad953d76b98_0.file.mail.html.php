<?php /* Smarty version 3.1.27, created on 2016-01-19 20:21:05
         compiled from "/home/fooloo/www/rent/application/views/templates/mail.html" */ ?>
<?php
/*%%SmartyHeaderCode:112734186569e1c21709cd3_89819242%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36489164383de8c9e4d74add01961ad953d76b98' => 
    array (
      0 => '/home/fooloo/www/rent/application/views/templates/mail.html',
      1 => 1452677760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112734186569e1c21709cd3_89819242',
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569e1c217b34a1_77771643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569e1c217b34a1_77771643')) {
function content_569e1c217b34a1_77771643 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '112734186569e1c21709cd3_89819242';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_css'=>"page",'_js'=>"page"), 0);
?>

<form action="/rent/index.php/mail/send" method="post"><input type="hidden" name="mode" value="email_regist" />
<input type="file" accept="image/*;capture=camera">
    <table id="tbl_setA"><caption>メールアドレス登録フォーム</caption>
    <tr>
      <td class="item">E-mail：</td>
      <td><input type="text" name="email"  value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/></td>
      <td><input type="submit" name="submit" value="送信" /></td>
    </tr>
  </table>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>