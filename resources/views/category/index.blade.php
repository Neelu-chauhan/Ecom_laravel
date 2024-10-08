@extends('layout.app')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="page-header p-3">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="page-title">{{ $title }}</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{route('category-type.create')}}">
                            <button type="button" class="modal-effect btn btn-primary">Add Category Type </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <!-- Add table rows here -->
                        @foreach ($categoryType as $type)
                            {{-- @dd($type); --}}
                        <tr>
                            <td>{{@$type['id']}}</td>
                            <td>{{@$type['name']}}</td>
                            <td>
                                @if(@$type['status'] == 1)
                                <button class="btn btn-success btn-sm">Active</button>
                                @else
                                <button class="btn btn-danger btn-sm">InActive</button>
                                @endif  
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                    </button>
                                    <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item" href="{{url('category-type/edit/'.$type['id'])}}">Edit</a></li>
                                    <li><a class="dropdown-item" href="{{url('category-type/destroy/'.$type['id'])}}">Delete</a></li>
                                    </ul>
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
@endsection
