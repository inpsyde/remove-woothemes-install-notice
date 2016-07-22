<?php # -*- coding: utf-8 -*-

namespace RmWoothemesInstallNotice;

return [
	'action' => [
		'admin_notices' => [
			[
				/**
				 * Defined amongst others by storefront-product-hero, storefront-mega-menu
				 */
				'callback' => 'woothemes_updater_notice',
				'priority' => 10
			]
		]
	]
];