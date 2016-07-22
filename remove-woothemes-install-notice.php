<?php # -*- coding: utf-8 -*-

/**
 * Plugin Name: Remove woothemes' install notice
 * Description: Removes the admin notice that urges you to install the WooThemes installer
 * Plugin URI:  https://github.com/inpsyde/remove-woothemes-install-notice
 * Author:      Inpsyde GmbH
 * Author URI:  http://inpsyde.com/
 * Version:     1.0.2
 * License:     MIT
 * Text Domain: remove-woothemes-install-notice
 */

namespace RmWoothemesInstallNotice;

add_action( 'admin_head', __NAMESPACE__ . '\remove_admin_notice_hooks', PHP_INT_MAX );

/**
 * Removes several hook listener defined in config/removable-hooks.php
 *
 * @wp-hook
 */
function remove_admin_notice_hooks() {

	$hooks = get_removable_hooks();

	foreach ( $hooks[ 'action' ] as $action => $listeners ) {
		foreach ( $listeners as $listener ) {
			remove_action( $action, $listener[ 'callback' ], $listener[ 'priority' ] );
		}
	}
}

/**
 * @return array
 */
function get_removable_hooks() {

	return require __DIR__ . '/config/removable-hooks.php';
}