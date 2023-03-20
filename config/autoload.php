<?php
if(!defined('SECURE')) exit('<h1>Access Denied</h1>');
require_once 'mpm/core/autoloader.php';

require_once 'config/settings.php';
require_once 'config/admin.php';


/*
require_once 'mpm/core/global_settings.php';
require_once 'mpm/sessions.php';
require_once 'mpm/database_handler.php';
require_once 'mpm/functions.php';
require_once 'mpm/utils.php';
require_once 'mpm/validators.php';
require_once 'mpm/core/router.php';
require_once 'mpm/static/static.php';
*/
use Mpm\Core\Autoloader;

define(
  "AUTOLOAD",array(
    "DIRS"=>[
      "mpm/urls",
      "mpm/core",
      "mpm/session",
      "mpm/utils",
      "mpm/database",
      "mpm/forms",
      "mpm/handlers",
      "mpm/static",
      "mpm/validation",
      "mpm/view",
      "mpm/template",
      ],
    "FILES"=>[
      "mpm/auth/functions.php",
      ]
    ),
);
$autoloader = new Autoloader();
$autoloader->prepare(AUTOLOAD);
$autoloader->autoload();

require_once 'config/sessions.php';

require_once 'config/urls.php';

foreach(APPS as $app) {require_once(glob("$app/views.php")[0]);}