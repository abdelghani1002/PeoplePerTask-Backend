/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,php,js}"],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        'custom-green-': '#05c50be4',
        'custom-green': '#00FF0A',
        'custom-green+': '#00F00F',
        'custom-green++': '#05C50D',
      },
    },
  },
  plugins: [],
}
