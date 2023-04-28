<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                {{ $year }} © Muhajirin.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Almira Tech
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- JAVASCRIPT -->
<script src="{{ asset('haira/apaxy') }}/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('haira/apaxy') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('haira/apaxy') }}/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('haira/apaxy') }}/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('haira/apaxy') }}/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="{{ asset('haira/apaxy') }}/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{ asset('haira/apaxy') }}/libs/slick-slider/slick/slick.min.js"></script>

<!-- Jq vector map -->
<script src="{{ asset('haira/apaxy') }}/libs/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('haira/apaxy') }}/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

<!-- Required datatable js -->
<script src="{{ asset('haira/apaxy') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('haira/apaxy') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="{{ asset('haira/apaxy') }}/js/app.js"></script>
<script>
    const server = "{{ url('') }}/";
</script>
<script src="{{ asset('haira/base/') }}/js/mainApp.js"></script>
</body>

</html>
