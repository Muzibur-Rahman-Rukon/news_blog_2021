@extends('admin.admin_master')
@section('content')


<section class="content-header">
    <center><h3>Add New Blog</h3></center>
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

                   			

                    {!! Form::open(['url' => '/save_blog','method' => 'post']) !!}


                        <div class="form-group"> 

                            <input type="text" class="form-control input-lg" placeholder="Blog Title" name="blog_title" value="" />

                            <div class="error"></div>

                        </div>


                        <div class="form-group"> 

                            <textarea name="blog_short_description" placeholder="Blog Short Description" class="form-control input-lg" ></textarea>
                            <div class="error"></div>

                        </div>
                        <div class="form-group"> 

                       <textarea name="blog_long_description" placeholder="Blog Long Description" class="form-control input-lg" ></textarea>
                       <div class="error"></div>

                       </div>
                       
                       

                        <div class="form-group"> 

<div class="input-group">
    <span class="input-group-btn">
        <span class="btn btn-success btn-file" style="background: #96588A;">
            Browse… <input type="file" id="imgInp"   name="blog_image" >
        </span>
    </span>
    <input type="text" class="form-control" >
</div>
<br />

<div class="show-image"> 

    <img id='img-upload' style="width:100px;height:100px;"/>

</div>

</div>

<div class="form-group"> 

<label type="text" class="form-control input-lg" placeholder="Publication Status"  value="" />Select Publication Status</label>
<select name="publication_status">
<option value="1">Published</option>
<option value="0">Unpulished</option>

</select>

<div class="error"></div>

</div>   
<div class="form-group"> 

<label type="text" class="form-control input-lg" placeholder="Select Category"  value="" />Select Category</lablel>
<select name="category_id">
<?php   
     foreach($all_category_info as $v_category){ 
 ?>
<option value=<?php echo $v_category->category_id ?>><?php 
               echo $v_category->category_name;
?></option>
<?php } ?>

</select>

<div class="error"></div>

</div>             

                        <div class="form-group"> 

                            <input type="submit" class="btn btn-success" style="background: #96588A;" value="Add Blog" />
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