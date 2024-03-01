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
                    <form class=" form-horizontal" method="POST" action="{{ route('partner.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                       
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Image </label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="file" id="image" name="image">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2"> Name </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text"  name="name">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Position </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text"  name="position">
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Facebook </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text"  name="fb">
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Instagram </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text"  name="insta">
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Twitter </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="text"  name="twitter">
                            </div>
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
