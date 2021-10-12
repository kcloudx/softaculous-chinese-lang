<?php

//////////////////////////////////////////////////////////////
//===========================================================
// update_ssl_cert_lang.php
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

//错误字符串
$l['no_key'] = '需要私钥';
$l['no_crt'] = '需要证书';
$l['key_save_failed'] = '无法写入私钥';
$l['cert_save_failed'] = '无法写入证书';
$l['save_key'] = '证书安装成功！';
$l['invalid_ssl_key'] = 'SSL 证书无效';
$l['no_ssl_support'] = '此面板不支持 SSL 证书功能';

//主题字符串
$l['<title>'] = APP.' - SSL证书';
$l['update_ssl_cert'] = 'SSL 证书';
$l['paste_key'] = '在这里粘贴你的密钥';
$l['paste_crt'] = '在此处粘贴您的证书';
$l['update_button'] = '保存';