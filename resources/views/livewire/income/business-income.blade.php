<div>
   
									<div class="row mt-4 stepwizard">
                                          <div class="col-md-12 ">
                                             <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                <ol class="breadcrumb cs-breadcrumbs">
                                                   
                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                                                    <a class="light-grey" href="#">Business information</a></li>

                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 2 ? 'section-active' : '' }} ">
                                                    <a class="light-grey" href="#">Income and expenses</a>
                                                   </li>


                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 3 ? 'section-active' : '' }}"><a class="light-grey" href="#">Cost of goods sold</a>
                                                   </li>

                                                  <!--  <li class="breadcrumb-item mr-3 {{ $currentStep == 4 ? 'section-active' : '' }}"><a class="light-grey" href="#">Foreign Housing Exclusion/Deduction</a>
                                                   </li> -->

                                               
                                                </ol>
                                              </nav>
                                          </div>
                                        </div>


                                            {{-- Section 1 --}}
                                            <div class="{{ $currentStep != 1 ? 'display-none' : '' }} " id="step-1">
                                            	
                                            	<div class="form-group mt-4">
                                                                <div class="col-md-7 light-grey">
                                                                    <label class="mb-2" for="">Are you self employed in Israel?
                                                                    	@error('EmployedInIsreal')<span class="error">*</span> @enderror
                                                                    </label><br/>
                                                                    
                                                                    <input wire:model="EmployedInIsreal" type="radio" class="btn-check" id="EmployedInIsrealyes" name="SeparateForeignResidence" value="yes" onchange="">
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="EmployedInIsrealyes">Yes</label>

                                                                    <input wire:model="EmployedInIsreal" type="radio" class="btn-check" id="SeparateForeignResidenceno" name="EmployedInIsreal" value="no" >
                                                                    <label class="btn btn-outline-secondary btn-site-primary mr-3" for="EmployedInIsrealno">No</label>

                                                                </div>
                                                </div>


                                                @if($EmployedInIsreal === 'yes')

                                                <div class="row mt-3" id="">
                                             			@for($i=0; $i < $NumberOfDochRevachForms; $i++)
                                             			   <div class="col-md-9 ml-5 mt-2">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <div class="form-group ">
                                                                        <div class="file btn btn-outline-success cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your Doch Revach v'Hefsed
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

                                                            <select wire:model="NumberOfDochRevachForms" class="">
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


                                                <div class="form-group mt-4">
                                                                <div class="col-md-7 light-grey">
                                                                    <label class="mb-2" for="">Are you self Employed?
                                                                    	@error('SelfEmployed')<span class="error">*</span> @enderror
                                                                    </label><br/>
                                                                    
                                                                    <input wire:model="SelfEmployed" type="radio" class="btn-check" id="SelfEmployedyes" name="SelfEmployed" value="yes" onchange="">
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="SelfEmployedyes">Yes</label>

                                                                    <input wire:model="SelfEmployed" type="radio" class="btn-check" id="SelfEmployedno" name="SelfEmployed" value="no" >
                                                                    <label class="btn btn-outline-secondary btn-site-primary mr-3" for="SelfEmployedno">No</label>

                                                                </div>
                                                </div>

                                                @if($SelfEmployed === 'yes')

                                                <div class="row">
                                                	<div class="col-md-6">
                                                		 <hr/>
                                                	</div>
                                                </div>

                                                 <h5 class="light-grey">Business Information</h5>

                                                 <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Name of Business-if you use your own name as your business name, please specify </label><br/>

                                                                <div class="mt-1 col-md-8 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="NameOfBusiness">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Address of business </label><br/>

                                                                <div class="mt-1 col-md-8 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="AddressOfBusiness">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Principle Business Activity </label><br/>

                                                                <div class="mt-1 col-md-8 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="PrincipleBusinessActivity">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Who Operates the Business </label><br/>

                                                                <div class="mt-1 col-md-8 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="BusinessOperator">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">When was the Business Started?</label><br/>

                                                                <div class="mt-1 col-md-8 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="BusinessStartDate">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did you employ any workers to whom you paid wages on a Form 1099?</label><br/>

                                                                <div class="mt-1 col-md-8 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="DidYouEmployeeWorkers">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">If so, did you or will you file all required Forms 1099?  </label><br/>
                                                                    
                                                                    <input wire:model="FileAllRequiredForm" type="radio" class="btn-check" id="FileAllRequiredFormYes"  name="FileAllRequiredForm" value="yes" >
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  
                                                                    for="FileAllRequiredFormYes">Yes</label>

                                                                    <input wire:model="FileAllRequiredForm" type="radio" class="btn-check" id="FileAllRequiredFormNo"  name="FileAllRequiredForm" value="no" >
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  
                                                                    for="FileAllRequiredFormNo">No</label>

                                                                    

                                                                </div>
                                                </div>


                                                <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Do you have other self-employed or 1099-NEC (Previously called 1099-MISC) income?  
                                                                    	@error('1099NECForm')<span class="error">*</span> @enderror
                                                                    </label><br/>
                                                                    
                                                                    <input wire:model="NECForm" type="radio" class="btn-check" 
                                                                    id="NECFormYes"  name="NECForm" value="yes" >
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  
                                                                    for="NECFormYes">Yes</label>

                                                                    <input wire:model="NECForm" type="radio" class="btn-check" id="NECFormNo"  name="NECForm" value="no" >
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  
                                                                    for="NECFormNo">No</label>

                                                                    

                                                                </div>
                                                </div>

                                                @if($NECForm === 'yes')

                                                @for($i=0; $i < $NumberofNECForms; $i++)
                                                <div class="form-group mt-4">
                                                                        <div class="file btn btn-outline-success cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> Upload your 1099-NEC
                                                                        <input wire:model="UploadNEC" type="file"  />
                                                                        </div>
                                                </div>
                                                @endfor



                                                <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                    <label class="mb-2" for="">Was this income from your 1099-NEC reported on your foreign tax return? 
                                                                    	@error('1099NECForm')<span class="error">*</span> @enderror
                                                                    </label><br/>
                                                                    
                                                                    <input wire:model="WasIncomeFromNEC" type="radio" class="btn-check" id="WasIncomeFromNECYes"  name="WasIncomeFromNEC" value="yes" >
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  
                                                                    for="WasIncomeFromNECYes">Yes</label>

                                                                    <input wire:model="WasIncomeFromNEC" type="radio" class="btn-check" id="WasIncomeFromNECNo"  name="WasIncomeFromNEC" value="no" >
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"  
                                                                    for="WasIncomeFromNECNo">No</label>

                                                                    

                                                                </div>
                                                </div>

                                                 @endif


                                                        <div class="mt-2 d-flex">
                                                        	<label  class="light-grey" for="DNumberofNECForms">Amount of forms uploaded			
                                                            </label> 

                                                            <select wire:model="NumberofNECForms" class="">
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



                                                <div class="row">
                                                	<div class="col-md-6">
                                                		 <hr/>
                                                	</div>
                                                </div>

                                                 <h5 class="light-grey"> GENERAL BUSINESS INFORMATION</h5>

                                                
                                                 <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Name of Business-if you use your own name as your business name, please specify </label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="GenBusinessName">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                               

                                                 


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Address of business </label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="GenBusinessAddress">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Principle Business Activity </label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="GenPrincipleBusiness">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Who Operates the Business </label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="GenBusinessOperator">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> When was the Business Started? </label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="GenBusinessStartDate">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Did you employ any workers to whom you paid wages on a Form 1099? </label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="GenDidYouEmployeeOtherWorker">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> If so, did you or will you file all required Forms 1099? </label><br/>

                                                                <select wire:model="GenWillFileForms" class="form-control">
                                                                	<option value="">---------</option>
                                                                	<option value="yes">Yes</option>
                                                                	<option value="no">No</option>
                                                                </select>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                @endif



                                                <div  class="row mt-5">

                                                    <div class="comment-area">
                                                              <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                                                                <i class="fas fa-message"></i> Add Comment
                                                              </div>
                                                  </div>

                                                            <div class="col-md-10 offset-md-6">
                                                                <div class="row mr-auro">
                                                                    <div class="mr-5 button_font_small">

                                                                    <!--    <button wire:click="back" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                          <span class="pl-1 button_font_small">Spouse</span>
                                                                      </button> -->

                                                                        <button wire:click="submitBusinessIncome" type="button" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white mb-5 mt-5 button_font_small"> Income and expenses <i class="fas fa-arrow-right button_font_small"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>


                                            </div>
                                            {{-- End Section 1 --}}





                                            {{-- Section 1 --}}
                                            <div class="{{ $currentStep != 2 ? 'display-none' : '' }} " id="step-2">
                                            	
                                            	  <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Tax year </label><br/>
                                                                <input type="text" class="form-control" wire:model="TaxYear" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">   Amount of gross receipts </label><br/>
                                                                <input type="text" class="form-control" wire:model="GrossReceipt" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="row mt-4">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 

                                                          Income and expense amounts should be recorded as per US tax year, January -December 31st. </span>
                                                          </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">   Currency in which income and expenses are recorded on this form </label><br/>
                                                                <input type="text" class="form-control" wire:model="Currency" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Do you have expenses? 
                                                                    
                                                                </label><br/>
                                                           <input type="radio" wire:model="DoYouHaveExpense"  class="btn-check form-check-input " name="DoYouHaveExpense" id="DoYouHaveExpenseYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="DoYouHaveExpenseYes">Yes</label> 

                                                                <input wire:model="DoYouHaveExpense" type="radio" class="btn-check form-check-input" name="DoYouHaveExpense" id="DoYouHaveExpenseNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="DoYouHaveExpenseNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             </div>


                                             @if($DoYouHaveExpense === 'yes')

                                                 <div class="row mt-4">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 

                                                          Expenses: Below is a general list of expenses that may be incurred in business.  Please provide expense amounts incurred in direct relation to your business during the tax year. 
                                              
															 </span>
                                                          </div>
                                                 </div>



                                                  <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Advertising </label><br/>
                                                                <input type="text" class="form-control" wire:model="Advertising" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Vehicle Expenses </label><br/>
                                                                <input type="text" class="form-control" wire:model="VehicleExpenses" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Commissions and Fees </label><br/>
                                                                <input type="text" class="form-control" wire:model="CommissionsFees" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>

                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Contract labor </label><br/>
                                                                <input type="text" class="form-control" wire:model="ContractLabor" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Cost of Goods sold (if you are claiming this expense, please fill out Part 4 below) </label><br/>
                                                                <input type="text" class="form-control" wire:model="CostOfGoods" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Depletion </label><br/>
                                                                <input type="text" class="form-control" wire:model="Depletion" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Employee benefits ( including employee health insurance) </label><br/>
                                                                <input type="text" class="form-control" wire:model="EmployeeBenefits" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Employee benefit programs </label><br/>
                                                                <input type="text" class="form-control" wire:model="EmployeeBenefitPrograms" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>



                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Insurance </label><br/>
                                                                <input type="text" class="form-control" wire:model="Insurance" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Self-employed health insurance </label><br/>
                                                                <input type="text" class="form-control" wire:model="SelfEmployedHealthInsurance" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>



                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Mortgage interest paid to banks (if appears on Form 1098, please specify and send the form) </label><br/>
                                                                <input type="text" class="form-control" wire:model="MortgageInterest" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>



                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Other interest payments </label><br/>
                                                                <input type="text" class="form-control" wire:model="OtherInterestPayments" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Legal and professional services </label><br/>
                                                                <input type="text" class="form-control" wire:model="LegalServices" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>



                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Office expenses </label><br/>
                                                                <input type="text" class="form-control" wire:model="OfficeExpenses" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Pension and profit sharing plans </label><br/>
                                                                <input type="text" class="form-control" wire:model="PensionProfitSharing plans" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Rent or lease of vehicles</label><br/>
                                                                <input type="text" class="form-control" wire:model="RentLeaseVehicles" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Rent or lease of machinery, equipment</label><br/>
                                                                <input type="text" class="form-control" wire:model="RentLeaseMachineryEquipment" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Rental or lease of other items (ex. Land)</label><br/>
                                                                <input type="text" class="form-control" wire:model="RentLeaseOtherItems" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Repairs and maintenance </label><br/>
                                                                <input type="text" class="form-control" wire:model="RepairsMaintenance" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Supplies (if not included in cost of goods sold) </label><br/>
                                                                <input type="text" class="form-control" wire:model="Supplies" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>



                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Taxes (if reported on a Form 1098, please specify and send) </label><br/>
                                                                <input type="text" class="form-control" wire:model="Taxes" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Travel </label><br/>
                                                                <input type="text" class="form-control" wire:model="Travel" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Meals </label><br/>
                                                                <input type="text" class="form-control" wire:model="Meals" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Wages expense  </label><br/>
                                                                <input type="text" class="form-control" wire:model="WagesExpense " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>



                                                 


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Other expenses (please specify) </label><br/>
                                                                <input type="text" class="form-control" wire:model="OtherExpenses" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                  
                                                 


                                            @endif

                                            <div  class="row mt-5">

                                                <div class="comment-area">
                                                              <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                                                                <i class="fas fa-message"></i> Add Comment
                                                              </div>
                                                  </div>


                                                            <div class="col-md-10 offset-md-2">
                                                                <div class="row mr-auro">
                                                                    <div class="mr-5 button_font_small">

                                                                       <button wire:click="back" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                          <span class="pl-1 button_font_small">Business information

																		  </span>
                                                                      </button>

                                                                        <button wire:click="submitIncomeExpense" type="button" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white mb-5 mt-5 button_font_small"> Cost of goods sold <i class="fas fa-arrow-right button_font_small"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                            </div>

                                                 
                                            </div>
                                            {{-- End Section 2 --}}







                                            {{-- Section 1 --}}
                                            <div class="{{ $currentStep != 3 ? 'display-none' : '' }} " id="step-3">
                                            	

                                               <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Do you have Cost of goods sold? 
                                                                    
                                                                </label><br/>
                                                           <input type="radio" wire:model="DoyouHaveCostOfGoodsSold"  class="btn-check form-check-input " name="DoyouHaveCostOfGoodsSold" id="DoyouHaveCostOfGoodsSoldYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="DoyouHaveCostOfGoodsSoldYes">Yes</label> 

                                                                <input wire:model="DoyouHaveCostOfGoodsSold" type="radio" class="btn-check form-check-input" name="DoyouHaveCostOfGoodsSold" id="DoyouHaveCostOfGoodsSoldNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="DoyouHaveCostOfGoodsSoldNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             	</div>	


                                             	@if($DoyouHaveCostOfGoodsSold === 'yes')


                                             	  <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> What method do you use to value your closing inventory (cost, lower of cost or market, or other?) </label><br/>
                                                                <select wire:model="InventoryMethod" class="form-control light-grey">
                                                                	<option value="cost">cost</option>
                                                                	<option value="lower of cost or market">lower of cost or market</option>
                                                                	<option value="others">others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>

                                                 <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Was there any changes in determining quantities, costs, or valuations between opening and closing inventory? If so, please explain. </label><br/>
                                                                <input type="text" class="form-control" wire:model="ChangeInQuantity" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> What was your inventory at the beginning of the year? </label><br/>
                                                                <input type="text" class="form-control" wire:model="InitialInventory" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Please enter the amount you spent on purchases </label><br/>
                                                                <input type="text" class="form-control" wire:model="AmountSpent" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>

                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Please enter the cost of items withdrawn for personal use </label><br/>
                                                                <input type="text" class="form-control" wire:model="CostOfWithDrawal" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>

                                                 
                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Please enter the cost of labor (excluding amounts paid to yourself) </label><br/>
                                                                <input type="text" class="form-control" wire:model="CostOfLabor" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Please enter the amount you spent on materials and supplies </label><br/>
                                                                <input type="text" class="form-control" wire:model="AmountOnMaterials" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>

                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> Please enter other costs: </label><br/>
                                                                <input type="text" class="form-control" wire:model="Cost" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>

                                                 <div class="row mt-4">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for=""> What was your year-end inventory amount? </label><br/>
                                                                <input type="text" class="form-control" wire:model="YearEndInventory" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div>


                                             	@endif


                                             	<div  class="row mt-5">

                                                    <div class="comment-area">
                                                              <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                                                                <i class="fas fa-message"></i> Add Comment
                                                              </div>
                                                  </div>
                                                    
                                                            <div class="col-md-10 offset-md-2">
                                                                <div class="row mr-auro">
                                                                    <div class="mr-5 button_font_small">

                                                                       <button wire:click="back" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                          <span class="pl-1 button_font_small">Cost of goods sold

																		  </span>
                                                                      </button>

                                                                        <button wire:click="submitCostOfGoods" type="button" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white mb-5 mt-5 button_font_small">Investment and Passive Income <i class="fas fa-arrow-right button_font_small"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                            </div>



                                            </div>
                                            {{-- End Section 1 --}}



</div>
