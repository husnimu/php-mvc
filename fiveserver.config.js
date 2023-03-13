module.exports = {
  php: 'C:\\laragon\\bin\\php\\php-8.2.2-Win32-vs16-x64\\php.exe',
  root: './public', // root directory of the server
  open: 'index.php',
  port: 8000, // port of the server
  highlight: true, // enable highlight feature
  injectBody: true, // enable instant update
  remoteLogs: true, // enable remoteLogs
  remoteLogs: 'yellow', // enable remoteLogs and use the color yellow
  injectCss: false, // disable injecting css
  navigate: true, // enable auto-navigation
}

// how to run five server for php
// php -S 127.0.0.1:8000 -t www/
// npx -y five-server@latest --port=5500 --open=http://localhost:8000
// <script async data-id="five-server" src="http://localhost:5500/fiveserver.js"></script>
