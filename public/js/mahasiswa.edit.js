$(function () {
  $('#create').on('click', function () {
    $('#createMahasiswaLabel').html('Tambah Mahasiswa')
    $('#submit').html('Tambah')
    $('#form').attr('action', 'http://localhost:8000/mahasiswa/create')
  })

  $('.edit').on('click', function () {
    $('#createMahasiswaLabel').html('Edit Mahasiswa')
    $('#submit').html('Edit')
    $('#form').attr('action', 'http://localhost:8000/mahasiswa/edit')

    // get data id
    const id = $(this).data('id')

    // get data mahasiswa
    $.ajax({
      url: 'http://localhost:8000/mahasiswa/get/',
      method: 'post',
      data: {
        id,
      },
      dataType: 'json',
      success: function (data) {
        console.log(data)
        $('#nama').val(data.nama)
        $('#nrp').val(data.nrp)
        $('#email').val(data.email)
        $('#jurusan').val(data.jurusan)
        $('#id').val(data.id)
      },
      error: function (err) {
        console.log(err)
      },
    })
  })
})
