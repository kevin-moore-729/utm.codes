<?php
/**
 * The basic environment variables required by utm.codes unit tests, this can be copied
 * to config.inc.local.php and customized for individual environments.
 *
 * @environment Default
 *
 * @package utm.codes
 */

// Absolute path to your WordPress tests directory
putenv( 'WP_TEST_DIR=' );

// Absolute path to plugin root directory
putenv( 'UTMDC_PLUGIN_DIR=' );

// A valid Goo.gl API Key
putenv( 'UTMDC_GOOGLE_API=' );