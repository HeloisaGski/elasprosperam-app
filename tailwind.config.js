/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#D2AD53',   // Dourado
        secondary: '#BFB8AF', // Cinza Pastel
        tertiary: '#DFE1DC',  // Verde Claro
        warmbg: '#FDFDFC',    // Branco Quente
      },
      fontFamily: {
        serif: ['Times New Roman MT', 'Georgia', 'serif'],
        sans: ['Solomon', 'Inter', 'sans-serif'],
      }
    },
  },
  plugins: [],
}