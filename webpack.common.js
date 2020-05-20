const outputPath = 'public/assets'
const path = require('path')
const WebpackAssetsManifest = require('webpack-assets-manifest')
const webpack = require('webpack')
const {isProduction} = require('webpack-mode')

const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const CSSLoader = () => {
    const postCSSPlugins = [require('css-mqpacker')()]
    if (isProduction) {
        postCSSPlugins.push(require('autoprefixer')())
        postCSSPlugins.push(require('cssnano')())
    }
    return {
        test: /\.s?css$/,
        use: [
            {
                loader: MiniCssExtractPlugin.loader,
                options: {
                    filename: '[name].[hash].css',
                    chunkFilename: '[id].[hash].css',
                    hmr: !isProduction
                }
            },
            'css-loader',
            {loader: 'postcss-loader', options: { plugins: postCSSPlugins } },
            'sass-loader',
        ]
    }
}

module.exports = {
    entry: {
        main: ['./assets/js/main.js', './assets/scss/main.scss']
    },
    output: {
        path: path.resolve(__dirname, outputPath),
        filename: '[name].bundle.js',
    },
    plugins: [
        new WebpackAssetsManifest({
            writeToDisk: true,
            publicPath: true
        }),
        new MiniCssExtractPlugin({
            filename: '[name].css',
            chunkFilename: '[id].css'
        }),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery',
        })
    ],
    module: {
        rules: [
            {
                test: /\.(jpe?g|png|gif|svg)$/i,
                use: [
                    {
                        loader: 'url-loader',
                        options: {
                            name: '[name].[hash:10].[ext]',
                            limit: 8192
                        }
                    }
                ]
            },
            {
                test: /\.(woff2?|eot|ttf|otf)(\?.*)?$/,
                loader: 'file-loader'
            },
            CSSLoader(),
        ]
    },
};
