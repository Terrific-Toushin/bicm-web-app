
<!-- jQuery -->
<script src="{{ asset('/backend') }}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('/backend') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('/backend') }}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ asset('/backend') }}/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{ asset('/backend') }}/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="{{ asset('/backend') }}/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('/backend') }}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('/backend') }}/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="{{ asset('/backend') }}/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{ asset('/backend') }}/vendors/Flot/jquery.flot.js"></script>
<script src="{{ asset('/backend') }}/vendors/Flot/jquery.flot.pie.js"></script>
<script src="{{ asset('/backend') }}/vendors/Flot/jquery.flot.time.js"></script>
<script src="{{ asset('/backend') }}/vendors/Flot/jquery.flot.stack.js"></script>
<script src="{{ asset('/backend') }}/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{ asset('/backend') }}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{ asset('/backend') }}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{ asset('/backend') }}/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="{{ asset('/backend') }}/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="{{ asset('/backend') }}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{ asset('/backend') }}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('/backend') }}/vendors/moment/min/moment.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Datatables -->
<script src="{{ asset('/backend') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="{{ asset('/backend') }}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/jszip/dist/jszip.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- bootstrap-wysiwyg -->
<script src="{{ asset('/backend') }}/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="{{ asset('/backend') }}/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="{{ asset('/backend') }}/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<script src="{{ asset('/backend') }}/vendors/bootstrap-tagsinput-master/dist/bootstrap-tagsinput.js"></script>
<!-- Switchery -->
<script src="{{ asset('/backend') }}/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('/backend') }}/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="{{ asset('/backend') }}/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="{{ asset('/backend') }}/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="{{ asset('/backend') }}/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="{{ asset('/backend') }}/vendors/starrr/dist/starrr.js"></script>

<!-- FullCalendar -->
<script src="{{ asset('/backend') }}/vendors/moment/min/moment.min.js"></script>
<script src="{{ asset('/backend') }}/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- Custom Theme Scripts -->


<script src="{{ asset('/backend') }}/chosen/select2.js"></script>
<script src="{{ asset('/backend') }}/build/js/custom.min.js"></script>
<script src="{{ asset('/backend') }}/ckeditor/ckeditor.js"></script>
<script src="{{ asset('/backend') }}/ckeditor/samples/js/sample.js"></script>


<script>
    initSample();
</script>
<script>
    $(document).ready(function() {
        @yield('jquery_start')
        $('.js-example-basic-single').select2();
    });

    $().DataTable();


    function getSubcategoryName(category_id) {
        var categoryId = $(category_id).val();
        if(categoryId){
            $.ajax({
                url     : '{{url('/admin/ajax-sub-category')}}'+'/'+categoryId,
                method  : 'GET',
                type    : 'JSON',
                success : function (response) {
                    if(response){
                        $("#sub_category").empty();
                        $("#sub_category").append('<option value="0"> Select Sub Category  </option>');
                        $.each(response, function( key, value ){
                            $("#sub_category").append('<option value="'+key+'">'+value+'</option>');
                        });

                    }else{
                        $("#sub_category").empty();
                    }
                }
            });

        }else {
            $('#sub_category').empty();
        }
    }

    function getSubcategoryContentName(subCategory_id) {
        var subCategory_id = $(subCategory_id).val();
        if(subCategory_id){
            $.ajax({
                url     : '{{url('/admin/ajax-sub-category-Content')}}'+'/'+subCategory_id,
                method  : 'GET',
                type    : 'JSON',
                success : function (response) {
                    if(response){
                        $("#sub_category_content").empty();
                        $("#sub_category_content").append('<option value="0"> Select Sub Category Content</option>');
                        $.each(response, function( key, value ){
                            $("#sub_category_content").append('<option value="'+key+'">'+value+'</option>');
                        });

                    }else{
                        $("#sub_category_content").empty();
                    }
                }
            });

        }else {
            $('#sub_category').empty();
        }
    }
</script>