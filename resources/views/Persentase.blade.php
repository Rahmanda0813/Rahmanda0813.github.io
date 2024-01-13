@extends('layout.dashboardOp')
@section('container2')
<br>
<br>
<br>
<div class="judul">
<h1>persentase</h1>
</div>
<canvas id="persentaseChart" width="400" height="200"></canvas>
<script>
  var ctx = document.getElementById('persentaseChart').getContext('2d');
  var persentaseChart = new Chart(ctx, {
    type: 'bar', 
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'jun', 'jul', 'agu', 'sep', 'oct', 'nov', 'des']
      datasets: [{
        label: 'Persentase Diterima',
        data: [20, 30, 15, 25, 20], 
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          max: 100 
        }
      }
    }
  });
</script>

@endsection