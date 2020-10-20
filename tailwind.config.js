module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
    defaultLineHeights: true,
    standardFontWeights: true
  },
  purge: {
    enabled: true, 
    content: [
      './*.php',
      './inc/*.php',
      './js/*.js',
      './template-parts/*.php'
    ]
  },
  theme: {
    extend: {
      opacity: {
        '60': '0.6',
        '70': '0.7',
        '90': '0.9',
     }
    },
  },
  variants: {
    textColor: ['responsive', 'hover', 'focus', 'visited'],
  },
  plugins: [],
}
