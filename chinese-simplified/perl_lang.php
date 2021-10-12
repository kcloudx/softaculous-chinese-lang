<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = '无法找到 INFO.XML 文件！请向服务器管理员报告。';
$l['incompatible'] = '软件需要更高版本的'.APP.'！请向服务器管理员报告。';
$l['no_install'] = '无法找到 INSTALL.XML 文件！请向服务器管理员报告。';
$l['no_functions'] = '无法找到安装函数文件！请向服务器管理员报告。';
$l['no_softdomain'] = '您没有选择安装软件的域。';
$l['wrong_softdomain'] = '找不到您选择的域的路径。';
$l['softdirectory_exists'] = '您输入的目录已经存在！请输入另一个目录名称。';
$l['no_space'] = '您没有足够的空间来安装这个软件！';
$l['no_softdb'] = '数据库未发布。';
$l['database_exists'] = '数据库已经存在。请选择一个不同的名字。';
$l['databaseuser_exists'] = '数据库用户已经存在。请选择一个不同的数据库名称。';
$l['db_name_long'] = '数据库名不能超过7个字母。请选择一个较短的数据库名称。';
$l['db_limit_crossed'] = '已达到您可以创建的最大数据库数，因此无法继续安装。';
$l['no_field'] = '<b>&soft-1;</b> 是必填字段，必须填写。';
$l['error_adddb'] = '无法创建数据库';
$l['error_adduser'] = '将用户添加到新数据库时出错';
$l['no_package'] = '找不到安装包！';
$l['no_decompress'] = '解压缩包文件时出现一些错误。';
$l['mail_new_ins'] = '&soft-1 的全新安装;已经完成。安装细节如下所示：';
$l['mail_path'] = '路径';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = '管理员网址';
$l['mail_admin'] = '管理员用户名';
$l['mail_pass'] = '管理员通行证';
$l['mail_db'] = 'MySQL 数据库';
$l['mail_dbuser'] = 'MySQL 数据库用户';
$l['mail_dbhost'] = 'MySQL 数据库主机';
$l['mail_dbpass'] = 'MySQL 数据库密码';
$l['mail_time'] = '安装时间';
$l['mail_subject'] = '&soft-1 的全新安装;';
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
$l['mail_cron'] = '定时任务';
$l['no_datadir'] = '没有指定数据目录';
$l['datadir_exists'] = '您提交的数据目录存在。请指定另一个。';
$l['no_decompress_data'] = '解压数据文件时出现一些错误。';
$l['mail_datadir'] = '数据目录';
$l['some_files_exist'] = '安装无法继续，因为目标文件夹中已存在以下文件：';
$l['delete_files'] = '请删除这些文件或选择另一个文件夹。';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style ="color:#000;">选中复选框覆盖所有文件并继续</span></b>';
$l['www_files_exist'] = '安装无法继续，因为WEB目录中已经存在以下文件';
$l['no_decompress_www'] = '解压 Web 文件时出现一些错误。';
$l['no_config_perl_path'] = '配置 CGI 文件时出错。';
$l['mail_wwwdir'] = '网站目录';
$l['checking_data'] = '检查提交的数据';
$l['unzipping_files'] = '复制文件和文件夹';
$l['unzipping_datadir'] = '解压数据文件';
$l['prop_db'] = '传播数据库';
$l['finishing_process'] = '完成安装';
$l['wait_note'] = '<b>注意：</b>这可能需要 3-4 分钟。请在进度条达到 100% 之前不要离开此页面';
$l['softdirectory_invalid'] = '您输入的目录无效。';
$l['softdatadir_invalid'] = '您输入的数据目录无效。';
$l['wwwdir_invalid'] = '您输入的 WWW 目录无效。';
$l['err_pass_strength'] = '密码强度必须大于';
$l['no_https'] = '未找到受信任的 SSL 证书';
$l['err_dbprefix'] = '表前缀无效。有效值为 a-z 或 A-Z 或 0-9 或 _';
$l['no_perl_install'] = 'PERL 未安装。要安装它，请点击<a href="'.$globals['index'].'act=apps&app=19">这里</a>';
$l['no_mysql_install'] = 'MySQL 未安装。要安装它，请点击<a href="'.$globals['index'].'act=apps&app=16">此处</a>';
$l['auto_backup_not_allowed'] = '您选择的自动备份频率无效';
$l['invalid_script'] = '无效的脚本 ID';
$l['not_perl_script'] = '此脚本不在 PERL 中';

//主题字符串
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = '安装';
$l['overview'] = '概览';
$l['features'] = '功能';
$l['demo'] = '演示';
$l['ratings'] = '评级';
$l['import'] = '导入';
$l['software_ver'] = '版本';
$l['space_req'] = '需要空格';
$l['available_space'] = '可用空间';
$l['req_space'] = '所需空间';
$l['mb'] = 'MB';
$l['software_support'] = '软件支持';
$l['support_link'] = '访问支持站点';
$l['support_note'] = '注意：Softaculous 不提供对任何软件的支持。';
$l['setup'] = '软件设置';
$l['choose_domain'] = '选择域';
$l['choose_domain_exp'] = '请选择安装软件的域。';
$l['in_directory'] = '在目录中';
$l['in_directory_exp'] = '该目录与您的域相关，<b>不应该存在</b>。例如要在 http://mydomain/dir/ 安装，只需键入 <b>dir</b>。要仅安装在 http://mydomain/ 中，请将其留空。';
$l['database_name'] = '数据库名称';
$l['database_name_exp'] = '输入要为安装创建的数据库的名称';
$l['softcopy_note'] = '<b>注意</b>：此软件要求使用其自己的安装实用程序进行安装。请访问将在复制文件后显示的 URL 以完成安装过程。';
$l['softsubmit'] = '安装';
$l['congrats'] = '恭喜，软件安装成功';
$l['succesful'] = '已成功安装于';
$l['admin_url'] = '管理网址';
$l['setup_continue'] = '但是，设置将由软件本身完成。要完成设置，请访问以下 URL';
$l['enjoy'] = '我们希望安装过程很简单。';
$l['install_notes'] = '以下是一些重要的注意事项。强烈建议您阅读它们 ';
$l['please_note'] = '<b>注意</b>：'.APP.'只是一个自动软件安装程序，不为单个软件包提供任何支持。请访问软件供应商的网站以获得支持！';
$l['regards'] = '问候';
$l['softinstaller'] = APP.'自动安装程序';
$l['return'] = '返回概览';
$l['current_ins'] = '当前安装';
$l['link'] = '链接';
$l['ins_time'] = '安装时间';
$l['version'] = '版本';
$l['upd_to'] = '升级到版本';
$l['remove'] = '移除';
$l['no_info'] = '没有信息';
$l['randpass'] = '生成随机密码';
$l['ratesoft'] = '评价这个脚本';
$l['reviews'] = '评论';
$l['reviewsoft'] = '写评论';
$l['readreviews'] = '阅读评论';
$l['reviews_exp'] = '阅读其他用户的评论和';
$l['cron_job'] = 'CRON 作业';
$l['cron_job_exp'] = '这个脚本需要一个 CRON 才能工作。请指定 CRON 时序。如果您不知道，请保持原样！';
$l['cron_min'] = 'Min';
$l['cron_hour'] = '小时';
$l['cron_day'] = '天';
$l['cron_month'] = '月';
$l['cron_weekday'] = '工作日';
$l['datadir'] = '数据目录';
$l['datadir_exp'] = '此脚本需要将其数据存储在无法通过网络访问的文件夹中。它将在您的主文件夹中创建。即如果您指定 <b>datadir</b> 将创建以下内容 - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = '数据库名称只允许使用字母数字字符。';
$l['overwrite'] = '覆盖文件';
$l['ins_emailto'] = '将安装详细信息发送至';
$l['choose_protocol'] = '选择协议';
$l['choose_protocol_exp'] = '如果您的站点有 SSL，那么请选择 HTTPS 协议。';
$l['clone'] = '克隆';
$l['backup'] = '备份';
$l['options'] = '选项';
$l['admin'] = '管理员';
$l['notify_ver'] = '通知'.$globals['sn'].'新版本';
$l['notifyversion'] = '感谢您告知新版本。我们会尽快调查';
$l['del_insid'] = '您确定要删除选定的安装吗？操作将是不可逆转的。 \n不会再要求确认。';
$l['rem_inst_id'] = '删除安装 - ';
$l['no_sel_inst'] = '没有选择要删除的安装。';
$l['inst_remvd'] = '选定的安装已被删除。页面现在将重新加载！';
$l['remove'] = '移除';
$l['go'] = '执行';
$l['screenshots'] = '截图';
$l['downloading'] = '下载包';
$l['installing'] = '安装脚本';
$l['editdetail'] = '编辑细节';
$l['wwwdir'] = '网页目录';
$l['wwwdir_exp'] = '可通过网络访问的目录';
$l['publish'] = '在网络上发布';
$l['release_date'] = '发布日期';
$l['adv_option'] = '高级选项';
$l['disable_notify_update'] = '禁用更新通知电子邮件';
$l['exp_disable_notify_update'] = '如果选中，您将不会收到有关此安装可用更新的电子邮件通知。';
$l['prog_installing'] = '安装中'; // 不要删除尾随空格
$l['prog_install_complete'] = '安装完成。';
$l['bad'] = '坏';
$l['good'] = '好';
$l['strong'] = '强';
$l['short'] = '短';
$l['strength_indicator'] = '强度指标';
$l['auto_upgrade_enabled'] = '启用自动升级';

$l['auto_backup'] = '自动备份';
$l['exp_auto_backup'] = APP.'将根据您选择的频率通过 CRON 进行自动备份';
$l['auto_backup_rotation'] = '备份轮换';
$l['exp_auto_backup_rotation'] = '如果达到备份轮换限制'.APP.'将删除此安装的最旧备份并创建新备份。备份将占用您的空间，因此请根据您服务器上的可用空间选择备份轮换';
$l['no_backup'] = '不要备份';
$l['daily'] = '一天一次';
$l['weekly'] = '每周一次';
$l['monthly'] = '每月一次';
$l['unlimited'] = '无限制';
$l['changelog'] = 'changelog';
$l['act_upgrade'] = '最近升级';
$l['act_clone'] = '最近克隆';
$l['act_backup'] = '最近备份';
$l['act_install'] = '最近安装';
$l['act_edit'] = '最近编辑';
$l['act_import'] = '最近导入';
$l['act_restore'] = '最近恢复';
$l['ampps_download'] = '您可以使用我们的免费开发者工具 Softaculous AMPPS 在您的<b>桌面</b>上开发<b>&soft-1;</b>。点击<a href="http://www.ampps.com/download?give=latest" target="_blank"><b>此处</b></a>下载<a href="http:/ /www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>' ;

$l['install_tweet_sub'] = '告诉你的朋友你的新网站';
$l['err_auto_backup_limit'] = '自动备份轮换不能超过<b>&soft-1;</b>';
$l['select_domain'] = '选择域';
$l['with_selected'] = '选择';
$l['related_scripts'] = '相关脚本';

$l['soft_ins_exists'] = '安装已经存在于 &soft-1;根据我们的记录。要重新安装应用程序，请卸载现有安装！';
$l['install_now'] = '立即安装';
$l['my_apps'] = '我的应用程序';

$l['backup_location'] = '备份位置';
$l['backup_location_exp'] = '选择备份此安装时要使用的备份位置';
$l['default'] = '默认';
$l['invalid_backup_location'] = '提交的备份位置不存在';
$l['local_folder'] = '本地文件夹';

$l['custom_autobackup'] = '自定义';
$l['custom_autobackup_cron'] = '自动备份 Cron 时间';
$l['custom_autobackup_cron_exp'] = '请指定自动备份的 CRON 时间';

// autobcakup cron 设置错误
$l['wrong_autobackup_cron_min'] = '自动备份 cron 分钟是错误的。有效值为 0-59 或 *';
$l['wrong_autobackup_cron_hour'] = '自动备份 cron 时间错误。有效值为 0-23 或 *';
$l['wrong_autobackup_cron_day'] = '自动备份 cron 日期错误。有效值为 1-31 或 *';
$l['wrong_autobackup_cron_month'] = '自动备份 cron 月份错误。有效值为 1-12 或 *';
$l['wrong_autobackup_cron_weekday'] = '自动备份 cron 工作日错误。有效值为 0-7 或 *';

$l['quick_install'] = '快速安装';
$l['custom_install'] = '自定义安装';

$l['outdated_script'] = '<b>&soft-1;</b> 超过两年未更新，可能不再由脚本供应商维护或支持';
$l['ampps_notify_premium'] = '此功能在 AMPPS 的高级版本中可用。请购买 <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = '选择安装地址';
$l['choose_url_exp'] = '请选择安装软件的网址';

$l['error_max_ins_script'] = '您已达到每个脚本允许的 (<b>&soft-1;</b>) 安装的最大数量';

$l['rbackup_disabled'] = '远程位置的备份被管理员禁用';
$l['rbackup_protocol_disabled'] = '<b>&soft-1;</b> 上的备份被管理员禁用';
$l['database_name_exp_aefer'] = '输入用于安装的数据库名称';
$l['remove_info'] = '从'.APP.'中删除';