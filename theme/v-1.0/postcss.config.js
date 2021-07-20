const cssnano = require('cssnano');

module.exports = {
    plugins: [
        require('postcss-import'),
        require('tailwindcss'),
        require('postcss-nested'),
        require('postcss-custom-properties'),
        process.env.NODE_ENV === 'development' ? null : cssnano({ preset: 'default' }),
    ],
};