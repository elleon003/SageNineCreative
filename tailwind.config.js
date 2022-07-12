/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["src/*.html", "*.php"],
  theme: {
    fontFamily: {
      'sans': ['"Quattrocento Sans"', 'ui-sans-serif', 'system-ui', ],
      'display': ['Montserrat', 'ui-sans-serif', 'system-ui']
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem'
      },
    },
    extend: {
      colors: {
        'primary': {
          light: '#BD1900',
          DEFAULT: '#8E1400',
          dark: '#7D1100'
        },
        'secondary': {
          light: '#5E9EA6',
          DEFAULT: '#508991',
          dark: '#46787F'
        },
        'base': '#111816',
        'light': '#F5F5F5'
      }
    },
  },
  plugins: [],
}
