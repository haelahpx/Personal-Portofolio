/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/welcome.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class', 
  theme: {
    extend: {
      keyframes: {
        bounceUpDown: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-10px)' },
        },
        typing: {
          'from': { width: '0%' },
          'to': { width: '100%' }
        },
        blink: {
          '0%, 100%': { borderColor: 'transparent' },
          '50%': { borderColor: 'black' }
        }
      },
      animation: {
        bounceUpDown: 'bounceUpDown 2s ease-in-out infinite',
        typing: 'typing 3.5s steps(40, end) infinite',
        blink: 'blink 1s step-end infinite',
      },
    },
  },
  plugins: [
    require('flowbite/plugin'), 
  ],
}
