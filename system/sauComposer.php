<?php
/**
 * @package    plg_composer
 *
 * @author     sau <akinaysau@gmail.com>
 * @copyright  AkinaySau
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://a-sau.ru
 */

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\Database\DatabaseDriver;
use Sau\Joomla\Plugin\Composer\ModuleHelper;

defined('_JEXEC') or die;

/**
 * Composer plugin.
 *
 * @package  plg_composer
 * @since    1.0
 */
class plgSystemSauComposer extends CMSPlugin {
	public function onAfterInitialise () {
		include_once 'vendor/autoload.php';
	}
}