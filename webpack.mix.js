const mix = require('laravel-mix');
const exec = require('child_process').exec
require('dotenv').config()

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

const glob = require('glob')
const path = require('path')

/*
 |--------------------------------------------------------------------------
 | Vendor assets
 |--------------------------------------------------------------------------
 */

function mixAssetsDir(query, cb) {
    ;(glob.sync('resources/backend/' + query) || []).forEach(f => {
        f = f.replace(/[\\\/]+/g, '/')
        cb(f, f.replace('resources/backend', 'public/backend'))
    })
}

const sassOptions = {
    precision: 5,
    includePaths: ['node_modules', 'resources/backend/assets/']
}

// plugins Core stylesheets
mixAssetsDir('scss/base/plugins/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), { sassOptions })
)

// pages Core stylesheets
mixAssetsDir('scss/base/pages/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), { sassOptions })
)

// Core stylesheets
mixAssetsDir('scss/base/core/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)scss(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), { sassOptions })
)

// script js
mixAssetsDir('js/scripts/**/*.js', (src, dest) => mix.scripts(src, dest))

/*
 |--------------------------------------------------------------------------
 | Application assets
 |--------------------------------------------------------------------------
 */

mixAssetsDir('vendors/js/**/*.js', (src, dest) => mix.scripts(src, dest))
mixAssetsDir('vendors/css/**/*.css', (src, dest) => mix.copy(src, dest))
mixAssetsDir('vendors/**/**/images', (src, dest) => mix.copy(src, dest))
mixAssetsDir('vendors/css/editors/quill/fonts/', (src, dest) => mix.copy(src, dest))
mixAssetsDir('fonts', (src, dest) => mix.copy(src, dest))
mixAssetsDir('fonts/**/**/*.css', (src, dest) => mix.copy(src, dest))
mix.copyDirectory('resources/backend/images', 'public/images')
mix.copyDirectory('resources/backend/data', 'public/data')



mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .sass('resources/scss/style.scss', 'public/front/css/app.css', [
        //
    ])
    .sass('resources/scss/custom.scss' , 'public/front/css/custom.css', [
        //
    ])
    .js('resources/backend/js/core/app-menu.js', 'public/backend/js/core')
    .js('resources/backend/js/core/app.js', 'public/backend/js/core')
    .js('resources/backend/assets/js/scripts.js', 'public/backend/js/core')
    .sass('resources/backend/scss/base/themes/dark-layout.scss', 'public/backend/css/base/themes', { sassOptions })
    .sass('resources/backend/scss/base/themes/bordered-layout.scss', 'public/backend/css/base/themes', { sassOptions })
    .sass('resources/backend/scss/base/themes/semi-dark-layout.scss', 'public/backend/css/base/themes', { sassOptions })
    .sass('resources/backend/scss/core.scss', 'public/backend/css', { sassOptions })
    .sass('resources/backend/scss/overrides.scss', 'public/backend/css', { sassOptions })
    .sass('resources/backend/scss/base/custom-rtl.scss', 'public/backend/css-rtl', { sassOptions })
    .sass('resources/backend/assets/scss/style-rtl.scss', 'public/backend/css-rtl', { sassOptions })
    .sass('resources/backend/assets/scss/style.scss', 'public/backend/css', { sassOptions })




mix.browserSync('http://127.0.0.1/')