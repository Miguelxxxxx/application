<?php
$this->load->view('header');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Day Golf</title>
  <link rel="icon" href="assets/Logo.ico"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="JS/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  <script src="JS/moment.min.js"></script>
  <script src='JS/fullcalendar-6.1.6/dist/index.global.min.js'></script>
  <script src='JS/fullcalendar-6.1.6/dist/index.global.js'></script>
  <link rel="stylesheet" href="../../styles/style.css">
</head>

<body>
  <div class="container-fluid col-12 col-s-12 col-xs-12 col-xl-12" id="divpadre">
    <div id="background1">
      <p class="Maintitle">ONE DAY GOLF</p>
      <img src="assets/background.png" class="img-fluid" />
    </div>
    <br>
    <div class="py-5 row">
      <div class="d-flex flex-column col" id="textleft">
        <p>QUIÉNES SOMOS</p>
      </div>
      <div class="d-flex flex-column col" id="divinfo">
        <p id="textright">Somos una compañía dedicada a facilitar el acceso a los mejores campos de Golf de 18 hoyos par 72 en el área metropolitana a todos los visitantes de la Ciudad de México. <em>One Day Golf</em> se encarga de todo, <strong class="blue">tú sólo tienes que disfrutar de un buen swing</strong>.</p>
      </div>
    </div>
    <br>
    <p id="comoOperamos" class="TITULOS">CÓMO OPERAMOS</p>
    <br>
    <div class="center">
      <img width="60%" src="assets/OPERAMOS.png" class="img-fluid" />
    </div>
    <br>
    <br>
    <div class="d-flex centertext">
      <div class="maintext">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui </div>
    </div>
    <br>
    <br>
    <p id="reserva" class="TITULOS">RESERVA</p>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Correo</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="inputs">
      <div class="row row-cols-lg-5 g-lg-3">
        <div class="col">
          <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
        </div>
        <div class="col">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="col">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="col">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
    </div>
    <br>
    <br>
    <!--	comienza el calendario-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
       
  
          var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
       
       
          // initialView: 'dayGridMonth'
          headerToolbar: {
            left: 'prev',
        center: 'title',
        right: 'next'
          },
          
          fixedWeekCount: false,
          showNonCurrentDates: false,
          contentHeight: 345,
          duration: { weeks: 4 },
        

         
          

         
          
        });
        calendar.render();
      });


      </script>

      <style>
#calendar {
  width: 70%;
  height: 82%;
  margin-left: 14%; 
}
.fc-scrollgrid.fc-scrollgrid-liquid{
border: none;
border-bottom: none;
}

.fc-daygrid-day-frame.fc-scrollgrid-sync-inner{
  width: 60%;
  height: 30%; 
}
.fc-col-header-cell.fc-day.fc-day-sun{
  border-style: none; 
  background-color: transparent;
}
.fc-col-header-cell.fc-day.fc-day-mon{
  border-style: none; 
  background-color: transparent;
}.fc-col-header-cell.fc-day.fc-day-tue{
  border-style: none; 
  background-color: transparent;
}.fc-col-header-cell.fc-day.fc-day-wed{
  border-style: none; 
  background-color: transparent;
}.fc-col-header-cell.fc-day.fc-day-thu{
  border-style: none; 
  background-color: transparent;
}.fc-col-header-cell.fc-day.fc-day-fri{
  border-style: none; 
  background-color: transparent;
}.fc-col-header-cell.fc-day.fc-day-sat{
  border-style: none; 
  background-color: transparent;
}
.fc-day.fc-day-sun.fc-day-disabled.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-mon.fc-day-disabled.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-tue.fc-day-disabled.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-wed.fc-day-disabled.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-thu.fc-day-disabled.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-fri.fc-day-disabled.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-sat.fc-day-disabled.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-sun.fc-day-past.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-mon.fc-day-past.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-tue.fc-day-past.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-wed.fc-day-past.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-thu.fc-day-past.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-fri.fc-day-past.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-sat.fc-day-past.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-sun.fc-day-today.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-mon.fc-day-today.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-tue.fc-day-today.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-wed.fc-day-today.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-thu.fc-day-today.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-fri.fc-day-today.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}.fc-day.fc-day-sat.fc-day-today.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-sun.fc-day-future.fc-daygrid-day{
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-mon.fc-day-future.fc-daygrid-day {
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-tue.fc-day-future.fc-daygrid-day {
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-wed.fc-day-future.fc-daygrid-day {
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-thu.fc-day-future.fc-daygrid-day {
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-fri.fc-day-future.fc-daygrid-day {
  border-style: none;
  background-color: transparent;
}
.fc-day.fc-day-sat.fc-day-future.fc-daygrid-day {
  border-style: none;
  background-color: transparent;
}
.fc-daygrid-day-number {
  border-style: hidden;
  border-radius: 100% 100% 100% 100%;
  width: 40%;
  background-color: #dddddd; 
  font-family: "FUTURA MEDIUM";
  font-size: 8pt;
  color: #8d8d8d;
  text-align: center;
}
.fc-col-header-cell-cushion {
  color: transparent;
}

.fc-scrollgrid-sync-table{
  border-collapse: separate; 
}

.fc-view-harness.fc-view-harness-active{
  border: none;
}

.fc-theme-standard{
  border: none;
}

      

tr{ 
  border-style: none;
}

        .fc-header-toolbar{
          border-style: groove;
          color: #8d8d8d;
          border-radius: 200px 200px;
        }
        #fc-dom-1{
          font-family: "FUTURA MEDIUM";
          font-size: 20pt;
        }

        button.fc-prev-button.fc-button.fc-button-primary {
    background-color: white !important;
    border-color: white;
    border-radius: 100%;
    
}

.fc-icon.fc-icon-chevron-left{
  color: #8d8d8d;
}

.fc-next-button.fc-button.fc-button-primary{
  background-color: transparent !important;
    border-color: white;
    border-radius: 100%;
}

.fc-icon.fc-icon-chevron-right{
  color: #8d8d8d;
}

      </style>
    <div id="calendar">
      
    </div>
    <!--	termina el calendario-->
    <br>
    <br>
    <br>
    <div class="container" id="inputs">
      <div class="row row-cols-lg-9-lg-2">
        <div class="col handy">Handy Cap</div>
        <div class="col">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
            <label class="btn" for="btnradio1">0-10</label>
          </div>
        </div>
        <div class="col">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn" for="btnradio2">11-20</label>
          </div>
        </div>
        <div class="col">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
            <label class="btn" for="btnradio3">21-30</label>
          </div>
        </div>
        <div class="col">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
            <label class="btn" for="btnradio4">+ de 30</label>
          </div>
        </div>
        <div class="col handy">Palos</div>
        <div class="col">

        <select class="form-select" aria-label="Default select example">
  <option selected>-</option>
  <option value="1">Diestro</option>
  <option value="2">Surdo</option>
</select>
        </div>
      </div>
    </div>
    <br>
    <br>
    <p id="contactos" class="TITULOS">TU PALABRA CUENTA</p>
    <br>
    <div class="row row-cols-lg-5 g-lg-3" id="inputs">
    <div class="col">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/Carousel 1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/Image_1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/Image_2.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		<br>
	<p class="slides">Nombre</p>
	<p class="slides">Edad</p>
	<p class="slides2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui </p>
    </div>
    <div class="col">
        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/Carousel 2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/Image_1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/Image_2.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		<br>
	<p class="slides">Nombre</p>
	<p class="slides">Edad</p>
	<p class="slides2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui </p>
    </div>
    <div class="col">
         <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/Carousel 3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/Image_1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/Image_2.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		<br>
	<p class="slides">Nombre</p>
	<p class="slides">Edad</p>
	<p class="slides2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui </p>
    </div>
  </div>



  </div>
</body>

</html>

<?php
$this->load->view('footer');


?>