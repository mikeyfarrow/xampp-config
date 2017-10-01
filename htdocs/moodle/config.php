<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '<redacted>';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://unloop.edu/moodle';
$CFG->dataroot  = 'M:\\xampp-7.0.15\\moodledata';
$CFG->admin     = 'admin';
$CFG->noemailever = true;

// $CFG->debug = 0;
$CFG->langstringcache = 1;
$CFG->cachejs = 1;
$CFG->themedesignermode = 0;
$CFG->enablecssoptimiser = 1;

$CFG->session_handler_class = '\core\session\redis';
$CFG->session_redis_host = '127.0.0.1';
$CFG->session_redis_port = 6379;  // Optional.
$CFG->session_redis_database = 0;  // Optional, default is db 0.
$CFG->session_redis_prefix = ''; // Optional, default is don't set one.
$CFG->session_redis_acquire_lock_timeout = 120;
$CFG->session_redis_lock_expire = 7200;
$CFG->session_redis_save_path = 'tcp://127.0.0.1';

// These variables define DEFAULT block variables for new courses
// If this one is set it overrides all others and is the only one used.
//      $CFG->defaultblocks_override = 'participants,activity_modules,search_forums,course_list:news_items,calendar_upcoming,recent_activity';
// $CFG->defaultblocks_override = ' ';
//
// These variables define the specific settings for defined course formats.
// They override any settings defined in the formats own config file.
//      $CFG->defaultblocks_site = 'site_main_menu,course_list:course_summary,calendar_month';
//      $CFG->defaultblocks_social = 'participants,search_forums,calendar_month,calendar_upcoming,social_activities,recent_activity,course_list';
//      $CFG->defaultblocks_topics = 'participants,activity_modules,search_forums,course_list:news_items,calendar_upcoming,recent_activity';
//      $CFG->defaultblocks_weeks = 'participants,activity_modules,search_forums,course_list:news_items,calendar_upcoming,recent_activity';
//
// These blocks are used when no other default setting is found.
//      $CFG->defaultblocks = 'participants,activity_modules,search_forums,course_list:news_items,calendar_upcoming,recent_activity';
// $CFG->defaultblocks = ' ';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
