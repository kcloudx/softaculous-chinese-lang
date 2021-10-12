<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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
$l['cant_remove_dir'] = '目录不能被删除，因为它是主目录。请取消选中<b>删除目录</b>选项以继续而不删除目录。';
$l['no_dir'] = '安装目录不存在！';
$l['no_datadir'] = '数据目录不存在！';
$l['empty_datadir'] = '数据目录不能为空';
$l['no_wwwdir'] = 'Web 目录不存在！';
$l['wrong_url'] = 'URL 和目录名称不匹配';
$l['wrong_wwwurl'] = 'WEB URL 和WEB DIRECTORY 名称不匹配';
$l['err_mysql_user'] = 'MySQL 用户名或密码或数据库主机错误，无法建立连接。';
$l['err_mysql_db'] = 'MySQL 数据库名称不正确，无法选择数据库。';
$l['mail_path'] = '路径';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL 数据库';
$l['mail_dbuser'] = 'MySQL 数据库用户';
$l['mail_dbhost'] = 'MySQL 数据库主机';
$l['mail_dbpass'] = 'MySQL 数据库密码';
$l['mail_time'] = '安装时间';
$l['mail_editdetail_time'] = '修改时间';
$l['mail_subject'] = '修改了&soft-1的安装细节;';
$l['mail_cron_command'] = 'CRON 作业';
$l['mail_datadir'] = '数据目录';
$l['mail_wwwdir'] = '网站目录';
$l['mail_wwwurl'] = '网页目录网址';

//主题字符串
$l['<title>'] = APP.' - 编辑细节';
$l['ins_details'] = '安装细节';
$l['信息'] = '信息';
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
$l['details_edited'] = '安装详情编辑成功';
$l['version_edited'] = '版本已在我们的记录中更新。';
$l['return'] = '返回概览';

$l['edit_ins'] = '编辑安装细节';
$l['edit_dir'] = '目录';
$l['edit_datadir'] = '数据目录';
$l['edit_db'] = '数据库名称';
$l['edit_dbuser'] = '数据库用户';
$l['edit_dbpass'] = '数据库密码';
$l['edit_dbhost'] = '数据库主机';
$l['edit_url'] = 'URL';
$l['editins'] = '保存安装细节';
$l['mail_editdetail_ins'] = '&soft-1的安装细节;已修改。以下是安装的修改细节： ';
$l['edit_wwwdir'] = '网页目录';
$l['edit_wwwurl'] = '网页目录网址';
$l['disable_notify_update'] = '禁用更新通知电子邮件';
$l['exp_disable_notify_update'] = '如果选中，您将不会收到有关此安装可用更新的电子邮件通知。';
$l['alreadyupdated'] = '嗯...看起来安装的实际版本是 <b>&soft-1;</b> 而不是 <b>&soft-2;</b>。 <br />点击此处更新'.APP.'记录。';
$l['edit_acc_detail'] = '编辑管理员账户详情';
$l['eu_auto_upgrade'] = '自动升级';
$l['dont_auto_upgrade'] = '不要自动升级';
$l['minor_auto_upgrade'] = '仅升级到<b>次要</b>版本';
$l['major_auto_upgrade'] = '升级到任何可用的最新版本（<b>主要</b>以及<b>次要</b>）';
$l['exp_eu_auto_upgrade'] = '当有新版本可用时，选择此安装的自动升级首选项';
$l['auto_upgrade_plugins'] = '自动升级 &soft-1;插件';
$l['exp_auto_upgrade_plugins'] = '如果选中，所有 &soft-1;为此安装安装的插件将自动升级到最新版本（每 24 小时）。';
$l['auto_upgrade_themes'] = '自动升级 &soft-1;主题';
$l['exp_auto_upgrade_themes'] = '如果选中，所有 &soft-1;此安装的主题将自动升级到最新版本（每 24 小时）。';
$l['auto_backup'] = '自动备份';
$l['exp_auto_backup'] = APP.'将根据您选择的频率通过 CRON 进行自动备份';
$l['auto_backup_rotation'] = '备份轮换';
$l['exp_auto_backup_rotation'] = '如果达到备份轮换限制'.APP.'将删除此安装的最旧备份并创建新备份。备份将利用您的空间，因此请根据服务器上的可用空间选择备份轮换';
$l['no_backup'] = '不要备份';
$l['daily'] = '一天一次';
$l['weekly'] = '每周一次';
$l['monthly'] = '每月一次';
$l['unlimited'] = '无限制';
$l['auto_backup_not_allowed'] = '您选择的自动备份频率无效';

$l['no_edit'] = '无法找到 EDIT.XML 文件！请向服务器管理员报告。';
$l['no_functions'] = '无法找到编辑功能文件！请回购将此发送给服务器管理员。';
$l['no_field'] = '<b>&soft-1;</b> 是必填字段，必须填写。';
$l['err_auto_backup_limit'] = '自动备份轮换不能超过<b>&soft-1;</b>';
$l['select_files'] = '选择其他文件/文件夹';
$l['select_files_exp'] = '请选择与此安装相关的附加文件/文件夹。 <br />此列表将用于此安装的克隆、备份和删除等操作';
$l['invalid_files_in_post_list'] = '选择了一些无效的文件/文件夹';
$l['select_files_list'] = '从以下列表中选择其他文件/文件夹';

$l['select_files_backup'] = '使用上面选择的文件/文件夹进行备份';
$l['select_files_backup_exp'] = '如果选中，则仅备份与此安装相关的文件/文件夹。 <br />默认备份将包含此路径下的所有文件/文件夹';
$l['no'] = 'No（备份安装目录内的所有文件和文件夹，不包括子域）';
$l['yes'] = '是（备份标准应用程序文件/文件夹以及上述选定的文件/文件夹）';
$l['check_all_edit'] = '检查所有';

$l['choose_theme'] = '安装主题';
$l['clear_theme'] = '清除选择';
$l['installing_theme'] = '安装主题';
$l['cant_download_theme'] = '无法下载主题文件';
$l['no_theme_package'] = '找不到主题安装包！';
$l['unzipping_theme_files'] = '复制主题文件和文件夹';
$l['use_this_theme'] = '选择这个';
$l['demo'] = '演示';
$l['refresh'] = '刷新';
$l['purchase'] = '购买';
$l['close'] = '关闭';
$l['free'] = '免费';
$l['select'] = '选择';
$l['theme_is_optional'] = '<b>注意</b>：这是可选的。仅当您想更改当前主题时才选择。';
$l['your_purchased'] = 'Purchased';//需要尾随空格
$l['your_purchased_times'] = 'time(s)';
$l['err_theme_not_bought'] = '您还没有购买主题，所以无法安装！';
$l['err_theme_reached_limit'] = '请购买此主题并尝试重新安装。您已达到安装此主题的限制。';
$l['payment_heading'] = '购买主题';
$l['payment_redirect'] = '您将被重定向到支付';//需要尾随空格
$l['date_added'] = '添加日期';
$l['date_added'] = '已下载';
$l['edit_dbpass_exp'] = '新数据库密码。 <br/>如果您不想更新密码，请留空';
$l['select_tables'] = '选择附加数据库表';
$l['select_tables_exp'] = '选定的表将包含在数据库备份中';
$l['backup_loc'] = '备份位置';
$l['exp_backup_loc'] = '选择备份此安装时要使用的备份位置';
$l['default'] = '默认';
$l['invalid_backup_location'] = '提交的备份位置不存在';
$l['local_folder'] = '本地文件夹';

$l['cron_min'] = 'Min';
$l['cron_hour'] = '小时';
$l['cron_day'] = '天';
$l['cron_month'] = '月';
$l['cron_weekday'] = '工作日';

$l['no_cron_min'] = '没有指定 Cron 分钟';
$l['no_cron_hour'] = '没有指定 Cron 小时';
$l['no_cron_day'] = '没有指定 Cron 日期';
$l['no_cron_month'] = '没有指定 Cron 月份';
$l['no_cron_weekday'] = '没有指定 Cron 工作日';

$l['custom_autobackup'] = '自定义';
$l['custom'] = '自定义 Cron 时间';
$l['custom_autobackup_cron'] = '自动备份 Cron 时间';
$l['custom_autobackup_cron_exp'] = '请指定自动备份的 CRON 时间';

// autobcakup cron 设置错误
$l['wrong_autobackup_cron_min'] = '自动备份 cron 分钟是错误的。有效值为 0-59 或 *';
$l['wrong_autobackup_cron_hour'] = '自动备份 cron 时间错误。有效值为 0-23 或 *';
$l['wrong_autobackup_cron_day'] = '自动备份 cron 日期错误。有效值为 1-31 或 *';
$l['wrong_autobackup_cron_month'] = '自动备份 cron 月份错误。有效值为 1-12 或 *';
$l['wrong_autobackup_cron_weekday'] = '自动备份 cron 工作日错误。有效值为 0-7 或 *';

$l['done'] = '完成';
$l['error'] = '错误';
$l['plugins_upgrade_now'] = '立即升级插件';
$l['theme_upgrade_now'] = '立即升级主题';
$l['plugins_upgrade_success'] = '插件升级成功！！';
$l['theme_upgrade_success'] = '主题升级成功！！';
$l['fetch_db_details'] = '允许 Softaculous 获取数据库详细信息吗？';

$l['edit_notes'] = '以下是一些重要的注释。强烈建议您阅读它们 ';
$l['domain_not_in_list'] = '发布的 URL 不在您的域列表中';

$l['auto_upgrade_major'] = '(主要和次要)';
$l['auto_upgrade_minor'] = '(次要)';

$l['wpc_return'] = '返回安装';

$l['rbackup_disabled'] = '远程位置的备份被管理员禁用';
$l['rbackup_protocol_disabled'] = '<b>&soft-1;</b> 上的备份被管理员禁用';
