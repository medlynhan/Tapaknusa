// resources/js/app.js

// Import plugin atau library lokal
import './jquery-1.7.1.min.js';

// Import skrip custom
import './header.js';
import './searchBox.js';
import './carousell.js';
import './layout.js';

// Jika ada inisialisasi khusus, letakkan di bawah ini
document.addEventListener('DOMContentLoaded', () => {
  // contoh: jalankan fungsi dari header.js
  initHeader();
  // contoh: jalankan fungsi dari searchBox.js
  initSearchBox();
  // dst…
});
