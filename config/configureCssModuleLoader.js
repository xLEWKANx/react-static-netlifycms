const autoprefixer = require('autoprefixer')
const MiniCssExtractPlugin = require("mini-css-extract-plugin")
const appPath = require('./appPath')

module.exports = function configureCssModuleLoader(config, args) {
    let loaders = [];
    if (args.stage === 'dev') loaders.push('style-loader');
    loaders.push({
        loader: 'css-loader',
        options: {
            importLoaders: 1,
            modules: true,
            sourceMap: true,
            minimize: args.stage === 'prod',
            camelCase: 'dashes',
        }
    });
    loaders.push({
        loader: 'postcss-loader',
        options: {
            // Necessary for external CSS imports to work
            // https://github.com/facebookincubator/create-react-app/issues/2677
            ident: 'postcss',
            plugins: () => [
                require('postcss-flexbugs-fixes'),
                require('postcss-import')({
                    root: appPath,
                }),
                autoprefixer({
                    browsers: [
                        '>1%',
                        'last 4 versions',
                        'Firefox ESR',
                        'not ie < 9', // React doesn't support IE8 anyway
                    ],
                    flexbox: 'no-2009',
                }),
            ],
        },
    })
    if (args.stage !== 'dev') {
        loaders = [MiniCssExtractPlugin.loader].concat(loaders) // seeing
        config.plugins.push(new MiniCssExtractPlugin({
            // Options similar to the same options in webpackOptions.output
            // both options are optional
            filename: "[name].css",
            chunkFilename: "[id].css"
        }))
    }
    return {
        test: /\.css$/,
        use: loaders
    }
}