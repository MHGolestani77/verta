<?php

namespace Mhgolestani77\Verta;

use Exception;
use Mhgolestani77\Jalali\Jalali;
use Illuminate\Support\Carbon;

class Verta extends Jalali
{
    /**
     * Create a Carbon instance from Verta
     *
     * @return Carbon
     * @throws Exception
     */
    public function toCarbon(): Carbon
    {
        return new Carbon($this->datetime(), $this->timezone);
    }
}
