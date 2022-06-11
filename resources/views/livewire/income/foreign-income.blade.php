<div>
<<<<<<< HEAD

    <div class="row mt-4">
        <div class="row mt-4 stepwizard">
            <div class="col-md-12 ">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb cs-breadcrumbs">

                        <li class="breadcrumb-item mr-3 {{ $currentStep == 1 ? 'section-active' : '' }}">
                        <a class="light-grey" href="#">Taxpayer </a></li>

                        <li class="breadcrumb-item mr-3 {{ $currentStep == 2 ? 'section-active' : '' }} ">
                        <a class="light-grey" href="#">Spouse</a></li>

                        <li class="breadcrumb-item mr-3 {{ $currentStep == 3 ? 'section-active' : '' }}"><a class="light-grey" href="#">Foreign Housing Exclusion/Deduction</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    {{-- Section 1 --}}
    @if ($currentStep == 1)
        <div>
            <form action="" wire:submit.prevent='submitTaxPayer'>
                <div class="row">
                    <div class="row mt-">
                        <div class="col-md-12 ml-5">
                            <div class="form-group">
                                <div class="form-group light-grey">
                                    <label class="mb-2" for="">Please provide the name and address of your employer.
                                    </label><br/>

                                    <div class="row mt-" id="">
                                        <div class="col-md-4 ml-5">
                                            <div class="form-group">
                                                <div class="form-group light-grey">
                                                    <label for="">Name</label>@error('employerName') <span class="error text-danger">*</span> @enderror <br>
                                                    <input wire:model="employerName" type="text" class="form-control col-md-2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 ml-5">
                                            <div class="form-group">
                                                <div class="form-group light-grey">
                                                    <label for="">Address</label>@error('employerAddress') <span class="error text-danger">*</span> @enderror <br>
                                                    <input wire:model="employerAddress" type="text" class="form-control col-md-2" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="row mt-4">
                        <div class="col-md-12 ml-5">
                            <div class="form-group">
                                <div class="form-group light-grey">
                                    <label class="mb-2" for="">Of what country(ies) are you a citizen/national?
                                        @error('isACitizenOfWhatCountry') <span class="error text-danger">*</span> @enderror
                                    </label>
                                    <div class="row mt-" id="">
                                        <div class="col-md-4 ml-5">
                                            <div class="form-group">
                                                <div class="form-group light-grey">
                                                    <select class="form-control" wire:model="isACitizenOfWhatCountry">
                                                        <option value="  " selected>Select a country</option>
                                                        <option value="--">Not Specified</option>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row mt-3">
                    <div class="col-md-7 ml-5">
                        <div class="form-group light-gre">
                            <label class="mb-2" for="">Did you maintain a separate foreign residence for your family because of adverse living conditions at your tax home?
                                    @error('DidYouMaintainASeparateForeignResidence')<span class="error">*</span> @enderror
                                </label><br/>
                        <input type="radio" wire:model="DidYouMaintainASeparateForeignResidence"  class="btn-check form-check-input " name="DidYouMaintainASeparateForeignResidence" id="DidYouMaintainASeparateForeignResidenceYes"  value='yes' >
                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="DidYouMaintainASeparateForeignResidenceYes">Yes</label>

                                <input wire:model="DidYouMaintainASeparateForeignResidence" type="radio" class="btn-check form-check-input" name="DidYouMaintainASeparateForeignResidence" id="DidYouMaintainASeparateForeignResidenceNo"   value='no'>
                                <label  class="btn btn-outline-secondary btn-site-primary"
                                for="DidYouMaintainASeparateForeignResidenceNo">No</label>
                        </div>
                    </div>
                </div>


                @if($DidYouMaintainASeparateForeignResidence === 'yes')
                    <div class="row mt-3" id="">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-" for="">Please provide city and country of second separate foreign residence and number of days you maintained a household there.
                                </label>
                            </div>

                            <div class="form-group row mt-4  light-grey">
                                <label for="country" class="col-sm-4 col-form-label">Country @error('CountryOfSeparateForeignResidence')<span class="error">*</span> @enderror</label>
                                <div class="col-sm-8">
                                    <select id="country" class="form-control" wire:model="CountryOfSeparateForeignResidence">
                                        <option value="  " selected>Select a country</option>
                                        <option value="--">Not Specified</option>
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


                            <div class="form-group row mt-3">
                                <label for="city" class="col-sm-4 col-form-label">City @error('CityOfSeparateForeignResidence')<span class="error">*</span> @enderror</label>
                                <div class="col-sm-8">
                                    <input wire:model="CityOfSeparateForeignResidence" type="text" class="form-control col-md-2" id="city">
                                </div>
                            </div>


                            <div class="form-group row mt-3">
                                <label for="" class="col-sm-4 col-form-label">Number of Days @error('NumberOfDaysForSeparateForeignResidence')<span class="error">*</span> @enderror</label>
                                <div class="col-sm-8">
                                    <input wire:model="NumberOfDaysForSeparateForeignResidence" type="number" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-4" id="">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-" for=""> <strong>What was your country of residence during the year? @error('CountryOfResidence')<span class="error">*</span> @enderror </strong>
                                </label>
                            </div>

                            <div class="form-group row mt-3">
                                <div class="col-sm-8">
                                    <select class="form-control" wire:model="CountryOfResidence">
                                        <option value="  " selected>Select a country</option>
                                        <option value="--">Not Specified</option>
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
                        </div>
                    </div>


                    <div class="row mt-3" id="">
                        <label class="mb-2" for="">When did you move to your country of residence? @error('WhenDidYouMoveToCountryOfResidence')<span class="error">*</span> @enderror
                        </label>
                        <div class="col-md-4 ml-5">
                            <div class="form-group">
                                <div class="form-group light-grey">
                                    {{-- <label for="">Date</label>@error('WhenDidYouMoveToCountryOfResidence')<span class="error">*</span> @enderror <br> --}}
                                    <input wire:model="WhenDidYouMoveToCountryOfResidence" type="date" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-3" id="">
                        <label class="mb-2" for="">If you have since moved away from the above country, please provide the date on which your residence ended:
                            @error('DateResidenceEnded')<span class="error">*</span> @enderror
                        </label>
                        <div class="col-md-4 ml-5">
                            <div class="form-group">
                                <div class="form-group light-grey">
                                    {{-- <label for="">Date</label>@error('DateResidenceEnded')<span class="error">*</span> @enderror <br> --}}
                                    <input wire:model="DateResidenceEnded" type="date" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endif





                <div class="row mt-4" id="">
                    <div class="col-md-7 ml-5">
                        <div class="form-group light-gey">
                        <label class="mb-2" for=""> <strong>Please specify which statement is applicable to you regarding your living quarters in the foreign country:
                            @error('StatementApplicableToYouRegardingLivingQuarters')<span class="error">*</span> @enderror </strong>
                        </label>
                    </div>

                    <div class="col-md-8 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                {{-- <label for="">Select</label>@error('StatementApplicableToYouRegardingLivingQuarters')<span class="error">*</span> @enderror <br> --}}
                                <select class='form-control' wire:model='StatementApplicableToYouRegardingLivingQuarters'>
                                    <option>Select One</option>
                                    <option>Purchased home</option>
                                    <option>Rented house or apartment</option>
                                    <option>Rented a room</option>
                                    <option>Quarters furnished by employer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="col-md-7 ml-5">
                        <div class="form-group">
                            <label class="mb-2" for="">Did any of your family lived with you abroad during any part of the tax year?
                                    @error('DidAnyFamilyLiveWithYouAbroad')<span class="error">*</span> @enderror
                                </label><br/>
                        <input type="radio" wire:model="DidAnyFamilyLiveWithYouAbroad"  class="btn-check form-check-input " name="DidAnyFamilyLiveWithYouAbroad" id="DidAnyFamilyLiveWithYouAbroadYes"  value='yes' >
                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="DidAnyFamilyLiveWithYouAbroadYes">Yes</label>

                                <input wire:model="DidAnyFamilyLiveWithYouAbroad" type="radio" class="btn-check form-check-input" name="DidAnyFamilyLiveWithYouAbroad" id="DidAnyFamilyLiveWithYouAbroadNo"   value='no'>
                                <label  class="btn btn-outline-secondary btn-site-primary"
                                for="DidAnyFamilyLiveWithYouAbroadNo">No</label>
                        </div>
                    </div>
                </div>



                @if($DidAnyFamilyLiveWithYouAbroad === 'yes')
                <div class="row mt-3" id="">
                    <label class="mb-2" for="">Please specify who (which relative) and for what period:
                    </label><br/>

                    <div class="col-md-4 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                <label for="">Relative Name @error('RelativeName')<span class="error">*</span> @enderror</label><br>
                                <input wire:model="RelativeName" type="text" class="form-control col-md-2">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                <label for="">Period @error('RelativeStayPeriod')<span class="error">*</span> @enderror</label><br>
                                <input wire:model="RelativeStayPeriod" type="text" class="form-control col-md-2">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                @endif




                <div class="row mt-4">
                    <div class="col-md-7 ml-5">
                        <div class="form-group">
                            <label class="mb-2" for="">Have you submitted a statement to the authorities of the foreign country where you claim residence that you are not a resident of that country?
                                    @error('HaveYouSubmittedAStatmentToAuthorities')<span class="error">*</span> @enderror
                                </label><br/>
                        <input type="radio" wire:model="HaveYouSubmittedAStatmentToAuthorities"  class="btn-check form-check-input " name="HaveYouSubmittedAStatmentToAuthorities" id="HaveYouSubmittedAStatmentToAuthoritiesYes"  value='yes' >
                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="HaveYouSubmittedAStatmentToAuthoritiesYes">Yes</label>

                                <input wire:model="HaveYouSubmittedAStatmentToAuthorities" type="radio" class="btn-check form-check-input" name="HaveYouSubmittedAStatmentToAuthorities" id="HaveYouSubmittedAStatmentToAuthoritiesNo"   value='no'>
                                <label  class="btn btn-outline-secondary btn-site-primary"
                                for="HaveYouSubmittedAStatmentToAuthoritiesNo">No</label>
                        </div>
                    </div>
                </div>



                @if($HaveYouSubmittedAStatmentToAuthorities === 'yes')

                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Are you required to pay income tax to the foreign country where you claim residence?
                                        @error('AreYouRequiredToPayIncomeTaxToForeignCountry')<span class="error">*</span> @enderror
                                    </label><br/>
                                <input type="radio" wire:model="AreYouRequiredToPayIncomeTaxToForeignCountry"  class="btn-check form-check-input " name="AreYouRequiredToPayIncomeTaxToForeignCountry" id="AreYouRequiredToPayIncomeTaxToForeignCountryYes"  value='yes' >
                                    <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                    for="AreYouRequiredToPayIncomeTaxToForeignCountryYes">Yes</label>

                                    <input wire:model="AreYouRequiredToPayIncomeTaxToForeignCountry" type="radio" class="btn-check form-check-input" name="AreYouRequiredToPayIncomeTaxToForeignCountry" id="AreYouRequiredToPayIncomeTaxToForeignCountryNo"   value='no'>
                                    <label  class="btn btn-outline-secondary btn-site-primary"
                                    for="AreYouRequiredToPayIncomeTaxToForeignCountryNo">No</label>
                            </div>
                        </div>
                    </div>
                    <br>

                @endif



                <div class="row mt-5">
                    <div class="col-md-7 ml-5">
                        <div class="form-group">
                            <label class="mb-2" for="">Were you present in the US during the tax year?
                                    @error('WereYouPresentInUSDuringTaxYear')<span class="error">*</span> @enderror
                                </label><br/>
                            <input type="radio" wire:model="WereYouPresentInUSDuringTaxYear"  class="btn-check form-check-input " name="WereYouPresentInUSDuringTaxYear" id="WereYouPresentInUSDuringTaxYearYes"  value='yes' >
                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="WereYouPresentInUSDuringTaxYearYes">Yes</label>

                                <input wire:model="WereYouPresentInUSDuringTaxYear" type="radio" class="btn-check form-check-input" name="WereYouPresentInUSDuringTaxYear" id="WereYouPresentInUSDuringTaxYearNo"   value='no'>
                                <label  class="btn btn-outline-secondary btn-site-primary"
                                for="WereYouPresentInUSDuringTaxYearNo">No</label>
                        </div>
                    </div>
                </div>
                <br>

                @if($WereYouPresentInUSDuringTaxYear === 'yes')
                    <div class="row mt-3" id="">
                        <div class="col-md-7 ml-5">
                            <div class="form-group row mt-4  light-grey">
                                <label for="" class="col-sm-4 col-form-label">Date of Arrival In the US</label>@error('DateOfArrivalInUS')<span class="error">*</span> @enderror</label>
                                <div class="col-sm-8">
                                    <input wire:model="DateOfArrivalInUS" type="date" class="form-control col-md-2">
                                </div>
                            </div>


                            <div class="form-group row mt-4  light-grey">
                                <label for="" class="col-sm-4 col-form-label">Date Left the US</label>@error('DateLeftUS')<span class="error">*</span> @enderror <br>
                                <div class="col-sm-8">
                                    <input wire:model="DateLeftUS" type="date" class="form-control col-md-2">
                                </div>
                            </div>


                            <div class="form-group row mt-4  light-grey">
                                <label for="" class="col-sm-4 col-form-label">Number of Days in the US on Business</label>@error('NumberOfDaysInTheUSOnBusiness')<span class="error">*</span> @enderror <br>
                                <div class="col-sm-8">
                                    <input wire:model="NumberOfDaysInTheUSOnBusiness" type="number" class="form-control col-md-2">
                                </div>
                        </div>

                        <div class="form-group row mt-4  light-grey">
                                <label for="" class="col-sm-4 col-form-label">Income earned in the US</label>@error('IncomeEarnedInUS')<span class="error">*</span> @enderror <br>
                                <div class="col-sm-8">
                                    <input wire:model="IncomeEarnedInUS" type="text" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>


                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Please list any contractual terms or conditions relating to the length of your employment abroad:
                                        @error('AnyContracturalTerms')<span class="error">*</span> @enderror
                                    </label><br/>

                                    <textarea wire:model="AnyContracturalTerms" name="" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Under what type of visa did you enter the foreign country?
                                        @error('UnderWhatTypeOfVisaDidYouEnterTheForeignCountry')<span class="error">*</span> @enderror
                                    </label><br/>

                                    <input wire:model="UnderWhatTypeOfVisaDidYouEnterTheForeignCountry" type="text" class="form-control col-md-2">
                            </div>
                        </div>
                    </div>
                    <br>



                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Did your visa limit the length of your stay or employment in the country?
                                        @error('DidYourVisaLimitLengthOfStay')<span class="error">*</span> @enderror
                                    </label><br/>
                                <input type="radio" wire:model="DidYourVisaLimitLengthOfStay"  class="btn-check form-check-input " name="DidYourVisaLimitLengthOfStay" id="DidYourVisaLimitLengthOfStayYes"  value='yes' >
                                    <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                    for="DidYourVisaLimitLengthOfStayYes">Yes</label>

                                    <input wire:model="DidYourVisaLimitLengthOfStay" type="radio" class="btn-check form-check-input" name="DidYourVisaLimitLengthOfStay" id="DidYourVisaLimitLengthOfStayNo"   value='no'>
                                    <label  class="btn btn-outline-secondary btn-site-primary"
                                    for="DidYourVisaLimitLengthOfStayNo">No</label>
                            </div>
                        </div>
                    </div>


                    @if($DidYourVisaLimitLengthOfStay === 'yes')
                        <div class="row mt-3">
                            <div class="col-md-7 ml-5">
                                <div class="form-group light-grey">
                                    <label class="mb-2" for="">In what way?
                                            @error('InWhatWayDidYourVisaLimitLengthOfStay')<span class="error">*</span> @enderror
                                        </label><br/>

                                        <input wire:model="InWhatWayDidYourVisaLimitLengthOfStay" type="text" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    @endif


                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Did you maintain a home in the U.S. while living abroad?
                                        @error('DidYouMaintainAHomeInUS')<span class="error">*</span> @enderror
                                    </label><br/>
                                <input type="radio" wire:model="DidYouMaintainAHomeInUS"  class="btn-check form-check-input " name="DidYouMaintainAHomeInUS" id="DidYouMaintainAHomeInUSYes"  value='yes' >
                                    <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                    for="DidYouMaintainAHomeInUSYes">Yes</label>

                                    <input wire:model="DidYouMaintainAHomeInUS" type="radio" class="btn-check form-check-input" name="DidYouMaintainAHomeInUS" id="DidYouMaintainAHomeInUSNo"   value='no'>
                                    <label  class="btn btn-outline-secondary btn-site-primary"
                                    for="DidYouMaintainAHomeInUSNo">No</label>
                            </div>
                        </div>
                    </div>
                    <br>

                    @if($DidYouMaintainAHomeInUS === 'yes')
                        <div class="row mt-3">
                            <div class="col-md-7 ml-5">
                                <div class="form-group light-grey">
                                    <label class="mb-2" for="">Provide the address of the home, whether it was rented out, the names of the occupants, and their relationship to you.
                                        @error('AddressOfHomeInUS')<span class="error">*</span> @enderror
                                    </label><br/>


                                    <div class="form-group row mt-3  light-grey">
                                        <label for="country" class="col-sm-4 col-form-label">Address of home @error('AddressOfHomeInUS')<span class="error">*</span> @enderror</label>
                                        <div class="col-sm-8">
                                            <input wire:model="AddressOfHomeInUS" type="text" class="form-control col-md-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3" id="">
                            <div class="col-md-4 ml-5">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <label for="">Occupant Name</label>@error('NameOfOccupantsOfHomeInUS') <span class="error text-danger">*</span> @enderror <br>
                                        <input wire:model="NameOfOccupantsOfHomeInUS" type="text" class="form-control col-md-2">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 ml-5">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <label for="">Relationship</label>@error('RelationshipWithOccupants') <span class="error text-danger">*</span> @enderror <br>
                                        <input wire:model="RelationshipWithOccupants" type="text" class="form-control col-md-2" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2" style="display: flex; align-items:flex-end">
                                <button class="btn btn-success add_item_btn03 mr-5" wire:click.prevent="addInput({{$i}})"><i class="fas fa-plus" aria-hidden="true"></i></button>
                            </div>
                        </div>

                        @foreach ($inputs as $value )
                            <div class="row mt-3" id="">
                                <div class="col-md-4 ml-5">
                                    <div class="form-group">
                                        <div class="form-group light-grey">
                                            <label for="">Occupant Name</label> <br>
                                            <input type="text" class="form-control col-md-2">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 ml-5">
                                    <div class="form-group">
                                        <div class="form-group light-grey">
                                            <label for="">Relationship</label><br>
                                            <input type="text" class="form-control col-md-2" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2" style="display: flex; align-items:flex-end">
                                    <button class="btn btn-danger add_item_btn03 mr-5" wire:click.prevent="removeInput({{$i}})"><i class="fas fa-minus" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        @endforeach
                    @endif


                @endif


                <div class="row mt-5">
                    <div class="button-flex">
                        @if (($currentStep-1)==0)
                            <div></div>
                            <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                                <span class="pl-3 button_font_small">Submit Taxpayer <i class="fas fa-arrow-right button_font_small"></i></span>
                            </button>

                        @else
                            <button type="button" wire:click='prevForm' class="btn btn-outline-secondary mr-auto btn-site-primary color-text-white">
                                <span class="pl-3 button_font_small"><i class="fas fa-arrow-left button_font_small"></i> Back</span>
                            </button>

                            <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                                <span class="pl-3 button_font_small">Submit Spouse <i class="fas fa-arrow-right button_font_small"></i></span>
                            </button>
                        @endif

                    </div>
                </div>

            </form>
        </div>




    {{-- Section 2 --}}
    @elseif ($currentStep == 2)
        <div class="" id="step-2">
            <form action="" wire:submit.prevent='submitSpouse'>
                <div class="row">
                    <div class="row mt-">
                        <div class="col-md-12 ml-5">
                            <div class="form-group">
                                <div class="form-group light-grey">
                                    <label class="mb-2" for="">Please provide the name and address of your employer.
                                    </label><br/>

                                    <div class="row mt-" id="">
                                        <div class="col-md-4 ml-5">
                                            <div class="form-group">
                                                <div class="form-group light-grey">
                                                    <label for="">Name</label>@error('SpouseEmployerName') <span class="error text-danger">*</span> @enderror <br>
                                                    <input wire:model="SpouseEmployerName" type="text" class="form-control col-md-2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 ml-5">
                                            <div class="form-group">
                                                <div class="form-group light-grey">
                                                    <label for="">Address</label>@error('SpouseEmployerAddress') <span class="error text-danger">*</span> @enderror <br>
                                                    <input wire:model="SpouseEmployerAddress" type="text" class="form-control col-md-2" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="row mt-4">
                        <div class="col-md-12 ml-5">
                            <div class="form-group">
                                <div class="form-group light-grey">
                                    <label class="mb-2" for="">Of what country(ies) are you a citizen/national?
                                        @error('SpouseIsACitizenOfWhatCountry') <span class="error text-danger">*</span> @enderror
                                    </label>
                                    <div class="row mt-" id="">
                                        <div class="col-md-4 ml-5">
                                            <div class="form-group">
                                                <div class="form-group light-grey">
                                                    <select class="form-control" wire:model="SpouseIsACitizenOfWhatCountry">
                                                        <option value="  " selected>Select a country</option>
                                                        <option value="--">Not Specified</option>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row mt-3">
                    <div class="col-md-7 ml-5">
                        <div class="form-group light-gre">
                            <label class="mb-2" for="">Did you maintain a separate foreign residence for your family because of adverse living conditions at your tax home?
                                    @error('SpouseDidYouMaintainASeparateForeignResidence')<span class="error">*</span> @enderror
                                </label><br/>
                        <input type="radio" wire:model="SpouseDidYouMaintainASeparateForeignResidence"  class="btn-check form-check-input " name="DidYouMaintainASeparateForeignResidence" id="DidYouMaintainASeparateForeignResidenceYes"  value='yes' >
                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="DidYouMaintainASeparateForeignResidenceYes">Yes</label>

                                <input wire:model="SpouseDidYouMaintainASeparateForeignResidence" type="radio" class="btn-check form-check-input" name="DidYouMaintainASeparateForeignResidence" id="DidYouMaintainASeparateForeignResidenceNo"   value='no'>
                                <label  class="btn btn-outline-secondary btn-site-primary"
                                for="DidYouMaintainASeparateForeignResidenceNo">No</label>
                        </div>
                    </div>
                </div>


                @if($DidYouMaintainASeparateForeignResidence === 'yes')
                    <div class="row mt-3" id="">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-" for="">Please provide city and country of second separate foreign residence and number of days you maintained a household there.
                                </label>
                            </div>

                            <div class="form-group row mt-4  light-grey">
                                <label for="country" class="col-sm-4 col-form-label">Country @error('SpouseCountryOfSeparateForeignResidence')<span class="error">*</span> @enderror</label>
                                <div class="col-sm-8">
                                    <select id="country" class="form-control" wire:model="SpouseCountryOfSeparateForeignResidence">
                                        <option value="  " selected>Select a country</option>
                                        <option value="--">Not Specified</option>
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


                            <div class="form-group row mt-3">
                                <label for="city" class="col-sm-4 col-form-label">City @error('SpouseCityOfSeparateForeignResidence')<span class="error">*</span> @enderror</label>
                                <div class="col-sm-8">
                                    <input wire:model="SpouseCityOfSeparateForeignResidence" type="text" class="form-control col-md-2" id="city">
                                </div>
                            </div>


                            <div class="form-group row mt-3">
                                <label for="" class="col-sm-4 col-form-label">Number of Days @error('SpouseNumberOfDaysForSeparateForeignResidence')<span class="error">*</span> @enderror</label>
                                <div class="col-sm-8">
                                    <input wire:model="SpouseNumberOfDaysForSeparateForeignResidence" type="number" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-4" id="">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-" for=""> <strong>What was your country of residence during the year? @error('SpouseCountryOfResidence')<span class="error">*</span> @enderror </strong>
                                </label>
                            </div>

                            <div class="form-group row mt-3">
                                <div class="col-sm-8">
                                    <select class="form-control" wire:model="SpouseCountryOfResidence">
                                        <option value="  " selected>Select a country</option>
                                        <option value="--">Not Specified</option>
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
                        </div>
                    </div>


                    <div class="row mt-3" id="">
                        <label class="mb-2" for="">When did you move to your country of residence? @error('SpouseWhenDidYouMoveToCountryOfResidence')<span class="error">*</span> @enderror
                        </label>
                        <div class="col-md-4 ml-5">
                            <div class="form-group">
                                <div class="form-group light-grey">
                                    {{-- <label for="">Date</label>@error('SpouseWhenDidYouMoveToCountryOfResidence')<span class="error">*</span> @enderror <br> --}}
                                    <input wire:model="SpouseWhenDidYouMoveToCountryOfResidence" type="date" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-3" id="">
                        <label class="mb-2" for="">If you have since moved away from the above country, please provide the date on which your residence ended:
                            @error('SpouseDateResidenceEnded')<span class="error">*</span> @enderror
                        </label>
                        <div class="col-md-4 ml-5">
                            <div class="form-group">
                                <div class="form-group light-grey">
                                    {{-- <label for="">Date</label>@error('SpouseDateResidenceEnded')<span class="error">*</span> @enderror <br> --}}
                                    <input wire:model="SpouseDateResidenceEnded" type="date" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endif





                <div class="row mt-4" id="">
                    <div class="col-md-7 ml-5">
                        <div class="form-group light-gey">
                        <label class="mb-2" for=""> <strong>Please specify which statement is applicable to you regarding your living quarters in the foreign country:
                            @error('SpouseStatementApplicableToYouRegardingLivingQuarters')<span class="error">*</span> @enderror </strong>
                        </label>
                    </div>

                    <div class="col-md-8 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                {{-- <label for="">Select</label>@error('SpouseStatementApplicableToYouRegardingLivingQuarters')<span class="error">*</span> @enderror <br> --}}
                                <select class='form-control' wire:model='StatementApplicableToYouRegardingLivingQuarters'>
                                    <option>Select One</option>
                                    <option>Purchased home</option>
                                    <option>Rented house or apartment</option>
                                    <option>Rented a room</option>
                                    <option>Quarters furnished by employer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="col-md-7 ml-5">
                        <div class="form-group">
                            <label class="mb-2" for="">Did any of your family lived with you abroad during any part of the tax year?
                                    @error('SpouseDidAnyFamilyLiveWithYouAbroad')<span class="error">*</span> @enderror
                                </label><br/>
                        <input type="radio" wire:model="SpouseDidAnyFamilyLiveWithYouAbroad"  class="btn-check form-check-input " name="DidAnyFamilyLiveWithYouAbroad" id="DidAnyFamilyLiveWithYouAbroadYes"  value='yes' >
                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="DidAnyFamilyLiveWithYouAbroadYes">Yes</label>

                                <input wire:model="SpouseDidAnyFamilyLiveWithYouAbroad" type="radio" class="btn-check form-check-input" name="DidAnyFamilyLiveWithYouAbroad" id="DidAnyFamilyLiveWithYouAbroadNo"   value='no'>
                                <label  class="btn btn-outline-secondary btn-site-primary"
                                for="DidAnyFamilyLiveWithYouAbroadNo">No</label>
                        </div>
                    </div>
                </div>



                @if($DidAnyFamilyLiveWithYouAbroad === 'yes')
                <div class="row mt-3" id="">
                    <label class="mb-2" for="">Please specify who (which relative) and for what period:
                    </label><br/>

                    <div class="col-md-4 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                <label for="">Relative Name @error('SpouseRelativeName')<span class="error">*</span> @enderror</label><br>
                                <input wire:model="SpouseRelativeName" type="text" class="form-control col-md-2">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ml-5">
                        <div class="form-group">
                            <div class="form-group light-grey">
                                <label for="">Period @error('SpouseRelativeStayPeriod')<span class="error">*</span> @enderror</label><br>
                                <input wire:model="SpouseRelativeStayPeriod" type="text" class="form-control col-md-2">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                @endif




                <div class="row mt-4">
                    <div class="col-md-7 ml-5">
                        <div class="form-group">
                            <label class="mb-2" for="">Have you submitted a statement to the authorities of the foreign country where you claim residence that you are not a resident of that country?
                                    @error('SpouseHaveYouSubmittedAStatmentToAuthorities')<span class="error">*</span> @enderror
                                </label><br/>
                        <input type="radio" wire:model="SpouseHaveYouSubmittedAStatmentToAuthorities"  class="btn-check form-check-input " name="HaveYouSubmittedAStatmentToAuthorities" id="HaveYouSubmittedAStatmentToAuthoritiesYes"  value='yes' >
                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="HaveYouSubmittedAStatmentToAuthoritiesYes">Yes</label>

                                <input wire:model="SpouseHaveYouSubmittedAStatmentToAuthorities" type="radio" class="btn-check form-check-input" name="HaveYouSubmittedAStatmentToAuthorities" id="HaveYouSubmittedAStatmentToAuthoritiesNo"   value='no'>
                                <label  class="btn btn-outline-secondary btn-site-primary"
                                for="HaveYouSubmittedAStatmentToAuthoritiesNo">No</label>
                        </div>
                    </div>
                </div>



                @if($HaveYouSubmittedAStatmentToAuthorities === 'yes')

                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Are you required to pay income tax to the foreign country where you claim residence?
                                        @error('SpouseAreYouRequiredToPayIncomeTaxToForeignCountry')<span class="error">*</span> @enderror
                                    </label><br/>
                                <input type="radio" wire:model="SpouseAreYouRequiredToPayIncomeTaxToForeignCountry"  class="btn-check form-check-input " name="AreYouRequiredToPayIncomeTaxToForeignCountry" id="AreYouRequiredToPayIncomeTaxToForeignCountryYes"  value='yes' >
                                    <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                    for="AreYouRequiredToPayIncomeTaxToForeignCountryYes">Yes</label>

                                    <input wire:model="SpouseAreYouRequiredToPayIncomeTaxToForeignCountry" type="radio" class="btn-check form-check-input" name="AreYouRequiredToPayIncomeTaxToForeignCountry" id="AreYouRequiredToPayIncomeTaxToForeignCountryNo"   value='no'>
                                    <label  class="btn btn-outline-secondary btn-site-primary"
                                    for="AreYouRequiredToPayIncomeTaxToForeignCountryNo">No</label>
                            </div>
                        </div>
                    </div>
                    <br>

                @endif



                <div class="row mt-5">
                    <div class="col-md-7 ml-5">
                        <div class="form-group">
                            <label class="mb-2" for="">Were you present in the US during the tax year?
                                    @error('SpouseWereYouPresentInUSDuringTaxYear')<span class="error">*</span> @enderror
                                </label><br/>
                            <input type="radio" wire:model="SpouseWereYouPresentInUSDuringTaxYear"  class="btn-check form-check-input " name="WereYouPresentInUSDuringTaxYear" id="WereYouPresentInUSDuringTaxYearYes"  value='yes' >
                                <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                for="WereYouPresentInUSDuringTaxYearYes">Yes</label>

                                <input wire:model="SpouseWereYouPresentInUSDuringTaxYear" type="radio" class="btn-check form-check-input" name="WereYouPresentInUSDuringTaxYear" id="WereYouPresentInUSDuringTaxYearNo"   value='no'>
                                <label  class="btn btn-outline-secondary btn-site-primary"
                                for="WereYouPresentInUSDuringTaxYearNo">No</label>
                        </div>
                    </div>
                </div>
                <br>

                @if($WereYouPresentInUSDuringTaxYear === 'yes')
                    <div class="row mt-3" id="">
                        <div class="col-md-7 ml-5">
                            <div class="form-group row mt-4  light-grey">
                                <label for="" class="col-sm-4 col-form-label">Date of Arrival In the US</label>@error('SpouseDateOfArrivalInUS')<span class="error">*</span> @enderror</label>
                                <div class="col-sm-8">
                                    <input wire:model="SpouseDateOfArrivalInUS" type="date" class="form-control col-md-2">
                                </div>
                            </div>


                            <div class="form-group row mt-4  light-grey">
                                <label for="" class="col-sm-4 col-form-label">Date Left the US</label>@error('SpouseDateLeftUS')<span class="error">*</span> @enderror <br>
                                <div class="col-sm-8">
                                    <input wire:model="SpouseDateLeftUS" type="date" class="form-control col-md-2">
                                </div>
                            </div>


                            <div class="form-group row mt-4  light-grey">
                                <label for="" class="col-sm-4 col-form-label">Number of Days in the US on Business</label>@error('SpouseNumberOfDaysInTheUSOnBusiness')<span class="error">*</span> @enderror <br>
                                <div class="col-sm-8">
                                    <input wire:model="SpouseNumberOfDaysInTheUSOnBusiness" type="number" class="form-control col-md-2">
                                </div>
                        </div>

                        <div class="form-group row mt-4  light-grey">
                                <label for="" class="col-sm-4 col-form-label">Income earned in the US</label>@error('SpouseIncomeEarnedInUS')<span class="error">*</span> @enderror <br>
                                <div class="col-sm-8">
                                    <input wire:model="SpouseIncomeEarnedInUS" type="text" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>


                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Please list any contractual terms or conditions relating to the length of your employment abroad:
                                        @error('SpouseAnyContracturalTerms')<span class="error">*</span> @enderror
                                    </label><br/>

                                    <textarea wire:model="SpouseAnyContracturalTerms" name="" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Under what type of visa did you enter the foreign country?
                                        @error('SpouseUnderWhatTypeOfVisaDidYouEnterTheForeignCountry')<span class="error">*</span> @enderror
                                    </label><br/>

                                    <input wire:model="SpouseUnderWhatTypeOfVisaDidYouEnterTheForeignCountry" type="text" class="form-control col-md-2">
                            </div>
                        </div>
                    </div>
                    <br>



                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Did your visa limit the length of your stay or employment in the country?
                                        @error('SpouseDidYourVisaLimitLengthOfStay')<span class="error">*</span> @enderror
                                    </label><br/>
                                <input type="radio" wire:model="SpouseDidYourVisaLimitLengthOfStay"  class="btn-check form-check-input " name="DidYourVisaLimitLengthOfStay" id="DidYourVisaLimitLengthOfStayYes"  value='yes' >
                                    <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                    for="DidYourVisaLimitLengthOfStayYes">Yes</label>

                                    <input wire:model="SpouseDidYourVisaLimitLengthOfStay" type="radio" class="btn-check form-check-input" name="DidYourVisaLimitLengthOfStay" id="DidYourVisaLimitLengthOfStayNo"   value='no'>
                                    <label  class="btn btn-outline-secondary btn-site-primary"
                                    for="DidYourVisaLimitLengthOfStayNo">No</label>
                            </div>
                        </div>
                    </div>


                    @if($DidYourVisaLimitLengthOfStay === 'yes')
                        <div class="row mt-3">
                            <div class="col-md-7 ml-5">
                                <div class="form-group light-grey">
                                    <label class="mb-2" for="">In what way?
                                            @error('SpouseInWhatWayDidYourVisaLimitLengthOfStay')<span class="error">*</span> @enderror
                                        </label><br/>

                                        <input wire:model="SpouseInWhatWayDidYourVisaLimitLengthOfStay" type="text" class="form-control col-md-2">
                                </div>
                            </div>
                        </div>
                    @endif


                    <div class="row mt-3">
                        <div class="col-md-7 ml-5">
                            <div class="form-group light-grey">
                                <label class="mb-2" for="">Did you maintain a home in the U.S. while living abroad?
                                        @error('SpouseDidYouMaintainAHomeInUS')<span class="error">*</span> @enderror
                                    </label><br/>
                                <input type="radio" wire:model="SpouseDidYouMaintainAHomeInUS"  class="btn-check form-check-input " name="DidYouMaintainAHomeInUS" id="DidYouMaintainAHomeInUSYes"  value='yes' >
                                    <label  class="btn btn-outline-secondary mr-3 btn-site-primary"
                                    for="DidYouMaintainAHomeInUSYes">Yes</label>

                                    <input wire:model="SpouseDidYouMaintainAHomeInUS" type="radio" class="btn-check form-check-input" name="DidYouMaintainAHomeInUS" id="DidYouMaintainAHomeInUSNo"   value='no'>
                                    <label  class="btn btn-outline-secondary btn-site-primary"
                                    for="DidYouMaintainAHomeInUSNo">No</label>
                            </div>
                        </div>
                    </div>
                    <br>

                    @if($DidYouMaintainAHomeInUS === 'yes')
                        <div class="row mt-3">
                            <div class="col-md-7 ml-5">
                                <div class="form-group light-grey">
                                    <label class="mb-2" for="">Provide the address of the home, whether it was rented out, the names of the occupants, and their relationship to you.
                                        @error('SpouseAddressOfHomeInUS')<span class="error">*</span> @enderror
                                    </label><br/>


                                    <div class="form-group row mt-3  light-grey">
                                        <label for="country" class="col-sm-4 col-form-label">Address of home @error('SpouseAddressOfHomeInUS')<span class="error">*</span> @enderror</label>
                                        <div class="col-sm-8">
                                            <input wire:model="SpouseAddressOfHomeInUS" type="text" class="form-control col-md-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3" id="">
                            <div class="col-md-4 ml-5">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <label for="">Occupant Name</label>@error('SpouseNameOfOccupantsOfHomeInUS') <span class="error text-danger">*</span> @enderror <br>
                                        <input wire:model="SpouseNameOfOccupantsOfHomeInUS" type="text" class="form-control col-md-2">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 ml-5">
                                <div class="form-group">
                                    <div class="form-group light-grey">
                                        <label for="">Relationship</label>@error('SpouseRelationshipWithOccupants') <span class="error text-danger">*</span> @enderror <br>
                                        <input wire:model="SpouseRelationshipWithOccupants" type="text" class="form-control col-md-2" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2" style="display: flex; align-items:flex-end">
                                <button class="btn btn-success add_item_btn03 mr-5" wire:click.prevent="addInput({{$i}})"><i class="fas fa-plus" aria-hidden="true"></i></button>
                            </div>
                        </div>

                        @foreach ($inputs as $value )
                            <div class="row mt-3" id="">
                                <div class="col-md-4 ml-5">
                                    <div class="form-group">
                                        <div class="form-group light-grey">
                                            <label for="">Occupant Name</label> <br>
                                            <input type="text" class="form-control col-md-2">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 ml-5">
                                    <div class="form-group">
                                        <div class="form-group light-grey">
                                            <label for="">Relationship</label><br>
                                            <input type="text" class="form-control col-md-2" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2" style="display: flex; align-items:flex-end">
                                    <button class="btn btn-danger add_item_btn03 mr-5" wire:click.prevent="removeInput({{$i}})"><i class="fas fa-minus" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        @endforeach
                    @endif


                @endif


                <div class="row mt-5">
                    <div class="button-flex">
                        @if (($currentStep-1)==0)
                            <div></div>
                            <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                                <span class="pl-3 button_font_small">Submit Taxpayer <i class="fas fa-arrow-right button_font_small"></i></span>
                            </button>

                        @else
                            <button type="button" wire:click='prevForm' class="btn btn-outline-secondary mr-auto btn-site-primary color-text-white">
                                <span class="pl-3 button_font_small"><i class="fas fa-arrow-left button_font_small"></i> Back</span>
                            </button>

                            <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                                <span class="pl-3 button_font_small">Submit Spouse <i class="fas fa-arrow-right button_font_small"></i></span>
                            </button>
                        @endif

                    </div>
                </div>

            </form>
        </div>





    {{-- Section 3 --}}
    @elseif ($currentStep == 3)
    <div id="step-3">
        <form action="" wire:submit.prevent='submitForeignHousing'>
            <div class="row mb-3">
                <div class="col-md-8 text-info">
                    <span>
                        <i class="fa fa-regular fa-circle-info "></i>
                        Only complete if your income is above $100,000
                    </span>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-7 ml-5">
                    <div class="form-group light-gey">
                        <label class="mb-2" for="">The following is a general list of allowable expenses used to calculate your foreign housing exclusion/deduction.  Please provide amounts of actual expenses incurred during the tax year.</label>
                    </div>
                </div>
            </div>


            <div class="row mt-3" id="">
                <div class="col-md-7 ml-5">
                    <div class="form-group row mt-4  light-gre">
                        <label for="" class="col-sm-4 col-form-label">Rent ($)</label>
                        <div class="col-sm-8">
                            <input wire:model="Rent" type="number" class="form-control col-md-2">
                        </div>
                    </div>

                    <div class="form-group row mt-4  light-gre">
                        <label for="" class="col-sm-4 col-form-label">Household repairs and maintenance ($)</label>
                        <div class="col-sm-8">
                            <input wire:model="HouseholdRepairs" type="number" class="form-control col-md-2">
                        </div>
                    </div>

                    <div class="form-group row mt-4  light-gre">
                        <label for="" class="col-sm-4 col-form-label">Utilities (other than telephone) ($)</label>
                        <div class="col-sm-8">
                            <input wire:model="Utilities" type="number" class="form-control col-md-2">
                        </div>
                    </div>

                    <div class="form-group row mt-4  light-gre">
                        <label for="" class="col-sm-4 col-form-label">Real property and personal property insurance ($)</label>
                        <div class="col-sm-8">
                            <input wire:model="RealPropertyInsurance" type="number" class="form-control col-md-2">
                        </div>
                    </div>

                    <div class="form-group row mt-4  light-gre">
                        <label for="" class="col-sm-4 col-form-label">Occupancy taxes ($)</label>
                        <div class="col-sm-8">
                            <input wire:model="OccupancyTax" type="number" class="form-control col-md-2">
                        </div>
                    </div>

                    <div class="form-group row mt-4  light-gre">
                        <label for="" class="col-sm-4 col-form-label">Nonrefundable security deposits ($)</label>
                        <div class="col-sm-8">
                            <input wire:model="NonRefundableSecurityDeposit" type="number" class="form-control col-md-2">
                        </div>
                    </div>
                    <div class="form-group row mt-4  light-gre">
                        <label for="" class="col-sm-4 col-form-label">Furniture rental ($)</label>
                        <div class="col-sm-8">
                            <input wire:model="FurnitureRental" type="number" class="form-control col-md-2">
                        </div>
                    </div>
                    <div class="form-group row mt-4  light-gre">
                        <label for="" class="col-sm-4 col-form-label">Residential parking fees ($)</label>
                        <div class="col-sm-8">
                            <input wire:model="ResidentialParking" type="number" class="form-control col-md-2">
                        </div>
                    </div>
                </div>
            </div>





            <div class="row mt-5">
                <div class="button-flex">
                    @if ($currentStep==3)
                        <div></div>
                        <button type="button" wire:click='prevForm' class="btn btn-outline-secondary mr-auto btn-site-primary color-text-white">
                            <span class="pl-3 button_font_small"><i class="fas fa-arrow-left button_font_small"></i> Back</span>
                        </button>

                        <button type="submit" class="btn btn-outline-secondary ml-auto btn-site-primary color-text-white ml-auto">
                            <span class="pl-3 button_font_small">Submit Foreign Housing Exclusion <i class="fas fa-arrow-right button_font_small"></i></span>
                        </button>

                    @endif

                </div>
            </div>
        </form>
    </div>

    @endif



=======
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
>>>>>>> master
