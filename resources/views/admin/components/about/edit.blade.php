@extends('admin.layout.app')
@section('content')
    <!-- page start-->
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <div class="card-header">
                    <h5>About page</h5>
                    <a href="{{ route('about.update', $about->id) }}" class="btn btn-success" style="margin-bottom: 10px">Back<i
                            class="bx bx-share px-2"></i></a>
                </div>
                <div class="card-body">
                    <form class=" form-horizontal" method="POST" action="{{ route('about.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Description </label>
                            <div class="col-lg-10">
                                <textarea class="form-control" type="text" name="description" id="description" value="{{ $about->description }}">{!! $about->description !!} </textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">About image </label>
                            <div class="col-lg-10">
                                <input class="form-control" type="file" name="image[]" multiple>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="pull-right">
                                    <input class="btn btn-danger" type="submit" value="Submit">
                                    <a href="{{ route('about.index') }}" class="btn btn-default" type="button">Cancel</a>
                                </div>
                            </div>
                        </div>
                </div>

                </form>
                <div class="row ">
                    <h2>About Images</h2>
                    @foreach ($about_images as $item)
                        <div class="col-md-3">
                            <img src="{{ asset($item->url) }}" alt="about_images" width="100px" height="100px">
                            <form action="{{ route('about.imagedestroy',$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure want to delete it ?')" type="submit" class="btn btn-sm bg-danger"> <i class="feather-trash"></i></button>
                           
                                {{-- <button type="submit" class="btn btn->Delete</button> --}}
                            </form>
                        </div>
                    @endforeach

                </div>
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
