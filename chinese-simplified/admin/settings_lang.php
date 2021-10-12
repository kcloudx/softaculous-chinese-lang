<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_path'] = '没有发布路径';
$l['wrong_path'] = '在你指定的路径上找不到universal.php';
$l['no_softscripts'] = '没有给出脚本/软件位置的路径';
$l['wrong_softscripts'] = '脚本/软件路径错误，因为它不存在';
$l['no_sn'] = '没有指定站点名称。';
$l['no_cookie_name'] = '没有指定 cookie 名称';
$l['no_soft_email'] = '没有提供电子邮件地址';
$l['wrong_soft_email'] = '您提交的管理员邮箱地址无效';
$l['wrong_from_email'] = '您提交的发件人电子邮件地址无效';
$l['no_license'] = '没有提交许可证密钥';
$l['no_lang'] = '没有选择语言';
$l['wrong_lang'] = '所选语言无效';
$l['no_theme_folder'] = '没有选择主题';
$l['wrong_theme_folder'] = '所选主题无效';
$l['no_timezone'] = '没有选择时区';
$l['wrong_timezone'] = '选择的时区无效';
$l['no_cron_time'] = '没有指定 cron 作业时间';
$l['no_off_message'] = '没有指定关闭主题';
$l['no_off_subject'] = '没有指定关闭消息';
$l['saving_error'] = '保存设置时出现错误';
$l['no_update'] = '没有提交更新首选项';
$l['invalid_update'] = '提交了无效的更新首选项';
$l['no_protocol'] = '没有选择协议';
$l['wrong_protocol'] = '选择的协议无效';
$l['wrong_network_interface'] = '您指定的网络接口无效';
$l['pass_strength_error'] = '密码强度只能是整数，介于 0 到 100';
$l['err_binary_path'] = '在定义的路径上似乎不存在二进制文件。请检查并重试。';
$l['err_mcrypt'] = 'mcrypt 扩展名需要';
$l['cookie_name_invalid'] = '您提交的cookie名称无效。';
$l['err_invalid_soa'] = '无效的 SOA！！！请输入一个有效的正数';
$l['sm_saving_error'] = '保存 SitePad 设置时出现一些错误';
$l['err_openssl'] = '需要使用 Openssl 扩展来加密密码';

//主题字符串
$l['<title>'] = APP.' - 设置中心';
$l['settings_saved'] = '设置保存成功';
$l['pathhead'] = '软件路径';
$l['softpath'] = APP.'路径';
$l['softpath_exp'] = '这是除各种脚本之外的所有文件所在的路径';
$l['softscripts'] = '脚本路径';
$l['softscripts_exp'] = '这是所有软件/脚本所在的路径';
$l['gen_set'] = '一般设置';
$l['sitename'] = '站点名称';
$l['sitename_exp'] = '使用'.APP.'的服务器或公司的名称。它将出现在'.APP.'的许多页面中。安装程序';
$l['cook_name'] = 'Cookie 名称';
$l['cook_name_exp'] = '将存储在浏览器上的 cookie 的名称。';
$l['comp_output'] = '压缩输出';
$l['comp_output_exp'] = '这将压缩输出并节省大量带宽。';
$l['soft_email'] = '管理员邮箱';
$l['soft_email_exp'] = 'CRON 活动和其他与管理员相关的电子邮件发送到的电子邮件地址。';
$l['from_email'] = '发件人电子邮件地址';
$l['from_email_exp'] = 'FROM 标题的电子邮件地址。';
$l['license'] = '许可证密钥';
$l['license_exp'] = '请输入'.APP.'颁发的正确的license key';
$l['choose_lang'] = '选择语言';
$l['choose_lang_exp'] = '选择你喜欢的语言';
$l['choose_theme'] = '选择主题';
$l['choose_theme_exp'] = '所选主题将成为整个'.APP.'的默认主题';
$l['timezone'] = '时区';
$l['update_settings'] = '更新设置';
$l['auto_upd_softac'] = '自动更新'.APP;
$l['auto_upd_softac_exp'] = '如果启用'.APP.'会自动更新到最新版本。 <br /><b>Stable</b> 分支在发布候选版本经过彻底测试后启动。 <br /><b>Release Candidate</b> 分支包含最新版本和功能。';
$l['never_update'] = '永不更新';
$l['stable'] = '稳定（推荐）';
$l['release_cand'] = '发布候选（实验性！）';
$l['auto_upd_soft'] = '自动更新脚本';
$l['auto_upd_soft_exp'] = '如果启用，各种脚本或软件将自动更新到最新版本';
$l['auto_add_soft'] = '自动添加新脚本';
$l['auto_add_soft_exp'] = '如果启用，将在维护 cron 作业期间添加新脚本或软件。受到推崇的';
$l['email_upd_soft'] = '通过电子邮件通知更新';
$l['email_upd_soft_exp'] = '当'.APP.'时将发送电子邮件。升级可用或执行自动升级';
$l['email_upd_softs'] = '通过电子邮件通知脚本更新';
$l['email_upd_softs_exp'] = '当脚本或软件更新可用或执行脚本或软件的自动更新时将发送电子邮件';
$l['cron_time'] = '更新 Cron 作业';
$l['cron_time_exp'] = '检查可用更新的 cron 作业时间。如果您不知道什么是 cron 作业，请不要更改它';
$l['disable_soft'] = '禁用'.APP;
$l['soft_off'] = '打开'.APP.'离开';
$l['soft_off_exp'] = '这将禁用'.APP.'用户将无法使用它！';
$l['off_sub'] = '关闭主题';
$l['off_message'] = '关闭消息';
$l['edit_settings'] = '保存设置';
$l['chmod_files'] = 'CHMOD 文件';
$l['chmod_files_exp'] = '如果你安装了 suPHP 并且'.APP.'，这很有用。无法检测到它。如果不确定，请留空。';
$l['chmod_dir'] = 'CHMOD 目录';
$l['chmod_dir_exp'] = '如果你安装了 suPHP 和'.APP.'，这很有用。无法检测到它。如果不确定，请留空。';
$l['is_vps'] = '是 VPS';
$l['is_vps_exp'] = '如果此服务器是 VPS，请勾选此框。';
$l['eu_news_off'] = '禁用最终用户新闻';
$l['eu_news_off_exp'] = '如果选中这将禁用各种脚本的最终用户新闻。这个消息是给用户的。它提供了各种脚本的最新开发消息、它们的更新等。';
$l['logo_url'] = '标志网址';
$l['logo_url_exp'] = '如果清空'.APP.'将显示徽标。';
$l['php_bin'] = 'PHP 二进制文件';
$l['php_bin_exp'] = '这是将用于 CRON 作业和其他目的的二进制文件。如果为空，则将使用 <b>/usr/bin/php</b>。请注意，<b>PHP 二进制文件应该是 CLI 二进制文件</b>。';
$l['end_user_set'] = '最终用户面板设置';
$l['off_sync_link'] = '关闭同步链接';
$l['off_sync_link_exp'] = '这将关闭最终用户的同步链接。';
$l['off_panel_link'] = '关闭控制面板链接';
$l['off_panel_link_exp'] = '这将为最终用户关闭 Dock 中的控制面板链接。';
$l['chmod_conf_file'] = 'CHMOD 配置文件';
$l['chmod_conf_file_exp'] = '脚本的配置文件将被修改为这个值。默认值为 0644。（如果您不知道，请不要编辑/留空！）';
$l['suphp_detected'] = 'suPHP 检测';
$l['no_prefill'] = '不要预填目录名';
$l['no_prefill_exp'] = '默认情况下不要用脚本名称预填充目录名称。';
$l['footer_link'] = '页脚链接';
$l['footer_link_exp'] = '当有人安装脚本时，此链接/文本将插入到该安装的页脚中';
$l['eu_email_off'] = '禁用最终用户更新电子邮件';
$l['eu_email_off_exp'] = '如果选中，当有可用更新时，不会向最终用户发送电子邮件。';
$l['random_username'] = '为用户生成随机用户名';
$l['random_username_exp'] = '如果选中，则在安装过程中将随机生成管理员用户名。';
$l['random_pass'] = '为用户生成随机密码';
$l['random_pass_exp'] = '如果选中，则将在安装过程中随机生成管理员密码。';
$l['off_demo_link'] = '关闭脚本演示';
$l['off_demo_link_exp'] = '这将为最终用户关闭演示。';
$l['off_rating_link'] = '关闭脚本评级';
$l['off_rating_link_exp'] = '这将关闭最终用户的评级。';
$l['off_review_link'] = '关闭脚本评论';
$l['off_review_link_exp'] = '这将关闭最终用户的评论。';
$l['off_screenshot_link'] = '关闭脚本截图';
$l['off_screenshot_link_exp'] = '这将关闭最终用户的屏幕截图。';
$l['random_dbprefix'] = '为用户生成随机数据库前缀';
$l['random_dbprefix_exp'] = '如果选中，那么在安装过程中将随机生成一个数据库前缀。';
$l['remote_mysql'] = '远程 Mysql 主机名';
$l['remote_mysql_exp'] = '如果你想使用远程mysql，指定远程Mysql主机名或IP';
$l['perl_scripts'] = '禁用 PERL 脚本';
$l['perl_scripts_exp'] = '这将为最终用户关闭 PERL 脚本';
$l['show_top_scripts'] = '显示热门脚本组';
$l['show_top_scripts_exp'] = '这将向最终用户显示热门脚本组，以便轻松访问脚本安装页面。要禁用此功能，请将此字段<b>空白</b>。';
$l['err_change_app_name'] = '更改组名时出错';
$l['hide_dbprefix'] = '隐藏脚本的数据库前缀';
$l['hide_dbprefix_exp'] = '如果选中，则脚本没有可用的数据库前缀。';
$l['user_mod_dir'] = '使用用户模块目录';
$l['user_mod_dir_exp'] = '用户可以在 http://IP/~user 上安装脚本';
$l['off_email_link'] = '关闭所有发送给最终用户的电子邮件';
$l['off_email_link_exp'] = '这将关闭最终用户的电子邮件链接，并禁用在安装、删除等过程中发送的电子邮件';
$l['disable_classes'] = '禁用 PHP 类';
$l['disable_classes_exp'] = '这将禁用最终用户的 PHP 类。';
$l['panel_hf'] = '在控制面板的原生 UI 中显示 Softaculous';
$l['panel_hf_exp'] = '如果启用此选项，Softaculous 将显示在控制面板的原生 UI 中。';
$l['disable_backup_restore'] = '禁用终端用户的备份/恢复功能';
$l['disable_backup_restore_exp'] = '这将关闭最终用户的备份和恢复功能。';
$l['nolabels'] = '禁用所有脚本类别';
$l['nolabels_exp'] = '如果启用，则最终用户面板中将不显示类别。即 PHP, Javascripts, PERL, Classes 这些所有类别都将被禁用';
$l['settings'] = APP.'设置';
$l['disable_reseller_panel'] = '禁用经销商面板';
$l['disable_reseller_panel_exp'] = '如果启用，那么经销商将无法访问经销商面板。';
$l['choose_protocol'] = '选择协议';
$l['choose_protocol_exp'] = '选择你喜欢的协议。它将默认为最终用户选择。';
$l['network_interface'] = '网络接口';
$l['network_interface_exp'] = '服务器的公网接口。如果您不知道，请留空';
$l['default_domain_path'] = '默认域名路径';
$l['default_domain_path_exp'] = '添加域名时可以设置默认域名路径。';
$l['empty_username'] = '空用户名';
$l['empty_username_exp'] = '如果选中，则 ADMIN USERNAME 字段将留空。';
$l['empty_pass'] = '空密码';
$l['empty_pass_exp'] = '如果选中，则密码字段将留空。';
$l['show_cscript_in_top'] = '在 TOP 脚本中显示自定义脚本标志。';
$l['show_cscript_in_top_exp'] = '如果启用，您的自定义脚本徽标将显示在 TOP 脚本中。';
$l['pass_strength'] = '设置最小密码强度';
$l['pass_strength_exp'] = '如果设置，那么密码强度必须大于定义的值';
$l['off_remove_mail'] = '关闭删除安装邮件';
$l['off_remove_mail_exp'] = '这将禁用在删除安装期间发送给最终用户的电子邮件。';
$l['off_backup_mail'] = '关闭备份安装邮件';
$l['off_backup_mail_exp'] = '这将禁用在安装备份期间发送给最终用户的电子邮件。';
$l['off_install_mail'] = '关闭新安装邮件';
$l['off_install_mail_exp'] = '这将禁用在安装应用程序期间发送给最终用户的电子邮件。';
$l['off_edit_mail'] = '关闭编辑安装邮件';
$l['off_edit_mail_exp'] = '这将禁用在编辑安装详细信息时发送给最终用户的电子邮件。';
$l['off_clone_mail'] = '关闭克隆安装邮件';
$l['off_clone_mail_exp'] = '这将在克隆安装时禁用发送给最终用户的电子邮件。';
$l['off_restore_mail'] = '关闭恢复安装邮件';
$l['off_restore_mail_exp'] = '这将在安装恢复时禁用发送给最终用户的电子邮件。';
$l['admin_prefix'] = '管理员用户名的前缀';
$l['admin_prefix_exp'] = '选定的选项将被设置为脚本安装表单上管理员用户名的前缀<br/>请不要使用连字符\'-\'，因为它将被用作分隔符';
$l['ap_none'] = '无';
$l['ap_username'] = '用户名';
$l['ap_domain'] = '域名';
$l['ap_admin_defined'] = '管理员定义';
$l['disable_auto_backup'] = '为最终用户禁用自动备份';
$l['disable_auto_backup_exp'] = '如果选中，则最终用户将禁用自动备份选项。';
$l['webuzo_disable_username'] = '预填 Webuzo 用户名';
$l['webuzo_disable_username_exp'] = '如果选中，则登录页面上的 Webuzo 用户名字段将被预填充。';
$l['disable_clone'] = '为最终用户禁用克隆功能';
$l['disable_clone_exp'] = '这将禁用最终用户的克隆安装选项';
$l['disable_remote_import'] = '为最终用户禁用远程导入功能';
$l['disable_remote_import_exp'] = '这将禁用最终用户的远程导入选项';
$l['disable_manage_sets'] = '为最终用户禁用 WordPress 管理集功能';
$l['disable_manage_sets_exp'] = '这将为最终用户禁用 WordPress 插件/主题集功能。他们将能够安装由管理员创建的集合';
$l['disable_backup_upgrade'] = '在升级过程中禁用备份选项';
$l['disable_backup_upgrade_exp'] = '这将为最终用户禁用升级安装页面上的备份选项';
$l['ephp_bin'] = '最终用户 PHP 二进制文件';
$l['ephp_bin_exp'] = '定义最终用户网站将使用的 PHP 二进制路径。 '.APP.'将使用此二进制文件来检查脚本的要求。如果没有定义'.APP.'将使用默认二进制文件： ';
$l['no_ampps_download'] = '禁用AMPPS下载链接';
$l['no_ampps_download_exp'] = '这将禁用'.APP.'中的AMPPS下载链接。最终用户小组';
$l['no_strong_mysql_pass'] = '不要生成强MySQL数据库用户密码';
$l['no_strong_mysql_pass_exp'] = '这将生成不含特殊字符的MySQL数据库用户密码';

$l['remove_options'] = '最终用户删除选项';
$l['remove_dir'] = '隐藏删除目录选项';
$l['remove_dir_exp'] = '如果选择，当安装被删除时，安装目录将始终被删除';
$l['remove_db'] = '隐藏删除数据库和数据库用户选项';
$l['remove_db_exp'] = '如果选中，删除安装时数据库和数据库用户将始终被删除';
$l['remove_datadir'] = '隐藏删除数据目录选项';
$l['remove_datadir_exp'] = '如果选中，删除安装时数据目录将始终被删除';
$l['remove_wwwdir'] = '隐藏移除 WWW 目录选项';
$l['remove_wwwdir_exp'] = '如果选择，当安装被删除时，WWW 目录将始终被删除';

$l['social_media'] = '社交媒体设置';
$l['install_tweet_off'] = '关闭新安装的推文';
$l['install_tweet_off_exp'] = '如果选中，新安装后不会显示推文选项';
$l['install_tweet_msg'] = '新安装的推文消息';
$l['install_tweet_msg_exp'] = '新安装的自定义推文消息';

$l['upgrade_tweet_off'] = '关闭用于升级安装的推文';
$l['upgrade_tweet_off_exp'] = '如果选中，升级安装后不会显示推文选项';
$l['upgrade_tweet_msg'] = '升级安装的推文消息';
$l['upgrade_tweet_msg_exp'] = '升级安装的自定义推文消息';

$l['clone_tweet_off'] = '关闭克隆安装推文';
$l['clone_tweet_off_exp'] = '如果选中，则在克隆安装后不会显示 Tweet 选项';
$l['clone_tweet_msg'] = '克隆安装的推文消息';
$l['clone_tweet_msg_exp'] = '克隆安装的自定义推文消息';

$l['no_ftp_encrypted'] = '不要加密FTP密码';
$l['no_ftp_encrypted_exp'] = '这将在数据库中存储域名的 FTP 密码而不加密';
$l['pre_download_all'] = '为所有脚本启用预下载';
$l['pre_download_all_exp'] = '这将为所有脚本启用预下载，包括添加的新脚本';

$l['tweet_vars_link'] = '推文消息变量列表';
$l['tweet_vars'] = '[[SCRIPTNAME]] - 用于脚本名称 <br />[[TYPE]] - 用于脚本类型 例如：PHP、PERL 等 <br />[[softurl] ] - 将其用于安装 URL <br />[[cat]] - 将其用于脚本类别，例如：博客、CMS 等 <br />[[ver]] - 将其用于已安装的脚本版本<br />';

$l['session_timeout'] = '会话超时';
$l['session_timeout_exp'] = 'Softaculous Session 将在指定的时间内保持活动状态。<br />时间应以分钟为单位。默认值：15';


$l['auto_backup_limit'] = '自动备份轮换限制';
$l['auto_backup_limit_exp'] = '为最终用户选择自动备份轮换的最大限制';
$l['auto_backup_default'] = '默认';
$l['auto_backup_unlimited'] = '无限制';
$l['auto_backup_all'] = '全部';
$l['auto_backup_daily'] = '禁用每日自动备份';
$l['auto_backup_weekly'] = '禁用每周自动备份';
$l['auto_backup_monthly'] = '禁用每月自动备份';

$l['off_upgrade_plugins'] = '为最终用户禁用自动升级插件';
$l['off_upgrade_plugins_exp'] = '如果选中，则最终用户将禁用为用户安装自动升级插件的选项。';
$l['off_upgrade_themes'] = '禁用最终用户的自动升级主题';
$l['off_upgrade_themes_exp'] = '如果选中，则最终用户将禁用自动升级用户安装主题的选项。';

$l['pfx_settings'] = 'PopularFX 设置';
$l['eu_enable_themes'] = '启用免费主题';
$l['eu_enable_themes_exp'] = '如果选中，那么最终用户将可以在安装 WordPress 等脚本时选择和安装免费主题';
$l['eu_themes_premium'] = '启用高级主题';
$l['eu_themes_premium_exp'] = '如果选中，则最终用户将可以选择为 WordPress 等脚本购买和安装高级主题。<br /> 您可以找到更多信息 <a href="http://www.softaculous. com/docs/Premium_Themes" target="_blank">这里</a>';

$l['backups_expire'] = '删除备份频率';
$l['backups_expire_exp'] = '如果您想在备份创建后的某些天数后删除您的用户\'备份。默认情况下，备份永远不会被删除。';

$l['default_hf_bg'] = '页眉页脚的默认颜色';
$l['default_hf_bg_exp'] = '这将是页眉、页脚和左面板的默认颜色';
$l['default_cat_hover'] = '类别悬停的默认颜色';
$l['default_cat_hover_exp'] = '当用户将鼠标悬停在左侧面板的类别上时，这将是默认颜色';
$l['default_hf_text'] = '页眉页脚中文本的默认颜色';
$l['default_hf_text_exp'] = '这将是页眉、页脚和左面板中文本的默认颜色';
$l['default_scriptname_text'] = '左面板中脚本名称文本的默认颜色';
$l['default_scriptname_text_exp'] = '这将是左面板中脚本名称文本的默认颜色';

$l['max_backups'] = '每个用户的最大备份数（本地和远程）';
$l['max_backups_exp'] = '这将限制用户可以在本地和远程位置进行的最大备份数。';
$l['max_backups_unlimited'] = '无限制';

$l['max_backups_local'] = '每个用户的最大备份数（本地）';
$l['max_backups_local_exp'] = '这将限制用户可以在本地服务器上进行的最大备份数量（不包括远程位置）';

$l['default_landing'] = '最终用户面板的默认页面';
$l['default_landing_exp'] = '这将是'.APP.'的默认页面。最终用户小组';
$l['top_scripts'] = '顶级脚本（默认）';
$l['all_ins'] = '所有安装';
$l['outdated_ins'] = '过时的安装';

$l['no_add_domain'] = '禁止最终用户添加域名';
$l['no_add_domain_exp'] = '这将不允许最终用户添加域名';

$l['force_auto_upgrade'] = '强制用户自动升级首选项安装';
$l['force_auto_upgrade_exp'] = '选择的自动升级首选项，将在最终用户面板中被选中和禁用。最终用户将<b>不能</b>修改它。 （不适用于现有安装）';
$l['enable_auto_upgrade'] = '预填充用户安装的自动升级首选项';
$l['enable_auto_upgrade_exp'] = '选择自动升级首选项，将在最终用户面板中默认选中。最终用户将能够修改它。';
$l['dont_auto_upgrade'] = '不自动升级（默认）';
$l['minor_auto_upgrade'] = '仅升级到<b>次要</b>版本';
$l['major_auto_upgrade'] = '升级到任何可用的最新版本（<b>主要</b>以及<b>次要</b>）';

$l['set_backup_dir'] = '设置备份目录';
$l['set_backup_dir_exp'] = '选择存储最终用户安装备份的路径。 <br /> 这将是绝对路径，即如果您输入 /backups 则备份将在您服务器上的 /backups/USERNAME 目录中创建。这个目录应该存在并且应该对所有用户都是可写的。';

$l['off_customize_theme'] = '关闭自定义主题';
$l['off_customize_exp'] = '如果选中，则最终用户将无法访问自定义主题选项';

$l['enc_db_pass'] = '以加密格式存储数据库密码';
$l['enc_db_pass_exp'] = '如果选择，那么用户安装的数据库密码将以加密格式存储。这将需要 <b>mcrypt</b> 扩展名。';

$l['time_format'] = '默认时间格式';
$l['time_format_exp'] = '选择默认时间格式。默认值：<b>F j, Y, g:i a</b>';

$l['no_prefill_db'] = '不要预填数据库详细信息';
$l['no_prefill_db_exp'] = '默认情况下不预填数据库详细信息。';

$l['off_protocol'] = '禁用协议';
$l['off_protocol_exp'] = '如果选择，协议将不会显示给最终用户';

$l['disable_branches'] = '禁用脚本分支';
$l['disable_branches_exp'] = '如果选中，脚本的所有分支都将被禁用，除了父分支';
$l['db_prefix'] = '启用数据库前缀';
$l['db_prefix_exp'] = '如果选中，所有数据库和用户都将创建一个前缀。';

$l['disable_cronupdate_email'] = '禁用 CronJob 电子邮件';
$l['disable_cronupdate_email_exp'] = '如果选中，cronjob 通知将不会发送到给定的电子邮件地址';

$l['set_soa_expire_val'] = '设置 SOA 过期值';
$l['set_soa_expire_val_exp'] = '为所有域名设置数字 SOA 到期值。最小值：86400';

$l['nat_config'] = 'NAT 配置';
$l['nat_config_exp'] = '如果您在服务器上使用 NAT 配置，请选择此选项';

$l['logs_level'] = APP.'日志级别';
$l['logs_level_exp'] = '选定的日志级别将用于错误/调试日志。 <br />日志级别 4 可能包含密码';
$l['关闭'] = '关闭';
$l['logs_level-4'] = '详细日志';

$l['backup_set'] = '备份设置';
$l['email_set'] = '电子邮件设置';
$l['hide_feature_set'] = '禁用最终用户的功能';
$l['auto_upgrade_set'] = '自动升级设置';

$l['no_prefill_pass'] = '不要预填密码字段';
$l['no_prefill_pass_exp'] = '编辑安装或域名时不会显示密码';
$l['enc_user_pass'] = '加密 API 通行证';
$l['enc_user_pass_exp'] = '如果选择，用户的 API 通行证将被加密和存储';

$l['sync_domains'] = '启用同步域名';
$l['sync_domains_exp_remote'] = '这将启用'.APP.'中的域名的同步。通过 session.php 中的 $PRE_LOGIN 传递的域名列表的记录，单击<a href="http://www.softaculous.com/docs/Softaculous_Remote#Sync_Domains" target="_blank">此处</a>为指南';
$l['sync_domains_exp_ent'] = '这将启用'.APP.'中的域名的同步。在 session.php 中通过 $PRE_LOGIN 传递域名列表的记录，单击<a href="http://www.softaculous.com/docs/Softaculous_Enterprise_Integration#Sync_Domains" target="_blank">此处</a>为指南';

$l['email_password'] = '纯文本的电子邮件密码';
$l['email_password_exp'] = '如果选中，密码将以纯文本形式通过电子邮件发送给用户，用于安装、克隆等';

$l['disable_sign_on'] = '禁用自动登录';
$l['disable_sign_on_exp'] = '选择此选项可禁用从'.APP.'自动登录脚本的管理面板';

$l['demo_logo'] = '脚本演示的标志 URL';
$l['demo_logo_exp'] = '如果清空'.APP.'将显示徽标，徽标的推荐尺寸宽度：150，高度：45';

$l['email_update_apps'] = '通知应用程序更新';
$l['email_update_apps_exp'] = '如果启用，当已安装应用程序的更新可用时将发送电子邮件';

$l['demo_logo_url'] = '脚本演示徽标的自定义链接';
$l['demo_logo_url_exp'] = '如果清空'.APP.'网址将被使用';

$l['favicon_logo'] = 'Favicon logo URL';
$l['favicon_logo_exp'] = '如果清空'.APP.' favicon 将显示在最终用户面板中';

$l['rebranding_settings'] = '品牌重塑设置';

$l['use_eu_username'] = '预填控制面板用户名作为管理员用户名';
$l['use_eu_username_exp'] = '如果设置，脚本安装表单上的脚本安装管理员用户名将被预填为控制面板用户名';
$l['use_eu_email'] = '将最终用户电子邮件预填为管理员电子邮件';
$l['use_eu_email_exp'] = '如果设置，脚本安装表单上的脚本安装管理员电子邮件将被预填为终端用户电子邮件设置中设置的电子邮件';

$l['dbpass_len'] = '随机生成的 MySQL 数据库用户密码的长度';
$l['dbpass_len_exp'] = '选择随机生成的数据库用户密码的长度。如果留空'.APP.'将使用默认值：10';
$l['off_available_space'] = '不显示可用空间';
$l['off_available_space_exp'] = '如果选中，可用空间将不会显示在脚本的概览页面上';
$l['disable_import'] = '禁用终端用户的导入功能';
$l['disable_import_exp'] = '这将为最终用户禁用本地导入和远程导入选项';

$l['off_rbackup'] = '所有远程位置';
$l['off_rbackup_exp'] = '如果选中，从'.APP.'备份。远程服务器上的所有最终用户都将被禁用';

$l['sync_ins_list'] = '与'.APP.'同步安装列表。记录';
$l['sync_ins_list_exp'] = '检查安装目录是否存在于用户的网页目录中并从'.APP.'中删除安装。目录不存在的记录';

$l['sync_ins_real_ver'] = '检测并更新安装的实际版本';
$l['sync_ins_real_ver_exp'] = '检测用户是否手动更新了他们的安装并更新了'.APP.'中的版本。版本不匹配时的记录';
$l['update_system'] = '更新操作系统';
$l['update_system_exp'] = '如果启用，将使用 Yum 或 Apt-get 更新操作系统';

$l['auto_backup_custom'] = '禁用自动备份的自定义时间';

$l['sitepad_settings'] = 'SitePad 设置';
$l['off_sitepad'] = '关闭 SitePad 网站生成器';
$l['off_sitepad_exp'] = '这将为您的所有用户禁用 SitePad<br /><b>注意：</b> SitePad 基于免费增值模式。 <a href="mailto:sales@sitepad.com">更多详情</a>';
$l['off_sitepad_conf'] = '您确定要禁用 SitePad 网站生成器吗？请通过 sales@sitepad.com 联系我们以获取有关 SitePad 的更多详细信息';
$l['auto_backup'] = '默认自动备份频率';
$l['auto_backup_exp'] = '选择默认的自动备份频率。将为最终用户预先选择所选值';
$l['no_backup'] = '不要备份';
$l['daily'] = '一天一次';
$l['weekly'] = '每周一次';
$l['monthly'] = '每月一次';
$l['backup_rotation'] = '默认自动备份轮换';
$l['backup_rotation_exp'] = '选择默认的自动备份轮换。将为最终用户预先选择所选值';

$l['hc_api_url'] = 'Hosting Controller API URL';
$l['hc_api_url_exp'] = '在管理员级别或在 CLI 中获取用户列表等各种任务的 API 调用将使用此 HC API URL 执行。此 URL 必须是可从您的服务器访问的有效 API URL，格式为 <b>http(s)://IP:PORT</b>';

$l['force_softaculous_on_ssl'] = '强制'.APP.'在 SSL(HTTPS)上运行';
$l['force_softaculous_on_ssl_exp'] = '如果启用，'.APP.'将非 ssl 页面请求重定向到 HTTPS';

$l['off_import_mail'] = '关闭导入安装邮件';
$l['off_import_mail_exp'] = '这将在导入安装时禁用发送给最终用户的电子邮件。';

$l['off_checkhttps'] = '禁用脚本安装表单上的 SSL 证书检查';
$l['off_checkhttps_exp'] = '当用户选择在 https 协议上安装脚本时，这将禁用域名的 SSL 证书检查，如果未安装 SSL 证书，则不会看到任何错误';
$l['hide_sitepad'] = '隐藏 SitePad 网站生成器';
$l['hide_sitepad_exp'] = '这将对没有使用过 SitePad 的用户禁用 SitePad，但会为使用过 SitePad 的用户启用 SitePad';
$l['off_backup_au'] = '自动升级前禁用备份';
$l['off_backup_au_exp'] = '如果选择，在升级安装或插件和主题之前不会执行备份。注意：确保您有备份，以防升级失败。';

$l['err_no_dir'] = '您的服务器上不存在备份目录';

// SitePad 设置语言字符串

$l['sm_brand'] = '品牌名称';
$l['sm_brand_exp'] = '品牌名称的一个词。如果为空，则默认值为：SitePad';
$l['sm_sitename'] = '站点名称';
$l['sm_sitename_exp'] = '使用 SitePad 的服务器或公司的名称。它将出现在 SitePad 网站生成器的许多页面中';
$l['sm_brand_editor'] = '编辑名';
$l['sm_brand_editor_exp'] = '要显示的编辑器的名称。如果为空，则默认值为：SitePad Editor';
$l['sm_logo_url'] = '标志网址';
$l['sm_logo_url_exp'] = '它应该是一个 100 x 100 像素的透明 PNG 图像。如果为空，将显示 SitePad 徽标';
$l['sm_brand_url'] = '网站网址';
$l['sm_brand_url_exp'] = '显示此网站构建器用户的 URL。如果为空，则默认值为：https://sitepad.com';
$l['host_sm'] = '自定义服务器主机';
$l['host_sm_exp'] = '您可以创建一个 CNAME 记录来指向<a href="http://sitepad.com/wiki/Servers" target="_blank">我们的服务器</a>。或者您可以简单地使用我们的服务器主机名。如果为空 SitePad 将为用户使用默认服务器主机';
$l['sm_brand_demos'] = '主题演示网址';
$l['sm_brand_demos_exp'] = '您可以创建一个 CNAME 记录指向 <b>demos.sitepad.com</b> <br />如果为空 SitePad 将使用默认演示服务器来显示主题演示';
$l['sm_no_demos'] = '禁用主题演示';
$l['sm_no_demos_exp'] = '如果您想禁用用户的主题演示，请选中此复选框';
$l['sm_no_recent_themes'] = '禁用最近的主题';
$l['sm_no_recent_themes_exp'] = '如果您想禁用最终用户仪表板上最近添加的主题部分，请选中此复选框';
$l['sm_ftp_host'] = 'FTP 主机';
$l['sm_ftp_host_exp'] = '您可以指定 SitePad 在将文件发布到您的服务器时应该用来连接的 FTP 主机/IP。默认情况下将使用服务器 IP';
$l['sm_ftp_port'] = 'FTP 端口';
$l['sm_ftp_port_exp'] = '您可以指定 SitePad 在将文件发布到您的服务器时应该用来连接的 FTP 端口。默认情况下将使用 21';
// END SitePad 设置语言字符串

$l['quick_install_default'] = '设置快速安装为默认安装选项';
$l['quick_install_default_exp'] = '如果选中，默认安装表单将显示最少的选项（仅必填字段）';

$l['off_staging_mail'] = '关闭暂存安装电子邮件';
$l['off_staging_mail_exp'] = '这将在暂存安装时禁用发送给最终用户的电子邮件';
$l['max_bg_process'] = '最大后台进程数';
$l['max_bg_process_exp'] = '设置后台同时执行的最大进程数。这将用于诸如自动升级之类的任务。默认值：10';
$l['au_extra_retry'] = '重试自动升级脚本插件和主题';
$l['au_extra_retry_exp'] = '如果插件或主题的自动升级失败'.APP.'将在给定时间后重试。默认值：48 小时';

$l['upgrade_backup_on'] = '设置升级时预选的备份复选框';
$l['upgrade_backup_on_exp'] = '如果选中，脚本升级页面的创建备份复选框将默认选中';

$l['off_staging'] = '关闭暂存';
$l['off_staging_exp'] = '这将关闭最终用户的暂存功能';
$l['no_indir'] = '隐藏<b>在目录</b>字段';
$l['no_indir_exp'] = '如果选中，则在安装表单中的目录字段将隐藏，用户将只能在域名根目录而不是子目录中安装脚本。';

$l['max_staging'] = '每个用户的最大分段安装数限制';
$l['max_staging_exp'] = '这将限制用户可以创建的最大暂存安装数。默认值：无限制';

$l['preselect_autoupgrade_plugins'] = '预选自动升级插件';
$l['preselect_autoupgrade_plugins_exp'] = '如果勾选，则自动升级插件选项将在安装页面预先勾选';
$l['preselect_autoupgrade_themes'] = '预选自动升级主题';
$l['preselect_autoupgrade_themes_exp'] = '如果勾选，则自动升级主题选项会在安装页面预先勾选';

$l['force_upgrade_plugins'] = '强制插件升级';
$l['force_upgrade_plugins_exp'] = '如果选中则所有安装的插件将被强制自动升级。';
$l['force_upgrade_themes'] = '强制升级主题';
$l['force_upgrade_themes_exp'] = '如果选中则所有安装主题将被强制自动升级。';

$l['all_scripts'] = '所有脚本';

$l['disable_csrf'] = '禁用CSRF';
$l['disable_csrf_exp'] = '这将禁用 Softaculous 中的 CSRF 安全检查';

$l['disable_backup'] = '禁用最终用户的备份位置';
$l['disable_backup_exp'] = '选择您要为最终用户禁用的备份位置';

$l['remote_backup_ftp'] = 'FTP';
$l['remote_backup_ftps'] = 'FTPS';
$l['remote_backup_sftp'] = 'SFTP';
$l['remote_backup_dropbox'] = 'Dropbox';
$l['remote_backup_gdrive'] = 'Google Drive';
$l['remote_backup_webdav'] = 'WebDAV';
$l['remote_backup_aws'] = 'Amazon S3';
$l['remote_backup_onedrive'] = 'OneDrive';

$l['default_timezone'] = '服务器默认';
$l['timezone_invalid'] = '您选择的时区无效';

$l['user_homedir'] = '用户的主目录';
$l['user_homedir_exp'] = '进入主目录，如果你的主目录是自定义路径，例如/home2';

$l['eu_default_email_settings'] = '最终用户的默认电子邮件设置';
$l['eu_default_email_settings_exp'] = '为最终用户选择默认的电子邮件设置。用户可以根据自己的喜好更改设置。';
$l['eu_off_default_install_notify'] = '安装邮件';
$l['eu_off_default_remove_notify'] = '删除安装电子邮件';
$l['eu_off_default_edit_notify'] = '编辑安装电子邮件';
$l['eu_off_default_backup_notify'] = '备份邮件';
$l['eu_off_default_restore_notify'] = '恢复邮件';
$l['eu_off_default_clone_notify'] = '克隆电子邮件';
$l['eu_off_default_staging_notify'] = '暂存电子邮件';
$l['eu_off_default_import_notify'] = '导入电子邮件';
$l['eu_off_default_update_notify'] = '更新通知电子邮件';
$l['eu_default_plainpass_notify'] = '以纯文本形式发送密码';

$l['disable_wordpress_manager'] = '禁用 WordPress 管理器';
$l['disable_wordpress_manager_exp'] = '这将为最终用户禁用 WordPress 管理器功能';

$l['screenshot_frequency'] = '安装截图频率';
$l['screenshot_frequency_exp'] = '设置更新最终用户安装屏幕截图的频率（以小时为单位）。默认值：1 小时';
$l['err_screenshot_frequency'] = '最小<b>安装屏幕截图频率</b>为 1 小时';

$l['off_push_to_live_backup'] = '在推送上线前禁用备份';
$l['off_push_to_live_backup_exp'] = '如果选中，则在将暂存站点推送到实时状态之前不会执行备份。注意：请确保您有备份，以便在 Push to Live 失败时使用。';

$l['wordpress_manager_title'] = '设置 WordPress 管理器图标标题';
$l['wordpress_manager_title_exp'] = '这将为控制面板中的 WordPress 管理器图标设置所需的名称';