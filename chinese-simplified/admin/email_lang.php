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

$l['no_mail'] = '没有选择邮件方式';
$l['wrong_mail'] = '您提交的邮件方式无效';
$l['no_mail_server'] = '没有发布 SMTP 邮件服务器';
$l['no_mail_port'] = '没有发布 SMTP 邮件端口';
$l['no_mail_user'] = '没有发布 SMTP 邮件用户名';
$l['no_mail_pass'] = '没有发布 SMTP 邮件密码';
$l['saving_error'] = '保存设置时出现一些错误';

//主题字符串
$l['<title>'] = APP.' - 设置中心';
$l['settings_saved'] = '邮件设置保存成功';
$l['emailhead'] = '电子邮件设置';
$l['mailmethod'] = '邮寄方式';
$l['mailmethod_exp'] = '使用 PHP mail() 函数或您的 SMTP 服务器发送邮件';
$l['smtp_server'] = 'SMTP 服务器';
$l['smtp_port'] = 'SMTP 端口';
$l['smtp_user'] = 'SMTP 用户名';
$l['smtp_pass'] = 'SMTP 密码';
$l['edit_settings'] = '保存设置';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = '为使用 SMTP 发送的电子邮件选择 Authtype';
$l['mail_send'] = '发送测试邮件？';
$l['mail_subject'] = '电子邮件设置 - 测试电子邮件';
$l['mail_message'] = '这是一个测试电子邮件，用于验证'.APP.' 中更新的电子邮件设置。管理面板 -> 电子邮件
随意删除这封电子邮件。';
$l['enc_mail_pass'] = '以加密格式保存 SMTP 密码？';
$l['err_mcrypt'] = '需要mcrypt扩展名来加密密码';
$l['err_openssl'] = '需要使用 Openssl 扩展来加密密码';
