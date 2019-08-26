<div class="col-md-12">
    <img class="w-100"  src="{{asset('images/echo.png')}}" alt="">
</div>
<div class="col-md-12">
    <h5 class="text-center font-weight-bold"><u>{{$echo->title}}</u></h5>
    <table width="100%" class="table table-sm mt-3 border-top-1 border-bottom-1 font-size-lg font-weight-bold">
        <tr class="py-2">
            <td>ឈ្មោះ (Name): {{$echo->patient->name}}</td>
            <td>ភេទ (Sex): {{$echo->patient->gender}}</td>
            <td>អាយុ (Age): {{\Carbon\Carbon::createFromDate($echo->patient->dob)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}</td>
            <td>អាស័យដ្ឋាន (Address): {{$echo->patient->address}}</td>
        </tr>
    </table>
    <h5 class="text-center mt-3 font-weight-bold"><u>Result</u></h5>
    {!! $echo->result !!}
</div>
<div class="col-md-12 mt-4">
    <div class="row align-items-center">
        <div class="col-md-6 col-print-6 pl-4">
            <img class="w-75" src="{{asset($echo->attachment)}}" alt="">
        </div>
        <div class="col-md-6 col-print-6">
            <p class="text-right text-primary">Date de l'examen: le: {{$echo->created_at}}</p>
            <p class="text-right font-weight-bold">Médecin échographiste</p>
            <br>
            <br>
            <p class="font-weight-bold text-right">Dr. {{$echo->user}}</p>
        </div>
    </div>
</div>
<div class="col-md-12 mt-5">
    <p class="text-center font-size-lg font-weight-bold">
        <i class="icon-map"></i> ផ្លូវលេខ ៥៦A ភូមិខ្លែងពណ៌ ឃំុស្លក្រាម ស្រុកស្វាយចេក ខេត្តបន្ទាយមានជ័យ <br>
        ជាប់នឹងមណ្ឌល់សុខភាពស្លក្រាម <br>
        <i class="icon-phone"></i> 012 988 025 / 070 6666 09 / 088 5555 450 <br>
        <i class="icon-mail5"></i> visaisensok168@gmail.com
    </p>
</div>