<?php

class PluginInventeerimineMenu extends CommonGLPI {

   static function getMenuName() {
      return __('Inventeerimine', 'inventeerimine');
   }

   static function getMenuContent() {

      $menu = [];
      $menu['title'] = self::getMenuName();
      $menu['page']  = '/plugins/inventeerimine/front/search.php';

      return $menu;
   }
}