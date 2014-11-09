<?php
/**
 * Created by PhpStorm.
 * User: Yam's
 * Date: 08/11/14
 * Time: 13:06
 */

namespace Helper;

class Html {
    private $_header;
    private $_body;
    private $_div;
    private $_form;

    public function __CONSTRUCT(){}

    public function newDiv(array $props, $content){
        $properties = null;

        foreach($props as $propKey => $propVal){
            $properties .= " " . $propKey . "='" . $propVal . "'";
        }

        return "<div" . $properties.">" . $content . "</div>";
    }

    public function newTitle($title){
        return "<title>" . $title . "</title>";
    }

    public function newLinkTag(array $props){
        $properties = null;

        foreach($props as $propKey => $propVal){
            $properties .= " " . $propKey . "='" . $propVal . "'";
        }

        return "<link" . $properties.">";
    }

    /**
     *
     * properties : type|src|charset|defer|async(html5)|
     * @param array $props
     * @return string
     */
    public function newScriptTag(array $props){
        $properties = null;

        foreach($props as $propKey => $propVal){
            $properties .= " " . $propKey . "='" . $propVal . "'";
        }

        return "<script" . $properties."></script>";
    }

    public function newMeta(array $props){
        $properties = null;

        foreach($props as $propKey => $propVal){
            $properties .= " " . $propKey . "='" . $propVal . "'";
        }

        return "<meta" . $properties.">";
    }

    public function newA($anchor, array $props){
        $properties = null;

        foreach($props as $propKey => $propVal){
            $properties .= " " . $propKey . "='" . $propVal . "'";
        }

        return "<a" . $properties.">" . $anchor ."</a>";
    }

    public function newUl($list, array $props = null){
        $properties = null;

        if(!is_null($props)){
            foreach($props as $propKey => $propVal){
                $properties .= " " . $propKey . "='" . $propVal . "'";
            }
        }

        return "<ul" . $properties.">" . $list ."</ul>";
    }

    public function newLi(array $list, array $props = null){
        $properties = null;
        $li = null;

        if(!is_null($props)){
            foreach($props as $propKey => $propVal){
                $properties .= " " . $propKey . "='" . $propVal . "'";
            }
        }

        foreach($list as $liKey => $liVal){
            $li .= "<li" . $properties.">" . $liVal ."</li>";
        }

        return $li;
    }
} 