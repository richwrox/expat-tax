<div>

    <div class="row mt-4 stepwizard">
        <div class="col-md-12 ">
           <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb cs-breadcrumbs">

                 <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                  <a class="light-grey" href="#"> Deductions</a></li>
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

                    Tuition Payments for yourself or dependents to a US-recognized university, are eligible for the American Opportunity Credit. </span>
                    </div>
         </div>

        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-group light-grey">
                    <label class="mb-2" for="">Did you pay for tuition for you or any of your dependents?
                            @error('DidYouPayForTuition')<span class="error">*</span> @enderror
                        </label><br/>
                   <input type="radio" wire:model="DidYouPayForTuition"  class="btn-check form-check-input " name="DidYouPayForTuition" id="DidYouPayForTuitionYes"  value='yes' >
                        <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                        for="DidYouPayForTuitionYes">Yes</label>

                        <input wire:model="DidYouPayForTuition" type="radio" class="btn-check form-check-input" name="DidYouPayForTuition" id="DidYouPayForTuitionNo"   value='no'>
                        <label  class="btn btn-outline-secondary btn-site-primary"
                        for="DidYouPayForTuitionNo">No</label>
                </div>
            </div>
        </div>


        @if($DidYouPayForTuition === 'yes')
            <div class="row mt-3">
                <div class="col-md-7 ml-5">
                    <div class="form-group light-grey">
                        <label class="mb-2" for="">
                            Provide the Tuition payment details (Form 1098-T or the foreign equivalent)
                            </label><br/>

                    </div>
                </div>

            </div>


        <div class="row mt-3" id="">
                    @for($i=0; $i < $NumberOfFormsUploadedForTuitionPayment; $i++)
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
                       <label  class="light-grey" for="">Amount of forms uploaded
                       </label>

                       <select wire:model="NumberOfFormsUploadedForTuitionPayment" class="">
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

        <br><br>





        <div class="row mt-3">
            <div class="col-md-7 ml-5">
                <div class="form-group light-grey">
                    <label class="mb-2" for="">Did you have any student loans which you are paying interest for?
                            @error('DoYouHaveStudenLoan')<span class="error">*</span> @enderror
                        </label><br/>
                   <input type="radio" wire:model="DoYouHaveStudenLoan"  class="btn-check form-check-input " name="DoYouHaveStudenLoan" id="DoYouHaveStudenLoanYes"  value='yes' >
                        <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                        for="DoYouHaveStudenLoanYes">Yes</label>

                        <input wire:model="DoYouHaveStudenLoan" type="radio" class="btn-check form-check-input" name="DoYouHaveStudenLoan" id="DoYouHaveStudenLoanNo"   value='no'>
                        <label  class="btn btn-outline-secondary btn-site-primary"
                        for="DoYouHaveStudenLoanNo">No</label>
                </div>
            </div>
        </div>


        @if($DoYouHaveStudenLoan === 'yes')
            <div class="row mt-3">
                <div class="col-md-7 ml-5">
                    <div class="form-group light-grey">
                        <label class="mb-2" for="">
                            Provide the 1098-E student loan interest
                            </label><br/>

                    </div>
                </div>

            </div>


        <div class="row mt-3" id="">
                    @for($i=0; $i < $NumberOfFormsUploadedForStudentLoanInterest; $i++)
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
                       <label  class="light-grey" for="">Amount of forms uploaded
                       </label>

                       <select wire:model="NumberOfFormsUploadedForStudentLoanInterest" class="">
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


        <div class=" offset-md-6">
            <div class="rows mr-auro">
              <div class="d-flex">
                    <div class="mr-5">
                        <button wire:click="submitTaxFiling" class="btn btn-outline-secondary mr-3 btn-site-primary color-text-white my-5 mx-5 ml-5">
                            <span class="pl-3 button_font_small"> Estimate and Other Payments <i class="fas fa-arrow-right button_font_small"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
     {{-- End Section 1 --}}


</div>
