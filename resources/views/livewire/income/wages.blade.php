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
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
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
                                                                          @foreach($countries as $country)
                                               														<option value="{{ $country->countryname }}">
                                                                            {{ $country->countryname }}             
                                                                          </option>
                                                                              @endforeach
                                               													  </select>
                                                                    
                                                                  </div>
                                                              </div>
                                                            </div>

                                             @endif


                                              @if($Country === 'Israel')
                                                


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
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
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

                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
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



                                                        @if($DidYouReceiveAnyCompensation === 'yes')

                                                           @for($i=0; $i < $NumberofFormsToUploadDidYouReceiveAnyCompensation; $i++ )
                       													<div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="UploadFileCompensationForms" type="file"  />
                                                                        </div>
                                                                    	</div>
                                                            @endfor

                                                             <div class="mt-2 d-flex">
                                                        	<label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded			
                                                            </label> 

                                                           <select wire:model="NumberofFormsToUploadDidYouReceiveAnyCompensation" class="">
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


                                           {{-- End Israel Section --}}

                                           {{-- If conutry is Israel --}}
                                              @endif



                                            @if($Country == 'Australia')  


                                               <div class="row mt-4">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 
                               Please note that as an Australian, there may be some documents listed below that you can’t obtain yet. Therefore, we’ll need to wait for these documents to be available.
                                                                      [In order to prepare an accurate US return, your latest Australian tax return and other documents are required. The Australian tax return is needed in order to determine amounts of foreign tax credit we can use on your return (to reduce tax liability), based on the Australian tax amounts.].<br/> For example: If you are filing 2018, 2019 and 2020 US Tax returns then we need the tax returns for years ending June 30th, 2018, June 30th, 2019, June 30th 2020 and June 30th 2021.<br/> If you are filing 2020 US Tax return then we need the two tax returns for years ending June 30th 2020 and June 30th 2021
                                                             </span>
                                                             <p>
                                                              
                                                             </p>
                                                          </div>
                                                        </div>

                                                         <div class="form-group mt-2">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Upload your Australian income tax returns and Notice of Assessments for all relevant tax years 
                                                                      @error('AustralianIncomeTax') 
                                                                      <span class="error text-danger">*</span> @enderror
                                                                    </label><br/>
                                                                    

                                                                </div>
                                                        </div>

                                                        @for($i=0; $i < $NumberofFormsToUploadAustralianIncomeTax; $i++ )
                                                                      <div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="UploadFileAustralianIncomeTax{{$i}}" type="file"  />
                                                                        </div>
                                                                      </div>
                                                        @endfor


                                                        <div class="mt-2 d-flex">
                                                          <label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded     
                                                            </label> 

                                                            <select wire:model="NumberofFormsToUploadAustralianIncomeTax" class="">
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
                                    


                                    <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Pay-slips from December 
                                                                      @error('PayFromDeclips') 
                                                                      <span class="error text-danger">*</span> @enderror
                                                                    </label><br/>
                                                                    

                                                                </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 
                               For example: If you are filing 2018, 2019 and 2020 US Tax returns then we need the pay-slips for December 2017, December 2018, December 2019 and December 2020.  If you are filing 2020 US Tax return then we need from December 2019 and December 2020 <br/>
                               For example: If you are filing 2018, 2019 and 2020 US Tax returns then we need the PAYG slips for the years ending  June 30th, 2018, June 30th, 2019, June 30th 2020 and June 30th 2021. For example: If you are filing 2020 US Tax return then we need the PAYG slips for years ending June 30th, 2020 and June 30th 2021.
                               </span>
                               <p>
                                
                               </p>
                                                          </div>
                                                        </div>


                                                        @for($i=0; $i < $UploadFilePayFromDec; $i++ )
                                                        <div class="form-group mt-4">
                                                                <div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="UploadFilePayFromDec" type="file"  />
                                                                        </div>
                                                                      </div>
                                                        </div>
                                                        @endfor

                                                        <div class="mt-2 d-flex">
                                                          <label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded     
                                                            </label> 

                                                            <select wire:model="UploadFilePayFromDec" class="">
                                                              
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
                                    

                                                        

                                                        <div class="form-group mt-4">
                                                                <div class="form-group col-md-7 light-grey">
                                                                    <label class="mb-2" for="">Did you receive any non taxed distribution from superannuation acocunts for the relevant calender year/s you're filing now?  @error('NonTaxDistribution') <span class="error text-danger">*</span> @enderror
                                                                    </label><br/>
                                                                    
                                                                    <input wire:model="NonTaxDistribution" type="radio" class="btn-check" id="NonTaxDistributionYes" 
                                                                    name="NonTaxDistribution" value="yes">
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="NonTaxDistributionYes">Yes</label>

                                                                    <input wire:model="NonTaxDistribution" type="radio" class="btn-check" id="NonTaxDistributionNo" name="NonTaxDistribution" value="no" >
                                                                    <label class="btn btn-outline-secondary btn-site-primary mr-3" 
                                                                    for="NonTaxDistributionNo">No</label>

                                                                </div>
                                                        </div>

                                                        @if($NonTaxDistribution === 'yes')
                                                         <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Provide distribution amounts  @error('AmountDistributed') <span class="error text-danger">*</span> @enderror
                                                                    </label><br/>
                                                                    <div class="col-md-2 ">
                                                                    <input type="text" wire:model="AmountDistributed" rows="3" class="form-control" />
                                                                     </div>
                                                                </div>
                                                        </div>
                                                        @endif



                                                        <div class="form-group mt-4">
                                                                <div class="form-group col-md-7 light-grey">
                                                                    <label class="mb-2" for="">Were you employed by more than one employer?   @error('NumberofEmployers') <span class="error text-danger">*</span> @enderror
                                                                    </label><br/>
                                                                    
                                                                    <input wire:model="NumberofEmployers" type="radio" class="btn-check" id="NumberofEmployersYes" 
                                                                    name="NumberofEmployers" value="yes">
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="NumberofEmployersYes">Yes</label>

                                                                    <input wire:model="NumberofEmployers" type="radio" class="btn-check" id="NumberofEmployersNo" name="NumberofEmployers" value="no" >
                                                                    <label class="btn btn-outline-secondary btn-site-primary mr-3" 
                                                                    for="NumberofEmployersNo">No</label>

                                                                </div>
                                                        </div>


                                                        <div class="form-group mt-4">
                                                                <div class="form-group col-md-7 light-grey">
                                                                    <label class="mb-2" for="">Provide exact dates you worked for each employer     @error('EmployerDetails') <span class="error text-danger">*</span> @enderror
                                                                    </label><br/>
                                                                </div>
                                                        </div>


                                                   <div class="row" id="show_item03">
                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        
                                                                       
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-12 ml-5">
                                                                        <div class="form-group">
                                                                            <div class="form-group light-grey">
                                                                              <label class="mb-2" for="">Employer Name      @error('EmployerName') <span class="error text-danger">*</span> @enderror
                                                                        </label>

                                                                        <input type="text" class="form-control" name="">

                                                                        <label class="mb-2" for="">Dates of Employment      @error('DatesofEmployment') <span class="error text-danger">*</span> @enderror
                                                                        </label>

                                                                        <input type="date" class="form-control" name="">
                                                                                
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                            @endif

                                            {{-- End Australian Setionn --}}



                                                     

                                        <!--   <div class=" col-md-3 " >
                                                        <button style="margin-top: 40px !important;" class="btn btn-success add_item_btn03 mr-5"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                                    </div>
                                          </div> -->


                                          @if($Country == 'United Kingdom')

                                          

                                              <div class="row">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 

                                                          Please note that there may be some documents listed below that you can’t obtain yet. Therefore, we’ll need to wait for these documents to be available.     If country is UK Required <br/>
                                                          [In order to prepare an accurate US return, your latest UK tax return and other documents are required. The UK tax return is needed in order to determine amounts of foreign tax credit we can use on your return (to reduce tax liability), based on the UK tax amounts.]      
                                                           </span>
                                                           <p>
                                                            
                                                           </p>
                                                          </div>
                                                </div>


                                                 <div class="form-group mt-4">
                                                                <div class="form-group col-md-7 light-grey">
                                                                    <label class="mb-2" for="">UK income tax returns including the Tax Calculation Pages for each year	  
                                                                    	@error('NumberofEmployers') <span class="error text-danger">*</span> @enderror
                                                                    </label><br/>
                                                              

                                                                </div>
                                                        </div>


                                                 <div class="row">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 

                            															For example: If you are filing 2018, 2019 and 2020 US Tax returns then we need the tax returns for the years ending April 5th, 2018, April 5th, 2019, April 5th, 2020 and April 5th, 2021 OR For example: If you are filing 2020 US Tax return then we need the two tax returns for tax years ending April 5th, 2020 and April 5th 2021
                            															 </span>
                            															 <p>
                            															 	
                            															 </p>
                                                          </div>
                                                </div>


                                                @for($i=0; $i < $UploadFileUKIncomeTax; $i++ )
                                                        <div class="form-group mt-4">
                                                                <div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="UUKIncomeTaxForm{{$i}}" type="file"  />
                                                                        </div>
                                                                    	</div>
                                                        </div>
                                                @endfor        

                                                        <div class="mt-2 d-flex">
                                                        	<label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded			
                                                            </label> 

                                                            <select wire:model="UploadFileUKIncomeTax" class="">
                                                            	
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


                                                      <div class="mt-4 d-flex">
                                                        	<label  class="light-grey mr-3" 
                                                                for="">Pay-slips from December of each year	
                                                            </label>

                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 
															For example: If you are filing 2018, 2019 and 2020 US Tax returns then we need the pay-slips for December 2017, December 2018, December 2019 and December 2020 or  For example: If you are filing 2020 US Tax return then we need the two December pay-slips for 2019 and 2020
															 </span>
															 <p>
															 	
															 </p>
                                                          </div>
                                                		</div>

                                                		@for($i=0; $i < $UploadFileUKPaySlips; $i++ )
                                                		<div class="form-group mt-1">
                                                                <div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="UKPaySlipForm" type="file"  />
                                                                        </div>
                                                                    	</div>
                                                        </div>
                                                        @endfor



                                                        <div class="mt-2 d-flex">
                                                        	<label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded			
                                                            </label> 

                                                            <select wire:model="UploadFileUKPaySlips" class="">
                                                            	
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


                                                        <div class="form-group mt-4">
                                                                <div class="form-group mt-4">
                                                                        <div class="file btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> P-60 forms 
                                                                        <input wire:model="P60Forms" type="file"  />
                                                                        </div>
                                                                    	</div>
                                                        </div>
                                                        <div class="row mt-3">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 
															For example: If you are filing 2018, 2019 and 2020 US Tax returns then we need the P-60 forms for tax years ending  April 5th, 2018, April 5th, 2019, April 5th, 2020 and April 5th, 2021  or for example: If you are filing 2020 US Tax return then we need the two P60-s forms for tax years ending April 5th, 2020 and April 5th 2021
															 </span>
															 <p>
															 	
															 </p>
                                                          </div>
                                                		</div>

                                                		<div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Did you terminate your employment during the year?   @error('DidYouTerminateYourContract') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                    
                                                                    <input wire:model="DidYouTerminateYourContract" type="radio" class="btn-check" id="DidYouTerminateYourContractYes" autocomplete="off" name="DidYouTerminateYourContract" value="yes">
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  for="DidYouTerminateYourContractYes">Yes</label>

                                                                    <input wire:model="DidYouTerminateYourContract" type="radio" class="btn-check" id="DidYouTerminateYourContractNo" name="DidYouTerminateYourContract" value="no" >
                                                                    <label  class="btn btn-outline-secondary btn-site-primary mr-3" for="DidYouTerminateYourContractNo">No</label>

                                                                </div>
                                                            </div> 

                                                            @if($DidYouTerminateYourContract === 'yes')
                                                            <div class="form-group mt-4">
                                                                <div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload P-45 forms
                                                                        <input wire:model="UploadP45" type="file"  />
                                                                        </div>
                                                                    	</div>
                                                            </div>
                                                            @endif


                                                            <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Were you employed by more than one employer?   @error('EmployedByMoreOneEmployer') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                    
                                                                    <input wire:model="EmployedByMoreOneEmployer" type="radio" class="btn-check" id="EmployedByMoreOneEmployerYes" autocomplete="off" name="EmployedByMoreOneEmployer" value="yes">
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  for="EmployedByMoreOneEmployerYes">Yes</label>

                                                                    <input wire:model="EmployedByMoreOneEmployer" type="radio" class="btn-check" id="EmployedByMoreOneEmployerNo" name="EmployedByMoreOneEmployer" value="no" >
                                                                    <label  class="btn btn-outline-secondary btn-site-primary mr-3" for="EmployedByMoreOneEmployerNo">No</label>

                                                                </div>
                                                            </div> 


                                                            @if($EmployedByMoreOneEmployer === 'yes')

                                                             <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">WProvide exact dates you worked for each employer  @error('EmployedByMoreOneEmployer') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                </div>
                                                            </div>


                                                            <div class="row" id="show_item03">
                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey button_group">
                                                                        
                                                                       
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-12 ml-5">
                                                                        <div class="form-group">
                                                                            <div class="form-group light-grey">
                                                                              <label class="mb-2" for="">Employer Name		  @error('EmployerName') <span class="error text-danger">*</span> @enderror
                                                                    		</label>

                                                                    		<input type="text" class="form-control" name="">

                                                                    		<label class="mb-2" for="">Dates of Employment		  @error('DatesofEmployment') <span class="error text-danger">*</span> @enderror
                                                                    		</label>

                                                                    		<input type="date" class="form-control" name="">
                                                                                
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                  <!--   <div class=" col-md-3 " >
                                                        <button style="margin-top: 40px !important;" class="btn btn-success add_item_btn03 mr-5"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                                    </div>
                                                </div> -->

                                                            @endif

                                                @endif

                                                 {{-- End UK Section --}}




                                                 {{-- Canadian Section --}}
                                                 @if($Country == 'Canada')
                                                 <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Upload your Canadian income tax returns   @error('CanadianIncomeTaxReturns') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                    

                                                                </div>
                                                </div>
                                                

                                                 @for($i=0; $i < $NumberofUploadsCanadianForms; $i++ )
                                                		<div class="form-group mt-1">
                                                                <div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="UploadCanadianForms" type="file"  />
                                                                        </div>
                                                                    	</div>
                                                        </div>
                                                        @endfor



                                                        <div class="mt-2 d-flex">
                                                        	<label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded			
                                                            </label> 

                                                            <select wire:model="NumberofUploadsCanadianForms" class="">
                                                            	
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


                                                        <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Upload your T4 Wage statements		   @error('T4WageStatements') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                    

                                                                </div>
                                                        </div>


                                                        @for($i=0; $i < $NumberofT4WageStatements; $i++ )
                                                		<div class="form-group mt-1">
                                                                <div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="UploadT4WageStatements" type="file"  />
                                                                        </div>
                                                                    	</div>
                                                        </div>
                                                        @endfor



                                                        <div class="mt-2 d-flex">
                                                        	<label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded			
                                                            </label> 

                                                            <select wire:model="NumberofT4WageStatements" class="">
                                                            	
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

                                                        {{-- End Canadian Section --}}




                                                    @if($Country != 'Israel' || $Country != 'Australia' || $Country != 'United Kingdom')

                                                      <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Upload the tax return/s filed in your country with the tax calculation pages and all the supporting documentation  @error('SupportingTaxDocuments') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                    

                                                                </div>
                                                    </div>

                                                    @for($i=0; $i < $NumberofSupportingDocuments; $i++ )
                                                    <div class="form-group mt-1">
                                                                <div class="form-group mt-2">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="UploadSupportingDocuments" type="file"  />
                                                                        </div>
                                                                      </div>
                                                    </div>
                                                    @endfor



                                                        <div class="mt-2 d-flex">
                                                          <label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded     
                                                            </label> 

                                                            <select wire:model="NumberofSupportingDocuments" class="">
                                                              
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


                                                        <div class="row mt-3">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 
                                                          If relevant please translate on the actual document  the key words  such as income; wages; passive income (interest, dividends, capital gains, 
                                                          business income, and rental income - both gross income and expenses); 
                                                          employer contributions to pension; and tax payment</span>
                                                             <p>
                                
                                                             </p>
                                                          </div>
                                                    </div>


                                                    <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Upload the wage statements      @error('WageStatements') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                    

                                                                </div>
                                                        </div>

                                                        @for($i=0; $i < $NumberofWageSatements; $i++ )
                                                    <div class="form-group mt-1">
                                                                <div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your forms
                                                                        <input wire:model="UploadSupportingDocuments" type="file"  />
                                                                        </div>
                                                                      </div>
                                                        </div>
                                                        @endfor



                                                        <div class="mt-2 d-flex">
                                                          <label  class="light-grey mr-3" 
                                                                for="">Amount of forms uploaded     
                                                            </label> 

                                                            <select wire:model="NumberofWageSatements" class="">
                                                              
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

                                                    

                                                <div class="row">

                                                  <div class="comment-area">
                                                              <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                                                                <i class="fas fa-message"></i> Add Comment
                                                              </div>
                                                  </div>

                                                  <div class=" offset-md-7">
                                                        
                                                        <div class="rows mr-auro">
                                                          
                                                          <div class="d-flex">

                                                                <div class="mr-5">
                                                                    <button wire:click="submitWages" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small"> Foreign Erned Income 
                                                                        <i class="fas fa-arrow-right button_font_small"></i>
                                                                      </span>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                  </div>
                                                  

                                                </div>

                                                  


                                        </div>
                                        {{-- End Step 1 --}}








<script>
$('.tp').tooltip({
  customClass:'my-custom'
});

</script>

</div>
