<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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
$l['user_data_error_t'] = '用户数据错误';
$l['user_data_error'] = APP.'无法加载您的帐户信息。请报告给服务器管理员！';

$l['remote_licence_t'] = '无效的许可证';
$l['remote_licence'] = '您没有使用有效的许可证。请报告给服务器管理员！';

$l['enterprise_licence_t'] = '许可证无效';
$l['enterprise_licence'] = '您没有使用有效的许可证。请报告给服务器管理员！';

$l['no_license'] = '找不到许可证文件！请向服务器管理员报告。';

$l['today'] = '<b>Today</b> at ';//显示今天发布时间的今天字符串

$l['init_theme_error_t'] = '主题错误';//标题
$l['init_theme_error'] = '无法加载主题文件 - &soft-1;.';

$l['init_theme_func_error_t'] = '主题函数错误';//标题
$l['init_theme_func_error'] = '无法加载 &soft-1; 的主题函数。';

$l['disable_softaculous_t'] = 'Softaculous 已禁用';
$l['disable_softaculous'] = '此用户已禁用 Softaculous。请联系系统管理员。';

$l['load_theme_settings_error'] = '无法加载主题设置文件。';

$l['view_guide'] = '查看指南';
$l['max_db_length'] = '数据库名不能大于&soft-1;人物。请选择一个较短的数据库名称。';


//错误处理函数
$l['following_errors_occured'] = '发现以下错误';

//成功消息函数
$l['following_message'] = '返回了以下消息';

//主要错误函数
$l['fatal_error'] = '致命错误';
$l['following_fatal_error'] = '发生以下错误';

//消息函数
$l['soft_message'] = APP.'信息';
$l['following_soft_message'] = '返回了以下消息';

//更新软件
$l['no_soft_found'] = '找不到软件包.....需要更新';
$l['ver_not_match'] = '发现更新版本......需要更新';
$l['ver_match'] = '当前包版本是最新的......继续';
$l['del_prev_files'] = '删除以前的包文件......完成';
$l['fetch_latest'] = '正在获取最新的包......';
$l['error_fetch_latest'] = '无法获取最新的包......继续';
$l['error_save_latest'] = '无法保存最新的包......继续';
$l['got_latest'] = '保存了最新的包';
$l['unzip_latest'] = '解压包文件......';
$l['error_unzip_latest'] = '解压缩包时出错......继续';
$l['unzipped_latest'] = '包解压成功';

//更新Softaculous
$l['getting_info'] = '请求信息......';
$l['error_getting_latest'] = '无法获取信息......放弃';
$l['got_info'] = '得到信息';
$l['manual_mode'] = '新版'.APP.'需要人工注意......放弃';
$l['no_updates'] = '当前'.APP.'版本是最新版本......继续';
$l['fetch_upgrade'] = '正在获取'.APP.'升级包......';
$l['error_fetch_upgrade'] = '无法获取升级包......放弃';
$l['error_save_upgrade'] = '无法保存升级包......放弃';
$l['got_upgrade'] = '保存升级包';
$l['unzip_upgrade'] = '解压文件......';
$l['error_unzip_upgrade'] = '解压错误......放弃';
$l['unzipped_upgrade'] = '解压缩'.APP.'升级包成功';
$l['md5_check'] = 'MD5 检查成功';
$l['err_md5_check'] = 'MD5 检查这些文件没有成功';
$l['err_md5_file'] = '不存在';

//MySQL 错误
$l['err_selectmy'] = '无法选择 MySQL 数据库。';
$l['err_myconn'] = '无法建立 MySQL 连接。';
$l['err_makequery'] = '无法使查询编号';
$l['err_mynum'] = 'MySQL 错误号';
$l['err_myerr'] = 'MySQL 错误';
$l['err_no_db_file'] = '数据库导入文件不存在';
$l['err_no_open_db_file'] = '无法打开数据库导入文件';

//导入错误
$l['imp_wrong_softdomain'] = '域名路径&soft-1;找不到。';
$l['imp_softpath_wrong'] = '&soft-1的路径;是错误的，不存在。';
$l['imp_ins_exists'] = '&soft-1;已经安装在 &soft-2;根据我们的记录并由我们维护！';
$l['imp_no_func'] = '&soft-1 的导入函数;无法加载。';
$l['imp_err'] = '导入安装在 &soft-1; 的软件时出现一些错误;';
$l['err_query'] = '无法执行查询';

$l['invalid_search_input'] = '无效的主题搜索字符。只允许使用字母数字字符、下划线和连字符。';

//hf_theme.php
$l['root_login'] = '以 ROOT 身​​份登录';
$l['welcome'] = '欢迎';
$l['logout'] = '退出';
$l['page_time'] = '页面创建于';
$l['times_are'] = '所有时间都是';
$l['time_is'] = '现在是';
$l['no_script_found'] = '没有找到这样的脚本！';
$l['webuzo_sysapps_disabled'] = '此功能已从 Webuzo 管理面板禁用';
$l['webuzo_install_utility'] = '该实用程序未安装。请先安装';
$l['update_exim'] = '请更新 Exim 以使用此功能。';

//类别语言变量
$l['forums'] = '论坛';
$l['blogs'] = '博客';
$l['cms'] = '门户/CMS';
$l['galleries'] = '图片画廊';
$l['wikis'] = 'wikis';
$l['admanager'] = '广告管理';
$l['calendars'] = '日历';
$l['games'] = '游戏';
$l['mail'] = '邮件';
$l['polls'] = '民意调查和分析';
$l['projectman'] = '项目管理';
$l['ecommerce'] = '电子商务';
$l['guestbooks'] = 'Guest Books';
$l['customersupport'] = '客户支持';
$l['others'] = '其他人';
$l['music'] = '音乐';
$l['video'] = '视频';
$l['files'] = '文件管理';
$l['go_cpanel'] = '进入控制面板';
$l['go_home'] = APP.'主页';
$l['go_demos'] = '脚本演示';
$l['go_ratings'] = '脚本评级';
$l['go_settings'] = '保存设置';
$l['go_email_settings'] = '电子邮件设置';
$l['go_installations'] = '所有安装';
$l['go_support'] = '帮助和支持';
$l['go_sync'] = '导入安装';
$l['go_backups'] = '备份和恢复';
$l['go_tasklist'] = '任务列表';
$l['go_apps_installations'] = '所有已安装的应用程序';
$l['go_my_themes'] = '我的主题';
$l['go_logout'] = '退出';
$l['ins_stats'] = '安装';
$l['outdated_stats'] = '过时的安装';
$l['backups_stats'] = '备份';
$l['go_plans'] = '计划';
$l['go_wp_manager'] = 'WordPress Manager';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = '搜索';
$l['back_to_top'] = '返回顶部';

$l['show'] = '显示';
$l['hide'] = '隐藏';

// 类别
$l['cat_php_forums'] = '论坛';
$l['cat_php_blogs'] = '博客';
$l['cat_php_cms'] = '门户/CMS';
$l['cat_php_galleries'] = '图片库';
$l['cat_php_wikis'] = 'Wikis';
$l['cat_php_admanager'] = '广告管理';
$l['cat_php_calendars'] = '日历';
$l['cat_php_games'] = '游戏';
$l['cat_php_mail'] = '邮件';
$l['cat_php_polls'] = '民意调查和分析';
$l['cat_php_projectman'] = '项目管理';
$l['cat_php_ecommerce'] = '电子商务';
$l['cat_php_guestbooks'] = '留言簿';
$l['cat_php_customersupport'] = '客户支持';
$l['cat_php_others'] = '其他';
$l['cat_php_music'] = '音乐';
$l['cat_php_video'] = '视频';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = '社交网络';
$l['cat_php_microblogs'] = '微博';
$l['cat_php_frameworks'] = '框架';
$l['cat_php_educational'] = '教育';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = '数据库工具';
$l['cat_php_files'] = '文件管理';
$l['cat_js_libraries'] = '图书馆';
$l['cat_js_widgets'] = '小部件';
$l['cat_perl_blogs'] = '博客';
$l['cat_perl_ecommerce'] = '电子商务';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = '论坛';
$l['cat_perl_mail'] = '邮件';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = '论坛';
$l['cat_java_projectman'] = '项目管理';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = '博客';
$l['cat_java_wikis'] = 'Wikis';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_python_projectman'] = '项目管理';
$l['cat_apps_server_side_scripting'] = '服务器端脚本';
$l['cat_apps_web_servers'] = '网络服务器';
$l['cat_apps_utilities'] = '实用程序';
$l['cat_apps_libraries'] = '图书馆';
$l['cat_apps_databases'] = '数据库';
$l['cat_apps_stacks'] = '堆栈';
$l['cat_apps_security'] = '安全';
$l['cat_apps_statistics'] = '统计';
$l['cat_apps_java_tools'] = 'Java 工具';
$l['cat_apps_java_containers'] = 'Java 容器';
$l['cat_apps_version_control'] = '版本控制';
$l['cat_apps_modules'] = '模块';
$l['cat_apps_message_queue'] ='消息队列';

// 类类别
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = '密码学';
$l['classes_algorithms'] = '算法';
$l['classes_artificialintelligence'] = '人工智能';
$l['classes_email'] = 'Email';
$l['classes_finances'] = '财务';
$l['classes_searching'] = '搜索';
$l['classes_user_management'] = '用户管理';
$l['classes_utilitiesandtools'] = '实用程序和工具';
$l['classes_validation'] = '验证';
$l['classes_security'] = '安全性';
$l['classes_console'] = '控制台';
$l['classes_codegeneration'] = '代码生成';
$l['classes_chat'] = '聊天';
$l['classes_astrology'] = '占星术';
$l['classes_audio'] = '音频';
$l['classes_biology'] = '生物学';
$l['classes_blogs'] = '博客';
$l['classes_cache'] = '缓存';
$l['classes_compression'] = '压缩';
$l['classes_configuration'] = '配置';
$l['classes_contentmanagement'] = '内容管理';
$l['classes_conversion'] = '转换';
$l['classes_datatypes'] = '数据类型';
$l['classes_databases'] = '数据库';
$l['classes_debug'] = '调试';
$l['classes_designpatterns'] = '设计模式';
$l['classes_ecommerce'] = '电子商务';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = '模拟器';
$l['classes_filesandfolders'] = '文件和文件夹';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = '论坛';
$l['classes_games'] = '游戏';
$l['classes_geography'] = '地理';
$l['classes_graphics'] = '图形';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = '托管';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = '语言';
$l['classes_projectmanagement'] = '项目管理';

// Softaculous 远程域字符串
$l['no_domain_data'] = '未找到域数据！！';

$l['no_aefer_resp'] = '无法通过网络访问工作文件。请检查您的域是否指向正确的服务器。';

// Webuzo 字符串
$l['webuzo'] = 'webuzo';
$l['go_domain'] = '管理域名';
$l['webuzo_license_exp'] = '您的许可证无效或已过期。如果您的许可证已过期，请续订以继续使用 Webuzo';
$l['webuzo_license_exp_t'] = '许可证无效';
$l['err_no_access'] = '您无权访问此页面';

// 安培字符串
$l['ampps'] = 'AMPPS';
$l['go_domain'] = '管理域名';
$l['ampps_license_exp'] = '您的许可证无效或已过期。如果您的许可证已过期，请续订以继续使用 Ampps';
$l['ampps_license_exp_t'] = '许可证无效';


///////////////////////////////////////////////// ///////////
///// 以下变量用于电子邮件模板 /////
///////////////////////////////////////////////// ///////////

$l['notify_enable'] = '启用';
$l['notify_disable'] = '禁用';

$l['autoupgrade_enable'] = '启用';
$l['autoupgrade_disable'] = '禁用';

// 自动备份字符串
$l['auto_backup_enable'] = '启用';
$l['auto_backup_disable'] = '禁用';

// 安装模板变量
$l['mail_install_php_sub'] = '$scriptname 的全新安装';
$l['mail_install_php'] = '$scriptname $version 的新安装已经完成。安装细节如下图所示：
路径：$path
网址：$url
管理员网址：$admin_url
<if $datadirectory>数据目录：$datadirectory</if>
<if $admin_username>管理员用户名：$admin_username</if>
<if $admin_pass>管理员密码：$admin_pass</if>
<if $admin_email>管理员邮箱：$admin_email</if>
<if $dbname>MySQL 数据库：$dbname</if>
<if $dbuser>MySQL 数据库用户：$dbuser</if>
<if $dbhost>MySQL 数据库主机：$dbhost</if>
<if $dbpass>MySQL 数据库密码：$dbpass</if>
<if $cron>定时任务：$cron</if>
<if $disable_notify_update>更新通知：$disable_notify_update</if>
<if $eu_auto_upgrade>自动升级：$eu_auto_upgrade</if>
<if $auto_backup>自动备份：$auto_backup</if>
<if $auto_backup_rotation>备份轮换：$auto_backup_rotation</if>
<if $backup_location>备份位置：$backup_location</if>
<if $time>安装时间：$time</if>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 克隆模板变量
$l['mail_clone_sub'] = '克隆安装 $scriptname';
$l['mail_clone'] = '您安装的 $scriptname $version 已成功克隆。

您的原始安装详细信息：
原始路径：$old_path
原始网址：$old_url

您克隆的安装详细信息：
路径：$path
网址：$url
管理员网址：$admin_url
<if $datadirectory>数据目录：$datadirectory</if>
<if $dbname>MySQL 数据库：$dbname</if>
<if $dbuser>MySQL 数据库用户：$dbuser</if>
<if $dbhost>MySQL 数据库主机：$dbhost</if>
<if $dbpass>MySQL 数据库密码：$dbpass</if>
<if $cron>定时任务：$cron</if>
<if $time>安装时间：$time</if>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 暂存模板可用
$l['mail_staging_sub'] = '$scriptname 的暂存';
$l['mail_staging'] = '您的 $scriptname $version 暂存已成功完成。

您的实时安装详细信息：
原始路径：$live_path
原始网址：$live_url

您的暂存安装详细信息：
路径：$path
网址：$url
管理员网址：$admin_url
<if $datadirectory>数据目录：$datadirectory</if>
<if $dbname>MySQL 数据库：$dbname</if>
<if $dbuser>MySQL 数据库用户：$dbuser</if>
<if $dbhost>MySQL 数据库主机：$dbhost</if>
<if $dbpass>MySQL 数据库密码：$dbpass</if>
<if $cron>定时任务：$cron</if>
<if $time>安装时间：$time</if>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置';

// Pushtolive 模板可用
$l['mail_pushtolive_sub'] = '推动 $scriptname 生效';
$l['mail_pushtolive'] = '将您的 $scriptname 站点 $version 推送到活动已成功完成。

您的实时安装详细信息：
原始路径：$live_path
原始网址：$live_url

您的暂存安装详细信息：
路径：$path
网址：$url
管理员网址：$admin_url
<if $datadirectory>数据目录：$datadirectory</if>
<if $dbname>MySQL 数据库：$dbname</if>
<if $dbuser>MySQL 数据库用户：$dbuser</if>
<if $dbhost>MySQL 数据库主机：$dbhost</if>
<if $dbpass>MySQL 数据库密码：$dbpass</if>
<if $cron>定时任务：$cron</if>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置';

// 安装模板变量
$l['mail_install_js_sub'] = '$scriptname 的全新安装';
$l['mail_install_js'] = '$scriptname $version 的新安装已经完成。安装细节如下图所示：
路径：$path
网址：$url
<if $disable_notify_update>更新通知：$disable_notify_update</if>
<if $auto_backup>自动备份：$auto_backup</if>
<if $auto_backup_rotation>备份轮换：$auto_backup_rotation</if>
<if $backup_location>备份位置：$backup_location</if>
<if $time>安装时间：$time</if>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 安装模板变量
$l['mail_install_perl_sub'] = '$scriptname 的全新安装';
$l['mail_install_perl'] = '$scriptname $version 的新安装已经完成。安装细节如下图所示：
路径：$path
网址：$url
管理员网址：$admin_url
<if $datadirectory>数据目录：$datadirectory</if>
<if $wwwdir>网络目录：$wwwdir</if>
<if $admin_username>管理员用户名：$admin_username</if>
<if $admin_pass>管理员密码：$admin_pass</if>
<if $admin_email>管理员邮箱：$admin_email</if>
<if $dbname>MySQL 数据库：$dbname</if>
<if $dbuser>MySQL 数据库用户：$dbuser</if>
<if $dbhost>MySQL 数据库主机：$dbhost</if>
<if $dbpass>MySQL 数据库密码：$dbpass</if>
<if $cron>定时任务：$cron</if>
<if $disable_notify_update>更新通知：$disable_notify_update</if>
<if $auto_backup>自动备份：$auto_backup</if>
<if $auto_backup_rotation>备份轮换：$auto_backup_rotation</if>
<if $backup_location>备份位置：$backup_location</if>
<if $time>安装时间：$time</if>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 安装模板变量
$l['mail_install_java_sub'] = '$scriptname 的全新安装';
$l['mail_install_java'] = '$scriptname $version 的新安装已经完成。安装细节如下图所示：
路径：$path
网址：$url
管理员网址：$admin_url
<if $datadirectory>数据目录：$datadirectory</if>
<if $wwwdir>网络目录：$wwwdir</if>
<if $admin_username>管理员用户名：$admin_username</if>
<if $admin_pass>管理员密码：$admin_pass</if>
<if $admin_email>管理员邮箱：$admin_email</if>
<if $dbname>MySQL 数据库：$dbname</if>
<if $dbuser>MySQL 数据库用户：$dbuser</if>
<if $dbhost>MySQL 数据库主机：$dbhost</if>
<if $dbpass>MySQL 数据库密码：$dbpass</if>
<if $cron>定时任务：$cron</if>
<if $disable_notify_update>更新通知：$disable_notify_update</if>
<if $auto_backup>自动备份：$auto_backup</if>
<if $auto_backup_rotation>备份轮换：$auto_backup_rotation</if>
<if $backup_location>备份位置：$backup_location</if>
<if $time>安装时间：$time</if>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

$l['mail_install_python_sub'] = '$scriptname 的全新安装';
$l['mail_install_python'] = '$scriptname $version 的新安装已经完成。安装细节如下图所示：
路径：$path
网址：$url
管理员网址：$admin_url
<if $datadirectory>数据目录：$datadirectory</if>
<if $wwwdir>网络目录：$wwwdir</if>
<if $admin_username>管理员用户名：$admin_username</if>
<if $admin_pass>管理员密码：$admin_pass</if>
<if $admin_email>管理员邮箱：$admin_email</if>
<if $dbname>MySQL 数据库：$dbname</if>
<if $dbuser>MySQL 数据库用户：$dbuser</if>
<if $dbhost>MySQL 数据库主机：$dbhost</if>
<if $dbpass>MySQL 数据库密码：$dbpass</if>
<if $cron>定时任务：$cron</if>
<if $disable_notify_update>更新通知：$disable_notify_update</if>
<if $auto_backup>自动备份：$auto_backup</if>
<if $auto_backup_rotation>备份轮换：$auto_backup_rotation</if>
<if $backup_location>备份位置：$backup_location</if>
<if $time>安装时间：$time</if>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 更新模板变量（来自管理员）
$l['mail_update_sub'] = '脚本更新可用';
$l['mail_update'] = '这封电子邮件是关于您已安装的某些 PHP 脚本的过时安装。出于安全原因，您必须尽快更新这些过时的安装。
以下脚本更新可用：

$installation

要升级这些脚本，请转到您的控制面板 -> '.APP.' -> 安装。
在那里您将能够更新脚本。

来自系统管理员 $serverip
';

// 移除模板变量
$l['mail_remove_sub'] = '删除了 $scriptname 的安装';
$l['mail_remove'] = '$scriptname 的安装已被删除。以下是安装的详细信息：
路径：$path
<if $url>网址：$url</if>
<if $datadirectory>数据目录：$datadirectory</if>
<if $wwwdir>网络目录：$wwwdir</if>
<if $dbname>MySQL 数据库：$dbname</if>
<if $dbuser>MySQL 数据库用户：$dbuser</if>
<if $dbhost>MySQL 数据库主机：$dbhost</if>
<if $dbpass>MySQL 数据库密码：$dbpass</if>
<if $cron>定时任务：$cron</if>
安装时间：$time
移除时间：$rem_time

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// Cron 模板变量
$l['mail_cron_sub'] = '脚本更新可用';
$l['changelog'] = '== 更改日志';
$l['mail_cron'] = '以下脚本更新可用：

$installation

要升级这些脚本，请转到您的控制面板 -> '.APP.' -> 安装。
在那里您将能够更新脚本。
$changelog

来自'.APP.'定时任务 $serverip

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置

';

// Editdetail 模板变量
$l['mail_editdetail_sub'] = '修改了 $scriptname 的安装细节';
$l['mail_editdetail'] = '$scriptname 的安装细节已修改。以下是安装的修改细节：
路径：$path
网址：$url
<if $datadirectory>数据目录：$datadirectory</if>
<if $wwwdir>网络目录：$wwwdir</if>
<if $wwwurl>网址：$wwwurl</if>
<if $dbname>MySQL 数据库：$dbname</if>
<if $dbuser>MySQL 数据库用户：$dbuser</if>
<if $dbhost>MySQL 数据库主机：$dbhost</if>
<if $dbpass>MySQL 数据库密码：$dbpass</if>
<if $cron>定时任务：$cron</if>
<if $disable_notify_update>更新通知：$disable_notify_update</if>
<if $eu_auto_upgrade>自动升级：$eu_auto_upgrade</if>
<if $auto_backup>自动备份：$auto_backup</if>
<if $auto_backup_rotation>备份轮换：$auto_backup_rotation</if>
<if $backup_location>备份位置：$backup_location</if>
安装时间：$time
修改时间：$edit_time

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 备份语言字符串
$l['mail_backup_sub'] = '$scriptname 安装的备份';
$l['mail_backup'] = '$scriptname 安装的备份已成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url
<if $backup_location>备份位置：$backup_location</if>
备份路径：$backup_file
<if $backup_note>备份注意：$backup_note</if>

您可以从'.APP.'中的备份部分访问备份。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

$l['mail_backup_fail_sub'] = '失败：$scriptname 安装的备份';
$l['mail_backup_fail'] = '$scriptname 安装的备份没有成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url
备份路径：$backup_file

出现以下错误：
$error

请在一段时间后再次尝试创建备份。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';


// 恢复语言字符串
$l['mail_restore_sub'] = '恢复你的 $scriptname';
$l['mail_restore'] = '$scriptname 备份的恢复已成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

$l['mail_restore_fail_sub'] = '失败：您的 $scriptname 的恢复';
$l['mail_restore_fail'] = '$scriptname 的恢复没有成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url

出现以下错误：
$error

请在一段时间后再次尝试恢复备份。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 恢复背景语言字符串
$l['mail_restore_bg_sub'] = '在后台开始恢复你的 $scriptname 备份';
$l['mail_restore_bg'] = '$scriptname 备份的恢复已在后台开始。还原过程完成后，您将收到有关状态的电子邮件通知。
详细情况如下 ：
安装路径：$path
安装地址：$url

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 备份背景语言字符串
$l['mail_backup_bg_sub'] = '在后台开始备份您的 $scriptname 安装';
$l['mail_backup_bg'] = '您的 $scriptname 备份已在后台开始。备份过程完成后，您将收到有关状态的电子邮件通知。
详细情况如下 ：
安装路径：$path
安装地址：$url

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 导入语言字符串
$l['mail_import_sub'] = '导入您的 $scriptname 安装';
$l['mail_import'] = '您的 $scriptname 安装导入已成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 导入失败语言字符串
$l['mail_import_fail_sub'] = '失败：导入您的 $scriptname 安装';
$l['mail_import_fail'] = '$scriptname 安装的导入没有成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url

出现以下错误：
$error

请在一段时间后再次尝试导入安装。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 克隆失败语言字符串
$l['mail_clone_fail_sub'] = '失败：克隆你的 $scriptname 安装';
$l['mail_clone_fail'] = '$scriptname 安装的克隆没有成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url

出现以下错误：
$error

请在一段时间后再次尝试导入安装。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 克隆失败语言字符串
$l['mail_staging_fail_sub'] = '失败：$scriptname 安装的暂存';
$l['mail_staging_fail'] = '$scriptname 安装的暂存没有成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url

出现以下错误：
$error

请在一段时间后再次尝试导入安装。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 导入背景语言字符串
$l['mail_import_bg_sub'] = '导入您的 $scriptname 安装';
$l['mail_import_bg'] = '$scriptname 安装的导入已在后台开始。导入过程完成后，您将收到有关状态的电子邮件通知。
详细情况如下 ：
安装路径：$path
安装地址：$url

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';



// 安装模板变量类
$l['mail_install_classes_sub'] = '$classesname 的全新安装';
$l['mail_install_classes'] = '$classesname $version 的新安装已经完成。安装细节如下图所示：
路径：$path
<if $time>安装时间：$time</if>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

////////////////////////
// 管理员升级 - 6
////////////////////////

// 管理员自动升级邮件（成功）
$l['mail_adminupgrade_success_admin_sub'] = '用户$user 的$scriptname 安装已成功升级';
$l['mail_adminupgrade_success_admin'] = '用户$user 的$scriptname 安装已成功升级到最新版本。
详细情况如下 ：
安装地址：$url
最新版本：$version
旧版本：$oldversion
';

// 自动升级管理员电子邮件（失败）但恢复成功。
$l['mail_adminupgrade_fail_admin_sub'] = '$scriptname 安装的升级过程失败并从备份中恢复';
$l['mail_adminupgrade_fail_admin'] = '用户 $user 的 $scriptname 安装升级过程失败。
'.APP.'升级前已创建备份，且备份已成功恢复。
安装地址：$url
当前版本：$oldversion
最新版本：$version
升级错误详情如下：
错误：$upgrade_error
';

// 用户自动升级邮件（成功）
$l['mail_adminupgrade_success_user_sub'] = '$scriptname 安装已被系统管理员成功升级';
$l['mail_adminupgrade_success_user'] = '您的 $scriptname 安装已被系统管理员成功升级到最新版本。
详细情况如下 ：
安装地址：$url
最新版本：$version
旧版本：$oldversion

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 用户自动升级邮件（失败）但恢复成功
$l['mail_adminupgrade_fail_user_sub'] = '系统管理员升级您的 $scriptname 安装失败';
$l['mail_adminupgrade_fail_user'] = '系统管理员试图升级您的 $scriptname 安装，但升级过程失败。
在升级您的安装之前已创建备份，并且您的安装已从该备份成功恢复。
安装地址：$url
当前版本：$oldversion
最新版本：$version
升级错误详情如下：
错误：$upgrade_error

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (for ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = '用户$user 的$scriptname 安装升级过程失败';
$l['mail_adminupgrade_restore_fail_admin'] = '用户 $user 的 $scriptname 安装升级过程失败。
升级前已创建备份，但还原过程也失败！

这将需要手动还原。此处提供手动还原指南：
http://www.softaculous.com/docs/Manual_Restore

以下是恢复 $scriptname 安装可能需要的安装和备份详细信息：
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

安装地址：$url
当前版本：$oldversion
最新版本：$version
<如果 $upgrade_error>
升级错误详情如下：
错误：$upgrade_error
</如果>
<如果$error>
还原错误详细信息如下：
错误：$error
</如果>

'.APP.'团队也可以提供帮助。您可以联系'.APP.'团队 (support@'.strtolower(APP).'.com) 如果您遇到任何问题。
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = '系统管理员升级您的 $scriptname 安装失败';
$l['mail_adminupgrade_restore_fail_user'] = '系统管理员试图升级您的 $scriptname 安装，但升级失败。
升级前已创建备份，但还原过程也失败！

这将需要手动还原。此处提供手动还原指南：
http://www.softaculous.com/docs/Manual_Restore

以下是恢复 $scriptname 安装可能需要的安装和备份详细信息：
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

安装地址：$url
当前版本：$oldversion
最新版本：$version
<如果 $upgrade_error>
升级错误详情如下：
错误：$upgrade_error
</如果>
<如果$error>
还原错误详细信息如下：
错误：$error
</如果>

'.APP.'团队也可以提供帮助。您可以联系'.APP.'团队 (support@'.strtolower(APP).'.com) 如果您遇到任何问题。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

////////////////////////
// 用户升级 - 3
////////////////////////

// 当用户升级成功时（By user）
$l['mail_userupgrade_success_user_sub'] = '$scriptname 安装升级成功';
$l['mail_userupgrade_success_user'] = '您的 $scriptname 安装已成功升级到最新版本。
详细情况如下 ：
安装地址：$url
最新版本：$version
旧版本：$oldversion

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 如果升级时发生任何错误，（由用户）
$l['mail_userupgrade_fail_user_sub'] = '$scriptname 安装升级失败';
$l['mail_userupgrade_fail_user'] = '您的 $scriptname 安装升级失败。
详细情况如下 ：
安装地址：$url
当前版本：$oldversion
最新版本：$version
错误：$upgrade_error

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 如果升级时 UPGRADE 和 RESTORE 失败，（按用户）
$l['mail_userupgrade_restore_fail_user_sub'] = '$scriptname 安装升级失败';
$l['mail_userupgrade_restore_fail_user'] = '您的 $scriptname 安装升级失败。
升级前已创建备份，但还原过程也失败！

这将需要手动还原。此处提供手动还原指南：
http://www.softaculous.com/docs/Manual_Restore

详细情况如下 ：
安装地址：$url
当前版本：$oldversion
最新版本：$version
<如果 $upgrade_error>
升级错误详情如下：
错误：$upgrade_error
</如果>
<如果$error>
还原错误详细信息如下：
错误：$error
</如果>

'.APP.'团队也可以提供帮助。您可以联系'.APP.'团队 (support@'.strtolower(APP).'.com) 如果您遇到任何问题。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

////////////////////////
// 自动升级 - 3
////////////////////////

// 当 AUTOUPGRADED 成功时
$l['mail_autoupgrade_success_user_sub'] = '$scriptname 安装自动升级成功';
$l['mail_autoupgrade_success_user'] = '您的 $scriptname 安装已成功自动升级到最新版本。
详细情况如下 ：
安装地址：$url
最新版本：$version
旧版本：$oldversion

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 当自动升级失败时
$l['mail_autoupgrade_fail_user_sub'] = '$scriptname 安装的自动升级失败';
$l['mail_autoupgrade_fail_user'] = '$scriptname 安装的自动升级失败。
详细情况如下 ：
安装地址：$url
当前版本：$oldversion
最新版本：$version
错误：$upgrade_error

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 如果 AUTOUPGRADING 时 UPGRADE 和 RESTORE 失败
$l['mail_autoupgrade_restore_fail_user_sub'] = '$scriptname 安装的自动升级失败';
$l['mail_autoupgrade_restore_fail_user'] = '$scriptname 安装的自动升级失败。
升级前已创建备份，但还原过程也失败！

这将需要手动还原。此处提供手动还原指南：
http://www.softaculous.com/docs/Manual_Restore

详细情况如下 ：
安装地址：$url
当前版本：$oldversion
最新版本：$version
<如果 $upgrade_error>
升级错误详情如下：
错误：$upgrade_error
</如果>
<如果$error>
还原错误详细信息如下：
错误：$error
</如果>

'.APP.'团队也可以提供帮助。您可以联系'.APP.'团队 (support@'.strtolower(APP).'.com) 如果您遇到任何问题。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

////////////////////////
// 升级前检查
////////////////////////

// 如果在 AUTOUPGRADE (FOR USER) 时预升级检查失败
$l['mail_autoupgrade_precheck_fail_sub'] = '预升级检查失败';
$l['mail_autoupgrade_precheck_fail'] = '以下安装的自动升级过程无法完成，因为它不符合升级要求：
安装地址：$url
当前版本：$oldversion
最新版本：$version
<如果 $upgrade_error>
错误：$upgrade_error
</如果>
<如果$error>
错误：$error
</如果>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

///////////////////////////////////
// 备份失败 CLI 升级
///////////////////////////////////

// 如果在自动升级安装之前备份失败（对于用户）
$l['mail_autoupgrade_backup_fail_sub'] = '自动升级$scriptname 安装前备份过程失败';
$l['mail_autoupgrade_backup_fail'] = '$scriptname 安装的备份失败。因此自动升级过程中止。
详细情况如下 ：
安装地址：$url
当前版本：$oldversion
最新版本：$version
错误：$error

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

///////////////////////////////////
// 备份失败的插件/主题的 CLI 升级
///////////////////////////////////

// 如果在安装的自动升级插件/主题之前备份失败（对于用户）
$l['mail_autoupgrade_extras_backup_fail_sub'] = '在自动升级您的 $scriptname 安装的插件/主题之前备份过程失败';
$l['mail_autoupgrade_extras_backup_fail'] = '$scriptname 安装的插件/主题备份过程失败。所以没有执行自动升级插件/主题过程。
详细情况如下 ：
安装地址：$url
错误：$error

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

///////////////////////////////////
// 由用户升级插件/主题
///////////////////////////////////

// 用户成功升级时的插件/主题（按用户）
$l['mail_userupgrade_extras_success_user_sub'] = '$scriptname 安装的插件/主题升级成功';
$l['mail_userupgrade_extras_success_user'] = '您的 $scriptname 安装的插件/主题已成功升级到最新版本。
详细情况如下 ：
安装地址：$url

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 如果升级和恢复插件/主题在升级时失败，（由用户）
$l['mail_userupgrade_extras_restore_fail_user_sub'] = '$scriptname 安装的插件/主题升级失败';
$l['mail_userupgrade_extras_restore_fail_user'] = '$scriptname 安装的插件/主题升级失败。
升级前已创建备份，但还原过程也失败！

这将需要手动还原。此处提供手动还原指南：
http://www.softaculous.com/docs/Manual_Restore

详细情况如下 ：
安装地址：$url
<如果 $upgrade_error>
升级错误详情如下：
错误：$upgrade_error
</如果>
<如果$error>
还原错误详细信息如下：
错误：$error
</如果>

'.APP.'团队也可以提供帮助。您可以联系'.APP.'团队 (support@'.strtolower(APP).'.com) 如果您遇到任何问题。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 如果升级插件/主题时发生任何错误，（由用户）
$l['mail_userupgrade_extras_fail_user_sub'] = '$scriptname 安装的插件/主题升级失败';
$l['mail_userupgrade_extras_fail_user'] = '$scriptname 安装的插件/主题升级失败。
详细情况如下 ：
安装地址：$url
错误：$upgrade_error

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

///////////////////////////////////
// 自动升级插件/主题
///////////////////////////////////

// 当 AUTOUPGRADED 插件/主题成功时
$l['mail_autoupgrade_extras_success_user_sub'] = '$scriptname 安装的插件/主题自动升级成功';
$l['mail_autoupgrade_extras_success_user'] = '您的 $scriptname 安装的插件/主题已成功自动升级到最新版本。
详细情况如下 ：
安装地址：$url
<如果 $plugins_updated>
以下活动插件已升级：
$plugins_updated
</如果>
<如果 $theme_updated>
以下活动主题已升级：
$theme_updated
</如果>

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 如果 AUTOUPGRADING 时插件/主题的 UPGRADE 和 RESTORE 失败
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = '$scriptname 安装的插件/主题自动升级失败';
$l['mail_autoupgrade_extras_restore_fail_user'] = '$scriptname 安装的插件/主题自动升级失败。
升级前已创建备份，但还原过程也失败！

这将需要手动还原。此处提供手动还原指南：
http://www.softaculous.com/docs/Manual_Restore

详细情况如下 ：
安装地址：$url
<如果 $upgrade_error>
升级错误详情如下：
错误：$upgrade_error
</如果>
<如果$error>
还原错误详细信息如下：
错误：$error
</如果>

'.APP.'团队也可以提供帮助。您可以联系'.APP.'团队 (support@'.strtolower(APP).'.com) 如果您遇到任何问题。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 当 AUTOUPGRADE 插件/主题失败时
$l['mail_autoupgrade_extras_fail_user_sub'] = '$scriptname 安装的插件/主题自动升级失败';
$l['mail_autoupgrade_extras_fail_user'] = '$scriptname 安装的插件/主题的自动升级失败。
详细情况如下 ：
安装地址：$url
错误：$upgrade_error

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

$l['err_openconfig'] = '无法打开配置文件';
$l['err_writeconfig'] = '无法写入配置文件';

$l['classes_con_failed'] = '错误：无法连接到服务器。';
$l['cl_ratings'] = '评分';
$l['cl_author'] = '作者';
$l['cl_license'] = '许可证';
$l['cl_version'] = '版本';
$l['cl_show_files'] = '显示文件';
$l['cl_install_but'] = '安装';
$l['expand_view'] = '点击此处查看完整视图';
$l['collapse_view'] = '点击此处查看嵌入视图';

$l['email_off_notice'] = '<b>注意：通知电子邮件已禁用，因此您将不会收到任何电子邮件。</b>';

// 添加用户语言字符串
$l['mail_add_user_sub'] = '欢迎使用 Softaculous 远程安装程序';
$l['mail_add_user'] = '您现在可以成功登录到 Softaculous 远程安装程序。
详细情况如下 ：
用户：$用户名
API 密钥：$api_key
API密码：$api_pass
允许的用户数：$number_of_users';

// 需求解析器语言
$l['req_ver_nf'] = '必需 &soft-1;版本 &soft-2; &soft-3;并且找到的版本是：';
$l['req_ext_nf'] = '必需 &soft-1;未找到扩展名：';
$l['req_func_nf'] = '必需 &soft-1;未找到功能';
$l['req_ext_ver'] = '必需 &soft-1; &soft-2;扩展版本 &soft-3; &soft-4;但是发现 &soft-5;';
$l['gt'] = '大于';
$l['lt'] = '小于';
$l['ge'] = '大于等于';
$l['le'] = '小于等于';
$l['eq'] = '是';
$l['ne'] = '不应等于';
$l['req_version'] = '版本';
$l['req_extensions'] = '扩展';
$l['req_functions'] = '函数';

// 自动备份语言字符串
$l['mail_auto_backup_sub'] = '$scriptname 安装的自动备份';
$l['mail_auto_backup'] = '$scriptname 安装的自动备份已成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url
备份路径：$backup_file
<if $backup_location>备份位置：$backup_location</if>

您可以从'.APP.'中的备份部分访问备份。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

$l['mail_auto_backup_fail_sub'] = '失败：$scriptname 安装的自动备份';
$l['mail_auto_backup_fail'] = '$scriptname 安装的自动备份没有成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url
备份路径：$backup_file
<if $backup_location>备份位置：$backup_location</if>

出现以下错误：
$error

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

// 用于发送不符合要求的脚本列表的电子邮件。
$l['mail_script_requirement_sub'] = '脚本要求失败日志';
$l['mail_script_requirement'] = '以下脚本列表不符合您服务器的最低要求，可能无法运行。
详细情况如下 ：

$failed_req

注意：如果您在运行时更改 PHP 版本（即使用 CageFS、hive、.htaccess 等），则可以忽略上述 PHP 版本失败警告。
';

// 软面板语言字符串
$l['no_www_domain'] = '请关闭所有'.$globals['sn'].'页面并使用注销按钮从控制面板注销。
之后您可以再次登录并使用 '.$globals['sn'].'.';

$l['install_tweet'] = '我刚刚通过 #[[APP]] #[[TYPE]] 在 [[softurl]] 上安装了 #[[SCRIPTNAME]]';
$l['install_tweet_classes'] = '我刚刚通过 #[[APP]] #[[TYPE]] 安装了 #[[SCRIPTNAME]]';
$l['upgrade_tweet'] = '我刚刚通过 #[[APP]] #[[TYPE]] 在 [[softurl]] 上升级了 #[[SCRIPTNAME]]';
$l['clone_tweet'] = '我刚刚通过 #[[APP]] #[[TYPE]] 在 [[softurl]] 上克隆了 #[[SCRIPTNAME]]';

// 月份字符串
$l['January'] = '一月';
$l['February'] = '二月';
$l['March'] = '三月';
$l['April'] = '四月';
$l['May'] = '五月';
$l['June'] = '六月';
$l['July'] = '七月';
$l['August'] = '八月';
$l['September'] = '九月';
$l['October'] = '十月';
$l['November'] = '十一月';
$l['December'] = '十二月';

// 用于 webuzo 备份的邮件模板
$l['mail_webuzo_backup_sub'] = '$type 备份成功完成';
$l['mail_webuzo_backup'] = '备份过程已成功完成。
使用以下文件名创建备份文件：
$filename

问候，
Webuzo团队';
$l['mail_webuzo_backup_fail_sub'] = '$type 备份失败';
$l['mail_webuzo_backup_fail'] = '备份过程没有成功完成。
出现以下错误：
$error

问候，
Webuzo团队';
$l['mail_webuzo_restore_sub'] = '$type 恢复成功完成';
$l['mail_webuzo_restore'] = '恢复成功。

恢复的文件是：
$filename

问候，
Webuzo团队';
$l['mail_webuzo_restore_fail_sub'] = '$type 恢复失败';
$l['mail_webuzo_restore_fail'] = '恢复过程遇到错误，无法完成。
出现以下错误：
$error

问候，
Webuzo团队';

$l['mail_upgrade_fail_sub'] = '失败：$scriptname 安装升级';
$l['mail_upgrade_fail'] = '您的 $scriptname 安装升级没有成功完成。
详细情况如下 ：
安装路径：$path
安装地址：$url

出现以下错误：
$error

请过一段时间再尝试升级。

如果您想取消订阅此类电子邮件，请转到您的控制面板 -> '.APP.' -> 电子邮件设置
';

$l['invalid_resp'] = '收到无效响应';

$l['api_no_resp'] = '没有收到响应';
$l['api_invalid_resp'] = '收到无效响应';

$l['not_in_free'] = '<b>&soft-1;</b>不能安装在'.APP.'的免费版本中。';
$l['upgrade_to_pro'] = '<b><a href="'.$globals['index'].'act=plans" target="_blank" style="text-decoration:none;color:green; ">解锁高级功能</a></b>';

$l['not_in_expired'] = '<b>&soft-1;</b> 无法安装，因为您的'.APP.'许可证已过期。';
$l['renew_pro'] = '<b><a href="'.$globals['index'].'act=plans" target="_blank" style="text-decoration:none;color:green; ">续订使用高级功能的许可</a></b>';

$l['invalid_license_enduser_server'] = '此许可证不允许在此服务器上使用';
$l['invalid_license_enduser_account'] = '此许可证不允许在此帐户上使用';

$l['package_error'] = '安装包时出现一些错误。';

$l['empty_mail_q'] = '邮件队列为空。';

$l['admin_panel'] = '管理面板';
$l['reseller_panel'] = '经销商面板';
