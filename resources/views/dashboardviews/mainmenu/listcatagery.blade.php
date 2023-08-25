@extends('weblayout.dashadminlayoutnf')
@section('dashadmin')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">



                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Main Categories</h4>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> #ID </th>
                                        <th> Categories Names </th>
                                        <th> Subcategories </th>
                                        <th> Action </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($fetch as $mcatagery)
                                        <tr>

                                            <td> {{ $mcatagery->Mcata_Id }} </td>
                                            <td> {{ $mcatagery->Name }} </td>
                                            <td> $ 77.99 </td>
                                            <td>
                                                <a href="{{url('/dashboard/maincatagery/list')}}/{{$mcatagery->Mcata_Id}}">
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
