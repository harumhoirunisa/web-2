<body>
    <div class="wrapper">
        <!-- Header -->
        <div class="content-wrapper">
            <!-- Isi konten utama halaman -->
        </div>
        <!-- Footer akan otomatis turun ke bawah -->
        <footer class="main-footer" style="text-align: left; padding: 10px 20px;">
            <strong>CncrGirl &copy; <?= date("Y") ?>
                <a href="#">Harum Hoirunisa</a>.
            </strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <style>
        .main-footer {
            margin-top: 20px; /* Atur jarak atasnya */
            padding: 10px 20px; /* Sesuaikan padding dalam */
            background-color: #f4f6f9; /* Warna latar jika perlu */
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: left;
        }

        .content-wrapper {
            padding-bottom: 10px; /* Biar jaraknya dari footer tidak terlalu jauh */
            margin-bottom: 0;
        }
    </style>
</body>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
