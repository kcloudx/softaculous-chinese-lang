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
$l['no_info_file'] = '没有指定 ID 的类';
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
$l['cant_download'] = '无法下载 ZIP 文件。';
$l['softdirectory_invalid'] = '您输入的目录无效。';
$l['softdirectory_exists'] = '您输入的目录已经存在！请输入另一个目录名称。';
$l['ins_emailto'] = '将安装详细信息发送至';
$l['disable_classes'] = 'PHP 类被管理员禁用或您正在使用免费版'.APP;
$l['invalid_class_id'] = '无效的类 ID';

//主题字符串
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = '安装';
$l['overview'] = '自述文件';
$l['features'] = '功能';
$l['demo'] = '演示';
$l['file'] = '文件';
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
$l['in_directory_exp'] = '该目录相对于您的主路径，如果它不存在，将被<b>创建</b>。例如要安装在 &soft-1;/dir 只需键入 <b>dir</b>。只安装在 &soft-1;/ 留空。';
$l['aef_in_directory_exp'] = '该目录相对于您的主路径，如果它不存在，将被<b>创建</b>。例如要安装在 <span id="aef_span_lang">&soft-1;</span>/dir 只需键入 <b>dir</b>。只安装在 <span id="aef_span_lang_a">&soft-1;</span>/ 留空。';
$l['softsubmit'] = '安装';
$l['congrats'] = '恭喜，软件安装成功';
$l['succesful'] = '已成功安装于';
$l['enjoy'] = '我们希望安装过程很简单。';
$l['install_notes'] = '以下是一些重要的注意事项。强烈建议您阅读它们 ';
$l['please_note'] = '<b>注意</b>：'.APP.'只是一个自动软件安装程序，不为单个软件包提供任何支持。请访问软件供应商的网站以获得支持！';
$l['问候'] = '问候';
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
$l['ins_type_exp'] = '<b>原始包</b> - 可从脚本网站获得的包。 <br /> <b>只是库文件</b> - 只是 Javascript 库文件。';
$l['ori_pack'] = '原包装';
$l['just_lib'] = '只是库文件';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style ="color:#000;">选中复选框以覆盖所有文件d 继续</span></b>';
$l['overwrite'] = '覆盖文件';
$l['choose_protocol'] = '选择协议';
$l['choose_protocol_exp'] = '如果您的站点有 SSL，那么请选择 HTTPS 协议。';
$l['downloading'] = '下载包';
$l['installing'] = '安装脚本';
$l['files'] = '文件和文件夹';
$l['modified_time'] = '最后修改时间';
$l['size'] = '大小';
$l['classes_ins_error'] = '保存安装时出错。';
$l['del_insid'] = '您确定要删除选定的安装吗？操作将是不可逆转的。 \n不会再要求确认。';
$l['rem_inst_id'] = '删除安装 - ';
$l['no_sel_inst'] = '没有选择要删除的安装。';
$l['inst_remvd'] = '选定的安装已被删除。页面现在将重新加载！';
$l['go'] = '执行';
$l['download_zip'] = '下载所有文件';
$l['software_category'] = '类别';
$l['adv_option'] = '高级选项';
$l['disable_notify_update'] = '禁用更新通知电子邮件';
$l['exp_disable_notify_update'] = '如果选中，您将不会收到有关此安装可用更新的电子邮件通知。';
$l['prog_installing'] = 'Installing ';// 不要去掉尾随空格
$l['prog_install_complete'] = '安装完成。';

$l['install_tweet_sub'] = '告诉你的朋友';
$l['select_domain'] = '选择域';
$l['with_selected'] = '选择';
$l['download'] = '下载';
