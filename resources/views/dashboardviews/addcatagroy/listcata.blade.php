@extends('weblayout.dashadminlayoutnf')
@section('dashadmin')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">



                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sub Categories</h4>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> #ID </th>
                                        <th> Categories Names </th>
                                        <th> Main Catagery </th>
                                        <th> Action </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($fatch as $add)
                                        <tr>

                                            <td> {{ $add->Subcata_id }} </td>
                                            <td> {{ $add->Subcata_Name }} </td>
                                            <td> {{ $add->Name }} </td>


                                            <td>
                                                <a href="{{url('/dashboard/catagery/list')}}/{{$add->Subcata_id}}">
                                                    <button type="button"
                                                        class="btn btn-inverse-danger btn-fw">Delete</button>
                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    @endsection
