<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_lang.php
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
$l['no_clone'] = '无克隆';
$l['no_softdomain'] = '您没有选择安装软件的域。';
$l['wrong_softdomain'] = '找不到您选择的域的路径。';
$l['softdirectory_exists'] = '您输入的目录已经存在！请输入另一个目录名称。';
$l['no_space'] = '您没有足够的空间来安装这个软件！';
$l['no_softdb'] = '数据库未发布。';
$l['database_exists'] = '数据库已经存在。请选择一个不同的名字。';
$l['databaseuser_exists'] = '数据库用户已经存在。请选择一个不同的数据库名称。';
$l['db_name_long'] = '数据库名不能超过7个字母。请选择一个较短的数据库名称。';
$l['db_limit_crossed'] = '已达到您可以创建的最大数据库数，因此无法继续安装。';
$l['cloning'] = '暂存安装';
$l['staging'] = '暂存';
$l['downloading'] = '下载包';
$l['cant_clone_db'] = '无法克隆数据库';
$l['fail_create'] = '创建目录失败';
$l['fail_create_datadir'] = '创建数据目录失败';
$l['cant_clone_dir'] = '目录不能被克隆，因为它是主目录。';
$l['cant_connect_mysql'] = '无法连接到数据库，请检查数据库的用户名/密码。如果更改，请使用编辑详细信息更新 Softaculous 安装中的详细信息';
$l['same_ins'] = '不可能将安装克隆到同一位置';
$l['ins_exists'] = '您似乎已经在所选位置安装了 <b>&soft-1;</b>';
$l['ins_recursive'] = '您不能在原始安装的子目录中创建暂存';
$l['no_staging_support'] = '此脚本不支持暂存';
$l['invalid_script'] = '无效的脚本 ID';
$l['no_domain_found'] = '未找到域。请添加一个域来安装脚本';

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
$l['prog_staging'] = '暂存'; // 不要删除尾随空格
$l['prog_staging_complete'] = '暂存完成。';
$l['checking_data'] = '检查提交的数据';
$l['unzipping_files'] = '复制文件和文件夹';
$l['unzipping_datadir'] = '解压数据文件';
$l['prop_db'] = '传播数据库';
$l['finishing_process'] = '完成暂存';
$l['wait_note'] = '<b>注意：</b>这可能需要 3-4 分钟。请在进度条达到 100% 之前不要离开此页面';
$l['no_hostname'] = '请输入您的数据库主机名';
$l['no_dbusername'] = '请输入您的数据库用户名';
$l['no_dbuserpass'] = '请输入您的数据库密码';
$l['softdirectory_invalid'] = '您输入的目录无效。';
$l['softdatadir_invalid'] = '您输入的数据目录无效。';
$l['err_domain'] = '无域';
$l['err_domain_admin'] = '该用户没有任何域。请联系管理员。';
$l['no_https'] = '未找到受信任的 SSL 证书';
$l['no_php_install'] = 'PHP 未安装。要安装它，请点击<a href="'.$globals['index'].'act=apps&app=1">这里</a>';
$l['no_mysql_install'] = 'MySQL 未安装。要安装它，请点击<a href="'.$globals['index'].'act=apps&app=16">此处</a>';
$l['no_field'] = '<b>&soft-1;</b> 是必填字段，必须填写。';
$l['error_adddb'] = '无法创建数据库';
$l['error_adduser'] = '将用户添加到新数据库时出错';
$l['no_package'] = '找不到安装包！';
$l['no_decompress'] = '解压缩包文件时出现一些错误。';

//主题字符串
$l['<title>'] = APP.' - 暂存安装';
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
$l['staging_ins'] = '暂存安装细节';
$l['create_staging'] = '创建暂存';
$l['choose_protocol'] = '选择协议';
$l['choose_protocol_exp'] = '如果您的站点有 SSL，那么请选择 HTTPS 协议。';
$l['cron_job'] = 'CRON 作业';
$l['cron_job_exp'] = '这个脚本需要一个 CRON 才能工作。请指定 CRON 时序。如果您不知道，请保持原样！';
$l['cron_min'] = 'Min';
$l['cron_hour'] = '小时';
$l['cron_day'] = '天';
$l['cron_month'] = '月';
$l['cron_weekday'] = '工作日';
$l['datadir'] = '数据目录';
$l['datadir_exp'] = '此脚本需要将其数据存储在无法通过网络访问的文件夹中。它将在您的主文件夹中创建。即如果您指定 <b>datadir</b> 将创建以下内容 - /home/username/<b>datadir</b>';
$l['db_name_long'] = '数据库名不能超过7个字母。请选择一个较短的数据库名称。';
$l['db_alpha_num'] = '数据库名称只允许使用字母数字字符。';
$l['overwrite'] = '覆盖文件';
$l['database_exists'] = '数据库已经存在。请选择一个不同的名字。';
$l['no_softdomain'] = '您没有选择安装软件的域。';
$l['wrong_softdomain'] = '找不到您选择的域的路径。';
$l['no_space'] = '您没有足够的空间来安装这个软件！';
$l['no_softdb'] = '数据库未发布。';
$l['choose_domain'] = '选择域';
$l['choose_domain_exp'] = '请选择安装软件的域。';
$l['in_directory'] = '在目录中';
$l['in_directory_exp'] = '该目录与您的域相关，<b>不应该存在</b>。例如要在 http://mydomain/dir/ 安装，只需键入 <b>dir</b>。要仅安装在 http://mydomain/ 中，请将其留空。';
$l['database_name'] = '数据库名称';
$l['database_name_exp'] = '输入要为安装创建的数据库的名称';
$l['softcopy_note'] = '<b>注意</b>：此软件要求使用其自己的安装实用程序进行安装。请访问将在复制文件后显示的 URL 以完成安装过程。';
$l['softsubmit'] = '克隆';
$l['congrats'] = '恭喜，暂存创建成功';
$l['succesful'] = '暂存已成功创建于';
$l['admin_url'] = '管理网址';
$l['setup_continue'] = '但是，设置将由软件本身完成。要完成设置，请访问以下 URL';
$l['enjoy'] = '我们希望安装过程很简单。';
$l['install_notes'] = '以下是一些重要的注意事项。强烈建议您阅读它们 ';
$l['please_note'] = '<b>注意</b>：'.APP.'只是一个自动软件安装程序，不为单个软件包提供任何支持。请访问软件供应商的网站以获得支持！';
$l['regards'] = '问候';
$l['softinstaller'] = APP.'自动安装程序';
$l['return'] = '返回概览';
$l['live_ins_url'] = '实时安装 URL';
$l['live_ins_url_exp'] = '这是源安装地址';

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

$l['staging_push_bg'] = 'Staging 已在后台推送';
$l['err_mysql_db'] = 'MySQL 数据库名称不正确，无法选择数据库。';

$l['staging_tweet'] = '我刚刚通过 #[[APP]] #[[TYPE]] 在 [[softurl]] 上创建了 #[[SCRIPTNAME]] 的临时安装';

$l['max_staging_error'] = '您已达到允许的 (<b>&soft-1;</b>) 暂存安装的最大数量。请删除不需要的暂存安装，以便能够创建新的暂存副本';
$l['ampps_notify_premium'] = '此功能在 AMPPS 的高级版本中可用。请购买 <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['error_max_staging_script'] = '您已达到每个脚本允许的最大 (<b>&soft-1;</b>) 暂存数';

$l['choose_url'] = '选择安装地址';
$l['choose_url_exp'] = '请选择安装软件的网址';
