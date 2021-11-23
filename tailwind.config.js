module.exports = {
  mode: "jit",
  purge: [
    "./*.php",
    "./template-parts/**/*.php",
    "./inc/**/*.php",
    "./src/main.css",
  ],
  darkMode: "class", // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
