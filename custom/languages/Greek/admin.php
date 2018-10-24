<?php
/*
 *	Made by ArisC
 *  https://github.com/Ar1sC
 *  https://twitter.com/Ar1cC
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Greek Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Παρακαλώ Πιστοποιήστε την αυθεντικότητα',

	// Sidebar
	'dashboard' => 'Dashboard',
	'configuration' => 'Configuration',
	'layout' => 'Layout',
	'user_management' => 'User Management',
	'admin_cp' => 'AdminCP',
	'administration' => 'Διαχείριση',
	'overview' => 'Επισκόπηση',
	'core' => 'Πυρήνας',
	'minecraft' => 'Minecraft',
	'modules' => 'Modules',
	'security' => 'Ασφάλεια',
	'sitemap' => 'Sitemap',
	'styles' => 'Styles',
	'users_and_groups' => 'Χρήστες και Ομάδες',

	// Overview
	'running_nameless_version' => 'Τρέχουσα NamelessMC έκδοση <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Τρέχουσα PHP έκδοση <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Στατιστικά',
	'registrations' => 'Registrations',
	'topics' => 'Topics',
	'posts' => 'Posts',
    'notices' => 'Notices',
    'no_notices' => 'No notices.',
    'email_errors_logged' => 'Email errors have been logged',

	// Core
	'settings' => 'Ρυθμίσης',
	'general_settings' => 'Γενικές Ρυθμίσεις',
	'sitename' => 'Ονομα ιστοσελίδας',
	'default_language' => 'Προεπιλεγμένη γλώσσα',
	'default_language_help' => 'Οι χρήστες θα έχουν τη δυνατότητα να επιλέξουν από τις εγκατεστημένες γλώσσες.',
	'install_language' => 'Install Language',
	'update_user_languages' => 'Update User Languages',
	'update_user_languages_warning' => 'This will update the language for all users on your site, even if they have already selected one!',
	'updated_user_languages' => 'User languages have been updated.',
	'installed_languages' => 'Κάθε νέα γλώσσα έχει εγκατασταθεί με επιτυχία.',
	'default_timezone' => 'Προεπιλεγμένη ζώνη ώρας',
	'registration' => 'Εγγραφή',
	'enable_registration' => 'Ενεργοποίηση εγγραφής?',
	'verify_with_mcassoc' => 'Verify user accounts με MCAssoc?',
	'email_verification' => 'Ενεργοποίηση επαλήθευσης ηλεκτρονικού ταχυδρομείου?',
	'registration_settings_updated' => 'Registration settings updated successfully.',
	'homepage_type' => 'Αρχική Σελίδα τύπος',
	'post_formatting_type' => 'Αλληλογραφία μορφοποίηση τύπος',
	'portal' => 'Πύλη',
	'private_profiles' => 'Private Profiles',
	'missing_sitename' => 'Παρακαλώ εισάγετε ένα όνομα ιστοσελίδα μήκους μεταξύ 2 έως 64 χαρακτήρων.',
	'missing_contact_address' => 'Please insert a contact email address between 3 and 255 characters long.',
	'use_friendly_urls' => 'Φιλικό URLs',
	'use_friendly_urls_help' => 'ΣΗΜΑΝΤΙΚΟ: Ο διακομιστής σας πρέπει να ρυθμιστεί ώστε να επιτρεπεί την χρήση mod_rewrite και αρχεία .htaccess για να λειτουργήσει.',
	'config_not_writable' => 'Το <strong>core/config.php</strong> αρχείο δεν είναι εγγράψιμο. Παρακαλώ ελέγξτε τις άδειες του αρχείου.',
	'settings_updated_successfully' => 'General settings updated successfully.',
	'social_media' => 'Social Media',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Use Twitter dark theme?',
	'discord_id' => 'Discord Server ID',
	'discord_widget_theme' => 'Discord Widget Theme',
	'dark' => 'Dark',
	'light' => 'Light',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'social_media_settings_updated' => 'Social media settings updated successfully.',
	'successfully_updated' => 'Επιτυχής ενημέρωση',
    'debugging_and_maintenance' => 'Debugging and Maintenance',
	'debugging_settings_updated_successfully' => 'Debugging settings updated successfully.',
    'enable_debug_mode' => 'Enable debug mode?',
    'force_https' => 'Force https?',
    'force_https_help' => 'If enabled, all requests to your website will be redirected to https. You must have a valid SSL certificate active for this to work correctly.',
    'force_www' => 'Force www?',
    'contact_email_address' => 'Contact Email Address',
    'emails' => 'Emails',
    'email_errors' => 'Email Errors',
    'registration_email' => 'Registration Email',
    'contact_email' => 'Contact Email',
    'forgot_password_email' => 'Forgot Password Email',
    'unknown' => 'Unknown',
    'delete_email_error' => 'Delete error',
    'confirm_email_error_deletion' => 'Are you sure you want to delete this error?',
    'viewing_email_error' => 'Viewing error',
    'unable_to_write_email_config' => 'Unable to write to file <strong>core/email.php</core>. Please check file permissions.',
    'enable_mailer' => 'Enable PHPMailer?',
    'enable_mailer_help' => 'Enable this if emails aren\'t being sent by default. The use of PHPMailer requires you to have a service capable of sending emails, such as Gmail or an SMTP provider.',
    'outgoing_email' => 'Outgoing Email Address',
    'outgoing_email_info' => 'This is the email address which NamelessMC will use to send emails from.',
    'mailer_settings_info' => 'The following fields are required if you have enabled PHPMailer. For more information on how to fill out these fields, check out <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">the wiki</a>.',
    'host' => 'Host',
    'email_port' => 'Port',
    'email_password_hidden' => 'The password is not shown for security reasons.',
    'send_test_email' => 'Send Test Email',
    'send_test_email_info' => 'The following button will attempt to send an email to your email address, <strong>{x}</strong>. Any errors thrown whilst sending the email will be displayed.', // Don't replace {x}
    'send' => 'Send',
    'test_email_error' => 'Test email error:',
    'test_email_success' => 'Test email sent successfully!',
    'terms_error' => 'Please enter terms and conditions no longer than 100,000 characters.',
    'privacy_policy_error' => 'Please enter a privacy policy no longer than 100,000 characters.',
    'terms_updated' => 'Privacy policy and terms & conditions updated successfully.',
    'avatars' => 'Avatars',
    'allow_custom_avatars' => 'Allow custom user avatars?',
    'default_avatar' => 'Default avatar',
    'custom_avatar' => 'Custom avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Minecraft avatar source',
    'built_in_avatars' => 'Built-in avatar service',
    'minecraft_avatar_perspective' => 'Minecraft avatar perspective',
    'face' => 'Face',
    'head' => 'Head',
	'bust' => 'Bust',
    'select_default_avatar' => 'Select a new default avatar:',
    'no_avatars_available' => 'No avatars available. Please upload a new image above first.',
    'avatar_settings_updated_successfully' => 'Avatar settings updated successfully.',
    'navigation' => 'Navigation',
    'navbar_order' => 'Navbar Order',
    'navbar_order_instructions' => 'You can give each item a number above 0 to order items in the navbar, with 1 being the first item and higher numbers coming after it.',
    'navbar_icon' => 'Navbar Icon',
    'navbar_icon_instructions' => 'You can also add an icon to each navbar item here, for example using <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
    'navigation_settings_updated_successfully' => 'Navigation settings updated successfully.',
    'dropdown_items' => 'Dropdown Items',
    'enable_page_load_timer' => 'Enable page load timer?',
    'google_recaptcha' => 'Enable Google reCAPTCHA?',
    'recaptcha_site_key' => 'reCAPTCHA Site Key',
    'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
    'registration_disabled_message' => 'Registration disabled message',
    'enable_nicknames_on_registration' => 'Enable nicknames for registering users?',
    'validation_promote_group' => 'Post-validation group',
    'validation_promote_group_info' => 'This is the group a user will be promoted to once they have validated their account.',
    'login_method' => 'Login Method',
    'privacy_and_terms' => 'Privacy & Terms',

	// Reactions
	'icon' => 'Icon',
	'type' => 'Τύπος',
	'positive' => 'Θετικός',
	'neutral' => 'Ουδέτερος',
	'negative' => 'Αρνητικός',
	'editing_reaction' => 'Επεξεργασία Αντίδρασης',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> New Reaction',
	'creating_reaction' => 'Δημιουργία Αντίδρασης',
	'no_reactions' => 'There are no reactions yet.',
	'reaction_created_successfully' => 'Reaction created successfully.',
	'reaction_edited_successfully' => 'Reaction edited successfully.',
	'reaction_deleted_successfully' => 'Reaction deleted successfully.',
	'name_required' => 'A name is required',
	'html_required' => 'HTML is required',
	'type_required' => 'A type is required',
	'name_maximum_16' => 'The name must be no more than 16 characters',
	'html_maximum_255' => 'The HTML must be no more than 255 characters',
	'confirm_delete_reaction' => 'Are you sure you want to delete this reaction?',

	// Custom profile fields
	'custom_fields' => 'Προσαρμοσμένα Πεδία προφίλ',
	'new_field' => '<i class="fa fa-plus-circle"></i> New Field',
	'required' => 'Απαιτείται',
	'editable' => 'Editable',
	'public' => 'Δημόσιο',
	'text' => 'Κείμενο',
	'textarea' => 'Περιοχή κειμένου',
	'date' => 'Ημερομηνία',
	'creating_profile_field' => 'Δημιουργία προφίλ Πεδίο',
  	'editing_profile_field' => 'Επεξεργασία Προφίλ πεδίο',
	'field_name' => 'Ονομα πεδίου',
	'profile_field_required_help' => 'Τα υποχρεωτικά πεδία πρέπει να συμπληρωθούν από το χρήστη, και θα εμφανίζονται κατά την εγγραφή.',
	'profile_field_public_help' => 'Δημόσια πεδία θα εμφανίζονται σε όλους τους χρήστες, αν αυτό είναι απενεργοποιημένο μόνο οι διαμεσολαβητές να δουν τις τιμές.',
	'profile_field_error' => 'Εισάγετε ένα όνομα πεδίου μήκους μεταξύ 2 εώς 16 χαρακτήρες.',
	'description' => 'Description',
	'display_field_on_forum' => 'Θέλω να δείξω το πεδίο στο φόρουμ?',
	'profile_field_forum_help' => 'Αν είναι ενεργοποιημένο, το πεδίο θα εμφανιστεί από το χρήστη δίπλα στης δημοσιεύσεις.',
	'profile_field_editable_help' => 'If enabled, users will have permission to edit the field in their profile settings.',
	'no_custom_fields' => 'There are no custom fields yet.',
	'profile_field_updated_successfully' => 'The profile field was updated successfully.',
	'profile_field_created_successfully' => 'The profile field was created successfully.',
	'profile_field_deleted_successfully' => 'The profile field was deleted successfully.',

	// Minecraft
	'enable_minecraft_integration' => 'Enable Minecraft integration?',
    'mc_service_status' => 'Minecraft Service Status',
    'service_query_error' => 'Unable to retrieve service status.',
    'authme_integration' => 'AuthMe Integration',
    'authme_integration_info' => 'When AuthMe integration is enabled, users can only register ingame.',
    'enable_authme' => 'Enable AuthMe integration?',
    'authme_db_address' => 'AuthMe Database Address',
    'authme_db_port' => 'AuthMe Database Port',
    'authme_db_name' => 'AuthMe Database Name',
    'authme_db_user' => 'AuthMe Database Username',
    'authme_db_password' => 'AuthMe Database Password',
    'authme_hash_algorithm' => 'AuthMe Hashing Algorithm',
    'authme_db_table' => 'AuthMe User Table',
    'enter_authme_db_details' => 'Please enter valid database details.',
    'authme_password_sync' => 'Synchronise AuthMe password?',
    'authme_password_sync_help' => 'If enabled, whenever a user\'s password is updated ingame, the password will also be updated on the website.',
    'minecraft_servers' => 'Minecraft Servers',
    'account_verification' => 'Minecraft Account Verification',
    'server_banners' => 'Server Banners',
    'query_errors' => 'Query Errors',
    'add_server' => '<i class="fa fa-plus-circle"></i> Add Server',
    'no_servers_defined' => 'No servers have been defined yet',
    'query_settings' => 'Query Settings',
    'default_server' => 'Default Server',
    'no_default_server' => 'No default server',
    'external_query' => 'Use external query?',
    'external_query_help' => 'If the default server query does not work, enable this option.',
    'adding_server' => 'Adding Server',
    'server_name' => 'Server Name',
    'server_address' => 'Server Address',
    'server_address_help' => 'This is the IP address or domain used to connect to your server, without the port.',
    'server_port' => 'Server Port',
    'parent_server' => 'Parent Server',
    'parent_server_help' => 'A parent server is typically the Bungee instance the server is connected to, if any.',
    'no_parent_server' => 'No parent server',
    'bungee_instance' => 'BungeeCord Instance?',
    'bungee_instance_help' => 'Select this option if the server is a BungeeCord instance.',
    'server_query_information' => 'In order to display a list of online players on your website, your server <strong>must</strong> have the \'enable-query\' option enabled in your server\'s <strong>server.properties</strong> file',
    'enable_status_query' => 'Enable status query?',
    'status_query_help' => 'If this is enabled, the status page will show this server as being online or offline.',
    'enable_player_list' => 'Enable player list?',
    'pre_1.7' => 'Minecraft version older than 1.7?',
    'player_list_help' => 'If this is enabled, the status page will display a list of online players.',
    'server_query_port' => 'Server Query Port',
    'server_query_port_help' => 'This is the query.port option in your server\'s server.properties file, provided the enable-query option in the same file is set to true.',
    'server_name_required' => 'Please enter the server name',
    'server_name_minimum' => 'Please ensure your server name is a minimum of 1 character',
    'server_name_maximum' => 'Please ensure your server name is a maximum of 20 characters',
    'server_address_required' => 'Please enter the server address',
    'server_address_minimum' => 'Please ensure your server address is a minimum of 1 character',
    'server_address_maximum' => 'Please ensure your server address is a maximum of 64 characters',
    'server_port_required' => 'Please enter the server port',
    'server_port_minimum' => 'Please ensure your server port is a minimum of 2 characters',
    'server_port_maximum' => 'Please ensure your server port is a maximum of 5 characters',
    'server_parent_required' => 'Please select a parent server',
    'query_port_maximum' => 'Please ensure your query port is a maximum of 5 characters',
    'server_created' => 'Server created successfully.',
    'confirm_delete_server' => 'Are you sure you want to delete this server?',
    'server_updated' => 'Server updated successfully.',
    'editing_server' => 'Editing Server',
    'server_deleted' => 'Server deleted successfully',
    'unable_to_delete_server' => 'Unable to delete server.',
    'leave_port_empty_for_srv' => 'You can the port empty if it is 25565, or if your domain uses an SRV record',
    'viewing_query_error' => 'Viewing Query Error',
    'confirm_query_error_deletion' => 'Are you sure you want to delete this query error?',
    'no_query_errors' => 'No query errors logged.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> New Banner',
    'purge_errors' => 'Purge Errors',
    'confirm_purge_errors' => 'Are you sure you want to purge all errors?',
	'email_errors_purged_successfully' => 'Email errors have been purged successfully.',
	'error_deleted_successfully' => 'The error has been deleted successfully.',
	'no_email_errors' => 'No email errors logged.',
	'email_settings_updated_successfully' => 'Email settings have been updated successfully.',
	'content' => 'Content',
    'mcassoc_help' => 'mcassoc is an external service which can be used to verify users own the Minecraft account they have registered with. To use this feature, you will need to sign up for a shared key <a href="https://mcassoc.lukegb.com/" target="_blank">here</a>.',
    'mcassoc_key' => 'mcassoc Shared Key',
    'mcassoc_instance' => 'mcassoc Instance Key',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Click to generate an instance key</a>',
    'mcassoc_error' => 'Please ensure you that have entered your shared key correctly, and that you have generated an instance key correctly.',
    'updated_mcassoc_successfully' => 'mcassoc settings updated successfully.',
    'force_premium_accounts' => 'Force premium Minecraft accounts?',
    'banner_background' => 'Banner background',
    'query_interval' => 'Query interval (in minutes, must be between 5 and 60)',
    'player_graphs' => 'Player Graphs',
    'player_count_cronjob_info' => 'You can set up a cron job to query your servers every {x} minutes with the following command:',
    'status_page' => 'Enable status page?',

	// Modules
	'modules_installed_successfully' => 'Any new modules have been installed successfully.',
	'enabled' => 'Ενεργοποιήθηκε',
	'disabled' => 'Απενεργοποιήθηκε',
	'enable' => 'Ενεργοποιώ',
	'disable' => 'Απενεργοποιώ',
	'module_enabled' => 'Το τμήμα Ενεργοποιήθηκε.',
	'module_disabled' => 'Τμήμα Απενεργοποιήθηκε.',
	'author' => 'Author:',
	'author_x' => 'Author: {x}', // Don't replace {x}
	'module_outdated' => 'We have detected that this module is intended for Nameless version {x}, but you are running Nameless version {y}', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Find Modules',
	'view_all_modules' => 'View all modules',
	'unable_to_retrieve_modules' => 'Unable to retrieve modules',
	'module' => 'Module',

	// Styles
	'templates' => 'Templates',
	'template_outdated' => 'We have detected that your template is intended for Nameless version {x}, but you are running Nameless version {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Ενεργός',
	'deactivate' => 'Απενεργοποίηση',
	'activate' => 'Ενεργοποιώ',
	'warning_editing_default_template' => 'Προειδοποίηση! Συνιστάται να μην επεξεργαστείτε το προεπιλεγμένο template.',
	'images' => 'Eικόνες',
	'upload_new_image' => 'Μεταφόρτωση Νέας Εικόνας',
	'reset_background' => 'Επαναφορά Background',
	'install' => '<i class="fa fa-plus-circle"></i> Εγκαταστασή',
	'template_updated' => 'Template ενημερώθηκε με επιτυχία.',
	'default' => 'Προκαθορισμένο',
	'make_default' => 'Κάντε Προεπιλογή',
	'default_template_set' => 'Προεπιλεγμένο template οριστεί σε {x} επιτυχώς.', // Don't replace {x}
	'template_deactivated' => 'Template απενεργοποιήθηκε.',
	'template_activated' => 'Template ενεργοποιήθηκε.',
	'permissions' => 'Άδειες',
	'setting_perms_for_x' => 'Setting permissions for template {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Any new templates have been installed successfully.',
	'confirm_delete_template' => 'Are you sure you want to delete this template?',
	'delete' => 'Delete',
	'template_deleted_successfully' => 'Template deleted successfully.',
	'background_image_x' => 'Background image: <strong>{x}</strong>', // Don't replace {x}
	'find_templates' => 'Find Templates',
	'view_all_templates' => 'View all templates',
	'unable_to_retrieve_templates' => 'Unable to retrieve templates',
	'template' => 'Template',
	'stats' => 'Stats',
	'downloads_x' => 'Downloads: {x}',
	'views_x' => 'Views: {x}',
	'rating_x' => 'Rating: {x}',
	'editing_template_x' => 'Editing template {x}', // Don't replace {x}
	'cant_write_to_template' => 'Can\'t write to template file! Please check file permissions.',
	'unable_to_delete_template' => 'Unable to fully delete template. Please check file permissions.',

	// Users & groups
	'users' => 'Χρήστες',
	'groups' => 'Ομάδες',
	'group' => 'Ομάδα',
	'new_user' => '<i class="fa fa-plus-circle"></i> Νέος Χρήστης',
	'creating_new_user' => 'Δημιουργία νέου χρήστη',
	'registered' => 'Εγγεγραμμένος',
	'user_created' => 'Ο Χρήστης δημιουργήθηκε με επιτυχία.',
	'cant_delete_root_user' => 'Can\'t delete the root user!',
	'cant_modify_root_user' => 'Can\'t modify the root user\'s group!',
	'user_deleted' => 'Ο Χρήστης διαγράφηκε με επιτυχία.',
	'confirm_user_deletion' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε το χρήστη <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Επικύρωση Χρήστη',
	'update_uuid' => 'Ενήμερωση UUID',
	'update_mc_name' => 'Ενήμερωση Minecraft Username',
	'reset_password' => 'Επαναφέρετε τον κωδικό πρόσβασης',
	'punish_user' => 'Τιμωρία χρήστη',
	'delete_user' => 'Διαγραφή χρήστη',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Αλλες ενέργειες',
	'disable_avatar' => 'Απενεργοποίηση Avatar',
	'select_user_group' => 'You must select a user\'s group.',
	'uuid_max_32' => 'The UUID must be a maximum of 32 characters.',
	'title_max_64' => 'The user title must be a maximum of 64 characters.',
	'group_id' => 'Group ID',
	'name' => 'Όνομα',
	'title' => 'Τίτλος Xρήστη',
	'new_group' => '<i class="fa fa-plus-circle"></i> Νέα Ομάδα',
	'group_name_required' => 'Εισάγετε ένα όνομα ομάδας.',
	'group_name_minimum' => 'Βεβαιωθείτε ότι το όνομα της ομάδας σας είναι τουλάχιστον 2 χαρακτήρες.',
	'group_name_maximum' => 'Βεβαιωθείτε ότι το όνομα της ομάδας σας είναι το μέγιστο μήκος 20 χαρακτήρων.',
	'creating_group' => 'Creating new group',
	'group_html_maximum' => 'Please ensure your group HTML is no longer than 1024 characters long.',
	'group_html' => 'Group HTML',
	'group_html_lg' => 'Group HTML Large',
	'group_username_colour' => 'Group Username Color',
	'group_staff' => 'Is the group a staff group?',
	'group_modcp' => 'Μπορεί η ομάδα να δεί το ModCP?',
	'group_admincp' => 'Μπορεί η ομάδα να δεί το AdminCP?',
	'delete_group' => 'Διαγραφή ομάδας',
	'confirm_group_deletion' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε την ομάδα {x}?', // Don't replace {x}
	'group_not_exist' => 'Αυτή η ομάδα δεν υπάρχει.',
	'secondary_groups' => 'Secondary Groups',
	'secondary_groups_info' => 'The user will gain any additional permissions from these groups',
	'unable_to_update_uuid' => 'Unable to update UUID.',
	'default_group' => 'Is the group the default group (for new users)?',
	'user_id' => 'User ID',
	'uuid' => 'UUID',
	'group_order' => 'Group Order',
	'group_created_successfully' => 'Group created successfully.',
	'group_updated_successfully' => 'Group updated successfully.',
	'group_deleted_successfully' => 'Group deleted successfully.',
	'unable_to_delete_group' => 'Unable to delete a default group, or a group that can view the StaffCP. Please update the group settings first!',
	'can_view_staffcp' => 'Can the group view the StaffCP?',
	'user' => 'User',
	'user_validated_successfully' => 'User validated successfully.',
	'user_updated_successfully' => 'User updated successfully,',
	'editing_user_x' => 'Editing user {x}', // Don't replace {x}

	// Permissions
	'select_all' => 'Select All',
	'deselect_all' => 'Deselect All',
	'background_image' => 'Background image',
	'can_edit_own_group' => 'Can edit own group\'s permissions',
	'permissions_updated_successfully' => 'Permissions updated successfully.',
	'cant_edit_this_group' => 'You can\'t edit this group\'s permissions!',

	// General Admin language
	'task_successful' => 'Task successful.',
	'invalid_action' => 'Μη έγκυρη ενέργεια.',
	'enable_night_mode' => 'Ενεργοποιήστε τη λειτουργία νύχτας',
	'disable_night_mode' => 'Απενεργοποιήστε τη λειτουργία νύχτας',
	'view_site' => 'Προβολή ιστότοπου',
	'signed_in_as_x' => 'Signed in as {x}', // Don't replace {x}
    'warning' => 'Προειδοποίηση',

    // Maintenance
    'maintenance_mode' => 'Λειτουργία Συντήρησης',
    'maintenance_enabled' => 'Λειτουργία συντήρησης είναι ενεργοποιημένη.',
    'enable_maintenance_mode' => 'Ενεργοποίηση λειτουργίας συντήρησης?',
    'maintenance_mode_message' => 'Μήνυμα λειτουργία συντήρησης',
    'maintenance_message_max_1024' => 'Βεβαιωθείτε οτι το μήνυμα συντήρηση σας είναι το μέγιστο 1024 χαρακτήρες.',

	// Security
	'acp_logins' => 'AdminCP Logins',
	'please_select_logs' => 'Επιλέξτε τα αρχεία καταγραφής για να δείτε',
	'ip_address' => 'Διεύθυνση IP',
	'template_changes' => 'Template Αλλαγές',
	'file_changed' => 'Το αρχείο άλλαξε',
	'all_logs' => 'All Logs',
	'action' => 'Action',
	'action_info' => 'Action Info',

	// Updates
	'update' => 'Ενημέρωση',
	'current_version_x' => 'Τρέχουσα Έκδοση: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Καινούργια Έκδοση: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Υπάρχει μια νέα διαθέσιμη ενημέρωση',
	'new_urgent_update_available' => 'There is a new urgent update available. Please update as soon as possible!',
	'up_to_date' => 'Your   NamelessMC installation is up to date!',
	'urgent' => 'Αυτή η ενήμερωση είναι μια επείγουσα ενημέρωση',
	'changelog' => 'Αλλαγές',
	'update_check_error' => 'Παρουσιάστικε σφάλμα ενώ γινόταν ο έλεγχος ενημέρωσης:',
	'instructions' => 'Οδηγίες',
	'download' => 'Λήψη',
	'install_confirm' => 'Παρακαλούμε βεβαιωθείτε ότι έχετε κατεβάσει το πακέτο και να έχετε ανεβάσει τα αρχεία πρώτα!',

	// Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget enabled.',
	'widget_disabled' => 'Widget disabled.',
	'widget_updated' => 'Widget updated.',
	'editing_widget_x' => 'Editing widget {x}', // Don't replace {x}
	'module_x' => 'Module: {x}', // Don't replace {x}
	'widget_order' => 'Widget Order',

    // Online users widget
    'include_staff_in_user_widget' => 'Include staff members in user widget?',

    // Custom Pages
    'pages' => 'Pages',
    'custom_pages' => 'Pages',
    'new_page' => '<i class="fa fa-plus-circle"></i> New Page',
    'no_custom_pages' => 'No pages have been created yet.',
    'creating_new_page' => 'Creating Page',
    'page_title' => 'Page Title',
    'page_path' => 'Page Path (with preceding /, eg /example)',
    'page_icon' => 'Page Icon',
    'page_link_location' => 'Page Link Location',
    'page_link_navbar' => 'Navbar',
    'page_link_footer' => 'Footer',
    'page_link_more' => '"More" Dropdown',
    'page_link_none' => 'No link',
    'page_content' => 'Page Content',
    'page_redirect' => 'Page Redirect?',
    'page_redirect_to' => 'Redirect Link (with preceding http://)',
    'unsafe_html' => 'Allow unsafe HTML?',
    'unsafe_html_warning' => 'Enabling this option means any HTML can be used on the page, including potentially dangerous JavaScript. Only enable this if you are sure your HTML is safe.',
    'include_in_sitemap' => 'Include in sitemap?',
    'sitemap_link' => 'Sitemap link:',
    'page_permissions' => 'Page Permissions',
    'view_page' => 'View Page?',
    'editing_page_x' => 'Editing Page {x}', // Don't replace {x}
    'unable_to_create_page' => 'Unable to create page:',
    'page_title_required' => 'A page title is required.',
    'page_url_required' => 'A page path is required.',
    'link_location_required' => 'A link location is required.',
    'page_title_minimum_2' => 'The page title must be a minimum of 2 characters.',
    'page_url_minimum_2' => 'The page path must be a minimum of 2 characters.',
    'page_title_maximum_30' => 'The page title must be a maximum of 30 characters.',
    'page_icon_maximum_64' => 'The page icon must be a maximum of 64 characters.',
    'page_url_maximum_20' => 'The page path must be a maximum of 20 characters.',
    'page_content_maximum_100000' => 'The page content must be a maximum of 100000 characters.',
    'page_redirect_link_maximum_512' => 'The page redirect link must be a maximum of 512 characters.',
    'confirm_delete_page' => 'Are you sure you want to delete this page?',
    'page_created_successfully' => 'Page created successfully.',
    'page_updated_successfully' => 'Page updated successfully.',
    'page_deleted_successfully' => 'Page deleted successfully.',

    // API
    'api' => 'API',
    'enable_api' => 'Enable API?',
    'api_info' => 'The API allows for plugins and other services to interact with your website, such as the <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >official Nameless plugin</a>.',
    'enable_legacy_api' => 'Enable legacy API?',
    'legacy_api_info' => 'The legacy API allows plugins which use the old Nameless version 1 API to work with your version 2 website.',
    'confirm_api_regen' => 'Are you sure you want to regenerate your API key?',
	'api_key' => 'API Key',
	'api_url' => 'API URL',
	'copy' => 'Copy',
	'api_key_regenerated' => 'The API key has been regenerated successfully.',
    'api_registration_email' => 'API Registration Email',
	'show_registration_link' => 'Show registration link',
	'registration_link' => 'Registration Link',
    'link_to_complete_registration' => 'Link to complete registration: {x}', // Don't replace {x}
    'api_verification' => 'Enable API verification?',
    'api_verification_info' => 'If enabled, accounts can only be verified through the API, for example ingame using the official Nameless plugin. <strong>This option will override email verification, and accounts will be automatically activated!</strong><br />You should set up your default group to have limited permissions, and then update the post-validation group in the AdminCP -> Core -> Registration tab to the full member group with normal permissions.',
    'enable_username_sync' => 'Enable username sync?',
    'enable_username_sync_info' => 'If enabled, website usernames will be updated to match ingame usernames.',
	'api_settings_updated_successfully' => 'API settings updated successfully.',

	// File uploads
	'drag_files_here' => 'Σύρετε αρχεία εδώ για μεταφόρτωση.',
	'invalid_file_type' => 'Μη έγκυρος τύπος αρχείου!',
	'file_too_big' => 'Πολύ μεγάλο αρχείο! Το αρχείο σας ήταν {{filesize}} και το όριο είναι {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Allowed Proxies',
	'allowed_proxies_info' => 'Line separated list of allowed proxy IPs.',

	// Error logs
	'error_logs' => 'Error Logs',
	'notice_log' => 'Notice log',
	'warning_log' => 'Warning log',
	'custom_log' => 'Custom log',
	'other_log' => 'Other log',
	'fatal_log' => 'Fatal log',
	'log_file_not_found' => 'Log file not found.',
	'log_purged_successfully' => 'The log has been purged successfully.',

	// Hooks
	'discord_hooks' => 'Discord Hooks',
	'discord_hooks_info' => 'Send a message to a Discord channel when something happens on your site. Create a Discord hook in your Discord Server Settings -> Webhooks tab.',
	'discord_hook_url' => 'Discord webhook URL',
	'discord_hook_events' => 'Enabled Discord hook events (Ctrl+click to select multiple events)',
	'register_hook_info' => 'User registration',
	'validate_hook_info' => 'User validation',
	'delete_hook_info' => 'User deletion',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Unable to load sitemap file {x}', // Don't replace {x}
	'sitemap_generated' => 'Sitemap generated successfully',
	'sitemap_not_writable' => 'The <strong>cache/sitemaps</strong> directory is not writable.',
	'cache_not_writable' => 'The <strong>cache</strong> directory is not writable.',
	'generate_sitemap' => 'Generate Sitemap',
	'download_sitemap' => 'Download Sitemap',
	'sitemap_not_generated_yet' => 'A sitemap has not been generated yet!',
	'sitemap_last_generated_x' => 'The sitemap was last generated {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Page Metadata',
	'metadata_page_x' => 'Viewing metadata for page {x}', // Don't replace {x}
	'keywords' => 'Keywords',
	'description_max_500' => 'The description must be at most 500 characters.',
	'page' => 'Page',
	'metadata_updated_successfully' => 'Metadata updated successfully.',

	// Dashboard
	'total_users' => 'Total Users',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'New Users',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Average Players',
	'nameless_news' => 'NamelessMC News',
	'unable_to_retrieve_nameless_news' => 'Unable to retrieve the latest news',
	'confirm_leave_site' => 'You are about to leave this site! Are you sure you want to visit <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Server Compatibility',
	'issues' => 'Issues',

	// Other
	'source' => 'Source',
	'support' => 'Support'
);
