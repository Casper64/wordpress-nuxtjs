# wordpress-nuxtjs
Wordpress template for a headless cms with Nuxtjs 

# How to use
Acces the wordpress admin panel at `[root]/wordpress/wp-admin`

# Features
- nuxtjs
- sass/scss
- typescript
- axios

# Use in production

Please note this is a boilerplate, it contains some defaults you might want to pay attention to:

- CORS - You should set this to work only on your website url when in production or staging, work locally on your machine for dev.

## Installation Steps

0. Run npm install in the cloned directory

1. Copy the contents of the /wordpress folder in your wordpress installation (make sure to edit the database and salts configuration in wp-config.php)

2. Set your active theme to Headless-nuxt

3. Set permalinks in wordpress to anything but the default (I suggest `/%postname%/`)

4. Make sure you set your CORS correctly to point to your website when in production/staging

5. Make sure assets/config.ts reflects your configuration and endpoints for the WP rest api and wordpress url

6. Replace the url `wordpress/wp-content/themes/headless-nuxt/index.php` to your homeurl (default is `localhost:3000`)

# Tips
- Install Advanced Custom Fields plugin and [acf-to-rest-api](https://github.com/airesvsg/acf-to-rest-api)
