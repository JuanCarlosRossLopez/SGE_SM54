import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

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
                bounce: {
                  '0%, 100%': {
                    transform: 'translateY(-15%)',
                    animationTimingFunction: 'cubic-bezier(0.8, 1, 1.5, 2)',
                  },
                  '50%': {
                    transform: 'translateY(-5)',
                    animationTimingFunction: 'cubic-bezier(0, 0.4, 0.6, 1)',
                  },
                  '100%': {
                    transform: 'translateY(0)',
                    animationTimingFunction: 'cubic-bezier(0, 0, 0.2, 1)',
                  },
                },
              },
              animation: {
                customBounce: 'bounce .48s ease-in-out',
              },
        fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

  plugins: [forms],
};
