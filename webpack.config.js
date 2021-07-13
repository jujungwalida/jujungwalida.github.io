const path = require('path');
const { env } = require('process');

module.exports = {
  mode: process.env.NODE_ENV === 'development' ? process.env.NODE_ENV : 'production',
  entry: './src/js/script.js',
  output: {
    filename: 'script.js',
    path: path.resolve(__dirname, 'assets/js'),
  },
};