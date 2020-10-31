<html>
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h3>Application Form</h3>
                <div class="col-sm-8">
                    <form method="POST" enctype="multipart/form-data">
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
                            <select name="experience" class="form-control">
                                <option value="#">Please select Experience</option>
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
                                <label><input type="checkbox" name="sports">Sports</label>
                                <label><input type="checkbox" name="reading">Reading</label>
                                <label><input type="checkbox" name="programming">Programming</label>
                                <label><input type="checkbox" name="dance">Dance</label>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label for="resume">Resume:</label>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="form-control" id="fileupload">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>