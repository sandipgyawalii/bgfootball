@extends('admin.layout.app')
@section('content')
    <!-- page start-->
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <div class="card-header">
                    <h5>Our Facility</h5>
                    <a href="{{ route('facilities.index') }}" class="btn btn-primary" style="margin-bottom: 10px">Back<i
                            class="bx bx-share px-2"></i></a>
                </div>
                <div class="card-body">
                    <form class=" form-horizontal" method="POST" action="{{ route('facilities.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Title</label>
                            <div class="col-lg-12">
                                <input class=" form-control" type="text" id="name" name="title"
                                    placeholder="" value="">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Banner </label>
                            <div class="col-lg-12">
                                <input class=" form-control" type="file" id="image" name="banner">
                                @error('banner')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                     

                        <div class="form-group ">
                            <label for="reading">Facility Details</label>
                            <div class="">
                                <div id="trial-container">
                                    <div class="trial">
                                        <label class="form-label" for="topics[0][title]">Title</label>
                                        <input type="text" class="form-control" name="topics[0][title]" placeholder="">
                                        <span class="danger">
                                            @error('topics.*.title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                        <br>                                                
                                        <label class="form-label" for="topics[0][details]">Details</label>
                                        <textarea class="form-control" name="topics[0][details]" id="details"></textarea>
                                        <span class="danger">
                                            @error('topics.*.details')
                                            {{$message}}
                                            @enderror
                                        </span>
                                        <br>
                                    </div>
                                </div>
                                <button type="button" id="add-trial" class="btn btn-primary">Add Topics</button>
                            </div>
                        </div>  

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="pull-right">
                                    <input class="btn btn-danger" type="submit" value="Submit">
                                    <a href="{{ route('facilities.index') }}" class="btn btn-default"
                                        type="button">Cancel</a>
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
    $(document).ready(function() {
        var trialCount = 1;
        $('#add-trial').on('click', function() {
            trialCount++;   
            var newTrial = `
                <div id="trial-container">
                        <div class="trial">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <label class="form-label" for="topics[${trialCount}][title]">Title</label>
                                    <input type="text" class="form-control" name="topics[${trialCount}][title]" placeholder=""><br>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <button type="button" class="remove-trial btn btn-danger mt-4" data-textarea-id="trial-details-${trialCount}">Remove</button><br>
                                </div>
                            </div>
                            
                            <label class="form-label" for="topics[${trialCount}][details]">Details</label>
                            <textarea class="form-control" name="topics[${trialCount}][details]" id="trial-details-${trialCount}"></textarea><br>
                            
                        </div>
                    </div>
            `;

            $('#trial-container').append(newTrial);
            CKEDITOR.replace(`trial-details-${trialCount}`);
        });
        $(document).on('click', '.remove-trial', function() {
            var textareaId = $(this).data('textarea-id');
            CKEDITOR.instances[textareaId].destroy(); 
            $(`#${textareaId}`).parent('.trial').remove();
        });
    });
</script>

    <script>
        CKEDITOR.replace('description_ckeditor');
        CKEDITOR.replace('details');



        
    </script>
@endsection
