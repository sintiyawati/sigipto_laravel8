    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{url('public/admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('public/admin/assets/plugins/bootstrap/js/popper.min.js')}}"></script>

    <script src="{{url('public/admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('public/admin/assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('public/admin/assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('public/admin/assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{url('public/admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{url('public/admin/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url('public/admin/assets/js/custom.min.js')}}"></script>
    <script src="{{url('public/admin/assets/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript')}}"></script>
    <script src="{{url('public/admin/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{url('public/admin/assets/plugins/raphael/raphael-min.js')}}"></script>
    <!-- sparkline chart -->
    <script src="{{url('public/admin/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('public/admin/assets/plugins/Owl/dist/owl.carousel.min.js')}}"></script>
    <script src="{{url('public/admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/admin/assets/plugins/summernote/dist/summernote.min.js')}}"></script>
    <!-- page script -->
    <script src="{{url('public/admin/assets/plugins/slick/slick.min.js')}}"></script>
    <script src="{{url('public/admin/assets/plugins/slick/custom-slick.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="{{url('public/admin/assets/js/jasny-bootstrap.js')}}"></script>
    <script src="{{url('public/admin/assets/js/map.js')}}"></script>
    <!-- <script src="{{url('public/admin/assets/js/dashboard4.js')}}"></script> -->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{url('public/admin/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>    
    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
            height: 150, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

            $('.inline-editor').summernote({
                airMode: true
            });

        });

        window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script>

    <script type="text/javascript">
      $('.naf-for').slick({
        autoplay: false,
        slidesToShow: 1,
        arrows: true,
        fade: true,
        asNavFor: '.naf-bottom'
    });
      $('.naf-bottom').slick({
        slidesToShow: 1,
        asNavFor: '.naf-for',
        dots: false,
        prevArrow: false,
        nextArrow: false,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '70px'

    });
</script>
<script>
    $(document).ready(function() {
        // For select 2
        $(".select2").select2();
        // For datatable
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
        $('.owl-carousel').owlCarousel({
            items: 1,
        });

        $(".toggle-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>