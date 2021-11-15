const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        title: ' ' + flashData ,
        text: ' ',
        icon: 'success',
        timer: 2000,
  onBeforeOpen: () => {

    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
      });
}

//tombol hapus

$('.tombol-hapus').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin',
        text: "Data akan dihapus ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data!'
      }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
      })
});