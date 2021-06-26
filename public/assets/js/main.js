$(document).ready(function () {
  $('#example').DataTable({
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data setiap halaman",
      "zeroRecords": "Maaf tidak dapat menemukan data yang dicari",
      "info": "Memperlihatkan halaman _PAGE_ dari _PAGES_",
      "infoEmpty": "Tidak ada Data yang ditemukan",
      "infoFiltered": "(Difilter dari _MAX_ total data)",
      "sSearch": "Filter",
      'paginate': {
        'previous': `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
              </svg>`,
        'next': `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
              </svg>`
      }
    }
  });
  $('#example2').DataTable({
    "language": {
      "lengthMenu": "Tampilkan _MENU_ data setiap halaman",
      "zeroRecords": "Maaf tidak dapat menemukan data yang dicari",
      "info": "Memperlihatkan halaman _PAGE_ dari _PAGES_",
      "infoEmpty": "Tidak ada Data yang ditemukan",
      "infoFiltered": "(Difilter dari _MAX_ total data)",
      "sSearch": "Filter",
      'paginate': {
        'previous': `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
              </svg>`,
        'next': `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
              </svg>`
      }
    }
  });
});