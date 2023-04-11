
<!-- bootstrap cdn JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- FontAwsome JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
    integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jQuery CDN-->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>


<!-- Bootstrap JS -->
<!-- <script src="{{asset('Assets/js/bootstrap.bundle.min.js')}}"></script> -->
<!-- google chart JS -->
<!-- <script src="{{asset('Assets/js/googlePieChart.js')}}"></script> -->
<!-- jQuery JS-->
<!-- <script src="{{asset('Assets/js/jquery.min.js')}}"></script> -->

<!-- Vendor js -->
<script src="{{asset('Assets/js/lib.vendor.bundle.js')}}"></script>
<!-- counterUp js -->
<script src="{{asset('Assets/js/counterup.bundle.js')}}"></script>
<!-- Core JS -->
<script src="{{asset('Assets/js/core.js')}}"></script>
<script src="{{asset('Assets/js/project-index.js')}}"></script>
<script src="{{asset('Assets/js/donught.js')}}"></script>

<script>
   $(document).ready(function() {
  //success message autohide
  setTimeout(function () {
        $(".errorMsg").fadeOut('slow')
    }, 2000);
});

</script>

</body>

</html>