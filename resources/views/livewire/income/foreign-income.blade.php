<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

                                      <div class="row mt-4 stepwizard">
                                          <div class="col-md-12 ">
                                             <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                <ol class="breadcrumb cs-breadcrumbs">
                                                   
                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                                                    <a class="light-grey" href="#">Taxpayer</a></li>

                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 2 ? 'section-active' : '' }} ">
                                                    <a class="light-grey" href="#">Spouse</a>
                                                   </li>


                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 3 ? 'section-active' : '' }}"><a class="light-grey" href="#">Foreign Housing Exclusion/Deduction</a>
                                                   </li>

                                                  <!--  <li class="breadcrumb-item mr-3 {{ $currentStep == 4 ? 'section-active' : '' }}"><a class="light-grey" href="#">Foreign Housing Exclusion/Deduction</a>
                                                   </li> -->

                                               
                                                </ol>
                                              </nav>
                                          </div>
                                        </div>


                                         {{-- Section 1 --}}
                                            <div class="{{ $currentStep != 1 ? 'display-none' : '' }} " id="step-1">
                                             
                                            	   <div class="row mt-4">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 
															if they filled this out last year - make it auto fill out same as what was filled last year, and if they want they can change details <br/>
															 </span>
															 <p>
															 	
															 </p>
                                                          </div>
                                                        </div>

    	                                            <div class="row">
    	                                            </div>


                                                    <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Please provide the name and address of your 
                                                                </label><br/>
                                                               
                                                               <div class="mt-4">
                                                               	 <input wire:model="nameofEmployer" placeholder="Employers Name" type="text" class="form-control col-md-2">
                                                               </div>

                                                               <div class="mt-4">
                                                               	 <input wire:model="addressofEmployer" placeholder="Address" type="text" class="form-control col-md-2">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Of what country(ies) are you a citizen/national? 
                                                                </label><br/>
                                                               
                                                               <div class="mt-1">
                                                               	 <input wire:model="countryofResidence" placeholder="Employers Name" type="text" class="form-control col-md-2">
                                                               </div>

                                                               
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                  <div class="form-group mt-4">
                                                                <div class="col-md-7 light-grey">
                                                                    <label class="mb-2" for="">Did you maintain a separate foreign residence for your family because of adverse living conditions at your tax home?</label><br/>
                                                                    
                                                                    <input wire:model="SeparateForeignResidence" type="radio" class="btn-check" id="SeparateForeignResidenceyes" name="SeparateForeignResidence" value="yes" onchange="">
                                                                    <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="SeparateForeignResidenceyes">Yes</label>

                                                                    <input wire:model="SeparateForeignResidence" type="radio" class="btn-check" id="SeparateForeignResidenceno" name="SeparateForeignResidence" value="no" >
                                                                    <label class="btn btn-outline-secondary btn-site-primary mr-3" for="SeparateForeignResidenceno">No</label>

                                                                </div>
                                                </div>


                                                @if($SeparateForeignResidence === 'yes')

                                                <div class="form-group mt-4">
                                                                <div class="col-md-7 light-grey">
                                                                    <label class="mb-2" for="">Please provide city and country of second separate foreign residence and number of days you maintained a household there</label><br/>
                                                                    
                                                                    <input wire:model="SecondCityAndCountry" type="text" class="form-control col-md-2">
                                                                

                                                                </div>
                                                </div>

                                                @endif


                                                <div class="form-group mt-4">
                                                                <div class="col-md-7 light-grey">
                                                                    <label class="mb-2" for="">What was your country of residence during the year?</label><br/>
                                                                    
                                                                    <input wire:model="CountryofResidence" type="text" class="form-control col-md-2">
                                                                </div>
                                                </div>


                                                <div class="form-group mt-4">
                                                    <div class="col-md-3 light-grey">
                                                        <label class="mb-2" for="">When did you move to your country of residence?</label>
                                                        <br/>         
                                                        <input wire:model="WhenDidYouMove" type="date" class="form-control col-md-2">
                                                    </div>
                                                </div>


                                                 <div class="form-group mt-4">
                                                    <div class="col-md-3 light-grey">
                                                        <label class="mb-2" for="">If you have since moved away from the above country, please provide the date on which your residence ended</label>
                                                        <br/>         
                                                        <input wire:model="DateMoved" type="date" class="form-control col-md-2">
                                                    </div>
                                                </div>


                                                <div class="form-group mt-4">
                                                    <div class="col-md-7 light-grey">
                                                        <label class="mb-2" for="">Please specify which statement is applicable to you regarding your living quarters in the foreign country </label>
                                                        <br/>         
                                                       <select class="form-control">
                                                       	<option value="Purchased home">Purchased home</option>
                                                       	<option value="Rented house or apartment">Rented house or apartment</option>
                                                       	<option value="Rented a room">Rented a room</option>
                                                       	<option value="Quarters furnished by employer">Quarters furnished by employer</option>
                                                       
                                                       </select>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Did any of your family lived with you abroad during any part of the tax year? 
                                                                </label><br/>
                                                           <input type="radio" wire:model="HadFamilyMember"  class="btn-check form-check-input " name="HadFamilyMember" id="HadFamilyMemberYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="HadFamilyMemberYes">Yes</label> 

                                                                <input wire:model="HadFamilyMember" type="radio" class="btn-check form-check-input" name="HadFamilyMember" id="HadFamilyMemberNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="HadFamilyMemberNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             </div>


                                             @if($HadFamilyMember === 'yes')

                                             	 <div class="row mt-3">
                                                    
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Relative
                                                                </label><br/>
                                                            <select class="form-control">
                                                            	<option>Wife</option>
                                                            	<option>Husband</option>
                                                            	<option>Son</option>
                                                            	<option>Daughter</option>
                                                            </select>
                                                    	</div>
                                                   
                                             		</div>


                                             		<div class="col-md-10 d-flex">
                                             			
                                             			<div class="form-group mt-4">
		                                                    <div class="col-md-12 light-grey">
		                                                        <label class="mb-2" for="">From</label>
		                                                        <br/>         
		                                                        <input wire:model="DateMoved" type="date" class="form-control col-md-2">
		                                                    </div>
		                                                </div>

		                                                <div class="form-group mt-4">
		                                                    <div class="col-md-12 light-grey">
		                                                        <label class="mb-2" for="">From</label>
		                                                        <br/>         
		                                                        <input wire:model="DateMoved" type="date" class="form-control col-md-2">
		                                                    </div>
		                                                </div>

                                             		</div>


                                             	</div>





                                             @endif



                                             <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Have you submitted a statement to the authorities of the foreign country where you claim residence that you are not a resident of that country? 
                                                                </label><br/>
                                                           <input type="radio" wire:model="SubmittedStatement"  class="btn-check form-check-input " name="SubmittedStatement" id="SubmittedStatementYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="SubmittedStatementYes">Yes</label> 

                                                                <input wire:model="SubmittedStatement" type="radio" class="btn-check form-check-input" name="SubmittedStatement" id="SubmittedStatementNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="SubmittedStatementNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             </div>


                                             <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Are you required to pay income tax to the foreign country where you claim residence? 
                                                                </label><br/>
                                                           <input type="radio" wire:model="RequiredToPayTaxToResidentCountry"  class="btn-check form-check-input " name="RequiredToPayTaxToResidentCountry" id="RequiredToPayTaxToResidentCountryYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="RequiredToPayTaxToResidentCountryYes">Yes</label> 

                                                                <input wire:model="RequiredToPayTaxToResidentCountry" type="radio" class="btn-check form-check-input" name="RequiredToPayTaxToResidentCountry" id="RequiredToPayTaxToResidentCountryNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="RequiredToPayTaxToResidentCountryNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             </div>


                                             <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Were you present in the US during the tax year? 
                                                                </label><br/>
                                                           <input type="radio" wire:model="PresentInUS"  class="btn-check form-check-input " name="PresentInUS" id="PresentInUSYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="PresentInUSYes">Yes</label> 

                                                                <input wire:model="PresentInUS" type="radio" class="btn-check form-check-input" name="PresentInUS" id="PresentInUSNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="PresentInUSNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             </div>

                                             @if($PresentInUS === 'yes')
                                             <div class="col-md-10">
                                             			
                                             			<div class="form-group mt-4">
		                                                    <div class="col-md-3 light-grey">
		                                                        <label class="mb-2" for="">Date of Arrival in the US</label>
		                                                        <br/>         
		                                                        <input wire:model="DateofArrival" type="date" class="form-control col-md-2">
		                                                    </div>
		                                                </div>

		                                                <div class="form-group mt-4">
		                                                    <div class="col-md-3 light-grey">
		                                                        <label class="mb-2" for="">Date Left the US</label>
		                                                        <br/>         
		                                                        <input wire:model="DateofDeparture" type="date" class="form-control col-md-2">
		                                                    </div>
		                                                </div>

		                                                <div class="form-group mt-4">
		                                                    <div class="col-md-3 light-grey">
		                                                        <label class="mb-2" for="">Number of Days in the US on Business</label>
		                                                        <br/>         
		                                                        <input wire:model="NumberofBusinessDaysInUS" type="number" class="form-control col-md-2">
		                                                    </div>
		                                                </div>

		                                                <div class="form-group mt-4">
		                                                    <div class="col-md-6 light-grey">
		                                                        <label class="mb-2" for="">Income earned in the US</label>
		                                                        <br/>         
		                                                        <input wire:model="IncomeEarnedUS" type="number" class="form-control col-md-2">
		                                                    </div>
		                                                </div>

		                                                

                                             </div>
                                             @endif


                                             <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Please list any contractual terms or conditions relating to the length of your employment abroad: 
                                                                </label><br/>
                                                           <input wire:model="Contract" type="text" class="form-control"  />

                                                        </div>
                                                    </div>
                                                   
                                             </div>

                                             <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Under what type of visa did you enter the foreign coutry? 
                                                                </label><br/>
                                                           <input wire:model="TypeofVisa" type="text" class="form-control"  />

                                                        </div>
                                                    </div>
                                                   
                                             </div>


                                             <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Did your visa limit the length of your stay or employment in the country? If yes, in what way?
                                                                </label><br/>
                                                           <input type="radio" wire:model="VisaLimitation"  class="btn-check form-check-input " name="VisaLimitation" id="VisaLimitationYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="VisaLimitationYes">Yes</label> 

                                                                <input wire:model="VisaLimitation" type="radio" class="btn-check form-check-input" name="VisaLimitation" id="VisaLimitationNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="VisaLimitationNo">No</label>

                                                        </div>
                                                    </div>
                                                   
                                             </div>


                                             @if($VisaLimitation === 'yes')
                                              <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Did you maintain a home in the U.S. while living abroad?
                                                                </label><br/>
                                                           <input type="radio" wire:model="DidYouMaintainHome"  class="btn-check form-check-input " name="DidYouMaintainHome" id="DidYouMaintainHomeYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="DidYouMaintainHomeYes">Yes</label> 

                                                                <input wire:model="DidYouMaintainHome" type="radio" class="btn-check form-check-input" name="DidYouMaintainHome" id="DidYouMaintainHomeNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="DidYouMaintainHomeNo">No</label>

                                                        </div>
                                                    </div>
                                                   
                                             </div>
                                             @endif



                                             @if($DidYouMaintainHome === 'yes')
                                              <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Provide the address of the home, whether it was rented out, the names of the occupants, and their relationship to you. 
                                                                </label><br/>
                                                           <input type="radio" wire:model="HomeAddress"  class="form-control" name="DidYouMaintainHome"  >
                                                            

                                                        </div>
                                                    </div>
                                                   
                                             </div>
                                             @endif



                                              <div class="row">

                                                <div class="comment-area">
                                                              <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                                                                <i class="fas fa-message"></i> Add Comment
                                                              </div>
                                                  </div>
                        
                                                    <div class="offset-md-7">
                                                        <div class="rows mr-auro">
                                                            
                                                            <div class="d-flex ">
                                                               
                                                             


                                                               
                                                                <div class="mr-5">
                                                                    <button wire:click="submitTaxperDetails" class="btn btn-outline-secondary  btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Spouse  <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>
                                                              

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                                </div>










    	                                    </div>
    	                                     {{-- End Section 1 --}}






    	                                     {{-- Section 2 --}}
                                            <div class="{{ $currentStep != 2 ? 'display-none' : '' }} " id="step-2">

                                            	<div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Please provide the name and address of your 
                                                                </label><br/>
                                                               
                                                               <div class="mt-4">
                                                               	 <input wire:model="SpouseNameofEmployer" placeholder="Employer's Name" type="text" class="form-control col-md-2">
                                                               </div>

                                                               <div class="mt-4">
                                                               	 <input wire:model="SpouseAddressofEmployer" placeholder="Address" type="text" class="form-control col-md-2">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Of what country(ies) are you a citizen/national?</label><br/>
                                                               
                                                               <div class="mt-4">
                                                               	 <select class="form-control"></select>
                                                               </div>

                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Did you maintain a separate foreign residence for your family because of adverse living conditions at your tax home?
                                                                    @error('SpouseSeparateForeignAddress')<span class="error">*</span> @enderror
                                                                </label><br/>
                                                           <input type="radio" wire:model="SpouseSeparateForeignAddress"  class="btn-check form-check-input " name="SpouseSeparateForeignAddress" id="SpouseSeparateForeignAddressYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="SpouseSeparateForeignAddressYes">Yes</label> 

                                                                <input wire:model="SpouseSeparateForeignAddress" type="radio" class="btn-check form-check-input" name="SpouseSeparateForeignAddress" id="SpouseSeparateForeignAddressNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="SpouseSeparateForeignAddressNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             	</div>

                                             	@if($SpouseSeparateForeignAddress === 'yes')

                                             	 <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Of what country(ies) are you a citizen/national?</label><br/>
                                                               
                                                               <div class="mt-1">
                                                               	 <select class="form-control"></select>
                                                               </div>

                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                             	@endif


                                             	<div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">What was your country of residence during the year?
                                                                    @error('DoyouHaveSalaryIncome')<span class="error">*</span> @enderror
                                                                </label><br/>
                                                           <input type="radio" wire:model="CountryofResidenceDuringYear"  class="btn-check form-check-input " name="CountryofResidenceDuringYear" id="CountryofResidenceDuringYearYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="CountryofResidenceDuringYearYes">Yes</label> 

                                                                <input wire:model="CountryofResidenceDuringYear" type="radio" class="btn-check form-check-input" name="CountryofResidenceDuringYear" id="CountryofResidenceDuringYearNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="CountryofResidenceDuringYearNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             	</div>



                                             	<div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">When did you move to your country of residence?</label><br/>

                                                                <div class="mt-1 col-md-3 light-grey">
                                                               	 <input type="date" class="form-control" wire:model="DateMovedToCountryOfResidence">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                             	<div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">If you have since moved away from the above country, please provide the date on which your residence ended</label><br/>

                                                                <div class="mt-1 col-md-3 light-grey">
                                                               	 <input type="date" class="form-control" wire:model="DateMovedFromResidenceCountry">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Please specify which statement is applicable to you regarding your living quarters in the foreign country</label><br/>

                                                                <div class="mt-1 col-md-5">
                                                               	<select wire:model="LivingQuarters" class="form-control light-grey">
                                                               		<option value="Purchased home">Purchased home</option>
                                                               		<option value ="Rented house or apartment">Rented house or apartment</option>
                                                               		<option value="Rented a room">Rented a room/</option>
                                                               		<option value="Quarters furnished by employer">Quarters furnished by employer</option>

                                                               	</select>
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Did any of your family lived with you abroad during any part of the tax year? 
                                                                    
                                                                </label><br/>
                                                           <input type="radio" wire:model="DidFamilyLiveWithYou"  class="btn-check form-check-input " name="DidFamilyLiveWithYou" id="DidFamilyLiveWithYouYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="DidFamilyLiveWithYouYes">Yes</label> 

                                                                <input wire:model="DidFamilyLiveWithYou" type="radio" class="btn-check form-check-input" name="DidFamilyLiveWithYou" id="DidFamilyLiveWithYouNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="DidFamilyLiveWithYouNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             	</div>


                                             	@if($DidFamilyLiveWithYou === 'yes')

                                             	  <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Please specify who (which relative) and for what period:</label><br/>

                                                                <div class="mt-1 col-md-5 light-grey">
                                                               	 <input type="text" class="form-control" placeholder="Name of Relative" wire:model="NameOfRelative">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                             	<div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">From</label><br/>

                                                                <div class="mt-1 col-md-3 light-grey">
                                                               	 <input type="date" class="form-control" wire:model="LivedInStartDate">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">To</label><br/>

                                                                <div class="mt-1 col-md-3">
                                                               	 <input type="date" class="form-control" wire:model="LivedInEndDate">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                             	@endif



                                             	<div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Have you submitted a statement to the authorities of the foreign country where you claim residence that you are not a resident of that country?
                                                                    
                                                                </label><br/>
                                                           <input type="radio" wire:model="SubmittedAuthorizedStatement"  class="btn-check form-check-input " name="SubmittedAuthorizedStatement" id="SubmittedAuthorizedStatementYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="SubmittedAuthorizedStatementYes">Yes</label> 

                                                                <input wire:model="SubmittedAuthorizedStatement" type="radio" class="btn-check form-check-input" name="SubmittedAuthorizedStatement" id="SubmittedAuthorizedStatementNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="SubmittedAuthorizedStatementNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             	</div>



                                             	<div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Are you required to pay income tax to the foreign country where you claim residence?
                                                                    
                                                                </label><br/>
                                                           <input type="radio" wire:model="RequiredToPayIncomeTax"  class="btn-check form-check-input " name="RequiredToPayIncomeTax" id="RequiredToPayIncomeTaxYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="RequiredToPayIncomeTaxYes">Yes</label> 

                                                                <input wire:model="RequiredToPayIncomeTax" type="radio" class="btn-check form-check-input" name="RequiredToPayIncomeTax" id="RequiredToPayIncomeTaxNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="RequiredToPayIncomeTaxNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             	</div>




                                             	<div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label class="mb-2" for="">Were you present in the US during the tax year?
                                                                    
                                                                </label><br/>
                                                           <input type="radio" wire:model="WereYouprenstInUS"  class="btn-check form-check-input " name="WereYouprenstInUS" id="WereYouprenstInUSYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="WereYouprenstInUSYes">Yes</label> 

                                                                <input wire:model="WereYouprenstInUS" type="radio" class="btn-check form-check-input" name="WereYouprenstInUS" id="WereYouprenstInUSNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="WereYouprenstInUSNo">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                             	</div>


                                             	@if($WereYouprenstInUS === 'yes')

                                             		<div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date of Arrival in the US</label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="date" class="form-control" wire:model="DateArrivedInUS">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date Left the US</label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="date" class="form-control" wire:model="DateLeftInUS">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Number of Days in the US on Business</label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="number" class="form-control" wire:model="NumberofDaysInUS">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Income earned in the US</label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="IncomeErned">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                             	@endif


                                             	<div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Please list any contractual terms or conditions relating to the length of your employment abroad</label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="TNC">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                             	<div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Under what type of visa did you enter the foreign coutry?</label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="VisaType">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Did your visa limit the length of your stay or employment in the country? If yes, in what way?</label><br/>

                                                                <input type="radio" wire:model="VisaLimit"  class="btn-check form-check-input " name="VisaLimit" id="VisaLimitYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="VisaLimitYes">Yes</label> 

                                                                <input wire:model="VisaLimit" type="radio" class="btn-check form-check-input" name="VisaLimit" id="VisaLimitNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="VisaLimitNo">No</label> 
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                @if($VisaLimit === 'yes')

                                                	<div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">In What Way</label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="InWhatWay">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endif


                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Provide the address of the home, whether it was rented out, the names of the occupants, and their relationship to you. </label><br/>

                                                                <input type="radio" wire:model="SpouseDidYouMaintainHome"  class="btn-check form-check-input " name="SpouseDidYouMaintainHome" id="SpouseDidYouMaintainHomeYes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                                for="SpouseDidYouMaintainHomeYes">Yes</label> 

                                                                <input wire:model="SpouseDidYouMaintainHome" type="radio" class="btn-check form-check-input" name="SpouseDidYouMaintainHome" id="SpouseDidYouMaintainHomeNo"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="SpouseDidYouMaintainHomeNo">No</label> 
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if($SpouseDidYouMaintainHome === 'yes')

                                                <div class="row mt-4">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Provide the address of the home, whether it was rented out, the names of the occupants, and their relationship to you. </label><br/>

                                                                <div class="mt-1 col-md-4 light-grey">
                                                               	 <input type="text" class="form-control" wire:model="OccupantsAddress">
                                                               </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endif


                                                <div class="row">

                                                  <div class="comment-area">
                                                              <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                                                                <i class="fas fa-message"></i> Add Comment
                                                              </div>
                                                  </div>
                                                  
                                                <div  class="row mt-5">
                                                            <div class="col-md-10 offset-md-2">
                                                                <div class="row mr-auro">
                                                                    <div class="mr-5 button_font_small">

                                                                       <button wire:click="back" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                          <span class="pl-1 button_font_small">Spouse</span>
                                                                      </button>

                                                                        <button wire:click="submitSpouseDetails" type="button" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white mb-5 mt-5 button_font_small"> Foreign Housing Exclusion/Deduction <i class="fas fa-arrow-right button_font_small"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>

                                                </div>

                                                


                                             	<p>
                                             		&nbsp;
                                             	</p>
                                             		<p>
                                             		&nbsp;
                                             	</p>

                                            </div>
                                            {{-- End Section 2 --}}
                                        			



                                            {{--  Section 3 --}}

                                             <div class="{{ $currentStep != 3 ? 'display-none' : '' }} " id="step-3">

                                             	
                                             	<div class="row mt-1">
                                                          <div class="col-md-8 text-info">
                                                          <span>
                                                          <i class="fa fa-regular fa-circle-info "></i> 
															 Only complete if your income is above $100,000
															 <br/>
															 The following is a general list of allowable expenses used to calculate your foreign housing exclusion/deduction.  Please provide amounts of actual expenses incurred during the tax year.
                              							  </span>
                                                </div>


                                                <div class="form-group mt-2">
                                                        <div class="form-group light-grey">
                                                           <label class="mb-2" for="">Rent </label><br/>
                                                            <div class="mt-1 col-md-4 light-grey">
                                                              <input type="text" class="form-control" wire:model="Rent">
                                                            </div>

                                                        </div>
                                                </div>

                                                <div class="form-group mt-2">
                                                        <div class="form-group light-grey">
                                                           <label class="mb-2" for="">Household repairs and maintenance </label><br/>
                                                            <div class="mt-1 col-md-4 light-grey">
                                                              <input type="text" class="form-control" wire:model="HouseholdRepairs">
                                                            </div>

                                                        </div>
                                                </div>


                                                <div class="form-group mt-2">
                                                        <div class="form-group light-grey">
                                                           <label class="mb-2" for="">Utilities (other than telephone) </label><br/>
                                                            <div class="mt-1 col-md-4 light-grey">
                                                              <input type="text" class="form-control" wire:model="Utilities">
                                                            </div>

                                                        </div>
                                                </div>


                                                <div class="form-group mt-2">
                                                        <div class="form-group light-grey">
                                                           <label class="mb-2" for="">Real property and personal property insurance </label><br/>
                                                            <div class="mt-1 col-md-7 light-grey">
                                                              <input type="text" class="form-control" wire:model="RealProperty">
                                                            </div>

                                                        </div>
                                                </div>


                                                <div class="form-group mt-2">
                                                        <div class="form-group light-grey">
                                                           <label class="mb-2" for="">Occupancy taxes </label><br/>
                                                            <div class="mt-1 col-md-4 light-grey">
                                                              <input type="text" class="form-control" wire:model="OccupancyTaxes">
                                                            </div>

                                                        </div>
                                                </div>


                                                 <div class="form-group mt-2">
                                                        <div class="form-group light-grey">
                                                           <label class="mb-2" for="">Nonrefundable security deposits </label><br/>
                                                            <div class="mt-1 col-md-4 light-grey">
                                                              <input type="text" class="form-control" wire:model="Nonrefundable">
                                                            </div>

                                                        </div>
                                                </div>


                                                <div class="form-group mt-2">
                                                        <div class="form-group light-grey">
                                                           <label class="mb-2" for="">Furniture rental </label><br/>
                                                            <div class="mt-1 col-md-4 light-grey">
                                                              <input type="text" class="form-control" wire:model="FurnitureRental">
                                                            </div>

                                                        </div>
                                                </div>



                                                <div class="form-group mt-2">
                                                        <div class="form-group light-grey">
                                                           <label class="mb-2" for="">Residential parking fees </label><br/>
                                                            <div class="mt-1 col-md-4 light-grey">
                                                              <input type="text" class="form-control" wire:model="ResidentialParking">
                                                            </div>

                                                        </div>
                                                </div>

                                                
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
                                                                          <span class="pl-1 button_font_small">Foreign Housing Exclusion/Deduction</span>
                                                                      </button>

                                                                        <button wire:click="submitForeignHousingDetails" type="button" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white mb-5 mt-5 button_font_small"> Business INcome <i class="fas fa-arrow-right button_font_small"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>


                                             </div>


                                            {{-- End Section 3 --}}








</div>
