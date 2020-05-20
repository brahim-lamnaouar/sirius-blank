const outputPath = 'public/assets'
const path = require('path')
const merge = require('webpack-merge');
const common = require('./webpack.common.js');

module.exports = merge(common, {
    mode: 'production',
    output: {
        path: path.resolve(__dirname, outputPath),
        filename: '[name].bundle.js',
    },
});
