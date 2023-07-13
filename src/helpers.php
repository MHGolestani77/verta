<?php

use Mhgolestani77\Verta\Verta;

if (! function_exists('verta')) {
    /**
     * @param null $datetime
     * @param null $timezone
     * @return Verta
     */
    function verta($datetime = null, $timezone = null): Verta
    {
        return new Verta($datetime, $timezone);
    }
}
