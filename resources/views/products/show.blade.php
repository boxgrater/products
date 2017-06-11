<div class="page-header">
  <div class="row">
    <div class="col-sm-8">
    <h1>{{ $product->description }}</h1>
  </div>
  <div class="col-sm-4">
    <a href="{{ route("products.edit", ['id'=> $product->id])}}" class="btn btn-success pull-right"> Edit</a>
  </div>
  </div> 
</div>

{!! Form::model($product, ['route' => ['products.show', $product->id], 'class'=> "form-horizontal", 'method'=> 'get']) !!}

<div class="form-group">
  {!! Form::label('plu', 'PLU',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('plu', $product->plu, ['class'=>"form-control", 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('brand', 'Brand',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('brand', $product->brand, ['class'=>"form-control", 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('name', 'Name',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('name', $product->name, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('description', 'Description',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('description', $product->description, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('merchant', 'Merchant',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('merchant', $product->merchant->name, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('purchase_price', 'Purchase Price',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('purchase_price', Bistro::money($product->purchase_price), ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('purchase_qty', 'Purchase Qty',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('purchase_qty', $product->purchase_qty, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('purchase_uom', 'Purchase UOM',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('purchase_uom', $product->purchase_uom, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('pack_qty', 'Pack Qty',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('pack_qty', $product->pack_qty, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('pack_size', 'Pack Size',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('pack_size', $product->pack_size, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('pack_uom', 'Pack UOM',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('pack_uom', $product->pack_uom, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<hr>

<div class="form-group">
  {!! Form::label('each_price', 'Each Price',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('each_price', $product->eachPrice, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('conversion_type', 'Conversion Type',['class'=>"control-label col-sm-2"]) !!}
  <div class="col-sm-10">
    {!! Form::text('conversion_type', $product->conversion_type, ['class'=>'form-control', 'readonly'=>true]) !!}
  </div>
</div>

{!! Form::close() !!}