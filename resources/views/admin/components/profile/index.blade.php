@extends('admin.layout.app')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Company Profile</h3>
                            </div>
                            @if(session('status'))
                            <span class="alert alert-success">{{ session('status') }}</span>
                            @endif
                            {{-- <div class="col-auto text-end float-end ms-auto download-grp">                            
                                <a href="{{ route('testimonial_create') }}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i> &nbsp; Add New</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped" id="DataTables_Table_0">
                            <thead class="student-thread">
                                <tr>
                                    <th>Company Name</th>
                                    <th>Company Title</th>
                                    <th>Company Address</th>
                                    <th>Company Description</th>
                                    <th>Logo</th>
                                    <th>Contact Phone</th>
                                    <th>Contact Email</th>
                                    <th>About Image</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    
                                @foreach($profile as $item)
                                <td>{{$item->company_name }}</td>
                                <td>{{$item->company_title }}</td>
                                <td>{{$item->company_address }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($item->company_description, 100, $end='...') !!}</td>
                                <td>
                                  <img src="{{asset($item->logo)}}" alt="logo" width="150px" height="40px">
                                </td>
                               <td>{{ $item->phone_number }}</td>
                               <td>{{ $item->email_address }}</td>
                                <td>
aboutimage
                                </td>
                                
                               
                                <td class="text-end">
                                    <div class="actions ">
                                        <a href="{{ route('profile_edit',$item->id) }}"
                                            class="btn btn-sm bg-success-light me-2 ">
                                            <i class="feather-edit"></i>
                                        </a>
                                        </a>
                                    </div>
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
</div>
@endsection