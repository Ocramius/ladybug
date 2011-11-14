<?php

namespace Ladybug;

class Extension {
    
    protected $var;
    protected $icon;
    protected $color_cli;
    protected $color_html;
    protected $inspect;
    
    public function __construct($var) {
        $this->var = $var;
        $this->icon = NULL;
        $this->color_cli = NULL;
        $this->color_html = NULL;
        $this->inspect = TRUE;
    }
    
    public function getInspect() {
        return $this->inspect;
    }
    
    protected function _formatSize($size, $unit = NULL) {
        $kb = 1024;
        $mb = $kb * 1024;
        $gb = $mb * 1024;
        
        $result = '';
        
        if ($size < $kb) $result = $size . ' bytes';
        elseif ($size < $mb) $result = number_format($size/$kb, 2) . ' Kb';
        elseif ($size < $gb) $result = number_format($size/$mb, 2) . ' Mb';
        else $result = number_format($size/$gb, 2) . ' Gb';
        
        return $result;
    }    
}