<div class="main-step-wrapper">
                                    <div class="row mt-4 stepwizard">
                                          <div class="col-md-12 ">
                                             <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                                <ol class="breadcrumb cs-breadcrumbs">
                                                   
                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                                                    <a class="light-grey" href="#"> Personal Info</a></li>

                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 2 ? 'section-active' : '' }} ">
                                                    <a class="light-grey" href="#"> ITIN Info</a>
                                                   </li>


                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 3 ? 'section-active' : '' }}"><a class="light-grey" href="#">Spouse Info</a>
                                                   </li>

                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 4 ? 'section-active' : '' }}"><a class="light-grey" href="#">Spouse ITIN Information</a>
                                                   </li>

                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 5 ? 'section-active' : '' }}"><a class="light-grey" href="#">Dependent</a>
                                                   </li>
                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 6 ? 'section-active' : '' }}"><a class="light-grey" href="#">Contact Info</a>
                                                   </li>

                                                   <li class="breadcrumb-item mr-3 {{ $currentStep == 7 ? 'section-active' : '' }}"><a class="light-grey" href="#">Bank Information</a></li>
                                               
                                                </ol>
                                              </nav>
                                          </div>
                                        </div>



                                      {{-- Step 1 --}}
                                      <div class="{{ $currentStep != 1 ? 'display-none' : '' }} " id="step-1">

                                                <div class="row">
                                                    <div class="col-md-8 text-info">
                                                    <span>
                                                    <i class="fa fa-regular fa-circle-info "></i> 

                                                    Please refer to your social security card when filling out this section. All Names, DOB, SSN etc. should appear EXACTLY as written on social security card(s).</span>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">First Name  
                                                                    @error('firstName') <span class="error text-danger">*</span> @enderror</label> <br/>
                                                                <input wire:model="firstName" type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Middle Name </label><br/>
                                                                <input wire:model="middleName" type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Last Name 
                                                                    @error('lastName')<span class="error">*</span> @enderror
                                                                </label><br/>
                                                                <input wire:model="lastName" type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-4 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date of Birth
                                                                    @error('TaxpayerDOB')<span class="error"> *</span> @enderror
                                                                </label><br/>
                                                                <input wire:model="TaxpayerDOB" type="date" class="form-control col-md-2" wire:model="dob">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Occupation 
                                                                    @error('occupation')<span class="error">*</span> @enderror
                                                                </label><br/>
                                                                <input type="text" wire:model="occupation" class="form-control col-md-2" name="personalOccupation">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                               <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label for="">Are you a US Citizen? 
                                                                    @error('AreYouUSCitizen')<span class="error">*</span> @enderror
                                                                </label><br/>
                                                           <input type="radio" wire:model="AreYouUSCitizen"  class="btn-check form-check-input " name="AreYouUSCitizen1" id="AreYouUSCitizen-1"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" for="AreYouUSCitizen-1">Yes</label> 

                                                                <input wire:model="AreYouUSCitizen" type="radio" class="btn-check form-check-input" name="AreYouUSCitizen1" id="AreYouUSCitizenno"   value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="AreYouUSCitizenno">No</label> 
                                                        </div>
                                                    </div>
                                                   
                                               </div>

                                                @if($AreYouUSCitizen === 'yes')
                                                 <div id="" class="class_hidden_b30">
                                                    <div class="row mt-3">
                                                        <div class="col-md-7 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Social Security Number 
                                                                    @error('SSN')<span class="error">*</span> @enderror  
                                                                    </label><br/>
                                                                    <input placeholder="123-45-6789" type="text" class="form-control col-md-2" wire:model="SSN" id="telle" maxlength="11">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3" id="">
                                                        <div class="col-md-7 ml-5">
                                                            <div class="form-group">
                                                                <div class="form-group light-grey">
                                                                    <label for="">Upload copy of social security card 
                                                                        @error('SSNFile')<span class="error">*</span> @enderror 
                                                                    </label> <span class="pl-3">
                                                                     
                                                                    </span><br/>
    
                                                                    <div class="form-group mt-3">
                                                                        <div class="file btn btn-secondary cs-file-upload">
                                                                           <i class="fa fa-upload mr-4"></i> File_Upload.pdf
                                                                        <input wire:model="SSNFile" type="file"  />
                                                                        </div>
                                                                    </div>
    
                                                                    
    
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>


                                                    @else
                                                      <!--  <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">ITIN </label><br/>
                                                                <input wire:model="TaxpayerITIN" type="text" class="form-control col-md-2" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->


                                                @endif


                                                 
                                                      

                                           

                                                


                                                <div class="row">
                        
                                                    <div class="offset-md-7">
                                                        <div class="rows mr-auro">
                                                            
                                                            <div class="d-flex ">
                                                                 @if($AreYouUSCitizen === 'no')
                                                                <div class="mr-5">
                                                                    <button wire:click="submitPersonalInfo" class="btn btn-outline-secondary  btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">ITIN Information <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>
                                                                @endif


                                                                @if($AreYouUSCitizen === 'yes')
                                                                <div class="mr-5">
                                                                    <button wire:click="submitITIN" class="btn btn-outline-secondary  btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Spouse Information <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>
                                                                @endif

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                                </div>





                                      </div>
                                      {{-- End Step 1 --}}




                                      {{-- Step 2 --}}
                                      <div class="{{ $currentStep != 2 ? 'display-none' : '' }} " id="step-2">

                                        
                                                        <div class="row mb-3">
                                                        <div class="col-md-9 text-info">
                                                        <span>
                                                        <i class="fa fa-regular fa-circle-info "></i> 

                                                        ITIN Requirement: Individual Taxpayer Identification Number (ITIN) is a tax processing number issued by the Internal Revenue Service to help individuals comply with the U.S. tax laws, and to provide a means of efficiently processing and accounting for tax returns and payments for those not eligible for SSN. ITIN's are for federal tax reporting only, and are not intended to serve any other purpose. </span>
                                                        </div>
                                                       </div>   
                                                        <div class=" mb-3">                                              
                                                          <div class="form-group light-grey">
                                                            <label for="">Do you have an ITIN?</label>

                                                            <div class="mt-4">
                                                                <input type="radio" wire:model="DoYouHaveITIN"  class="btn-check form-check-input " name="have-itin" id="have-itin-yes" autocomplete="off" value='yes' onchange="">
                                                                <label wire:click="$emit('spouseCitizenship', 'yes' )" class="btn btn-outline-secondary mr-3 btn-site-primary" for="have-itin-yes">Yes</label> 

                                                                <input wire:model="DoYouHaveITIN" type="radio" class="btn-check form-check-input" name="have-itin" id="have-itin-no" autocomplete="off" onchange="" value='no'>
                                                                <label wire:click="$emit('spouseCitizenship', 'no' )" class="btn btn-outline-secondary btn-site-primary" 
                                                                for="have-itin-no">No</label> 
                                                            </div>
                                                                                                                                                                                                         
                                                          </div>                                                 
                                                          </div>

                                                          @if($DoYouHaveITIN === 'yes')
                                                          <div class="row mb-3">
                                                            <div class="col-md-5 form-group light-grey">
                                                                <label for="">What is your ITIN?</label><br/>
                                                                <input type="text" placeholder="999-99-9999" class="form-control col-md-2 mt-2">
                                                                
                                                            </div>
                                                          </div>
                                                          @endif



                                                        <div class=" mb-3 mt-4">                                              
                                                          <div class="form-group light-grey">
                                                            <label for="">Do you want to apply for an ITIN?</label>

                                                            <div class="mt-2">
                                                                <input type="radio" wire:model="WantToApplyForITINTaxpayer"  class="btn-check form-check-input " name="WantToApplyForITINTaxpayer" id="WantToApplyForITINTaxpayeryes"  value='yes' onchange="">

                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" for="WantToApplyForITINTaxpayeryes">Yes</label> 

                                                                <input wire:model="WantToApplyForITINTaxpayer" type="radio" class="btn-check form-check-input" name="WantToApplyForITINTaxpayer" id="WantToApplyForITINTaxpayerno"  onchange="" value='no'>

                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="WantToApplyForITINTaxpayerno">No</label> 
                                                            </div>
                                                                                                                                                                                                         
                                                          </div>                                                 
                                                          </div>


                                                          @if($WantToApplyForITINTaxpayer === 'yes')

                                                           <div class="row mt-3" id="">
                                                                <div class="col-md-12 ml-5">
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey">
                                                                            <label for="">Provide a copy of your foreign passport
                                                                                @error('TaxpayerForiegnPassportUpload') <span class="error text-danger">*</span> @enderror
                                                                            </label> <span class="pl-3">
                                                                               
                                                                            </span><br/>
            
                                                                            <div class="form-group mt-1">
                                                                                <div class="file btn btn-secondary cs-file-upload">
                                                                                   <i class="fa fa-upload mr-4"></i> Passport
                                                                                <input wire:model="TaxpayerForiegnPassportUpload" type="file"  name="file"/>
                                                                                </div>
                                                                            </div>
            
                                                                            
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>



                                                        <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                  <div class="row">
                                                                    <label class="mb-2" for="">Provide two of the following documents</label><br/>
                                                                    <div class="row">
                                                                    <div class="col-md-9 text-info">
                                                                    <span>
                                                                    <i class="fa fa-regular fa-circle-info "></i> 

                                                                    PLEASE NOTE: The documents must be clear, current (not expired) and one of them must contain a photo. Once the forms are ready, you will need to schedule an appointment with Pesach who is an IRS registered agent to verify your identity.</span>
                                                                    </div>
                                                                </div>
                                                                    <div class="col-md-6">
                                                                      <div class="form-check">
                                                                        <input wire:click="$set('UploadTaxpayerDL',{{ $UploadTaxpayerDL ? 'false' : 'true' }})"  class="form-check-input" type="checkbox" value="UploadTaxpayerDL" id="DriversLicense" @if ($UploadTaxpayerDL) checked="checked" @endif >
                                                                        <label  class="form-check-label" for="DriversLicense">Drivers license 
                                                                        </label>
                                                                      </div>  
                                                                      <div class="form-check">
                                                                        <input wire:click="$set('UploadTaxpayeBirthCert',{{ $UploadTaxpayeBirthCert ? 'false' : 'true' }})"  class="form-check-input" type="checkbox" @if ($UploadTaxpayeBirthCert) checked="checked" @endif value="UploadTaxpayeBirthCert" id="BirthCertificate" >
                                                                        <label class="form-check-label" for="BirthCertificate">
                                                                         Birth certificate
                                                                        </label>
                                                                      </div>

                                                                      <div class="form-check">
                                                                        <input wire:click="$set('UploadTaxpayerForiegnId',{{ $UploadTaxpayerForiegnId ? 'false' : 'true' }})" class="form-check-input" type="checkbox" value="UploadTaxpayerForiegnId" @if ($UploadTaxpayerForiegnId) checked="checked" @endif id="ForeignID" >
                                                                        <label class="form-check-label" for="ForeignID">
                                                                        Foreign ID
                                                                        </label>
                                                                      </div>


                                                                    </div>
                                                                      

                                                                    </div>

                                                                  </div>

                                           
                                                                </div>

                                                          @endif


                                                            @if($UploadTaxpayerDL === true)
                                                                <div class="row mt-3" id="">
                                                                <div class="col-md-12 ml-5">
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey">
                                                                            @error('dl') <span class="error text-danger">*</span> @enderror
                                                                            <div class="form-group mt-1">
                                                                                <div class="file btn btn-secondary cs-file-upload">
                                                                                   <i class="fa fa-upload mr-4"></i> Drivers license
                                                                                <input wire:model="dl" type="file"  name="file"/>
                                                                                </div>
                                                                            </div>
            
                                                                            
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            @endif

                                                             @if($UploadTaxpayeBirthCert === true)
                                                              <div class="row mt-3" id="">
                                                                <div class="col-md-12 ml-5">
                                                                    
                                                                        <div class="form-group light-grey">
                                                                            @error('bc') <span class="error text-danger">*</span> @enderror
                                                                            <div class="form-group mt-1">
                                                                                <div class="file btn btn-secondary cs-file-upload">
                                                                                   <i class="fa fa-upload mr-4"></i>  Birth certificate
                                                                                <input wire:model="bc" type="file"  name="file"/>
                                                                                </div>
                                                                            </div>
            
                                                                            
            
                                                                        </div>
                                                                    </div>
                                                                
                                                                </div>
                                                                @endif


                                                                @if($UploadTaxpayerForiegnId === true)
                                                                <div class="row mt-3" id="">
                                                                <div class="col-md-12 ml-5">
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey">
                                                                            @error('fId') <span class="error text-danger">*</span> @enderror
                                                                            <div class="form-group mt-1">
                                                                                <div class="file btn btn-secondary cs-file-upload">
                                                                                   <i class="fa fa-upload mr-4"></i>  Foreign ID
                                                                                <input wire:model="fId" type="file"  name="file"/>
                                                                                </div>
                                                                            </div>
            
                                                                            
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                @endif
                                                            

                                                            @if($AreYouUSCitizen === 'no') 
                                                            <div class="row mt-4">
                                                              <div class="col-md-12 ml-5">
                                                                  <div class="form-group">
                                                                      <div class="form-group light-grey">
                                                                          <label class="mb-2" for="">Are you filing a Non-Resident Tax return? @error('fId') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                          
                                                                          <input wire:model="AreYouFilingNonResidentTax" type="radio" class="btn-check" 
                                                                          id="Non-Resident-Yes"  name="Non-Resident-Tax" value="yes" >
                                                                          <label class="btn btn-outline-secondary btn-site-primary mr-3" for="Non-Resident-Yes">Yes</label>

                                                                          <input wire:model="AreYouFilingNonResidentTax" type="radio" class="btn-check" id="Non-Resident-No" 
                                                                          name="Non-Resident-Tax" value="no">
                                                                          <label class="btn btn-outline-secondary btn-site-primary mr-3" for="Non-Resident-No">No</label>

                                                                      </div>
                                                                  </div>
                                                              </div>
                                                            </div>
                                                            @endif




                                                    <div class="row">
                        
                                                    <div class="offset-md-5">
                                                        <div class="rows mr-auro">
                                                            
                                                            <div class="d-flex ">

                                                                <div class="mr-5">
                                                                        <button wire:click="back" class="btn btn-outline-secondary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                            <span class="pl-1 button_font_small"> Personal Info</span>
                                                                        </button>
                                                                    </div>

                                                                <div class="mr-5">
                                                                    <button wire:click="submitITIN" class="btn btn-outline-secondary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Spouse Information <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                                </div>


                                                        
                                              


                                      </div>
                                      {{-- End Step 2 --}}




                                      {{-- Step 3 --}}
                                      <div class="{{ $currentStep != 3 ? 'display-none' : '' }} " id="step-3">

                                                        <div class="col-md-7 form-group mb-3">
                                                            <div class="form-group light-grey">
                                                                <label for="">First Name @error('SpouseFirstName') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                <input wire:model="SpouseFirstName" type="text" placeholder="First name of spouse" class="form-control col-md-2 mt-2" 
                                                                >
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="col-md-7 form-group mb-3">
                                                            <div class="form-group light-grey">
                                                                <label for="">Middle Name @error('SpouseMiddleName') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                <input wire:model="SpouseMiddleName" type="text" placeholder="Middle name of spouse" class="form-control col-md-2 mt-2" 
                                                                >
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="col-md-7 form-group mb-3">
                                                            <div class="form-group light-grey">
                                                                <label for="">Last Name @error('SpouseLastName') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                <input type="text" wire:model="SpouseLastName" placeholder="Last name of spouse" class="form-control col-md-2 mt-2" 
                                                                >
                                                                
                                                            </div>
                                                        </div>

                                                         <div class="col-md-7 form-group mb-3">
                                                            <div class="form-group light-grey">
                                                                <label for="">Occupation @error('SpouseOccupation') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                <input type="text" wire:model="SpouseOccupation" placeholder="Occupation" class="form-control col-md-2 mt-2" 
                                                                >
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 form-group mb-3">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date of Birth @error('spouseDOB') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                <input  type="date" class="form-control col-md-2 mt-2" 
                                                                wire:model="spouseDOB">
                                                                
                                                            </div>
                                                        </div>


                                                        <div class="col-md-7 form-group mb-3">                                              
                                                          <div class="form-group light-grey">
                                                            <label for="">Are you a US Citizen?</label>

                                                            <div class="mt-4">
                                                                <input wire:model="isSpouseUSCitizen" type="radio" class="btn-check form-check-input " name="options-outlined" id="success-outlined"  value='yes'>
                                                                <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="success-outlined">Yes</label> 

                                                                <input wire:model="isSpouseUSCitizen" type="radio" class="btn-check form-check-input" name="options-outlined" id="danger-outlined"  value='no'>
                                                                <label class="btn btn-outline-secondary btn-site-primary" for="danger-outlined">No</label> 
                                                            </div>
                                                                                                                                                                                                         
                                                          </div>                                                 
                                                          </div>



                                                      @if($isSpouseUSCitizen === 'yes')
                                                        <div  class="class_hidden_b30">
                                                            <div class="row mt-3">
                                                                <div class="col-md-5 ml-5">
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey">
                                                                            <label for="">Social Security Number 
                                                                            @error('spouseSSN')<span class="error">*</span> @enderror   
                                                                            </label><br/>
                                                                            <input  type="text" class="form-control col-md-2" wire:model="spouseSSN" id="telle" maxlength="11">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-3" >
                                                                <div class="col-md-7 ml-5">
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey">
                                                                            <label for="">Upload copy of social security card *</label> <span class="pl-3">
                                                                                
                                                                            </span><br/>
            
                                                                            <div class="form-group mt-3">
                                                                                <div class="file btn btn-secondary cs-file-upload">
                                                                                   <i class="fa fa-upload mr-4"></i> File_Upload.pdf
                                                                                <input wire:model="SpouseSSNCardUpload" type="file"  name="file"/>
                                                                                </div>
                                                                            </div>
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                          @else
                                                         <!--  <div class="row mt-3">
                                                            <div class="col-md-7 ml-5">
                                                                <div class="form-group">
                                                                    <div class="form-group light-grey">
                                                                        <label for="">Social Security Number </label><br/>
                                                                        <input type="text"  class="form-control col-md-2" >
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
 -->
                                                        @endif 


                                                      



                                                <div class="row">
                        
                                                    <div class=" offset-md-5">
                                                        <div class="rows mr-auro">
                                                            
                                                            <div class="d-flex ">
                                                                    @if($AreYouUSCitizen === 'yes')
                                                                    <div class="">
                                                                        <button wire:click="$emit('backTo', 1 )" class="btn btn-outline-secondary  btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                            <span class="pl-1 button_font_small">Personal Info</span>
                                                                        </button>
                                                                    </div>
                                                                    @endif

                                                                    @if($AreYouUSCitizen === 'no')
                                                                    <div class="">
                                                                        <button wire:click="$emit('back', 1 )" class="btn btn-outline-secondary  btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                            <span class="pl-1 button_font_small">ITIN Info</span>
                                                                        </button>
                                                                    </div>
                                                                    @endif

                                                                @if($isSpouseUSCitizen === 'yes')

                                                                  <div class="mr-5">
                                                                        <button wire:click="submitSpuseInfo(5)" class="btn btn-outline-secondary  btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                            <span class="pl-3 button_font_small">Dependent <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                        </button>
                                                                    </div>
                                                                
                                                                @endif

                                                                 @if($isSpouseUSCitizen === 'no')
                                                                    <div class="mr-5">
                                                                        <button wire:click="submitSpuseInfo(4)" class="btn btn-outline-secondary  btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                            <span class="pl-3 button_font_small">Spouse ITIN <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                        </button>
                                                                    </div>
                                                                 @endif



                                                                

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                                </div>







                                      </div>
                                      {{-- End Step 3 --}}





                                      {{-- Step 4 --}}
                                    <div class="{{ $currentStep != 4 ? 'display-none' : '' }} " id="step-4">

                                        <div class="row mb-3">
                                                        <div class="col-md-10 text-info">
                                                        <span>
                                                        <i class="fa fa-regular fa-circle-info "></i> 

                                                        ITIN Requirement: Individual Taxpayer Identification Number (ITIN) is a tax processing number issued by the Internal Revenue Service to help individuals comply with the U.S. tax laws, and to provide a means of efficiently processing and accounting for tax returns and payments for those not eligible for SSN. ITIN's are for federal tax reporting only, and are not intended to serve any other purpose. </span>
                                                        </div>
                                                    </div>


                                                    <div class=" mb-3">                                              
                                                          <div class="form-group light-grey">
                                                            <label for="">Do you have an ITIN? 
                                                                @error('DoesSpouseHaveITN') <span class="error text-danger">*</span> @enderror
                                                            </label>

                                                            <div class="mt-4">
                                                                <input type="radio" wire:model="DoesSpouseHaveITN"  class="btn-check form-check-input " name="doyouhavespouseitin" 
                                                                id="doyouhavespouseitinyes"  value='yes' >
                                                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary" for="doyouhavespouseitinyes">Yes</label> 

                                                                <input wire:model="DoesSpouseHaveITN" type="radio" class="btn-check form-check-input" 
                                                                name="doyouhavespouseitin" id="doyouhavespouseitinno"  value='no'>
                                                                <label class="btn btn-outline-secondary btn-site-primary" 
                                                                for="doyouhavespouseitinno">No</label> 
                                                            </div>
                                                                                                                                                                                                         
                                                          </div>                                                 
                                                    </div>

                                                    @if($DoesSpouseHaveITN === 'yes')
                                                    <div class="row mb-3">
                                                            <div class="col-md-6 form-group light-grey">
                                                                <label for="">What is your ITIN?</label><br/>
                                                                <input type="text" placeholder="999-99-9999" class="form-control col-md-2 mt-2">
                                                                
                                                            </div>
                                                    </div>
                                                    @endif

                                                    <div class=" mb-3">                                              
                                                          <div class="form-group light-grey">
                                                            <label for="">Do you want to apply for an ITIN?</label>

                                                            <div class="mt-2">
                                                                <input type="radio" wire:model="SpouseWantToApplyForITIN"  class="btn-check form-check-input " name="applyforspouseitin" id="apply-for-itin-yes" autocomplete="off" value='yes' onchange="">
                                                                <label class="btn btn-outline-secondary mr-3 btn-site-primary" for="apply-for-itin-yes">Yes</label> 

                                                                <input wire:model="SpouseWantToApplyForITIN" type="radio" class="btn-check form-check-input" 
                                                                name="applyforspouseitin" id="spouse-apply-for-itin-no" autocomplete="off" onchange="" value='no'>
                                                                <label  class="btn btn-outline-secondary btn-site-primary" 
                                                                for="spouse-apply-for-itin-no">No</label> 
                                                            </div>
                                                                                                                                                                                                         
                                                          </div>                                                 
                                                    </div>


                                                    @if($SpouseWantToApplyForITIN === 'yes')
                                                      <div class="row mt-3" id="no_amended_returns">
                                                                <div class="col-md-12 ml-5">
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey">
                                                                            <label for="">Provide a copy of your foreign passport</label> <span class="pl-3">
                                                                               
                                                                            </span><br/>
            
                                                                            <div class="form-group mt-1">
                                                                                <div class="file btn btn-secondary cs-file-upload">
                                                                                   <i class="fa fa-upload mr-4"></i> Passport
                                                                                <input type="file"  name="file"/>
                                                                                </div>
                                                                            </div>
            
                                                                            
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                     </div>
                                                     @endif


                                                    <div class="form-group mt-4">
                                                                <div class="form-group light-grey">
                                                                  <div class="row">
                                                                    <label class="mb-2" for="">Provide two of the following documents</label><br/>
                                                                    <div class="row">
                                                                    <div class="col-md-8 text-info">
                                                                    <span>
                                                                    <i class="fa fa-regular fa-circle-info "></i> 

                                                                    PLEASE NOTE: The documents must be clear, current (not expired) and one of them must contain a photo. Once the forms are ready, you will need to schedule an appointment with Pesach who is an IRS registered agent to verify your identity.</span>
                                                                    </div>
                                                                </div>
                                                                    <div class="col-md-6">
                                                                      <div class="form-check">
                                                                        <input wire:click="$set('UploadSpouseDL',{{ $UploadSpouseDL ? 'false' : 'true' }})" class="form-check-input" 
                                                                        type="checkbox" value="" @if ($UploadSpouseDL) checked="checked" @endif id="spusedriverlicensefile">
                                                                        <label class="form-check-label" for="spusedriverlicensefile">Drivers license
                                                                        </label>
                                                                      </div>
                                                                      <div class="form-check">
                                                                        <input wire:click="$set('UploadSpouseBirthCert',{{ $UploadSpouseBirthCert ? 'false' : 'true' }})" 
                                                                        @if ($UploadSpouseBirthCert) checked="checked" @endif class="form-check-input" type="checkbox" value="" id="spusedbirthcertfile" >
                                                                        <label class="form-check-label" for="spusedbirthcertfile">
                                                                         Birth certificate
                                                                        </label>
                                                                      </div>

                                                                      <div class="form-check">
                                                                        <input wire:click="$set('UploadSpouseForiegnId',{{ $UploadSpouseForiegnId ? 'false' : 'true' }})"
                                                                         class="form-check-input" type="checkbox"  
                                                                         @if ($UploadSpouseForiegnId) checked="checked" @endif id="spusedforeignidfile" >
                                                                        <label class="form-check-label" for="spusedforeignidfile">
                                                                        Foreign ID
                                                                        </label>
                                                                      </div>


                                                                    </div>
                                                                      

                                                                    </div>

                                                                  </div>

                                           
                                                    </div>

                                                            @if($UploadSpouseDL == true)
                                                               <div class="row mt-3" id="">
                                                                <div class="col-md-12 ml-5">
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey">
                                                                            
                                                                            <div class="form-group mt-1">
                                                                                <div class="file btn btn-secondary cs-file-upload">
                                                                                   <i class="fa fa-upload mr-4"></i> Drivers license
                                                                                    @error('SpouseDL') <span class="error text-danger">*</span> @enderror
                                                                                <input wire:model="SpouseDL" type="file"  name="file"/>
                                                                                </div>
                                                                            </div>
            
                                                                            
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                @endif

                                                                 @if($UploadSpouseBirthCert == true)
                                                                <div class="row mt-3" id="">
                                                                <div class="col-md-12 ml-5">
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey">
                                                                            
                                                                            <div class="form-group mt-1">
                                                                                <div class="file btn btn-secondary cs-file-upload">
                                                                                   <i class="fa fa-upload mr-4"></i>  Birth certificate  @error('SpouseBC') <span class="error text-danger">*</span> @enderror
                                                                                <input wire:model="SpouseBC" type="file"  name="file"/>
                                                                                </div>
                                                                            </div>
            
                                                                            
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                @endif


                                                                 @if($UploadSpouseForiegnId == true)
                                                                <div class="row mt-3" id="">
                                                                <div class="col-md-12 ml-5">
                                                                    <div class="form-group">
                                                                        <div class="form-group light-grey">
                                                                            
                                                                            <div class="form-group mt-1">
                                                                                <div class="file btn btn-secondary cs-file-upload">
                                                                                   <i class="fa fa-upload mr-4"></i>  Foreign ID 
                                                                                   @error('SpouseFID') <span class="error text-danger">*</span> @enderror
                                                                                <input wire:model="SpouseFID" type="file"  name="file"/>
                                                                                </div>
                                                                            </div>
            
                                                                            
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                @endif


                                                            <div class="row mt-4">
                                                              <div class="col-md-12 ml-5">
                                                                  <div class="form-group">
                                                                      <div class="form-group light-grey">
                                                                          <label class="mb-2" for="">Are you filing a Non-Resident Tax return? </label><br/>
                                                                          
                                                                          <input type="radio" class="btn-check" 
                                                                          id="NonResidentSpouseYes" name="NonResidentSpouse" 
                                                                          value="yes" >
                                                                          <label class="btn btn-outline-secondary btn-site-primary mr-3" for="NonResidentSpouseYes">Yes</label>

                                                                          <input type="radio" class="btn-check" 
                                                                          id="NonResidentSpouseNo" autocomplete="off" 
                                                                          name="NonResidentSpouse" value="no">
                                                                          <label class="btn btn-outline-secondary btn-site-primary mr-3" for="NonResidentSpouseNo">No</label>

                                                                      </div>
                                                                  </div>
                                                              </div>
                                                            </div>


                                                            <div class="row">
                        
                                                    <div class=" offset-md-4">
                                                        <div class="rows mr-auro">
                                                            
                                                            <div class="d-flex ">

                                                                    <div class="">
                                                                        <button wire:click="$emit('back', 1 )" class="btn mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                            <span class="pl-1 button_font_small">Spouse Info</span>
                                                                        </button>
                                                                    </div>

                                                                <div class="mr-5">
                                                                    <button wire:click="moveToDependent" class="btn mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Dependent<i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                                </div>


                                      </div>
                                      {{-- End Step 4--}}




                                      {{-- Step 5 --}}
                                      <div class="{{ $currentStep != 5 ? 'display-none' : '' }} " id="step-5">

                                         <div class="row mt-3">
                                                    <div class="col-md-8 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">First Name  
                                                                    @error('dependentFirstName')<span class="error">*</span> @enderror</label> <br/>
                                                                <input wire:model="dependentFirstName" type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row mt-3">
                                                    <div class="col-md-8 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Middle Name  
                                                                    @error('dependentMiddleName')<span class="error">*</span> @enderror</label> <br/>
                                                                <input wire:model="dependentMiddleName" type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>


                                        <div class="row mt-3">
                                                    <div class="col-md-8 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Last Name  
                                                                    @error('dependentLastName')<span class="error">*</span> @enderror</label> <br/>
                                                                <input wire:model="dependentLastName" type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>


                                        <div class="row mt-3">
                                                    <div class="col-md-8 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Social Security Number  
                                                                    @error('dependentSSN')<span class="error">*</span> @enderror</label> <br/>
                                                                <input wire:model="dependentSSN" type="text" class="form-control col-md-2" maxlength="11">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>


                                        <div class="row mt-3">
                                                    <div class="col-md-8 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date of Issuance of SSN 
                                                                    </label> <br/>
                                                                <input type="date" class="form-control col-md-2" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>


                                        <div class="row mt-3">
                                                    <div class="col-md-8 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Date of Birth 
                                                                    @error('dependentdod')<span class="error">*</span> @enderror</label> <br/>
                                                                <input wire:model="dependentdod" type="date" class="form-control col-md-2" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>


                                         <div class="row mt-3">
                                                    <div class="col-md-8 ml-5">
                                                        <div class="form-group light-grey">
                                                            <label for="">Relationship to taxpayer</label><br/>
                                                                <select class="form-control" aria-label="Default select example">
                                                                    <option value="">-----</option>
                                                                    <option value="son">Son</option>
                                                                    <option value="daughter">Daughter</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                        </div>


                                        
                                        <div class="col-md-8 ml-5 mt-4">                                              
                                          <div class="form-group">                                              
                                              <div class="form-group light-grey">
                                                <label for="">Was Child Naturalised?</label>

                                                <div class="mt-1">
                                                    <input type="radio" wire:model="IsChildNaturalised"  class="btn-check form-check-input " name="options-outlined" id="IsChildNaturalisedYes" value='yes' on>
                                                    <label  class="btn btn-outline-secondary mr-3 btn-site-primary" 
                                                    for="IsChildNaturalisedYes"> Yes</label> 

                                                    <input type="radio" wire:model="IsChildNaturalised" class="btn-check form-check-input" name="options-outlined" id="IsChildNaturalisedNo" value='no'>
                                                    <label  class="btn btn-outline-secondary btn-site-primary" for="IsChildNaturalisedNo">No</label> 
                                                </div>
                                                                                                                                                                                             
                                              </div>                                                 
                                          </div>                                                                                                             
                                       </div>


                                       <div class="row">
                        
                                                    <div class=" offset-md-4">
                                                        <div class="rows mr-auro">
                                                            
                                                            <div class="d-flex ">
                                                                 @if($isSpouseUSCitizen === 'no')
                                                                    <div class="">
                                                                        <button wire:click="$emit('back', 4 )" class="btn btn-outline-secondary btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                            <span class="pl-1 button_font_small"> Spouse ITIN Info</span>
                                                                        </button>
                                                                    </div>
                                                                  @endif

                                                                   @if($isSpouseUSCitizen === 'yes')
                                                                   <div class="">
                                                                        <button wire:click="$emit('backTo', 3 )" class="btn btn-outline-secondary btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                            <span class="pl-1 button_font_small"> Spouse Info</span>
                                                                        </button>
                                                                    </div>
                                                                   @endif 

                                                                <div class="mr-5">
                                                                    <button wire:click="submitDependentInfo" class="btn btn-outline-secondary  mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Contact Infomation <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                        </div> 

                                      </div>
                                      {{-- End Step 5 --}}



                                      {{-- Step 6 --}}
                                      <div class="{{ $currentStep != 6 ? 'display-none' : '' }} " id="step-6">

                                            <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Street Address / Apartment Number
                                                                    @error('StreetAddress') <span class="error text-danger">*</span> @enderror
                                                                </label><br/>
                                                                <input wire:model="StreetAddress" type="text" class="form-control col-md-4">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row mt-3">
                                                    <div class="col-md-4 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">City
                                                                     @error('City') <span class="error text-danger">*</span> @enderror
                                                                </label><br/>
                                                                <input wire:model="City" type="text" class="form-control col-md-4" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Country
                                                                    @error('Country') <span class="error text-danger">*</span> @enderror
                                                                </label><br/>
                                                                <input wire:model="Country" type="text" class="form-control col-md-4" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">ZIP Code
                                                                     @error('ZIPCode') <span class="error text-danger">*</span> @enderror
                                                                </label><br/>
                                                                <input wire:model="ZIPCode" type="text" class="form-control col-md-4" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Phone Number
                                                                    @error('TaxPayerPhone') <span class="error text-danger">*</span> @enderror
                                                                </label><br/>
                                                                <input wire:model="TaxPayerPhone" type="text" class="form-control col-md-4" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Email
                                                                    @error('TaxpayerEmail') <span class="error text-danger">*</span> @enderror
                                                                </label><br/>
                                                                <input wire:model="TaxpayerEmail" type="email" class="form-control col-md-4" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row">
                                                 
                                                        <div class="rows mr-auro offset-md-4">
                                                            <div class="d-flex ">
                                                                    <div class="">
                                                                        <button wire:click="$emit('back', 3 )" class="btn btn-outline-secondary btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                            <span class="pl-1 button_font_small"> Dependent</span>
                                                                        </button>
                                                                    </div>

                                                                <div class="mr-5">
                                                                    <button wire:click="submitContactInfo" class="btn btn-outline-secondary btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small"> Bank Information <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                   
                                        </div>

                                      </div>
                                      {{-- End Step 6 --}}



                                      {{-- Step 7 --}}
                                      <div class="{{ $currentStep != 7 ? 'display-none' : '' }} " id="step-7">

                                         <div class="row mb-3">
                                                        <div class="col-md-8 text-info">
                                                        
                                                        <p>
                                                            <i class="fa fa-regular fa-circle-info "></i> For direct deposits of tax refunds/withdrawals of tax liability-CURRENT TAX YEAR ONLY
                                                        <br/>
                                                            If you complete this- your refund/ tax due will be automatically deposited/ debited from your US account. If not, a check will be mailed to the adrress above.
                                                        </p>
                                                        </div>
                                        </div>

                                        <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Account type (Cheking/Savings)</label><br/>
                                                                <select class="form-control">
                                                                    <option>Checking Account</option>
                                                                    <option>Savings Account </option>
                                                                </select>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>


                                        <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Phone Number</label><br/>
                                                                <input type="text" class="form-control col-md-4" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row mt-3">
                                                    <div class="col-md-6 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Routing Number</label><br/>
                                                                <input type="text" class="form-control col-md-4" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>


                                        <div class="row">
                        
                                                    <div class="offset-md-5 ">
                                                        <div class="rows mr-auro">
                                                            
                                                            <div class="d-flex ">

                                                                    <div class="">
                                                                        <button wire:click="$emit('back', 4 )" class="btn btn-outline-secondary btn-site-primary color-text-white my-5 mx-5 ml-5"><i class="fas fa-arrow-left button_font_small"></i>
                                                                            <span class="pl-1 button_font_small"> Contact</span>
                                                                        </button>
                                                                    </div>

                                                                <div class="mr-5">
                                                                    <button wire:click="moveToIdVerification" class="btn btn-site-primary btn-outline-secondary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small"> Id Verification <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                        </div>

                                      </div>
                                      {{-- End Step 7 --}}


</div>