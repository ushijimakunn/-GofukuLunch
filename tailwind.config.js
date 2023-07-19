/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./pages/**/*.{js,ts,jsx,tsx}", "./components/**/*.{js,ts,jsx,tsx}"
  ],
  theme: {
    extend: {
        fontFamily: {
            raleway: ['Raleway'],
            kosugimaru: ['Kosugi Maru'],
            azeretmono: ['Azeret Mono'],
          },
    },

  },
  daisyui: {
      themes: [
        {
            mytheme: {
                "primary": "#45f777",
                "secondary": "#06a51b",
                "accent": "#baf48d",
                "neutral": "#151823",
                "base-100": "#f0eff0",
                "info": "#45baed",
                "success": "#7be0c0",
                "warning": "#f4bb57",
                "error": "#f92468",
            },
        },
      ],
  },
  plugins: [require("daisyui")],
}

