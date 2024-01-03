<?php
function status_manager_cb(){
?>
<div class="flex flex-wrap min600">
   <div class="w-full mb-12 xl:mb-0 px-4 padding-top80">
      <div class="grid grid-cols-2 gap-4">
      
         <div class="mt-4">
            <h1 class="text-2xl text-black font-bold mb-3">Status Manager</h1>
         </div>
         
      </div>
      <div>
         <div class="table-responsive">
            <table class="table bg-white border border-slate-300 mt-4">
               <thead>

                  <tr>
                     <th class="border border-slate-300 text-center bg-hotel-maroon ">Sno.</th>
                     <th class="border border-slate-300 text-center bg-hotel-maroon ">Schedules</th>
                     <th class="border border-slate-300 text-center bg-hotel-maroon ">Status</th>
                  </tr>

               </thead>
               <tbody>

                  <tr>
                     <td class="border border-slate-300 text-center">1</td>
                     <td class="border border-slate-300 text-center">Full Booking</td>
                     <td class="border border-slate-300 text-center">
                     <label class="switch">
                       <input type="checkbox" checked  name="search" class="search" onchange="">
                       <span class="slider"> </span>
                    </label>   
                    </td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">2</td>
                     <td class="border border-slate-300 text-center">Sunday</td>
                     <td class="border border-slate-300 text-center">
                     <label class="switch">
                       <input type="checkbox"  name="search" class="search" onchange="">
                       <span class="slider"> </span>
                    </label>   
                    </td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">3</td>
                     <td class="border border-slate-300 text-center">Monday</td>
                     <td class="border border-slate-300 text-center">
                     <label class="switch">
                       <input type="checkbox"  name="search" class="search" onchange="">
                       <span class="slider"> </span>
                    </label>   
                    </td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">4</td>
                     <td class="border border-slate-300 text-center">Tuesday</td>
                     <td class="border border-slate-300 text-center">
                     <label class="switch">
                       <input type="checkbox"  name="search" class="search" onchange="">
                       <span class="slider"> </span>
                    </label>   
                    </td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">5</td>
                     <td class="border border-slate-300 text-center">Wednesday</td>
                     <td class="border border-slate-300 text-center">
                     <label class="switch">
                       <input type="checkbox"  name="search" class="search" onchange="">
                       <span class="slider"> </span>
                    </label>   
                    </td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">6</td>
                     <td class="border border-slate-300 text-center">Thrusday</td>
                     <td class="border border-slate-300 text-center">
                     <label class="switch">
                       <input type="checkbox"  name="search" class="search" onchange="">
                       <span class="slider"> </span>
                    </label>   
                    </td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">7</td>
                     <td class="border border-slate-300 text-center">Friday</td>
                     <td class="border border-slate-300 text-center">
                     <label class="switch">
                       <input type="checkbox"  name="search" class="search" onchange="">
                       <span class="slider"> </span>
                    </label>   
                    </td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">8</td>
                     <td class="border border-slate-300 text-center">Saturday</td>
                     <td class="border border-slate-300 text-center">
                     <label class="switch">
                       <input type="checkbox"  name="search" class="search" onchange="">
                       <span class="slider"> </span>
                    </label>   
                    </td>
                  </tr>

                 
                 
               </tbody>
            </table>
         </div>
        
      </div>
   </div>
</div>
<?php
}
