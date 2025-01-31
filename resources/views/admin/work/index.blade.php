@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0"></h4>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">


                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">اضافه جديده</button>
                        @include('admin.work.create')



                    <br>
                    <br>
                    <br>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>الاسم بالعربي</th>
                            <th>الاسم بالانجليزي</th>

                            <th>الصوره</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$row->name_ar}}</td>
                                <td>{{$row->name_en}}</td>

                                <td>
                                    @if($row->photo)
                                        <img src="{{ asset('storage/' . $row?->photo?->filename) }}" width="80px" height="80px" alt="">
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal{{$row->id}}"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleted{{$row->id}}"><i class="fa fa-trash"></i></button>
                                </td>

@include('admin.work.edit')
@include('admin.work.deleted')
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


@section('js')
@endsection
