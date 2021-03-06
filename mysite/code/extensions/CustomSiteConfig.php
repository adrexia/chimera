<?php
/**
 *Adds new global settings.
 */

class CustomSiteConfig extends DataExtension {
	private static $db = array(
		'GACode' => 'Varchar(16)',
		'FacebookURL' => 'Varchar(256)',
		'TwitterUsername' => 'Varchar(256)',
		'LogoText' => 'Varchar(16)'
	);

	private static $has_one = array(
		'Logo' => 'Image',
		'FooterBanner' => 'Image',
		'FooterBannerLink' => 'SiteTree',
	);

	public function updateCMSFields(FieldList $fields) {

		$footerBanner = new UploadField('FooterBanner', 'Footer Banner');
		$footerBanner->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));
		$footerBanner->setConfig('allowedMaxFileNumber', 1);

		$footerBannerLink = new TreeDropdownField('FooterBannerLinkID', 'Footer Banner Link', "SiteTree");

		$fields->addFieldToTab('Root.Footer', $footerBanner);
		$fields->addFieldToTab('Root.Footer', $footerBannerLink);




		$fields->addFieldToTab('Root.Main',
			$gaCode = new TextField('GACode', 'Google Analytics account'));
		$gaCode->setRightTitle('Account number to be used all across the site (in the format <strong>UA-XXXXX-X</strong>)');

		$fields->addFieldToTab('Root.SocialMedia', $facebookURL = new TextField('FacebookURL', 'Facebook UID or username'));
		$facebookURL->setRightTitle('Facebook link (everything after the "http://facebook.com/", eg http://facebook.com/<strong>username</strong> or http://facebook.com/<strong>pages/108510539573</strong>)');

		$fields->addFieldToTab('Root.SocialMedia', $twitterUsername = new TextField('TwitterUsername', 'Twitter username'));
		$twitterUsername->setRightTitle('Twitter username (eg, http://twitter.com/<strong>username</strong>)');

		$fields->addFieldToTab('Root.Logos', $logoField = new UploadField('Logo', 'Logo, to appear in the top left.'));
		$logoField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));
		$logoField->setConfig('allowedMaxFileNumber', 1);
		$fields->addFieldToTab('Root.Logos', new TextField('LogoText', 'Logo Text'));
	}
}
