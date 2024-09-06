<?php

if (!function_exists('set_active')) {
    function set_active($uriSegment)
    {
        // Dapatkan URI service dari CodeIgniter
        $uri = service('uri');

        // Cek apakah segmen pertama sesuai dengan URI yang diberikan
        return ($uri == base_url($uriSegment)) ? 'active' : '';
    }
}
