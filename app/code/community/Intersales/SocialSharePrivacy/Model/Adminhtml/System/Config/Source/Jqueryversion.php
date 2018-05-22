<?php
	/**
	 * Jquery Version Source Model
	 *
	 * @category    Intersales
	 * @package     Intersales_SocialSharePrivacy
	 * @author      Daniel Rose <dr@intersales.de>
	 */
	class Intersales_SocialSharePrivacy_Model_Adminhtml_System_Config_Source_Jqueryversion {
		const LTEQ_ONE_DOT_SEVEN = 0;
		const GT_ONE_DOT_SEVEN = 1;

		/**
		 * Options getter
		 *
		 * @return array
		 */
		public function toOptionArray() {
			return array(
				array(
					'value'	=> self::LTEQ_ONE_DOT_SEVEN,
					'label'	=> Mage::helper('socialshareprivacy')->__('<= 1.7')
				), array(
					'value'	=> self::GT_ONE_DOT_SEVEN,
					'label'	=> Mage::helper('socialshareprivacy')->__('> 1.7')
				)
			);
		}

		/**
		 * Get options in "key-value" format
		 *
		 * @return array
		 */
		public function toArray() {
			return array(
				self::LTEQ_ONE_DOT_SEVEN	=> Mage::helper('socialshareprivacy')->__('<= 1.7'),
				self::GT_ONE_DOT_SEVEN		=> Mage::helper('socialshareprivacy')->__('> 1.7'),
			);
		}
	}