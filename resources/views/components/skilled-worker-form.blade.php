<div id="skilled-worker-form">
    <form class="form-horizontal relative" style="margin-top:15px;">
        <div v-if="loading" class="loading-overlay">
            <div class="loader">
                <div class="lds-ring">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="page-1" v-if="page == 1">
            <div class="form-group">
                <label for="salution" class="col-sm-4 control-label">Salution</label>
                <div class="col-sm-8">
                    <select class="form-control w-min" id="salution" name="salution" v-model="model.salution">
                        <option value="1" data-val="mr">Mr.</option>
                        <option value="2" data-val="ms">Ms.</option>
                        <option value="3" data-val="mrs">Mrs.</option>
                        <option value="4" data-val="miss">Miss.</option>
                        <option value="5" data-val="dr">Dr.</option>
                    </select>
                </div>
            </div>
            <div :class="errors.firstname ? 'form-group has-error' : 'form-group'">
                <label for="firstname" class="col-sm-4 control-label">First name</label>
                <div class="col-sm-8">
                    <input type="text" id="firstname" name="firstname" class="form-control w-min w-min"
                        v-model="model.firstname" ref="firstname" />
                    <span v-if="errors.firstname" id="helpBlock2"
                        class="help-block">@{{ errors . firstname }}</span>
                </div>
            </div>
            <div :class="errors.lastname ? 'form-group has-error' : 'form-group'">
                <label for="lastname" class="col-sm-4 control-label">Last name</label>
                <div class="col-sm-8">
                    <input type="text" id="lastname" name="lastname" class="form-control w-min"
                        v-model="model.lastname" />
                    <span v-if="errors.lastname" class="help-block">@{{ errors . lastname }}</span>
                </div>
            </div>
            <div :class="errors.marital_status ? 'form-group has-error' : 'form-group'">
                <label for="marital_status" class="col-sm-4 control-label">Marital status</label>
                <div class="col-sm-8">
                    <select class="form-control w-min" id="marital_status" name="marital_status"
                        v-model="model.marital_status">
                        <option value="0">--Select--</option>
                        <option value="1">Never married</option>
                        <option value="2">Married</option>
                        <option value="3">Widowed</option>
                        <option value="4">Legally separated</option>
                        <option value="5">Annulled marriage</option>
                        <option value="6">Divorced</option>
                        <option value="7">Common-law</option>
                    </select>
                    <span v-if="errors.marital_status" class="help-block">@{{ errors . marital_status }}</span>
                </div>
            </div>
            <div :class="errors.dob ? 'form-group has-error' : 'form-group'">
                <label for="dob" class="col-sm-4 control-label">Date of birth</label>
                <div class="col-sm-8">
                    <input type="date" id="dob" name="dob" class="form-control w-min" v-model="model.dob" />
                    <span v-if="errors.dob" class="help-block">@{{ errors . dob }}</span>
                </div>
            </div>
            <template v-if="model.marital_status == 2">
                <div :class="errors.spouse_dob ? 'form-group has-error' : 'form-group'">
                    <label for="spouse_dob" class="col-sm-4 control-label">Spouse's date of birth</label>
                    <div class="col-sm-8">
                        <input type="date" id="spouse_dob" name="spouse_dob" class="form-control w-min"
                            v-model="model.spouse_dob" />
                        <span v-if="errors.spouse_dob" class="help-block">@{{ errors . spouse_dob }}</span>
                    </div>
                </div>
            </template>
            <div :class="errors.country_id ? 'form-group has-error' : 'form-group'">
                <label for="country_id" class="col-sm-4 control-label">Country of citizenship</label>
                <div class="col-sm-8">
                    <select class="form-control w-min" id="country_id" name="country_id" v-model="model.country_id">
                        <option value="0">--Select--</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    <span v-if="errors.country_id" class="help-block">@{{ errors . country_id }}</span>
                </div>
            </div>
            <div :class="errors.resident_country_id ? 'form-group has-error' : 'form-group'">
                <label for="resident_country_id" class="col-sm-4 control-label">Current country of citizenship</label>
                <div class="col-sm-8">
                    <select class="form-control w-min" id="resident_country_id" name="resident_country_id"
                        v-model="model.resident_country_id">
                        <option value="0">--Select--</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    <span v-if="errors.resident_country_id"
                        class="help-block">@{{ errors . resident_country_id }}</span>
                </div>
            </div>
            <div :class="errors.email ? 'form-group has-error' : 'form-group'">
                <label for="email" class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" id="email" name="email" class="form-control w-min" v-model="model.email" />
                    <span v-if="errors.email" class="help-block">@{{ errors . email }}</span>
                </div>
            </div>
            <div :class="errors.email_confirmation ? 'form-group has-error' : 'form-group'">
                <label for="email_confirmation" class="col-sm-4 control-label">Email (Confirm Again)</label>
                <div class="col-sm-8">
                    <input type="email" id="email_confirmation" name="email_confirmation" class="form-control w-min"
                        v-model="model.email_confirmation" />
                    <span v-if="errors.email_confirmation"
                        class="help-block">@{{ errors . email_confirmation }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-4 control-label">Phone (optional)</label>
                <div class="col-sm-8">
                    <input type="text" id="phone" name="phone" class="form-control w-min" v-model="model.phone" />
                </div>
            </div>
            <div class="form-group">
                <label for="fax" class="col-sm-4 control-label">Fax (optional)</label>
                <div class="col-sm-8">
                    <input type="text" id="fax" name="fax" class="form-control w-min" v-model="model.fax" />
                </div>
            </div>
            <div :class="errors.hear_us ? 'form-group has-error' : 'form-group'">
                <label for="hear_us" class="col-sm-4 control-label">How did you hear about us?</label>
                <div class="col-sm-8">
                    <select class="form-control w-min" id="hear_us" name="hear_us" v-model="model.hear_us">
                        <option value="0">--Select--</option>
                        <option value="google">Google</option>
                        <option value="yahoo">Yahoo</option>
                        <option value="friends">Friends</option>
                        <option value="clients">Your CLients</option>
                        <option value="social">Social Media</option>
                        <option value="radio">Radio</option>
                        <option value="print">Print Media</option>
                        <option value="other">Other</option>
                    </select>
                    <span v-if="errors.hear_us" class="help-block">@{{ errors . hear_us }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="aoi" class="col-sm-4 control-label">Area of interest</label>
                <div class="col-sm-8">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="immigrate" v-model="model.aoi" />Immigrate
                            to canada
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="work" v-model="model.aoi" />Work in canada
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="study" v-model="model.aoi" />Study in canada
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="invest" v-model="model.aoi" />Invest in canada
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="not_sure" v-model="model.aoi" />Not sure
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="further_info" class="col-sm-4 control-label">Further Information: Please indicate if you
                    have
                    applied to IRCC under Express Entry or under any Provincial Nominee Program. If so, how do you wish
                    to
                    be
                    assisted by us. Please provide details here.</label>
                <div class="col-sm-8">
                    <textarea id="further_info" name="further_info" class="form-control " v-model="model.further_info"
                        rows="7"></textarea>
                </div>
            </div>
        </div>
        <div class="page-2" v-if="page == 2">
            <div class="border-gray-800 border">
                <div class="bg-gray-800 text-white py-2 px-4">
                    <h6>CHILDREN</h6>
                </div>
                <div class="form-horizontal mt-2 p-4">
                    <div class="form-group">
                        <label for="hear_us" class="col-sm-4 control-label">Number of children (If child is less than
                            one
                            year old, eg. 5 months old, please specify age as 0.5, otherwise round it up to nearest
                            year</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" id="no_of_children" name="no_of_children"
                                v-model="model.children.no_of_children" ref="no_of_children">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6+</option>
                            </select>
                        </div>
                    </div>
                    <div :class="errors.child_1_age ? 'form-group has-error' : 'form-group'"
                        v-if="model.children.no_of_children >= 1">
                        <label for="child-1" class="col-sm-4 control-label">Age of child 1</label>
                        <div class="col-sm-8">
                            <input type="number" id="child-1" name="child-1" class="form-control w-min"
                                v-model="model.children.child_1_age" />
                            <span v-if="errors.child_1_age" class="help-block">@{{ errors . child_1_age }}</span>
                        </div>
                    </div>
                    <div :class="errors.child_2_age ? 'form-group has-error' : 'form-group'"
                        v-if="model.children.no_of_children >= 2">
                        <label for="child-1" class="col-sm-4 control-label">Age of child 2</label>
                        <div class="col-sm-8">
                            <input type="number" id="child-2" name="child-2" class="form-control w-min"
                                v-model="model.children.child_2_age" />
                            <span v-if="errors.child_2_age" class="help-block">@{{ errors . child_2_age }}</span>
                        </div>
                    </div>
                    <div :class="errors.child_3_age ? 'form-group has-error' : 'form-group'"
                        v-if="model.children.no_of_children >= 3">
                        <label for="child-3" class="col-sm-4 control-label">Age of child 3</label>
                        <div class="col-sm-8">
                            <input type="number" id="child-3" name="child-3" class="form-control w-min"
                                v-model="model.children.child_3_age" />
                            <span v-if="errors.child_3_age"
                                class="help-block">@{{ errors . child_3_age }}</span>
                        </div>
                    </div>
                    <div :class="errors.child_4_age ? 'form-group has-error' : 'form-group'"
                        v-if="model.children.no_of_children >= 4">
                        <label for="child-4" class="col-sm-4 control-label">Age of child 4</label>
                        <div class="col-sm-8">
                            <input type="number" id="child-4" name="child-4" class="form-control w-min"
                                v-model="model.children.child_4_age" />
                            <span v-if="errors.child_4_age"
                                class="help-block">@{{ errors . child_4_age }}</span>
                        </div>
                    </div>
                    <div :class="errors.child_5_age ? 'form-group has-error' : 'form-group'"
                        v-if="model.children.no_of_children >= 5">
                        <label for="child-5" class="col-sm-4 control-label">Age of child 5</label>
                        <div class="col-sm-8">
                            <input type="number" id="child-5" name="child-5" class="form-control w-min"
                                v-model="model.children.child_5_age" />
                            <span v-if="errors.child_5_age"
                                class="help-block">@{{ errors . child_5_age }}</span>
                        </div>
                    </div>
                    <div :class="errors.child_6_age ? 'form-group has-error' : 'form-group'"
                        v-if="model.children.no_of_children >= 6">
                        <label for="child-6" class="col-sm-4 control-label">Age of child 6</label>
                        <div class="col-sm-8">
                            <input type="number" id="child-6" name="child-6" class="form-control w-min"
                                v-model="model.children.child_6_age" />
                            <span v-if="errors.child_6_age"
                                class="help-block">@{{ errors . child_6_age }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-gray-800 border">
                <div class="bg-gray-800 text-white py-2 px-4">
                    <h6>EDUCATION</h6>
                </div>
                <div class="form-horizontal mt-2 p-4">
                    <div :class="errors.highest_level ? 'form-group has-error' : 'form-group'">
                        <label class="col-sm-4 control-label">What is your highest level of
                            education?</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.education.highest_level">
                                <option value="">-- Please select --</option>
                                <option value="1">Ph. D.</option>
                                <option value="2">Master's degree</option>
                                <option value="3">2 or more Bachelor's degrees</option>
                                <option value="4">Bachelor's degree (4 years)</option>
                                <option value="5">Bachelor's degree (3 years)</option>
                                <option value="6">Bachelor's degree (2 years)</option>
                                <option value="7">Bachelor's degree (1 year)</option>
                                <option value="8">Diploma, Trade certificate, or Apprenticeship (3 years)</option>
                                <option value="9">Diploma, Trade certificate, or Apprenticeship (2 years)</option>
                                <option value="10">Diploma, Trade certificate, or Apprenticeship (1 year)</option>
                                <option value="11">High school diploma</option>
                                <option value="12">Below high school diploma</option>
                            </select>
                            <span v-if="errors.highest_level"
                                class="help-block">@{{ errors . highest_level }}</span>
                        </div>
                    </div>
                    <div :class="errors.name_of_diploma ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Name of diploma</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control w-min" ref="name_of_diploma"
                                v-model="model.education.name_of_diploma" />
                            <span v-if="errors.name_of_diploma"
                                class="help-block">@{{ errors . name_of_diploma }}</span>
                        </div>
                    </div>
                    <div :class="errors.aos ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Area of studies</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control w-min" v-model="model.education.aos" />
                            <span v-if="errors.aos" class="help-block">@{{ errors . aos }}</span>
                        </div>
                    </div>
                    <div :class="errors.cos ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Country of studies</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control w-min" v-model="model.education.cos" />
                            <span v-if="errors.cos" class="help-block">@{{ errors . cos }}</span>
                        </div>
                    </div>
                    <div :class="errors.toei ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Type of Educational Institute</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.education.toei">
                                <option value="">-- Please select --</option>
                                <option value="1">Public.</option>
                                <option value="2">Private</option>
                            </select>
                            <span v-if="errors.toei" class="help-block">@{{ errors . toei }}</span>
                        </div>
                    </div>
                    <div :class="errors.completed_post_sec ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Have you completed any post-secondary
                            studies in Canada?</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" v-model="model.education.completed_post_sec" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" v-model="model.education.completed_post_sec" value="0"> No
                            </label>
                            <span v-if="errors.completed_post_sec"
                                class="help-block">@{{ errors . completed_post_sec }}</span>
                        </div>
                    </div>
                    <div class="form-group" v-if="model.education.completed_post_sec == 1">
                        <label for="child-6" class="col-sm-4 control-label">Post-secondary studies period:</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.education.post_sec_period">
                                <option value="1">1 year</option>
                                <option value="2">2 years</option>
                                <option value="3">3 years or more</option>
                            </select>
                        </div>
                    </div>
                    <div :class="errors.name_of_bachelor_degree ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Name of bachelor's degree</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control w-min"
                                v-model="model.education.name_of_bachelor_degree" />
                            <span v-if="errors.name_of_bachelor_degree"
                                class="help-block">@{{ errors . name_of_bachelor_degree }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-gray-800 border">
                <div class="bg-gray-800 text-white py-2 px-4">
                    <h6>LANGUAGE - THIS IS A VERY IMPORTANT ASSESSMENT FACTOR. IF YOU HAVE NOT YET TAKEN THE TEST, DO
                        INDICATE ACCORDINGLY. WE WILL ADVISE YOU ON YOUR ELIGIBILITY AND THE TARGET SCORE THAT MAY ASSIT
                        YOU IN MEETING THE REQUIREMENTS</h6>
                </div>
                <div class="form-horizontal mt-2 p-4">
                    <div class="form-group">
                        <label for="child-6" class="col-sm-4 control-label">Have you taken any English language test?
                            <span class="text-red-700">If not, indicate your estimated proficiency on a scale of 1-10
                                (10 being highest). Do not leave the answer blank.</span></label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.language.language_test">
                                <option value="">--Please Select--</option>
                                <option value="1">IELTS</option>
                                <option value="2">CELPIP</option>
                                <option value="3">No</option>
                            </select>
                        </div>
                    </div>
                    <template v-if="model.language.language_test == 1">
                        <div class="mt-2 text-center underline">English (IELTS Score)</div>
                        <div :class="errors.ielts_speak ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Speak</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control w-min" v-model="model.language.ielts.speak">
                                <span v-if="errors.ielts_speak"
                                    class="help-block">@{{ errors . ielts_speak }}</span>
                            </div>
                        </div>
                        <div :class="errors.ielts_read ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Read</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control w-min" v-model="model.language.ielts.read">
                                <span v-if="errors.ielts_read"
                                    class="help-block">@{{ errors . ielts_read }}</span>
                            </div>
                        </div>
                        <div :class="errors.ielts_write ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Write</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control w-min" v-model="model.language.ielts.write">
                                <span v-if="errors.ielts_write"
                                    class="help-block">@{{ errors . ielts_write }}</span>
                            </div>
                        </div>
                        <div :class="errors.ielts_listen ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Listen</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control w-min" v-model="model.language.ielts.listen">
                                <span v-if="errors.ielts_listen"
                                    class="help-block">@{{ errors . ielts_listen }}</span>
                            </div>
                        </div>
                    </template>
                    <template v-if="model.language.language_test == 2">
                        <div class="mt-2 text-center underline">English (CELPIP)</div>
                        <div :class="errors.celpip_speak ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Speak</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.celpip.speak">
                                    <option value="">--Please Select--</option>
                                    <option value="12">Level 12</option>
                                    <option value="11">Level 11</option>
                                    <option value="10">Level 10</option>
                                    <option value="9">Level 9</option>
                                    <option value="8">Level 8</option>
                                    <option value="7">Level 7</option>
                                    <option value="6">Level 6</option>
                                    <option value="5">Level 5</option>
                                    <option value="4">Level 4</option>
                                    <option value="3">Level 3</option>
                                    <option value="2">Level 2</option>
                                    <option value="1">Level 1</option>
                                </select>
                                <span v-if="errors.celpip_speak"
                                    class="help-block">@{{ errors . celpip_speak }}</span>
                            </div>
                        </div>
                        <div :class="errors.celpip_read ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Read</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.celpip.read">
                                    <option value="">--Please Select--</option>
                                    <option value="12">Level 12</option>
                                    <option value="11">Level 11</option>
                                    <option value="10">Level 10</option>
                                    <option value="9">Level 9</option>
                                    <option value="8">Level 8</option>
                                    <option value="7">Level 7</option>
                                    <option value="6">Level 6</option>
                                    <option value="5">Level 5</option>
                                    <option value="4">Level 4</option>
                                    <option value="3">Level 3</option>
                                    <option value="2">Level 2</option>
                                    <option value="1">Level 1</option>
                                </select>
                                <span v-if="errors.celpip_read"
                                    class="help-block">@{{ errors . celpip_read }}</span>
                            </div>
                        </div>
                        <div :class="errors.celpip_write ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Write</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.celpip.write">
                                    <option value="">--Please Select--</option>
                                    <option value="12">Level 12</option>
                                    <option value="11">Level 11</option>
                                    <option value="10">Level 10</option>
                                    <option value="9">Level 9</option>
                                    <option value="8">Level 8</option>
                                    <option value="7">Level 7</option>
                                    <option value="6">Level 6</option>
                                    <option value="5">Level 5</option>
                                    <option value="4">Level 4</option>
                                    <option value="3">Level 3</option>
                                    <option value="2">Level 2</option>
                                    <option value="1">Level 1</option>
                                </select>
                                <span v-if="errors.celpip_write"
                                    class="help-block">@{{ errors . celpip_write }}</span>
                            </div>
                        </div>
                        <div :class="errors.celpip_listen ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Listen</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.celpip.listen">
                                    <option value="">--Please Select--</option>
                                    <option value="12">Level 12</option>
                                    <option value="11">Level 11</option>
                                    <option value="10">Level 10</option>
                                    <option value="9">Level 9</option>
                                    <option value="8">Level 8</option>
                                    <option value="7">Level 7</option>
                                    <option value="6">Level 6</option>
                                    <option value="5">Level 5</option>
                                    <option value="4">Level 4</option>
                                    <option value="3">Level 3</option>
                                    <option value="2">Level 2</option>
                                    <option value="1">Level 1</option>
                                </select>
                                <span v-if="errors.celpip_listen"
                                    class="help-block">@{{ errors . celpip_listen }}</span>
                            </div>
                        </div>
                    </template>
                    <template v-if="model.language.language_test == 3">
                        <div class="mt-2 text-center underline">English (General Proficiency)</div>
                        <div :class="errors.general_speak ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Speak</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.general.speak">
                                    <option value="">--Please Select--</option>
                                    <option value="1">Advanced/Native Proficiency (CLB 9+)</option>
                                    <option value="2">Upper Intermediate (CLB 8)</option>
                                    <option value="3">Intermediate (CLB 7)</option>
                                    <option value="4">Lower Intermediate (CLB 5)</option>
                                    <option value="5">Basic (CLB 3)</option>
                                    <option value="6">Not at all (CLB 1)</option>
                                </select>
                                <span v-if="errors.general_speak"
                                    class="help-block">@{{ errors . general_speak }}</span>
                            </div>
                        </div>
                        <div :class="errors.general_read ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Read</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.general.read">
                                    <option value="">--Please Select--</option>
                                    <option value="1">Advanced/Native Proficiency (CLB 9+)</option>
                                    <option value="2">Upper Intermediate (CLB 8)</option>
                                    <option value="3">Intermediate (CLB 7)</option>
                                    <option value="4">Lower Intermediate (CLB 5)</option>
                                    <option value="5">Basic (CLB 3)</option>
                                    <option value="6">Not at all (CLB 1)</option>
                                </select>
                                <span v-if="errors.general_read"
                                    class="help-block">@{{ errors . general_read }}</span>
                            </div>
                        </div>
                        <div :class="errors.general_write ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Write</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.general.write">
                                    <option value="">--Please Select--</option>
                                    <option value="1">Advanced/Native Proficiency (CLB 9+)</option>
                                    <option value="2">Upper Intermediate (CLB 8)</option>
                                    <option value="3">Intermediate (CLB 7)</option>
                                    <option value="4">Lower Intermediate (CLB 5)</option>
                                    <option value="5">Basic (CLB 3)</option>
                                    <option value="6">Not at all (CLB 1)</option>
                                </select>
                                <span v-if="errors.general_write"
                                    class="help-block">@{{ errors . general_write }}</span>
                            </div>
                        </div>
                        <div :class="errors.general_listen ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Listen</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.general.listen">
                                    <option value="">--Please Select--</option>
                                    <option value="1">Advanced/Native Proficiency (CLB 9+)</option>
                                    <option value="2">Upper Intermediate (CLB 8)</option>
                                    <option value="3">Intermediate (CLB 7)</option>
                                    <option value="4">Lower Intermediate (CLB 5)</option>
                                    <option value="5">Basic (CLB 3)</option>
                                    <option value="6">Not at all (CLB 1)</option>
                                </select>
                                <span v-if="errors.general_listen"
                                    class="help-block">@{{ errors . general_listen }}</span>
                            </div>
                        </div>
                    </template>
                    <div class="form-group">
                        <label for="child-6" class="col-sm-4 control-label">Have you done TEF (Test d'évaluation de
                            français)?</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.language.done_tef">
                                <option value="">--Please Select--</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <template v-if="model.language.done_tef == 1">
                        <div class="mt-2 text-center underline">French (TEF scores)</div>
                        <div :class="errors.french_tef_speak ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Speak</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control w-min"
                                    v-model="model.language.french_tef.speak">
                                <span v-if="errors.french_tef_speak"
                                    class="help-block">@{{ errors . french_tef_speak }}</span>
                            </div>
                        </div>
                        <div :class="errors.french_tef_read ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Read</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control w-min"
                                    v-model="model.language.french_tef.read">
                                <span v-if="errors.french_tef_read"
                                    class="help-block">@{{ errors . french_tef_read }}</span>
                            </div>
                        </div>
                        <div :class="errors.french_tef_write ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Write</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control w-min"
                                    v-model="model.language.french_tef.write">
                                <span v-if="errors.french_tef_write"
                                    class="help-block">@{{ errors . french_tef_write }}</span>
                            </div>
                        </div>
                        <div :class="errors.french_tef_listen ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Listen</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control w-min"
                                    v-model="model.language.french_tef.listen">
                                <span v-if="errors.french_tef_listen"
                                    class="help-block">@{{ errors . french_tef_listen }}</span>
                            </div>
                        </div>
                    </template>
                    <template v-if="model.language.done_tef === 0 || model.language.done_tef === '0'">
                        <div class="mt-2 text-center underline">French (General Proficiency)</div>
                        <div :class="errors.general_french_speak ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Speak</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.general_french.speak">
                                    <option value="">--Please Select--</option>
                                    <option value="1">Advanced/Native Proficiency (CLB 9+)</option>
                                    <option value="2">Upper Intermediate (CLB 8)</option>
                                    <option value="3">Intermediate (CLB 7)</option>
                                    <option value="4">Lower Intermediate (CLB 5)</option>
                                    <option value="5">Basic (CLB 3)</option>
                                    <option value="6">Not at all (CLB 1)</option>
                                </select>
                                <span v-if="errors.general_french_speak"
                                    class="help-block">@{{ errors . general_french_speak }}</span>
                            </div>
                        </div>
                        <div :class="errors.general_french_read ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Read</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.general_french.read">
                                    <option value="">--Please Select--</option>
                                    <option value="1">Advanced/Native Proficiency (CLB 9+)</option>
                                    <option value="2">Upper Intermediate (CLB 8)</option>
                                    <option value="3">Intermediate (CLB 7)</option>
                                    <option value="4">Lower Intermediate (CLB 5)</option>
                                    <option value="5">Basic (CLB 3)</option>
                                    <option value="6">Not at all (CLB 1)</option>
                                </select>
                                <span v-if="errors.general_french_read"
                                    class="help-block">@{{ errors . general_french_read }}</span>
                            </div>
                        </div>
                        <div :class="errors.general_french_write ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Write</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.general_french.write">
                                    <option value="">--Please Select--</option>
                                    <option value="1">Advanced/Native Proficiency (CLB 9+)</option>
                                    <option value="2">Upper Intermediate (CLB 8)</option>
                                    <option value="3">Intermediate (CLB 7)</option>
                                    <option value="4">Lower Intermediate (CLB 5)</option>
                                    <option value="5">Basic (CLB 3)</option>
                                    <option value="6">Not at all (CLB 1)</option>
                                </select>
                                <span v-if="errors.general_french_write"
                                    class="help-block">@{{ errors . general_french_write }}</span>
                            </div>
                        </div>
                        <div :class="errors.general_french_listen ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Listen</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.language.general_french.listen">
                                    <option value="">--Please Select--</option>
                                    <option value="1">Advanced/Native Proficiency (CLB 9+)</option>
                                    <option value="2">Upper Intermediate (CLB 8)</option>
                                    <option value="3">Intermediate (CLB 7)</option>
                                    <option value="4">Lower Intermediate (CLB 5)</option>
                                    <option value="5">Basic (CLB 3)</option>
                                    <option value="6">Not at all (CLB 1)</option>
                                </select>
                                <span v-if="errors.general_french_listen"
                                    class="help-block">@{{ errors . general_french_listen }}</span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            <div class="border-gray-800 border">
                <div class="bg-gray-800 text-white py-2 px-4">
                    <h6>WORK IN CANADA</h6>
                </div>
                <div class="form-horizontal mt-2 p-4">
                    <div :class="errors.been_temp_foreign_worker ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Have you been in Canada as a <b>temporary
                                foreign worker<b>? </label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" v-model="model.work.been_temp_foreign_worker" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" v-model="model.work.been_temp_foreign_worker" value="0"> No
                            </label>
                            <span v-if="errors.been_temp_foreign_worker"
                                class="help-block">@{{ errors . been_temp_foreign_worker }}</span>
                        </div>
                    </div>
                    <template v-if="model.work.been_temp_foreign_worker == 1">
                        <div :class="errors.years_as_full_time ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">How many years have you worked
                                full-time in this position in Canada? </label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.work.years_as_full_time" value="0"> None
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.work.years_as_full_time" value="1"> 1 year
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.work.years_as_full_time" value="2"> 2 years or
                                    more
                                </label>
                                <span v-if="errors.years_as_full_time"
                                    class="help-block">@{{ errors . years_as_full_time }}</span>
                            </div>
                        </div>
                        <div :class="errors.employed_in_canada ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Are you currently employed in
                                Canada?</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.work.employed_in_canada" value="1"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.work.employed_in_canada" value="0"> No
                                </label>
                                <span v-if="errors.employed_in_canada"
                                    class="help-block">@{{ errors . employed_in_canada }}</span>
                            </div>
                        </div>
                        <div :class="errors.when_left_job ? 'form-group has-error' : 'form-group'"
                            v-if="model.work.employed_in_canada == 0">
                            <label for="child-6" class="col-sm-4 control-label">When did you leave your employment in
                                Canada?</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.work.when_left_job" value="1"> Less than a year
                                    ago
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.work.when_left_job" value="2"> More than a year
                                    ago
                                </label>
                                <span v-if="errors.when_left_job"
                                    class="help-block">@{{ errors . when_left_job }}</span>
                            </div>
                        </div>
                    </template>
                    <div :class="errors.arranged ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Arranged employment?</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" v-model="model.work.arranged" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" v-model="model.work.arranged" value="0"> No
                            </label>
                            <span v-if="errors.arranged" class="help-block">@{{ errors . arranged }}</span>
                        </div>
                    </div>
                    <div class="form-group" v-if="model.work.arranged == 1">
                        <label for="child-6" class="col-sm-4 control-label">NOC</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.work.noc">
                                <option value="1">NOC 00</option>
                                <option value="2">NOC 0, A, B</option>
                                <option value="3">Not sure</option>
                            </select>
                        </div>
                    </div>
                    <div :class="errors.has_qualification_certificate ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Do you have a certificate of qualification
                            in a trade occupation issued by a province?</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" v-model="model.work.has_qualification_certificate" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" v-model="model.work.has_qualification_certificate" value="0"> No
                            </label>
                            <span v-if="errors.has_qualification_certificate"
                                class="help-block">@{{ errors . has_qualification_certificate }}</span>
                        </div>
                    </div>
                    <div :class="errors.has_nomination_certificate ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Do you have a a nomination certificate from
                            a Canadian province (except Quebec)? </label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" v-model="model.work.has_nomination_certificate" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" v-model="model.work.has_nomination_certificate" value="0"> No
                            </label>
                            <span v-if="errors.has_nomination_certificate"
                                class="help-block">@{{ errors . has_nomination_certificate }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-gray-800 border">
                <div class="bg-gray-800 text-white py-2 px-4">
                    <h6>FAMILY RELATIONS IN CANADA</h6>
                </div>
                <div class="form-horizontal mt-2 p-4">
                    <div :class="errors.has_blood_relative ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Do you or, if applicable your accompanying
                            spouse, or common-law partner have a <span class="text-red-700">blood relative</span>
                            living in Canada who is a citizen or a permanent resident of Canada? </label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" v-model="model.family.has_blood_relative" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" v-model="model.family.has_blood_relative" value="0"> No
                            </label>
                            <span v-if="errors.has_blood_relative"
                                class="help-block">@{{ errors . has_blood_relative }}</span>
                        </div>
                    </div>
                    <template v-if="model.family.has_blood_relative == 1">
                        <div :class="errors.relationship ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Their relationship with you </label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.family.relationship">
                                    <option value="">None</option>
                                    <option value="1">Mother or father</option>
                                    <option value="2">Daughter or son</option>
                                    <option value="3">Sister or brother</option>
                                    <option value="4">Niece or nephew</option>
                                    <option value="5">Grandmother or grandfather</option>
                                    <option value="6">Granddaughter or grandson</option>
                                    <option value="7">Aunt or uncle</option>
                                    <option value="8">Spouse or common-law partner</option>
                                </select>
                                <span v-if="errors.relationship"
                                    class="help-block">@{{ errors . relationship }}</span>
                            </div>
                        </div>
                        <div :class="errors.relative_wish_to_sponsor ? 'form-group has-error' : 'form-group'"
                            v-if="model.family.relationship == 1 || model.family.relationship == 2 || model.family.relationship == 6 || model.family.relationship == 8">
                            <label for="child-6" class="col-sm-4 control-label">Does this relative wish to sponsor you?
                                If unsure, please choose No.</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.family.relative_wish_to_sponsor" value="1"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.family.relative_wish_to_sponsor" value="0"> No
                                </label>
                                <span v-if="errors.relative_wish_to_sponsor"
                                    class="help-block">@{{ errors . relative_wish_to_sponsor }}</span>
                            </div>
                        </div>
                        <template v-if="model.family.relative_wish_to_sponsor == 1">
                            <div :class="errors.full_time_student ? 'form-group has-error' : 'form-group'"
                                v-if="model.family.relationship == 1">
                                <label for="child-6" class="col-sm-4 control-label">Are you currently a full-time
                                    student?</label>
                                <div class="col-sm-8">
                                    <label class="radio-inline">
                                        <input type="radio" v-model="model.family.full_time_student" value="1"> Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" v-model="model.family.full_time_student" value="0"> No
                                    </label>
                                    <span v-if="errors.full_time_student"
                                        class="help-block">@{{ errors . full_time_student }}</span>
                                </div>
                            </div>
                            <template v-if="model.family.relationship == 2 || model.family.relationship == 6">
                                <div :class="errors.relative_age ? 'form-group has-error' : 'form-group'">
                                    <label for="child-6" class="col-sm-4 control-label">How old is your
                                        relative?</label>
                                    <div class="col-sm-8">
                                        <label class="radio-inline">
                                            <input type="radio" v-model="model.family.relative_age" value="0"> Younger
                                            than
                                            18 years
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" v-model="model.family.relative_age" value="1"> 18 years
                                            or
                                            over
                                        </label>
                                        <span v-if="errors.relative_age"
                                            class="help-block">@{{ errors . relative_age }}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="child-6" class="col-sm-4 control-label">What is the employment status
                                        of
                                        your relative?</label>
                                    <div class="col-sm-8">
                                        <select class="form-control w-min"
                                            v-model="model.family.relative_employment_status">
                                            <option value="1">Employed</option>
                                            <option value="2">Self-Employed</option>
                                            <option value="3">Unemployed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="child-6" class="col-sm-4 control-label">How many people is this
                                        relative
                                        financially responsible for in his/her household in Canada?</label>
                                    <div class="col-sm-8">
                                        <select class="form-control w-min"
                                            v-model="model.family.people_relative_responsible">
                                            <option value="9">9</option>
                                            <option value="8">8</option>
                                            <option value="7">7</option>
                                            <option value="6">6</option>
                                            <option value="5">5</option>
                                            <option value="4">4</option>
                                            <option value="3">3</option>
                                            <option value="2">2</option>
                                            <option value="1">1</option>
                                            <option value="0">0</option>
                                        </select>
                                    </div>
                                </div>
                                <div :class="errors.relative_annual_income ? 'form-group has-error' : 'form-group'">
                                    <label for="child-6" class="col-sm-4 control-label">How much is the annual
                                        household
                                        income of your relative? This includes the combined annual income of your
                                        relative
                                        and his/her spouse. </label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control w-min pull-left"
                                            v-model="model.family.relative_annual_income">CDN$
                                        <span v-if="errors.relative_annual_income"
                                            class="help-block">@{{ errors . relative_annual_income }}</span>
                                    </div>
                                </div>
                            </template>
                        </template>
                        <div :class="errors.dependant_financial ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">Have you been a full-time student and
                                substantially dependent on your parents for financial support since before the age of
                                19?</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.family.dependant_financial" value="1"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.family.dependant_financial" value="0"> No
                                </label>
                                <span v-if="errors.dependant_financial"
                                    class="help-block">@{{ errors . dependant_financial }}</span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            <div class="border-gray-800 border">
                <div class="bg-gray-800 text-white py-2 px-4">
                    <h6>Previous and the Future Visit(s)</h6>
                </div>
                <div class="form-horizontal mt-2 p-4">
                    <div class="form-group">
                        <label for="child-6" class="col-sm-4 control-label">Have you or your spouse previously visited
                            Canada for work, travel, or study?</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.previous.visited_canada">
                                <option value="">--Please Select</option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="child-6" class="col-sm-4 control-label">Have you or your spouse previously applied
                            for immigration or visa to Canada?</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.previous.applied_for_immigration">
                                <option value="">--Please Select</option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="child-6" class="col-sm-4 control-label">Where is your preferred destination in
                            Canada?</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.previous.preferred_destination">
                                <option value="">-- Please select --</option>
                                <option value="1">Any</option>
                                <option value="2">Alberta (AB)</option>
                                <option value="3">British Columbia (BC)</option>
                                <option value="4">Manitoba (MB)</option>
                                <option value="5">New Brunswick (NB)</option>
                                <option value="6">Newfoundland and Labrador (NL)</option>
                                <option value="7">Northwest Territories (NT)</option>
                                <option value="8">Nova Scotia (NS)</option>
                                <option value="9">Nunavut (NU)</option>
                                <option value="10">Ontario (ON)</option>
                                <option value="11">Prince Edward Island (PE)</option>
                                <option value="12">Quebec (QC)</option>
                                <option value="13">Saskatchewan (SK)</option>
                                <option value="14">Yukon (YT)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="child-6" class="col-sm-4 control-label">Have you previously submitted an Express
                            Entry application?</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.previous.submitted_express_entry">
                                <option value="">--Please Select</option>
                                <option value="1">No</option>
                                <option value="2">Yes</option>
                                <option value="3">I am not sure what it is</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-3" v-if="page == 3">
            <div class="border-gray-800 border">
                <div class="bg-gray-800 text-white py-2 px-4">
                    <h6>WHAT IS YOUR OCCUPATION?</h6>
                </div>
                <div class="form-horizontal mt-2 p-4">
                    <div class="form-group">
                        <label for="child-6" class="col-sm-4 control-label">Attach Your Most Recent CV/Resume:
                            <span class="text-red-700">IT IS IMPORTANT TO UPLOAD YOUR RESUME TO RECEIVE
                                IMMIGRATION
                                SOLUTIONS TO MATCH YOUR PROFILE AND EXPERIENCE.</span></label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" @change="handleFileUpload( $event )">
                        </div>
                    </div>
                    <div class="text-center underline">Please indicate what best describes your occupational job
                        title.
                    </div>
                    <template v-for="(occupation,i) in model.occupations">
                        <div class="w-full py-2 px-4 bg-zinc-400 mt-2 flex justify-between" :key="i">
                            <div class="">Previous Job</div>
                            <button v-if="model.occupations.length > 1"
                                @click.prevent="deleteOccupation(i)">Delete</button>
                        </div>
                        <div :class="errors.occupations[i].job_title ? 'form-group has-error' : 'form-group'" :key="i">
                            <label for="child-6" class="col-sm-4 control-label">Job Title</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" v-model="model.occupations[i].job_title">
                                <span v-if="errors.occupations[i].job_title"
                                    class="help-block">@{{ errors . occupations[i] . job_title }}</span>
                            </div>
                        </div>
                        <div class="form-group" :key="i">
                            <label for="child-6" class="col-sm-4 control-label">Duration</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.occupations[i].duration">
                                    <option value="1">6 years or more</option>
                                    <option value="2">5 years or more, but less than 6 years</option>
                                    <option value="3">4 years or more, but less than 5 years</option>
                                    <option value="4">3 year or more, but less than 4 years</option>
                                    <option value="5">2 year or more, but less than 3 years</option>
                                    <option value="6">1 year or more, but less than 2 years</option>
                                    <option value="7">9 months or more, but less than 1 year</option>
                                    <option value="8">6 months or more, but less than 9 months</option>
                                    <option value="9">3 months or more, but less than 6 months</option>
                                    <option value="10">Less than 3 months</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" :key="i">
                            <label for="child-6" class="col-sm-4 control-label">Location</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.occupations[i].location">
                                    <option value="1">Outside Canada</option>
                                    <option value="2">In Canada</option>
                                    <option value="3">In USA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" :key="i">
                            <label for="child-6" class="col-sm-4 control-label">Are you PRESENTLY WORKING in this
                                job?</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.occupations[i].currently_working" value="1">
                                    Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.occupations[i].currently_working" value="0">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="form-group" :key="i">
                            <label for="child-6" class="col-sm-4 control-label">Is your job qualified for social
                                security (Applicable for Quebec destined applicants only)?</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.occupations[i].qualified_for_social_security"
                                        value="1"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.occupations[i].qualified_for_social_security"
                                        value="0"> No
                                </label>
                            </div>
                        </div>
                        <div class="form-group" :key="i">
                            <label for="child-6" class="col-sm-4 control-label">Type of employment</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text"
                                    v-model="model.occupations[i].type_of_employment">
                            </div>
                        </div>
                    </template>
                    <div class="mt-2 flex justify-center">
                        <button type="button" class="py-2 px-4 bg-green-400" @click="addOccupation()">Add More Work
                            Experience</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-4" v-if="page == 4">
            <div class="border-gray-800 border">
                <div class="bg-gray-800 text-white py-2 px-4">
                    <h6>BUSINESS/FINANCES</h6>
                </div>
                <div class="form-horizontal mt-2 p-4">
                    <div class="form-group">
                        <label for="child-6" class="col-sm-4 control-label">How much is your net worth?</label>
                        <div class="col-sm-8">
                            <select class="form-control w-min" v-model="model.business.net_worth">
                                <option value="1">0 to 9,999</option>
                                <option value="2">10,000 to 24,999</option>
                                <option value="3">25,000 to 49,999</option>
                                <option value="4">50,000 to 99,999</option>
                                <option value="5">100,000 to 299,999</option>
                                <option value="6">300,000 to 499,999</option>
                                <option value="7">500,000 to 799,999</option>
                                <option value="8">800,000 to 999,999</option>
                                <option value="9">1,000,000 to 1,599,999</option>
                                <option value="10">1,600,000+</option>
                                <option value="11">Prefer not to disclose</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" v-if="model.business.net_worth > 5">
                        <label for="child-6" class="col-sm-4 control-label">Do you have experience managing a
                            business?</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" v-model="model.business.has_experience" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" v-model="model.business.has_experience" value="0"> No
                            </label>
                        </div>
                    </div>
                    <template v-if="model.business.has_experience == 1">
                        <div class="form-group">
                            <label for="child-6" class="col-sm-4 control-label">In the past 5 years, how many years of
                                managerial experience do you have?</label>
                            <div class="col-sm-8">
                                <select class="form-control w-min" v-model="model.business.managerial_experience">
                                    <option value="1">1 Year</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="5">5 Years +</option>
                                </select>
                            </div>
                        </div>
                        <div :class="errors.no_of_staff ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">What is the number of full-time staff
                                under your management?</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" v-model="model.business.no_of_staff">
                                <span v-if="errors.no_of_staff"
                                    class="help-block">@{{ errors . no_of_staff }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="child-6" class="col-sm-4 control-label">Do you own this business?</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.business.own_business" value="1"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" v-model="model.business.own_business" value="0"> No
                                </label>
                            </div>
                        </div>
                        <div :class="errors.percent_of_business ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">What is your percentage of ownership in
                                this business?</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control pull-left"
                                    v-model="model.business.percent_of_business">%
                                <span v-if="errors.percent_of_business"
                                    class="help-block">@{{ errors . percent_of_business }}</span>
                            </div>
                        </div>
                        <div :class="errors.annual_sale ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">What is the annual sales of this
                                business?</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control pull-left"
                                    v-model="model.business.annual_sale">CDN$
                                <span v-if="errors.annual_sale"
                                    class="help-block">@{{ errors . annual_sale }}</span>
                            </div>
                        </div>
                        <div :class="errors.annual_income ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">What is the annual net income of this
                                business?</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control pull-left"
                                    v-model="model.business.annual_income">CDN$
                                <span v-if="errors.annual_income"
                                    class="help-block">@{{ errors . annual_income }}</span>
                            </div>
                        </div>
                        <div :class="errors.net_assets ? 'form-group has-error' : 'form-group'">
                            <label for="child-6" class="col-sm-4 control-label">What is the net assets of this
                                business?</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control pull-left"
                                    v-model="model.business.net_assets">CDN$
                                <span v-if="errors.net_assets"
                                    class="help-block">@{{ errors . net_assets }}</span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        <div class="page-5" v-if="page == 5">
            <div class="border-gray-800 border">
                <div class="bg-gray-800 text-white py-2 px-4">
                    <h6>Account Details</h6>
                </div>
                <div class="text-center font-bold my-3 text-blue-900">
                    @{{ account_exists ? 'Enter your account password to submit' : 'Create password' }}</div>
                <div class="form-horizontal mt-2 p-4">
                    <div :class="errors.password ? 'form-group has-error' : 'form-group'">
                        <label for="child-6" class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control w-min" v-model="model.password">
                            <span v-if="errors.password" class="help-block">@{{ errors . password }}</span>
                        </div>
                    </div>
                    <div class="form-group" v-if="!account_exists">
                        <label for="child-6" class="col-sm-4 control-label">Confirm Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control w-min" v-model="model.password_confirmation">
                        </div>
                    </div>
                </div>
                <div class="row flex justify-center my-3">
                    <button class="bg-green-700 py-3 px-4 text-white" @click.prevent="submit()">Submit</button>
                </div>
            </div>
        </div>
        <div class="row flex justify-center mt-3">
            <button class="py-2 px-4 bg-gray-800 mr-3 text-white outline-none rounded" v-on:click.prevent="prev()"
                :disabled="page == 1">Prev</button>
            <button class="py-2 px-4 bg-gray-800 text-white outline-none rounded" v-on:click.prevent="next()"
                v-if="page < 5">Next</button>
        </div>
    </form>
    @push('scripts-top')
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
        <link rel="stylesheet" type="text/css"
            href="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.8/jquery.jgrowl.min.js"></script>
    @endpush
    @push('scripts')
        <script>
            Vue.use(vueNotifications)
            var app = new Vue({
                el: '#skilled-worker-form',
                data() {
                    return {
                        show_success: false,
                        loading: false,
                        page: 1,
                        account_exists: 0,
                        model: {
                            salution: 1,
                            firstname: null,
                            lastname: null,
                            dob: null,
                            spouse_dob: null,
                            marital_status: 0,
                            country_id: 0,
                            email: null,
                            resident_country_id: 0,
                            email_confirmation: null,
                            phone: null,
                            fax: null,
                            hear_us: null,
                            aoi: [],
                            further_info: '',
                            children: {
                                no_of_children: 0,
                                child_1_age: null,
                                child_2_age: null,
                                child_3_age: null,
                                child_4_age: null,
                                child_5_age: null,
                                child_6_age: null
                            },
                            education: {
                                highest_level: '',
                                name_of_diploma: null,
                                aos: null,
                                cos: null,
                                toei: '',
                                completed_post_sec: null,
                                name_of_bachelor_degree: null,
                                post_sec_period: 1
                            },
                            language: {
                                language_test: '',
                                done_tef: '',
                                general_french: {
                                    speak: '',
                                    read: '',
                                    write: '',
                                    listen: ''
                                },
                                french_tef: {
                                    speak: null,
                                    read: null,
                                    write: null,
                                    listen: null
                                },
                                general: {
                                    speak: '',
                                    read: '',
                                    write: '',
                                    listen: ''
                                },
                                celpip: {
                                    speak: '',
                                    read: '',
                                    write: '',
                                    listen: ''
                                },
                                ielts: {
                                    speak: null,
                                    read: null,
                                    write: null,
                                    listen: null
                                }
                            },
                            work: {
                                been_temp_foreign_worker: null,
                                years_as_full_time: null,
                                employed_in_canada: null,
                                when_left_job: null,
                                arranged: null,
                                noc: 1,
                                has_qualification_certificate: null,
                                has_nomination_certificate: null
                            },
                            family: {
                                has_blood_relative: 0,
                                relationship: '',
                                relative_wish_to_sponsor: null,
                                full_time_student: null,
                                dependant_financial: null,
                                relative_age: null,
                                relative_employment_status: 1,
                                people_relative_responsible: 0,
                                relative_annual_income: null
                            },
                            previous: {
                                visited_canada: '',
                                applied_for_immigration: '',
                                preferred_destination: '',
                                submitted_express_entry: ''
                            },
                            resume: null,
                            occupations: [{
                                job_title: null,
                                duration: 1,
                                location: 1,
                                currently_working: 1,
                                qualified_for_social_security: 1,
                                type_of_employment: null
                            }],
                            business: {
                                net_worth: 1,
                                has_experience: 0,
                                managerial_experience: 1,
                                no_of_staff: null,
                                own_business: null,
                                percent_of_business: null,
                                annual_sale: null,
                                annual_income: null,
                                net_assets: null
                            },
                            password: null,
                            password_confirmation: null
                        },
                        errors: {
                            firstname: null,
                            lastname: null,
                            dob: null,
                            spouse_dob: null,
                            marital_status: null,
                            country_id: null,
                            email: null,
                            resident_country_id: null,
                            hear_us: null,
                            no_of_children: null,
                            child_1_age: null,
                            child_2_age: null,
                            child_3_age: null,
                            child_4_age: null,
                            child_5_age: null,
                            child_6_age: null,
                            highest_level: null,
                            name_of_diploma: null,
                            aos: null,
                            cos: null,
                            toei: null,
                            completed_post_sec: null,
                            name_of_bachelor_degree: null,
                            language_test: null,
                            general_french_speak: null,
                            general_french_read: null,
                            general_french_write: null,
                            general_french_listen: null,
                            french_tef_speak: null,
                            french_tef_read: null,
                            french_tef_write: null,
                            french_tef_listen: null,
                            general_speak: null,
                            general_read: null,
                            general_write: null,
                            general_listen: null,
                            celpip_speak: null,
                            celpip_read: null,
                            celpip_write: null,
                            celpip_listen: null,
                            ielts_speak: null,
                            ielts_read: null,
                            ielts_write: null,
                            ielts_listen: null,
                            been_temp_foreign_worker: null,
                            years_as_full_time: null,
                            employed_in_canada: null,
                            when_left_job: null,
                            arranged: null,
                            has_qualification_certificate: null,
                            has_nomination_certificate: null,
                            has_blood_relative: null,
                            relationship: null,
                            relative_wish_to_sponsor: null,
                            full_time_student: null,
                            relative_age: null,
                            relative_annual_income: null,
                            dependant_financial: null,
                            occupations: [{
                                job_title: null
                            }],
                            no_of_staff: null,
                            own_business: null,
                            percent_of_business: null,
                            annual_sale: null,
                            annual_income: null,
                            net_assets: null,
                            password: null
                        }
                    }
                },
                mounted() {},
                computed: {},
                methods: {
                    handleFileUpload(event) {
                        this.model.resume = event.target.files[0];
                    },
                    addOccupation() {
                        console.log(this.model)
                        this.model.occupations.push({
                            job_title: null,
                            duration: 1,
                            location: 1,
                            currently_working: 1,
                            qualified_for_social_security: 1,
                            type_of_employment: null
                        })
                        this.errors.occupations.push({
                            job_title: null
                        })
                    },
                    deleteOccupation(index) {
                        this.model.occupations.splice(index, 1)
                        this.errors.occupations.splice(index, 1)
                    },
                    submit() {
                        this.loading = true
                        var fD = new FormData();
                        Object.keys(this.model).forEach((key) => {
                            if (key != 'resume') {
                                if (typeof this.model[key] == 'object') {
                                    fD.append(key, JSON.stringify(this.model[key]))
                                } else {
                                    fD.append(key, this.model[key])
                                }
                            }
                        });
                        fD.append('resume', this.model.resume)
                        axios.post('{{ route('skilled-worker-form-submit') }}', fD).then((res) => {
                            if (res.data.message == 'success') {
                                window.location.href = '{{ route('skilled-worker-thank') }}'
                            }
                        }).catch((error) => {
                            if (error.response.status == 422) {
                                this.errors.password = error.response.data.errors.password[0]
                            }
                        }).finally(() => {
                            this.loading = false
                        })
                    },
                    prev() {
                        this.page = this.page - 1
                        if (this.page == 1) {
                            this.show_success = true
                        }
                    },
                    next() {
                        if (this.page == 1) {
                            var route = '{{ route('skilled-worker-form-validation-1') }}'
                            var data = this.model
                        }
                        if (this.page == 2) {
                            var route = '{{ route('skilled-worker-form-validation-2') }}'
                            var data = {
                                no_of_children: this.model.children.no_of_children,
                                child_1_age: this.model.children.child_1_age,
                                child_2_age: this.model.children.child_2_age,
                                child_3_age: this.model.children.child_3_age,
                                child_4_age: this.model.children.child_4_age,
                                child_5_age: this.model.children.child_5_age,
                                child_6_age: this.model.children.child_6_age,
                                highest_level: this.model.education.highest_level,
                                name_of_diploma: this.model.education.name_of_diploma,
                                aos: this.model.education.aos,
                                cos: this.model.education.cos,
                                toei: this.model.education.toei,
                                completed_post_sec: this.model.education.completed_post_sec,
                                name_of_bachelor_degree: this.model.education.name_of_bachelor_degree,
                                language_test: this.model.language.language_test,
                                done_tef: this.model.language.done_tef,
                                general_french_speak: this.model.language.general_french.speak,
                                general_french_read: this.model.language.general_french.read,
                                general_french_write: this.model.language.general_french.write,
                                general_french_listen: this.model.language.general_french.listen,
                                french_tef_speak: this.model.language.french_tef.speak,
                                french_tef_read: this.model.language.french_tef.read,
                                french_tef_write: this.model.language.french_tef.write,
                                french_tef_listen: this.model.language.french_tef.listen,
                                general_speak: this.model.language.general.speak,
                                general_read: this.model.language.general.read,
                                general_write: this.model.language.general.write,
                                general_listen: this.model.language.general.listen,
                                celpip_speak: this.model.language.celpip.speak,
                                celpip_read: this.model.language.celpip.read,
                                celpip_write: this.model.language.celpip.write,
                                celpip_listen: this.model.language.celpip.listen,
                                ielts_speak: this.model.language.ielts.speak,
                                ielts_read: this.model.language.ielts.read,
                                ielts_write: this.model.language.ielts.write,
                                ielts_listen: this.model.language.ielts.listen,
                                been_temp_foreign_worker: this.model.work.been_temp_foreign_worker,
                                years_as_full_time: this.model.work.years_as_full_time,
                                employed_in_canada: this.model.work.employed_in_canada,
                                when_left_job: this.model.work.when_left_job,
                                arranged: this.model.work.arranged,
                                has_qualification_certificate: this.model.work.has_qualification_certificate,
                                has_nomination_certificate: this.model.work.has_nomination_certificate,
                                has_blood_relative: this.model.family.has_blood_relative,
                                relationship: this.model.family.relationship,
                                relative_wish_to_sponsor: this.model.family.relative_wish_to_sponsor,
                                full_time_student: this.model.family.full_time_student,
                                relative_age: this.model.family.relative_age,
                                relative_annual_income: this.model.family.relative_annual_income,
                                dependant_financial: this.model.family.dependant_financial
                            }
                        }
                        if (this.page == 3) {
                            var route = '{{ route('skilled-worker-form-validation-3') }}'
                            var data = {
                                occupations: this.model.occupations
                            }
                        }
                        if (this.page == 4) {
                            var route = '{{ route('skilled-worker-form-validation-4') }}'
                            var data = {
                                net_worth: this.model.business.net_worth,
                                has_experience: this.model.business.has_experience,
                                managerial_experience: this.model.business.managerial_experience,
                                no_of_staff: this.model.business.no_of_staff,
                                own_business: this.model.business.own_business,
                                percent_of_business: this.model.business.percent_of_business,
                                annual_sale: this.model.business.annual_sale,
                                annual_income: this.model.business.annual_income,
                                net_assets: this.model.business.net_assets
                            }
                        }
                        // console.log(this.model)
                        this.loading = true
                        axios.post(route, data).then((res) => {
                            if (res.data.message == 'success') {
                                if (this.page == 1) {
                                    this.account_exists = res.data.account_exists
                                }
                                this.page = this.page + 1
                                if (this.page == 2) {
                                    Vue.nextTick(() => {
                                        this.$refs.name_of_diploma.focus()
                                    })
                                }
                            }
                        }).catch((error) => {
                            if (error.response.status == 422) {
                                Object.keys(this.errors).forEach((k) => {
                                    if (k != 'occupations') {
                                        this.errors[k] = null
                                    } else {
                                        this.errors.occupations.forEach((obj, i) => {
                                            this.errors.occupations[i].job_title = null
                                        })
                                    }
                                })
                                Object.keys(error.response.data.errors).forEach((key) => {
                                    if (key.indexOf('occupations') == -1) {
                                        this.errors[key] = error.response.data.errors[key][0]
                                    } else {
                                        var start = key.indexOf('.')
                                        var end = key.indexOf('.', (start + 1))
                                        this.errors.occupations[parseInt(key.substr((start + 1), (end -
                                            start - 1)))].job_title = error.response.data.errors[
                                            key][0]
                                    }
                                })
                                if (this.page == 1) {
                                    Vue.nextTick(() => {
                                        this.$refs.firstname.focus()
                                    })
                                }
                                if (this.page == 2) {
                                    Vue.nextTick(() => {
                                        this.$refs.name_of_diploma.focus()
                                    })
                                }
                                $.jGrowl(
                                    "There are errors in form. Please correct them before moving forward", {
                                        position: 'bottom-left',
                                        theme: 'bg-red-600 text-white text-2xl',
                                    });
                            }
                            if (error.response.status == 419) {
                                $.jGrowl(
                                    "Session Expired. Please Refresh this page", {
                                        position: 'bottom-left',
                                        theme: 'bg-red-600 text-white text-2xl',
                                    });
                            }
                        }).finally(() => {
                            this.loading = false
                        })
                    }
                }
            })
        </script>
    @endpush
</div>
