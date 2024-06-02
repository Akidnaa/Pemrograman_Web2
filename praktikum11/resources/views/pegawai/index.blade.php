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
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pegawai</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Info Pegawai</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets/img/MaleAvatar.jpg" alt="Foto Pegawai" class="img-thumbnail" style="width:500px; height: 250px; margin-top: 40px; margin-right: 40px">
                        </div>
                        <div class="col-md-9">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Nama:</strong> Muhammad Andhika Thata</li>
                                <li class="list-group-item"><strong>Gender:</strong> Laki-laki</li>
                                <li class="list-group-item"><strong>Umur:</strong> 20</li>
                                <li class="list-group-item"><strong>Alamat:</strong> Jl.R.H Panji</li>
                                <li class="list-group-item"><strong>Email:</strong> m.dhikathata@gmail.com</li>
                                <li class="list-group-item"><strong>No Telp:</strong> 085157634427</li>
                                <li class="list-group-item"><strong>Jabatan:</strong> Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')    