@extends('libary.layout')
@section('title','Tables')
@section('table')
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title">Table Apartment</h2>
                <div class="form-group" style="margin-top: 10px">
                    <form action="/library/table/find" method="get">
                        @csrf
                        <div class="col-lg-8">
                            <label class="col-md-5 control-label" for="search">Search</label>
                            <div class="col-md-7">
                                <input type="text" name="search" class="form-control" id="search">
                            </div>
                        </div>
                        <button class="btn-facebook btn" style="margin-left: 30px">Filter</button>
                    </form>
                </div>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-none">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>BookId</th>
                            <th>AuthorId</th>
                            <th>Title</th>
                            <th>ISBN</th>
                            <th>Pub Year</th>
                            <th>Available</th>
                            <th style="width: 80px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td>{{$item->bookid}}</td>
                                <td>{{$item->authorid}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->ISBN}}</td>
                                <td>{{$item->pub_year}}</td>
                                <td>{{$item->available}}</td>
                                <td>
                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                    <a style="padding-left: 5px" href="#"><i class="fa fa-pencil"></i></a>
                                    <a style="padding-left: 5px" href="#"><i class="fa fa-info"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row datatables-footer">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="datatable-default_info" role="status" aria-live="polite">
                            Showing 41 to 50 of 57 entries
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
