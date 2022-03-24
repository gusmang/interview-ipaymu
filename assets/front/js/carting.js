var items = [];
//localStorage.clear();
console.log(localStorage.getItem("cartItems"));

const img_assets = "public/GambarProduct/";

var productsName_array = [];
var productsIndex_array = [];
var productsDesc_array = [];
var productsImg_array = [];
var productsPrice_array = [];

var inc_index = 0;

const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('page');

function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

//alert(getParameterByName('page'));
var page_loads = 1;

function fetch_product(){
    //page_loads++;
    $.ajax({
        type:"GET",
        url:url_menu_apis+"/get_product_list?page=",
        data:"",
        dataType:"json",
        async:false,
        success:function(data){
            $.each(data.data, function(index,element){
                productsName_array.push(element.nama_product);
                productsIndex_array.push(index+1);
                productsDesc_array.push(element.deskripsi);
                productsImg_array.push(element.foto);
                productsPrice_array.push(element.harga);
            })
        }
    });

    
}

fetch_product();

function fetch_product_more(totalpage , input){
    page_loads++;
    $.ajax({
        type:"GET",
        url:url_menu_apis+"/get_product_list?page="+page_loads,
        data:"",
        dataType:"json",
        async:false,
        success:function(data){
            $.each(data.data, function(index,element){
                productsName_array.push(element.nama_product);
                productsIndex_array.push(inc_index+1);
                productsDesc_array.push(element.deskripsi);
                productsImg_array.push(element.foto);
                productsPrice_array.push(element.harga);

                append_template_new(inc_index,element.nama_product);
                inc_index++;
            })
        }
    });

    //alert(totalpage);

    if(page_loads >= totalpage){
        $(input).hide();
    }

    
}

function append_template_new(index,element){
   // $.each(productsName_array , function(index,element){
        const asset_img = img_assets + productsImg_array[index];
        const header    = '<div class="col-md-4" style="margin-top:30px;">';
        const header2   = '<div class="card">';
        const headerImg = '<img src="'+asset_img+'" style="width:100%; height:220px; object-fit:cover;" alt="..." />';
        
        const div_cart_items = '<h5 class="card-title">'+element+'</h5>'+"<p class='card-text'>"+productsDesc_array[index]+"</p>"+"<p class='card-text text-left'><b> Rp. "+toRupiah(productsPrice_array[index])+"</b></p>"
                                +'<a href="javascript:void(0)" class="btn btn-primary float-right" id="div_add_cart_'+productsIndex_array[index]+'" onclick="add_to_cart('+productsIndex_array[index]+');"><i class="bi bi-plus"></i> Add To Cart</a>'
                                +'<a href="javascript:void(0)" class="float-right" id="div_added_cart_'+productsIndex_array[index]+'" style="color:green; display:none;"><p></p><i class="bi bi-check" style="font-size:15px;"></i> In Cart</a>';
        
        const cardBody  = '<div class="card-body">'+div_cart_items+'</div>';

        const templates = header+header2+headerImg+cardBody+"</div></div>";

        $("#div_element_items").append(templates);

        validate_input();
    //})
}


function append_template(){
    $.each(productsName_array , function(index,element){
        const asset_img = img_assets + productsImg_array[index];
        const header    = '<div class="col-md-4" style="margin-top:30px;">';
        const header2   = '<div class="card">';
        const headerImg = '<img src="'+asset_img+'" style="width:100%; height:220px; object-fit:cover;" alt="..." />';
        
        const div_cart_items = '<h5 class="card-title">'+element+'</h5>'+"<p class='card-text'>"+productsDesc_array[index]+"</p>"+"<p class='card-text text-left'><b> Rp. "+toRupiah(productsPrice_array[index])+"</b></p>"
                                +'<a href="javascript:void(0)" class="btn btn-primary float-right" id="div_add_cart_'+productsIndex_array[index]+'" onclick="add_to_cart('+productsIndex_array[index]+');"><i class="bi bi-plus"></i> Add To Cart</a>'
                                +'<a href="javascript:void(0)" class="float-right" id="div_added_cart_'+productsIndex_array[index]+'" style="color:green; display:none;"><p></p><i class="bi bi-check" style="font-size:15px;"></i> In Cart</a>';
        
        const cardBody  = '<div class="card-body">'+div_cart_items+'</div>';

        const templates = header+header2+headerImg+cardBody+"</div></div>";

        $("#div_element_items").append(templates);
        inc_index++;
    })
}

append_template();



function append_cart_template(){
    const items_array_list = JSON.parse(localStorage.getItem("cartItems"));
    $("#div_cart_list_element").html("");

    $.each(items_array_list , function(index,element){
        const indexElement = element.index - 1;
        const asset_img = img_assets + productsImg_array[indexElement];
        const productCartIndex = productsIndex_array[indexElement];
        const produtcCartPrice = toRupiah(productsPrice_array[indexElement]);
        const productCartName = productsName_array[indexElement];
        const productsCartDesc = productsDesc_array[indexElement].substring(0,25)+" ...";
        const QtyProduct    = element.qty;

        const subTotalPrice = toRupiah(element.price * element.qty);

        const header    = '<div class="col-md-12"  style="margin-top:30px; color:#FFFFFF;"><div class="row">';
        const header2   = '<div class="col-md-6">';
        const headerImg = '<img src="'+asset_img+'" style="width:100%; height:150px; object-fit:cover;" alt="..." /><p></p><button class="form-control btn-warning" onclick="hapus_items('+productCartIndex+','+element.index+')"><i class="bi bi-trash"></i> Hapus</button></div>';
        
        const div_cart_items = '<h5 class="card-title">'+productCartName+'</h5>'+"<p class='card-text'>"+productsCartDesc+"</p>"+"<p class='card-text text-right'><b> Rp. <span id='normal_qty_item_"+productCartIndex+"'>"+produtcCartPrice+"</span></b></p>"
                                +'<div class="float-right text-center" style="padding:3px; border:1px solid #FFFFFF; font-size:14px; width:25px; cursor:pointer;" onclick="set_value('+index+',\'#div_qty_item_'+productCartIndex+'\',\'#sp_qty_item_'+productCartIndex+'\',\'#normal_qty_item_'+productCartIndex+'\',\'#total_qty_item_'+productCartIndex+'\',1);"> <i class="bi bi-plus"></i> </div>'
                                +'<div class="float-right text-center" style="padding:3px; border:1px solid #FFFFFF; font-size:14px; width:40px;"> <div  style="border:none; width:33px; background:none; text-align:center; color:#FFFFFF;" id="div_qty_item_'+productCartIndex+'"> '+QtyProduct+' </div> </div>'
                                +'<div class="float-right text-center" style="padding:3px; border:1px solid #FFFFFF; font-size:14px;  width:25px; cursor:pointer;" onclick="set_value('+index+',\'#div_qty_item_'+productCartIndex+'\',\'#sp_qty_item_'+productCartIndex+'\',\'#normal_qty_item_'+productCartIndex+'\',\'#total_qty_item_'+productCartIndex+'\',0);"> - </div><br clear="all" /><hr style="border-bottom:1px solid #DDDDDD;" />'
                                +'<p class="card-text text-right"><b> Rp. <span id="total_qty_item_'+productCartIndex+'">'+subTotalPrice+'</span> </b></p>';
                                
        
        const cardBody  = '<div class="col-md-6">'+div_cart_items+'</div>';

        const templates = header+header2+headerImg+cardBody+"</div></div>";

        $("#div_cart_list_element").prepend(templates);
    })
}

function set_states_item(){
    const items_array = JSON.parse(localStorage.getItem("cartItems"));

    $.each(items_array , function(index , element){
        const Keys = new Object();
        Keys.index = element.index;
        Keys.qty = element.qty;
        Keys.price = element.price;
        Keys.name = element.name;

        items.push(Keys);
    });

}

function hapus_items(indexel,index){
    var con = confirm("Hapus Item ini ? ");

    if(con == true){
        const items_array = JSON.parse(localStorage.getItem("cartItems"));
        //items = [];
        localStorage.clear();
        items = [];

        //alert()

        $.each(items_array , function(index , element){
            //alert(index + " = " + indexel);
            if(element.index != indexel){
                const Keys = new Object();
                Keys.index = element.index;
                Keys.qty = element.qty;
                Keys.price = element.price;
                Keys.name = element.name;

                items.push(Keys);
            }
        });

        localStorage.setItem("cartItems" , JSON.stringify(items));

        append_cart_template();

        set_count_items("#jml_items");

        $("#div_add_cart_"+index).show();
        $("#div_added_cart_"+index).hide();
    }

}

function update_items(indexel){
      

}

set_states_item();

function set_count_items(id){
    const items_array2 = JSON.parse(localStorage.getItem("cartItems"));

    $(id).html(items_array2.length);
}

set_count_items("#jml_items");

function hapus_item(){

}

function add_to_cart(value){
    
    const Key1 = new Object();
    Key1.index = value;
    Key1.qty   = 1;
    Key1.price   = productsPrice_array[value-1];
    Key1.name    = productsName_array[value-1];

    //alert("price "+value);

    items.push(Key1);

    const prName = productsName_array[parseInt(value)-1];
    localStorage.setItem("cartItems", JSON.stringify(items));
    //localStorage.setItem("cartItemsIndex", JSON.stringify(items));

    $("#div_add_cart_"+value).fadeOut();
    $("#div_added_cart_"+value).fadeIn();

    set_count_items("#jml_items");

    append_cart_template();
    
    console.log("str_json",items);
}

function validate_input(){
    const items_array = JSON.parse(localStorage.getItem("cartItems"));

    $.each(items_array , function(index , element){
        //alert(element.index);
        $("#div_add_cart_"+element.index).hide();
        $("#div_added_cart_"+element.index).show();
    });

}

validate_input();

function toRupiah(value){
    const bilangan = value;
        
    const reverse = bilangan.toString().split('').reverse().join('');
    const ribuan  = reverse.match(/\d{1,3}/g);
    const result  = ribuan.join('.').split('').reverse().join('');

    return result;
}

function set_value(index,container,jml,normal,total,aksi){
    const items_array = JSON.parse(localStorage.getItem("cartItems"));

    //alert((parseInt(index)-1));

    if(aksi == 1){
        const value = parseInt($(container).html())+1;

        items_array[index]['qty'] = value;
        localStorage.setItem("cartItems" , JSON.stringify(items_array));
        
        const totalvalue = $(normal).html();
        const totalvalueall = totalvalue.replaceAll('.', '');

        const subtotal = value * parseInt(totalvalueall);

        $(container).html(value);
        $(jml).html(value);
        $(total).html(toRupiah(subtotal));
    }
    else{
        const value = parseInt($(container).html())-1;

        if(value > 0){
            items_array[index]['qty'] = value;
            localStorage.setItem("cartItems" , JSON.stringify(items_array));

            const totalvalue = $(normal).html();
            const totalvalueall = totalvalue.replaceAll('.', '');

            const subtotal = value * parseInt(totalvalueall);

            $(container).html(value);
            $(jml).html(value);
            $(total).html(toRupiah(subtotal));
        }
    }
}