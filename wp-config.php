/**
 * 🔒 SAFE & STABLE WORDPRESS SECURITY (SITEGROUND SAFE)
 */

// Disable plugin/theme install, update, delete
define('DISALLOW_FILE_MODS', true);

// Disable file editor
define('DISALLOW_FILE_EDIT', true);

// Disable unfiltered uploads
define('ALLOW_UNFILTERED_UPLOADS', false);

// Limit revisions
define('WP_POST_REVISIONS', 5);

// Autosave interval
define('AUTOSAVE_INTERVAL', 300);

// Force SSL admin (only if SSL is active)
define('FORCE_SSL_ADMIN', true);

// Disable debug output
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

// Secure file permissions
define('FS_CHMOD_FILE', 0644);
define('FS_CHMOD_DIR', 0755);
