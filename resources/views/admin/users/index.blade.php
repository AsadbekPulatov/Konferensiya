@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Informatsiya</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('info.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                           Qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table width="100%" class="table-bordered table-striped" id="mytable">
                        <thead>
                        <tr>
                            <th  scope="col">Id</th>
                            <th  scope="col">Nomi</th>
                            <th  scope="col">Vaqti</th>
                            <th  scope="col" class="col-2">Sho'balar</th>
                            <th  scope="col">Shartlar</th>
                            <th  scope="col">Ohirgi muddat</th>
                            <th  scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($info as $key => $inf)
                            <tr>
                                <td >{{$key+1}}</td>
                                <td >{{$inf->nomi}}</td>
                                <td>{{$inf->vaqti}}</td>
                               <td>{{$inf->shobalar}}</td>
                                <td >{{$inf->shartlar}}</td>
                                <td>{{$inf->deadline}}</td>



                                <td>
                                    <form action="{{ route('info.destroy',$inf->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-warning btn-sm" href="{{ route('info.edit',$inf->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>

                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
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

    <script src="{{asset('/assets/js/core/jquery.3.2.1.min.js')}}"></script>
{{--    <script>--}}
{{--        $(document).ready( function () {--}}
{{--            $('#mytable').DataTable({--}}
{{--                "language": {--}}
{{--                    "lengthMenu": "_MENU_",--}}
{{--                    "zeroRecords": "???????????????? ????????????",--}}
{{--                    "info": "_PAGE_ of _PAGES_",--}}
{{--                    "infoEmpty": " ",--}}
{{--                    "search":"??????????????:",--}}
{{--                    "paginate": {--}}
{{--                        "first": "??????????????",--}}
{{--                        "previous": "??????????????",--}}
{{--                        "next": "??????????????",--}}
{{--                        "last": "????????????"--}}
{{--                    },--}}
{{--                }--}}
{{--            });--}}
{{--        } );--}}
{{--    </script>--}}
@endsection

