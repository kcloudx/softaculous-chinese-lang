<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pushtolive_lang.php
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
$l['no_info_file'] = '无法找到 INFO.XML 文件！请向服务器管理员报告。';
$l['incompatible'] = '软件需要更高版本的'.APP.'！请向服务器管理员报告。';
$l['no_install'] = '无法找到 INSTALL.XML 文件！请向服务器管理员报告。';
$l['no_functions'] = '无法找到克隆功能文件！';
$l['no_space'] = '您没有足够的空间来安装这个软件！';
$l['pushing'] = '推动安装上线';
$l['staging'] = '暂存';
$l['downloading'] = '下载包';
$l['cant_push_db'] = '无法推送数据库';
$l['fail_create'] = '创建目录失败';
$l['fail_create_datadir'] = '创建数据目录失败';
$l['cant_copy_dir'] = '该目录无法复制，因为它是主目录';
$l['cant_connect_mysql'] = '无法连接到实时站点数据库，请检查数据库的用户名/密码。如有更改，请更新'.APP.'中的详细信息。使用“编辑详细信息”进行安装';
$l['failed_backup'] = '在推送安装生效之前无法创建备份';

$l['no_cron_min'] = '没有指定 Cron 分钟';
$l['no_cron_hour'] = '没有指定 Cron 小时';
$l['no_cron_day'] = '没有指定 Cron 日期';
$l['no_cron_month'] = '没有指定 Cron 月份';
$l['no_cron_weekday'] = '没有指定 Cron 工作日';
$l['wrong_cron_min'] = 'Cron 分钟是错误的。有效值为 0-59 或 <b>*</b>';
$l['wrong_cron_hour'] = 'Cron 时间错误。有效值为 0-23 或 <b>*</b>';
$l['wrong_cron_day'] = 'Cron 日期错误。有效值为 1-31 或 <b>*</b>';
$l['wrong_cron_month'] = 'Cron 月份错误。有效值为 1-12 或 <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron 工作日是错误的。有效值为 0-7 或 <b>*</b>';
$l['no_datadir'] = '没有指定数据目录';
$l['datadir_exists'] = '您提交的数据目录存在。请指定另一个。';
$l['no_decompress_data'] = '解压数据文件时出现一些错误。';
$l['some_files_exist'] = '安装无法继续，因为目标文件夹中已存在以下文件：';
$l['delete_files'] = '请删除这些文件或选择另一个文件夹。';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style ="color:#000;">选中复选框覆盖所有文件并继续</span></b>';
$l['prog_pushtolive'] = 'Push To Live';
$l['prog_push_complete'] = '上线完成';
$l['checking_data'] = '检查提交的数据';
$l['unzipping_files'] = '复制文件和文件夹';
$l['unzipping_datadir'] = '解压数据文件';
$l['prop_db'] = '传播数据库';
$l['finishing_process'] = '完成推送到实时进程';
$l['wait_note'] = '<b>注意：</b>这可能需要 3-4 分钟。请在进度条达到 100% 之前不要离开此页面';

$l['no_php_install'] = 'PHP 未安装。要安装它，请点击<a href="'.$globals['index'].'act=apps&app=1">这里</a>';
$l['no_mysql_install'] = 'MySQL 未安装。要安装它，请点击<a href="'.$globals['index'].'act=apps&app=16">此处</a>';
$l['no_field'] = '<b>&soft-1;</b> 是必填字段，必须填写。';
$l['error_adddb'] = '无法创建数据库';
$l['error_adduser'] = '将用户添加到新数据库时出错';
$l['no_package'] = '找不到安装包！';
$l['no_decompress'] = '解压缩包文件时出现一些错误。';
$l['no_pushtolive_support'] = '此脚本不支持推送到直播';
$l['invalid_script'] = '无效的脚本 ID';
$l['no_domain_found'] = '未找到域。请添加一个域来安装脚本';
$l['no_staging_ins'] = '此安装不是临时安装';
$l['pushtolive_backup_note'] = '在推送网站上线前创建备份';
$l['pushtolive_partial_backup_note'] = '在网站上线前创建的备份（可能是部分备份）';

//主题字符串
$l['<title>'] = APP.' - 推送安装到现场';
$l['info'] = '信息';
$l['ins_softname'] = '软件';
$l['ins_num'] = '安装编号';
$l['ins_ver'] = '版本';
$l['ins_time'] = '安装时间';
$l['ins_path'] = '路径';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = '管理员网址';
$l['ins_db'] = '数据库名称';
$l['ins_dbuser'] = '数据库用户';
$l['ins_dbpass'] = '数据库密码';
$l['ins_dbhost'] = '数据库主机';
$l['ins_datadir'] = '数据目录';
$l['ins_wwwdir'] = '网页目录';
$l['ins_wwwurl'] = '网页目录网址';
$l['ins_cron_command'] = 'Cron 命令';
$l['cloned'] = '安装已成功克隆';
$l['clone_ins'] = '克隆安装细节';
$l['default_push'] = '默认推送';
$l['custom_push'] = '自定义推送';
$l['current_to_live'] = '将此安装设置为实时';

$l['overwrite'] = '覆盖文件';
$l['database_exists'] = '数据库已经存在。请选择一个不同的名字。';
$l['no_softdomain'] = '您没有选择安装软件的域。';
$l['wrong_softdomain'] = '找不到您选择的域的路径。';
$l['no_space'] = '您没有足够的空间来安装这个软件！';
$l['no_softdb'] = '数据库未发布。';

$l['softcopy_note'] = '<b>注意</b>：此软件要求使用其自己的安装实用程序进行安装。请访问将在复制文件后显示的 URL 以完成安装过程。';
$l['softsubmit'] = '推送上线';
$l['congrats'] = '恭喜，网站成功推送上线';
$l['succesful'] = '网站已成功推送到上线';
$l['admin_url'] = '管理网址';
$l['setup_continue'] = '但是，设置将由软件本身完成。要完成设置，请访问以下 URL';
$l['enjoy'] = '我们希望这个过程很简单。';
$l['install_notes'] = '以下是一些重要的注意事项。强烈建议您阅读它们 ';
$l['please_note'] = '<b>注意</b>：'.APP.'只是一个自动软件安装程序，不为单个软件包提供任何支持。请访问软件供应商的网站以获得支持！';
$l['regards'] = '问候';
$l['softinstaller'] = APP.'自动安装程序';
$l['return'] = '返回概览';

// 这些字符串用于 Softaculous Remote
$l['hostname'] = '数据库主机名';
$l['hostname_exp'] = 'MySQL 主机名（主要是 <b>localhost</b>）';
$l['dbusername'] = '数据库用户名';
$l['dbusername_exp'] = 'MySQL 用户名';
$l['dbuserpass'] = '数据库密码';
$l['dbuserpass_exp'] = 'MySQL用户的密码';
$l['database_name_exp_aefer'] = '输入用于安装的数据库名称';

$l['clone_tweet_sub'] = '告诉你的朋友';

$l['soft_ins_exists'] = '安装已经存在于 &soft-1;根据我们的记录。要在此位置克隆应用程序，请卸载现有安装！';

$l['no_sclone'] = '找不到 CLONE.XML 文件！请向服务器管理员报告。';
$l['no_functions'] = '无法找到克隆功能文件！请向服务器管理员报告。';

$l['pushtolive_bg'] = '推送直播已在后台开始';
$l['err_mysql_db'] = 'MySQL 数据库名称不正确，无法选择数据库';
$l['err_mysql_db_live'] = '实时安装的 MySQL 数据库名称不正确，无法选择数据库';

$l['push_btn'] = '默认选项';
$l['custom_push_btn'] = '自定义';
$l['push'] = '推送上线';
$l['prog_pushing'] = '推到现场';
$l['pushing_tweet'] = '我刚刚通过 #[[APP]] #[[TYPE]] 将我的舞台 #[[SCRIPTNAME]] 推送到 [[softurl]] 上';
$l['overwrite_files'] = '覆盖文件/文件夹';
$l['overwrite_files_exp'] = '如果选中，实时站点文件/文件夹将被覆盖';
$l['structural_change'] = '数据库结构变化';
$l['table_data_change'] = '表格中的数据变化';
$l['no_structural_change'] = '结构没有变化';
$l['no_table_data_change'] = '数据没有变化';
$l['select_tables'] = '选择数据库更改';
$l['select_tables_exp'] = '选择您想要推送到实时站点的数据库结构/数据更改';
$l['check_all_edit'] = '检查所有';
$l['push_db'] = '推送完整数据库';
$l['push_db_exp'] = '如果选中，则完整数据库将从实时安装中删除，当前数据库将导入实时站点';
$l['backing_up'] = '备份实时安装';
$l['push_views'] = '推送数据库视图';
$l['push_views_exp'] = '如果选中，数据库视图将被推送到实时站点';
$l['live_site_desc'] = '当前临时站点将被推送到您的实时站点：';
$l['default_push_desc'] = '这会将实时安装的所有文件替换为临时安装中的文件，并将删除实时数据库并从临时安装中导入数据库';
$l['corfirm_live'] = '您确定要将此安装设置为实时安装吗';
