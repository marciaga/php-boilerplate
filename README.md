# PHP framework-less application boilerplate with modern front-end infrastructure

### Dev Environment
For an easy PHP dev experience, use [Homestead](https://laravel.com/docs/5.3/homestead), a pre-provisioned Vagrant box.

Once that's ready, `ssh` into Homestead, `cd` into the project root and run:

`$ composer install`

You'll also need to install the npm modules, which is faster to do outside of Homestead. Run:

`$ npm install`

From now on, assume any commands should be run outside of Homestead unless otherwise noted.


After the node modules have finished installing, run:

`$ npm run dev`

which will run Webpack and PostCSS, building the client assets. The command also sets up a watcher for each process so any changes made to the JS or CSS files are automatically recompiled.

**Note**: for security reasons, credentials are not included in this readme. Please check the .env.example file for examples of environment variables the application expects, create a `.env` file in the project root, and update the values accordingly.

### Production Build
To build the assets for production, run:

`$ npm run build:production`

The assets are built to `public/css` and `public/js`.

### Tests and JavaScript Style
To lint your JavaScript, run

`$ npm run lint`

The `.eslintrc` contains the enforced rules.

For PHP tests, we use [Codeception](http://codeception.com/) and for JavaScript tests, we use [Ava](https://github.com/avajs/ava).

These can be run in a single command from within Homestead, using:

`$ npm run test:all`

To run just the PHP tests, from within Homestead, use:

`$ npm run test:php`

To run just the JavaScript tests, use:

`$ npm run test:js`
