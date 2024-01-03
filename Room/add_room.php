<?php
function add_room_cb(){
?>

<div class="flex flex-wrap min600">
    
   <div class="w-full mb-12 xl:mb-0 px-4 padding-top80 formstyle">
   <div class="flex float-right mt-4"><a class="bckbtn bg-dark font-medium rounded text-sm max-w-xs sm:w-auto px-5 py-2.5 text-center ml-2" href="admin.php?page=room_list">Go Back</a></div>
      <div class="mt-4">
         <h1 class="text-2xl text-black font-bold mb-3">Add Room</h1>
     </div>
      <form>
         <div class="grid grid-cols-3 gap-4 mt-2">
            <div><label class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Room name</label><input type="text" name="room_name" id="room_name" placeholder="Room Name" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500"></div>
                
            <div>
               <label class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Availability</label>
               <select name="availability" id="packageAvail" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option>Please Select</option>
                  <option value="1">Available</option>
                  <option value="0">Not available</option>
               </select>
            </div>
            <div><label class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300">Allowed Person</label><input type="number" name="persons" id="persons" placeholder="Allowed persons" class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark: dark:focus:ring-blue-500 dark:focus:border-blue-500"></div>
           
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

          <div class="mb-4"><label class="block mb-2 text-sm font-bold text-gray-900 dark:text-gray-300" for="file_input">Upload Image</label><input name="image" class="block text-sm text-gray-900 bg-white rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file"></div>
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
