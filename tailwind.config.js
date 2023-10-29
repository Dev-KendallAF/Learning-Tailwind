/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class', 
  theme: {
    
    extend: {

      colors:
      {
        primary: 'var(--color-primary)',
        secondary: 'var(--color-secondary)'
      },
    },
  },
  plugins: [],
}
