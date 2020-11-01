<?php
/**
 * This file is part of the AtlasERP project.
 *
 * LICENSE: This source file is subject to version 3.14 of the PrStart license
 * that is available through the world-wide-web at the following URI:
 * https://www.prstart.co.uk/license/  If you did not receive a copy of
 * the PrStart License and are unable to obtain it through the web, please
 * send a note to imre@prstart.co.uk so we can mail you a copy immediately.
 *
 * DESCRIPTION: AtlasERP Project
 *
 * @category   Laravel
 * @package    Tailwind Components
 * @author     Imre Szeness <imre@prstart.co.uk>
 * @copyright  Copyright (c) 2020 PrStart Ltd. (https://www.prstart.co.uk)
 * @license    https://www.prstart.co.uk/license/ PrStart Ltd. License
 * @version    1.0.0 (04/04/2020)
 * @link       https://www.prstart.co.uk/laravel-development
 * @since      File available since Release 1.0.0
 */

declare(strict_types=1);

namespace Alphaws\LaravelTailwindComponents\Components;

use Illuminate\View\Component;

/**
 * Class BaseComponent
 * @package Alphaws\LaravelTailwindComponents\Components
 */
abstract class BaseComponent extends Component
{
    /**
     * @return \Closure|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\View|string|void
     */
    public function render()
    {
        // TODO: Implement render() method.
    }
}
