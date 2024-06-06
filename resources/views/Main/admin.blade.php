<x-layoutMain>


    <form method="post" action="">
        <button type="submit" class="btn btn-secondary m-3" name="redirect"> Kembali</button>
    </form>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header bg-dark text-white">
                Data Warisan Budaya
            </div>
            <div class="card-body">

                <!-- Button trigger modal tambah -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    Tambah Data
                </button>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>



                    // persiapan menampilkan data
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM situs_budaya ORDER BY id DESC");
                    while ($data = mysqli_fetch_array($tampil)):
                        ?>

                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalUbah">Ubah</a>
                            <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalHapus">Hapus</a>
                        </td>
                    </tr>

                    <!-- Modal Ubah Start-->
                    <div class="modal fade" id="modalUbah" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data Warisan Budaya
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="POST" action="crud.php">
                                    <input type="hidden" name='id' value="['id'] ?>">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama"
                                                value="['nama'] ?>" placeholder="Masukkan Nama Situs Budaya!">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Kategori</label>
                                            <select class="form-select" name="kategori">
                                                <option value="['kategori'] ?>"></option>
                                                <option value="bangunan">Bangunan</option>
                                                <option value="museum">Museum</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi"
                                                value="['lokasi'] ?>"
                                                placeholder="Masukkan Lokasi Situs Budaya!">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Ubah End -->

                    <!-- Modal Hapus Start-->
                    <div class="modal fade" id="modalHapus" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="POST" action="crud.php">
                                    <input type="hidden" name='id' value="['id'] ?>">
                                    <div class="modal-body">
                                        <h5 class="text-center"> Apakah anda yakin akan menghapus data ini? <br><span
                                                class="text-danger">['nama'] ?> - ['lokasi'] ?>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Hapus End -->


                </table>


                <!-- Modal Tambah Start -->
                <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Warisan Budaya</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form method="POST" action="crud.php">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama"
                                            placeholder="Masukkan Nama Situs Budaya!">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Kategori</label>
                                        <select class="form-select" name="kategori">
                                            <option value="bangunan">Bangunan</option>
                                            <option value="museum">Museum</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" name="lokasi"
                                            placeholder="Masukkan Lokasi Situs Budaya!">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                                    <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Tambah End -->
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</x-layoutMain>
