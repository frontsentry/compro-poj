module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontWeight: {
      'extra-bold': 1000,
      'bold': 700,
      'semi-bold': 600,
      'medium': 500,
      '400': 400,
    },
    
    extend: {
      padding: {
        '58' : '15rem',
      },
      colors: {
        'navbar-green': '#015000',
        'navbar-child-green': '#1B911A',
        'title-green': '#018400',
        'light-green': '#8BDF03',
        'footer-black': '#333333',
        'article-about': '#E7F0EA',
        'side-gray': '#F4F5FA',
      },
      screens: {
        sm: '360px',
        md: '768px',
        lg: '1024px',
        xl: '1280px',
        
      },
    },
  },
  plugins: [],
}
