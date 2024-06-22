<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg row">
                <div class="p-6 text-gray-900 dark:text-gray-100 col">
                    <table id="clientsTable" class="table table-dark w-100 ">
                        <caption align="top">Clients Points Summary</caption>
                        <thead >
                            <td>ID</td>
                            <td>Name</td>
                            <td>Points</td>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->points }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <h2 class="legend">Distribution of Cients Points</h2>
                    <div id="pieChart">   
                    <div id="clientsPointsData" style="display: none;">{{ json_encode($clientsPoints) }}</div>
                    <div id="clientsNamesData" style="display: none;">{{ json_encode($clientsNames) }}</div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

<!-- <script>
    var options9 = {
          series: (@json($clientsPoints)),
          chart: {
          width: 380,
          type: 'pie',
        },
        labels:(@json($clientsNames)),
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
        }]
      };
        var commandesByRole = new ApexCharts(document.querySelector("#pieChart"), options9);
        commandesByRole.render();


</script> -->
