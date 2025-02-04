
<footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
    </div>
  </div>
</footer>
</main>
<!-- jQuery library js -->
  <!-- Bootstrap js -->
  <script src="{{asset('js/lib/bootstrap.bundle.min.js')}}"></script>
  <!-- Apex Chart js -->
  <script src="{{asset('js/lib/apexcharts.min.js')}}"></script>
  <!-- Data Table js -->
  <script src="{{asset('js/lib/dataTables.min.js')}}"></script>
  <!-- Iconify Font js -->
  <script src="{{asset('js/lib/iconify-icon.min.js')}}"></script>
  <!-- jQuery UI js -->
  <script src="{{asset('js/lib/jquery-ui.min.js')}}"></script>
  <!-- Vector Map js -->
  <script src="{{asset('js/lib/jquery-jvectormap-2.0.5.min.js')}}"></script>
  <script src="{{asset('js/lib/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Popup js -->
  <script src="{{asset('js/lib/magnifc-popup.min.js')}}"></script>
  <!-- Slick Slider js -->
  <script src="{{asset('js/lib/slick.min.js')}}"></script>
  <!-- prism js -->
  <script src="{{asset('js/lib/prism.js')}}"></script>
  <!-- file upload js -->
  <script src="{{asset('js/lib/file-upload.js')}}"></script>
  <!-- audioplayer -->
  <script src="{{asset('js/lib/audioplayer.js')}}"></script>
  
  <!-- main js -->
  <script src="{{asset('js/app.js')}}"></script>

<script src="{{asset('js/homeThreeChart.js')}}"></script>


<!-- Initialize Flasher -->

<script>
   var options = { 
      series: [60, 40],
      colors: ['#53f41e', '#487FFF'],
      labels: ['Active', 'Inactive'] ,
      legend: {
          show: false 
      },
      chart: {
        type: 'donut',    
        height: 260,
        sparkline: {
          enabled: true // Remove whitespace
        },
        margin: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
        },
        padding: {
          top: 0,
          right: 0,
          bottom: 0,
          left: 0
        }
      },
      stroke: {
        width: 0,
      },
      dataLabels: {
        enabled: false
      },
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            width: 200
          },
          legend: {
            position: 'bottom'
          }
        }
      }],
    };

    var chart = new ApexCharts(document.querySelector("#statisticsDonutChart"), options);
    chart.render();
</script>
<script>
  let table = new DataTable('#dataTable');
</script>
</body>

<!-- Mirrored from wowdash.wowtheme7.com/demo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Oct 2024 10:04:47 GMT -->
</html>
