@extends('layouts.backend.app')
@section('title','Section,article,rules')

@push('css')
    <link href="{{asset('public/assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <a class="btn btn-primary waves-effect" href="{{route('admin.post.create')}}"><i class="material-icons">add</i>Add New Post</a>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            All Post
                            <span class="badge bg-blue">{{$post->count()}}</span>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Division</th>
                                    <th>Civil</th>
                                    <th>act</th>
                                    <th>section</th>
                                    <th>Ref</th>
                                    <th>Body</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Division</th>
                                    <th>Civil</th>
                                    <th>act</th>
                                    <th>section</th>
                                    <th>Ref</th>
                                    <th>Body</th>
                                    <th>Action</th>

                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($post as $key=>$posts)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{!! html_entity_decode($posts->title)!!}</td>
                                        <td>{{$posts->category}}</td>
                                        <td>{{$posts->civil}}</td>
                                        <td>{{$posts->act}}</td>
                                        <td>{{$posts->section}}</td>
                                        <td>{{$posts->reference}}</td>
                                        <td>{!! html_entity_decode($posts->body) !!}</td>
                                        <td class="text-center">
                                            <a href="{{route('admin.post.edit',$posts->id)}}" class="btn btn-info waves-effect">
                                                <i class="material-icons">edit</i>
                                            </a>

                                            <button class="btn btn-danger waves-effect" type="button" onclick="deletetag({{$posts->id}})">
                                                <i class="material-icons">delete</i>
                                            </button>
                                            <form id="delete-form-{{$posts->id}}" action="{{route('admin.post.destroy',$posts->id)}}" method="post" style="display: none">
                                                @csrf
                                                @method('DELETE')

                                            </form>

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
        <!-- #END# Exportable Table -->


    </div>

@endsection

@push('js')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('public/assets/backend/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('public/assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('public/assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('public/assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('public/assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('public/assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/assets/backend/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{asset('public/assets/backend/js/select2.js')}}"></script>

    <script type="text/javascript">
        function deletetag(id) {
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>

@endpush
