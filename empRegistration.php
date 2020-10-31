<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script>
            <script>
                $(document).ready(function()
                {
                    $("#form_register").validate(
                    {
                        rules:{
                            name:{
                                required: true
                            },
                            phoneNo:{
                                required: true,
                                minlength:10,
                                maxlength:10,
                                number: true
                            },
                            email:{
                                required:true,
                                email:true
                            },
                            age:{
                                required: true,
                                minlength:2,
                                maxlength:2,
                                number: true
                            },
                            experience: {
                                required: {
                                    depends: function(element){
                                    if('none' == $('#experience').val()){
                                        $('#experience').val('');
                                    }
                                    return true;
                                }
                                }
                            },
                            "skill[]": {
                                required: true,
                                minlength: 1
                            },
                            fileupload: {
                                required: true
                            }
                        },
                        messages:{
                            name:{
                                required: "Please Enter Name",
                            },
                            phoneNo:{
                                required: "Please Enter Phone No",
                            },
                            email:{
                                required: "Please Enter Email",
                            },
                            age:{
                                required: "Please Enter Age",
                            },
                            experience: {
                                required: "Please select experience",
                            },
                            "skill[]": {
                                required: "Please select skill",
                            },
                            fileupload: {
                                required: "please select file"
                            }
                        }
                    });
                });
            </script>
    </head>
    <body>
        <?php
            include_once("connection.php");
                if (isset($_POST['submit'])) {
                    $allowed = array('pdf', 'doc', 'docx');
                    $filename = $_FILES['fileupload']['name'];
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if (!in_array($ext, $allowed)) {
                        echo "Please enter pdf,doc or docx file";
                    }
                    else{
                        $target_Folder = "upload/";
                        $target_Path = $target_Folder.basename( $_FILES['fileupload']['name'] );
                        $savepath = $target_Path.basename( $_FILES['fileupload']['name'] );
                        $file_name = $target_Folder . $filename;
                        move_uploaded_file( $_FILES['fileupload']['tmp_name'],$target_Path );
                    }             
                }
        ?>
        <div class="container">
            <div class="row">
                <h3>Application Form</h3>
                <div class="col-sm-8">
                    <form method="POST" enctype="multipart/form-data" id="form_register">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="phoneNo">Phone No:</label>
                            <input type="text" class="form-control" id="phoneName" placeholder="Enter Phone No" name="phoneNo">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="text" class="form-control" id="age" placeholder="Enter Age" name="age">
                        </div>
                        <div class="form-group">
                            <label for="experience">Experience:</label>
                            <select name="experience" class="form-control" id="experience">
                                <option value="none">Please select Experience</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="skill">Skill:</label>
                            <div class="checkbox" name="skill">
                                <label><input type="checkbox" name="skill[]" value="sports">Sports</label>
                                <label><input type="checkbox" name="skill[]" value="reading">Reading</label>
                                <label><input type="checkbox" name="skill[]" value="programming">Programming</label>
                                <label><input type="checkbox" name="skill[]" value="dance">Dance</label>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label for="resume">Resume:</label>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="form-control" name="fileupload" id="fileupload">
                                <p id="fileupload"></p>
                            </div>
                        </div>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>