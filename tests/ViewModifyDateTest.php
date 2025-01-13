<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use InvalidArgumentException;
use poldixd\ViewModifyDate\ViewModifyDate;

beforeEach(function (): void {
    File::deleteDirectory(__DIR__.'/resources/views/test-folder');
    File::makeDirectory(__DIR__.'/resources/views/test-folder');
});

it('can get the file modify time', function () {
    touch(__DIR__.'/resources/views/test-folder/modified.blade.php', strtotime('2025-01-13 10:45:00'));

    expect(ViewModifyDate::get('test-folder.modified'))
        ->toBeInstanceOf(Carbon::class);

    expect(ViewModifyDate::get('test-folder.modified')->toDateTimeString())
        ->toBeString()
        ->toBe('2025-01-13 10:45:00');
});

it('returns an exception if file not found', function () {
    expect(ViewModifyDate::get('test-folder.not-found'));
})->throws(InvalidArgumentException::class);
