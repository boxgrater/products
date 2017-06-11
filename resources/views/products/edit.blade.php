@inject('products', 'BoxGrater\Products\Models\Product')
@inject('merchants', 'BoxGrater\Merchants\Models\Merchant')

<div class="page-header">
  <div class="row">
    <div class="col-sm-8">
      <h1>Edit Product</h1>
    </div>
  </div> 
</div>

{!! Form::model($product, ['route'=> ['products.create', $product->id], 'class'=>"form-horizontal", 'method'=>'put']) !!}
  
  <div class="form-group">
    {!! Form::label('plu', "PLU:", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::text('plu', old('plu'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('brand', "Brand:", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::text('brand', old('brand'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('name', "Name:", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::text('name', old('name'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('description', "Desc:", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::text('description', old('description'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('merchant_id', 'Merchant:', ['class'=>'control-label col-sm-2']) !!}
    <div class="col-sm-10">
      {!! Form::select('merchant_id', $merchants->listMerchants(), old('merchant_id'), ['class'=>'form-control']) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('purchase_price', "Purchase Price:", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::text('purchase_price', old('purchase_price'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('purchase_qty', "Purchase Qty:", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::text('purchase_qty', old('purchase_qty'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('purchase_uom', "Purchase UOM:", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::select('purchase_uom', ['ea' => 'ea', 'cs'=> 'case'], old('purchase_uom'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('pack_qty', "Pack Qty:", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::text('pack_qty', old('pack_qty'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('pack_size', "Pack Size:", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::text('pack_size', old('pack_size'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('pack_uom', "Pack UOM", ['class'=>"control-label col-sm-2"]) !!}
    <div class="col-sm-10">
      {!! Form::select('pack_uom', $products->uoms(), old('pack_uom'), ['class'=>"form-control"]) !!}
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit('Update', ['class'=> "btn btn-primary"]) !!}
    </div>
  </div>

  
{!! Form::close() !!}