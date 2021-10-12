<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_lang.php
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
$l['no_email'] = '未指定电子邮件地址';
$l['wrong_email'] = '提交的电子邮件地址无效';
$l['off_email_link'] = '电子邮件设置已被管理员禁用';

//主题字符串
$l['<title>'] = APP.' - 电子邮件设置';
$l['emailsettings'] = '电子邮件设置';
$l['email_address'] = '电子邮件地址';
$l['email_exp'] = '发送邮件的电子邮件地址';
$l['ins_email'] = '安装邮件';
$l['ins_email_exp'] = '安装新软件时发送一封包含设置详细信息的电子邮件';
$l['rem_email'] = '删除安装';
$l['rem_email_exp'] = '卸载软件时发送电子邮件';
$l['edit_settings'] = '编辑电子邮件设置';
$l['settings_saved'] = '您的电子邮件设置已成功保存';
$l['editdetail_email'] = '编辑安装';
$l['editdetail_email_exp'] = '修改安装细节时发送电子邮件';
$l['disable_all_notify_update'] = '禁用所有更新通知电子邮件';
$l['disable_all_notify_update_exp'] = '如果选中，您将不会收到任何有关<b>ALL</b> 安装可用更新的电子邮件通知。';
$l['all_notify_update'] = '更新通知邮件';
$l['all_notify_update_exp'] = '发送电子邮件通知，通知您<b>ALL</b> 的安装可用的更新。';
$l['backup_email'] = '备份邮件';
$l['backup_email_exp'] = '备份任何安装时发送一封包含备份详细信息的电子邮件';
$l['clone_email'] = '克隆电子邮件';
$l['clone_email_exp'] = '当您克隆任何安装时发送一封包含安装详细信息的电子邮件';
$l['restore_email'] = '恢复邮件';
$l['restore_email_exp'] = '当您恢复任何安装时发送一封包含恢复详细信息的电子邮件';
$l['done'] = '完成';

$l['email_password_user'] = '纯文本的电子邮件密码';
$l['email_password_user_exp'] = '如果选中，密码将以纯文本形式通过电子邮件发送给用户，用于安装、克隆等';

$l['import_email'] = '导入电子邮件';
$l['import_email_exp'] = '发送一封包含您导入的安装详细信息的电子邮件';

$l['staging_email'] = '暂存电子邮件';
$l['staging_email_exp'] = '当您创建任何安装的临时环境时，发送一封包含安装详细信息的电子邮件';
