<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

?>

<div class="wrap about-wrap es">

	<style>
		.wrap.about-wrap {
			background-color: transparent;
			position: relative;
			margin: 25px 40px 0 20px;
			box-shadow: none;
			-webkit-box-shadow: none;
		}
		.about-wrap.es {
			max-width: 100%
		}
		.about-header .wrap .button-hero {
			color: #FFFFFF!important;
			border-color: #03a025!important;
			background: #03a025 !important;
			box-shadow: 0 1px 0 #03a025;
			font-weight: bold;
			height: 2em;
			line-height: 1em;
		}
		.about-header .wrap .button-hero:hover {
			color: #FFF!important;
			background: #0AAB2E!important;
			border-color: #0AAB2E!important;
		}
		.about-header {
			background-color: #FFF;
			padding: 1em 1em 2.5em 1em;
			-webkit-box-shadow: 0 0 7px 0 rgba(0, 0, 0, .2);
			box-shadow: 0 0 7px 0 rgba(0, 0, 0, .2);
		}
		.wrap.klawoo-form {
			margin: 1.3em 1.3em 0 0.1em;
			border-top: 1px dotted #ddd;
		}
		.form-table th {
			width: 350px !important;
		}
		.es-ltr {
			width: 20em;
			height: 2em;
            margin-bottom: 10px;
		}
		.es-about-text {
			margin-bottom: 2em;
			font-size: 1em;
			padding-top: 0.5em;
		}
		.es-notify-about-new-post-1 {
			margin-top: 1em;
			margin-right: 13em;
			margin-bottom: 0.3em;
			font-size: 1.1em;
		}
		.es-notify-about-new-post-2 {
			margin-right: 13em;
			font-size: 1em;
			color: gray;
		}
		.wrap.about-wrap h1 {
			font-size: 2.5em;
			line-height: 0.9em;
		}
		.feature-section.col>div {
			position: relative;
			width: 29.95%;
			margin-right: 4.999999999%;
			float: left
		}
		.feature-section.col.two-col>div {
			width: 45.95%
		}
		.feature-section.col img {
			width: 150px;
			border: none;
		}
		.feature-section.col p {
			margin-bottom: 1.5em
		}
		.about-wrap .feature-section h4 {
			margin-top: .4em
		}
		.about-wrap.es .feature-section {
			display: block!important
		}
		.about-wrap [class$=col] .last-feature {
			margin-right: 0
		}
		.es-badge,.es-support {
			position: absolute;
			top: 0;
		}
		.about-wrap .es-badge {
			right: 1.6em;
			color: #E1564B;
			background-color: transparent;
			padding-top: 100px;
			box-shadow: none;
			-webkit-box-shadow: none;
			background-image: url(../wp-content/plugins/email-subscribers/images/es-logo-64x64.png);
		}
		.es-badge {
			background: url(../wp-content/plugins/email-subscribers/images/es-logo-64x64.png) center no-repeat;
			color: #FFF;
			font-size: 12px;
			text-align: center;
			font-weight: 600;
			margin: 5px 0 0;
			padding-top: 110px;
			height: 24px;
			display: inline-block;
			width: 150px;
			text-rendering: optimizeLegibility;
			box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
			-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
			-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .2);
		}
		.es-support {
			color: #000;
			margin: 178px 0 0;
			height: 10px;
			width: 180px;
			text-rendering: optimizeLegibility;
			text-align: right;
			right: 0;
			margin-top: 9em;
			padding-right: 1em;
		}
		.es-contact-us {
			font-size: 20px;
			line-height: 1.5em;
			font-weight: 800;
			margin-right: 20px;
		}
		.es-contact-us a {
			color: #E1564B;
		}
		.es-donate-link {
			text-align: right;
			font-size: 0.8em;
			margin-top: 1em;
		}
		.es-esaf-integration {
			width: 75% !important;
		}
		.es-ig-integration {
			width: 100% !important;
		}
		.es-rm-integration {
			width: 79% !important;
		}
		.es-integration-guide {
			text-align:justify;
		}
		.es_feature, .es_summary {
			line-height: 1.7em!important;
		}
		.es_summary {
			margin-left: 0em!important;
		}
		.es_feature_list, .es_faq_list {
			list-style-type:disc;
			margin-left: 1.5em!important;
		}
		.es_faq {
			margin-bottom: 1em;
			font-weight: 700;
		}

        .form-table td.es-optin-headline {
            color: red;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
        }

        .form-table td.es-emm-image {
            padding: 15px 10px;
            width: 25%;
        }

        .form-table td.es-emm-text{
            padding: 15px 10px;
            width: 50%;
        }

        .form-table td.es-emm-optin{
            padding: 15px 10px;
            width: 25%;
        }

        .form-table td.es-emm-optin form[name="klawoo_subscribe"] {
            margin-right: 1px;
        }

        #klawoo_response {
            background-color: yellow;
        }

	</style>

	<?php
		$es_plugin_data = get_plugin_data( WP_PLUGIN_DIR.'/email-subscribers/email-subscribers.php' );
		$es_current_version = $es_plugin_data['Version'];
		$admin_email = get_option('admin_email');
	?>

	<div class="about-header">
		<h1><?php echo __( 'Welcome to the Email Subscribers Community!', 'email-subscribers' ); ?></h1>
		<div class="es-about-text"><?php echo __( 'We hope our plugin adds to your success ????', 'email-subscribers' ); ?></div>
		<div class="es-notify-about-new-post-1"><?php echo __( 'To get started, we did some initial setup to save your time ????', 'email-subscribers' ); ?></div>
		<ul>
			<li class="es-notify-about-new-post-2"><?php echo __( '1. Created a lead collecting form and added it the default widget area in your WP admin', 'email-subscribers' ); ?></li>
			<li class="es-notify-about-new-post-2"><?php echo __( '2. Created a "Test" subscriber group and added "', 'email-subscribers' ) .$admin_email . __('" to it.', 'email-subscribers' ); ?></li>
			<li class="es-notify-about-new-post-2"><?php echo __( '3. Sent a test post notification, test newsletter to the test subscriber group.', 'email-subscribers' ); ?></li>
		</ul>
		
		<div class="wrap klawoo-form">
			<table class="form-table">
                <tr><td colspan="3" class="es-optin-headline"><?php echo __( 'Build your list and succeed with email marketing in 5 short weeks', 'email-subscribers' ); ?></td></tr>
				<tr>
                    <td class="es-emm-image"><img alt="Email Marketing Mastery" src="<?php echo ES_URL; ?>images/email-marketing-mastery.png" /></td>
					<td class="es-emm-text">
                        <?php echo __( 'Do you want to build your list, keep off spam, write emails that people open and click through? Do you want to build your brand and nurture an amazing tribe?', 'email-subscribers' ); ?> <br /><br />
						<b><?php echo __( 'Enter your name and email on the form on right to get it all.', 'email-subscribers' ); ?></b> <br /><br />
						<?php echo __( 'First part is about the greatest mistake lot of people make (and you may as well be making). There are 5 steps to succeeding with email marketing and we\'ll cover it all.', 'email-subscribers' ); ?> <br /><br />
						<?php echo __( 'It\'s time to get to full speed - and you get this training for free. Sign up now.', 'email-subscribers' ); ?>
                    </td>
					<td class="es-emm-optin">

						<form name="klawoo_subscribe" action="#" method="POST" accept-charset="utf-8">
							<input class="es-ltr" type="text" name="name" id="name" placeholder="Your Name" />
							<input class="es-ltr" type="text" name="email" id="email" placeholder="Your Email" /> <br />
							<input type="hidden" name="list" value="hN8OkYzujUlKgDgfCTEcIA"/>
                            <input type="checkbox" name="es-gdpr-agree" id ="es-gdpr-agree" value="1" required="required">
                            <label for="es-gdpr-agree"><?php echo sprintf(__( 'I have read and agreed to your %s.', 'email-subscribers' ), '<a href="https://www.icegram.com/privacy-policy/" target="_blank">' . __( 'Privacy Policy', 'email-subscribers' ) . '</a>' ); ?></label>
                            <br /><br />
							<input type="submit" name="submit" id="submit" class="button button-hero" value="<?php echo __( 'Subscribe', 'email-subscribers' ); ?>">
							<br><br>
                            <p id="klawoo_response"></p>
						</form>

					</td>
				</tr>
			</table>
		</div>
		<div class="es-badge">
			<?php echo sprintf(__( "Version: %s", 'email-subscribers' ), $es_current_version ); ?>
		</div>
		<div class="es-support">
			<?php echo __( 'Questions? Need Help?', 'email-subscribers' ); ?>
			<div id="es-contact-us" class="es-contact-us"><a href="https://wordpress.org/support/plugin/email-subscribers" target="_blank"><?php echo __( "Contact Us", 'email-subscribers' ); ?></a>
			</div>
		</div>
	</div>
	<div class="es-donate-link">
		<?php echo sprintf(__( '<b>Like Email Subscribers?</b> If yes, then consider %s to support further developments.', 'email-subscribers' ), '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CPTHCDC382KVA" target="_blank">' . __( 'donating to us', 'email-subscribers' ) .'</a>' ); ?>
	</div>

    <script type="text/javascript">
        jQuery(function () {
            jQuery("form[name=klawoo_subscribe]").submit(function (e) {

                e.preventDefault();

                jQuery('#klawoo_response').html('');
                jQuery('#klawoo_response').show();

                params = jQuery("form[name=klawoo_subscribe]").serializeArray();
                params.push( {name: 'action', value: 'es_klawoo_subscribe' });

                jQuery.ajax({
                    method: 'POST',
                    type: 'text',
                    url: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
                    async: false,
                    data: params,
                    success: function(response) {

                        if (response != '') {
                            var parser = new DOMParser()
                            var el = parser.parseFromString(response, "text/xml");

                            jQuery('#klawoo_response').html(el.childNodes[0].firstChild.nextElementSibling.innerHTML);

                            jQuery('.es-emm-optin #name').val('');
                            jQuery('.es-emm-optin #email').val('');
                            jQuery('.es-emm-optin #es-gdpr-agree').attr('checked', false);
                            setTimeout(function() {
                                jQuery('#klawoo_response').hide('slow');
                            }, 2000);

                        } else {
                            jQuery('#klawoo_response').html('error!');
                        }
                    }
                });

            });
        });
    </script>

	<?php $subbox_code = esc_html( '<?php es_subbox($namefield = "YES", $desc = "", $group = "Public"); ?>' ); ?>

	<div class="feature-section col two-col">
		<div class="col">
			<h3><?php echo __( 'Description', 'email-subscribers' ); ?></h3>
			<p class="es_summary">
				<?php echo __( 'Email Subscribers is a complete newsletter plugin which lets you collect leads, send automated new blog post notification emails, create & send newsletters and manage all this in one single place.', 'email-subscribers' ); ?>
			</p>
			<h3><?php echo __( 'Feature Overview', 'email-subscribers' ); ?></h3>
			<ul class="es_feature_list">
				<li class="es_feature">
					<?php echo __( 'Collect customer emails by adding a subscription box (Widget/Shortcode/PHP Code).', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Configure double Opt-In and Single Opt-In facility for subscribers.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Send automatic welcome email to subscribers.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Send new post notification emails to subscribers when new posts are published on your website.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Schedule email (Cron job) or send them manually.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Send email notification to admin when a new user signs up.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Automatically add Unsubscribe link in the email.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Easily migrate subscribers from another app using Import & Export.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Use HTML editor to create newsletters and post notifications.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Send newsletters to different groups.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Get detailed sent email reports.', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Control user access (User Roles and Capabilities).', 'email-subscribers' ); ?>
				</li>
				<li class="es_feature">
					<?php echo __( 'Supports localization and internationalization.', 'email-subscribers' ); ?>
				</li>
			</ul>
		</div>

		<div class="col last-feature">
			<div class="es-form-setup">
				<h3><?php echo __( 'Add Subscribe form', 'email-subscribers' ); ?></h3>
				<p class="es_faq" style="margin-left: 0em!important;">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-add-subscription-box-to-website/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to Add Subscription box to website?', 'email-subscribers' ) . '</a>' ); ?>
				</p>
				<p style="line-height: 1.7em;font-size: 0.8em;margin-left: 0em!important;">
					<?php echo sprintf(__( 'Use any of the following 3 methods :<br>
								a) Shortcode in any page/post : <strong>[email-subscribers namefield="YES" desc="" group="Public"]</strong> <i>Or</i><br>
								b) Go to Appearance -> Widgets. Click on widget Email subscribers and drag it to the sidebar on the right <i>Or</i><br>
								c) Copy and past this php code to your desired template location : <strong>%s</strong>', 'email-subscribers' ), esc_html( '<?php es_subbox($namefield = "YES", $desc = "", $group = "Public"); ?>' ) ); ?>
				</p>
				<h4> <?php echo __( 'Additional form settings', 'email-subscribers' ); ?></h4>
				<ul class="es_faq_list">
					<li class="es_faq">
						<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-redirect-subscribers-to-a-new-page-url-after-successful-sign-up/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to Redirect Subscribers to a new page/url after successful sign up?', 'email-subscribers' ) . '</a>' ); ?>
					</li>
					<li class="es_faq">
						<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-add-captcha-in-subscribe-form-of-email-subscribers/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to add captcha in Subscribe form of Email Subscribers?', 'email-subscribers' ) . '</a>' ); ?>
					</li>
				</ul>
			</div>
			<br />
			<div class="es-setting">
				<h3><?php echo __( 'General Plugin Configuration', 'email-subscribers' ); ?></h3>
				<ul class="es_faq_list">
					<li class="es_faq">
						<?php echo sprintf(__( 'Modify %s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-general-plugin-settings/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'default text, email contents', 'email-subscribers' ) . '</a>' . __( ' (like Confirmation, Welcome, Admin emails), Cron Settings and Assign User Roles', 'email-subscribers' ) ); ?>
					</li>
					<li class="es_faq">
						<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-does-sync-work/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How does Sync work?', 'email-subscribers' ) . '</a>' ); ?>
					</li>
					<li class="es_faq">
						<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-import-or-export-email-addresses/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to Import or Export Email Addresses?', 'email-subscribers' ) . '</a>' ); ?>
					</li>
					<li class="es_faq">
						<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-add-update-existing-subscribers-group/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to Add/Update Existing Subscribers Group & Status?', 'email-subscribers' ) . '</a>' ); ?>
					</li>
					<li class="es_faq">
						<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-change-update-translate-any-texts-from-email-subscribers/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to change/update/translate any texts from the plugin?', 'email-subscribers' ) . '</a>' ); ?>
					</li>
					<li class="es_faq">
						<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-add-unsubscribe-link-in-emails/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to add Unsubscribe link in emails?', 'email-subscribers' ) . '</a>' ); ?>
					</li>
					<li class="es_faq">
						<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-check-sent-emails/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to check sent emails?', 'email-subscribers' ) . '</a>' ); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<hr />
	<div class="feature-section col three-col">
		<div class="col-1">
			<h3><?php echo __( 'Newsletters', 'email-subscribers' ); ?></h3>
			<ul class="es_faq_list">
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-create-and-send-newsletter-emails/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'Create and Send Newsletter Emails', 'email-subscribers' ) . '</a>' ); ?>
				</li>
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-what-are-the-available-keywords-in-the-newsletters/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'Keywords in the Newsletters', 'email-subscribers' ) . '</a>' ); ?>
				</li>
			</ul>
			<br><br><br>
			<h3><?php echo __( 'Post Notifications', 'email-subscribers' ); ?></h3>
			<ul class="es_faq_list">
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-create-and-send-post-notification-emails-when-new-posts-are-published/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'Create and Send Post Notification Emails when new posts are published', 'email-subscribers' ) . '</a>' ); ?>
				</li>
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-what-are-the-available-keywords-in-the-post-notifications/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'Keywords in the Post Notifications', 'email-subscribers' ) . '</a>' ); ?>
				</li>
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-send-a-sample-new-post-notification-email-to-testgroup-myself/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'Send a test post notification email to myself/testgroup', 'email-subscribers' ) . '</a>' ); ?>
				</li>
			</ul>
		</div>
		<div class="col-2">
			<h3><?php echo __( 'Cron Job Setup', 'email-subscribers' ); ?></h3>
			<ul class="es_faq_list">
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-schedule-cron-emails/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'What is Cron and how to Schedule Cron Emails?', 'email-subscribers' ) . '</a>' ); ?>
				</li>
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-schedule-cron-emails-in-cpanel/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'Schedule Cron Emails in cPanel', 'email-subscribers' ) . '</a>' ); ?>
				</li>
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-schedule-cron-emails-in-parallels-plesk/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'Schedule Cron Emails in Parallels Plesk', 'email-subscribers' ) . '</a>' ); ?>
				</li>
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-what-to-do-if-hosting-doesnt-support-cron-jobs/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'Hosting doesn???t support Cron Jobs?', 'email-subscribers' ) . '</a>' ); ?>
				</li>
			</ul>
			<h3><?php echo __( 'Troubleshooting Steps', 'email-subscribers' ); ?></h3>
			<ul class="es_faq_list">
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-subscribers-are-not-receiving-emails/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'Subscribers are not receiving Emails?', 'email-subscribers' ) . '</a>' ); ?>
				</li>
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-css-help/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'CSS Help', 'email-subscribers' ) . '</a>' ); ?>
				</li>
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-faq/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'FAQ\'s', 'email-subscribers' ) . '</a>' ); ?>
				</li>
			</ul>
		</div>
		<div class="col-3 last-feature">
			<h3><?php echo __( '[GDPR] Email Subscribers', 'email-subscribers' ); ?></h3>
			<ul class="es_faq_list">
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-gdpr-how-to-enable-consent-checkbox-in-the-subscription-form/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to enable consent checkbox in the subscribe form?', 'email-subscribers' ) . '</a>' ); ?>
				</li>
				<li class="es_faq">
					<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-gdpr-what-data-email-subscribers-stores-on-your-end/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'What data Email Subscribers stores on your end?', 'email-subscribers' ) . '</a>' ); ?>
				</li>
			</ul>
			<?php
				$active_plugins = (array) get_option('active_plugins', array());
				if (is_multisite()) {
					$active_plugins = array_merge($active_plugins, get_site_option('active_sitewide_plugins', array()));
				}

				if (( in_array('email-subscribers-advanced-form/email-subscribers-advanced-form.php', $active_plugins) || array_key_exists('email-subscribers-advanced-form/email-subscribers-advanced-form.php', $active_plugins) )) {
					?>
					<br><br><br>
					<h3><?php echo __( '[GDPR] Email Subscribers - Group Selector', 'email-subscribers' ); ?></h3>
					<ul class="es_faq_list">
						<li class="es_faq">
							<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/esaf-gdpr-how-to-enable-consent-checkbox-in-the-subscription-form/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'How to enable consent checkbox in the subscribe form?', 'email-subscribers' ) . '</a>' ); ?>
						</li>
						<li class="es_faq">
							<?php echo sprintf(__( '%s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/esaf-gdpr-what-data-email-subscribers-group-selector-stores-on-your-end/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'What data Email Subscribers - Group Selector stores on your end?', 'email-subscribers' ) . '</a>' ); ?>
						</li>
					</ul>
					<?php
				}
			?>
		</div>
	</div>
	<hr />
	<h2><?php echo __( 'Want to do more? Here\'s how..', 'email-subscribers' ); ?></h2>
	<div class="feature-section col three-col">
		<div class="col-1">
			<h3 style="text-align:left;"><?php echo __( 'Allow Subscribers to get subscribed to any group', 'email-subscribers' ); ?></h3>
			<div>
				<img class="es-esaf-integration" alt="Group Selector" src="<?php echo ES_URL; ?>images/es-esaf-integration.png" />
			</div>
			<p class="es-integration-guide">
				<?php echo __( 'Using our <b>free</b> ', 'email-subscribers' ); ?>
				<a target="_blank" href="https://wordpress.org/plugins/email-subscribers-advanced-form/"><?php echo __( 'Group Selector', 'email-subscribers' ); ?></a>
				<?php echo __( 'plugin, you can extend Email Subscribers Form functionality by providing an grouping option right next to the form.', 'email-subscribers' ); ?>
			</p>
			<p class="es-integration-guide">
				<?php echo __( 'The user can then subscribe to whichever group most appeals to them.', 'email-subscribers' ); ?>
			</p>
			<p class="es-integration-guide">
				<?php echo __( 'For example: Subscribe either to Updates or to Offers.', 'email-subscribers' ); ?>
			</p>
		</div>
		<div class="col-2">
			<h3 style="text-align:left;"><?php echo __( 'Show your subscribe form inside attractive popups', 'email-subscribers' ); ?></h3>
			<div>
				<img class="es-ig-integration" alt="Icegram" src="<?php echo ES_URL; ?>images/es-ig-integration.png" />
			</div>
			<p class="es-integration-guide">
				<?php echo __( 'Don\'t limit your subscriber form to a widget. Embed it within popups, hello bars, slide-ins, sidebars, full screen popups etc.', 'email-subscribers' ); ?>
			</p>
			<p class="es-integration-guide">
				<?php echo __( 'Using Email Subscribers you can achieve this easily with our <b>free</b> plugin ', 'email-subscribers' ); ?>
				<a target="_blank" href="https://wordpress.org/plugins/icegram/"><?php echo __( 'Icegram', 'email-subscribers' ); ?></a>
			</p>
			<p class="es-integration-guide">
				<?php echo __( 'Icegram\'s beautiful designs instantly capture user attention and help increase sign-ups to your WordPress website.', 'email-subscribers' ); ?>
			</p>
			<p class="es_faq es-integration-guide">
				<?php echo sprintf(__( 'How to %s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-show-subscribe-form-inside-a-popup/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'show subscribe form inside a popup', 'email-subscribers' ) . '</a>' ); ?>
			</p>
		</div>
		<div class="col-3 last-feature">
			<h3 style="text-align:left;"><?php echo __( 'Get beautiful and elegant form styles', 'email-subscribers' ); ?></h3>

			<div>
				<img class="es-rm-integration" alt="Rainmaker" src="<?php echo ES_URL; ?>images/es-rm-integration.png" />
			</div>
			<p class="es-integration-guide">
				<?php echo __( 'Email subscribers easily integrates with another <b>free</b> plugin ', 'email-subscribers' ); ?>
				<a target="_blank" href="https://wordpress.org/plugins/icegram-rainmaker/"><?php echo __( 'Rainmaker', 'email-subscribers' ); ?></a>
			</p>
			<p class="es-integration-guide">
				<?php echo __( 'Rainmaker extends the core features of Email Subscribers and provides elegant form styles.', 'email-subscribers' ); ?>
			</p>
			<p>
				<?php echo __( 'These styles are well designed and beautify your subscription form making it more appealing.', 'email-subscribers' ); ?>
			</p>
			<p class="es_faq es-integration-guide">
				<?php echo sprintf(__( 'How to %s', 'email-subscribers' ), '<a href="https://www.icegram.com/documentation/es-how-to-use-rainmakers-form-in-email-subscribers/?utm_source=es&utm_medium=in_app&utm_campaign=view_docs_help_page" target="_blank">' . __( 'add Rainmaker???s form in Email Subscribers', 'email-subscribers' ) . '</a>' ); ?>
			</p>
		</div>
	</div>
</div>