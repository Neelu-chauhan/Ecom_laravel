<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>

<!-- Place this tag before closing body tag for github widget button. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script>
   
    // logout confirmation
   function confirmation(e){
        e.preventDefault();
       var link = e.currentTarget.getAttribute('href');
       Swal.fire({
               title: "Are you sure you want to logout?",
               text: "",
               icon: "warning",
               showCancelButton: true,
               confirmButtonText: "Yes, logout!",
               cancelButtonText: "No, stay here",
           }).then((result) => {
               if (result.isConfirmed) {
                   window.location.href = link;
               } 
           });
   }
</script>

</body>
</html>