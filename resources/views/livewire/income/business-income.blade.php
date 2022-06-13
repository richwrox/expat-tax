<div>
    <div class="row mt-4 stepwizard">
        <div class="col-md-12 ">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb cs-breadcrumbs">

                    <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                        <a class="light-grey" href="#">Business Information </a></li>

                    <li class="breadcrumb-item mr-3 {{ $currentStep == 2 ? 'section-active' : '' }} ">
                        <a class="light-grey" href="#">Income & Expenses</a></li>

                    <li class="breadcrumb-item mr-3 {{ $currentStep == 3 ? 'section-active' : '' }}"><a
                            class="light-grey" href="#">Cost of Goods Sold</a></li>
                </ol>
            </nav>
        </div>
    </div>


   {{-- this if statement changes the form to display based on the step --}}
    @if ($currentStep == 1)
        <form action="" wire:submit.prevent='submitBusinessInformation'>  
            <h6 class="section-header">
                SECTION 1 BUSINESS INFORMATION
            </h3>  
            <div class="row">
                <div class="col-md-6">
                    <label class="mb-2" for="">Please select country of operation
                        @error('countryChosen')<span class="error">*</span> @enderror
                    </label><br />
                    <select class="form-control" wire:model="countryChosen">
                        <option value="--" selected>Choose country</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegowina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote d'Ivoire</option>
                        <option value="HR">Croatia (Hrvatska)</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TP">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="FX">France, Metropolitan</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard and Mc Donald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran (Islamic Republic of)</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis</option> 
                        <option value="LC">Saint LUCIA</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option> 
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia (Slovak Republic)</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="PM">St. Pierre and Miquelon</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (U.S.)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="YU">Yugoslavia</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                </div>
            </div>
            
            @if ($countryChosen == 'IL')
                <div class="row mt-3">
                    <div class="ml-5">
                        <div class="form-group light-grey">
                            <label class="mb-2" for="">Are you self employed in Israel?
                                @error('selfEmployedinIsrael')<span class="error">*</span> @enderror
                            </label><br />
                            <input type="radio" wire:model="selfEmployedinIsrael" class="btn-check form-check-input "
                                name="selfEmployedinIsrael" id="selfEmployedinIsraelYes" value='yes'>
                            <label class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="selfEmployedinIsraelYes">Yes</label>
        
                            <input wire:model="selfEmployedinIsrael" type="radio" class="btn-check form-check-input"
                                name="selfEmployedinIsrael" id="selfEmployedinIsraelNo" value='no'>
                            <label class="btn btn-outline-secondary btn-site-primary" for="selfEmployedinIsraelNo">No</label>
                        </div>
        
                        
                        @if($selfEmployedinIsrael == 'yes')
                                    <div class="row mt-5">
                                        <div class="col-md-7 ml-5">
                                            <div class="form-group light-grey">
                                                <label class="mb-2" for="">
                                                    Upload your Doch Revach v'Hefsed
                                                </label>
                                            </div>
                                        </div>
                                    </div>
        
                                <div class="mt-2">
                                    <div class="col-md-4 mt-2">
                                        <div class="form-group light-grey">
                                            <label class="mb-2" for="">Amount of forms to upload  @error('NumberofDochRevachforms')<span class="error">*</span> @enderror</label><br>
                                            <select wire:model="NumberofDochRevachforms" class="form-control">
                                            <option value="0">----</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
        
                                @for($i=0; $i < $NumberofDochRevachforms; $i++)
                                <div class="col-md-12 ml-5 mt-2">
                                        <div class="form-group">
                                            <div class="form-group light-grey">
                                                <div class="form-group ">
                                                    <div class="file btn btn-outline-success cs-file-upload">
                                                        <i class="fa fa-upload mr-4"></i> Upload Forms
                                                    <input wire:model="fileForDocRevach" type="file"  />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            @endfor
                        @endif
                </div>
            
            @else
                <div class="row mt-4">
                    <div class="form-group light-grey">
                        <label class="mb-2" for="">Are you self employed?
                            @error('selfEmployedinOther')<span class="error">*</span> @enderror
                        </label><br />
                        <input type="radio" wire:model="selfEmployedinOther" class="btn-check form-check-input "
                            name="selfEmployedinOther" id="selfEmployedinOtherYes" value='yes'>
                        <label class="btn btn-outline-secondary mr-3 btn-site-primary"
                            for="selfEmployedinOtherYes">Yes</label>
                
                        <input wire:model="selfEmployedinOther" type="radio" class="btn-check form-check-input"
                            name="selfEmployedinOther" id="selfEmployedinOtherNo" value='no'>
                        <label class="btn btn-outline-secondary btn-site-primary" for="selfEmployedinOtherNo">No</label>
                    </div>
                </div>
        
                @if ($selfEmployedinOther == 'yes')
                        <div class="row mt-3">
                            <div class="col-md-12 ml-5">
                                <div class="form-group">
                                        <div class="row mt-2">
                                            <div class="col-md-8">
                                                <label class="mb-2" for="">Business name @error('BusinessName') <span
                                                    class="error text-danger">*</span> @enderror
                                                </label>
        
                                                <input type="text" class="form-control" name="">
                                            </div>
                                                
                                            <div class="col-md-2" style="display: flex; align-items:flex-end">
                                                <button class="btn btn-success add_item_btn03 mr-5" wire:click.prevent="addInput({{$i}})"><i class="fas fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                @foreach ($inputs as $value )
                                <div class="col-md-12 ml-5">
                                    <div class="form-group">
                                            <div class="row mt-2">
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="">
                                                </div>    
                                                <div class="col-md-2" style="display: flex; align-items:flex-end">
                                                    <button class="btn btn-danger add_item_btn03 mr-5" wire:click.prevent="removeInput({{$i}})"><i class="fas fa-minus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                @endforeach
        
                                
                        </div>
                @endif
            @endif
        
            <div class="row ml-4">
                <div class="row mt-4">
                    <div class="mt-3">
                        <label class="mb-2" for="">Name of Business-if you use your own name as your business name, please specify
                            @error('nameOfBusiness') <span class="error text-danger">*</span>
                            @enderror
                        </label>
                        <input type="text" wire:model="nameOfBusiness" class="form-control business-income-name-input" name="">
                    </div>
        
                <div class="mt-3">
                        <label class="mb-2" for="">Address of business
                            @error('addressOfBusiness') <span class="error text-danger">*</span>
                            @enderror
                        </label>
                        <input type="text" wire:model="addressOfBusiness" class="form-control business-income-name-input" name="">
                </div>
        
                <div class="mt-3">
                        <label class="mb-2" for="">Principle business activity
                            @error('principleBusinessActivity') <span class="error text-danger">*</span>
                            @enderror
                        </label>
                        <input type="text" wire:model="principleBusinessActivity" class="form-control business-income-name-input" name="">
                </div>
        
                <div class="mt-3">
                        <label class="mb-2" for="">Who operates the business?
                            @error('businessOperator') <span class="error text-danger">*</span>
                            @enderror
                        </label><br>
                    <select class="form-control business-income-date-input" wire:model="businessOperator" id="businessOperator">
                        <option value="" selected>---</option>
                        <option value="taxpayer">Taxpayer</option>
                        <option value="spouse">Spouse</option>
                        <option value="joint">Joint</option>
                    </select>
                </div>
        
                    <div class="mt-3">
                        <label class="mb-2" for="">When was the Business Started?
                            @error('businessStartDate') <span class="error text-danger">*</span>
                            @enderror
                        </label>
                        <input type="date" wire:model="businessStartDate" class="form-control business-income-date-input" name="">
                    </div>
        
                    <div class="mt-3">
                        <label class="mb-2" for="">Did you employ any workers to whom you paid wages on a Form 1099?
                            @error('form1099Worker') <span class="error text-danger">*</span>
                            @enderror
                        </label><br>
                        <input type="radio" wire:model="form1099Worker" class="btn-check form-check-input "
                                name="form1099Worker" id="form1099WorkerYes" value='yes'>
                            <label class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="form1099WorkerYes">Yes</label>
        
                            <input wire:model="form1099Worker" type="radio" class="btn-check form-check-input"
                                name="form1099Worker" id="form1099WorkerNo" value='no'>
                            <label class="btn btn-outline-secondary btn-site-primary" for="form1099WorkerNo">No</label>
                    </div>
        
                    @if ($form1099Worker == 'yes')
                        <div class="mt-3">
                            <label class="mb-2" for="">If so, did you or will you file all required Forms 1099?
                                @error('confirmform1099Worker') <span class="error text-danger">*</span>
                                @enderror
                            </label><br>
                            <input type="radio" wire:model="confirmform1099Worker" class="btn-check form-check-input "
                                    name="confirmform1099Worker" id="confirmform1099WorkerYes" value='yes'>
                                <label class="btn btn-outline-secondary mr-3 btn-site-primary"
                                    for="confirmform1099WorkerYes">Yes</label>
        
                                <input wire:model="confirmform1099Worker" type="radio" class="btn-check form-check-input"
                                    name="confirmform1099Worker" id="confirmform1099WorkerNo" value='no'>
                                <label class="btn btn-outline-secondary btn-site-primary" for="confirmform1099WorkerNo">No</label>
                        </div>
                    @endif
        
                    <div class="mt-3">
                        <label class="mb-2" for="">Do you have other self-employed or 1099-NEC (Previously called 1099-MISC) income?
                            @error('hasSelfEmployedor1099Nec') <span class="error text-danger">*</span>
                            @enderror
                        </label><br>
                        <input type="radio" wire:model="hasSelfEmployedor1099Nec" class="btn-check form-check-input "
                                name="hasSelfEmployedor1099Nec" id="hasSelfEmployedor1099NecYes" value='yes'>
                        <label class="btn btn-outline-secondary mr-3 btn-site-primary"
                            for="hasSelfEmployedor1099NecYes">Yes</label>
        
                        <input wire:model="hasSelfEmployedor1099Nec" type="radio" class="btn-check form-check-input"
                            name="hasSelfEmployedor1099Nec" id="hasSelfEmployedor1099NecNo" value='no'>
                        <label class="btn btn-outline-secondary btn-site-primary" for="hasSelfEmployedor1099NecNo">No</label>
                    </div>
        
                    @if ($hasSelfEmployedor1099Nec == 'yes')
                            <div class="row mt-3">
                                <div class="col-md-7 ml-5">
                                    <div class="form-group light-grey">
                                        <label class="mb-2" for="">
                                            Upload your 1099-NEC
                                        </label>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <div class="form-group ">
                                            <div class="file btn btn-outline-success cs-file-upload">
                                                <i class="fa fa-upload mr-4"></i> Upload Forms
                                            <input wire:model="fileFor1099Nec" type="file"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="mt-3">
                                @if ($countryChosen == 'IL')
                                    <label class="mb-2" for="">Was this income reported on your Doch revach vehefsed?
                                        @error('wasIncomeReportedonTaxReturn') <span class="error text-danger">*</span>
                                        @enderror
                                    </label><br>
                                @else
                                    <label class="mb-2" for="">Was this income from your 1099-NEC reported on your foreign tax return?
                                        @error('wasIncomeReportedonTaxReturn') <span class="error text-danger">*</span>
                                        @enderror
                                    </label><br>
                                @endif
                                <input type="radio" wire:model="wasIncomeReportedonTaxReturn" class="btn-check form-check-input "
                                name="wasIncomeReportedonTaxReturn" id="wasIncomeReportedonTaxReturnYes" value='yes'>
                                <label class="btn btn-outline-secondary mr-3 btn-site-primary"
                                    for="wasIncomeReportedonTaxReturnYes">Yes</label>
                            
                                <input wire:model="wasIncomeReportedonTaxReturn" type="radio" class="btn-check form-check-input"
                                name="wasIncomeReportedonTaxReturn" id="wasIncomeReportedonTaxReturnNo" value='no'>
                                <label class="btn btn-outline-secondary btn-site-primary" for="wasIncomeReportedonTaxReturnNo">No</label>
                            </div>
                    @endif
                </div>
            </div>
            <div class="row mt-5">
                <div class="button-flex">
                    @if (($currentStep-1)==0)
                        <div></div>
                        <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                            <span class="pl-3 button_font_small">Income & Expenses <i class="fas fa-arrow-right button_font_small"></i></span>
                        </button>

                    @else
                        <button type="button" wire:click='prevForm' class="btn btn-outline-secondary mr-auto btn-site-primary color-text-white">
                            <span class="pl-3 button_font_small"><i class="fas fa-arrow-left button_font_small"></i> Back</span>
                        </button>

                        <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                            <span class="pl-3 button_font_small">Income & Expenses <i class="fas fa-arrow-right button_font_small"></i></span>
                        </button>
                    @endif

                </div>
            </div>
        </form>

        {{-- still controlling view based on which step --}}
        @elseif ($currentStep == 2)
        <h6 class="section-header">
            SECTION 2 INCOME AND EXPENSES
        </h3>  
        <div class="row mt-3">
            <form wire:submit.prevent='submitIncomeAndExpenses'>
                <div class="col-md-12 ml-5">
                    <div class="row mt-2">
                        <div class="col-md-8">
                            <label class="mb-2" for="">Tax year @error('taxYear') <span
                                class="error text-danger">*</span> @enderror
                            </label>

                            <input type="date" class="form-control business-income-date-input" wire:model.lazy="taxYear">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-8">
                            <label class="mb-2" for="">Amount of gross receipts @error('grossReceiptAmount') <span
                                class="error text-danger">*</span> @enderror
                            </label>
                            <input type="number" class="form-control business-income-date-input" wire:model.lazy="grossReceiptAmount">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-9">
                        <div class="text-success">
                            <p>Income and expense amounts should be recorded as per US tax year, January -December 31st.</p>
                        </div>
                        </div>
                    </div>


                    <div class="row mt-2">
                        <div class="form-group light-grey">
                            <label class="mb-2" for="">Do you have expenses?
                                @error('hasExpenses')<span class="error">*</span> @enderror
                            </label><br />
                            <input type="radio" wire:model="hasExpenses" class="btn-check form-check-input "
                                name="hasExpenses" id="hasExpensesYes" value='yes'>
                            <label class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="hasExpensesYes">Yes</label>
        
                            <input wire:model="hasExpenses" type="radio" class="btn-check form-check-input"
                                name="hasExpenses" id="hasExpensesNo" value='no'>
                            <label class="btn btn-outline-secondary btn-site-primary" for="hasExpensesNo">No</label>
                        </div>
                    </div>

                    @if ($hasExpenses == 'yes')
                        <div class="row mt-3">
                            <span><strong>Expenses</strong></span><label for="">Below is a general list of expenses that may be incurred in business.  Please provide expense amounts incurred in direct relation to your business during the tax year. </label>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="advertising" class="col-sm-3 col-form-label">Advertising</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="advertising">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="vehicleExpenses" class="col-sm-3 col-form-label">Vehicle Expenses</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="vehicleExpenses">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="commissions" class="col-sm-3 col-form-label">Commisssions & Fees</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="commissions">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="costOfGoodSold" class="col-sm-3 col-form-label">Cost of Goods Sold</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="costOfGoodSold">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="depletion" class="col-sm-3 col-form-label">Depletion</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="depletion">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="employeeBenefits" class="col-sm-3 col-form-label">Employee Benefits</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="employeeBenefits">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="employeeBenefitProgram" class="col-sm-3 col-form-label">Employee Benefits Program</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="employeeBenefitProgram">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="Insurance" class="col-sm-3 col-form-label">Insurance</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="Insurance">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="selfEmployedHealthInsurance" class="col-sm-3 col-form-label">Self-employed health insurance</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="selfEmployedHealthInsurance">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="mortgageInterest" class="col-sm-3 col-form-label">Mortgage interest paid to banks (if appears on Form 1098, please specify and send the form)</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="mortgageInterest">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="otherInterestPayments" class="col-sm-3 col-form-label">Other interest payments</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="otherInterestPayments">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="legalProfessionalServices" class="col-sm-3 col-form-label">Legal and professional services</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="legalProfessionalServices">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="officeExpenses" class="col-sm-3 col-form-label">Office expenses</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="officeExpenses">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="pensionProfitSharing" class="col-sm-3 col-form-label">Pension and profit sharing plans</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="pensionProfitSharing">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="rentLeaseVehicle" class="col-sm-3 col-form-label">Rent or lease of vehicles</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="rentLeaseVehicle">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="rentLeaseMaching" class="col-sm-3 col-form-label">Rent or lease of machinery, equipment</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="rentLeaseMachine">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="rentLeaseOther" class="col-sm-3 col-form-label">Rental or lease of other items (ex. Land)</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="rentLeaseOther">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="repairsMaintenance" class="col-sm-3 col-form-label">Repairs and maintenance</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="repairsMaintenance">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="supplies" class="col-sm-3 col-form-label">Supplies (if not included in cost of goods sold)</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="supplies">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="taxes" class="col-sm-3 col-form-label">Taxes (if reported on a Form 1098, please specify and send)</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="taxes">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="travel" class="col-sm-3 col-form-label">Travel</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="travel">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="meals" class="col-sm-3 col-form-label">Meals (subject to 50% limit)</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="meals">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="utilities" class="col-sm-3 col-form-label">Utilities</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="utilities">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="wagesExpense" class="col-sm-3 col-form-label">Wages expense </label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="wagesExpense">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="otherExpenses" class="col-sm-3 col-form-label">Other expenses (please specify)</label>
                            <div class="col-sm-5">
                            <input type="number" class="form-control" id="otherExpenses">
                            </div>
                        </div>
                        
                    @endif

                
                </div> 


                <div class="row mt-5">
                    <div class="button-flex">
                        <button type="button" wire:click='prevForm' class="btn btn-outline-secondary mr-auto btn-site-primary color-text-white">
                            <span class="pl-3 button_font_small"><i class="fas fa-arrow-left button_font_small"></i> Back</span>
                        </button>
    
                         <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                            <span class="pl-3 button_font_small">Cost of Goods Sold <i class="fas fa-arrow-right button_font_small"></i></span>
                        </button>
                    </div>
                </div>

             </form>             
        </div>


        {{-- step 3 form cost of good sold --}}
        @elseif ($currentStep == 3)
        <h6 class="section-header">
            SECTION 3 COST OF GOODS SOLD
        </h3>  
        <div class="row mt-4">
           <div class="form-group">
                <label class="mb-2" for=""><strong>Do you have Cost of goods sold?</strong>
                    @error('hasCostOfGoodSold') <span class="error text-danger">*</span>
                    @enderror
                </label><br>
                <input type="radio" wire:model="hasCostOfGoodSold" class="btn-check form-check-input "
                        name="hasCostOfGoodSold" id="hasCostOfGoodSoldYes" value='yes'>
                    <label class="btn btn-outline-secondary mr-3 btn-site-primary"
                        for="hasCostOfGoodSoldYes">Yes</label>
        
                <input wire:model="hasCostOfGoodSold" type="radio" class="btn-check form-check-input"
                    name="hasCostOfGoodSold" id="hasCostOfGoodSoldNo" value='no'>
                <label class="btn btn-outline-secondary btn-site-primary" for="hasCostOfGoodSoldNo">No</label>
           </div>
        </div>

        @if ($hasCostOfGoodSold == 'yes')
           <div class="row mt-5">
                <div class="form-group row mt-3">
                    <label for="closingInventoryValue" class="col-sm-4 col-form-label"><strong>What method do you use to value your closing inventory (cost, lower of cost or market, or other?)</strong></label>
                    <div class="col-sm-8">
                         <textarea type="text" class="form-control" id="closingInventoryValue"></textarea>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="changesToDetermineQuantity" class="col-sm-4 col-form-label"><strong>Was there any changes in determining quantities, costs, or valuations between opening and closing inventory? If so, please explain.</strong></label>
                    <div class="col-sm-8">
                         <textarea type="text" class="form-control" id="changesToDetermineQuantity"></textarea>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="startOfYearInventory" class="col-sm-4 col-form-label"><strong>What was your inventory at the beginning of the year?</strong></label>
                    <div class="col-sm-8">
                         <input type="text" class="form-control" id="startOfYearInventory">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="amountSpentOnPurchases" class="col-sm-4 col-form-label"><strong>Please enter the amount you spent on purchases:</strong></label>
                    <div class="col-sm-8">
                         <input type="number" class="form-control" id="amountSpentOnPurchases">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="costOfItemsForPersonalUse" class="col-sm-4 col-form-label"><strong>Please enter the cost of items withdrawn for personal use:</strong></label>
                    <div class="col-sm-8">
                         <input type="number" class="form-control" id="costOfItemsForPersonalUse">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="costOfLabor" class="col-sm-4 col-form-label"><strong>Please enter the cost of labor (excluding amounts paid to yourself):</strong></label>
                    <div class="col-sm-8">
                         <input type="number" class="form-control" id="costOfLabor">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="amountSpentOnMaterials" class="col-sm-4 col-form-label"><strong>Please enter the amount you spent on materials and supplies:</strong></label>
                    <div class="col-sm-8">
                         <input type="number" class="form-control" id="amountSpentOnMaterials">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="otherCost" class="col-sm-4 col-form-label"><strong>Please enter other costs:</strong></label>
                    <div class="col-sm-8">
                         <input type="number" class="form-control" id="otherCost">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label for="endOfYearInventory" class="col-sm-4 col-form-label"><strong>What was your year-end inventory amount?</strong></label>
                    <div class="col-sm-8">
                         <input type="number" class="form-control" id="endOfYearInventory">
                    </div>
                </div>
           </div>
        @endif





        <div class="row mt-5">
            <div class="button-flex">
                <button type="button" wire:click='prevForm' class="btn btn-outline-secondary mr-auto btn-site-primary color-text-white">
                    <span class="pl-3 button_font_small"><i class="fas fa-arrow-left button_font_small"></i> Back</span>
                </button>

                 <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                    <span class="pl-3 button_font_small">Submit <i class="fas fa-arrow-right button_font_small"></i></span>
                </button>
            </div>
        </div>
        {{-- end of change view if statment --}}
    @endif
   
        
   
    
</div>
