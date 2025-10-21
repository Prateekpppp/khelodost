<div id="betslip" class="m-1 md:static absolute hidden md:flex betslip" style="display:none;">
   <span id="bet_msg_error"></span>
   <span id="errmsg"></span>
   <div class="lds-dual-ring  loader" style="display:none"></div>
   <audio id="myAudio">
      <source src="https://khelodost.online/assets/images/beep.mp3" type="audio/mpeg">
   </audio>
   <div id="placeBetSilp" class="flex flex-col items-center">
      
      <div class="flex flex-row gap-2">
         <span id="nat" class="my-1"></span>
         <span id="profit" class="my-1 text-green-500"></span>
         <span id="loss" class="my-1 text-red-500"></span>
      </div>
      <div class="flex flex-row">
         <div class="stake_inputs w-50 p-2">
            <input step="0.01" id="oddVal" class="calProfitLoss odd-val odds-input form-control  CommanBtn" style="color:#000 !important">
         </div>
         <div class="stake_inputs w-50 p-2">
            <input pattern="[0-9]*" step="1" id="stakeValue" class="calProfitLoss stake-input form-control  CommanBtn">
         </div>
      </div>
      <div class="flex flex-row flex-wrap justify-evenly bet-btns">
         <button class=" chipName7" type="button" value="100">100</button>
         <button class=" chipName7" type="button" value="500">500</button>
         <button class=" chipName7" type="button" value="1000">1000</button>
         <button class=" chipName7" type="button" value="10000">10000</button>
         <button class=" chipName7" type="button" value="25000">25000</button>
         <button class=" chipName7" type="button" value="50000">50000</button>
         <button class=" chipName7" type="button" value="75000">75000</button>
         <button class=" " type="button" onclick="stakeUpdate(0);">Clear</button>
         <button class="w-[46%] !bg-[#fff] !text-[#fc7600] border !border-[#fc7600]" type="button" onclick="ClearAllSelection();"> Cancel</button>
         <button class="w-[46%]" type="button" onclick="placeBet();"> Place Bet</button>
      </div>
   </div>
</div>



<script>

   let betslipData = {};

   $('body').on('click','.odd-btn',function(){

      $('.betslip').show();
      updateBetslip(this);

   });

   $('#stakeValue').on('keyup',function(){
      stakeUpdate($(this).val());
   });

   $('body').on('click','.bet-btns button', function(){
      stakeUpdate($(this).val());
   });

   function updateBetslip(odd){
      
      betslipData.oddVal = $(odd).attr('data-oddVal');
      betslipData.marketId = $(odd).parents('.market_data').attr('data-marketId');
      betslipData.nat = $(odd).parents('.market_data').attr('data-nat');
      
      stakeUpdate(100);
      $('#oddVal').val(betslipData.oddVal);
      $('#nat').html(betslipData.nat);
   }
   
   function stakeUpdate(val){
      
      // if(val < 100){
      //    responseToast('minimum stake value is 100');
      // }
      betslipData.profit = parseFloat(betslipData.oddVal*val).toFixed(2);
      $('#profit').html(betslipData.profit);
      $('#loss').html(val);
      $('#stakeValue').val(val);
   }

   function staKeAmount(stake){
      
   }
   function betAmount(){
      
   }

   function placeBet(){
      
   }
</script>