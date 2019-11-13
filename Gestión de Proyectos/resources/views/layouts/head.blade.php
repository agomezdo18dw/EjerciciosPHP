    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/bootstrap/css/bootstrap.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel UD5</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ url("font-awesome/css/font-awesome.min.css") }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .op
          {
            width:850px;
            background:#e6e6e6;
            border-radius:8px;
            box-shadow:0 0 40px -10px #000;
            margin:auto;
            padding:60px 30px;
            max-width:calc(100vw - 40px);
            box-sizing:border-box;
            text-align: left;
          }
          input {
            padding:10px;
            box-sizing:border-box;
            background:none;
            outline:none;
            resize:none;
            border:0;
            font-family:'Montserrat',sans-serif;
            transition:all .3s;
            border-bottom:2px solid #bebed2}
          }

        input:focus {
          border-bottom:2px solid #78788c
        }
        p:before {
          content:attr(type);
          display:block;
          margin:28px 0 0;
          font-size:14px;
          color:#5a5a5a
        }
        .buttonform {
          float:right;
          padding:8px 12px;
          margin:8px 0 0;
          border:2px solid #78788c;
          background:0;
          color:#5a5a6e;
          cursor:pointer;
          transition:all .3s
        }
        table {
          width:100%
        }
        th, td {
          padding: 3px;
        }
        .error {
          color:red;
        }
/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
</style>