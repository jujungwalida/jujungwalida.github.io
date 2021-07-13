module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'primary-blue': '#0079AB',
        'secondary-blue': '#44A3CE',
        'primary-red': '#EA5B24',
        'secondary-red': '#C9293E',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
