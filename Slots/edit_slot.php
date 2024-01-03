<?php
function edit_slot_cb(){
?>

<div class="flex flex-wrap min600">
    
   <div class="w-full mb-12 xl:mb-0 px-4 padding-top80 formstyle">
   <div class="flex float-right mt-4"><a class="bckbtn bg-dark font-medium rounded text-sm max-w-xs sm:w-auto px-5 py-2.5 text-center ml-2" href="admin.php?page=slots">Go Back</a></div>
      <div class="mt-4">
         <h1 class="text-2xl text-black font-bold mb-3">Edit Slot</h1>
     </div>
      <form>
         <div class="grid grid-cols-2 gap-2 mt-2">
            <div>
                <label class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Slot</label>
                <input type="text" name="room_name" id="room_name" placeholder="HH:MM - HH:MM" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            
            <div>
                <label class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Price</label>
                <input type="number" name="slot_price" id="slot_price" placeholder="Price" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
               <label class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Room</label>
               <select name="availability" id="packageAvail" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option>Please Select</option>
                  <option value="1">Valerie 4 pp max</option>
                  <option value="0">Voyage Voyage 4pp</option>
                  <option value="0">Eloise 6pp</option>
                  <option value="0">Cruz de Navajas 7pp</option>
                  <option value="0">Dancing Queen 8pp</option>
                  <option value="0">Smooth Criminal 10pp</option>
                  <option value="0">No puedo vivir sin tí 12pp</option>
               </select>
            </div>

            <div class="mb-4">
               <label class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Availability</label>
               <select name="availability" id="packageAvail" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option>Please Select</option>
                  <option value="1">Available</option>
                  <option value="0">Not available</option>
               </select>
            </div>

                   
         </div>

         <div class="mb-4">
            <label class="block mb-3 text-sm font-bold text-gray-900 dark:text-gray-300">Available Days</label>
           
            <input name="sunday" type="checkbox" id="sunday" class="">
            <label class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">
            Sunday
            </label>

            <input name="monday" type="checkbox" id="monday" class="">
            <label class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">
            Monday
            </label>

            <input name="tuesday" type="checkbox" id="tuesday" class="">
            <label class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">
            Tuesday
            </label>

            <input name="wednesday" type="checkbox" id="wednesday" class="">
            <label class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">
            Wednesday
            </label>

            <input name="thrusday" type="checkbox" id="thrusday" class="">
            <label class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">
            Thrusday
            </label>

            <input name="friday" type="checkbox" id="friday" class="">
            <label class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">
            Friday
            </label>

            <input name="saturday" type="checkbox" id="saturday" class="">
            <label class="mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">
            Saturday
            </label>
        
        </div>
        
        <div class="mb-4">
        <label class="block mb-3 text-sm font-bold text-gray-900 dark:text-gray-300">Unavailable Dates</label>
         <input type="text" class="form-control date" placeholder="Pick the multiple dates">
         </div>

         <div class="flex"><button type="submit" class=" bg-hotel-maroon font-medium rounded text-sm max-w-xs sm:w-auto px-5 py-2.5 text-center btn-success">Save</button></div>
      </form>
   </div>
</div>
<script>
    $('.date').datepicker({
  multidate: true,
	format: 'dd-mm-yyyy'
});

</script>
<?php
}
