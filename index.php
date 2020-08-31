<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Advent+Pro' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <script src="https://demos.jquerymobile.com/1.4.2/js/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    

    <script src="https://kit.fontawesome.com/93fdec6f46.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://demos.jquerymobile.com/1.4.2/js/jquery.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


    <link rel="icon" href="final.jpg" type="image/gif" sizes="16x16">
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>

  


</head>

<body style="overflow-x: hidden; background-color:#F7F7F7">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="logo.png"width="100px" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
<div class="col-xl-4 col-lg-4 col-sm-1 col-xs-1"></div>
<div class="col-xl-4 col-lg-4 col-sm-10 col-xs-10">
<div class="input-group mb-3" style="margin-top:40px;">
  <input type="text" class="form-control" id="handle" placeholder="Twitter Handle" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" onclick="pStart()"id="button-addon2">Search</button>
  </div>
</div>
</div>
</div>
<div class="row"> 
<div class="col-4"></div>
<div id="child" class="col-6">

</div>
</div>

<script>
function loadData(handle){
    console.log("CALLED LoadData")
    $("#child").empty()
                $("#child").append(`<div class="spinner-border text-primary" style="margin-left:30%"role="status">
                <span class="sr-only">Loading...</span>
                </div>`);
    $.ajax({
            url: "http://127.0.0.1:5000/offensive/"+handle,
            
            dataType: "json",
            type: "GET",
            success: function(response) {

                data = eval(response);
                $("#child").empty();
                $("#child").append(`<h1 style="font-size:30px; margin-left:18%;">Posts You Should Review</h1>`);

                console.log("success");
                console.log(data);
                for(i = 0; i<data.length; i++){
                  num = (data[i]["Num"])
                  rating = (data[i]["Rating"])
                  ratingInt = (rating.substring(1,rating.length-1))
                  text = (data[i]["Text"])
                  name = ((data[i]["Text"]).split('\n')[0])
                  date = ((data[i]["Text"]).split('\n')[3])
                  pos = 4
                  x=(text.split(/\r\n|\r|\n/).length)
                  textFinal = "";
                  for(y = pos; y<x;y++){
                    textFinal+=((data[i]["Text"]).split('\n')[y])
                  }

                  if(ratingInt >=0.5){
                    $("#child").append(`<div class="card" style="width: 70%; margin-bottom:25px;">
                    <div class="card-body"  margin-button:50px;">
                      <h5 class="card-title">${name}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">${date}</h6>
                      <p class="card-text">${textFinal}</p>
                      <a href="#" class="card-link"></a>
                      <a href="#" class="card-link"></a>
                    </div>
                  </div>`

                  )
                  }
                  
                }
            }

            ,
            error: function(){
              console.log("error")
          }

        });}
function pStart()
{
    loadData(document.getElementById("handle").value)
}
</script>
</body>