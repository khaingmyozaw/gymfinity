/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'pre-dark-green': '#485c5b',
        'pre-extra-green': '#293533',
        'pre-yellow': '#e9fd9e',
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
  daisyui: {
    prefix:"zeembi",
  }
}

