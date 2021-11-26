@extends('admin.home')

@section('content')
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Appointments</h4>
        <p class="card-description"> List Of All Appointments made by Patients</p>
        <div class="table-responsive">
          <table class="table table-bordered table-contextual">
            <thead>
              <tr>
                <th> # </th>
                <th> Full Name </th>
                <th>Phone Number  </th>
                <th>Email</th>
                <th>Date</th>
                <th>Doctor</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($appointments as $appNUM => $appointment)
              <tr class="table-info">
                <td>{{  $appNUM +1 }} </td>
                <td> {{$appointment->name  }} </td>
                <td> {{ $appointment->phone }} </td>
                <td> {{ $appointment->email }}</td>
                <td> {{ $appointment->date }} </td>
                <td> {{ $appointment->doctor }}</td>
                <td>{{ $appointment->message }}</td>
                <td>{{ $appointment->status }}</td>
              </tr>

              @endforeach }}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
