/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      extend: {
          keyframes: {
              expand: {
                  '0%': { width: '0%' },
                  '100%': { width: '100%' },
              },
          },
          animation: {
              'hr-expand': 'expand 2s ease-out forwards',
          },
      },
  },
  plugins: [],
}

