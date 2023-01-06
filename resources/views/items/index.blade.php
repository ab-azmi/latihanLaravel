@extends('app.app')

@push('page-style')
    <!-- Custom styles for this page -->
    @vite('public/assests/vendor/datatables/dataTables.bootstrap4.min.css')
@endpush

@section('table')
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Table Items</h1>    
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between items-center">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                <a href="http://" class="btn btn-sm btn-primary">Create</a>
                <a href="{{ route('items.export') }}/" class="btn btn-sm btn-success">Export Excel</a>
                <a href="{{ route('items.export-pdf') }}/" class="btn btn-sm btn-success">Export Pdf</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $no=>$item)
                            <tr class="">
                                <td class="">
                                    {{ $no + $items->firstItem() }}
                                </td>
                                <td class="">
                                    {{ $item->name }}
                                </td>
                                <td class="">
                                    {{ $item->type->name ?? '' }}
                                </td>
                                <td class="">
                                    {{ $item->quantity }}
                                </td>
                                <td class="">
                                    ${{ $item->price }}
                                </td>
                                <td class="d-flex justify-content-around">
                                    <form action="{{ route('items.delete', $item) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('items.edit', $item) }}" class="btn btn-sm btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
    <!-- /.container-fluid -->
@endsection

@push('page-script')
    <!-- Page level plugins -->
    @vite('public/assets/vendor/datatables/jquery.dataTables.min.js')
    @vite('public/assets/vendor/datatables/dataTables.bootstrap4.min.js')
    
    <!-- Page level custom scripts -->
    @vite('public/assets/js/demo/datatables-demo.js')
@endpush