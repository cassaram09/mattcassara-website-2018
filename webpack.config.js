const path = require('path');

module.exports = {
  entry: './wp-content/themes/master/js/index.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, './wp-content/themes/master/js/')
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  }
};

