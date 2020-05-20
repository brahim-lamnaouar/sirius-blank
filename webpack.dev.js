const outputPath = 'public/assets'
const path = require('path')
const merge = require('webpack-merge');
const common = require('./webpack.common.js');


module.exports = merge(common, {
    output: {
        path: path.resolve(__dirname, outputPath),
        publicPath: 'http://localhost:3000/',
        filename: '[name].js',
    },
    mode: 'development',
    devtool: 'inline-source-map',
    devServer: {
        port: 3000,
        host: '0.0.0.0',
        hot: true,
        publicPath: 'http://localhost:3000/',
        stats: 'minimal',
        //watchContentBase: true,
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, PATCH, OPTIONS',
            'Access-Control-Allow-Headers': 'X-Requested-With, content-type, Authorization',
        }
    },
});
