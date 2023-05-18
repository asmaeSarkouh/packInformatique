<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var falseCount = {{ $falseCount }};
            var trueCount = {{ $trueCount }};

            var data = {
                labels: ['Etats False', 'Etats True'],
                datasets: [{
                    data: [falseCount, trueCount],
                    backgroundColor: ['#FF6384', '#36A2EB'],
                    hoverBackgroundColor: ['#FF6384', '#36A2EB']
                }]
            };

            // Render the chart using Chart.js
            new Chart(document.getElementById('piechart'), {
                type: 'pie',
                data: data,
                options: {
                    legend: {
                        display: true,
                        position: 'bottom',
                    },
                }
            });



  });
</script>
</head>
<body>
 @yield('body')
    <div class="grid lg:grid-cols-6 gap-4 p-4">
        <div class="lg:col-span-2 col-span-1 bg-white flex justify-between w-full bodrder p-4 rounded-lg">
            <div class="flex flex-col w-full pb-4">
                <p className='text-2xl font-bold'>{{$trueCount}} </p>
                <p className='text-gray-600'>Material Active</p>
            </div>
            <p className="bg-green-200 flex justify-center items-center p-2 rounded-lg">
            </p>
        </div>
        <div class="lg:col-span-2 col-span-1 bg-white flex justify-between w-full bodrder p-4 rounded-lg">
            <div class="flex flex-col w-full pb-4">
                <p className='text-2xl font-bold'>{{$falseCount}} </p>
                <p className='text-gray-600'>Material Desactive</p>
            </div>
            <p className="bg-green-200 flex justify-center items-center p-2 rounded-lg">
            </p>
        </div>
    </div>
    <div className="w-full md:col-span-2 relative lg:h-[70vh] h-[50vh] m-auto p-4 border rounded-lg bg-white"></div>

    <canvas id="myChart"></canvas>

</body>




</html>
