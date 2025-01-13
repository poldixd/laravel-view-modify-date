<?php

namespace poldixd\ViewModifyDate;

use Illuminate\Support\Carbon;

final class ViewModifyDate
{
    public static function get(string $view): Carbon
    {
        $viewFinder = app()->make('view')->getFinder();

        return Carbon::parse(filemtime($viewFinder->find($view)));
    }
}
