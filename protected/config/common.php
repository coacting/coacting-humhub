<?php
/**
 * This file provides to overwrite the default HumHub / Yii configuration by your local common (Console and Web) environments
 * @see http://www.yiiframework.com/doc-2.0/guide-concept-configurations.html
 * @see http://docs.humhub.org/admin-installation-configuration.html
 * @see http://docs.humhub.org/dev-environment.html
 */

  // output: /myproject/index.php
  $currentPath = $_SERVER['PHP_SELF'];
  // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index )
  $pathInfo = pathinfo($currentPath);
  // output: localhost
  $hostName = $_SERVER['HTTP_HOST'];
  // output: http://
  $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
  // return: http://localhost/myproject/
  $baseUrl = $protocol.'://'.$hostName.$pathInfo['dirname']."/";

return [
  'homeUrl' => $baseUrl.'p/home', //add custom homepage
  'components' => [
    'urlManager' => [
      'showScriptName' => false,
      'enablePrettyUrl' => true,
    ],
  ],
  'params' => [
    'allowedLanguages' => ['en-US']
  ]
];
