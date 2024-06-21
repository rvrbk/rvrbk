/** @type {import('tailwindcss').Config} */
export default {
  content: ['./src/**/*.{astro,js,jsx,ts,tsx}'],
  theme: {
    extend: {
      fontFamily: {
        'play': ['"Play"'],
        'roboto': ['"Roboto"']
      },
      colors: {
        customGreen: "#02fa44",
        customGreenHover: "#a6f5bb",
        armyGreen: "#26402d",
        darkGray: "#121212"
      }
    },
  },
  plugins: [],
}

