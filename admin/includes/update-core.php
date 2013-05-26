<?php
/**
 * WordPress core upgrade functionality.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * @since 2.7.0
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
// 2.0
_WP_ADMIN_ . '/import-b2.php',
_WP_ADMIN_ . '/import-blogger.php',
_WP_ADMIN_ . '/import-greymatter.php',
_WP_ADMIN_ . '/import-livejournal.php',
_WP_ADMIN_ . '/import-mt.php',
_WP_ADMIN_ . '/import-rss.php',
_WP_ADMIN_ . '/import-textpattern.php',
_WP_ADMIN_ . '/quicktags.js',
'wp-images/fade-butt.png',
'wp-images/get-firefox.png',
'wp-images/header-shadow.png',
'wp-images/smilies',
'wp-images/wp-small.png',
'wp-images/wpminilogo.png',
'wp.php',
// 2.0.8
'wp-includes/js/tinymce/plugins/inlinepopups/readme.txt',
// 2.1
_WP_ADMIN_ . '/edit-form-ajax-cat.php',
_WP_ADMIN_ . '/execute-pings.php',
_WP_ADMIN_ . '/inline-uploading.php',
_WP_ADMIN_ . '/link-categories.php',
_WP_ADMIN_ . '/list-manipulation.js',
_WP_ADMIN_ . '/list-manipulation.php',
'wp-includes/comment-functions.php',
'wp-includes/feed-functions.php',
'wp-includes/functions-compat.php',
'wp-includes/functions-formatting.php',
'wp-includes/functions-post.php',
'wp-includes/js/dbx-key.js',
'wp-includes/js/tinymce/plugins/autosave/langs/cs.js',
'wp-includes/js/tinymce/plugins/autosave/langs/sv.js',
'wp-includes/links.php',
'wp-includes/pluggable-functions.php',
'wp-includes/template-functions-author.php',
'wp-includes/template-functions-category.php',
'wp-includes/template-functions-general.php',
'wp-includes/template-functions-links.php',
'wp-includes/template-functions-post.php',
'wp-includes/wp-l10n.php',
// 2.2
_WP_ADMIN_ . '/cat-js.php',
_WP_ADMIN_ . '/import/b2.php',
'wp-includes/js/autosave-js.php',
'wp-includes/js/list-manipulation-js.php',
'wp-includes/js/wp-ajax-js.php',
// 2.3
_WP_ADMIN_ . '/admin-db.php',
_WP_ADMIN_ . '/cat.js',
_WP_ADMIN_ . '/categories.js',
_WP_ADMIN_ . '/custom-fields.js',
_WP_ADMIN_ . '/dbx-admin-key.js',
_WP_ADMIN_ . '/edit-comments.js',
_WP_ADMIN_ . '/install-rtl.css',
_WP_ADMIN_ . '/install.css',
_WP_ADMIN_ . '/upgrade-schema.php',
_WP_ADMIN_ . '/upload-functions.php',
_WP_ADMIN_ . '/upload-rtl.css',
_WP_ADMIN_ . '/upload.css',
_WP_ADMIN_ . '/upload.js',
_WP_ADMIN_ . '/users.js',
_WP_ADMIN_ . '/widgets-rtl.css',
_WP_ADMIN_ . '/widgets.css',
_WP_ADMIN_ . '/xfn.js',
'wp-includes/js/tinymce/license.html',
// 2.5
_WP_ADMIN_ . '/css/upload.css',
_WP_ADMIN_ . '/images/box-bg-left.gif',
_WP_ADMIN_ . '/images/box-bg-right.gif',
_WP_ADMIN_ . '/images/box-bg.gif',
_WP_ADMIN_ . '/images/box-butt-left.gif',
_WP_ADMIN_ . '/images/box-butt-right.gif',
_WP_ADMIN_ . '/images/box-butt.gif',
_WP_ADMIN_ . '/images/box-head-left.gif',
_WP_ADMIN_ . '/images/box-head-right.gif',
_WP_ADMIN_ . '/images/box-head.gif',
_WP_ADMIN_ . '/images/heading-bg.gif',
_WP_ADMIN_ . '/images/login-bkg-bottom.gif',
_WP_ADMIN_ . '/images/login-bkg-tile.gif',
_WP_ADMIN_ . '/images/notice.gif',
_WP_ADMIN_ . '/images/toggle.gif',
_WP_ADMIN_ . '/includes/upload.php',
_WP_ADMIN_ . '/js/dbx-admin-key.js',
_WP_ADMIN_ . '/js/link-cat.js',
_WP_ADMIN_ . '/profile-update.php',
_WP_ADMIN_ . '/templates.php',
'wp-includes/images/wlw/WpComments.png',
'wp-includes/images/wlw/WpIcon.png',
'wp-includes/images/wlw/WpWatermark.png',
'wp-includes/js/dbx.js',
'wp-includes/js/fat.js',
'wp-includes/js/list-manipulation.js',
'wp-includes/js/tinymce/langs/en.js',
'wp-includes/js/tinymce/plugins/autosave/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/autosave/langs',
'wp-includes/js/tinymce/plugins/directionality/images',
'wp-includes/js/tinymce/plugins/directionality/langs',
'wp-includes/js/tinymce/plugins/inlinepopups/css',
'wp-includes/js/tinymce/plugins/inlinepopups/images',
'wp-includes/js/tinymce/plugins/inlinepopups/jscripts',
'wp-includes/js/tinymce/plugins/paste/images',
'wp-includes/js/tinymce/plugins/paste/jscripts',
'wp-includes/js/tinymce/plugins/paste/langs',
'wp-includes/js/tinymce/plugins/spellchecker/classes/HttpClient.class.php',
'wp-includes/js/tinymce/plugins/spellchecker/classes/TinyGoogleSpell.class.php',
'wp-includes/js/tinymce/plugins/spellchecker/classes/TinyPspell.class.php',
'wp-includes/js/tinymce/plugins/spellchecker/classes/TinyPspellShell.class.php',
'wp-includes/js/tinymce/plugins/spellchecker/css/spellchecker.css',
'wp-includes/js/tinymce/plugins/spellchecker/images',
'wp-includes/js/tinymce/plugins/spellchecker/langs',
'wp-includes/js/tinymce/plugins/spellchecker/tinyspell.php',
'wp-includes/js/tinymce/plugins/wordpress/images',
'wp-includes/js/tinymce/plugins/wordpress/langs',
'wp-includes/js/tinymce/plugins/wordpress/wordpress.css',
'wp-includes/js/tinymce/plugins/wphelp',
'wp-includes/js/tinymce/themes/advanced/css',
'wp-includes/js/tinymce/themes/advanced/images',
'wp-includes/js/tinymce/themes/advanced/jscripts',
'wp-includes/js/tinymce/themes/advanced/langs',
// 2.5.1
'wp-includes/js/tinymce/tiny_mce_gzip.php',
// 2.6
_WP_ADMIN_ . '/bookmarklet.php',
'wp-includes/js/jquery/jquery.dimensions.min.js',
'wp-includes/js/tinymce/plugins/wordpress/popups.css',
'wp-includes/js/wp-ajax.js',
// 2.7
_WP_ADMIN_ . '/css/press-this-ie-rtl.css',
_WP_ADMIN_ . '/css/press-this-ie.css',
_WP_ADMIN_ . '/css/upload-rtl.css',
_WP_ADMIN_ . '/edit-form.php',
_WP_ADMIN_ . '/images/comment-pill.gif',
_WP_ADMIN_ . '/images/comment-stalk-classic.gif',
_WP_ADMIN_ . '/images/comment-stalk-fresh.gif',
_WP_ADMIN_ . '/images/comment-stalk-rtl.gif',
_WP_ADMIN_ . '/images/del.png',
_WP_ADMIN_ . '/images/gear.png',
_WP_ADMIN_ . '/images/media-button-gallery.gif',
_WP_ADMIN_ . '/images/media-buttons.gif',
_WP_ADMIN_ . '/images/postbox-bg.gif',
_WP_ADMIN_ . '/images/tab.png',
_WP_ADMIN_ . '/images/tail.gif',
_WP_ADMIN_ . '/js/forms.js',
_WP_ADMIN_ . '/js/upload.js',
_WP_ADMIN_ . '/link-import.php',
'wp-includes/images/audio.png',
'wp-includes/images/css.png',
'wp-includes/images/default.png',
'wp-includes/images/doc.png',
'wp-includes/images/exe.png',
'wp-includes/images/html.png',
'wp-includes/images/js.png',
'wp-includes/images/pdf.png',
'wp-includes/images/swf.png',
'wp-includes/images/tar.png',
'wp-includes/images/text.png',
'wp-includes/images/video.png',
'wp-includes/images/zip.png',
'wp-includes/js/tinymce/tiny_mce_config.php',
'wp-includes/js/tinymce/tiny_mce_ext.js',
// 2.8
_WP_ADMIN_ . '/js/users.js',
'wp-includes/js/swfupload/plugins/swfupload.documentready.js',
'wp-includes/js/swfupload/plugins/swfupload.graceful_degradation.js',
'wp-includes/js/swfupload/swfupload_f9.swf',
'wp-includes/js/tinymce/plugins/autosave',
'wp-includes/js/tinymce/plugins/paste/css',
'wp-includes/js/tinymce/utils/mclayer.js',
'wp-includes/js/tinymce/wordpress.css',
// 2.8.5
_WP_ADMIN_ . '/import/btt.php',
_WP_ADMIN_ . '/import/jkw.php',
// 2.9
_WP_ADMIN_ . '/js/page.dev.js',
_WP_ADMIN_ . '/js/page.js',
_WP_ADMIN_ . '/js/set-post-thumbnail-handler.dev.js',
_WP_ADMIN_ . '/js/set-post-thumbnail-handler.js',
_WP_ADMIN_ . '/js/slug.dev.js',
_WP_ADMIN_ . '/js/slug.js',
'wp-includes/gettext.php',
'wp-includes/js/tinymce/plugins/wordpress/js',
'wp-includes/streams.php',
// MU
'README.txt',
'htaccess.dist',
'index-install.php',
_WP_ADMIN_ . '/css/mu-rtl.css',
_WP_ADMIN_ . '/css/mu.css',
_WP_ADMIN_ . '/images/site-admin.png',
_WP_ADMIN_ . '/includes/mu.php',
_WP_ADMIN_ . '/wpmu-admin.php',
_WP_ADMIN_ . '/wpmu-blogs.php',
_WP_ADMIN_ . '/wpmu-edit.php',
_WP_ADMIN_ . '/wpmu-options.php',
_WP_ADMIN_ . '/wpmu-themes.php',
_WP_ADMIN_ . '/wpmu-upgrade-site.php',
_WP_ADMIN_ . '/wpmu-users.php',
'wp-includes/images/wordpress-mu.png',
'wp-includes/wpmu-default-filters.php',
'wp-includes/wpmu-functions.php',
'wpmu-settings.php',
// 3.0
_WP_ADMIN_ . '/categories.php',
_WP_ADMIN_ . '/edit-category-form.php',
_WP_ADMIN_ . '/edit-page-form.php',
_WP_ADMIN_ . '/edit-pages.php',
_WP_ADMIN_ . '/images/admin-header-footer.png',
_WP_ADMIN_ . '/images/browse-happy.gif',
_WP_ADMIN_ . '/images/ico-add.png',
_WP_ADMIN_ . '/images/ico-close.png',
_WP_ADMIN_ . '/images/ico-edit.png',
_WP_ADMIN_ . '/images/ico-viewpage.png',
_WP_ADMIN_ . '/images/fav-top.png',
_WP_ADMIN_ . '/images/screen-options-left.gif',
_WP_ADMIN_ . '/images/wp-logo-vs.gif',
_WP_ADMIN_ . '/images/wp-logo.gif',
_WP_ADMIN_ . '/import',
_WP_ADMIN_ . '/js/wp-gears.dev.js',
_WP_ADMIN_ . '/js/wp-gears.js',
_WP_ADMIN_ . '/options-misc.php',
_WP_ADMIN_ . '/page-new.php',
_WP_ADMIN_ . '/page.php',
_WP_ADMIN_ . '/rtl.css',
_WP_ADMIN_ . '/rtl.dev.css',
_WP_ADMIN_ . '/update-links.php',
_WP_ADMIN_ . '/wp-admin.css',
_WP_ADMIN_ . '/wp-admin.dev.css',
'wp-includes/js/codepress',
'wp-includes/js/codepress/engines/khtml.js',
'wp-includes/js/codepress/engines/older.js',
'wp-includes/js/jquery/autocomplete.dev.js',
'wp-includes/js/jquery/autocomplete.js',
'wp-includes/js/jquery/interface.js',
'wp-includes/js/scriptaculous/prototype.js',
'wp-includes/js/tinymce/wp-tinymce.js',
// 3.1
_WP_ADMIN_ . '/edit-attachment-rows.php',
_WP_ADMIN_ . '/edit-link-categories.php',
_WP_ADMIN_ . '/edit-link-category-form.php',
_WP_ADMIN_ . '/edit-post-rows.php',
_WP_ADMIN_ . '/images/button-grad-active-vs.png',
_WP_ADMIN_ . '/images/button-grad-vs.png',
_WP_ADMIN_ . '/images/fav-arrow-vs-rtl.gif',
_WP_ADMIN_ . '/images/fav-arrow-vs.gif',
_WP_ADMIN_ . '/images/fav-top-vs.gif',
_WP_ADMIN_ . '/images/list-vs.png',
_WP_ADMIN_ . '/images/screen-options-right-up.gif',
_WP_ADMIN_ . '/images/screen-options-right.gif',
_WP_ADMIN_ . '/images/visit-site-button-grad-vs.gif',
_WP_ADMIN_ . '/images/visit-site-button-grad.gif',
_WP_ADMIN_ . '/link-category.php',
_WP_ADMIN_ . '/sidebar.php',
'wp-includes/classes.php',
'wp-includes/js/tinymce/blank.htm',
'wp-includes/js/tinymce/plugins/media/css/content.css',
'wp-includes/js/tinymce/plugins/media/img',
'wp-includes/js/tinymce/plugins/safari',
// 3.2
_WP_ADMIN_ . '/images/logo-login.gif',
_WP_ADMIN_ . '/images/star.gif',
_WP_ADMIN_ . '/js/list-table.dev.js',
_WP_ADMIN_ . '/js/list-table.js',
'wp-includes/default-embeds.php',
'wp-includes/js/tinymce/plugins/wordpress/img/help.gif',
'wp-includes/js/tinymce/plugins/wordpress/img/more.gif',
'wp-includes/js/tinymce/plugins/wordpress/img/toolbars.gif',
'wp-includes/js/tinymce/themes/advanced/img/fm.gif',
'wp-includes/js/tinymce/themes/advanced/img/sflogo.png',
// 3.3
_WP_ADMIN_ . '/css/colors-classic-rtl.css',
_WP_ADMIN_ . '/css/colors-classic-rtl.dev.css',
_WP_ADMIN_ . '/css/colors-fresh-rtl.css',
_WP_ADMIN_ . '/css/colors-fresh-rtl.dev.css',
_WP_ADMIN_ . '/css/dashboard-rtl.css',
_WP_ADMIN_ . '/css/dashboard-rtl.dev.css',
_WP_ADMIN_ . '/css/dashboard.css',
_WP_ADMIN_ . '/css/dashboard.dev.css',
_WP_ADMIN_ . '/css/farbtastic-rtl.css',
_WP_ADMIN_ . '/css/global-rtl.css',
_WP_ADMIN_ . '/css/global-rtl.dev.css',
_WP_ADMIN_ . '/css/global.css',
_WP_ADMIN_ . '/css/global.dev.css',
_WP_ADMIN_ . '/css/install-rtl.css',
_WP_ADMIN_ . '/css/install-rtl.dev.css',
_WP_ADMIN_ . '/css/login-rtl.css',
_WP_ADMIN_ . '/css/login-rtl.dev.css',
_WP_ADMIN_ . '/css/login.css',
_WP_ADMIN_ . '/css/login.dev.css',
_WP_ADMIN_ . '/css/ms.css',
_WP_ADMIN_ . '/css/ms.dev.css',
_WP_ADMIN_ . '/css/nav-menu-rtl.css',
_WP_ADMIN_ . '/css/nav-menu-rtl.dev.css',
_WP_ADMIN_ . '/css/nav-menu.css',
_WP_ADMIN_ . '/css/nav-menu.dev.css',
_WP_ADMIN_ . '/css/plugin-install-rtl.css',
_WP_ADMIN_ . '/css/plugin-install-rtl.dev.css',
_WP_ADMIN_ . '/css/plugin-install.css',
_WP_ADMIN_ . '/css/plugin-install.dev.css',
_WP_ADMIN_ . '/css/press-this-rtl.css',
_WP_ADMIN_ . '/css/press-this-rtl.dev.css',
_WP_ADMIN_ . '/css/press-this.css',
_WP_ADMIN_ . '/css/press-this.dev.css',
_WP_ADMIN_ . '/css/theme-editor-rtl.css',
_WP_ADMIN_ . '/css/theme-editor-rtl.dev.css',
_WP_ADMIN_ . '/css/theme-editor.css',
_WP_ADMIN_ . '/css/theme-editor.dev.css',
_WP_ADMIN_ . '/css/theme-install-rtl.css',
_WP_ADMIN_ . '/css/theme-install-rtl.dev.css',
_WP_ADMIN_ . '/css/theme-install.css',
_WP_ADMIN_ . '/css/theme-install.dev.css',
_WP_ADMIN_ . '/css/widgets-rtl.css',
_WP_ADMIN_ . '/css/widgets-rtl.dev.css',
_WP_ADMIN_ . '/css/widgets.css',
_WP_ADMIN_ . '/css/widgets.dev.css',
_WP_ADMIN_ . '/includes/internal-linking.php',
'wp-includes/images/admin-bar-sprite-rtl.png',
'wp-includes/js/jquery/ui.button.js',
'wp-includes/js/jquery/ui.core.js',
'wp-includes/js/jquery/ui.dialog.js',
'wp-includes/js/jquery/ui.draggable.js',
'wp-includes/js/jquery/ui.droppable.js',
'wp-includes/js/jquery/ui.mouse.js',
'wp-includes/js/jquery/ui.position.js',
'wp-includes/js/jquery/ui.resizable.js',
'wp-includes/js/jquery/ui.selectable.js',
'wp-includes/js/jquery/ui.sortable.js',
'wp-includes/js/jquery/ui.tabs.js',
'wp-includes/js/jquery/ui.widget.js',
'wp-includes/js/l10n.dev.js',
'wp-includes/js/l10n.js',
'wp-includes/js/tinymce/plugins/wplink/css',
'wp-includes/js/tinymce/plugins/wplink/img',
'wp-includes/js/tinymce/plugins/wplink/js',
'wp-includes/js/tinymce/themes/advanced/img/wpicons.png',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/butt2.png',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/button_bg.png',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/down_arrow.gif',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/fade-butt.png',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/separator.gif',
// Don't delete, yet: 'wp-rss.php',
// Don't delete, yet: 'wp-rdf.php',
// Don't delete, yet: 'wp-rss2.php',
// Don't delete, yet: 'wp-commentsrss2.php',
// Don't delete, yet: 'wp-atom.php',
// Don't delete, yet: 'wp-feed.php',
// 3.4
_WP_ADMIN_ . '/images/gray-star.png',
_WP_ADMIN_ . '/images/logo-login.png',
_WP_ADMIN_ . '/images/star.png',
_WP_ADMIN_ . '/index-extra.php',
_WP_ADMIN_ . '/network/index-extra.php',
_WP_ADMIN_ . '/user/index-extra.php',
_WP_ADMIN_ . '/images/screenshots/admin-flyouts.png',
_WP_ADMIN_ . '/images/screenshots/coediting.png',
_WP_ADMIN_ . '/images/screenshots/drag-and-drop.png',
_WP_ADMIN_ . '/images/screenshots/help-screen.png',
_WP_ADMIN_ . '/images/screenshots/media-icon.png',
_WP_ADMIN_ . '/images/screenshots/new-feature-pointer.png',
_WP_ADMIN_ . '/images/screenshots/welcome-screen.png',
'wp-includes/css/editor-buttons.css',
'wp-includes/css/editor-buttons.dev.css',
'wp-includes/js/tinymce/plugins/paste/blank.htm',
'wp-includes/js/tinymce/plugins/wordpress/css',
'wp-includes/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wordpress/img/embedded.png',
'wp-includes/js/tinymce/plugins/wordpress/img/more_bug.gif',
'wp-includes/js/tinymce/plugins/wordpress/img/page_bug.gif',
'wp-includes/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wpeditimage/css/editimage-rtl.css',
'wp-includes/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wpfullscreen/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wpgallery/img/gallery.png',
'wp-includes/js/tinymce/plugins/wplink/editor_plugin.dev.js',
// Don't delete, yet: 'wp-pass.php',
// Don't delete, yet: 'wp-register.php',
// 3.5
_WP_ADMIN_ . '/gears-manifest.php',
_WP_ADMIN_ . '/includes/manifest.php',
_WP_ADMIN_ . '/images/archive-link.png',
_WP_ADMIN_ . '/images/blue-grad.png',
_WP_ADMIN_ . '/images/button-grad-active.png',
_WP_ADMIN_ . '/images/button-grad.png',
_WP_ADMIN_ . '/images/ed-bg-vs.gif',
_WP_ADMIN_ . '/images/ed-bg.gif',
_WP_ADMIN_ . '/images/fade-butt.png',
_WP_ADMIN_ . '/images/fav-arrow-rtl.gif',
_WP_ADMIN_ . '/images/fav-arrow.gif',
_WP_ADMIN_ . '/images/fav-vs.png',
_WP_ADMIN_ . '/images/fav.png',
_WP_ADMIN_ . '/images/gray-grad.png',
_WP_ADMIN_ . '/images/loading-publish.gif',
_WP_ADMIN_ . '/images/logo-ghost.png',
_WP_ADMIN_ . '/images/logo.gif',
_WP_ADMIN_ . '/images/menu-arrow-frame-rtl.png',
_WP_ADMIN_ . '/images/menu-arrow-frame.png',
_WP_ADMIN_ . '/images/menu-arrows.gif',
_WP_ADMIN_ . '/images/menu-bits-rtl-vs.gif',
_WP_ADMIN_ . '/images/menu-bits-rtl.gif',
_WP_ADMIN_ . '/images/menu-bits-vs.gif',
_WP_ADMIN_ . '/images/menu-bits.gif',
_WP_ADMIN_ . '/images/menu-dark-rtl-vs.gif',
_WP_ADMIN_ . '/images/menu-dark-rtl.gif',
_WP_ADMIN_ . '/images/menu-dark-vs.gif',
_WP_ADMIN_ . '/images/menu-dark.gif',
_WP_ADMIN_ . '/images/required.gif',
_WP_ADMIN_ . '/images/screen-options-toggle-vs.gif',
_WP_ADMIN_ . '/images/screen-options-toggle.gif',
_WP_ADMIN_ . '/images/toggle-arrow-rtl.gif',
_WP_ADMIN_ . '/images/toggle-arrow.gif',
_WP_ADMIN_ . '/images/upload-classic.png',
_WP_ADMIN_ . '/images/upload-fresh.png',
_WP_ADMIN_ . '/images/white-grad-active.png',
_WP_ADMIN_ . '/images/white-grad.png',
_WP_ADMIN_ . '/images/widgets-arrow-vs.gif',
_WP_ADMIN_ . '/images/widgets-arrow.gif',
_WP_ADMIN_ . '/images/wpspin_dark.gif',
'wp-includes/images/upload.png',
'wp-includes/js/prototype.js',
'wp-includes/js/scriptaculous',
_WP_ADMIN_ . '/css/wp-admin-rtl.dev.css',
_WP_ADMIN_ . '/css/wp-admin.dev.css',
_WP_ADMIN_ . '/css/media-rtl.dev.css',
_WP_ADMIN_ . '/css/media.dev.css',
_WP_ADMIN_ . '/css/colors-classic.dev.css',
_WP_ADMIN_ . '/css/customize-controls-rtl.dev.css',
_WP_ADMIN_ . '/css/customize-controls.dev.css',
_WP_ADMIN_ . '/css/ie-rtl.dev.css',
_WP_ADMIN_ . '/css/ie.dev.css',
_WP_ADMIN_ . '/css/install.dev.css',
_WP_ADMIN_ . '/css/colors-fresh.dev.css',
'wp-includes/js/customize-base.dev.js',
'wp-includes/js/json2.dev.js',
'wp-includes/js/comment-reply.dev.js',
'wp-includes/js/customize-preview.dev.js',
'wp-includes/js/wplink.dev.js',
'wp-includes/js/tw-sack.dev.js',
'wp-includes/js/wp-list-revisions.dev.js',
'wp-includes/js/autosave.dev.js',
'wp-includes/js/admin-bar.dev.js',
'wp-includes/js/quicktags.dev.js',
'wp-includes/js/wp-ajax-response.dev.js',
'wp-includes/js/wp-pointer.dev.js',
'wp-includes/js/hoverIntent.dev.js',
'wp-includes/js/colorpicker.dev.js',
'wp-includes/js/wp-lists.dev.js',
'wp-includes/js/customize-loader.dev.js',
'wp-includes/js/jquery/jquery.table-hotkeys.dev.js',
'wp-includes/js/jquery/jquery.color.dev.js',
'wp-includes/js/jquery/jquery.color.js',
'wp-includes/js/jquery/jquery.hotkeys.dev.js',
'wp-includes/js/jquery/jquery.form.dev.js',
'wp-includes/js/jquery/suggest.dev.js',
_WP_ADMIN_ . '/js/xfn.dev.js',
_WP_ADMIN_ . '/js/set-post-thumbnail.dev.js',
_WP_ADMIN_ . '/js/comment.dev.js',
_WP_ADMIN_ . '/js/theme.dev.js',
_WP_ADMIN_ . '/js/cat.dev.js',
_WP_ADMIN_ . '/js/password-strength-meter.dev.js',
_WP_ADMIN_ . '/js/user-profile.dev.js',
_WP_ADMIN_ . '/js/theme-preview.dev.js',
_WP_ADMIN_ . '/js/post.dev.js',
_WP_ADMIN_ . '/js/media-upload.dev.js',
_WP_ADMIN_ . '/js/word-count.dev.js',
_WP_ADMIN_ . '/js/plugin-install.dev.js',
_WP_ADMIN_ . '/js/edit-comments.dev.js',
_WP_ADMIN_ . '/js/media-gallery.dev.js',
_WP_ADMIN_ . '/js/custom-fields.dev.js',
_WP_ADMIN_ . '/js/custom-background.dev.js',
_WP_ADMIN_ . '/js/common.dev.js',
_WP_ADMIN_ . '/js/inline-edit-tax.dev.js',
_WP_ADMIN_ . '/js/gallery.dev.js',
_WP_ADMIN_ . '/js/utils.dev.js',
_WP_ADMIN_ . '/js/widgets.dev.js',
_WP_ADMIN_ . '/js/wp-fullscreen.dev.js',
_WP_ADMIN_ . '/js/nav-menu.dev.js',
_WP_ADMIN_ . '/js/dashboard.dev.js',
_WP_ADMIN_ . '/js/link.dev.js',
_WP_ADMIN_ . '/js/user-suggest.dev.js',
_WP_ADMIN_ . '/js/postbox.dev.js',
_WP_ADMIN_ . '/js/tags.dev.js',
_WP_ADMIN_ . '/js/image-edit.dev.js',
_WP_ADMIN_ . '/js/media.dev.js',
_WP_ADMIN_ . '/js/customize-controls.dev.js',
_WP_ADMIN_ . '/js/inline-edit-post.dev.js',
_WP_ADMIN_ . '/js/categories.dev.js',
_WP_ADMIN_ . '/js/editor.dev.js',
'wp-includes/js/tinymce/plugins/wpeditimage/js/editimage.dev.js',
'wp-includes/js/tinymce/plugins/wpdialogs/js/popup.dev.js',
'wp-includes/js/tinymce/plugins/wpdialogs/js/wpdialog.dev.js',
'wp-includes/js/plupload/handlers.dev.js',
'wp-includes/js/plupload/wp-plupload.dev.js',
'wp-includes/js/swfupload/handlers.dev.js',
'wp-includes/js/jcrop/jquery.Jcrop.dev.js',
'wp-includes/js/jcrop/jquery.Jcrop.js',
'wp-includes/js/jcrop/jquery.Jcrop.css',
'wp-includes/js/imgareaselect/jquery.imgareaselect.dev.js',
'wp-includes/css/wp-pointer.dev.css',
'wp-includes/css/editor.dev.css',
'wp-includes/css/jquery-ui-dialog.dev.css',
'wp-includes/css/admin-bar-rtl.dev.css',
'wp-includes/css/admin-bar.dev.css',
'wp-includes/js/jquery/ui/jquery.effects.clip.min.js',
'wp-includes/js/jquery/ui/jquery.effects.scale.min.js',
'wp-includes/js/jquery/ui/jquery.effects.blind.min.js',
'wp-includes/js/jquery/ui/jquery.effects.core.min.js',
'wp-includes/js/jquery/ui/jquery.effects.shake.min.js',
'wp-includes/js/jquery/ui/jquery.effects.fade.min.js',
'wp-includes/js/jquery/ui/jquery.effects.explode.min.js',
'wp-includes/js/jquery/ui/jquery.effects.slide.min.js',
'wp-includes/js/jquery/ui/jquery.effects.drop.min.js',
'wp-includes/js/jquery/ui/jquery.effects.highlight.min.js',
'wp-includes/js/jquery/ui/jquery.effects.bounce.min.js',
'wp-includes/js/jquery/ui/jquery.effects.pulsate.min.js',
'wp-includes/js/jquery/ui/jquery.effects.transfer.min.js',
'wp-includes/js/jquery/ui/jquery.effects.fold.min.js',
_WP_ADMIN_ . '/options-privacy.php',
);

/**
 * Stores new files in wp-content to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the WordPress Upgrade. These items will not be
 * re-installed in future upgrades, this behaviour is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to wp-content) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
'plugins/akismet/' => '2.0',
'themes/twentyten/' => '3.0',
'themes/twentyeleven/' => '3.2',
'themes/twentytwelve/' => '3.5',
);

/**
 * Upgrade the core of WordPress.
 *
 * This will create a .maintenance file at the base of the WordPress directory
 * to ensure that people can not access the web site, when the files are being
 * copied to their locations.
 *
 * The files in the {@link $_old_files} list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the {@link $_new_bundled_files} list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current WordPress base.
 *   3. Copy new WordPress directory over old WordPress files.
 *   4. Upgrade WordPress to new version.
 *     4.1. Copy all files/folders other than wp-content
 *     4.2. Copy any language files to WP_LANG_DIR (which may differ from WP_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new WordPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new WordPress over the old fails, then the worse is that
 * the new WordPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @param string $from New release unzipped path.
 * @param string $to Path to old WordPress installation.
 * @return WP_Error|null WP_Error on failure, null on success.
 */
function update_core($from, $to) {
	global $wp_filesystem, $_old_files, $_new_bundled_files, $wpdb;

	@set_time_limit( 300 );

	// Sanity check the unzipped distribution
	apply_filters( 'update_feedback', __('Verifying the unpacked files&#8230;') );
	$distro = '';
	$roots = array( '/wordpress/', '/wordpress-mu/' );
	foreach ( $roots as $root ) {
		if ( $wp_filesystem->exists( $from . $root . 'readme.html' ) && $wp_filesystem->exists( $from . $root . 'wp-includes/version.php' ) ) {
			$distro = $root;
			break;
		}
	}
	if ( ! $distro ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'insane_distro', __('The update could not be unpacked') );
	}

	// Import $wp_version, $required_php_version, and $required_mysql_version from the new version
	// $wp_filesystem->wp_content_dir() returned unslashed pre-2.8
	$versions_file = trailingslashit( $wp_filesystem->wp_content_dir() ) . 'upgrade/version-current.php';
	if ( ! $wp_filesystem->copy( $from . $distro . 'wp-includes/version.php', $versions_file ) ) {
		 $wp_filesystem->delete( $from, true );
		 return new WP_Error( 'copy_failed', __('Could not copy file.') );
	}

	$wp_filesystem->chmod( $versions_file, FS_CHMOD_FILE );
	require_once( WP_CONTENT_DIR . '/upgrade/version-current.php' );
	$wp_filesystem->delete( $versions_file );

	$php_version    = phpversion();
	$mysql_version  = $wpdb->db_version();
	$old_wp_version = $GLOBALS['wp_version']; // The version of WordPress we're updating from
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' )  ); // a dash in the version indicates a Development release
	$php_compat     = version_compare( $php_version, $required_php_version, '>=' );
	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
		$mysql_compat = true;
	else
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );

	if ( !$mysql_compat || !$php_compat )
		$wp_filesystem->delete($from, true);

	if ( !$mysql_compat && !$php_compat )
		return new WP_Error( 'php_mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.'), $wp_version, $required_php_version, $required_mysql_version, $php_version, $mysql_version ) );
	elseif ( !$php_compat )
		return new WP_Error( 'php_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher. You are running version %3$s.'), $wp_version, $required_php_version, $php_version ) );
	elseif ( !$mysql_compat )
		return new WP_Error( 'mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.'), $wp_version, $required_mysql_version, $mysql_version ) );

	apply_filters('update_feedback', __('Installing the latest version&#8230;'));

	// Create maintenance file to signal that we are upgrading
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file = $to . '.maintenance';
	$wp_filesystem->delete($maintenance_file);
	$wp_filesystem->put_contents($maintenance_file, $maintenance_string, FS_CHMOD_FILE);

	// Copy new versions of WP files into place.
	$result = _copy_dir($from . $distro, $to, array('wp-content') );

	// Custom Content Directory needs updating now.
	// Copy Languages
	if ( !is_wp_error($result) && $wp_filesystem->is_dir($from . $distro . 'wp-content/languages') ) {
		if ( WP_LANG_DIR != ABSPATH . WPINC . '/languages' || @is_dir(WP_LANG_DIR) )
			$lang_dir = WP_LANG_DIR;
		else
			$lang_dir = WP_CONTENT_DIR . '/languages';

		if ( !@is_dir($lang_dir) && 0 === strpos($lang_dir, ABSPATH) ) { // Check the language directory exists first
			$wp_filesystem->mkdir($to . str_replace(ABSPATH, '', $lang_dir), FS_CHMOD_DIR); // If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			clearstatcache(); // for FTP, Need to clear the stat cache
		}

		if ( @is_dir($lang_dir) ) {
			$wp_lang_dir = $wp_filesystem->find_folder($lang_dir);
			if ( $wp_lang_dir )
				$result = copy_dir($from . $distro . 'wp-content/languages/', $wp_lang_dir);
		}
	}

	// 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users, preventing installation of Twenty Twelve.
	if ( '3.5' == $old_wp_version ) {
		if ( is_dir( WP_CONTENT_DIR . '/themes/twentytwelve' ) && ! file_exists( WP_CONTENT_DIR . '/themes/twentytwelve/style.css' )  ) {
			// Bumping the introduced version to 3.5.1 for the affected users causes Twenty Twelve to be installed for the first time
			if ( $wp_filesystem->delete( $wp_filesystem->wp_themes_dir() . 'twentytwelve/' ) )
				$_new_bundled_files[ 'themes/twentytwelve/' ] = '3.5.1';
		}
	}

	// Copy New bundled plugins & themes
	// This gives us the ability to install new plugins & themes bundled with future versions of WordPress whilst avoiding the re-install upon upgrade issue.
	// $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated
	if ( !is_wp_error($result) && ( ! defined('CORE_UPGRADE_SKIP_NEW_BUNDLED') || ! CORE_UPGRADE_SKIP_NEW_BUNDLED ) ) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running
			if ( $development_build || version_compare( $introduced_version, $old_wp_version, '>' ) ) {
				$directory = ('/' == $file[ strlen($file)-1 ]);
				list($type, $filename) = explode('/', $file, 2);

				// Check to see if the bundled items exist before attempting to copy them
				if ( ! $wp_filesystem->exists( $from . $distro . 'wp-content/' . $file ) )
					continue;

				if ( 'plugins' == $type )
					$dest = $wp_filesystem->wp_plugins_dir();
				elseif ( 'themes' == $type )
					$dest = trailingslashit($wp_filesystem->wp_themes_dir()); // Back-compat, ::wp_themes_dir() did not return trailingslash'd pre-3.2
				else
					continue;

				if ( ! $directory ) {
					if ( ! $development_build && $wp_filesystem->exists( $dest . $filename ) )
						continue;

					if ( ! $wp_filesystem->copy($from . $distro . 'wp-content/' . $file, $dest . $filename, FS_CHMOD_FILE) )
						$result = new WP_Error('copy_failed', __('Could not copy file.'), $dest . $filename);
				} else {
					if ( ! $development_build && $wp_filesystem->is_dir( $dest . $filename ) )
						continue;

					$wp_filesystem->mkdir($dest . $filename, FS_CHMOD_DIR);
					$_result = copy_dir( $from . $distro . 'wp-content/' . $file, $dest . $filename);
					if ( is_wp_error($_result) ) //If a error occurs partway through this final step, keep the error flowing through, but keep process going.
						$result = $_result;
				}
			}
		} //end foreach
	}

	// Handle $result error from the above blocks
	if ( is_wp_error($result) ) {
		$wp_filesystem->delete($maintenance_file);
		$wp_filesystem->delete($from, true);
		return $result;
	}

	// Remove old files
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;
		if ( !$wp_filesystem->exists($old_file) )
			continue;
		$wp_filesystem->delete($old_file, true);
	}

	// Upgrade DB with separate request
	apply_filters('update_feedback', __('Upgrading database&#8230;'));
	$db_upgrade_url = admin_url('upgrade.php?step=upgrade_db');
	wp_remote_post($db_upgrade_url, array('timeout' => 60));

	// Remove working directory
	$wp_filesystem->delete($from, true);

	// Force refresh of update information
	if ( function_exists('delete_site_transient') )
		delete_site_transient('update_core');
	else
		delete_option('update_core');

	// Remove maintenance file, we're done.
	$wp_filesystem->delete($maintenance_file);

	// If we made it this far:
	do_action( '_core_updated_successfully', $wp_version );

	return $wp_version;
}

/**
 * Copies a directory from one location to another via the WordPress Filesystem Abstraction.
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * This is a temporary function for the 3.1 -> 3.2 upgrade only and will be removed in 3.3
 *
 * @ignore
 * @since 3.2.0
 * @see copy_dir()
 *
 * @param string $from source directory
 * @param string $to destination directory
 * @param array $skip_list a list of files/folders to skip copying
 * @return mixed WP_Error on failure, True on success.
 */
function _copy_dir($from, $to, $skip_list = array() ) {
	global $wp_filesystem;

	$dirlist = $wp_filesystem->dirlist($from);

	$from = trailingslashit($from);
	$to = trailingslashit($to);

	$skip_regex = '';
	foreach ( (array)$skip_list as $key => $skip_file )
		$skip_regex .= preg_quote($skip_file, '!') . '|';

	if ( !empty($skip_regex) )
		$skip_regex = '!(' . rtrim($skip_regex, '|') . ')$!i';

	foreach ( (array) $dirlist as $filename => $fileinfo ) {
		if ( !empty($skip_regex) )
			if ( preg_match($skip_regex, $from . $filename) )
				continue;

		if ( 'f' == $fileinfo['type'] ) {
			if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) ) {
				// If copy failed, chmod file to 0644 and try again.
				$wp_filesystem->chmod($to . $filename, 0644);
				if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) )
					return new WP_Error('copy_failed', __('Could not copy file.'), $to . $filename);
			}
		} elseif ( 'd' == $fileinfo['type'] ) {
			if ( !$wp_filesystem->is_dir($to . $filename) ) {
				if ( !$wp_filesystem->mkdir($to . $filename, FS_CHMOD_DIR) )
					return new WP_Error('mkdir_failed', __('Could not create directory.'), $to . $filename);
			}
			$result = _copy_dir($from . $filename, $to . $filename, $skip_list);
			if ( is_wp_error($result) )
				return $result;
		}
	}
	return true;
}

/**
 * Redirect to the About WordPress page after a successful upgrade.
 *
 * This function is only needed when the existing install is older than 3.4.0.
 *
 * @since 3.3.0
 *
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $wp_version, $pagenow, $action;

	if ( version_compare( $wp_version, '3.4-RC1', '>=' ) )
		return;

	// Ensure we only run this on the update-core.php page. wp_update_core() could be called in other contexts.
	if ( 'update-core.php' != $pagenow )
		return;

 	if ( 'do-core-upgrade' != $action && 'do-core-reinstall' != $action )
 		return;

	// Load the updated default text localization domain for new strings
	load_default_textdomain();

	// See do_core_upgrade()
	show_message( __('WordPress updated successfully') );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message( '<span class="hide-if-no-js">' . sprintf( __( 'Welcome to WordPress %1$s. You will be redirected to the About WordPress screen. If not, click <a href="%2$s">here</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	show_message( '<span class="hide-if-js">' . sprintf( __( 'Welcome to WordPress %1$s. <a href="%2$s">Learn more</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit
	include(ABSPATH . _WP_ADMIN_ . '/admin-footer.php');
	exit();
}
add_action( '_core_updated_successfully', '_redirect_to_about_wordpress' );
