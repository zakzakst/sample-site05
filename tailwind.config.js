module.exports = {
  content: [
    './dist/**/*.{html,js}',
    './node_modules/flowbite/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#f00',
      },
      backgroundImage: {
        'primary-gradient': 'linear-gradient(to right, #f00, #fff)',
      },
      borderRadius: {
        DEFAULT: '8px',
        // 'lg': '24px',
      },
      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'rotate(-3deg)' },
          '50%': { transform: 'rotate(3deg)' },
        },
      },
      animation: {
        wiggle: 'wiggle 1s ease-in-out infinite',
      },
    },
  },
  plugins: [
    // require('@tailwindcss/forms'),
    // require('flowbite/plugin'),
  ],
}