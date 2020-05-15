const outputPath = 'public/assets'
const path = require('path')
const WebpackAssetsManifest = require('webpack-assets-manifest')
const {isProduction} = require('webpack-mode')

console.log(isProduction)

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
        publicPath: isProduction ? './' : 'http://localhost:3000',
        filename: isProduction ? '[name].js' : '[name].js',
    },

    devServer: {
        port: 3000,
        host: '0.0.0.0',
        hot: true,
        stats: 'minimal',
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, PATCH, OPTIONS',
            'Access-Control-Allow-Headers': 'X-Requested-With, content-type, Authorization',
        }
    },

    stats: 'minimal',

    externals: {
        'jquery': 'jQuery'
    },


    module: {
        rules: [
            {
                test: /\.(jpe?g|png|gif|svg|ttf|woff|woff2)$/i,
                use: [
                    'file-loader'
                ]
            },
           CSSLoader(),
        ]
    },

    plugins: [
        new WebpackAssetsManifest({
            writeToDisk: true,
            publicPath: true
        }),
        new MiniCssExtractPlugin({
            filename: '[name].css',
            chunkFilename: '[id].css'
        })
    ]

}