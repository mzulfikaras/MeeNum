@extends('master')
@section('title', 'Data Order')
@section('data', 'active')
@section('main')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content data-order">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Outlet Name</th>
                <th>Order No</th>
                <th>Order Date</th>
                <th>Order Time</th>
                <th>Table No</th>
                <th>Product SKU</th>
                <th>Product Name</th>
                <th>Product UOM</th>
                <th>Product Variant SKU</th>
                <th>Product Variant Name</th>
                <th>Product Combo Name</th>
                <th>Product Combo SKU</th>
                <th>Product Group Name</th>
                <th>Brand Name</th>
                <th>Serial No</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Addon Price</th>
                <th>Discount</th>
                <th>Amount</th>
                <th>Cost Price</th>
                <th>Cost Amount</th>
                <th>Order Source</th>
                <th>Order Source Name</th>
                <th>Customer Id</th>
                <th>Sales By Id</th>
                <th>Serve By Id</th>
                <th>Payment Type Id</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($dataOrder as $data)
              <tr>
                <td>{{$data->outlet_name}}</td>
                <td>{{$data->order_no}}</td>
                <td>{{$data->order_date}}</td>
                <td>{{$data->order_time}}</td>
                <td>{{$data->table_no}}</td>
                <td>{{$data->product_sku}}</td>
                <td>{{$data->product_name}}</td>
                <td>{{$data->product_uom}}</td>
                <td>{{$data->product_variant_sku}}</td>
                <td>{{$data->product_variant_name}}</td>
                <td>{{$data->product_combo_name}}</td>
                <td>{{$data->product_combo_sku}}</td>
                <td>{{$data->product_group_name}}</td>
                <td>{{$data->brand_name}}</td>
                <td>{{$data->serial_no}}</td>
                <td>{{$data->qty}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->addon_price}}</td>
                <td>{{$data->discount}}</td>
                <td>{{$data->amount}}</td>
                <td>{{$data->cost_price}}</td>
                <td>{{$data->cost_amount}}</td>
                <td>{{$data->order_source}}</td>
                <td>{{$data->order_source_name}}</td>
                <td>{{$data->customer_id}}</td>
                <td>{{$data->sales_by_id}}</td>
                <td>{{$data->serve_by_id}}</td>
                <td>{{$data->payment_type_id}}</td>
              </tr>                  
              @endforeach
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection