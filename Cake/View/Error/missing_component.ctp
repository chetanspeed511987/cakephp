<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Core\Plugin;

$pluginDot = empty($plugin) ? null : $plugin . '.';
?>
<h2>Missing Component</h2>
<p class="error">
	<strong>Error: </strong>
	<?php echo sprintf('%s could not be found.', '<em>' . h($pluginDot . $class) . '</em>'); ?>
</p>
<p class="error">
	<strong>Error: </strong>
	<?php echo sprintf('Create the class %s below in file: %s', '<em>' . h($class) . '</em>', (empty($plugin) ? APP_DIR : Plugin::path($plugin)) . DS . 'Controller' . DS . 'Component' . DS . h($class) . '.php'); ?>
</p>
<pre>
&lt;?php
class <?php echo h($class); ?> extends Component {

}
</pre>
<p class="notice">
	<strong>Notice: </strong>
	<?php echo sprintf('If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Error' . DS . 'missing_component.ctp'); ?>
</p>

<?php echo $this->element('exception_stack_trace'); ?>
