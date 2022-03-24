@extends('front.newhome')

@section('isi_content')
   
<div id="container" style="padding:40px; box-sizing:border-box;">

<div class="col-md-12">

    <div class="row" id="div_element_items">

    </div>

    <div class="col-md-12">
        <Button class="btn btn-success form-control text-white" onClick="fetch_product_more(<?php echo ($totals); ?>,this)"> Load More</Button>
    </div>

    <!-- <div id="pagination">
        <div style="float:left; margin:20px 30px;">
            Total <b> ( <?php //echo ($totals); ?> )</b> Data Keseluruhan
        </div>

        <div style="float:right; margin:20px 30px;">
            <ul class="pagination">
                @include('admin.pagination.limit_links', ['paginator' => $data])
            </ul>
        </div>
    </div> -->

</div>

</div>

@stop