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
      'lg': '1032px',
      'xl': '1441px',
    },
    extend: {
      colors: {
        'red': '#E6324B',
        'maroon': '#90222D',
        'black': '#1D1D1D',
        'grey': '#EDEDED',
        'slate':'#676767',
        'grey-80': '#EDEDEDCC',
        'orange': '#EA6109'
      },
      fontFamily: {
        'body': ['Spartan', 'sans-serif', 'Arial'],
        'circe': ['circe', 'Spartan','sans-serif', 'Arial']
      },
      fontSize: {
        'base': '0.8125rem',
        '.5xs': '.5rem',
        'xs': '.65rem',
        '2xs': '.75rem',
        'sm': '.875rem',
        '.5xl': '1.25rem',
        'xl': '1.3125rem',
        '2xl': '1rem',
        '2.5xl': '1.5rem',
        '3xl': '1.125rem',
        '4xl': '1.75rem',
        '5xl': '2.125rem',
        '7xl': '2.6875rem'
      },
      lineHeight: {
        'relaxed': '1.84',
        'relaxed-sm': '1.75'
      },
      letterSpacing: {
        'tight': '-0.02em',
        'wider': '0.04em'
      },
      height: {
        '0.25': '0.0625rem',
        '1.5': '.3125rem',
        '20': '5.375rem',
        '28': '6.875rem',
        '36': '9.375rem'
      },
      minHeight: {
        '210': '210px',
        '257': '257px',
        '274': '274px',
        '380': '380px'
      },
      width: {
        '0.25': '0.0625rem',
        '16': '4.375rem',
        '28': '7.25rem',
        '36': '9.375rem'
      },
      maxWidth: {
        '5xl':'66.25rem',
      },
      borderWidth: {
        '05': '.5px',
        '3': '3px',
        '4': '4px',
        '5': '5px',
        '6': '6px',
        '10': '10px',
        '16': '16px',
      },
      spacing: {
        '05': '.125rem',
        '1.5': '.3125rem',
        '18':'4.375rem',
        '32':'8.4375rem'
      },
      inset: {
        '1': '1px',
        '-1': '-1px',
        '-5': '-5px',
        '-10': '-10px',
        '-20': '-20px',
        '16': '16px',
        '17': '17px',
        '24': '24px',
        '56': '56px'
      },
      scale: {
        '-1': '-1'
      },
      boxShadow: {
        'brand': '0 0 24px 0 rgba(0, 0, 0, 0.33)'
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
    options: {
      safelist: [
        '/border-b-16/',
        '/border-l-16/',
        '/border-r-16/',
        '/border-b-10/',
        '/border-l-10/',
        '/border-r-10/',
      ],
    },
  },
  plugins: [],
}