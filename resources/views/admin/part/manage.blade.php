   
@extends('master')
@section('content')


  <!-- Content Header (Page header) -->
  <section class=" content-header"  id="contentheid">
    <div class="row">
     <div class="col-sm-12">
       <div class="">
         <center><h3> Manage Category</h3></center>
        
      </div>
    </div>
  </div>
  <!--end row --> 
</section>


<div class="settingstablebody box-body table-responsive no-padding">
  <table class="table">
    <tbody>

     <colgroup>
      <col width="100">
      <col>
      <col>
    </colgroup>

    <tr class="catmanageheader" style="background: #cabfbf;">
      <th>Category ID</th>    
      <th>Category Name</th>    
      <th>Satus</th>        
      <th width="10%;">Action</th>    
    </tr>

    <!-- start tr -->
    <?php
        foreach($all_category_info as $v_category){
    ?>
  
    <tr style="background: #e4e4e4;">
    <td>
        <div class="settingsinf">

        <?php
        echo $v_category->category_id;
    ?>
          
        
        </div>
      </td>
      

      <td>
        <div class="settingsinf">

        <?php 
        echo $v_category->category_name;
    ?>
          
        
        </div>
      </td>
      <td>
        <div class="settingsinf">

        <?php 
        if($v_category->publication_status==1){
    ?>
          
        <span class="label label-success">Published</span>
        <?php 
        } 
        else{
        ?>
          <span class="label label-danger">Unpublished</span>
          <?php
        }
        ?>
        </div>
      </td>
      

    

      <td>
        <div class="settinginfdetails">
          <p>
          <?php
          if($v_category->publication_status==1){
          ?>
          <a class="btn btn-success" href="{{URL::to('/unpublished_category',$v_category->category_id)}}">
          <i class="glyphicon glyphicon-volume-up"></i>
          </a>
          <?php }
          else{
          ?>
           <a class="btn btn-danger" href="{{URL::to('/published_category',$v_category->category_id)}}">
          <i class="glyphicon glyphicon-volume-off"></i>
          </a>
          <?php } ?>
          <a class="btn btn-primary" href="{{URL::to('/edit_category',$v_category->category_id)}}" >
          <i class="glyphicon glyphicon-pencil" ></i>          
            <a class="btn btn-danger" href="{{URL::to('/delete_category',$v_category->category_id)}}" onclick="myFunction();" >
          <i class="glyphicon glyphicon-scissors" ></i>
          </a>
          </div>
        </td>
      </tr> 
      <!--end tr --> 
      <?php    
        }
      ?>

    

    </tbody>
  </table>

  <!-- start pagination -->
  <div class="paginationtables">
    <ul style="list-style: none;">
      <center><li></li></center>

    </ul>
  </div>
  <!--end paginatioin -->



</div><!-- box header -->

</form>

<!-- /.box-body -->
</div>
<!-- /.box --> 
</div>  


</div>
<!-- /.row -->
<!-- Main row -->


</section>
<!-- /.content -->

@endsection