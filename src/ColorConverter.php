<?php

class ColorConverter
{

    public function hex2rgb($hex)
    {
        return sscanf($hex, "#%02x%02x%02x");
    }

    public function rgb2hex($r, $g, $b)
    {
        return sprintf("#%02x%02x%02x", $r, $g, $b);
    }
}
