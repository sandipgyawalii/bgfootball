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
                                    <h3 class="page-title">About</h3>
                                </div>
                                @if (session('status'))
                                    <span class="alert alert-success">{{ session('status') }}</span>
                                @endif
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="{{ route('about.create') }}" class="btn btn-primary"><i
                                            class="fas fa-plus"></i> &nbsp; Add New</a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped"
                                id="DataTables_Table_0">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Description</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($about as $item)
                                   
                                        <td>{{ $item->description }}</td>
                                        <td class="text-end">
                                            <div class="actions ">
                                                <a href="{{ route('about.edit',$item->id) }}"
                                                    class="btn btn-sm bg-success-light me-2 ">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <form action="{{ route('about.destroy',$item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure want to delete it (Delete about image first , Now press CANCEL) ?')" type="submit" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-trash"></i></button>
                                                </form>
                                                
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
