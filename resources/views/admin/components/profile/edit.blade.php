@extends('admin.layout.app')
@section('content')
    <!-- page start-->
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <div class="card-header">
                    <h5>Company Details</h5>
                    <a href="{{ route('profile_index') }}" class="btn btn-success" style="margin-bottom: 10px">Back<i
                            class="bx bx-share px-2"></i></a>
                </div>
                <div class="card-body">
                    <form class=" form-horizontal" method="POST" action="{{ route('profile_update', $profile->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Company Name</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="name" name="name"
                                    value="{{ $profile->company_name }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Company Title</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="name" name="title"
                                    value="{{ $profile->company_title }}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Company Address</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="name" name="address"
                                    value="{{ $profile->company_address }}">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Company Description </label>
                            <div class="col-lg-10">
                                <textarea class="form-control" name="description" id="description" value="{{ $profile->company_description }}">{{ $profile->company_description }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Company Logo </label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="file" id="image" name="logo">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img id="previewImg"
                                            src="{{ asset($profile->logo) }}"
                                            style="max-width: 100px; max-height:150px; margin-top: 20px;">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">About Images </label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="file" id="favicon" name="about_image">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img id="previewImg"
                                            src="{{asset( $profile->about_image) }}"
                                            style="max-width: 100px; max-height:150px; margin-top: 20px;">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="fb" class="control-label col-lg-2">Phone Number</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="fb" name="phone_number"
                                    value="{{ $profile->phone_number }}" placeholder="">
                                @error('phone_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>    
                        
                        <div class="form-group ">
                            <label for="fb" class="control-label col-lg-2">Email Address</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="fb" name="email_address"
                                    value="{{ $profile->email_address }}" placeholder="">
                                @error('email_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="fb" class="control-label col-lg-2">Facebook</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="fb" name="fb"
                                    value="{{ $profile->fb }}" placeholder="https://facebook.com/username/">
                                @error('fb')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="insta" class="control-label col-lg-2">Instagran</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="insat" name="insta"
                                    value="{{ $profile->insta }}" placeholder="https://instagran.com/username/">
                                @error('insta')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="twiiter" class="control-label col-lg-2">Twitter</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="text" id="twitter" name="twitter"
                                    value="{{ $profile->twitter }}" placeholder="https://twitter.com/username/">
                                @error('twitter')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="map" class="control-label col-lg-2">Map Link</label>
                            <div class="col-lg-10">
                                <textarea class=" form-control" type="text" id="map" name="map" value= "{{ $profile->map }}"> {{ $profile->map }}</textarea>
                            </div>

                        </div>
                </div>
                {{-- <div class="form-group ">
                            <label for="image" class="control-label col-lg-2">Footer Image</label>
                            <div class="col-lg-10">
                                <input class=" form-control" type="file" id="image" name="footer_image">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img id="previewImg"
                                            src="{{ asset('assets/admin/uploads/companyprofile') }}/{{ $profile->footer_image }}"
                                            style="max-width: 100px; max-height:100px; margin-top: 20px;">
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <div class="pull-right">
                            <input class="btn btn-danger" type="submit" value="Submit">
                            <a href="{{ route('profile_index') }}" class="btn btn-default" type="button">Cancel</a>
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
