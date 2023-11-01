 <!-- Masthead-->
 <header class="masthead">
     <div class="container h-100">
         <div class="row h-100 align-items-center justify-content-center text-center">
             <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                 <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                 <hr class="divider my-4" />
             </div>

         </div>
     </div>
 </header>

 <!-- <section style="padding: 10px;"> -->
 <section class="page-section">
     <div style="width: 700px; margin: 0 auto; padding: 20px; background-color: #08c; color: white;">
         <p>
             <div style="font-size: 20px; color: white;"><b>Project Topic: <?php echo $_SESSION['setting_name']; ?></b></div>
         </p>
         <p>
             <div style="font-size: 20px; color: white;"><b>Student Name:</b></div>
         </p>
         <p>
             <div style="font-size: 20px; color: white;"><b>Matric Number:</b></div>
         </p>
         <p>
             <div style="font-size: 20px; color: white;"><b>Supervisor:</b></div>
         </p>
         <p>
             <div style="font-size: 20px; color: white;"><b>Department:</b></div>
         </p>
     </div>
<br>
     <div class="container" style="background-color: #08c; color: white; padding:10px">
         <?php echo html_entity_decode($_SESSION['setting_about_content']) ?>

     </div>
 </section>