@extends('layouts.masters')


@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@endsection

@section('content')
    <div class="box">

        <div class="box-header">
            <h3 class="box-title">Laporan Sederhana</h3>
        </div>

        <div class="box-header">
            <a href="{{ route('exportExcel.LaporanAll') }}" class="btn btn-success">Export Excel</a>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <table id="finance-datatable" class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Products</th>
               
                    <th>Product Out</th>
                    <th>Tanggal Product Out</th>
                    <th>Product In</th>
                    <th>Tanggal Product In</th>
                  
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection

@section('bot')

    <!-- DataTables -->
    <script src=" {{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>


    <!-- InputMask -->
    <script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('assets/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('assets/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{ asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- bootstrap time picker -->
    <script src="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    {{-- Validator --}}
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>

    <script type="text/javascript">
       
            var table = $('#finance-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.financeDatatable') }}",
            columns: [
                {data: 'product_id', name: 'product_id'},
                {data: 'products_name', name: 'products_name'},
              
                {data: 'product_out', name: 'product_out'},
                {data: 'tanggal_product_out', name: 'tanggal_product_out'},
                {data: 'product_in', name: 'product_in'},
                {data: 'tanggal_product_in', name: 'tanggal_product_in'},
                
            ]
        });

    </script>

@endsection
