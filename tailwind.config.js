/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './src/**/*.{js,css}',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1E2A38',
        secondary: '#4C6A92',
        bg: '#ECEFF2',
        footer: '#18202A',
      },
      fontFamily: {
        sans: ['system-ui', 'sans-serif'],
      },
    },
  },

}
