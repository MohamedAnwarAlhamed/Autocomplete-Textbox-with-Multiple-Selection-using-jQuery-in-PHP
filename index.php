<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocomplete Textbox with Multiple Selection using jQuery in PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/token-input.css" />
</head>
<body>
<?php
if(isset($_POST['submit'])){
    // Get selected skills
    $selected_skills_ids = $_POST['skill_input'];
 
 echo $selected_skills_ids;
}
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <form method="post" action="">
                    <p>
                    <h1>Autocomplete Textbox with Multiple Selection using jQuery</h1>
                    </p>
                    <p>
                    <h4>Programming Skills</h4>
                    </p>
                    <input type="text" name="skill_input" id="skill_input" class="form-control" /><br />
                    <input type="submit" name="submit" value="SUBMIT" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
    <!-- Tokeninput plugin library -->
    <script src="js/jquery.tokeninput.js"></script>
    <script>
        var skills = [
      {id: 1, name: "Go"},
      {id: 2, name: "AngularJS"},
      {id: 3, name: "Kotlin"},
      {id: 4, name: "Asp"},
      {id: 5, name: "CSS"},
      {id: 6, name: "HTML"},
      {id: 7, name: "Laravel"},
      {id: 8, name: "Codeigniter"},
      {id: 9, name: "Cakephp"},
      {id: 10, name: "Wordpress"},
      {id: 11, name: "Symfony"},
      {id: 12, name: "Yii"},
      {id: 13, name: "Zend Framework"},
      {id: 14, name: "PyQT"},
      {id: 15, name: "Java"},
      {id: 16, name: "JavaScript"},
      {id: 17, name: "Tkinter"},
      {id: 18, name: "WxPython"},
      {id: 19, name: "MySQL"},
      {id: 20, name: "NodeJs"},
      {id: 21, name: "Django"},
      {id: 22, name: "Perl"},
      {id: 23, name: "PHP"},
      {id: 24, name: "Python"},
      {id: 25, name: "Ruby"},
      {id: 26, name: "TurboGears"},
      {id: 27, name: "Web2py"},
      {id: 28, name: "SQL"},
      {id: 29, name: "Flask"}
    ];
    $(document).ready(function() {
        $("#skill_input").tokenInput(skills);
    });
    </script>


</body>

</html>