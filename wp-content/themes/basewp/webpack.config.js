const path = require('path')
const ESLintPlugin = require('eslint-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = {
    mode: process.env.NODE_ENV,
    devtool: 'cheap-module-source-map',
    entry: {
        main: './src/js/main.js'
    },
    watchOptions: {
        aggregateTimeout: 200,
        poll: 1000,
        followSymlinks: true,
        stdin: true,
        ignored: [path.resolve(__dirname, 'node_modules')]
    },
    optimization: {
        removeAvailableModules: false,
        removeEmptyChunks: false,
        splitChunks: false
    },
    output: {
        path: path.join(__dirname, 'assets'),
        filename: '[name].min.js',
        asyncChunks: true,
        clean: true
    },
    resolve: {
        alias: {
            libs: path.resolve(__dirname, 'src/js/libs'),
            modules: path.resolve(__dirname, 'modules')
        },
        extensions: ['.js', '.jsx', '.scss', '.css']
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader'
                }
            },
            {
                test: /\.s?css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader: 'postcss-loader',
                        options: {
                            sourceMap: true
                        }
                    }
                ]
            }
        ]
    },
    plugins: [
        new ESLintPlugin({
            extensions: ['js', 'jsx'],
            exclude: [
                '/node_modules/',
                '/bower_components/'
            ],
            fix: true
        }),
        new MiniCssExtractPlugin({
            linkType: false,
            filename: '[name].min.css'
        })
    ]
}
