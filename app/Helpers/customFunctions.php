<?php
// use Auth;
use App\Models\Setting;
use Illuminate\Support\Facades\Request;

function hideConf($val, $full = false){
    return Auth::check() ? $val : ($full ? "<a href='/signin'>".setting('site.confidentialText')."</a>" : '/signin');
}
function isActive($slug){
    $class = "current-menu-item";
    if(is_array($slug))
    {
        foreach($slug as $item)
            if(Request::segment(1) == $item)
               return $class;
    }
    else
        return (Request::segment(1) == $slug) ? $class : null;
}
