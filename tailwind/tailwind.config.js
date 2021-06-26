module.exports = {
  purge: [
    '../*.html',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    container: {
      center: true
    },
    fontFamily: {
      'sans': ['Montserrat', 'ui-sans-serif', 'system-ui'],
      'body': ['Montserrat', 'ui-sans-serif', 'system-ui'],
      'display': ['Quattrocento Sans'],
    },
    colors: {
      red: {
        light:'#EB1F00',
        DEFAULT: '#8E1400',
        dark: '#6B0E00'
      },
      blue: {
        light: '#34EBFC',
        DEFAULT: '#03D8EA',
        dark: '#039FAD'
      },
      green: {
        DEFAULT: '#508991',
        dark: '#284548',
      },
      black: {
        DEFAULT: '#111816'
      },
      yellow: {
        light: '#FFD738',
        DEFAULT: '#F5C300',
        dark: '#B89300'
      },
      white: {
        DEFAULT: '#F5F5F5'
      },
      gray: {
      	DEFAULT: '#7A7A7A'
      },
    },
    extend: {},
  },
  variants: {
    extend: {
      fontWeight: ['hover', 'focus'],
      translate: ['hover', 'focus'],
      verticalAlign: ['hover', 'focus'],
      transform: ['hover', 'focus'],
      inset: ['hover', 'focus'],
      transitionProperty: ['group-hover', 'group-focus', 'focus', 'hover'],
      transitionDelay: ['hover', 'focus', 'group-hover', 'group-focus'],
      transitionTimingFunction: ['hover', 'focus', 'group-hover','group-focus'],
      height: ['hover', 'focus', 'group-hover', 'group-focus'],
      backgroundOpacity: ['group-focus']
    },
  },
  plugins: [],
}
