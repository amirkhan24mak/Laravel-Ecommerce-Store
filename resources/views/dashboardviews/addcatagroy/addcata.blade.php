
@extends('weblayout.dashadminlayoutnf')
@section("dashadmin")
     <!-- partial -->
     <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Add Sub Catagery</h4>
                  <form class="forms-sample" action="{{ url('/dashboard/catagery/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Catagery</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="mcata">
                    </div>

                    <div class="form-group">
                        <label for="exampleSelectGender">Select Catagery</label>
                        <select class="form-control" name="cat" >
                          <option value="" selected disabled>Select Catagery</option>
                          @foreach ($cat as $item)

                          <option value="{{$item->Mcata_Id}}">{{$item->Name}}</option>  

                          @endforeach

                        </select>
                      </div>

                    <button type="submit" class="btn btn-primary mr-2" name="submit">Insert</button>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
@endsection