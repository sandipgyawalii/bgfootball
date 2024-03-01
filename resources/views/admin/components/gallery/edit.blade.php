@extends('admin.layout.app')
@section('content')
    <!-- page start-->
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <div class="card-header">
                    <h5>Home Slider</h5>
                    <a href="{{ route('gallery.index') }}" class="btn btn-success" style="margin-bottom: 10px">Back<i
                            class="bx bx-share px-2"></i></a>
                </div>
                <div class="card-body">
                    <form class=" form-horizontal" method="POST" action="{{ route('gallery.update',$gallery) }}"
                        enctype="multipart/form-data">
                        @csrf
                       @method('put')
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Category name </label>
                            <div class="col-lg-10">
                                  <select class="form-select" name="category_id" id="">
                                    <option value="{{ $gallery->gallerycategories_id }}" selected>{{ $gallery->category->name }}</option>
                                    @foreach ($category as $item)
                                        
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="title" class="control-label col-lg-2">Title </label>
                            <div class="col-lg-10">
                                  <input type="text" class="form-control" name="title" value="{{ $gallery->title }}">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Image </label>
                            <div class="col-lg-10">
                                  <input type="file" class="form-control" name="image">
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset($gallery->url) }}" alt="galleryimage" width="100px" height="100px">
                                </div>
                            </div>
                        </div>
                
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <div class="pull-right">
                            <input class="btn btn-danger" type="submit" value="Submit">
                            <a href="{{ route('gallery.index') }}" class="btn btn-default" type="button">Cancel</a>
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
