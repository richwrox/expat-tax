<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    									<div class="row mt-4 stepwizard">
                                          <div class="col-md-12 ">
                                             <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                <ol class="breadcrumb cs-breadcrumbs">
                                                   
                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                                                    <a class="light-grey" href="#"> Wages and Salary</a></li>
                                                </ol>
                                              </nav>
                                          </div>
                                        </div>

                                        {{-- Step 1 --}}
                                        <div class="{{ $currentStep != 1 ? 'display-none' : '' }} " id="step-1">

                                        	<div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Do you have salary income? 
                                                                    @error('DoyouHaveSalaryIncome')<span class="error">*</span> @enderror
                                                                </label><br/>
                                                           <input type="radio" wire:model="DoyouHaveSalaryIncome"  class="btn-check form-check-input " name="DoyouHaveSalaryIncome" id="DoyouHaveSalaryIncomeYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="DoyouHaveSalaryIncomeYes">Yes</label> 

                                                                <input wire:model="DoyouHaveSalaryIncome" type="radio" class="btn-check form-check-input" name="DoyouHaveSalaryIncome" id="DoyouHaveSalaryIncomeNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="DoyouHaveSalaryIncomeNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             </div>

                                             <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Do you have W-2 Forms issued by the US/ Foreign income documents or both?
                                                                    @error('DoyouHaveSalaryIncome')<span class="error">*</span> @enderror
                                                                </label><br/>
                                                           <input type="radio" wire:model="DoyouHaveW2Forms"  class="btn-check form-check-input " name="DoyouHaveW2Forms" id="DoyouHaveW-2FormsYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="DoyouHaveW-2FormsYes">Yes</label> 

                                                                <input wire:model="DoyouHaveW2Forms" type="radio" class="btn-check form-check-input" name="DoyouHaveW2Forms" id="DoyouHaveW-2FormsNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="DoyouHaveW-2FormsNo">No</label>

                                                                <input wire:model="DoyouHaveW2Forms" type="radio" class="btn-check form-check-input" name="DoyouHaveW2Forms" id="DoyouHaveW-2FormsBoth"   value='both'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="DoyouHaveW-2FormsBoth">Both</label> 
                                                        </div>
                                                    </div>
                                                   
                                             </div>

                                             @if($DoyouHaveW2Forms === 'yes' || $DoyouHaveW2Forms === 'both')
                                             <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">
                                                                   Upload Your W-2 Forms
                                                                </label><br/>
                                                          
                                                        </div>
                                                    </div>
                                                   
                                             </div>


                                             <div class="row mt-3" id="">
                                             			@for($i=0; $i < $NumberofFormsToUpload; $i++)
                                             			   <div class="col-md-9 ml-5 mt-2">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <div class="form-group ">
                                                                        <div class="file btn btn-outline-success cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload Forms
                                                                        <input wire:model="wwforms" type="file"  />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                             			@endfor
              

                                                        <div class="mt-2 d-flex">
                                                        	<label  class="light-grey" for="DoyouHaveW-2FormsYes">Amount of forms uploaded			
                                                            </label> 

                                                            <select wire:model="NumberofFormsToUpload" class="">
                                                            	<option value="0">--</option>
                                                            	<option value="1">1</option>
                                                            	<option value="2">2</option>
                                                            	<option value="3">3</option>
                                                            	<option value="4">4</option>
                                                            	<option value="5">5</option>
                                                            	<option value="6">6</option>
                                                            	<option value="7">7</option>
                                                            	<option value="8">8</option>
                                                            	<option value="9">9</option>
                                                            	<option value="10">10</option>
                                                            </select>

                                                        </div>
                                                </div>



                                             @endif


                                             @if($DoyouHaveW2Forms === 'yes' || $DoyouHaveW2Forms === 'both')

                                                           <div class="col-md-4 ml-5 mt-4 mb-2">
                                                              <div class="form-group">
                                                                  <div class="form-group light-grey">
                                                                      <label class="mb-2" for="">Which country has issued you wage/ salary income statements?</label><br/>
                       													<select wire:model="Country" class="form-control">
                       														<option>-----</option>
                       													</select>
                                                                  </div>
                                                              </div>
                                                            </div>

                                             @endif


                                             				<div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Did you file an Isralei Tax return?   @error('DidYouFileIsraliTax') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                    
                                                                    <input wire:model="DidYouFileIsraliTax" type="radio" class="btn-check" id="DidYouFileIsraliTaxYes"  name="DidYouFileIsraliTax" value="yes" >
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  
                                                                    for="DidYouFileIsraliTaxYes">Yes</label>

                                                                    <input wire:model="DidYouFileIsraliTax" type="radio" class="btn-check" id="DidYouFileIsraliTaxNo"  name="DidYouFileIsraliTax" value="no" >
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  
                                                                    for="DidYouFileIsraliTaxNo">No</label>

                                                                    

                                                                </div>
                                                            </div>

                                                            @if($DidYouFileIsraliTax === 'yes')

                                                            <div class="col-md-7 ml-5 mt-4 mb-2">
                                                              <div class="form-group">
                                                                  <div class="form-group light-grey">
                                                                      <label class="mb-2" for="">Upload your Israeli Tax return/s, including the Chishuv mas- tax calculation and supporting documentation</label><br/>

                                                                       @for($i=0; $i < $NumberofFormsToUploadIsraeliTaxReturn; $i++ )
                       													<div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-success cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="wwforms" type="file"  />
                                                                        </div>
                                                                    	</div>
                                                                    	@endfor

                                                                  </div>
                                                              </div>
                                                            </div>

                                                            <div class="mt-2 d-flex">
                                                        	<label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded			
                                                            </label> 

                                                            <select wire:model="NumberofFormsToUploadIsraeliTaxReturn" class="">
                                                            	<option value="0">--</option>
                                                            	<option value="1">1</option>
                                                            	<option value="2">2</option>
                                                            	<option value="3">3</option>
                                                            	<option value="4">4</option>
                                                            	<option value="5">5</option>
                                                            	<option value="6">6</option>
                                                            	<option value="7">7</option>
                                                            	<option value="8">8</option>
                                                            	<option value="9">9</option>
                                                            	<option value="10">10</option>
                                                            </select>

                                                        </div>
                                                        @endif


                                                        <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Did you receive income on a tlush/ payslip?  @error('WasIncomeReceivedOnTlush') <span class="error text-danger">*</span> @enderror
                                                                    </label><br/>
                                                                    
                                                                    <input wire:model="WasIncomeReceivedOnTlush" type="radio" class="btn-check" id="WasIncomeReceivedOnTlushYes" 
                                                                    name="WasIncomeReceivedOnTlush" value="yes">
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="WasIncomeReceivedOnTlushYes">Yes</label>

                                                                    <input wire:model="WasIncomeReceivedOnTlush" type="radio" class="btn-check" id="WasIncomeReceivedOnTlushNo" name="WasIncomeReceivedOnTlush" value="no" >
                                                                    <label class="btn btn-outline-secondary btn-site-primary mr-3" 
                                                                    for="WasIncomeReceivedOnTlushNo">No</label>

                                                                </div>
                                                        </div>

                                                        <div class="col-md-9 ml-5 mt-2">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <div class="form-group ">

                                                                        <div class="file btn btn-outline-success cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your 106 forms
                                                                        <input wire:model="wwforms" type="file"  />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Did you receive any compensation from Bituach Leumi for Chalat, Unemployment or Maternity Leave?  @error('DidYouReceiveAnyCompensation') 
                                                                    	<span class="error text-danger">*</span> @enderror
                                                                    </label><br/>
                                                                    
                                                                    <input wire:model="DidYouReceiveAnyCompensation" type="radio" class="btn-check" id="DidYouReceiveAnyCompensationYes" 
                                                                    name="DidYouReceiveAnyCompensation" value="yes">
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="DidYouReceiveAnyCompensationYes">Yes</label>

                                                                    <input wire:model="DidYouReceiveAnyCompensation" type="radio" class="btn-check" id="DidYouReceiveAnyCompensationNo" name="DidYouReceiveAnyCompensation" value="no" >
                                                                    <label class="btn btn-outline-secondary btn-site-primary mr-3" 
                                                                    for="DidYouReceiveAnyCompensationNo">No</label>

                                                                </div>
                                                        </div>



                                                        


                                             <div class=" offset-md-4">
                                                        <div class="rows mr-auro">
                                                          
                                                          <div class="d-flex">

                                                                <div class="mr-5">
                                                                    <button wire:click="submitWages" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small"> Foreign Erned Income <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                    </div>


                                        </div>
                                        {{-- End Step 1 --}}
</div>
