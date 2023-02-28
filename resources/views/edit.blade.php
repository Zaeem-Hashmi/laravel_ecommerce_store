@extends('layouts.app')

@section('content')
<div class="content-body">
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <form action="{{route('ppt.update')}}" method="POST">
            <div class="row">
                @csrf
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Inputs</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <input type="number" name="property_id" value="{{$property->id}}" hidden>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Property name</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_name" placeholder=""  value="{{$property->name}}"/>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Property code</label>
                                        <input type="number" class="form-control" id="basicInput" name="ppt_code" placeholder="" value="{{$property->property_code}}" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Property type</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_type" placeholder=""  value="{{$property->property_type}}"/>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Phone Number</label>
                                        <input type="number" class="form-control" id="basicInput" name="ppt_phone" placeholder="" value="{{$property->phone_number}}" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Property Description</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_desc" placeholder=""  value="{{$property->property_description}}"/>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Country</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_country" placeholder="" value="{{$property->country}}" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Town</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_town" placeholder=""  value="{{$property->town}}"/>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-1">
                                    <div class="form-group">
                                        <label for="basicInput">Address</label>
                                        <input type="text" class="form-control" id="basicInput" name="ppt_address" placeholder=""  value="{{$property->address_1}}"/>
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
    </section>
    <!-- Basic Inputs end -->
</div>
@endsection
