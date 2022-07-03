<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- bootstrap CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- select2 CDN -->
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <!-- bootstrap-datepicker CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- bootstrap-icons CDN -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
      <title>Document</title>
   </head>
   <body>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-6">
               <h3>Search Dropdown</h3>
               <select name="subjects" id="subjects" style="width: 250px;">
                  <option value="">--Select--</option>
                  <option value="">Hindi</option>
                  <option value="">English</option>
                  <option value="">Math</option>
                  <option value="">Science</option>
                  <option value="">Bangla</option>
                  <option value="">Odia</option>
               </select>
               <br><br> 
               <hr>
               <h3>Select Date</h3>
               <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                  <div class="mb-3">
                     <div class="input-group date datepicker" style="width: 250px;">
                        <span class="input-group-addon"> <i class="bi bi-calendar-date-fill"></i> </span>
                        <input class="form-control calcRebate" name="effectiveData"  id="effectiveData" autocomplete="off" type="text" value="" placeholder="Select Date">
                        <span class="errMsg_effectiveData errDiv" style="color: red;"></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- BOOTSTRAP CDN -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
      <!-- JQUERY CDN -->
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <!-- select2 CDN -->
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <!-- datepicker CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
         /* SEARCH DROPDOWN */
         $("#subjects").select2({
             minimumResultsForSearch: Infinity
         });
         $('#subjects').select2({
             minimumInputLength: 0 
         });
         
         /* DATE PICKER */
         $('.datepicker').datepicker({
             format: "dd-mm-yyyy",
             todayBtn: "linked",
             autoclose: true,
             todayHighlight: true,
         });
      </script>
   </body>
</html>