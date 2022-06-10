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

                                                        @if($DidYouReceiveAnyCompensation === 'yes')

                                                           @for($i=0; $i < $NumberofFormsToUploadDidYouReceiveAnyCompensation; $i++ )
                       													<div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-success cs-file-upload">
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
                                                                    <label class="mb-2" for="">Upload your Australian income tax returns and Notice of Assessments for all relevant tax years <!-- <i class="fa fa-regular fa-circle-info tp" data-bs-toggle="tooltip" data-bs-placement="top" html="true" title="Please note that as an Australian, there may be some documents listed below that you can’t obtain yet. Therefore, we’ll need to wait for these documents to be available.
                                                                    	[In order to prepare an accurate US return, your latest Australian tax return and other documents are required. The Australian tax return is needed in order to determine amounts of foreign tax credit we can use on your return (to reduce tax liability), based on the Australian tax amounts.]. For example: If you are filing 2018, 2019 and 2020 US Tax returns then we need the tax returns for years ending June 30th, 2018, June 30th, 2019, June 30th 2020 and June 30th 2021. If you are filing 2020 US Tax return then we need the two tax returns for years ending June 30th 2020 and June 30th 2021">

                                                                    </i>  -->

                                                                    	@error('AustralianIncomeTax')
                                                                    	<span class="error text-danger">*</span> @enderror
                                                                    </label><br/>


                                                                </div>
                                                        </div>

                                                        @for($i=0; $i < $NumberofFormsToUploadAustralianIncomeTax; $i++ )
                       													<div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-success cs-file-upload">
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
               											{{--  --}}


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
                                                                <<div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-success cs-file-upload">
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
               											{{--
               												<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
															  Tooltip on top
															</button>
               											  --}}



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
                                                                    <label class="mb-2" for="">Were you employed by more than one employer?	  @error('NumberofEmployers') <span class="error text-danger">*</span> @enderror
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
                                                                    <label class="mb-2" for="">Provide exact dates you worked for each employer		  @error('EmployerDetails') <span class="error text-danger">*</span> @enderror
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
                                                                              <label class="mb-2" for="">Employer Name		  @error('EmployerName') <span class="error text-danger">*</span> @enderror
                                                                    		</label>

                                                                    		<input type="text" class="form-control" name="">

                                                                    		<label class="mb-2" for="">Dates of Employment		  @error('DatesofEmployment') <span class="error text-danger">*</span> @enderror
                                                                    		</label>

                                                                    		<input type="text" class="form-control" name="">

                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=" col-md-3 mt-3">
                                                        <button class="btn btn-success add_item_btn03 mr-5"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>


                                             <div class=" offset-md-7">
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








<script>
$('.tp').tooltip({
  customClass:'my-custom'
});

</script>

</div>
