<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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
$l['no_space'] = '您没有足够的空间来安装这个软件！';
$l['no_field'] = '<b>&soft-1;</b> 是必填字段，必须填写。';
$l['no_package'] = '找不到安装包！';
$l['no_decompress'] = '解压缩包文件时出现一些错误。';
$l['mail_new_ins'] = '&soft-1 的全新安装;已经完成。安装细节如下所示：';
$l['mail_path'] = '路径';
$l['mail_url'] = 'URL';
$l['mail_time'] = '安装时间';
$l['mail_subject'] = '&soft-1 的全新安装;';
$l['some_files_exist'] = '安装无法继续，因为目标文件夹中已存在以下文件：';
$l['delete_files'] = '请删除这些文件或选择另一个文件夹。';
$l['checking_data'] = '检查提交的数据';
$l['unzipping_files'] = '复制文件和文件夹';
$l['unzipping_datadir'] = '解压数据文件';
$l['prop_db'] = '传播数据库';
$l['finishing_process'] = '完成安装';
$l['wait_note'] = '<b>注意：</b>这可能需要 3-4 分钟。请在进度条达到 100% 之前不要离开此页面';
$l['softdirectory_invalid'] = '您输入的目录无效。';
$l['err_domain'] = '无域';
$l['err_domain_admin'] = '该用户没有任何域。请联系管理员。';
$l['err_pass_strength'] = '密码强度必须大于';
$l['no_sel_inst'] = '没有选择的安装';
$l['del_insid'] = '您确定要删除选定的安装吗？';
$l['ins_emailto'] = '将安装详细信息发送至';
$l['no_https'] = '未找到受信任的 SSL 证书';
$l['err_dbprefix'] = '表前缀无效。有效值为 a-z 或 A-Z 或 0-9 或 _';
$l['auto_backup_not_allowed'] = '您选择的自动备份频率无效';
$l['invalid_script'] = '无效的脚本 ID';
$l['not_js_script'] = '这个脚本不是 JavaScript';
$l['no_domain_found'] = '未找到域。请添加一个域来安装脚本';

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
$l['in_directory_exp'] = '该目录相对于您的域，如果它不存在，将被<b>创建</b>。例如要在 http://mydomain/dir/ 安装，只需键入 <b>dir</b>。要仅安装在 http://mydomain/ 中，请将其留空。';
$l['softcopy_note'] = '<b>注意</b>：此软件要求使用其自己的安装实用程序进行安装。请访问将在复制文件后显示的 URL 以完成安装过程。';
$l['softsubmit'] = '安装';
$l['congrats'] = '恭喜，软件安装成功';
$l['succesful'] = '已成功安装于';
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
$l['ratesoft'] = '评价这个脚本';
$l['reviews'] = '评论';
$l['reviewsoft'] = '写评论';
$l['readreviews'] = '阅读评论';
$l['reviews_exp'] = '阅读其他用户的评论和';
$l['ins_type'] = '安装类型';
$l['ins_type_exp2'] = '请选择安装类型';
$l['ins_type_exp'] = '<b>原始包</b> - 可从脚本网站获得的包。 <br /> <b>只是库文件</b> - 只是 Javascript 库文件。';
$l['ori_pack'] = '原包装';
$l['just_lib'] = '只是库文件';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style ="color:#000;">选中复选框覆盖所有文件并继续</span></b>';
$l['overwrite'] = '覆盖文件';
$l['choose_protocol'] = '选择协议';
$l['choose_protocol_exp'] = '如果您的站点有 SSL，那么请选择 HTTPS 协议。';
$l['clone'] = '克隆';
$l['backup'] = '备份';
$l['options'] = '选项';
$l['downloading'] = '下载包';
$l['installing'] = '安装脚本';
$l['editdetail'] = '编辑细节';
$l['go'] = '执行';
$l['rem_inst_id'] = '删除安装 - ';
$l['inst_remvd'] = '选定的安装已被删除。页面现在将重新加载！';
$l['release_date'] = '发布日期';
$l['adv_option'] = '高级选项';
$l['disable_notify_update'] = '禁用更新通知电子邮件';
$l['exp_disable_notify_update'] = '如果选中，您将不会收到有关此安装可用更新的电子邮件通知。';
$l['prog_installing'] = '安装中'; // 不要删除尾随空格
$l['prog_install_complete'] = '安装完成。';

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
$l['install_now'] = '立即安装';
$l['my_apps'] = '我的应用程序';

$l['bad'] = '坏';
$l['good'] = '好';
$l['strong'] = '强';
$l['short'] = '短';
$l['strength_indicator'] = '强度指标';
$l['show'] = '显示';
$l['hide'] = '隐藏';

$l['backup_location'] = '备份位置';
$l['backup_location_exp'] = '选择备份此安装时要使用的备份位置';
$l['default'] = '默认';
$l['invalid_backup_location'] = '提交的备份位置不存在';
$l['local_folder'] = '本地文件夹';

$l['no_cron_min'] = '没有指定 Cron 分钟';
$l['no_cron_hour'] = '没有指定 Cron 小时';
$l['no_cron_day'] = '没有指定 Cron 日期';
$l['no_cron_month'] = '没有指定 Cron 月份';
$l['no_cron_weekday'] = '没有指定 Cron 工作日';

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
$l['notify_ver'] = '通知'.$globals['sn'].'新版本';
$l['notifyversion'] = '感谢您告知新版本。我们会尽快调查';

$l['rbackup_disabled'] = '远程位置的备份被管理员禁用';
$l['rbackup_protocol_disabled'] = '<b>&soft-1;</b> 上的备份被管理员禁用';

$l['randpass'] = '生成随机密码';
$l['cron_min'] = 'Min';
$l['cron_hour'] = '小时';
$l['cron_day'] = '天';
$l['cron_month'] = '月';
$l['cron_weekday'] = '工作日';
$l['remove_complete'] = '完全删除';
$l['remove_info'] = '从'.APP.'中删除';
