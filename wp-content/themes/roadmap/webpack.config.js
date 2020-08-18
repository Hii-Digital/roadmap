const webpack = require('webpack');
const path = require('path');

module.exports = {
     mode: 'development',
     entry: [
          './src/index.js'
     ],
     devtool: "source-map", // any "source-map"-like devtool is possible
     devServer: {
          contentBase: path.join(__dirname, 'dist'),
          compress: true,
          port: 9000
     },
     module: {
          rules: [
               {
                    test: /\.js$/,
                    exclude: /(node_modules)/,
                    use: {
                         loader: 'babel-loader',
                         options: {
                              presets: ['env']
                         }
                    }
               },
               {
                    test: /\.(png|jpe?g|gif)$/,
                    use: [
                         {
                              loader: 'file-loader',
                              options: {
                                   outputPath: 'images',
                                   publicPath: 'wp-content/themes/orbeck/dist/images',
                              },
                         },
                    ],
               },
               {
                    test: /\.(s*)css$/,
                    use: [{
                         loader: "style-loader", options: {
                              sourceMap: true
                         }
                    }, {
                         loader: "css-loader", options: {
                              sourceMap: true
                         }
                    }, {
                         loader: "sass-loader", options: {
                              sourceMap: true
                         }
                    }]
               }
          ]
     },
     watch: true,
     output: {
          path: path.resolve(__dirname, 'dist'),
          filename: 'bundle.js'
     },
};