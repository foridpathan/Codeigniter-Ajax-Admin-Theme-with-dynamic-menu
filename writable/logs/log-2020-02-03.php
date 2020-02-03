<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2020-02-03 01:48:22 --> Illegal offset type
#0 /Applications/MAMP/htdocs/cl_ajax_admin/system/Session/Session.php(470): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Illegal offset ...', '/Applications/M...', 470, Array)
#1 /Applications/MAMP/htdocs/cl_ajax_admin/app/Controllers/Users.php(184): CodeIgniter\Session\Session->set(Array)
#2 /Applications/MAMP/htdocs/cl_ajax_admin/system/CodeIgniter.php(847): App\Controllers\Users->login()
#3 /Applications/MAMP/htdocs/cl_ajax_admin/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Users))
#4 /Applications/MAMP/htdocs/cl_ajax_admin/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /Applications/MAMP/htdocs/cl_ajax_admin/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2020-02-03 01:48:39 --> Illegal offset type
#0 /Applications/MAMP/htdocs/cl_ajax_admin/system/Session/Session.php(470): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Illegal offset ...', '/Applications/M...', 470, Array)
#1 /Applications/MAMP/htdocs/cl_ajax_admin/app/Controllers/Users.php(184): CodeIgniter\Session\Session->set(Array)
#2 /Applications/MAMP/htdocs/cl_ajax_admin/system/CodeIgniter.php(847): App\Controllers\Users->login()
#3 /Applications/MAMP/htdocs/cl_ajax_admin/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Users))
#4 /Applications/MAMP/htdocs/cl_ajax_admin/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /Applications/MAMP/htdocs/cl_ajax_admin/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
