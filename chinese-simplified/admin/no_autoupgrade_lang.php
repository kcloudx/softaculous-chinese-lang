<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_lang.php
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

$l['saving_error'] = '保存设置时出现一些错误。';

//主题字符串
$l['<title>'] = APP.' - 禁用脚本的自动升级';
$l['settings_saved'] = '设置保存成功。';
$l['show_top_scripts'] = '禁用自动升级';
$l['show_top_scripts_exp'] = '热门应用类别的名称。';
$l['soft_free_note'] = '注意：在'.APP.'的免费版本中，前14个脚本的选择是禁用的。';
$l['savescript'] = '保存脚本';
$l['select_top_scripts'] = '选择脚本';
$l['selected_top_scripts'] = '您选择的脚本';
$l['select_from_below'] = '从下面选择你的脚本';
$l['script_note_exp'] = '如果没有提供值，则'.APP.'将使用自己的公式来计算加载时间并尝试升级安装。<br />公式将计算为：<strong>load = Uptime_of_server / Number_of_cores;</strong> <br />如果负载是小于 0.70，只有然后 '.APP.'将尝试升级安装。';
$l['script_note'] = '注意';


$l['planhead'] = '所有自动升级脚本的全局设置';
$l['uptime'] = '设置服务器负载限制';
$l['exp_uptime'] = '例如您可以将值设置为 5，现在当 Softaculous 将尝试升级安装时，它会检查加载时间，如果它低于该值，则仅会升级。';
$l['save'] = '保存';
$l['scriptselect'] = '脚本';
$l['disable_autoupgrade'] = '禁用自动升级';
$l['disable_autoupgrade_exp'] = '如果启用，则不会自动升级任何安装，用户将无法从最终用户面板获得启用自动升级的选项。';
$l['exp_scriptselect'] = '选择禁用自动升级的脚本';
$l['done'] = '您的计划已保存。返回<a href="'.$globals['index'].'act=plans">计划概览</a>';
$l['select_all'] = '全选：';
