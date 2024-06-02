@include('admin.header')
@include('admin.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="font: bold">ADMIN</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header bg-info">
                    <h3 style="font-weight: bold" class="card-title">Profil Admin</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body bg-dark text-white">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="assets/img/personal.jpg" alt="Foto Pegawai" class="img-thumbnail mt-4 mr-2" style="width: 300px; height: 300px;">
                        </div>
                        <div class="flex-grow-1 ms-4 m-2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-dark text-white"><strong>Nama:</strong> Muhammad Andhika Thata</li>
                                <li class="list-group-item bg-dark text-white"><strong>Gender:</strong> Laki-laki</li>
                                <li class="list-group-item bg-dark text-white"><strong>Umur:</strong> 20</li>
                                <li class="list-group-item bg-dark text-white"><strong>Alamat:</strong> Jl.R.H Panji</li>
                                <li class="list-group-item bg-dark text-white"><strong>Email:</strong> m.dhikathata@gmail.com</li>
                                <li class="list-group-item bg-dark text-white"><strong>No Telp:</strong> 085157634427</li>
                                <li class="list-group-item bg-dark text-white"><strong>Jabatan:</strong> Admin</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mt-4 bg-info">
                        <div class="card-header">
                            <h3 style="font-weight: bold; color: white" class="card-title">MATA KULIAH: PEMROGRAMAN WEB 2 | PRAKTIKUM 12 | SISTEM CRUD</h3>
                        </div>
                        <div class="card-body bg-info text-dark">
                            <ul class="list-group list-group-flush">
                                <li style="border-radius:5px" class="list-group-item bg-light text-dark">Membuat Fitur <p style="font-weight: bold">READ</p></li>
                                <li style="border-radius:5px" class="list-group-item bg-light text-dark mt-1">Membuat Fitur <p style="font-weight: bold">UPDATE</p></li>
                                <li style="border-radius:5px" class="list-group-item bg-light text-dark mt-1">Membuat Fitur <p style="font-weight: bold">DELETE</p></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Statistics Section -->
                    <div class="card mt-4 bg-warning justify-content-center align-item-center text-dark" style="max-width: 150px;">
                        <div class="card-header">
                            <h3 style="font-weight: bold" class="card-title">HASIL TUGAS</h3>
                        </div>
                        <div class="card-body bg-light d-flex justify-content-start align-items-start">
                            <a href="/pasien" class="text-white" style="text-decoration: none;">
                                <div class="card text-white bg-success" style="max-width: 100px;">
                                    <div class="card-body d-flex align-items-center justify-content-center">    
                                        <div>
                                            <h4 style="font-weight: bold; font-family: monospace;" class="card-title mb-0">PASIEN</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
