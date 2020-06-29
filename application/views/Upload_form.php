<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body class="animsition">
    <div class="page-wrapper">
    	            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


  					<div class="col-lg-12">
                             <div class="card">
                                    <div class="card-header">
                                        <strong>Upload Documents</strong> 
                                    </div>

                                  


                                    <div class="card-body card-block">
                                        <form action="<?php echo site_url('Main_controller/save_doc_controller');?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                           
                                          <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="title" name="title" placeholder="Text" class="form-control" required>

                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file"  name="upload_doc" id="upload_doc" multiple="" class="form-control-file" required>
                                                     <small class="help-block form-text">Please upload only pdf, xlsx, docx, jpg, png, csv </small>
                                                </div>
                                            </div>

             

                                     <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                       
                                    </div>
                               </form><br>

                                
                   

              <div class="row">
                  <div class="col-md-12">
                        <!--DATA TABLE -->
                     <h3 class="title-5 m-b-35">All Files</h3>
                             
                        <div class="table-responsive table-responsive-data2">
                           <table class="table" id="document_table">
                             <thead>
                               <tr>
                                 <th>Sr no.</th>
                                 <th>File</th>
                                  <th>Title</th>
                                  <th>Date</th>
                                  <th>Delete</th>
                                </tr>
                             </thead>
                             <tbody>
                             	 <?php if($this->session->flashdata('file_delete')){?>
                 					 <div class="alert alert-success" role="alert">
                    					<p><?php echo $this->session->flashdata('file_delete');?></p>
                 					 </div>
                 				 <?php }?>


                           		<?php 
                                 $Sr_no=1;
                                 foreach ($downloads as $item)
                                  {?>
                                  	<tr class="tr-shadow">
                                     <td><?php echo $Sr_no;?></td> 
                                      <td title="Download "><a href="<?php echo base_url('./assets/Uploads/'. $item->upload_document);?>"><?php echo $item->upload_document;?></a></td>
                                         	 

                                      <td><?php echo $item->doc_title;?></td>
                                      <td><?php echo $item->upload_date;?></td>
                                      <td>
                                      	<div class="table-data-feature" style="position:absolute">
                                
                                          
                                          <button>
                                            <a class="item btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" href="<?php echo site_url('Main_controller/delete_document/'.$item->document_id);?>" onclick="return confirm('Are you sure you want to delete this file')"><i class="zmdi zmdi-delete"></i></a>
                                        </button>
                                                       
                                          </div>
                                         </td>

                                        </tr>

                                        <?php
                                          	$Sr_no++;
                                        }?>

            							</tbody>
            						</table>
          						</div>
           				 </div-->
					</div>
      		 </div>
    </div>
   </div>
</div>
</div>
</div>
</div>
</body>
