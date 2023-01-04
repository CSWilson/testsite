<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

$events->beforeBuild(function (Jigsaw $jigsaw) {
    $content = '{
   "name":"'.$jigsaw->getConfig('company').'",
   "short_name":"'.$jigsaw->getConfig('company').'",
   "icons":[
      {
         "src":"/assets/images/app-192x192.png",
         "sizes":"192x192",
         "type":"image/png"
      },
      {
         "src":"/assets/images/app-512x512.png",
         "sizes":"512x512",
         "type":"image/png"
      }
   ],
   "theme_color":"#ffffff",
   "background_color":"#ffffff",
   "display":"standalone"
}';
    $jigsaw->writeSourceFile('site.webmanifest', $content);
});
