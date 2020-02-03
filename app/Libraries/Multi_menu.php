<?php namespace App\Libraries;

use App\Models\MenuModel;

class Multi_menu {
    private $ci;                // for CodeIgniter Super Global Reference.

    private $id_menu        = 'id="menu"';
    private $class_menu        = '"inner-text"';
    private $class_parent    = 'class="parent"';
    private $class_last        = 'class="last"';

    // --------------------------------------------------------------------

    /**
     * PHP5        Constructor
     *
     */
    function __construct()
    {
        //$this->ci =& get_instance();    // get a reference to CodeIgniter.
    }

    // --------------------------------------------------------------------

    /**
     * build_menu($table, $type)
     *
     * Description:
     *
     * builds the Dynaminc dropdown menu
     * $table allows for passing in a MySQL table name for different menu tables.
     * $type is for the type of menu to display ie; topmenu, mainmenu, sidebar menu
     * or a footer menu.
     *
     * @param    string    the MySQL database table name.
     * @param    string    the type of menu to display.
     * @return    string    $html_out using CodeIgniter achor tags.
     */
    function build_menu()
    {
        $menu = array();

        // use active record database to get the menu.
        //$query = $this->ci->db->get($table);
        $menus = new MenuModel();
        $menuItems = $menus->findAll();

        if (count($menuItems) > 0)
        {
            // `id`, `title`, `link_type`, `page_id`, `module_name`, `url`, `uri`, `dyn_group_id`, `position`, `target`, `parent_id`, `show_menu`

            foreach ($menuItems as $row)
            {
                $menu[$row['id']]['id']            = $row['id'];
                $menu[$row['id']]['title']        = $row['title'];
                $menu[$row['id']]['module']        = $row['module_name'];
                $menu[$row['id']]['url']            = $row['url'];
                $menu[$row['id']]['uri']            = $row['uri'];
                $menu[$row['id']]['position']        = $row['position'];
                $menu[$row['id']]['icon']        = $row['icon'];
                $menu[$row['id']]['parent']        = $row['parent_id'];
                $menu[$row['id']]['is_parent']    = $row['is_parent'];
                $menu[$row['id']]['show']            = $row['show_menu'];
            }
        }

    
        // ----------------------------------------------------------------------
        
        // now we will build the dynamic menus.
        $html_out  = "\t".'<ul '.$this->id_menu.'>'."\n";
 
        // loop through the $menu array() and build the parent menus.
        //for ($i = 1; $i <= count($menu); $i++)
        foreach ($menu as $i => $val) 
        {
            if (is_array($menu[$i]))    // must be by construction but let's keep the errors home
            {
                if ($menu[$i]['show'] && $menu[$i]['parent'] == 0)    // are we allowed to see this menu?
                {
                    if (!empty($menu[$i]['uri'])) {
                        $url = "#".$menu[$i]['uri'];
                    } else if( !empty($menu[$i]['url']) && empty($menu[$i]['uri']) ) {
                        $url = $menu[$i]['url'];
                    } else {
                        $url = '#';
                    }

                    if ($menu[$i]['is_parent'] == TRUE)
                    {
                        // CodeIgniter's anchor(uri segments, text, attributes) tag.

                        $html_out .= '<li>';
                        $html_out .= '<a href='.$url.' id=pr_'.$menu[$i]['parent'].'>';
                        $html_out .= '<i class="'. $menu[$i]['icon'] .'"></i>';
                        $html_out .= '<span class='.$this->class_menu.'>'.$menu[$i]['title'].'</span>';
                        $html_out .= '</a>';
                        
                        //$html_out .= "\t\t\t".'<li>'.anchor( $url.' ', '<i class="'. $menu[$i]['icon'] .'"></i> <span class='.$this->class_menu.'>'.$menu[$i]['title'].'</span>');
                    }
                    else
                    {
                        $html_out .= '<li>';
                        $html_out .= '<a href='.$url.'>';
                        $html_out .= '<i class="'. $menu[$i]['icon'] .'"></i>';
                        $html_out .= '<span class='.$this->class_menu.'>'.$menu[$i]['title'].'</span>';
                        $html_out .= '</a>';
                    }

                    // loop through and build all the child submenus.
                    $html_out .= $this->get_childs($menu, $i);

                    $html_out .= '</li>'."\n";
                }
            }
            else
            {
                exit (sprintf('menu nr %s must be an array', $i));
            }
        }

        $html_out .= "\t\t".'</ul>' . "\n";
        $html_out .= "\t".'</ul>' . "\n";

        return $html_out;
    }  
	    /**
     * get_childs($menu, $parent_id) - SEE Above Method.
     *
     * Description:
     *
     * Builds all child submenus using a recurse method call.
     *
     * @param    mixed    $menu    array()
     * @param    string    $parent_id    id of parent calling this method.
     * @return    mixed    $html_out if has subcats else FALSE
     */
    function get_childs($menu, $parent_id)
    {
        $has_subcats = FALSE;

        $html_out  = '';
        $html_out .= "\t\t\t\t\t".'<ul>'."\n";

        //for ($i = 1; $i <= count($menu); $i++)
        foreach ($menu as $i => $val) 
        {
            if ($menu[$i]['show'] && $menu[$i]['parent'] == $parent_id)    // are we allowed to see this menu?
            {
                if (!empty($menu[$i]['uri'])) {
                    $url = "#".$menu[$i]['uri'];
                } else if( !empty($menu[$i]['url']) && empty($menu[$i]['uri']) ) {
                    $url = $menu[$i]['url'];
                } else {
                    $url = '#';
                }
                $has_subcats = TRUE;

                if ($menu[$i]['is_parent'] == TRUE)
                {
                    $html_out .= '<li>';
                    $html_out .= '<a href="'.$url.'" id="pr_'.$menu[$i]['parent'].'_own_'.$menu[$i]['id'].'">';
                    if(!empty($menu[$i]['icon'])) {
                        $html_out .= '<i class="'. $menu[$i]['icon'] .'"></i>';
                    }
                    $html_out .= '<span class='.$this->class_menu.'>'.$menu[$i]['title'].'</span>';
                    $html_out .= '</a>';
                }
                else
                {
                    $html_out .= '<li>';
                    $html_out .= '<a href='.$url.'>';
                    $html_out .= '<span class='.$this->class_menu.'>'.$menu[$i]['title'].'</span>';
                    $html_out .= '</a>';
                }

                // Recurse call to get more child submenus.
                $html_out .= $this->get_childs($menu, $i);

                $html_out .= '</li>' . "\n";
            }
        }

        $html_out .= "\t\t\t\t\t".'</ul>' . "\n";

        return ($has_subcats) ? $html_out : FALSE;
    }

}