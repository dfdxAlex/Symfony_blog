// webpack.config.js
const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', [
        './assets/js/app.js',
        './assets/css/app.css',
    ])
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enablePostCssLoader((options) => {
        options.postcssOptions = {
            // Подключаем Tailwind CSS
            plugins: [
                require('tailwindcss'),
                require('autoprefixer'),
            ],
        };
    })
;

module.exports = Encore.getWebpackConfig();
