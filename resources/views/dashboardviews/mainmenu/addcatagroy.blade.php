@extends('weblayout.dashadminlayoutnf')
@section("dashadmin")
     <!-- partial -->
     <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Main Catagery</h4>
                  <p class="card-description"> Add Main Catagery </p>
                  <form class="forms-sample" action="{{ url('/dashboard/maincatagery/store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Catagery</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="mcata">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Insert</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection