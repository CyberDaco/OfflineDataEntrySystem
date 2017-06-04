<?php
function setActive($path)
{
    if ($path == 'admin'){
        return Request::path() == $path ? 'active' :  '';
    }
    else {
        return Request::is($path . '*') ? 'active' :  '';
    }
}

function setActiveapp($path)
{
    return Request::path() == $path ? 'active' :  '';
}

function setActivecount($path)
{
    return Request::path() == $path ? 'active' :  '';
}

function count_batch()
{
    return Batch::count();
}
    