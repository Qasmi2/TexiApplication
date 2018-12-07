@extends('admin.layout.base')



@section('content')

    <div class="content-area py-1">
        <div class="container-fluid">
            
            <div class="box box-block bg-white">
                <h5 class="mb-1">Provider Cancel Ride</h5>
                <table class="table table-striped table-bordered dataTable" id="table-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>BOOKING ID</th>
                            <th>User Name</th>
                            <th>Provider Name</th>
                           
                            <th>Date & Time</th>
                            <th>Cancel Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cancelled as $index => $review)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$review->booking_id}}</td>
                            <td>{{$review->user->first_name}} {{$review->user->last_name}}</td>
                            <td>{{$review->provider->first_name}} {{$review->provider->last_name}}</td>
                          
                            <td>{{$review->created_at}}</td>
                            <td>{{$review->cancel_reason}}</td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>ID</th>
                            <th>BOOKING ID</th>
                            <th>User Name</th>
                            <th>Provider Name</th>
                          
                            <th>Date & Time</th>
                            <th>Cancel Reason</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </div>
    </div>
@endsection