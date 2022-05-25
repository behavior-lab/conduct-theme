<?php namespace BehaviorLab\ConductTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Ui\ControlPanel\Component\Navigation\Event\SortNavigation;
use Illuminate\Pagination\AbstractPaginator;
use BehaviorLab\ConductTheme\Http\Controller\Admin\PreferencesController;
use BehaviorLab\ConductTheme\Http\Controller\Admin\SettingsController;
use BehaviorLab\ConductTheme\Listener\ApplySorting;

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
        'streams::form/partials/wrapper' => 'behavior_lab.theme.conduct::overrides/field_wrapper',
        'streams::form/partials/translations' => 'behavior_lab.theme.conduct::overrides/field_translations',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        AbstractPaginator::$defaultView       = 'behavior_lab.theme.conduct::pagination/bootstrap-4';
        AbstractPaginator::$defaultSimpleView = 'streams::pagination/simple-bootstrap-4';
    }
}
