/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
  theme: {
    extend: {
      transitionDuration: {
        '1100': '3000ms',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
],
}

