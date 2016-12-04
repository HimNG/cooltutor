<?php 
/**  * DONT EDIT THIS FILE - NE MODIFIEZ PAS CE FICHIER 
 * -------------------------------------------------
 * Generated by 
		
		D:
		/CoolTutor
		/Ampps
		/www
		/claro
		/claroline
		/inc
		/lib
		/config.class.php
 * Date November 28, 2016 at 07:21 PM
 * -------------------------------------------------
 * DONT EDIT THIS FILE - NE MODIFIEZ PAS CE FICHIER 
 **/

// $CLMAINGenDate is an internal mark
   $CLMAINGenDate = "1480360909";

/* siteName : Platform name */
$GLOBALS['siteName'] = 'Claroline';


/* siteLogo : Display the logo of the platform. (http://www.domain.tld/logo.gif) */
$GLOBALS['siteLogo'] = '';


/* displayAllCommandsLinkByDefault : Show all the commands in tool titles */
$GLOBALS['displayAllCommandsLinkByDefault'] = TRUE;


/* course_maskToolListByDefault : Hide course toolist by default */
$GLOBALS['course_maskToolListByDefault'] = FALSE;


/* institution_name : Name displayed in the top banner. */
$GLOBALS['institution_name'] = 'Claroline';


/* institution_url : Organisation website */
$GLOBALS['institution_url'] = 'http://127.0.0.1';


/* institutionLogo : Display the logo of the organisation. (http://www.domain.tld/logo.gif) */
$GLOBALS['institutionLogo'] = '';


/* platformLanguage : Set the default language of the platform. It doesn't prevent course managers to set an other language for each course they create. */
$GLOBALS['platformLanguage'] = 'english';


/* language_to_display : For multilingual platform. Allow user to select his language from the list. */
$GLOBALS['language_to_display'] = array();


/* showAlwaysLanguageInCourseList : Show always language in the course list */
$GLOBALS['showAlwaysLanguageInCourseList'] = TRUE;


/* dbHost : Host name */
/*
The hostname of mysql server
*/
$GLOBALS['dbHost'] = 'localhost';


/* dbLogin : Login */
/*
The login given by your administrator to connect on the mysql server
*/
$GLOBALS['dbLogin'] = 'clar798';


/* dbPass : Password */
/*
The clear password
*/
$GLOBALS['dbPass'] = '2.mP3S]192';


/* dbNamePrefix : This prefix could allow to order more easily the tables / DB in the user interface of your server technical back office   */
/*
Prefix all created base (for courses) with this string
*/
$GLOBALS['dbNamePrefix'] = 'cl_';


/* mainDbName : Change this setting only if it's absolutely required. */
$GLOBALS['mainDbName'] = 'clar798';


/* mainTblPrefix : Prefix for main table names */
$GLOBALS['mainTblPrefix'] = 'cl_';


/* statsDbName : This is where tracking and statistics data are stored. This database can be the same as the main database. */
$GLOBALS['statsDbName'] = 'clar798';


/* statsTblPrefix : Prefix for tracking table names */
$GLOBALS['statsTblPrefix'] = 'cl_';


/* platform_id : unique id of the platform */
$GLOBALS['platform_id'] = '6trxedouf6ymdcwjprcvhl6jdxoh63ur';


/* is_trackingEnabled : Log of user activities  on the whole platform (course access, tool use, ...). */
$GLOBALS['is_trackingEnabled'] = TRUE;


/* singleDbEnabled : Database mode */
$GLOBALS['singleDbEnabled'] = TRUE;


/* dbGlu : To find a table name, the choose database name is prepend to the table name.db glu is use between these two name.In multi db mode, IT MUST be a dot.In single db mode, IT CAN'T be a dot. */
$GLOBALS['dbGlu'] = '_';


/* courseTablePrefix : This  prefix is added to each course table name. It's usefull in single database mode as it groups all course tables together. */
$GLOBALS['courseTablePrefix'] = '';


/* mysqlRepositorySys : This is the physical path to databases storage. This path is  optional, use by the quota and size. */
$GLOBALS['mysqlRepositorySys'] = '';


/* smtp_host : Give a SMTP server name to turn on SMTP mode. (e.g. smtp1.site.com or smtp1.site.com;smtp2.site.com) */
$GLOBALS['smtp_host'] = '';


/* smtp_port : Give a port number used to contact SMTP the SMTP server(s) if no port is specified in the hostname (default: 25) */
$GLOBALS['smtp_port'] = '25';


/* smtp_secure : Define the security layer. options are : tls, ssl or clear (default clear). You need to activate the php_openssl extension in php.ini in order to send mail over ssl or starttls ! */
$GLOBALS['smtp_secure'] = '';


/* smtp_username : Give a username and password to turn on SMTP authentication. */
$GLOBALS['smtp_username'] = '';


/* smtp_password : Password */
$GLOBALS['smtp_password'] = '';


/* rootWeb : Example : http://www.yourdomain.tld/mycampus/ */
$GLOBALS['rootWeb'] = 'http://127.0.0.1/claro/';


/* urlAppend : Common part of both parameters above. */
/*
no trailing / in this value
*/
$GLOBALS['urlAppend'] = '/claro';


/* rootSys : Relative to the complete platform url */
/*
The hostname of mysql server
*/
$GLOBALS['rootSys'] = 'D:/CoolTutor/Ampps/www/claro/';


/* tmpPathSys : Note : this repository should be protected with a .htaccess or       be placed outside the web. Because there contain data of private courses. Claroline Would be able to read and write in this dir */
$GLOBALS['tmpPathSys'] = 'tmp/';


/* cacheRepository : Note : this repository should be protected with a .htaccess or       be placed outside the web. Because there contain data of private courses. Claroline Would be able to read and write in this dir */
$GLOBALS['cacheRepository'] = 'tmp/cache/';


/* garbageRepositorySys : Absolute sys path to the place where are move data of a deleted course. */
$GLOBALS['garbageRepositorySys'] = 'D:/CoolTutor/Ampps/www/claro/tmp/garbage';


/* claro_stylesheet : Set the Cascading Style Sheet (CSS) layout. */
$GLOBALS['claro_stylesheet'] = 'classic';


/* useTinyMCECompressor : Makes TinyMCE 75% smaller and a lot faster to load. */
$GLOBALS['useTinyMCECompressor'] = FALSE;


/* administrator_name : Name */
$GLOBALS['administrator_name'] = 'System Administrator';


/* administrator_email : E-mail */
$GLOBALS['administrator_email'] = 'admin@127.0.0.1';


/* administrator_phone : Phone */
$GLOBALS['administrator_phone'] = '';


/* no_reply_mail : You can set a specific no-reply address used by the the platform email notification system. If none provided the administrator email will be used. */
$GLOBALS['no_reply_mail'] = '';


/* claro_texRendererUrl : This renderer is used for TEX/LaTEX expressions. It is available into the 'claroline/inc/lib/' directory and has to be copied on a server location where CGI programs are expected. */
/*
Put above the complete url of your TEX renderer. This url doesn't have to be
 specially on the same server than Claroline.

 Claroline uses the MIMETEX renderer created by John Forkosh and available
 under the GNU licences at http://www.forkosh.com.

 MIMETEX parses TEX/LaTEX mathematical expressions and emits gif images from
 them. You'll find precompilated versions of MIMETEX for various platform in
 the "claroline/inc/lib/" directory. Move the executable file that
 corresponding to your platform into its "cgi-bin/" directory, where cgi
 programs are expected (this directory are typically of the form
 "somewhere/www/cgi-bin/"), and change the execution permissions if necessary.

 If you're not able or allowed to set MIMETEX on a server, leave the setting
 below to "false". Claroline will then try to use another method for rendering
 TEX/LaTEX mathematical expression, relying on a plug-in client side this
 time. For this, user has to install the TECHEXPLORER plug-in, freely
 available for both Windows, Macintosh and Linux at
 http://www.integretechpub.com/.
*/
$GLOBALS['claro_texRendererUrl'] = '';


/* userPasswordCrypted : Crypt passwords */
$GLOBALS['userPasswordCrypted'] = FALSE;


/* allowSelfReg : Display link "Create user account" on the platform homepage. */
$GLOBALS['allowSelfReg'] = TRUE;


/* clarolineRepositoryAppend : Relative path from root campus to claroline code */
$GLOBALS['clarolineRepositoryAppend'] = 'claroline/';


/* coursesRepositoryAppend : relative path from root campus to courses */
$GLOBALS['coursesRepositoryAppend'] = 'courses/';


/* rootAdminAppend : Relative path from claroline kernel to root of admin section */
$GLOBALS['rootAdminAppend'] = 'admin/';


/* imgRepositoryAppend : Relative path from claroline web to icon set */
$GLOBALS['imgRepositoryAppend'] = 'img/';


/* userImageRepositoryAppend : relative path from root web to user pic repository */
$GLOBALS['userImageRepositoryAppend'] = 'platform/img/users/';


/* CLARO_DEBUG_MODE : More verbose when error occurs. */
if (!defined("CLARO_DEBUG_MODE")) define("CLARO_DEBUG_MODE",FALSE);


/* CLARO_PROFILE_SQL : Profile SQL in DEBUG MODE.Display for each request :duration, counter,  statement  */
if (!defined("CLARO_PROFILE_SQL")) define("CLARO_PROFILE_SQL",FALSE);


/* warnSessionLost : Warn users when they loose their session on the platform */
$GLOBALS['warnSessionLost'] = TRUE;


/* DEVEL_MODE : Add additional tools in the SDK section of the platform administration. */
if (!defined("DEVEL_MODE")) define("DEVEL_MODE",FALSE);


/* triggerDebugMode : Trigger debug mode in url */
$GLOBALS['triggerDebugMode'] = FALSE;


/* ajaxRemoteServiceBrokerEnabled : The Ajax Remote Service broker can be used by some modules to access remote services using AJAX requests and JSON */
$GLOBALS['ajaxRemoteServiceBrokerEnabled'] = FALSE;


/* filesStatsExtensions : Chose the files extensions you want to monitor when producing files statistics.  Separate each extension with a quote (e.g.: doc,pdf,jpg). */
$GLOBALS['filesStatsExtensions'] = 'doc,pdf,jpg';


/* courseCreationAllowed : Course creation is allowed on the platform */
$GLOBALS['courseCreationAllowed'] = TRUE;


/* allowToSelfEnroll : Display links to enrol/unenrol to course on the homepage of the user */
$GLOBALS['allowToSelfEnroll'] = TRUE;


/* module_cache_filename : filename for one file module inclusion */
$GLOBALS['module_cache_filename'] = 'moduleCache.inc.php';


/* claro_brailleViewMode : This feature is use for institute with  blind users.  I fact, System would be ehanced to activate this view user by user */
$GLOBALS['claro_brailleViewMode'] = FALSE;


/* useSendFile : Select the way Claroline send files to a user. */
$GLOBALS['useSendFile'] = TRUE;


/* usePrettyUrl : Choose the mode for URL for file download. Warning : Pretty URL mode don't work with IIS. */
$GLOBALS['usePrettyUrl'] = FALSE;


/* crslist_DisplayPendingToAllUsers : Display pending courses in members' course list */
$GLOBALS['crslist_DisplayPendingToAllUsers'] = FALSE;


/* crslist_UserCanUnregFromInactiveCourses : Allow users to unregister from inactive, pending, expired or unpublished courses */
$GLOBALS['crslist_UserCanUnregFromInactiveCourses'] = FALSE;


/* crslist_DisplayDisableToAllUsers : Display disabled courses in members' course list */
$GLOBALS['crslist_DisplayDisableToAllUsers'] = FALSE;


/* crslist_DisplayExpiredToAllUsers : Display expired courses in members' course list */
$GLOBALS['crslist_DisplayExpiredToAllUsers'] = FALSE;


/* crslist_DisplayUnpublishedToAllUsers : Display unpublished courses in members' course list */
$GLOBALS['crslist_DisplayUnpublishedToAllUsers'] = FALSE;


/* clmain_serverTimezone : Set this value to use another timezone than the one defined by PHP. See http://www.php.net/manual/en/timezones.php for a list of accepted timezones (for instance Europe/Brussels) */
$GLOBALS['clmain_serverTimezone'] = 'America/New_York';


/* mysqlSetNames : Set this option ONLY if you are experiencing issues with the insertion of some special characters in the database. Use the SHOW CHARACTER SET mysql command to list the charsets available on your mysql server https://dev.mysql.com/doc/refman/5.0/en/show-character-set.html */
$GLOBALS['mysqlSetNames'] = '';


/* log_report_level : Set the level of log messages you want to be reported in the log table in the database. 1 = error only, 2 = error and warning, 3 = error, warning and information, 4 = error, warning, informations and success, 5 = all. Note that debug messages are not affected by this setting, but are enabled through the debug mode option. */
$GLOBALS['log_report_level'] = 5;



?>