<?php
function slots_list_cb(){
?>
<div class="flex flex-wrap min600">
   <div class="w-full mb-12 xl:mb-0 px-4 padding-top80">
      <div class="grid grid-cols-2 gap-4">
      
         <div class="mt-4">
            <h1 class="text-2xl text-black font-bold mb-3">All Rooms Slots</h1>
         </div>
         <div class="mt-4">
         <a type="submit" class="addbtn btn btn-success" href="admin.php?page=add_slot">Add new slot</a>
         </div>
         
      </div>
      <div>
         <div class="table-responsive">
            <table class="table bg-white border border-slate-300 mt-4">
               <thead>
                  <tr>
                     <th class="border border-slate-300 text-center bg-hotel-maroon 1">Sno.</th>
                     <th class="border border-slate-300 text-center bg-hotel-maroon ">Slot</th>
                     <th class="border border-slate-300 text-center bg-hotel-maroon ">Room</th>
                     <th class="border border-slate-300 text-center bg-hotel-maroon ">Status</th>
                     <th class="border border-slate-300 text-center bg-hotel-maroon ">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="border border-slate-300 text-center">1</td>
                     <td class="border border-slate-300 text-center">16:30 - 18:30</td>
                     <td class="border border-slate-300 text-center">Valerie 4 pp max</td>
                     
                     <td class="border border-slate-300 text-center">
                        <label for="default-toggle-0" class="relative itekms-center w-full cursor-pointer">
                           <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enabled</span>
                        </label>
                     </td>
                     <td class="border border-slate-300 text-center">
                    <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-warning" href="admin.php?page=edit_slot&&id=1"><i class="fa fa-pencil" style="font-size:24px"></i></a>
                     <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-danger deleteRoom"><i class="fa fa-trash" style="font-size:24px"></i></a></td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">2</td>
                     <td class="border border-slate-300 text-center">19:30 - 20:30</td>
                     <td class="border border-slate-300 text-center">Valerie 4 pp max</td>
                     
                     <td class="border border-slate-300 text-center">
                        <label for="default-toggle-0" class="relative itekms-center w-full cursor-pointer">
                           <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enabled</span>
                        </label>
                     </td>
                     <td class="border border-slate-300 text-center">
                    <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-warning" href="admin.php?page=edit_slot&&id=1"><i class="fa fa-pencil" style="font-size:24px"></i></a>
                     <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-danger deleteRoom"><i class="fa fa-trash" style="font-size:24px"></i></a></td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">3</td>
                     <td class="border border-slate-300 text-center">16:30 - 18:30</td>
                     <td class="border border-slate-300 text-center">Voyage Voyage 4pp</td>
                     
                     <td class="border border-slate-300 text-center">
                        <label for="default-toggle-0" class="relative itekms-center w-full cursor-pointer">
                           <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enabled</span>
                        </label>
                     </td>
                     <td class="border border-slate-300 text-center">
                    <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-warning" href="admin.php?page=edit_slot&&id=1"><i class="fa fa-pencil" style="font-size:24px"></i></a>
                     <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-danger deleteRoom"><i class="fa fa-trash" style="font-size:24px"></i></a></td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">4</td>
                     <td class="border border-slate-300 text-center">19:30 - 20:30</td>
                     <td class="border border-slate-300 text-center">Voyage Voyage 4pp</td>
                     
                     <td class="border border-slate-300 text-center">
                        <label for="default-toggle-0" class="relative itekms-center w-full cursor-pointer">
                           <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enabled</span>
                        </label>
                     </td>
                     <td class="border border-slate-300 text-center">
                    <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-warning" href="admin.php?page=edit_slot&&id=1"><i class="fa fa-pencil" style="font-size:24px"></i></a>
                     <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-danger deleteRoom"><i class="fa fa-trash" style="font-size:24px"></i></a></td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">3</td>
                     <td class="border border-slate-300 text-center">16:30 - 18:30</td>
                     <td class="border border-slate-300 text-center">Eloise 6pp</td>
                     
                     <td class="border border-slate-300 text-center">
                        <label for="default-toggle-0" class="relative itekms-center w-full cursor-pointer">
                           <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enabled</span>
                        </label>
                     </td>
                     <td class="border border-slate-300 text-center">
                    <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-warning" href="admin.php?page=edit_slot&&id=1"><i class="fa fa-pencil" style="font-size:24px"></i></a>
                     <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-danger deleteRoom"><i class="fa fa-trash" style="font-size:24px"></i></a></td>
                  </tr>

                  <tr>
                     <td class="border border-slate-300 text-center">3</td>
                     <td class="border border-slate-300 text-center">19:30 - 20:30</td>
                     <td class="border border-slate-300 text-center">Eloise 6pp</td>
                     
                     <td class="border border-slate-300 text-center">
                        <label for="default-toggle-0" class="relative itekms-center w-full cursor-pointer">
                           <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enabled</span>
                        </label>
                     </td>
                     <td class="border border-slate-300 text-center">
                    <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-warning" href="admin.php?page=edit_slot&&id=1"><i class="fa fa-pencil" style="font-size:24px"></i></a>
                     <a class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 btn-danger deleteRoom"><i class="fa fa-trash" style="font-size:24px"></i></a></td>
                  </tr>
                 
               </tbody>
            </table>
         </div>
        
      </div>
   </div>
</div>
<?php
}