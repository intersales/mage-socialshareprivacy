<?php
	/**
	 * Observer Model
	 *
	 * @category    Intersales
	 * @package     Intersales_SocialSharePrivacy
	 * @author      Daniel Rose <dr@intersales.de>
	 */
	class Intersales_SocialSharePrivacy_Model_Observer {

		/**
		 * Add js 'jquery.socialshareprivacy.js' to head
		 * @param Varien_Event_Observer $observer
		 */
		public function addJs(Varien_Event_Observer $observer) {
			if($observer) {
				$block = $observer->getBlock();

				if($block && $block instanceof Mage_Page_Block_Html_Head) {
					switch(Mage::helper('socialshareprivacy')->getJqueryVersion()) {
						case Intersales_SocialSharePrivacy_Model_Adminhtml_System_Config_Source_Jqueryversion::GT_ONE_DOT_SEVEN:
							$block->addJs('intersales/socialshareprivacy/jquery.browser.min.js');
							$block->addJs('intersales/socialshareprivacy/jquery.socialshareprivacy.min.js');
						break;
						default:
							$block->addJs('intersales/socialshareprivacy/jquery.socialshareprivacy-old.min.js');
						break;
					}
				}
			}
		}
	}
