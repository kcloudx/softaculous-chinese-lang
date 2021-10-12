<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editemailtemp_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['tempsub'] = '请提及主题';
$l['tempcontent'] = '请提及模板的内容';
$l['no_email_template'] = '没有发布电子邮件模板';
$l['invalid_email_template'] = '无效的电子邮件模板';

$l['<title>'] = '编辑电子邮件模板';
$l['heading'] = '编辑电子邮件模板';
$l['edittemp'] = '编辑电子邮件模板';
$l['done'] = '邮件模板保存成功';
$l['savetemp'] = '保存电子邮件模板';
$l['subject'] = '主题';
$l['content'] = '内容';
$l['reset_confirm'] = '您确定要重置电子邮件模板吗？';
$l['reset_template'] = '重置模板';
$l['temp_overview'] = '模板概览';
$l['language'] = '语言';
$l['ishtml'] = '以 HTML 格式发送';

$l['if_note'] = '<strong>注意</strong>：您可以通过以下方式将 IF 用于可选变量：<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt ;</strong>';

// 安装变量信息
$l['mail_install_php_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$path</strong>：安装路径<br />
<strong>$version</strong>：版本<br />
<strong>$url</strong>：网址<br />
<strong>$admin_url</strong>：管理员网址<br />
<strong>$datadirectory</strong>：数据目录<br />
<strong>$admin_username</strong>：管理员用户名<br />
<strong>$admin_pass</strong>：管理员密码<br />
<strong>$dbname</strong>：MySQL 数据库<br />
<strong>$dbuser</strong>：MySQL 数据库用户<br />
<strong>$dbhost</strong>：MySQL 数据库主机<br />
<strong>$dbpass</strong>：MySQL 数据库密码<br />
<strong>$cron</strong>：Cron 命令<br />
<strong>$disable_notify_update</strong>：更新通知<br />
<strong>$eu_auto_upgrade</strong>：自动升级<br />
<strong>$auto_backup</strong>：自动备份<br />
<strong>$auto_backup_rotation</strong>：备用轮换<br />
<strong>$time</strong>：安装时间<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

// 克隆变量信息
$l['mail_clone_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$old_path</strong>：原始安装路径<br />
<strong>$old_url</strong>：原始安装 URL<br />
<strong>$path</strong>：克隆安装路径<br />
<strong>$version</strong>：版本<br />
<strong>$url</strong>：克隆的安装 URL<br />
<strong>$admin_url</strong>：管理员网址<br />
<strong>$datadirectory</strong>：数据目录<br />
<strong>$dbname</strong>：MySQL 数据库<br />
<strong>$dbuser</strong>：MySQL 数据库用户<br />
<strong>$dbhost</strong>：MySQL 数据库主机<br />
<strong>$dbpass</strong>：MySQL 数据库密码<br />
<strong>$cron</strong>：Cron 命令<br />
<strong>$time</strong>：安装时间<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

// 安装变量信息
$l['mail_install_js_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$path</strong>：安装路径<br />
<strong>$version</strong>：版本<br />
<strong>$url</strong>：网址<br />
<strong>$disable_notify_update</strong>：更新通知<br />
<strong>$auto_backup</strong>：自动备份<br />
<strong>$auto_backup_rotation</strong>：备用轮换<br />
<strong>$time</strong>：安装时间<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';


// 安装变量信息
$l['mail_install_perl_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$path</strong>：安装路径<br />
<strong>$version</strong>：版本<br />
<strong>$url</strong>：网址<br />
<strong>$admin_url</strong>：管理员网址<br />
<strong>$datadirectory</strong>：数据目录<br />
<strong>$wwwdir</strong>：网络目录<br />
<strong>$admin_username</strong>：管理员用户名<br />
<strong>$admin_pass</strong>：管理员密码<br />
<strong>$dbname</strong>：MySQL 数据库<br />
<strong>$dbuser</strong>：MySQL 数据库用户<br />
<strong>$dbhost</strong>：MySQL 数据库主机<br />
<strong>$dbpass</strong>：MySQL 数据库密码<br />
<strong>$cron</strong>：Cron 命令<br />
<strong>$disable_notify_update</strong>：更新通知<br />
<strong>$auto_backup</strong>：自动备份<br />
<strong>$auto_backup_rotation</strong>：备用轮换<br />
<strong>$time</strong>：安装时间<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';


// 移除变量
$l['mail_remove_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$path</strong>：安装路径<br />
<strong>$version</strong>：版本<br />
<strong>$url</strong>：网址<br />
<strong>$datadirectory</strong>：数据目录<br />
<strong>$wwwdir</strong>：网络目录<br />
<strong>$dbname</strong>：MySQL 数据库<br />
<strong>$dbuser</strong>：MySQL 数据库用户<br />
<strong>$dbhost</strong>：MySQL 数据库主机<br />
<strong>$dbpass</strong>：MySQL 数据库密码<br />
<strong>$cron</strong>：Cron 命令<br />
<strong>$time</strong>：安装时间<br />
<strong>$rem_time</strong>：移除时间<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';


// 过时的安装变量（来自管理员）
$l['mail_update_info'] = '您可以使用以下变量：<br />
<strong>$serverip</strong>：服务器IP<br />
<strong>$installation</strong>：安装列表<br />
<strong>$time</strong>：时间<br />
<strong>$sn</strong> : 站点名称（可以从'.APP.'管理面板 -> 设置中更改）';


// 过时的安装变量（来自 CRON）
$l['mail_cron_info'] = '您可以使用以下变量：<br />
<strong>$serverip</strong>：服务器IP<br />
<strong>$installation</strong>：现在可以更新的安装列表<br />
<strong>$time</strong>：时间<br />
<strong>$sn</strong> : 站点名称（可以从'.APP.'管理面板 -> 设置中更改）

';

// 编辑细节变量
$l['mail_editdetail_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：网址<br />
<strong>$datadirectory</strong>：数据目录<br />
<strong>$wwwdir</strong>：网络目录<br />
<strong>$wwwurl</strong>：网址<br />
<strong>$dbname</strong>：MySQL 数据库<br />
<strong>$dbuser</strong>：MySQL 数据库用户<br />
<strong>$dbhost</strong>：MySQL 数据库主机<br />
<strong>$dbpass</strong>：MySQL 数据库密码<br />
<strong>$auto_backup</strong>：自动备份<br />
<strong>$auto_backup_rotation</strong>：备用轮换<br />
<strong>$time</strong>：安装时间<br />
<strong>$edit_time</strong>：修改时间<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

// 备份后台电子邮件变量
$l['mail_backup_bg_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：网址<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$backup_file</strong>：网络目录<br />
<strong>$error</strong>：网址<br />
<strong>$backup_note</strong>：备份笔记<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

// 备份电子邮件变量
$l['mail_backup_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：网址<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$backup_file</strong>：网络目录<br />
<strong>$error</strong>：网址<br />
<strong>$backup_note</strong>：备份笔记<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

// 备份失败的电子邮件变量
$l['mail_backup_fail_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：网址<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$backup_file</strong>：网络目录<br />
<strong>$error</strong>：网址<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

// 管理员成功升级Cli
$l['mail_adminupgrade_success_admin_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$url</strong>：网址<br />
<strong>$oldversion</strong>：当前版本<br />
<strong>$version</strong>：最新版本<br />
<strong>$user</strong>：用户名<br />
<strong>$backup_path</strong>：备份路径<br />
<strong>$path</strong>：安装路径<br />
<strong>$dbname</strong>：MySQL 数据库<br />
<strong>$dbuser</strong>：MySQL 数据库用户<br />
<strong>$dbhost</strong>：MySQL 数据库主机<br />
<strong>$dbpass</strong>：MySQL 数据库密码<br />
<strong>$error</strong>：还原错误列表<br />
<strong>$upgrade_error</strong>：升级错误列表<br />
<strong>$sn</strong> : 站点名称（可以从'.APP.'管理面板 -> 设置中更改）
';

$l['mail_adminupgrade_success_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_adminupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_userupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_backup_fail_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$url</strong>：网址<br />
<strong>$oldversion</strong>：当前版本<br />
<strong>$version</strong>：最新版本<br />
<strong>$user</strong>：用户名<br />
<strong>$error</strong>：错误列表<br />
<strong>$sn</strong> : 站点名称（可以从'.APP.'管理面板 -> 设置中更改）
';

$l['mail_autoupgrade_precheck_fail_info'] = $l['mail_autoupgrade_backup_fail_info'];

// 自动备份成功变量
$l['mail_auto_backup_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：安装网址<br />
<strong>$backup_file</strong>：备份路径<br />
<strong>$sn</strong> : 站点名称（可以从'.APP.'管理面板 -> 设置中更改）
';

// 自动备份失败变量
$l['mail_auto_backup_fail_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：安装网址<br />
<strong>$backup_file</strong>：备份路径<br />
<strong>$error</strong>：错误列表<br />
<strong>$sn</strong> : 站点名称（可以从'.APP.'管理面板 -> 设置中更改）
';

$l['mail_install_classes_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

$l['mail_restore_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：安装网址<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

$l['mail_restore_fail_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：安装网址<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

$l['mail_restore_bg_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：安装网址<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

$l['mail_import_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：安装网址<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

$l['mail_import_fail_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：安装网址<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

$l['mail_import_bg_info'] = '您可以使用以下变量：<br />
<strong>$path</strong>：安装路径<br />
<strong>$url</strong>：安装网址<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

// 暂存变量信息
$l['mail_staging_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$live_path</strong>：原始安装路径<br />
<strong>$live_url</strong>：原始安装 URL<br />
<strong>$path</strong>：暂存安装路径<br />
<strong>$version</strong>：版本<br />
<strong>$url</strong>：暂存安装 URL<br />
<strong>$admin_url</strong>：管理员网址<br />
<strong>$datadirectory</strong>：数据目录<br />
<strong>$dbname</strong>：MySQL 数据库<br />
<strong>$dbuser</strong>：MySQL 数据库用户<br />
<strong>$dbhost</strong>：MySQL 数据库主机<br />
<strong>$dbpass</strong>：MySQL 数据库密码<br />
<strong>$cron</strong>：Cron 命令<br />
<strong>$time</strong>：安装时间<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';

// Pushtolive 变量信息
$l['mail_pushtolive_info'] = '您可以使用以下变量：<br />
<strong>$scriptname</strong>：脚本名称<br />
<strong>$live_path</strong>：原始安装路径<br />
<strong>$live_url</strong>：原始安装 URL<br />
<strong>$path</strong>：推送安装路径<br />
<strong>$version</strong>：版本<br />
<strong>$url</strong>：推送安装 URL<br />
<strong>$admin_url</strong>：管理员网址<br />
<strong>$datadirectory</strong>：数据目录<br />
<strong>$dbname</strong>：MySQL 数据库<br />
<strong>$dbuser</strong>：MySQL 数据库用户<br />
<strong>$dbhost</strong>：MySQL 数据库主机<br />
<strong>$dbpass</strong>：MySQL 数据库密码<br />
<strong>$cron</strong>：Cron 命令<br />
<strong>$time</strong>：安装时间<br />
<strong>$sn</strong> ：站点名称（可以从'.APP.'管理面板 -> 设置中更改）<br />
<strong>$user_name</strong>：用户名<br />
<strong>$user_email</strong> : 用户邮箱';
