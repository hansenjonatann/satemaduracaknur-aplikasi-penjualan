/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#FFB800",
        secondary: "#FFFFFF",
        third: "#10B602",
      },
    },
  },
  plugins: [],
};
