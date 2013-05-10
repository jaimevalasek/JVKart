<?php
/**
 * LICENSE
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category Shopping
 * @package JVKart
 * @author Jaime Marcelo Valasek! <jaime.valasek@gmail.com>
 * @copyright Copyright (c) 2013-2013 Jaime Marcelo Valasek.
 * @link http://www.valasek.com.br / http://ww.zf2.com.br
 */

namespace JVKart;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

class Module implements AutoloaderProviderInterface
{
	public function getAutoloaderConfig() {
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/src/' . str_replace('\\', '/', __NAMESPACE__)
				)
			)
		);
	}
	
	/* public function getConfig() {
		return include __DIR__ . '/config/module.config.php';
	} */
	
	/*public function getServiceConfig()
	{
		return array(
			'invokables' => array(
				'jvbase_service_ready' => 'JVBase\Service\Ready',
				'jvbase_mapper_ready' => 'JVBase\Mapper\Ready',
				
				'jvbase_filter_token' => 'JVBase\Filter\Token',
				'jvbase_filter_basedate' => 'JVBase\Filter\Date',
				'jvbase_filter_string' => 'JVBase\Filter\String',
			),
			'initializers' => array(
				function($instance, $sm){
					if($instance instanceof \BASEDefault\Adapter\DbAdapterAwareInterface){
						$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
						$instance->setDbAdapter($dbAdapter);
					}
				},
			),
		);
	}*/
}