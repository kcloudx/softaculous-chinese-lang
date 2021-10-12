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

$l['no_planname'] = '请指定计划名称';
$l['invalidfilename'] = '请指定一个有效的计划名称。不允许有特殊字符。';
$l['no_cpplan'] = '请选择一个有效的控制面板计划';
$l['plan_exist'] = '同名的计划已经存在';
$l['error_plans'] = '请选择至少一个用户或控制面板计划';
$l['user_plan_exist'] = '用户 - <b>&soft-1;</b> - 已经分配给另一个计划。要覆盖，请选择覆盖选项';
$l['reseller_plan_exist'] = '经销商 - <b>&soft-1;</b> - 已分配给另一个计划。要覆盖，请选择覆盖选项';
$l['error_cpplan'] = '请选择一个有效的控制面板计划';
$l['error_scriptselect'] = '请至少选择一个脚本';
$l['error_disable'] = '如果您想<b>禁用</b>'.APP.'对于选定的用户请选中复选框。';
$l['error_userselect'] = '请至少选择一个用户';
$l['error_resellerselect'] = '请至少选择一个经销商';
$l['cpplan_plan_exist'] = '控制面板计划 - <b>&soft-1;</b> - 已经分配给另一个计划。要覆盖，请选择覆盖选项';
$l['err_prefix'] = '您不能将 \'reseller_\' 作为您的计划名称的前缀。';
$l['no_plan_support'] = '此面板不支持计划功能';

//Theme Strings
$l['<title>'] = 'Softaculous - 访问控制';
$l['title'] = '添加访问控制计划';
$l['planhead'] = '访问控制设置';
$l['planname']  = '计划名称';
$l['exp_plan'] = '访问控制计划名称';
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
$l['done'] = '您的计划已保存。返回<a href="'.$globals['index'].'act=plans">计划概览</a>';
$l['plan_save_fail'] = '无法保存计划详情';
$l['cpanelplan'] = '控制面板计划分配';
$l['cpplanselect'] = '选择将应用此 ACL 的控制面板计划。该计划下的所有用户将只能使用此处分配的脚本';
$l['default_plan_note'] = '注意：请将计划名称指定为 \'<b>softaculous_default</b>\'，以便为未分配到任何其他 Softaculous 计划的任何用户创建默认计划。';
$l['select_all'] = '全选：';
$l['overwrite_settings'] = '覆盖设置：';

$l['disable_autoupgrade'] = '禁用自动升级';
$l['exp_disable_autoupgrade'] = '为属于该计划的用户禁用自动升级脚本安装';

$l['limit_features'] = '功能限制';

$l['default_note'] = '默认：无限制';

$l['max_ins_script'] = '每个脚本的最大安装数';
$l['max_backup_script'] = '每个脚本的最大备份数';
$l['max_clone_script'] = '每个脚本的最大克隆数';
$l['max_staging_script'] = '每个脚本的最大暂存';

$l['exp_max_ins_script'] = '这将限制用户可以为特定脚本创建的最大安装数';
$l['exp_max_backup_script'] = '这将限制用户可以为特定脚本创建的最大备份数';
$l['exp_max_clone_script'] = '这将限制用户可以为特定脚本创建的最大克隆数';
$l['exp_max_staging_script'] = '这将限制用户可以为特定脚本创建的最大登台次数';

$l['setselect'] = 'WordPress Sets Assignment';
$l['exp_setselect'] = '选择这个访问组可以访问的WordPress集';
$l['view_items'] = '列出该集合中的项目';
$l['ok'] = 'ok';
$l['plugins'] = '插件';
$l['themes'] = '主题';
$l['empty_set'] = '当前集合中没有物品！';
