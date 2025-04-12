<?php
function tempHelperFunction($custom_text='')
{
    if ($custom_text)
    {
        return $custom_text . " From Helper Function";
    }
    else{
        return "its calling from helper";
    }
}