<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addplans_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['<title>'] = 'Softaculous - 列出用户';
$l['title'] = '列出用户';
$l['user_name'] = '用户名';
$l['owner'] = '所有者';
$l['login'] = '登录';
$l['api_key'] = 'API 密钥';
$l['api_pass'] = 'API 密码';
$l['number_of_users'] = '用户数';
$l['option'] = '选项';
$l['no_users'] = '没有用户可显示';
$l['adduser'] = '添加用户';
$l['del_user'] = '删除用户？';
$l['del_res_user'] = '删除经销商？<br/> <b>该经销商创建的所有子用户也将被删除。</b>';
$l['delete'] = '用户删除成功。';
$l['edit'] = '用户编辑成功';

$l['no_username'] = '请输入要创建的用户名。';
$l['no_number_of_users'] = '请输入用户数。';
$l['user_exists'] = '用户已经存在。尝试不同的用户名。';
$l['err_domain'] = '无法删除域名：';

$l['no_planname'] = '请指定计划名称';
$l['invalidfilename'] = '请指定一个有效的计划名称。不允许有特殊字符。';
$l['no_cpplan'] = '请选择一个有效的控制面板计划';
$l['plan_exist'] = '同名的计划已经存在';
$l['error_plans'] = '请选择至少一个用户或控制面板计划';
$l['user_plan_exist'] = '用户 - <b>&soft-1;</b> - 已经分配给另一个计划。要覆盖，请选择覆盖选项';
$l['reseller_plan_exist'] = '经销商 - <b>&soft-1;</b> - 已分配给另一个计划。要覆盖，请选择覆盖选项';
$l['error_cpplan'] = '请选择一个有效的控制面板计划';
$l['error_scriptselect'] = '请至少选择一个脚本';
$l['error_disable'] = '对于选定的用户如果您想<b>禁用</b>'.APP.'请选中复选框。';
$l['error_userselect'] = '请至少选择一个用户';
$l['error_resellerselect'] = '请至少选择一个经销商';
$l['cpplan_plan_exist'] = '控制面板计划 - <b>&soft-1;</b> - 已经分配给另一个计划。要覆盖，请选择覆盖选项';
$l['err_prefix'] = '您不能将 \'reseller_\' 作为您的计划名称的前缀。';
$l['connect_error'] = '连接错误';
$l['err_user_nof'] = '只有经销商可以拥有用户数';

//主题字符串
$l['user_details'] = '用户详细信息';
$l['用户名'] = '用户名';
$l['exp_username'] = '所有字符都将变为小写。不要在中间使用空格。';
$l['number_of_users'] = '用户数';
$l['exp_number_of_users'] = '允许用户的子用户数';
$l['cplanname'] = '控制面板计划';
$l['exp_cplan'] = '控制面板计划';
$l['no_cpplans'] = '请选择一个控制面板计划';
$l['saveplan'] = '保存计划';
$l['userselect'] = '用户分配';
$l['resellerselect'] = '经销商分配';
$l['exp_userselect'] = '选择受此访问组影响的单个用户。';
$l['exp_resellerselect'] = '选择受此访问组影响的经销商。';
$l['scriptselect'] = '脚本赋值';
$l['exp_scriptselect'] = '选择这个特定计划的脚本';
$l['done'] = '用户已成功删除。';
$l['plan_save_fail'] = '无法保存计划详情';
$l['cpanelplan'] = '控制面板计划分配';
$l['cpplanselect'] = '选择将应用此 ACL 的控制面板计划。该计划下的所有用户将只能使用此处分配的脚本';
$l['default_plan_note'] = '注意：请将计划名称指定为 \'<b>softaculous_default</b>\'，以便为未分配到任何其他 Softaculous 计划的任何用户创建默认计划。';
$l['select_all'] = '全选：';
$l['overwrite_settings'] = '覆盖设置：';
$l['uid'] = 'UID';
$l['gid'] = 'GID';

$l['err_no_user'] = '用户不存在！';
$l['err_no_root_del'] = 'root 用户无法删除！';
$l['err_invalid_email'] = '请提供有效的电子邮件';
