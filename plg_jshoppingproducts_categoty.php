<?php
/**
 * @package    plg_jshoppingproducts_category
 *
 * @author     Gartes <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Plugin\CMSPlugin;


/**
 * Plg_jshoppingproducts_category plugin.
 *
 * @package   plg_jshoppingproducts_category
 * @since     1.0.0
 */
class plgJshoppingProductsPlg_Jshoppingproducts_Category extends JPlugin
{
	/**
	 * Application object
	 *
	 * @var    CMSApplication
	 * @since  1.0.0
	 */
	protected $app;

	/**
	 * Database object
	 *
	 * @var    JDatabaseDriver
	 * @since  1.0.0
	 */
	protected $db;

	/**
	 * Affects constructor behavior. If true, language files will be loaded automatically.
	 *
	 * @var    boolean
	 * @since  1.0.0
	 */
	protected $autoloadLanguage = true;

    /**
     * plgJshoppingproductsPlg_Jshoppingproducts_Category constructor.
     * @param CMSApplication $app
     */
    public function __construct(&$subject, $config = array())
    {
        parent::__construct($subject, $config = array());
        die(__FILE__ .' '. __LINE__ );


    }


    /**
	 * onAfterInitialise.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterInitialise()
	{


	}

	/**
	 * onAfterRoute.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterRoute()
	{

	}

	/**
	 * onAfterDispatch.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterDispatch()
	{

	}

	/**
	 * onAfterRender.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterRender()
	{
		// Access to plugin parameters
		$sample = $this->params->get('sample', '42');
	}

	/**
	 * onAfterCompileHead.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterCompileHead()
	{

	}

	/**
	 * OnAfterCompress.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterCompress()
	{

	}

	/**
	 * onAfterRespond.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onAfterRespond()
	{

	}


	public function onBeforeLoadProductList(){
	    die(__FILE__ .' '. __LINE__ );
    }

    public function onBeforeQueryCountProductList($type, &$adv_result, &$adv_from, &$adv_query, &$order_query, &$filters)
    {
        die(__FILE__ .' '. __LINE__ );
    }

    public function onBeforeQueryGetProductList($type, &$adv_result, &$adv_from, &$adv_query, &$order_query, &$filters)
    {
        die(__FILE__ .' '. __LINE__ );


    }



}
