module.exports = {
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1.5rem',
        sm: '1rem',
      }
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1152px',
    },
    fontFamily: {
      'body': 'Inter',
      'heading': '"TT Firs Neue"',
    },
    extend: {
      colors: {
        'black': '#141414',
        'grey': '#F0F0F0',
        'yellow': '#FFEB33',
        'purple': '#7B61FF',
        'green': '#A3ECBC',
      },
      fontSize: {
        'xs': ['0.75rem', '1.5'],
        'sm': ['0.875rem', '1.5'],
        'base': ['1rem', '1.5'],
        '2xl': ['1.5rem', '1.5'],
        '4xl': ['2.25rem', '1.3'],
        '6xl': ['3.5rem', '1.3'],
        '7xl': ['5rem', '1.3'],
        '8.5xl': ['7.5rem', '1.1'],
        '10xl': ['11.25rem', '1.1']
      }
    },
  },
  variants: {
    extend: {},
  },
  purge: {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      '*.php',
    ],
  },
  plugins: [],
}