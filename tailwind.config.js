module.exports = {
  mode: 'jit',
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      }
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
    },
    fontFamily: {
      'body': '',
      'heading': '',
    },
    extend: {
    },
  },
  variants: {
    extend: {},
  },
  purge: {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './app/*.php',
      '*.php',
    ],
  },
  plugins: [],
}