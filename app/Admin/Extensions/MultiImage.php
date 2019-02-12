<?php
namespace App\Admin\Extensions;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Form\Field\MultipleImage;

class MultiImage extends MultipleImage
{
    /**
     * Js.
     *
     * @var array
     */
    protected static $js = [
        '/vendor/laravel-admin/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js',
        '/vendor/laravel-admin/bootstrap-fileinput/js/plugins/piexif.js',
        '/vendor/laravel-admin/bootstrap-fileinput/js/plugins/purify.js',
        '/vendor/laravel-admin/bootstrap-fileinput/js/plugins/sortable.js',
        '/vendor/laravel-admin/bootstrap-fileinput/js/fileinput.min.js?v=4.5.2',
    ];
}