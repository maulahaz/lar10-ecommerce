/** @type {import('tailwindcss').Config} */
module.exports = {
// export default {
  content: [
    "./index.html', './src/**/*.{js,ts,jsx,tsx}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "node_modules/preline/dist/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("preline/plugin"),
  ],
  darkMode: 'class',
}

