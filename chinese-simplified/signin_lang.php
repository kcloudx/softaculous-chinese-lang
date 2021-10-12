<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_lang.php
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
global $softpanel;
$l['user_data_missing'] = 'API KEY 或 API PASSWORD 字段为空';
$l['invalid_username'] = '您输入的用户名或密码不正确';
$l['invalid_password'] = '您输入的用户名或密码不正确';
$l['no_username'] = '用户名字段为空';
$l['no_password'] = '密码字段为空';

$l['<title>'] = '登录';
$l['sign_in'] = '登录';
$l['log_user'] = 'API 密钥';
$l['log_pass'] = 'API 密码';
$l['sub_but'] = '登录';

$l['<title_fpass>'] = '忘记密码';
$l['pass_nomatch'] = '您输入的用户名或密码不正确。';
$l['forgotpass'] = '忘记密码';
$l['emailuser'] = '电子邮件地址';
$l['enteremail'] = '输入您的电子邮件地址';
$l['sub_email'] = '提交';
$l['no_email'] = '您没有提交您的电子邮件地址';
$l['invalidemail'] = '您提交的邮箱地址无效';
$l['mail_sub'] = '重置密码';
$l['mail_body'] = '嗨，

已提出重置密码的请求。
如果您没有要求重置密码，请忽略此电子邮件。

如果您想重置密码，请点击以下网址：
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php ?act=登录&sa=resetpass&key=&soft-1;

真诚的问候，
'.$globals['sn'];
$l['mail_done'] = '一封包含重置密码详情的邮件已发送';
$l['back_to_login'] = '返回登录';

$l['<title_reset>'] = '重置密码';
$l['resetpass'] = '重置密码';
$l['log_new_pass'] = '新密码';
$l['log_reppass'] = '确认密码';
$l['changepass'] = '修改密码';
$l['no_key'] = '没有提交重置密钥';
$l['invalidkey'] = '您指定的密钥无效';
$l['no_new'] = '请输入有效密码';
$l['no_reppass'] = '请输入确认密码';
$l['no_match'] = '您提供的密码不匹配';
$l['keyexpire'] = '密钥不再有效';
$l['passchanged'] = '密码修改成功。请继续<a href="'.$globals['index'].'act=login">登录</a>';
$l['forgot_pass'] = '忘记密码';
