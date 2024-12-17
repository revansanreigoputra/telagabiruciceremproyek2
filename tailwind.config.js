/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  // darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'oxford-blue': '#0d203c',
        'mellow-alpikot': '#eac170',
        'hati': '#ae782f',
        'hejo': '#168462', 
        'oren': '`#ee5f28`', 
      },
      borderRadius: {
        'none': '0',
        'sm': '0.125rem',
        DEFAULT: '0.25rem',
        DEFAULT: '4px',
        'md': '0.375rem',
        'lg': '1.5rem',
        'full': '9999px',
        'large': '12px',
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}