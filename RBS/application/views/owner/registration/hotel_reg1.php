<?php
include('owner_header.php');

?>

<form action="<?php echo site_url("Ownerctrl/imgup")?>"method="post" onsubmit="return" enctype="multipart/form-data">


<div class="col-lg-6" align="center">
                                <div class="card">
                                     <div class="card-header">
                                        <strong>Upload files</strong>
                                    </div>
                                    <div class="card-body card-block">

                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Identity Proof
                                                    (Voter ID Card//Aadhaar Card))</label>
                                                </div>
                                                <div class="col-12 col-md-9">

                                                    <input type="file" id="homeimg" name="homeimg"class="form-control-file" accept=".png, .jpg, .jpeg,.JPG" onchange="ValidateFileId()"; >
                                                    <label class="errortext" style="display:none; color:red" id="homeimg_1"></label><br>

                                    </div>
                                    </div>
                                    <script>
                            function ValidateFileId() {
                                var fuData = document.getElementById('homeimg');
                                var FileUploadPath = fuData.value;
                        
                        //To check if user upload any file
                                if (FileUploadPath == '') {
                                    $("#homeimg_1").html('Select An Image..!').fadeIn().delay(4000).fadeOut();
                        
                                } else {
                                    var Extension = FileUploadPath.substring(
                                            FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
                        
                        //The file uploaded is an image
                        
                        if (Extension == "png" || Extension == "JPG" || Extension == "jpeg" || Extension == "jpg") {
                                            }
                        
                        
                        //The file upload is NOT an image
                        else {
                            $("#homeimg_1").html('Photo only allows file types of PNG, JPG, JPEG...!').fadeIn().delay(4000).fadeOut();
                            document.getElementById('homeimg').value = "";
                        
                                }
                                }
                            }
                        </script>
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Hotel license</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="homeimg1" name="homeimg1"class="form-control-file"  accept=".png, .jpg, .jpeg,.JPG" onchange="ValidateFileUpload()";>
                                                    <label class="errortext" style="display:none; color:red" id="homeimg1_1"></label><br>

                                               </div>
                                               <script>
                            function ValidateFileUpload() {
                                var fuData = document.getElementById('homeimg1');
                                var FileUploadPath = fuData.value;
                        
                        //To check if user upload any file
                                if (FileUploadPath == '') {
                                    $("#homeimg1_1").html('Select An Image..!').fadeIn().delay(4000).fadeOut();
                        
                                } else {
                                    var Extension = FileUploadPath.substring(
                                            FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
                        
                        //The file uploaded is an image
                        
                        if (Extension == "png" || Extension == "JPG" || Extension == "jpeg" || Extension == "jpg") {
                                            }
                        
                        
                        //The file upload is NOT an image
                        else {
                            $("#homeimg1_1").html('Photo only allows file types of PNG, JPG, JPEG...!').fadeIn().delay(4000).fadeOut();
                            document.getElementById('homeimg1').value = "";
                        
                                }
                                }
                            }
                        </script>
                                    </div>


                                     <input type="hidden" name="h_id" value="<?php echo $hid ; ?>" >

                                    <div class="card-footer">
                                      <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit">
                                                  <i class="fa fa-dot-circle-o"></i> Submit
                                      </button>
                                  </div>
</form>














                                    </div>
                                </div>
 </div>


<?php
include('owner_footer.php');

?>