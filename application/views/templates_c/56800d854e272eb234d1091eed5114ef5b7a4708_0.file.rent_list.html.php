<?php /* Smarty version 3.1.27, created on 2016-01-14 20:32:10
         compiled from "/home/fooloo/www/rent/application/views/templates/rent_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:12245556745697873ad1e355_89379218%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56800d854e272eb234d1091eed5114ef5b7a4708' => 
    array (
      0 => '/home/fooloo/www/rent/application/views/templates/rent_list.html',
      1 => 1450693260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12245556745697873ad1e355_89379218',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5697873ae13701_91591281',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5697873ae13701_91591281')) {
function content_5697873ae13701_91591281 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12245556745697873ad1e355_89379218';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_css'=>"page",'_js'=>"page"), 0);
?>

<form action="/rent/index.php/mail/send" method="post"><input type="hidden" name="mode" value="email_regist" />
    <table style="border: 1px #0099FF solid">
            <tr>
                <td style="width: 20%">あいうえおかきくけこさしすせそたちつてとなにぬねのまみむめも</td>
                <td style="width: 80%">あああああああああああああああああああああああああああああああああああ</td>
            </tr>
        </table>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>