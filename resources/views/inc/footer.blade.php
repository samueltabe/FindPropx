<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{ date('Y') }} &copy; FindPropx App by <a href="#">Samtabe</a>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->




<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<script src="{{ asset('assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-scrollto/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Chat app -->
<script src="{{ asset('assets/js/pages/jquery.chat.js') }}"></script>

<!-- Todo app -->
<script src="{{ asset('assets/js/pages/jquery.todo.js') }}"></script>


<!-- third party js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>

<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>

<script src="{{ asset('assets/libs/datatables/dataTables.fixedHeader.min.html') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.scroller.min.js') }}"></script>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Main Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#editor', {
      theme: 'snow'
    });
  </script>

<!-- Datatables init -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>


<!-- Dashboard init JS -->
<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>
