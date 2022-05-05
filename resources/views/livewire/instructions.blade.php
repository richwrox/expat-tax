<div>
        <div class="col-md-12 ml-5">                                              
          <div class="form-group">                                              
              <div class="form-group light-grey">
                <label for="">How many tax returns should we prepare for you?</label>

                <div class="mt-4">
                	<input type="radio"   class="btn-check form-check-input " name="options-outlined" id="success-outlined" autocomplete="off" value='1' onchange="">
                    <label wire:click="$emit('selectYear', 'single' )" class="btn btn-outline-secondary mr-3 btn-site-primary" for="success-outlined">One Year</label> 

                    <input type="radio" class="btn-check form-check-input" name="options-outlined" id="danger-outlined" autocomplete="off" onchange="" value='2'>
                    <label wire:click="$emit('selectYear', 'multiple' )" class="btn btn-outline-secondary btn-site-primary" for="danger-outlined">More Than One Year</label> 
                </div>
                                                                                                                                                             
              </div>                                                 
          </div>                                                                                                             
	   </div>

	   @if($requestType == 'single')


                                                <div id="singleForm" class="class_hidden">
                                                    
                                                    <form action="includes/filing_years.inc.php" method="POST">
                                                        
                                                        <div class="row mt-5">
                                                            <div class="col-md-12 ml-5 mt-3">
                                                                <div class="form-group">
                                                                    <div class="light-grey">
                                                                        <label for="">Which year would you like us to prepare</label><br/><br/>

                                                                        @foreach($years as $year)

                                                                         <input wire:click="$emit('setTaxYear', '{{$year}}' )" type="radio" class="btn-check" id="btn-check-1-outlined-{{$year}}" autocomplete="off" name="year" value="2018">
                                                                        <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="btn-check-1-outlined-{{$year}}">{{$year}}</label>

                                                                        @endforeach

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="row mt-3">
                                                            <div class="col-md-12 ml-5">
                                                                <div class="form-group">
                                                                    <p class="light-grey">Great, lets start with  {{$selectedYear}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
    
    
                                                        <div class="row">
                                                            <div class="col-md-6 offset-md-6">
                                                                <div class="row mr-auro">
                                                                    <div class="mr-5 button_font_small">
                                                                        <input type="submit"  name="create" value="General Question" class="btn btn-outline-secondary btn-block color-text-white mb-5 mt-5 button_font_small">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </form>
                                                    
                                                
                                                </div>

	   @endif

</div>
