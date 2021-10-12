<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = '解压备份文件时出现错误';
$l['restoredatadir'] = '无法恢复数据目录';
$l['restorewww'] = '无法恢复网站目录';
$l['res_err_selectmy'] = '无法选择要恢复的数据库';
$l['err_myconn'] = '无法连接到数据库';
$l['err_db_create'] = '创建数据库时出错';
$l['off_backup_restore'] = '备份/恢复功能已被管理员禁用';
$l['no_backupinfo_file'] = '未找到备份信息文件';
$l['no_backup_time'] = '未找到备份时间';
$l['instime_higher_than_btime'] = '安装时间高于备份时间';

//主题字符串
$l['<title>'] = APP.' - 恢复';
$l['restorefile'] = '从备份中恢复';
$l['restore_dir'] = '恢复目录';
$l['restore_dir_exp'] = '如果选中此项，整个文件夹将被恢复';
$l['restore_datadir'] = '恢复数据目录';
$l['restore_datadir_exp'] = '如果选中，数据目录将被恢复';
$l['restore_db'] = '恢复数据库';
$l['restore_db_exp'] = '如果选中，数据库也将被恢复';
$l['restore_ins'] = '恢复安装';
$l['restore'] = '您的备份已成功恢复';
$l['confirm_restore'] = '您确定要恢复安装吗？';
$l['return'] = '返回概览';
$l['restore_wwwdir'] = '恢复网页目录';
$l['restore_wwwdir_exp'] = '如果选中，Web 目录将被恢复';
$l['checking_data'] = '检查提交的数据';
$l['res_db'] = '恢复数据库';
$l['res_dir'] = '恢复目录';
$l['res_datadir'] = '恢复数据目录';
$l['finishing_process'] = '备份恢复';
$l['wait_note'] = '<b>注意：</b>这可能需要 3-4 分钟。请在进度条达到 100% 之前不要离开此页面';
$l['restoreing'] = '您的备份正在后台恢复。完成后，您将收到电子邮件通知。您可以从<a href="'.$globals['index'].'act=eu_tasklist">任务列表</a>页面跟踪恢复过程。';
$l['prog_restoring'] = '正在恢复'; // 不要删除尾随空格
$l['prog_restore_complete'] = '恢复完成。';
$l['no_restore_functions'] = '无法找到 RESTORE FUNCTIONS 文件！请向服务器管理员报告。';
$l['backup_file_empty'] = '备份文件为空';
$l['db_not_exist'] = '数据库文件不存在';
$l['db_empty'] = '数据库文件为空';
$l['ampps_notify_premium'] = '此功能在 AMPPS 的高级版本中可用。请购买 <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['read_archive'] = '阅读档案';

$l['no_backup_file'] = '备份文件不存在';

$l['wpc_not_in_free'] = '远程备份无法在'.APP.'的免费版本中恢复！您可以在<a href="'.$globals['index'].'act=wpc_plans">此处</a>购买高级计划以继续使用它们。';

$l['wpc_return'] = '返回备份';

$l['restore_delete_files'] = '删除现有文件/文件夹';
$l['restore_delete_files_exp'] = '如果选中的现有文件/文件夹将被删除，然后备份文件将被恢复。 <br /><b>注意</b>：请确保您在创建此备份时选择了完整备份。';
