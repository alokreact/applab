<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CALL LABS</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
       Designed by <a href="#">CALL LABS</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
 
  <!-- Vendor JS Files -->
  <script src="{{asset('admin-assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin-assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('admin-assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin-assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('admin-assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin-assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin-assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin-assets/js/main.js')}}"></script>
<script>
  $(".js-example-tags").select2({
    tags: true
});
</script>

<script type="text/javascript">
 $(document).ready(function() {
  $(".js-example-basic-single").select2();
});

$(document).ready(function() {
  $(".js-labs").select2({
    tags: true
  });

  $('.js-labs').on('select2:selecting', function(e) {

    var data= e.params.args.data;
    var dummy = '<label for="inputEmail3" class="col-sm-2 col-form-label mt-3">Details</label><div class="col-sm-5 "><input type="text" class="form-control" id="inputText" name="subtest_id[]" value="'+data.text+'"></div><div class="col-sm-5"><input type="text" class="form-control" id="inputText" name="price['+data.id+']" placeholder="Price"></div>\r\n';
       
    $('#details').append(dummy);

  });

  $('.js-labs').on('select2:unselecting', function(e) {
    console.log('removing: ' , e.params.args.data);
  });
});
</script>
</body>

</html>