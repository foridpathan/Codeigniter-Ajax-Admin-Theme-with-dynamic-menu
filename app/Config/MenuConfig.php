<?php namespace Config;

class MenuConfig extends \CodeIgniter\Config\BaseConfig {

        public $menu_id = 'id';
        public $menu_label = 'name';
        public $menu_parent = 'parent';
        public $menu_icon = 'icon';
        public $nav_tag_open = '<ul class="navbar-nav">';
        public $nav_tag_close = '</ul>';
        public $item_tag_open = '<li class="nav-item">';
        public $item_tag_close = '</li>';
        public $parent_tag_open = '<li class="nav-item">';
        public $parent_tag_close = '</li>';
        public $parent_anchor_tag = '<a  class="nav-link" href="%s" >%s</a>';
        public $children_tag_open = '<div class="collapse" id="%s"><ul class="nav nav-sm flex-column">';
        public $children_tag_close = '</ul></div>';
        public $icon_position = 'left';
        public $menu_icons_list = array();
        public $icon_img_base_url = '';

}