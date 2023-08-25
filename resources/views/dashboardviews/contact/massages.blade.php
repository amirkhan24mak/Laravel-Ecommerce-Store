@extends('weblayout.dashadminlayoutnf')

@section('dashadmin')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Massages </h3>
      </div>
      <div class="row">

        @foreach ($fetch as $massage)
        
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{$massage->Name}}</h4>
              <p class="card-description"> Email<span class="text-primary"> {{$massage->Email}}</span>
              </p>
              <span class="text-dark" style="font-weight: bold">Massage</span>
              <p> {{$massage->Massage}} </p>
              <a href="{{url('/dashobard/massages')}}/{{$massage->ID}}">
              <button type="button" class="btn btn-outline-danger btn-fw">Delete Massage</button>
            </a>
            </div>
          </div>
        </div>
        
        @endforeach
        
      </div>
    </div>
    
@endsection