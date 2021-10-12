<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackuploc_lang.php
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
$l['ftp_error-1'] = '无法解析域名';
$l['ftp_error-2'] = '无法使用指定的 FTP 详细信息登录';
$l['ftp_error-3'] = '指定的FTP路径不存在';
$l['ftp_error'] = '无法连接到FTP服务器';
$l['no_ftp_user'] = '没有指定 FTP 用户';
$l['no_backup_loc'] = '没有指定备份位置';
$l['no_backup_loc_name'] = '没有指定备份位置名称';
$l['no_protocol'] = '无效的协议';
$l['no_server_host'] = '没有指定服务器主机';
$l['record_exists'] = '相同路径的备份位置已经存在';
$l['invalid_backup_loc'] = '备份路径不是绝对路径。请提供绝对路径';
$l['no_pass_pri'] = '请提供密码或私钥';
$l['off_rbackup'] = '远程位置备份被管理员禁用';

//主题字符串
$l['<title>'] = '添加备份位置';
$l['location_name'] = '位置名称';
$l['location_name_exp'] = '选择备份位置的名称供您参考';
$l['protocol'] = '协议';
$l['protocol_exp'] = '选择'.APP.'使用的协议。会沟通';
$l['server_host'] = '服务器主机（必填）';
$l['server_host_exp'] = '输入服务器主机，例如ftp.mydomain.com';
$l['port'] = '端口';
$l['port_exp'] = '输入要连接的端口（默认FTP端口为<b>21</b>）';
$l['ftp_user'] = '用户名';
$l['ftp_user_exp'] = '你的FTP账户的用户名';
$l['ftp_pass'] = '密码';
$l['ftp_pass_exp'] = '你的FTP账号密码';
$l['backup_loc'] = '备份位置';
$l['rel_backup_loc_exp'] = 'FTP 用户目录的相对路径，例如/备份';
$l['abs_backup_loc_exp'] = '备份目录的绝对路径，例如/home/USERNAME/backups';
$l['dropbox_backup_loc_exp'] = '备份目录例如/backups 或者您可以留空以允许'.APP.'管理备份目录';
$l['add_backup_loc'] = '添加备份位置';
$l['backup_loc_saved'] = '备份位置添加成功';
$l['ftp'] = 'FTP';
$l['return_settings'] = '返回设置';

$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = '授权';
$l['dropbox_authorize'] = '授权';
$l['dropbox_authorization_exp'] = '授予'.APP.' APP 访问权限以在您的 Dropbox 帐户中创建备份。点击<b>授权</b>按钮并按照步骤操作。记下生成的代码并在下面的<b>Auth Code</b> 文本框中输入相同的代码';
$l['dropbox_code'] = '验证码';
$l['dropbox_code_exp'] = '输入通过上面的<b>授权</b>按钮允许访问后生成的代码';
$l['dropbox_auth_tooltip'] = '点击此按钮授权 Dropbox 访问';
$l['no_dropbox_access'] = '请授权'.APP.'您的 Dropbox 中的应用程序';
$l['token_gen_failed'] = '无法生成 Dropbox 访问令牌';
$l['dropbox_backup_loc'] = '备份位置（可选）';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = '认证方式';
$l['auth_password_exp'] = '选择认证方式';
$l['private_key'] = '私钥';
$l['private_key_exp'] = '在这里粘贴私钥';
$l['passphrase'] = '密码';
$l['passphrase_exp'] = '私钥的密码（可选）';
$l['auth_method_pass'] = '密码';
$l['auth_method_key'] = 'SSH 密钥';

$l['gdrive'] = 'Google 云端硬盘';
$l['gdrive_auth_message'] = '系统将提示您授权'.APP.'在提交表单时访问您的 Google 云端硬盘';
$l['gdrive_token_gen_failed'] = '无法生成 Google Drive 访问令牌';
$l['gdrive_err_access_denied'] = '您似乎取消了授权过程';
$l['ampps_notify_premium'] = '此功能在 AMPPS 的高级版本中可用。请购买 <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['rbackup_protocol_disabled'] = '<b>&soft-1;</b> 上的备份被管理员禁用';

$l['webdav'] = 'WebDAV';
$l['webdav_port_exp'] = '输入要连接的端口（默认 WebDAV 端口为 <b>80</b> 表示不安全，<b>443</b> 表示安全）';
$l['webdav_ftp_user_exp'] = '您的 WebDAV 帐户的用户名';
$l['webdav_ftp_pass_exp'] = '您的 WebDAV 帐户密码';
$l['webdav_backup_loc_exp'] = '来自 WebDAV 用户目录的相对路径，例如/备份';
$l['webdav_server_host_exp'] = '输入服务器主机，例如webdav.mydomain.com';
$l['no_webdav_connect'] = '无法连接到 WebDAV 服务器';

$l['onedrive'] = 'OneDrive';
$l['onedrive_auth_message'] = '系统将提示您授权'.APP.'在提交表单时访问您的 OneDrive';
$l['onedrive_err_access_denied'] = '您似乎取消了授权过程';
$l['onedrive_token_gen_failed'] = '未能生成 OneDrive 访问令牌';

$l['aws_s3bucket'] = '亚马逊 S3';
$l['aws_endpoint'] = 'AWS S3 端点';
$l['aws_endpoint_exp'] = '输入您的 AWS S3 端点，例如"s3.amazonaws.com"<br /> 有关更多信息 <a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">单击此处< /a>';
$l['aws_region'] = 'AWS S3 区域';
$l['aws_region_exp'] ='输入您的 AWS S3 区域，例如“us-east-1”<br />有关更多信息<a href="https://docs.aws.amazon.com/general/latest/gr/s3.html" target="_blank">单击此处< /a>';
$l['aws_bucketname'] = 'AWS S3 存储桶名称';
$l['aws_accessKey'] = 'AWS S3 访问密钥';
$l['aws_secretKey'] = 'AWS S3 密钥';
$l['aws_backup_loc'] = 'AWS S3 备份位置（可选）';
$l['aws_backup_loc_exp'] = '备份目录，例如/backups 或者您可以留空以允许'.APP.'管理备份目录';
$l['aws_bucketname_exp'] = '输入您希望创建软备份的 AWS S3 存储桶名称。如果存储桶不存在，它将自动创建<br />对于存储桶命名规则 <a href="https://docs.aws.amazon.com/AmazonS3/latest/userguide/bucketnamingrules.html" target=" _blank">点击这里</a>';
$l['no_accessKey'] = '请提供 AWS S3 访问密钥';
$l['no_secretKey'] = '请提供 AWS S3 密钥';
$l['no_endpoint'] = '请提供 AWS S3 端点';
$l['no_region'] = '请提供 AWS S3 区域';
$l['no_bucket'] = '请提供 AWS S3 存储桶名称';
$l['create_bucket_failed'] = '创建bucket失败\'&soft-1;\'';