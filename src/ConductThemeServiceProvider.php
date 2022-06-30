<?php namespace ConductLab\ConductTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Ui\ControlPanel\Component\Navigation\Event\SortNavigation;
use Illuminate\Pagination\AbstractPaginator;
use ConductLab\ConductTheme\Http\Controller\Admin\PreferencesController;
use ConductLab\ConductTheme\Http\Controller\Admin\SettingsController;
use ConductLab\ConductTheme\Listener\ApplySorting;

/**
 * Class ConductThemeServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ConductThemeServiceProvider extends AddonServiceProvider
{

    /**
     * The addon listeners.
     *
     * @var array
     */
    protected $listeners = [
        SortNavigation::class => [
            ApplySorting::class,
        ],
    ];

    protected $overrides = [
        'streams::form/partials/wrapper' => 'conduct_lab.theme.conduct::overrides/field_wrapper',
        'streams::form/partials/translations' => 'conduct_lab.theme.conduct::overrides/field_translations',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        AbstractPaginator::$defaultView       = 'conduct_lab.theme.conduct::pagination/bootstrap-4';
        AbstractPaginator::$defaultSimpleView = 'streams::pagination/simple-bootstrap-4';
    }
}
