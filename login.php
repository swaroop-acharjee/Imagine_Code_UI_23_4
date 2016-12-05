<!DOCTYPE html>

<html>
<!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>quizard</title>

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="dist/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="dist/css/ripples.min.css" rel="stylesheet">


  <link href="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>

<div class="container" style="width: 700px; height:100px;">

 
  <div class="bs-docs-section">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
        </div>
      </div>
    </div>

    <div class="row">
      <div >
        <div class="well bs-component">
          <form class="form-horizontal">
            <fieldset>
              <legend>Log In Area</legend>
			  
			  <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">User Name</label>

                <div class="col-md-10">
                  <input type="text" class="form-control" id="inputText" placeholder="name of any participant">
                </div>
              </div>
			  
              <div class="form-group">
                <label for="inputPassword" class="col-md-2 control-label">Password</label>

                <div class="col-md-10">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
				 
				</div>
			   </div>
				  
                
              <br>
			  <br>
            </fieldset>
			<center>
			<a href="javascript:void(0)" class="btn btn-raised btn-warning">log in</a>
			<br>
			<a href="javascript:void(0)" class="btn btn-success">forgot password?</a>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
			<a href="javascript:void(0)" class="btn btn-raised btn-info">create new</a>
			</center>
		  </form>
        </div>
      </div>
      
    </div>
  </div>    
</div>
    
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="dist/js/ripples.min.js"></script>
<script src="dist/js/material.min.js"></script>
<script src="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>
</body>
</html>
