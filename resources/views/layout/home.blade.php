<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<style >
    .button2 {position:absolute;right:32%; bottom:20%;
        background-color: #FF7433;
        color: white;
        padding: 15px 60px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border: none;

    }
    .button1 {position:absolute;right:20%;bottom:20%;
        background-color: #FF7433;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border: none;
    }

    .text-block {
        position: absolute;
        bottom: 200px;
        right: 250px;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
    }
    .vl {
        position:absolute;left:5%;bottom:20%;
        border-left: 6px solid white;
        height: 300px;
    }
    .text {
        position: absolute;
        bottom: 200px;
        left: 100px;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
    }
    .text1 {
        position: absolute;
        bottom: 100px;
        left: 800px;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
        height: auto;
    }
    .alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
</head>


<body>




<div class="header" id="myHeader">
    <h2 class="logo">National University</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
    </label>

</div>



@yield('content')


<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

    $(document).ready(function(){
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    window.location.hash = hash;
                });
            }
        });
    });

</script>

</body>



</html>
