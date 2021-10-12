<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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
$l['no_ins'] = '没有提交安装';
$l['wrong_ins_title'] = '错误的安装 ID';
$l['wrong_ins'] = '您提交的安装ID不存在';
$l['backup_ftp_error'] = '无法创建备份目录<b>&soft-1;</b>。请手动创建并重试。';
$l['err_backup'] = '无法创建备份。';
$l['no_space_backup'] = '您没有足够的空间来备份这个安装！';
$l['err_notelength'] = '备份注释必须少于 255 个字符';
$l['off_backup_restore'] = '备份/恢复功能已被管理员禁用';

$l['cant_backup_dir'] = '备份工具无法备份文件。';
$l['could_not_read'] = '糟糕，Softaculous 无法读取以下文件/目录 <b>&soft-1;</b> 请使其可读以继续使用备份实用程序。';
$l['cant_datadir_dir'] = '添加数据目录时出错。';
$l['cant_wwwdir'] = '添加 Web 目录时出错。';
$l['cant_backup_db'] = '将数据库添加到备份时出错。';
$l['err_perm_file'] = '尝试制作权限文件时出错';
$l['err_dataperm_file'] = '尝试制作数据目录权限文件时出错';
$l['err_wwwperm_file'] = '尝试制作WEB目录权限文件时出错';
$l['save_dir_perms'] = '无法保存文件权限';
$l['save_datadir_perms'] = '无法保存数据目录的权限';
$l['save_www_perms'] = '无法保存Web目录的权限';
$l['cant_connect_mysql'] = '无法连接到数据库，请检查数据库的用户名/密码。如果更改，请使用编辑详细信息更新 Softaculous 安装中的详细信息。';

//主题字符串
$l['<title>'] = APP.' - 备份';
$l['info'] = '信息';
$l['ins_softname'] = '软件';
$l['ins_num'] = '安装编号';
$l['ins_ver'] = '版本';
$l['ins_time'] = '安装时间';
$l['ins_path'] = '路径';
$l['ins_wwwdir'] = '网页目录路径';
$l['ins_url'] = 'URL';
$l['ins_db'] = '数据库名称';
$l['ins_dbuser'] = '数据库用户';
$l['ins_dbpass'] = '数据库密码';
$l['ins_dbhost'] = '数据库主机';
$l['backup_ins'] = '备份安装';
$l['backup_dir'] = '备份目录';
$l['backup_dir_exp'] = '如果你勾选此项，整个文件夹将被备份';
$l['backup_db'] = '备份数据库';
$l['backup_db_exp'] = '如果选中，数据库也将被备份';
$l['backup_conf'] = '备份可能需要一些时间，具体取决于数据。请不要关闭网页或导航到另一个页面。';
$l['backedup'] = '备份创建成功。您可以从<a href="'.$globals['index'].'act=backups">备份</a>页面访问它。<br />您的安装网址：<a href="&soft-1 ;" target="_blank">&soft-1;</a>';
$l['backup_ins'] = '备份安装';
$l['backup_datadir'] = '备份数据目录';
$l['backup_datadir_exp'] = '如果选中，数据目录将被保存。';
$l['ins_datadir'] = '数据目录';
$l['return'] = '返回概览';
$l['ins_cron_command'] = 'Cron 命令';
$l['backup_wwwdir'] = '备份网页目录';
$l['backup_wwwdir_exp'] = '如果选中，Web 目录将被保存。';
$l['checking_data'] = '检查提交的数据';
$l['backingup_db'] = '备份数据库';
$l['backingup_dir'] = '备份目录';
$l['backingup_datadir'] = '备份数据目录';
$l['finishing_process'] = '完成备份';
$l['wait_note'] = '<b>注意：</b>这可能需要 3-4 分钟。如果你愿意，你可以离开这个页面！';
$l['backingup'] = '备份正在后台创建。备份完成后，您将收到电子邮件通知。<br /> 备份完成后，您可以从 <a href="'.$globals['index'].'act=backups">备份</a> 访问它a> 页。<br /> 您的安装 URL：<a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['check_email'] = '请检查您的电子邮件以了解备份状态';
$l['prog_backingup'] = '备份'; // 不要删除尾随空格
$l['prog_backup_complete'] = '备份完成。';
$l['backup_note'] = '备份笔记';
$l['backup_note_exp'] = '您可以保存笔记以供参考';
$l['backup_operation'] = '选择备份操作';
$l['backups_expire'] = '您的备份将在备份创建 <b>&soft-1;</b> 天后自动清除。';
$l['max_backups'] = '您的帐户中目前有 <b>&soft-1;</b> 个备份。您的最大备份限制为 <b>&soft-2;</b>。';
$l['err_max_backups'] = '您已达到允许的最大备份数 (<b>&soft-1;</b>)。请删除不需要的备份以便能够进行新的备份。';
$l['err_max_local_backups'] = '您已达到允许的 (<b>&soft-1;</b>) 本地备份的最大数量。请删除本地服务器上不需要的备份，以便能够进行新的备份。';
$l['backup_notes'] = APP.'自动创建的备份。';
$l['no_backup_functions'] = 'BACKUP F找不到 UNCTIONS 文件！请向服务器管理员报告。';
$l['no_dir_exists'] = '安装目录不存在。';
$l['backup_location_name'] = '备份位置';
$l['backup_file_empty'] = '备份文件大小不正确：0';
$l['err_mysql_db'] = 'MySQL 数据库名称不正确，无法选择数据库。';

$l['backup_loc'] = '备份位置';
$l['exp_backup_loc'] = '选择您想要存储备份的备份位置';
$l['default'] = '默认';
$l['invalid_backup_location'] = '提交的备份位置不存在';
$l['local_folder'] = '本地文件夹';

$l['invalid_access_token'] = '无效的访问令牌。请重新授权'.APP.'中“编辑备份位置”页面中的 Dropbox APP。最终用户面板';
$l['insufficient_space'] = '您的 Dropbox 帐户已满。请释放一些空间并在一段时间后尝试备份';

$l['gdrive_err_init'] = '在 Google Drive 上启动备份时出现一些错误！！';
$l['gdrive_err_end'] = '向您的 Google Drive 帐户提交备份时出现一些错误！！';
$l['ampps_notify_premium'] = '此功能在 AMPPS 的高级版本中可用。请购买 <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['error_max_backup_script'] = '您已达到每个脚本允许的 (<b>&soft-1;</b>) 备份的最大数量';

$l['ftp_access'] = 'PHP 进程无法将文件写入您的服务器。请配置 FTP 访问以继续。';
$l['configure_domain'] = '配置设置';

$l['wpc_return'] = '返回备份';

$l['backing_up'] = '您的备份正在后台创建。完成后，您将收到电子邮件通知。您可以从<a href="'.$globals['index'].'act=eu_tasklist">任务列表</a>页面跟踪备份过程。<br />您的安装网址：<a href=" &soft-1;" target="_blank">&soft-1;</a>';

$l['rbackup_disabled'] = '远程位置的备份被管理员禁用';
$l['rbackup_protocol_disabled'] = '<b>&soft-1;</b> 上的备份被管理员禁用';

$l['onedrive_err_end'] = '将备份上传到您的 OneDrive 帐户时出现一些错误！';
$l['onedrive_err_upload_url'] = '未能生成 OneDrive 上传 URL';
