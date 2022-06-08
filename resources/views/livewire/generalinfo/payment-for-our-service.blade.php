<div>
   

                                        <div class="row mt-4 stepwizard">
									      <div class="col-md-12 ">
									         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
									            <ol class="breadcrumb cs-breadcrumbs">
									               
									               <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
									               	<a class="light-grey" href="#">Payment for our services</a></li>

									               <li class="breadcrumb-item mr-3 {{ $currentStep == 2 ? 'section-active' : '' }}"><a class="light-grey" href="#">Our Fees</a></li>
									           
									            </ol>
									          </nav>
									      </div>
									    </div>

									    {{-- Section 1 --}}
									    <div class="{{ $currentStep != 1 ? 'display-none' : '' }} " id="step-1">

									    	<div class="row mb-3">
												    	<div class="col-md-8 text-info">
												    	<span>
												    	<i class="fa fa-regular fa-circle-info "></i> 

												    	Payment is due when your return is prepared. We accept international Visa and MasterCard and will only charge your card upon your authorization. Other payment methods and payment plans are available. </span>
												    	</div>
										     </div>

									    	<div class="row mt-3">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Card Number 
                                                                	</label> <br/>
                                                                <input  type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Expiration Date 
                                                                	
                                                                </label><br/>
                                                                <input type="date" class="form-control col-md-2" >
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-3 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">CVV 
                                                                	</label> <br/>
                                                                <input  type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-5 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Name on Card  
                                                                	</label> <br/>
                                                                <input  type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="comment-area">
                                                              <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                                                                <i class="fas fa-message"></i> Add Comment
                                                              </div>
                                                  </div>
                        
                                                    <div class=" offset-md-7">
                                                        <div class="rows mr-auro">
	                                                        
	                                                        <div class="d-flex ">

                                                                <div class="mr-5">
                                                                    <button wire:click="submitPaymentDetails" class="btn btn-outline-secondary btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Our Fees <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                                </div>

									    </div>
									     {{-- End Section 1 --}}


									     {{-- Section 2 --}}
									    <div class="{{ $currentStep != 2 ? 'display-none' : '' }} " id="step-1">
                                            <div class="row">
                                            <div class="col-md-6 text-info">
                                            <span>
                                            <i class="fa fa-regular fa-circle-info "></i> 

                                            Please note: Payment for our services is due regardless of the outcome of the tax return.</span>
                                            </div>
                                        </div>
									    	<div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">How did you hear about our firm?  @error('HowDidYouKnow') <span class="error text-danger">*</span> @enderror</label><br/>
                                                                <input wire:model="HowDidYouKnow" type="text" class="form-control col-md-2">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-7 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label for="">Please see our fee schedule for your reference?</label><br/>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-3">
                                                    <div class="col-md-8 ml-5">
                                                        <div class="form-group">
                                                            <div class="form-group light-grey">
                                                                <label class="mb-3" for="">Are you interested in the $75+VAT audit insurance coverage plan which can save between $150 - $1000 in the event of an IRS audit. </label><br/>
                                                                
                                                                <input type="radio" name="InterestedInOurService" 
                                                                wire:model="InterestedInOurService" class="btn-check" 
                                                                id="InterestedInOurServiceYes" value="yes" >

                                                                    <label  class="btn btn-outline-secondary btn-site-primary mr-3" for="InterestedInOurServiceYes">Yes</label>

                                                                <input type="radio" name="InterestedInOurService" 
                                                                wire:model="InterestedInOurService" id="InterestedInOurServiceNo" class="btn-check">
                                                                    <label  class="btn btn-outline-secondary btn-site-primary mr-3" for="InterestedInOurServiceNo">No</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                            <div class="col-md-8 text-info">
                                            <span>
                                            <i class="fa fa-regular fa-circle-info "></i> 

                                            By checking this box $75 plus VAT (per return) will be added to your invoice once the tax return preparation has been completed.</span>
                                            <p>
                                                The audit insurance coverage plan covers all audit costs and IRS Correspondences (excluding $60 Tax Court Fee, State Audits and stimulus package issues). <br/>
                                               <strong> Please note, no IRS correspondence will be covered without purchase of the insurance plan. </strong>
                                            </p>
                                            </div>
                                        </div>


                                                <div class="row">

                                                    <div class="comment-area">
                                                              <div class="" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                                                                <i class="fas fa-message"></i> Add Comment
                                                              </div>
                                                  </div>
                        
                                                    <div class=" offset-md-4">
                                                        <div class="rows mr-auro">
                                                            
                                                            <div class="d-flex ">

                                                                <div class="mr-5 ">

                                                                     <button wire:click="back" class="btn btn-outline-secondary btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">
                                                                            <i class="fas fa-arrow-left button_font_small"></i> Payment for Our Service
                                                                            </span>
                                                                    </button>


                                                                    <button wire:click="submitFeeData" class="btn btn-outline-secondary btn-site-primary color-text-white my-5 mx-5 ml-5">
                                                                        <span class="pl-3 button_font_small">Income <i class="fas fa-arrow-right button_font_small"></i></span>
                                                                    </button>
                                                                </div>

                                                            </div>

                                                        </div>
                                                            
                                                    </div>
                                                        
                                                </div>

                                                

									    </div>

									      {{-- End Section 2 --}}


</div>
