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
                        <h1>Daftar Pegawai</h1>
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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama 
                        <br>
                      1. Putri Nur Febrianti
                      <br>
                      2. Siti Rohimatus Syahra
                </th>
                    <th>Jabatan
                        <br>
                      CEO
                      <br>
                      Manager
                    </th>
                    <th>Umur
                    <br>
                      25
                      <br>
                      24
                    </th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
