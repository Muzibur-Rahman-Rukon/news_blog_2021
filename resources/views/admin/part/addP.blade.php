@extends('admin.admin_master')
@section('content')


<section class="content-header">
    <center><h3>Add new Product</h3></center>
</section>

<!-- Main content -->
<section >
   

        <div class="panel ">

            <div class="panel-body">


              

                    <h3 style="color:green">
                    <?php
                     $message=Session::get('message');
                     if($message){
                         echo $message;
                         Session::put('message',null);
                     }
                    ?>
                    </h3>

                   			

                    {!! Form::open(['url' => '/save_category','method' => 'post']) !!}


                        <div class="form-group"> 

                            <input type="text" class="form-control input-lg" placeholder="Category Name" name="category_name" value="" />

                            <div class="error"></div>

                        </div>


                        <div class="form-group"> 

                            <textarea name="category_description" placeholder="Category Description" class="form-control input-lg" ></textarea>
                            <div class="error"></div>

                        </div>
                        <div class="form-group"> 

                            <label type="text" class="form-control input-lg" placeholder="Publication Status"  value="" />
                            <select name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpulished</option>
                           
                            </select>

                            <div class="error"></div>

                        </div>


                       

                        <div class="form-group"> 

                            <input type="submit" class="btn btn-success" style="background: #96588A;" value="Add Product" />
                        </div>

                        {!! Form::close() !!}

            

            </div>
        </div>
  

    <script src="asset/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript"> 
        $(document).ready( function() {
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                log = label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                readURL(this);
            }); 	
        });

    </script>

    <style type="text/css"> 

    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload{
        width: 100%;
    }
    .error{
        color: red;
    }
</style>


</section>
@endsection