<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(to right, #1e3c72, #1e3c72);
      color: #fff;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .container {
      max-width: 1200px;
      background-color: #fff;
      color: #333;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .card {
      border: none;
      border-radius: 10px;
      overflow: hidden;
    }

    .card-header {
      background-color: #1e3c72;
      color: #fff;
      font-size: 1.2rem;
      font-weight: bold;
    }

    .btn-primary {
      background-color: #6a11cb;
      border: none;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #2575fc;
    }

    .btn-warning {
      background-color: #f0ad4e;
      border: none;
    }

    .btn-danger {
      background-color: #d9534f;
      border: none;
    }

    .modal-content {
      border-radius: 10px;
    }

    input[type="text"],
    input[type="email"] {
      border-radius: 5px;
      border: 1px solid #ccc;
      padding: 10px;
    }

    table {
      margin-top: 20px;
      border-collapse: collapse;
      width: 100%;
    }

    th {
      background-color: #4CAF50;
      color: white;
      text-align: center;
    }

    td {
      text-align: center;
      vertical-align: middle;
    }

    .btn {
      padding: 5px 10px;
      font-size: 0.9rem;
    }

    .btn-close {
      color: #333;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header text-center">
        Form Penilaian Mahasiswa
      </div>
      <div class="card-body">
        <form action="" method="get">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="katakunci" placeholder="Masukkan kata kunci" aria-label="Masukkan kata kunci" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="button" id="button-addon2">Cari</button>
          </div>
        </form>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
          + data mahasiswa
        </button>

        <!-- Modal Tambah -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3 row">
                  <label for="inputNim" class="col-sm-2 col-form-label">Nim</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNim">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAlamat">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputNilai" class="col-sm-2 col-form-label">Nilai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNilai">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Edit -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <input type="hidden" id="editId">
                <div class="mb-3 row">
                  <label for="editNim" class="col-sm-2 col-form-label">Nim</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="editNim" disabled>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="editNama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="editNama">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="editEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="editEmail">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="editAlamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="editAlamat">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="editNilai" class="col-sm-2 col-form-label">Nilai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="editNilai">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="tombolUpdate">Update</button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <table class="table">
        <thead>
          <tr>
            <th>nim</th>
            <th>nama</th>
            <th>email</th>
            <th>alamat</th>
            <th>nilai</th>
            <th>aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
              <td><?= $mhs['nim']; ?></td>
              <td><?= $mhs['nama']; ?></td>
              <td><?= $mhs['email']; ?></td>
              <td><?= $mhs['alamat']; ?></td>
              <td><?= $mhs['nilai']; ?></td>
              <td>
                <button type="button" class="btn btn-warning btn-sm btnEdit" data-bs-toggle="modal" data-bs-target="#editModal"
                  data-id="<?= $mhs['id']; ?>"
                  data-nim="<?= $mhs['nim']; ?>"
                  data-nama="<?= $mhs['nama']; ?>"
                  data-email="<?= $mhs['email']; ?>"
                  data-alamat="<?= $mhs['alamat']; ?>"
                  data-nilai="<?= $mhs['nilai']; ?>">
                  edit
                </button>

                <button type="button" class="btn btn-danger btn-sm btnDelete" data-id="<?= $mhs['id']; ?>">
                  delete
                </button>


              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- file js -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    $('#tombolSimpan').on('click', function() {
      var $nim = $('#inputNim').val();
      var $nama = $('#inputNama').val();
      var $email = $('#inputEmail').val();
      var $alamat = $('#inputAlamat').val();
      var $nilai = $('#inputNilai').val();

      $('#tombolSimpan').on('click', function() {
        var $nim = $('#inputNim').val();
        var $nama = $('#inputNama').val();
        var $email = $('#inputEmail').val();
        var $alamat = $('#inputAlamat').val();
        var $nilai = $('#inputNilai').val();

        $.ajax({
          url: "http://localhost/ci4crud/public/index.php/mahasiswa/simpan", // Sesuaikan dengan path aplikasi Anda
          type: "POST",
          data: {
            nim: $nim,
            nama: $nama,
            email: $email,
            alamat: $alamat,
            nilai: $nilai
          },
          success: function(response) {
            if (response.status === 'success') {
              alert(response.message);
              location.reload(); // Reload halaman untuk menampilkan data terbaru
            } else {
              alert(response.message);
            }
          },
          error: function() {
            alert('Terjadi kesalahan saat menyimpan data.');
          }
        });
      });

    });
    $('.btnEdit').on('click', function() {
      const id = $(this).data('id');
      const nim = $(this).data('nim');
      const nama = $(this).data('nama');
      const email = $(this).data('email');
      const alamat = $(this).data('alamat');
      const nilai = $(this).data('nilai');

      $('#editId').val(id); // Set ID di input hidden
      $('#editNim').val(nim);
      $('#editNama').val(nama);
      $('#editEmail').val(email);
      $('#editAlamat').val(alamat);
      $('#editNilai').val(nilai);
    });


    $('#tombolUpdate').on('click', function() {
      const id = $('#editId').val();
      const nim = $('#editNim').val();
      const nama = $('#editNama').val();
      const email = $('#editEmail').val();
      const alamat = $('#editAlamat').val();
      const nilai = $('#editNilai').val();

      console.log({
        id,
        nim,
        nama,
        email,
        alamat,
        nilai
      }); // Log data yang akan dikirim

      $.ajax({
        url: "http://localhost/ci4crud/public/index.php/mahasiswa/update",
        type: "POST",
        data: {
          id: id,
          nim: nim,
          nama: nama,
          email: email,
          alamat: alamat,
          nilai: nilai
        },
        success: function(response) {
          console.log(response); // Log respons dari server
          if (response.status === 'success') {
            alert(response.message);
            $('#editModal').modal('hide');
            location.reload();
          } else {
            alert(response.message);
          }
        },
        error: function(xhr, status, error) {
          console.error("Error:", xhr.responseText); // Log detail error
          alert('Terjadi kesalahan saat memperbarui data.');
        }
      });
    });




    $('.btnDelete').on('click', function() {
      const id = $(this).data('id');
      console.log('ID yang dihapus:', id); // Periksa nilai ID di konsol browser

      if (id === undefined) {
        alert('ID tidak ditemukan. Periksa HTML tombol delete.');
        return;
      }

      const confirmDelete = confirm(`Apakah Anda yakin ingin menghapus data mahasiswa dengan ID ${id}?`);

      if (confirmDelete) {
        $.ajax({
          url: `http://localhost/ci4crud/public/index.php/mahasiswa/delete/${id}`,
          type: "POST",
          success: function(response) {
            if (response.status === 'success') {
              alert(response.message);
              location.reload();
            } else {
              alert(response.message);
            }
          },
          error: function() {
            alert('Terjadi kesalahan saat menghapus data.');
          }
        });
      }
    });

    $('#button-addon2').on('click', function() {
      const kataKunci = $('input[name="katakunci"]').val();

      if (kataKunci.trim() === '') {
        alert('Masukkan kata kunci untuk pencarian.');
        return;
      }

      $.ajax({
        url: "http://localhost/ci4crud/public/index.php/mahasiswa/cari", // Endpoint pencarian
        type: "POST",
        data: {
          katakunci: kataKunci
        },
        success: function(response) {
          if (response.status === 'success') {
            const mahasiswa = response.data;

            // Bersihkan tabel dan tampilkan hanya satu data
            $('tbody').html(`
          <tr>
            <td>${mahasiswa.nim}</td>
            <td>${mahasiswa.nama}</td>
            <td>${mahasiswa.email}</td>
            <td>${mahasiswa.alamat}</td>
            <td>${mahasiswa.nilai}</td>
            <td>
              <button type="button" class="btn btn-warning btn-sm btnEdit" data-bs-toggle="modal" data-bs-target="#editModal"
                data-nim="${mahasiswa.nim}"
                data-nama="${mahasiswa.nama}"
                data-email="${mahasiswa.email}"
                data-alamat="${mahasiswa.alamat}"
                data-nilai="${mahasiswa.nilai}">
                edit
              </button>
              <button type="button" class="btn btn-danger btn-sm btnDelete" data-id="${mahasiswa.id}">
                delete
              </button>
            </td>
          </tr>
        `);
          } else {
            alert(response.message);
            $('tbody').html(''); // Kosongkan tabel jika tidak ada data ditemukan
          }
        },
        error: function() {
          alert('Terjadi kesalahan saat mencari data.');
        }
      });
    });
  </script>
</body>

</html>