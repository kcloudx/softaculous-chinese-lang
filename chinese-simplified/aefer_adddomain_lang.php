<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain_lang.php
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
$l['no_domain'] = '没有指定域名';
$l['alreay_exists'] = '提交的域已存在于您的帐户中。';
$l['no_ftp_user'] = '没有指定 FTP 用户';
$l['no_ftp_pass'] = '没有指定 FTP 密码';
$l['no_ftp_path'] = '没有指定 FTP 路径';
$l['no_backup_path'] = '没有指定备份路径';
$l['no_data_dir'] = '没有指定数据目录';
$l['wrong_ftp_path'] = '提交的 FTP 路径不正确，未指向指定域。';
$l['ftp_error-1'] = '无法解析域名';
$l['ftp_error-2'] = '无法使用指定的 FTP 详细信息登录';
$l['ftp_error-3'] = '指定的FTP路径不存在';
$l['no_port'] = '没有指定端口';
$l['no_pub_allowed'] = '使用密码进行身份验证时不需要公钥';
$l['no_public_key'] = '找不到公钥的路径';
$l['no_private_key'] = '找不到私钥的路径';
$l['err_sftp_only'] = '只有 SFTP 允许通过密钥进行身份验证';
$l['no_pub_pri'] = '未找到公钥或私钥';
$l['no_protocol'] = '无效的协议';
$l['not_allowed'] = '您不能添加域';
$l['ftp_error'] = '无法连接到FTP服务器';
$l['err_upload_remote'] = '无法上传文件到FTP路径';
$l['err_fetch_file'] = '无法访问上传到域的文件';
$l['err_fetch_path'] = '无法从接收到的数据中获取路径';

//主题字符串
$l['<title>'] = '添加域名';
$l['add_domain'] = '添加域';
$l['domain'] = '域名';
$l['domain_exp'] = '输入一个有效的域名（不带 http://）例如mydomain.com';
$l['ftp_user'] = '用户名';
$l['ftp_user_exp'] = '你的FTP账户的用户名';
$l['ftp_pass'] = '密码';
$l['ftp_pass_exp'] = '你的FTP账号密码';
$l['ftp_path'] = '路径';
$l['ftp_path_exp'] = '用户的网络可访问目录的相对路径。例如/public_html';
$l['backup_path'] = '备份路径';
$l['backup_path_exp'] = '用户主目录的相对路径。例如/备份';
$l['data_dir'] = '数据目录';
$l['data_dir_exp'] = '数据目录的完整路径，例如/home/USER/datadir<br/>某些脚本（如 Elgg、Moodle 等）需要一个不可通过网络访问的文件夹。<br/>这将用于此目的。';
$l['ins_email_exp'] = '安装新软件时发送一封包含设置详细信息的电子邮件';
$l['submit_add'] = '测试并保存域';
$l['settings_saved'] = '您的域名已成功保存';
$l['show_all_dom'] = '显示所有域';
$l['port'] = '端口';
$l['port_exp'] = '输入要连接的端口';
$l['protocol'] = '协议';
$l['protocol_exp'] = '选择 Softaculous 通信的协议';
$l['auth_password'] = '认证方式';
$l['auth_password_exp'] = '选择认证方式';
$l['private_key'] = '私钥';
$l['private_key_exp'] = '在这里粘贴私钥';
$l['passphrase'] = '密码';
$l['passphrase_exp'] = '加密私钥的密码（可选）';
$l['sftp_path'] = '网页目录';
$l['sftp_path_exp'] = '用户网页目录的绝对路径。例如/home/USERNAME/public_html';
$l['sbackup_path_exp'] = '备份目录的绝对路径，例如 /home/USERNAME/backups';
$l['server_host'] = '服务器主机（可选）';
$l['server_host_exp2'] = '输入您的服务器主机名';
$l['server_host_exp'] = '<b>IF</b> 您的域名和服务器主机不同，请输入服务器主机，例如ftp.mydomain.com';
$l['auth_method_pass'] = '密码';
$l['auth_method_key'] = 'SSH 密钥';
$l['no_pass_pri'] = '请提供密码或私钥';
$l['err_reconnect'] = '无法重新连接到数据库';
