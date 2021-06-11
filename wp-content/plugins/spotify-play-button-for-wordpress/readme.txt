=== Sp*tify Play Button for WordPress ===
Contributors: jonkastonka
Donate link: https://www.paypal.com/donate/?hosted_button_id=86UYSXNUA2LHY
Tags: spotify, playlist, Spotify Play Button, Spotify Play Button for wordpress, embed, embed Spotify
Requires at least: 4.0
Tested up to: 5.7
Stable tag: 2.02

== Description ==

**Now with Gutenberg block!**

Sp\*tify Play Button lets you easily add a Spotify Play Button for instant play of album, playlist or song by adding the Sp*tify Play Button for WordPress block or adding a shortcode:

Album example: `[spotifyplaybutton play="spotify:album:7JggdVIipgSShK1uk7N1hP"]`

Playlist example: `[spotifyplaybutton play="spotify:user:jonk:playlist:65ujzBs6WTdWDIr17dOXUm"]`

Song example: `[spotifyplaybutton play="spotify:track:2qntSA2cwerjTduHPuKnW5"]`

You don't have to remember these shortcodes since there is a button in the admin page that let's you add a Sp\*tify Play Button directly if you are using the classic editor. If you are using Gutenberg, the block is recommended.

Simply right click on album, playlist or song in Spotify and click "Share" and then click "URI". Either paste that together with the shortcode above or just use the admin button and paste the URI there.

You can set the style for your Sp\*tify Play Buttons on the "Sp\*tify Play Button Settings" page under the "Settings" menu (http://YOURBLOG/wp-admin/options-general.php?page=spotifyplaybutton_settings).

You can also add attributes to customize a single Sp\*tify Play Button:

1. view

2. size

3. sizetype

4. link

All of these will override the settings in "Sp\*tify Play Button Settings" for the Sp\*tify Play Button and they are all optional.

Example: `[spotifyplaybutton play="spotify:user:jonk:playlist:65ujzBs6WTdWDIr17dOXUm" size="0" sizetype="big"]`

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the folder "sptify-play-button-for-wordpress" to the "/wp-content/plugins/" directory

2. Activate the plugin through the "Plugins" menu in WordPress

3. Go to "Sp\*tify Play Button Settings" under the "Settings" menu (http://YOURBLOG/wp-admin/options-general.php?page=spotifyplaybutton_settings) to make your default settings for your Sp\*tify Play Buttons.

4. Start adding your Sp\*tify Play Buttons!

== Frequently Asked Questions ==

None, yet.

== Screenshots ==

1. Copy the Spotify URI from the album, playlist or song you want to embed on your site
2. Add the shortcode as a Shortcode block
3. Or you can use a Paragraph block
4. It also works with the Classic editor
5. In the classic editor there's even a helpful button
6. The nice result
7. The global settings page

== Changelog ==

= 2.02 =
* Domain Path

= 2.01 =
* Settings link

= 2.0 =
* Now available as a Gutenberg block
* Removed view coverart since it has been removed from Spotify

= 1.46 =
* Min height for compact

= 1.45 =
* Height fix. Should've seen that coming ;)

= 1.44 =
* Width fix

= 1.43 =
* Theme removed by Spotify so parameter is dropped
* Updated iframe code to mirror changes by Spotify
* Changed deprecated media_buttons_context to media_buttons, so the plugin is error free in debug mode too

= 1.42 =
* Tested 5.6
* New assets

= 1.41 =
Tested 5.3.2

= 1.39 =
Damn you markdown!

= 1.38 =
Even less Spotify and more Sp\*tify

= 1.37 =
Even less Spotify and more Sp\*tify

= 1.36 =
Even less Spotify and more Sp\*tify

= 1.35 =
* The name change of the plugin is because no plugins are allowed to start with a brand name. :/
* Tested up to 5.2.3 and still works like magic. No changes to the code. :)

= 1.34 =
Typeo

= 1.33 =
* Better looking UI.
* Bugfixes
* Cleanup

= 1.3 =
Added button to TinyMCE to make it easier to add lists to pages and posts without having to remember the shortcode.

= 1.2 =
* Updated with the news specs from Spotify
* Responsive mode added
* Simplified admin page

= 1.1 =
Added link for opening the lista in Spotify, you can disable it in the settings

= 1.02 =
Cleanup

= 1.01.b =
Requires and Tested versions.

= 1.01.a =
Touch to make you know it still works fine. :)

= 1.01 =
* Getting assets right, editing readme

= 1.00 =
* I feel confident!
