<?php
	/**
	 * SocialSharePrivacy Default Helper
	 *
	 * @category   Intersales
	 * @package    Intersales_SocialSharePrivacy
	 * @author     Daniel Rose <dr@intersales.de>
	 */
	class Intersales_SocialSharePrivacy_Helper_Data extends Mage_Core_Helper_Abstract {
		const XML_PATH_GENERAL_ENABLED = 'socialshareprivacy/general_settings/enabled';
		const XML_PATH_GENERAL_JQUERY_VERSION = 'socialshareprivacy/general_settings/jquery_version';
		const XML_PATH_GENERAL_INFO = 'socialshareprivacy/general_settings/info';
		const XML_PATH_GENERAL_PRIVACY_PAGE = 'socialshareprivacy/general_settings/privacy_page';

		const XML_PATH_FACEBOOK_ENABLED = 'socialshareprivacy/facebook/enabled';
		const XML_PATH_FACEBOOK_PRIVACY_INFO = 'socialshareprivacy/facebook/privacy_info';
		const XML_PATH_FACEBOOK_DUMMY_IMAGE = 'socialshareprivacy/facebook/dummy_image';
		
		const XML_PATH_TWITTER_ENABLED = 'socialshareprivacy/twitter/enabled';
		const XML_PATH_TWITTER_PRIVACY_INFO = 'socialshareprivacy/twitter/privacy_info';
		const XML_PATH_TWITTER_DUMMY_IMAGE = 'socialshareprivacy/twitter/dummy_image';

		const XML_PATH_GOOGLE_PLUS_ENABLED = 'socialshareprivacy/google_plus/enabled';
		const XML_PATH_GOOGLE_PLUS_PRIVACY_INFO = 'socialshareprivacy/google_plus/privacy_info';
		const XML_PATH_GOOGLE_PLUS_DUMMY_IMAGE = 'socialshareprivacy/google_plus/dummy_image';

		/**
		 * Is module enabled
		 *
		 * @param null $store
		 * @return bool
		 */
		public function isEnabled($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_GENERAL_ENABLED, $store) == 1;
		}

		/**
		 * Retrieve info text
		 *
		 * @param null $store
		 * @return mixed
		 */
		public function getInfoText($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_GENERAL_INFO, $store);
		}

		/**
		 * Retrieve privacy page code
		 *
		 * @param null $store
		 * @return mixed
		 */
		public function getPrivacyPageCode($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_GENERAL_PRIVACY_PAGE, $store);
		}

		/**
		 * Is Facebook enabled
		 *
		 * @param null $store
		 * @return bool
		 */
		public function isFacebookEnabled($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_FACEBOOK_ENABLED, $store) == 1;
		}

		/**
		 * Retrieve privacy info of Facebook
		 *
		 * @param null $store
		 * @return mixed
		 */
		public function getFacebookPrivacyInfo($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_FACEBOOK_PRIVACY_INFO, $store);
		}

		/**
		 * Retrieve dummy image of Facebook
		 *
		 * @param null $store
		 * @return mixed
		 */
		public function getFacebookDummyImage($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_FACEBOOK_DUMMY_IMAGE, $store);
		}

		/**
		 * Is Twitter enabled
		 *
		 * @param null $store
		 * @return bool
		 */
		public function isTwitterEnabled($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_TWITTER_ENABLED, $store) == 1;
		}

		/**
		 * Retrieve privacy info of Twitter
		 *
		 * @param null $store
		 * @return mixed
		 */
		public function getTwitterPrivacyInfo($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_TWITTER_PRIVACY_INFO, $store);
		}

		/**
		 * Retrieve dummy image of Twitter
		 *
		 * @param null $store
		 * @return mixed
		 */
		public function getTwitterDummyImage($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_TWITTER_DUMMY_IMAGE, $store);
		}

		/**
		 * Is Google+ enabled
		 *
		 * @param null $store
		 * @return bool
		 */
		public function isGooglePlusEnabled($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_GOOGLE_PLUS_ENABLED, $store) == 1;
		}

		/**
		 * Retrieve privacy info of Google+
		 *
		 * @param null $store
		 * @return mixed
		 */
		public function getGooglePlusPrivacyInfo($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_GOOGLE_PLUS_PRIVACY_INFO, $store);
		}

		/**
		 * Retrieve dummy image of Google+
		 *
		 * @param null $store
		 * @return mixed
		 */
		public function getGooglePlusDummyImage($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_GOOGLE_PLUS_DUMMY_IMAGE, $store);
		}

		/**
		 * Retrieve jquery version
		 *
		 * @param null $store
		 * @return mixed
		 */
		public function getJqueryVersion($store = null) {
			return Mage::getStoreConfig(self::XML_PATH_GENERAL_JQUERY_VERSION, $store);
		}
	}
?>