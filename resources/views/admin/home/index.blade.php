
@extends('admin.admin_master')
@section('admin')
    <div class="py-12">


        <div class='container'>
            <div class="row">
                <h4>Home About</h4>
                <a href="{{route('add.about')}}"><button class="btn btn-info">Add About</button></a>
                <br>
                <br>
                <div class="col-md-12">
                    <div class="card">

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                        <div class="card-header">
                            All About Data
                        </div>




                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">SL No</th>
                                    <th scope="col" width="15%">Home Title</th>
                                    <th scope="col" width="25%">Short Description</th>
                                    <th scope="col" width="15%">Long description</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($homeabout as $about)
                                <tr>
                                    <th scope="row">{{$i++  }}</th>
                                    <td>{{ $about->title }}</td>
                                    

                                    <!-- <td>{{-- $brand->name --}}</td> -->
                                    
                                    <td>
                                    
                                            {{ $about->short_description }}
                                    </td>
                                    <td>
                                    
                                    {{ $about->long_description }}
                            </td>
                                      </td>
                                    <td>
                                    <a href="{{url('about/edit/'.$about->id)}}" class='btn btn-info'>Edit</a>
                                    <a href="{{url('about/delete/'.$about->id)}}" onclick='return confirm("Are you sure to delete?")' class='btn btn-danger'>Delete</a>
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