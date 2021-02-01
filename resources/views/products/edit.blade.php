@extends('includes/layout')

@section('content')
<body>
<div class="container lst">
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif
@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div> 
@endif
<form method="post" action="{{route('file.store',['id' => $product->id])}}" enctype="multipart/form-data">
{{csrf_field()}}
    <input  name="product_id" type="hidden" value="{{$product->id}}">
    <div class="input-group hdtuto control-group lst increment" >
    <input type="file" name="thumbnail[]" class="myfrm form-control">
    <div class="input-group-btn"> 
        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
    </div>
    </div>
    <div class="clone hide">
    <div class="hdtuto control-group lst input-group" style="margin-top:10px">
        <input type="file" name="thumbnail[]" class="myfrm form-control">
        <div class="input-group-btn"> 
        <!-- <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button> -->
        </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".btn-success").click(function(){ 
        var lsthmtl = $(".clone").html();
        $(".increment").after(lsthmtl);
        });
        $(".btn-danger").on("click",function(){$(this).parents(".hdtuto control-group lst").remove();
        });
    });
    </script>
</form>  
</div>

    
</body>

@stop