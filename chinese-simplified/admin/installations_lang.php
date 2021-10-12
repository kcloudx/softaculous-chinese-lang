<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
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

$l['no_submit'] = '没有为电子邮件选择安装。';
$l['no_ins_selected'] = '没有选择升级的安装。';
$l['posix_error'] = 'POSIX 功能被禁用。请启用 POSIX 功能以执行安装的自动升级。';
$l['shellexec_error'] = 'exec 函数被禁用。请启用 exec 功能以执行安装自动升级。';
$l['user_soft_upd_sub'] = '脚本更新可用';
$l['user_soft_upd'] = '这封电子邮件是关于您已安装的某些 PHP 脚本的过时安装。出于安全原因，您必须尽快更新这些过时的安装。
以下脚本更新可用：

&soft-1;
要升级这些脚本，请转到您的控制面板 -> '.APP.'。 -> 安装。
在那里您将能够更新脚本。

来自系统管理员';
$l['no_reseller_upgrade_ins'] = '经销商不得自动升级安装';

//主题字符串
$l['<title>'] = APP.' - 安装清单';
$l['searchinstallations'] = '搜索安装';
$l['search_scripts'] = '脚本';
$l['search_scripts_exp'] = '全部留空。对于多个脚本，用 \'<b>;</b>\' 分开';
$l['search_users'] = '用户';
$l['search_users_exp'] = '全部留空。对于多个用户，用 \'<b>;</b>\' 分开';
$l['group_by_scripts'] = '按脚本分组';
$l['group_by_scripts_exp'] = '默认按用户分组';
$l['only_outdated'] = '只显示过时的安装';
$l['only_outdated_exp'] = '默认显示所有安装';
$l['li_user'] = '用户';
$l['li_scripts'] = '脚本';
$l['li_domains'] = '域名';
$l['li_url'] = 'URL';
$l['li_insver'] = '已安装版本';// 已安装版本
$l['li_ver'] = '版本';
$l['li_realver'] = '真实版';
$l['no_results'] = '没有找到结果';
$l['search_ins'] = '搜索';
$l['with_selected'] = '选择';
$l['sub_email_users'] = '向新版本的用户发送电子邮件';
$l['emailed_users'] = '选定安装的用户已收到有关可用更新的通知。';
$l['sub_upgrade_ins'] = '升级';
$l['upgrading_ins'] = '升级安装...';
$l['upgraded_ins'] = '自动升级过程已完成，详细信息已通过电子邮件发送。';
$l['upgraded'] = '升级';
$l['failed'] = '失败';
$l['go_to_autoupgrade'] = '转到列表';
$l['upgrading_completed'] = '升级完成';
$l['beta_note'] = '<b>注意</b>：此功能处于<b>BETA 版本</b>。 <a href="http://softaculous.com/docs/Auto_Upgrade" target="_blank">阅读更多..</a>';
$l['wait_note'] = '<b>注意</b> : 请不要离开此页面，直到所有安装都升级完毕。';
$l['tasklist_button'] = '任务列表';
$l['auto_upgrade_enabled'] = '启用自动升级';
$l['real_ver_notice'] = '真实版本与'.APP.'不匹配。记录。似乎用户已手动升级安装。';
$l['latest_ver_notice'] = '最新版本可用于安装。';
$l['update_records'] = '更新'.APP.'记录';
$l['no_submit_rec'] = '没有选择安装来更新'.APP.'记录';
$l['err_update_record'] = '更新'.APP.'记录中的版本时出错。';
$l['succ_update_record'] = '已成功更新'.APP.'记录中选定安装的版本';
$l['only_realversion'] = '显示真实版本';
$l['only_realversion_exp'] = '如果选中'.APP.'将尝试检测安装的真实版本。<br /><b>注意</b>：这可能需要时间，因为它会通过扫描安装文件找到真实版本';
$l['no_info'] = '没有信息';
$l['search_domains'] = '域名';
$l['search_domains_exp'] = '全部留空。对于多个域，用 \'<b>;</b>\'';

$l['auto_upgrade_major'] = '(主要和次要)';
$l['auto_upgrade_minor'] = '(次要)';