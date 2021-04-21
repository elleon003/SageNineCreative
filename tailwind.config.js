module.exports = {
  purge: [],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    container: {
      center: true
    },
    fontFamily: {
      'sans': ['Raleway', 'ui-sans-serif', 'system-ui'],
      'body': ['Raleway', 'ui-sans-serif', 'system-ui'],
      'display': ['Storytella'],
      'logo': ['Branders']
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
      black: {
        DEFAULT: '#031926'
      },
      yellow: {
        light: '#FFD738',
        DEFAULT: '#F5C300',
        dark: '#B89300'
      },
      white: {
        DEFAULT: '#F4F3FA'
      },
      gray: {
      	DEFAULT: '#808285'
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
  plugins: [
    require('@tailwindcss/forms')
  ],
}
