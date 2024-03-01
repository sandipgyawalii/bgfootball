@extends('admin.layout.app')
@section('content')
    <!-- page start-->
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <div class="card-header">
                    <h5>Partners</h5>
                    <a href="{{ route('partner.index') }}" class="btn btn-success" style="margin-bottom: 10px">Back<i
                            class="bx bx-share px-2"></i></a>
                </div>
                <div class="card-body">
                    <form class=" form-horizontal" method="POST" action="{{ route('partner.update',$partner) }}"
                        enctype="multipart/form-data">
                        @csrf
                       @method('put')
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Image </label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="file" id="image" name="image">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset($partner->url) }}" alt="partner image" width="100px" height="100px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2"> Name </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" value="{{ $partner->name }}"  name="name">
                            </div>
                            @error('name')
                                <span class="text-danger fs-6">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Position </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" value="{{ $partner->position }}"  name="position">
                            </div>
                            @error('position')
                            <span class="text-danger fs-6">{{ $message }}</span>
                        @enderror
                        </div>
                        
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Facebook </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" value="{{ $partner->fb }}"  name="fb">
                            </div>
                            @error('fb')
                            <span class="text-danger fs-6">{{ $message }}</span>
                        @enderror
                        </div>
                        
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Instagram </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" value="{{ $partner->insta }}"  name="insta">
                            </div>
                            @error('insta')
                            <span class="text-danger fs-6">{{ $message }}</span>
                        @enderror
                        </div>
                        
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Twitter </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" value="{{ $partner->twitter }}"  name="twitter">
                            </div>
                            @error('twitter')
                            <span class="text-danger fs-6">{{ $message }}</span>
                        @enderror
                        </div>
                
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <div class="pull-right">
                            <input class="btn btn-danger" type="submit" value="Submit">
                            <a href="{{ route('partner.index') }}" class="btn btn-default" type="button">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

                </form>
        </div>
        </section>
    </div>
    </div>

    <!-- page end-->
@endsection
@section('js')
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
