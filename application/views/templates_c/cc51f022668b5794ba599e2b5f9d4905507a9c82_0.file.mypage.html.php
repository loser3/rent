<?php /* Smarty version 3.1.27, created on 2016-01-21 14:21:27
         compiled from "/home/fooloo/www/rent/application/views/templates/mypage.html" */ ?>
<?php
/*%%SmartyHeaderCode:190841040956a06ad79ce4e8_15883136%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc51f022668b5794ba599e2b5f9d4905507a9c82' => 
    array (
      0 => '/home/fooloo/www/rent/application/views/templates/mypage.html',
      1 => 1453353480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190841040956a06ad79ce4e8_15883136',
  'variables' => 
  array (
    'custid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a06ad7a7e551_66412898',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a06ad7a7e551_66412898')) {
function content_56a06ad7a7e551_66412898 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '190841040956a06ad79ce4e8_15883136';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_css'=>"page",'_js'=>"page"), 0);
?>

<form action="/rent/index.php/mail/send" method="post">
    <input type="hidden" name="mode" value="email_regist" />

    <table id="tbl_setA" >
        <tr>
            <th style="width: 20%" colspan="2">貸セル（最新5件）</th>
        </tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['name'] = 'customer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['custid']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['customer']['total']);
?>
            <tr>
                <td style="width: 20%"><img class="sq" src="/rent/images/sample.png"></td>
                <td style="width: 80%">id: <?php echo $_smarty_tpl->tpl_vars['custid']->value[$_smarty_tpl->getVariable('smarty')->value['section']['customer']['index']]['rental_nm'];?>
</td>
            </tr>

        
<?php endfor; endif; ?>

        
        
    </table>
    <table id="tbl_setA" >
            <tr>
                <th style="width: 20%" colspan="2">貸シテル（最古5件）</th>
            </tr>
            <tr>
                <td style="width: 20%"><img class="sq" src="/rent/images/sample.png"></td>
                <td style="width: 80%">あああああああああああああああああああああああああああああああああああ</td>
            </tr>
            <tr>
                <td style="width: 20%"><img class="sq" src="/rent/images/sample.png"></td>
                <td style="width: 80%">いああああああああああああああああああああああああああああああああああ</td>
            </tr>        
    </table>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>