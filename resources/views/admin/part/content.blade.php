@extends('master')
@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="box">
            <div class="box-header" style="padding:10px;">
              <h3 class="box-title">Product Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                 <colgroup>
                        <col>
                        <col width="100">
                    </colgroup>    
                <tr>
                  <th>Summary</th>
                  <th>Total Products</th>
                </tr>
  
                 <tr>
                  <td>Total Products</td>
                  <td>333</td>
                </tr> 
                    
    

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            
        <div class="box">
            <div class="box-header" style="padding:10px;">
              <h3 class="box-title">Category Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                 <colgroup>
                    <col>
                    <col width="100">
                </colgroup>    
                <tr>
                  <th>Summary</th>
                  <th>Total Category</th>
                </tr>
                    
                <tr>
                  <td>Total Category</td>
                  <td>99999</td>
                </tr> 

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            
        <div class="box">
            <div class="box-header" style="padding:10px;">
              <h3 class="box-title">Order Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                 <colgroup>
                        <col>
                        <col width="100">
                    </colgroup>    
                <tr>
                  <th>Summary</th>
                  <th>Total Order</th>
                </tr>
                    
                <tr>
                  <td>Total Order</td>
                  <td>19347</td>
                </tr> 

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 
            
         <div class="box">
            <div class="box-header" style="padding:10px;">
              <h3 class="box-title">Message Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                    <colgroup>
                        <col>
                        <col width="100">
                    </colgroup>
                    <tr>
                      <th>Summary</th>
                      <th>Total Message</th>
                    </tr>

                    <tr>
                      <td>Total Message</td>
                      <td>809347</td>
                    </tr> 

              </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->     
            
          <!-- /.box -->  
           
      
            
        </div><!--end col-->
          
        <div class="col-md-6">
           
           <div class="box">
            <div class="box-header" style="padding:10px;">
              <h3 class="box-title">User Statistics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                    <colgroup>
                        <col>
                        <col width="150">
                    </colgroup>
                    <tr>
                      <th>Summary</th>
                      <th>Total User</th>
                    </tr>

                    <tr>
                      <td>User</td>
                      <td>7098564</td>
                    </tr> 

              </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
       
        </div>  
          
          
      </div>
      <!-- /.row -->
      <!-- Main row -->


    </section>
    <!-- /.content -->
    @endsection