const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Roboto','Lato', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'primary-blue': '#0079AB',
        'secondary-blue': '#44A3CE',
        'primary-red': '#EA5B24',
        'secondary-red': '#C9293E',
      },
      height: {
        huge: '200vh',
      },
      boxShadow: {
        'menu': 'inset 0 -4px 4px 0 rgba(0, 0, 0, 0.06)',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
