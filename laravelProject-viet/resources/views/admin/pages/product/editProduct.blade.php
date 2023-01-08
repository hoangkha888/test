@extends("admin.layout.master_layout")

@section("title")
<title>Add product</title>
@endSection

@section("content")
<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Add Product</h1>
        <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
        <span><i class="mdi mdi-chevron-right"></i></span><a href="index.html">Product</a>
        <span><i class="mdi mdi-chevron-right"></i></span>Edit</p>
    </div>
    <div>
        <a href="/product/list-product" class="btn btn-primary"> View All
        </a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit Product</h2>
            </div>

            <div class="card-body">
                <div class="row ec-vendor-uploads">
                    <div class="col-lg-4">
                        <div class="ec-vendor-img-upload">
                            <div class="ec-vendor-main-img">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" class="ec-image-upload"
                                            accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"><img
                                                src="{{ asset('backend/img/icons/edit.svg') }}"
                                                class="svg_img header_svg" alt="edit" /></label>
                                    </div>
                                    <div class="avatar-preview ec-preview">
                                        <div class="imagePreview ec-div-preview">
                                            <img class="ec-image-preview"
                                                src="{{ asset('backend/img/products/vender-upload-preview.jpg') }}"
                                                alt="edit" />
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb-upload-set colo-md-12">
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload01"
                                                class="ec-image-upload"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload02"
                                                class="ec-image-upload"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload03"
                                                class="ec-image-upload"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload04"
                                                class="ec-image-upload"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload05"
                                                class="ec-image-upload"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-upload">
                                        <div class="thumb-edit">
                                            <input type='file' id="thumbUpload06"
                                                class="ec-image-upload"
                                                accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><img
                                                    src="{{ asset('backend/img/icons/edit.svg') }}"
                                                    class="svg_img header_svg" alt="edit" /></label>
                                        </div>
                                        <div class="thumb-preview ec-preview">
                                            <div class="image-thumb-preview">
                                                <img class="image-thumb-preview ec-image-preview"
                                                    src="{{ asset('backend/img/products/vender-upload-thumb-preview.jpg') }}"
                                                    alt="edit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ec-vendor-upload-detail">
                            <form  class="row g-3" action="/updatedata/{{$data[0]->id_product}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                {{-- <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Product name</label>
                                    <input type="text" name="title" value="{{$data[0]->title}}" class="form-control slug-title" id="inputEmail4">
                                </div> --}}

                                <div class="col-md-12">
                                    <label for="slug" class="col-12 col-form-label">Product name</label> 
                                    <div class="col-12">
                                        <input id="slug" name="title" value="{{$data[0]->title}}" class="form-control here set-slug" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Select Categories</label>
                                    <select name="category_name" id="Categories" class="form-select">
                                        <option selected>{{$data[0]->category_id}}</option>
                                        <option value="Iphone">Iphone</option>
                                        <option value="Sam Sung">Sam Sung</option>
                                        <option value="Xiaomi">Xiaomi</option>
                                        <option value="Sony">Sony</option>
                                        <option value="Google">Google</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="slug" class="col-12 col-form-label">Price</label> 
                                    <div class="col-12">
                                        {{-- <input type="text" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" > --}}
                                        <input id="slug"  name="price" value="{{$data[0]->price}}" class="form-control here set-slug" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="slug" class="col-12 col-form-label">Discount</label> 
                                    <div class="col-12">
                                        <input id="slug" name="discount" value="{{$data[0]->discount}}" class="form-control here set-slug" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Sort Description</label>
                                    <textarea name="description" class="form-control" rows="2">{{$data[0]->description}}</textarea>
                                </div>
                                
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    $("input[data-type='currency']").on({
        keyup: function() {
          formatCurrency($(this));
        },
        blur: function() { 
          formatCurrency($(this), "blur");
        }
    });
    
    
    function formatNumber(n) {
      // format number 1000000 to 1,234,567
      return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }
    
    
    function formatCurrency(input, blur) {
      // appends $ to value, validates decimal side
      // and puts cursor back in right position.
      
      // get input value
      var input_val = input.val();
      
      // don't validate empty input
      if (input_val === "") { return; }
      
      // original length
      var original_len = input_val.length;
    
      // initial caret position 
      var caret_pos = input.prop("selectionStart");
        
      // check for decimal
      if (input_val.indexOf(".") >= 0) {
    
        // get position of first decimal
        // this prevents multiple decimals from
        // being entered
        var decimal_pos = input_val.indexOf(".");
    
        // split number by decimal point
        var left_side = input_val.substring(0, decimal_pos);
        var right_side = input_val.substring(decimal_pos);
    
        // add commas to left side of number
        left_side = formatNumber(left_side);
    
        // validate right side
        right_side = formatNumber(right_side);
        
        // On blur make sure 2 numbers after decimal
        if (blur === "blur") {
          right_side += "00";
        }
        
        // Limit decimal to only 2 digits
        right_side = right_side.substring(0, 2);
    
        // join number by .
        input_val = left_side + "." + right_side + "VNĐ";
    
      } else {
        // no decimal entered
        // add commas to number
        // remove all non-digits
        input_val = formatNumber(input_val);
        input_val = input_val + " VNĐ";
        
        // // final formatting
        // if (blur === "blur") {
        //   input_val += "";
        // }
      }
      
      // send updated string to input
      input.val(input_val);
    
      // put caret back in the right position
      var updated_len = input_val.length;
      caret_pos = updated_len - original_len + caret_pos;
      input[0].setSelectionRange(caret_pos, caret_pos);
    }
    </script> --}}
@endSection

@section("customJs")
<script src="{{ asset('backend/plugins/tags-input/bootstrap-tagsinput.js') }}"></script>
@endSection