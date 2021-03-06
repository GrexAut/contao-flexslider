<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  jedo Webstudio 2005-2012
 * @author     Jens Doberenz <http://www.jedo-webstudio.com>
 * @package    jedo FlexSlider (jQuery)
 * @license    LGPL
 * @version 1.0.0
 */

/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['jedoFlexSlider'] = '{title_legend},name,headline, type;{select_FlexSlider_legend},select_FlexSlider;{config_legend},align,space,cssID';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['select_FlexSlider'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['select_FlexSlider'],
	'exclude'                 => true,
	'inputType'               => 'radio',
	'foreignKey'              => 'tl_jedoFlexSlider.title',
	'eval'                    => array('mandatory'=>true)
);
?>