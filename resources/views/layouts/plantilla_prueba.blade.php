<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TriniTempus</title>

    <!--link js-->
    <script src="stiloMenu.js"></script>
    <!--icono pestaña-->
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
			/*
			background-image: {{asset('img/negocio.jpg')}};
			background-image: url({{asset('img/negocio.jpg')}})
			*/
            /*background-color: #A0E5EB;*/
           /* background: rgba(182,194,237,1);*/

            color: #636b6f;
            font-family: 'Exo', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            
           /* background: -webkit-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:    -moz-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:     -ms-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:      -o-linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);
            background:         linear-gradient(90deg, #e74d6b 10%, #8cc8ac 90%);*/
            
            /*background: -webkit-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:    -moz-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:     -ms-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:      -o-linear-gradient(90deg, #65997d 10%, #fccb6e 90%);
            background:         linear-gradient(90deg, #65997d 10%, #fccb6e 90%);*/
            
            background: -webkit-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:    -moz-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:     -ms-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:      -o-linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);
            background:         linear-gradient(90deg, #4c515b 10%, #fccb6e 90%);

        }
        
        .full-height {
            height: 100vh;
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
        
        .fontColor {
            color: #312828;
        }
        
        .title {
            font-size: 84px;
        }
        
		.links>a{
			color: white;
			text-decoration: none;
			font-size: 20px;
			border: 2px thin ;
			border-radius: 15px;
			padding: 17px 25px;
			margin: 10px;
			background-color:  #b47c4a;
			opacity:0.8;
		
		}
        
        .links> a:hover {
			
			background-color: #4c515b;
            margin-top: 5px;
            font-weight: bold;
            transition: all 0.5s linear;
            border-radius: 30px;
            transform: scale(0.9);   
            opacity:0.8;           
		}
		
        
        .m-b-md {
            margin-bottom: 30px;
        }
        
        .container {
            position: absolute;
            margin-left: 590px;
            margin-top: -400px;
        }
		
        
        /*----------------------------------------------------------------------------------------------------*/
        #capa_contacto {
            width: 80px;
            height: 80px;
            margin-left: -20px;
        }
        
        #capa_soporte {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            margin-left: 150px;
        }
        
        #capa_footer {
            width: 500px;
            height: 80px;
            background-color:#b47c4a;
            border-radius: 20px;
            opacity:0.8;
        }
        
                	
		.img{
			margin: 30px;
            transition: all 0.5s linear;
            border-radius: 20px;
		}
        
        img:hover{
            transform: scale(0.9);
            border-radius: 20px;
        }
        
        #capa_footer{
            margin: 30px;
            margin-top: -7px;
            transition: all 0.5s linear;
        }
        
        #capa_footer:hover{
            transform: scale(0.9);
            border-radius: 20px;
            background-color: #4c515b;
        }
        
        .content flex-center{
            margin: 30px;
            transition: all 0.5s linear;
        }
        
        #encabezado{
            width: 500px;
        }
         #capa{
            width: 500px;
        }

    </style>

</head>


<body>
      










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>