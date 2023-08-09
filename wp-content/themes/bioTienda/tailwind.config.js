/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ "./*.php", "./**/*.php", "./assets/js/custom.js", "./woocommerce/**/*.php"],
  theme: {
    fontFamily: {
      raleway: ["Raleway", "sans-serif"],
    },
    extend: {
      colors: {
        white: {
          DEFAULT: "#ffffff",
          secondary: "#D78D5B00",
        },
        gray: {
          100: "#E6E6E6",
          200: "#CFCFCF",
          300: "#999999",
          400: "#7C7C7C",
        },
        green: {
          DEFAULT: "#AAC940",
          dark: "#086175",
        },
        brown: {
          100: "#92430C87",
          200: "#8D501A",
        },
      },
    },
  },
  plugins: [],
};
