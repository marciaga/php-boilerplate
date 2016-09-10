'use strict';
const webpack = require('webpack');
const path = require('path');
const CleanWebpackPlugin = require('clean-webpack-plugin');

var plugins = [
    new webpack.NoErrorsPlugin(),
    new CleanWebpackPlugin(['public'], {
        'exclude': ['index.php'],
        'root': process.cwd()
    }),
    new webpack.optimize.UglifyJsPlugin({
        compress: {
            warnings: false
        }
    }),
    new webpack.DefinePlugin({
        'process.env': {
          'NODE_ENV': JSON.stringify('production')
        }
    })
];

module.exports = {
    entry: {
        bundle: path.join(__dirname, '/client/javascript/index.js')
    },
    output: {
        path: path.join(__dirname, 'public/js/'),
        filename: '[name].js'
    },
    module: {
        loaders: [
            {
                test:    /\.js?$/,
                exclude: /node_modules/,
                loaders: ['babel']
            }
        ]
    },
    plugins: plugins
};
