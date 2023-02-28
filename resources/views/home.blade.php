@extends('layouts.app')

@section('content')
<div class="content-body">
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <form action="{{route('ppt.add')}}" method="POST">
            <div class="row">
                @csrf
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Inputs</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Property name</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_name" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Property code</label>
                                        <input type="number" class="form-control" id="basicInput" name="ppt_code" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Property type</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_type" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Phone Number</label>
                                        <input type="number" class="form-control" id="basicInput" name="ppt_phone" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Property Description</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_desc" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Country</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_country" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Town</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_town" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Address</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_address" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-12 mb-1">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="container">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>
                            name
                        </th>
                        <th>
                            phone number
                        </th>
                        <th>
                            country
                        </th>
                        <th>
                            town
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($properties as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone_number}}</td>
                        <td>{{$item->country}}</td>
                        <td>{{$item->town}}</td>
                        <td><a href="{{route('ppt.edit',['id'=>$item->id])}}" class="btn btn-primary">edit</a></td>
                        <td><a href="{{route('ppt.delete',['id'=>$item->id])}}" class="btn btn-danger">delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
       
    </section>
    <!-- Basic Inputs end -->
</div>
@endsection
