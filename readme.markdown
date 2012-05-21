Easy Digital Downloads Starter Theme
============================================================

This basic starter theme is designed to be the starting point for creating your
own [Easy Digital Downloads](http://easydigitaldownloads.com) specific themes in WordPress.

All of the basic template files are included, as well as the special template files
for showing download/product information from EDD.

Build your own awesome digital store temes
-------------------------------------------------------

Easy Digital Downloads makes it exceptionally easy to setup a digital store, and this theme
is designed to make it really easy to create your own themes, built just for EDD.

Child theme ready
-------------------------------------------------------

The EDD Starter theme is ready for child themes, and I highly recommend you set yours up as a child theme.

To setup a child theme, follow these steps:
* place the `edd-starter` theme folder in your `wp-content/themes/` directory
* create a new folder named anything, such as "your-edd-theme", and place it also in `wp-content/themes/`
* create a file in your new theme folder called `style.css` and place the following contents inside of it:

```css
/*
Theme Name:     Your Theme Name
Description:    Description of your theme
Author:         Your name
Author URI:		 http://yoursite.com
Template:       edd-starter
*/

@import url("../edd-starter/style.css"); 
```