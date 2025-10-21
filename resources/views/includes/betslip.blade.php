<div class="m-1 md:static absolute hidden md:flex betslip" style="display:none;">
   <span id="bet_msg_error"></span>
   <span id="errmsg"></span>
   <div class="lds-dual-ring  loader" style="display:none"></div>
   <audio id="myAudio">
      <source src="https://khelodost.online/assets/images/beep.mp3" type="audio/mpeg">
   </audio>
   <div id="placeBetSilp" class="flex flex-col items-center">
      
      <div class="flex flex-row">
         <div class="stake_inputs w-50 p-2">
            <input step="0.01" id="oddVal" readonly="" class="calProfitLoss odd-val odds-input form-control  CommanBtn" style="color:#000 !important">
         </div>
         <div class="stake_inputs w-50 p-2">
            <input pattern="[0-9]*" step="1" id="stakeValue" class="calProfitLoss stake-input form-control  CommanBtn">
         </div>
      </div>
      <div class="flex flex-row flex-wrap justify-evenly bet-btns">
         <button class=" chipName7" type="button" value="100" onclick="staKeAmount(this);">100</button>
         <button class=" chipName7" type="button" value="500" onclick="staKeAmount(this);">500</button>
         <button class=" chipName7" type="button" value="1000" onclick="staKeAmount(this);">1000</button>
         <button class=" chipName7" type="button" value="10000" onclick="staKeAmount(this);">10000</button>
         <button class=" chipName7" type="button" value="25000" onclick="staKeAmount(this);">25000</button>
         <button class=" chipName7" type="button" value="50000" onclick="staKeAmount(this);">50000</button>
         <button class=" chipName7" type="button" value="75000" onclick="staKeAmount(this);">75000</button>
         <button class=" " type="button" onclick="ClearStack( );">Clear</button>
         <button class="w-[46%] !bg-[#fff] !text-[#fc7600] border !border-[#fc7600]" type="button" onclick="ClearAllSelection();"> Cancel</button>
         <button class="w-[46%]" type="button" onclick="placeBet();"> Place Bet</button>
      </div>
   </div>
</div>



<script>

   $('body').on('click','.odd-btn',function(){
      $('.betslip').show();
      $('#oddVal').val($(this).text());
   });

   function staKeAmount(btn){
      $('#stakeValue').val($(btn).val());
   }

   function placeBet(){

   }
</script>