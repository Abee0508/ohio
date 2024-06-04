
<?php include 'includes/head.php'; ?>

<?php include 'includes/header.php'; ?>

<section class="inner-banner">
    <div class="inner-img">
        <img src="images/inner-banner.png" class="d-block w-100" alt="...">
    </div>
    <h3 class="inner-heading">Make Your Gift</h3>
</section>

<div class="container rest-of-site">
    
    <div class="row ofbf-form-container">
        <div class="col d-none d-md-block col-md-1 col-lg-1">
        </div>
        <div class="col col-sm-12 col-md-10 col-lg-10">
            <div class="container content-container">
                <div class="row">
                    <div class="at-above-post-page addthis_tool" data-url="https://ofbf.org/foundation/donate/"></div>
                    <p>
                        <style>
                            .donate-contact {
                                text-decoration: underline;
                                color: #005596;
                                font-weight: 600;
                            }

                            #donate-logo {
                                width: 200px;
                                height: 198;
                                will-change: transform;
                                image-rendering: -webkit-optimize-contrast;
                            }
                        </style>
                    </p>
                    <section id="ofbf-donate-altai-portal" class="clearfix">
                        <div class="row text-center justify-content-center"><img id="donate-logo" class="wp-image-104922 aligncenter"
                                src="https://ofbf.org/app/uploads/2023/04/OFBF_logo_full-color.png"
                                alt="Ohio Farm Bureau Foundation Logo"></div>
                        <div class="row ">
                            <div class="col-xs-12">
                                <p class="mt-4 mb-0 text-center" style="font-style: italic; font-size: 18px; color: #005596;">
                                    Inspiring innovation and cultivating investment in Ohio’s Farm and Food community.
                                </p>
                                <p>
                                </p>
                            </div>
                        </div>
                    </section>
                    <div class="at-below-post-page addthis_tool" data-url="https://ofbf.org/foundation/donate/"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h2 class="text-center">Make a Gift</h2>
                </div>
            </div>

            <form class="mb-3 ofbf-form needs-validation" id="id-" enctype="multipart/form-data" method="POST"
                novalidate="">
                <div class="overlay justify-content-center align-items-center ofbf-spinner d-none"
                    style="display: none; overflow: hidden;">
                    <div class="">
                        <div class="spinner-border text-primary" role="status"
                            style="width: 3rem; height: 3rem; z-index: 20;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="form-row row">
                    <input type="hidden" name="MemberId" value="">
                    <input type="hidden" name="DynamicsRecordId" value="">
                    <input type="hidden" name="PortalId" value="">
                    <input type="hidden" name="endpoint" value="Sales/CreateDonation">
                    <input type="hidden" name="method" value="POST">
                    <input type="hidden" name="acf_id" value="153591">
                    <input type="hidden" name="post_id" value="56969">
                    <input type="hidden" id="TransactionKey" name="TransactionKey"
                        value="915e3124-1fd5-49a4-8952-e8b49ddd1c44">
                    <div id="" class="div-  mb-3 form-group content col-sm-12 col-md-12">
                        <h3 class="text-center">Gift Information</h3>
                    </div><input type="hidden" id="Fund" name="Fund" value="">
                    <div class="mb-3 form-group col-sm-12 col-md-12 div-Donation Amounts div-Donation Amounts">
                        <fieldset id="Amount">
                            <div class="container">
                                <div class="row">
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="Amount">* Donation Amounts</label>
                                    </div>
                                    <div class="mb-3 col">
                                        <input class="form-check-input" required="required" type="radio"
                                            id="radio-id-25" name="Amount" value="25"> $25
                                    </div>
                                    <div class="mb-3 col">
                                        <input class="form-check-input" required="required" type="radio"
                                            id="radio-id-50" name="Amount" value="50"> $50
                                    </div>
                                    <div class="mb-3 col">
                                        <input class="form-check-input" required="required" type="radio"
                                            id="radio-id-100" name="Amount" value="100"> $100
                                    </div>
                                    <div class="mb-3 col">
                                        <input class="form-check-input" required="required" type="radio" id="radio-id-0"
                                            name="Amount" value="0"> Other
                                    </div>
                                    <div class="mb-3 col">
                                        <input class="" placeholder="$0.00" type="text" id="DonationAmountCustom"
                                            name="DonationAmountCustom" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mb-3 form-group col-sm-12 col-md-12 div-donation-frequency">
                        <fieldset id="DonationFrequency">
                            <div class="container">
                                <div class="row">
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="donation-frequency">* Donation Frequency</label>
                                    </div>
                                    <div class="mb-3 col">
                                        <input class="form-check-input" required="required" type="radio"
                                            id="radio-id-one-time" name="donation-frequency" value="0"> One Time
                                    </div>
                                    <div class="mb-3 col">
                                        <input class="form-check-input" required="required" type="radio"
                                            id="radio-id-recurring" name="donation-frequency" value="1"> Recurring
                                    </div>
                                    <div class="mb-3 col">
                                        <div id="div-recurrence" class="mb-3 col" style="display: none;">
                                            <select class="form-select form-select-lg" name="Recurrence">
                                                <option value="604950000">Monthly</option>
                                                <option value="604950001">Quarterly</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </fieldset>
                    </div>
                  
                    <div class="mb-3 form-group col-sm-12 col-md-12 div-Donation Funds div-Donation Funds">
                        <div class="container">
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">* Designate my gift to</label>
                                </div>
                                <div class="mb-3 col-md-9">
                                    <select required="required" id="donation-funds" class="form-select form-select-lg">
                                        <option></option>
                                        <option value="foundation-general-fund-greatest-need">Foundation General Fund
                                            (greatest need)</option>
                                        <option value="county-farm-bureau-funds">County Farm Bureau Funds</option>
                                        <option value="fisher-fund-for-lifelong-learning">Fisher Fund for Lifelong
                                            Learning</option>
                                        <option value="exploreag">ExploreAg</option>
                                        <option value="yvonne-lesicko-memorial-fund">Yvonne Lesicko Memorial Fund
                                        </option>
                                        <option value="scholarships">Scholarships</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">This field is required</div>
                                </div>
                            </div>
                            <div id="foundation-general-fund-greatest-need"
                                class="custom_multiple_selects row hidethis formerly-hidden" style="display: none;">
                                <div class="mb-3 col-md-3"><label class="form-label">Foundation General Fund (greatest
                                        need)</label></div>
                                <div class="mb-3 col-md-9"><select
                                        class="foundation-general-fund-greatest-need child_select form-select form-select-lg"
                                        name="">
                                        <option value="ad48c9c1-e926-ec11-b6e5-00224822fa08">Foundation General Fund
                                            (greatest need)</option>
                                    </select></div>
                            </div>
                            <div id="county-farm-bureau-funds" class="custom_multiple_selects row  formerly-hidden"
                                style="display: none;">
                                <div class="mb-3 col-md-3"><label class="form-label">County Farm Bureau Funds</label>
                                </div>
                                <div class="mb-3 col-md-9"><select
                                        class="county-farm-bureau-funds child_select form-select form-select-lg"
                                        name="">
                                        <option value="b748c9c1-e926-ec11-b6e5-00224822fa08">Adams County Farm Bureau
                                            Fund</option>
                                        <option value="bb48c9c1-e926-ec11-b6e5-00224822fa08">Allen County Farm Bureau
                                            Fund</option>
                                        <option value="bf48c9c1-e926-ec11-b6e5-00224822fa08">Ashland County Farm Bureau
                                            Fund</option>
                                        <option value="c348c9c1-e926-ec11-b6e5-00224822fa08">Ashtabula County Farm
                                            Bureau Fund</option>
                                        <option value="c748c9c1-e926-ec11-b6e5-00224822fa08">Athens-Meigs County Farm
                                            Bureau Fund</option>
                                        <option value="cb48c9c1-e926-ec11-b6e5-00224822fa08">Auglaize County Farm Bureau
                                            Fund</option>
                                        <option value="cf48c9c1-e926-ec11-b6e5-00224822fa08">Belmont County Farm Bureau
                                            Fund</option>
                                        <option value="d348c9c1-e926-ec11-b6e5-00224822fa08">Brown County Farm Bureau
                                            Fund</option>
                                        <option value="d748c9c1-e926-ec11-b6e5-00224822fa08">Butler County Farm Bureau
                                            Fund</option>
                                        <option value="db48c9c1-e926-ec11-b6e5-00224822fa08">Carroll County Farm Bureau
                                            Fund</option>
                                        <option value="df48c9c1-e926-ec11-b6e5-00224822fa08">Champaign County Farm
                                            Bureau Fund</option>
                                        <option value="e348c9c1-e926-ec11-b6e5-00224822fa08">Clark County Farm Bureau
                                            Fund</option>
                                        <option value="e748c9c1-e926-ec11-b6e5-00224822fa08">Clermont County Farm Bureau
                                            Fund</option>
                                        <option value="eb48c9c1-e926-ec11-b6e5-00224822fa08">Clinton County Farm Bureau
                                            Fund</option>
                                        <option value="ef48c9c1-e926-ec11-b6e5-00224822fa08">Columbiana County Farm
                                            Bureau Fund</option>
                                        <option value="f348c9c1-e926-ec11-b6e5-00224822fa08">Coshocton County Farm
                                            Bureau Fund</option>
                                        <option value="f748c9c1-e926-ec11-b6e5-00224822fa08">Crawford County Farm Bureau
                                            Fund</option>
                                        <option value="fd48c9c1-e926-ec11-b6e5-00224822fa08">Cuyahoga County Farm Bureau
                                            Fund</option>
                                        <option value="0149c9c1-e926-ec11-b6e5-00224822fa08">Darke County Farm Bureau
                                            Fund</option>
                                        <option value="0549c9c1-e926-ec11-b6e5-00224822fa08">Defiance County Farm Bureau
                                            Fund</option>
                                        <option value="0949c9c1-e926-ec11-b6e5-00224822fa08">Delaware County Farm Bureau
                                            Fund</option>
                                        <option value="0d49c9c1-e926-ec11-b6e5-00224822fa08">Erie County Farm Bureau
                                            Fund</option>
                                        <option value="1149c9c1-e926-ec11-b6e5-00224822fa08">Fairfield County Farm
                                            Bureau Fund</option>
                                        <option value="1549c9c1-e926-ec11-b6e5-00224822fa08">Fayette County Farm Bureau
                                            Fund</option>
                                        <option value="1949c9c1-e926-ec11-b6e5-00224822fa08">Franklin County Farm Bureau
                                            Fund</option>
                                        <option value="1d49c9c1-e926-ec11-b6e5-00224822fa08">Fulton County Farm Bureau
                                            Fund</option>
                                        <option value="2249c9c1-e926-ec11-b6e5-00224822fa08">Gallia County Farm Bureau
                                            Fund</option>
                                        <option value="2649c9c1-e926-ec11-b6e5-00224822fa08">Geauga County Farm Bureau
                                            Fund</option>
                                        <option value="2a49c9c1-e926-ec11-b6e5-00224822fa08">Greene County Farm Bureau
                                            Fund</option>
                                        <option value="2e49c9c1-e926-ec11-b6e5-00224822fa08">Guernsey County Farm Bureau
                                            Fund</option>
                                        <option value="3249c9c1-e926-ec11-b6e5-00224822fa08">Hamilton County Farm Bureau
                                            Fund</option>
                                        <option value="3649c9c1-e926-ec11-b6e5-00224822fa08">Hancock County Farm Bureau
                                            Fund</option>
                                        <option value="3a49c9c1-e926-ec11-b6e5-00224822fa08">Hardin County Farm Bureau
                                            Fund</option>
                                        <option value="3e49c9c1-e926-ec11-b6e5-00224822fa08">Harrison County Farm Bureau
                                            Fund</option>
                                        <option value="4249c9c1-e926-ec11-b6e5-00224822fa08">Henry County Farm Bureau
                                            Fund</option>
                                        <option value="4649c9c1-e926-ec11-b6e5-00224822fa08">Highland County Farm Bureau
                                            Fund</option>
                                        <option value="4a49c9c1-e926-ec11-b6e5-00224822fa08">Hocking County Farm Bureau
                                            Fund</option>
                                        <option value="4e49c9c1-e926-ec11-b6e5-00224822fa08">Holmes County Farm Bureau
                                            Fund</option>
                                        <option value="5249c9c1-e926-ec11-b6e5-00224822fa08">Huron County Farm Bureau
                                            Fund</option>
                                        <option value="5649c9c1-e926-ec11-b6e5-00224822fa08">Jackson-Vinton County Farm
                                            Bureau Fund</option>
                                        <option value="5a49c9c1-e926-ec11-b6e5-00224822fa08">Jefferson County Farm
                                            Bureau Fund</option>
                                        <option value="5e49c9c1-e926-ec11-b6e5-00224822fa08">Knox County Farm Bureau
                                            Fund</option>
                                        <option value="6249c9c1-e926-ec11-b6e5-00224822fa08">Lake County Farm Bureau
                                            Fund</option>
                                        <option value="6649c9c1-e926-ec11-b6e5-00224822fa08">Lawrence County Farm Bureau
                                            Fund</option>
                                        <option value="6a49c9c1-e926-ec11-b6e5-00224822fa08">Licking County Farm Bureau
                                            Fund</option>
                                        <option value="6e49c9c1-e926-ec11-b6e5-00224822fa08">Logan County Farm Bureau
                                            Fund</option>
                                        <option value="7249c9c1-e926-ec11-b6e5-00224822fa08">Lorain County Farm Bureau
                                            Fund</option>
                                        <option value="7649c9c1-e926-ec11-b6e5-00224822fa08">Lucas County Farm Bureau
                                            Fund</option>
                                        <option value="7a49c9c1-e926-ec11-b6e5-00224822fa08">Madison County Farm Bureau
                                            Fund</option>
                                        <option value="7e49c9c1-e926-ec11-b6e5-00224822fa08">Mahoning County Farm Bureau
                                            Fund</option>
                                        <option value="8249c9c1-e926-ec11-b6e5-00224822fa08">Marion County Farm Bureau
                                            Fund</option>
                                        <option value="8649c9c1-e926-ec11-b6e5-00224822fa08">Medina County Farm Bureau
                                            Fund</option>
                                        <option value="8a49c9c1-e926-ec11-b6e5-00224822fa08">Mercer County Farm Bureau
                                            Fund</option>
                                        <option value="8e49c9c1-e926-ec11-b6e5-00224822fa08">Miami County Farm Bureau
                                            Fund</option>
                                        <option value="9249c9c1-e926-ec11-b6e5-00224822fa08">Monroe County Farm Bureau
                                            Fund</option>
                                        <option value="9649c9c1-e926-ec11-b6e5-00224822fa08">Montgomery County Farm
                                            Bureau Fund</option>
                                        <option value="9a49c9c1-e926-ec11-b6e5-00224822fa08">Morgan County Farm Bureau
                                            Fund</option>
                                        <option value="9e49c9c1-e926-ec11-b6e5-00224822fa08">Morrow County Farm Bureau
                                            Fund</option>
                                        <option value="a249c9c1-e926-ec11-b6e5-00224822fa08">Muskingum County Farm
                                            Bureau Fund</option>
                                        <option value="a649c9c1-e926-ec11-b6e5-00224822fa08">Noble County Farm Bureau
                                            Fund</option>
                                        <option value="aa49c9c1-e926-ec11-b6e5-00224822fa08">Ottawa County Farm Bureau
                                            Fund</option>
                                        <option value="ae49c9c1-e926-ec11-b6e5-00224822fa08">Paulding County Farm Bureau
                                            Fund</option>
                                        <option value="b249c9c1-e926-ec11-b6e5-00224822fa08">Perry County Farm Bureau
                                            Fund</option>
                                        <option value="b649c9c1-e926-ec11-b6e5-00224822fa08">Pickaway County Farm Bureau
                                            Fund</option>
                                        <option value="ba49c9c1-e926-ec11-b6e5-00224822fa08">Pike County Farm Bureau
                                            Fund</option>
                                        <option value="be49c9c1-e926-ec11-b6e5-00224822fa08">Portage County Farm Bureau
                                            Fund</option>
                                        <option value="c249c9c1-e926-ec11-b6e5-00224822fa08">Preble County Farm Bureau
                                            Fund</option>
                                        <option value="c649c9c1-e926-ec11-b6e5-00224822fa08">Putnam County Farm Bureau
                                            Fund</option>
                                        <option value="ca49c9c1-e926-ec11-b6e5-00224822fa08">Richland County Farm Bureau
                                            Fund</option>
                                        <option value="ce49c9c1-e926-ec11-b6e5-00224822fa08">Ross County Farm Bureau
                                            Fund</option>
                                        <option value="d249c9c1-e926-ec11-b6e5-00224822fa08">Sandusky County Farm Bureau
                                            Fund</option>
                                        <option value="d649c9c1-e926-ec11-b6e5-00224822fa08">Scioto County Farm Bureau
                                            Fund</option>
                                        <option value="da49c9c1-e926-ec11-b6e5-00224822fa08">Seneca County Farm Bureau
                                            Fund</option>
                                        <option value="de49c9c1-e926-ec11-b6e5-00224822fa08">Shelby County Farm Bureau
                                            Fund</option>
                                        <option value="e249c9c1-e926-ec11-b6e5-00224822fa08">Stark County Farm Bureau
                                            Fund</option>
                                        <option value="e649c9c1-e926-ec11-b6e5-00224822fa08">Summit County Farm Bureau
                                            Fund</option>
                                        <option value="ea49c9c1-e926-ec11-b6e5-00224822fa08">Trumbull County Farm Bureau
                                            Fund</option>
                                        <option value="ee49c9c1-e926-ec11-b6e5-00224822fa08">Tuscarawas County Farm
                                            Bureau Fund</option>
                                        <option value="f249c9c1-e926-ec11-b6e5-00224822fa08">Union County Farm Bureau
                                            Fund</option>
                                        <option value="f649c9c1-e926-ec11-b6e5-00224822fa08">Van Wert County Farm Bureau
                                            Fund</option>
                                        <option value="fa49c9c1-e926-ec11-b6e5-00224822fa08">Warren County Farm Bureau
                                            Fund</option>
                                        <option value="fe49c9c1-e926-ec11-b6e5-00224822fa08">Washington County Farm
                                            Bureau Fund</option>
                                        <option value="024ac9c1-e926-ec11-b6e5-00224822fa08">Wayne County Farm Bureau
                                            Fund</option>
                                        <option value="064ac9c1-e926-ec11-b6e5-00224822fa08">Williams County Farm Bureau
                                            Fund</option>
                                        <option value="0a4ac9c1-e926-ec11-b6e5-00224822fa08">Wood County Farm Bureau
                                            Fund</option>
                                        <option value="0e4ac9c1-e926-ec11-b6e5-00224822fa08">Wyandot County Farm Bureau
                                            Fund</option>
                                    </select></div>
                            </div>
                            <div id="fisher-fund-for-lifelong-learning"
                                class="custom_multiple_selects row hidethis formerly-hidden" style="display: none;">
                                <div class="mb-3 col-md-3"><label class="form-label">Fisher Fund for Lifelong
                                        Learning</label></div>
                                <div class="mb-3 col-md-9"><select
                                        class="fisher-fund-for-lifelong-learning child_select form-select form-select-lg"
                                        name="">
                                        <option value="af48c9c1-e926-ec11-b6e5-00224822fa08">Fisher Fund for Lifelong
                                            Learning</option>
                                    </select></div>
                            </div>
                            <div id="exploreag" class="custom_multiple_selects row hidethis formerly-hidden"
                                style="display: none;">
                                <div class="mb-3 col-md-3"><label class="form-label">ExploreAg</label></div>
                                <div class="mb-3 col-md-9"><select
                                        class="exploreag child_select form-select form-select-lg" name="">
                                        <option value="b148c9c1-e926-ec11-b6e5-00224822fa08">ExploreAg</option>
                                    </select></div>
                            </div>
                            <div id="yvonne-lesicko-memorial-fund"
                                class="custom_multiple_selects row hidethis formerly-hidden" style="display: none;">
                                <div class="mb-3 col-md-3"><label class="form-label">Yvonne Lesicko Memorial
                                        Fund</label></div>
                                <div class="mb-3 col-md-9"><select
                                        class="yvonne-lesicko-memorial-fund child_select form-select form-select-lg"
                                        name="">
                                        <option value="ab48c9c1-e926-ec11-b6e5-00224822fa08">Yvonne Lesicko Memorial
                                            Fund</option>
                                    </select></div>
                            </div>
                            <div id="scholarships" class="custom_multiple_selects row  formerly-hidden"
                                style="display: none;">
                                <div class="mb-3 col-md-3"><label class="form-label">Scholarships</label></div>
                                <div class="mb-3 col-md-9"><select
                                        class="scholarships child_select form-select form-select-lg" name="">
                                        <option value="a748c9c1-e926-ec11-b6e5-00224822fa08">Bill &amp; Helen Swank
                                            Scholarship</option>
                                        <option value="9f48c9c1-e926-ec11-b6e5-00224822fa08">Bruce &amp; Carlene
                                            Patterson Agricultural Scholarship</option>
                                        <option value="9d48c9c1-e926-ec11-b6e5-00224822fa08">Charlotte R Schmidlapp
                                            Scholarship</option>
                                        <option value="9b48c9c1-e926-ec11-b6e5-00224822fa08">Cindy Hollingshead
                                            Scholarship</option>
                                        <option value="9948c9c1-e926-ec11-b6e5-00224822fa08">Darwin Bryan Scholarship
                                        </option>
                                        <option value="a548c9c1-e926-ec11-b6e5-00224822fa08">Dr. David A. Benfield
                                            Scholarship</option>
                                        <option value="9548c9c1-e926-ec11-b6e5-00224822fa08">Dr. Jack Judy Scholarship
                                        </option>
                                        <option value="a348c9c1-e926-ec11-b6e5-00224822fa08">Joseph Kelly Memorial
                                            Scholarship</option>
                                        <option value="9748c9c1-e926-ec11-b6e5-00224822fa08">Kenny Walter Scholarship
                                        </option>
                                        <option value="a148c9c1-e926-ec11-b6e5-00224822fa08">Ohio Farm Bureau Scholars
                                            Award</option>
                                        <option value="a948c9c1-e926-ec11-b6e5-00224822fa08">Richard &amp; Carole Cocks
                                            Scholarship</option>
                                    </select></div>
                            </div>
                            <div id="other" class="custom_multiple_selects row  formerly-hidden" style="display: none;">
                                <div class="mb-3 col-md-3"><label class="form-label">Other</label></div>
                                <div class="mb-3 col-md-9"><input class="form-control form-control-lg" type="text"
                                        id="FundOther" name="FundOther"></div>
                            </div>
                            <div id="other" class="custom_multiple_selects row hidethis formerly-hidden">
                                <div class="mb-3 col-md-3"><label class="form-label">Other</label></div>
                                <div class="mb-3 col-md-9"><select class="other child_select form-select form-select-lg"
                                        name="">
                                        <option value="1d31c0b3-5576-ed11-81ab-0022482aa82b">Other</option>
                                    </select></div>
                            </div>
                        </div>
                    </div>
                 
                    <div
                        class="div-GiftOrganization check_and_text mb-3 form-group col-sm-12 col-md-12  div-GiftOrganization">
                        <div class="container">
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">This gift is from my organization</label>
                                </div>
                                <div class="mb-3 col-md-1">
                                    <div class="form-group form-check"><input
                                            class="form-check-input GiftOrganization-check" type="checkbox" id=""
                                            name=""></div>
                                </div>
                                <div class="GiftOrganization-hidden mb-3 col-md-2" style="display: none;">
                                    <label class="form-label">Organization Name</label>
                                </div>
                                <div class="GiftOrganization-hidden mb-3 col-md-2" style="display: none;">
                                    <select class="form-select form-select-lg" id="GiftOrganization-select"
                                        name="GiftFromOrganizationId">
                                        <option value="00000000-0000-0000-0000-000000000000">Other</option>
                                    </select>
                                </div>
                                <div class="GiftOrganization-text mb-3 col col-md-4" style="display: none;">
                                    <input id="GiftOrganization-text" class="form-control form-control-lg" type="text"
                                        name="GiftFromOrganization">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div
                        class="div-GiftAnonymous check_and_text mb-3 form-group col-sm-12 col-md-12  div-GiftAnonymous">
                        <div class="container">
                            <div class="row">
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">This gift is anonymous</label>
                                </div>
                                <div class="mb-3 col-md-1">
                                    <div class="form-group form-check"><input
                                            class="form-check-input GiftAnonymous-check" type="checkbox" id=""
                                            name="GiftAnonymous"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="hm-container mb-3 form-group col-sm-12 col-md-12 div- div-">
                        <div class="container">
                            <div class="row">
                                <div class="mb-3 col col-md-3">
                                    <label class="form-label">This gift is in honor of</label>
                                </div>
                                <div class="mb-3 col-md-1">
                                    <div class="form-group form-check"><input class="form-check-input honor-check"
                                            type="checkbox" id="honor" name="hmcheck[Honor]"></div>
                                </div>
                                <div class="mb-3 col col-md-3">
                                    <label class="form-label">This gift is in memory of</label>
                                </div>
                                <div class="mb-3 col-md-1">
                                    <div class="form-group form-check"><input class="form-check-input memory-check"
                                            type="checkbox" id="memory" name="hmcheck[Memory]"></div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row hmrow" style="display: none;">
                                <div class="mb-3 col col-md-3 text-end">
                                    <label class="form-label">In <span class="hmtext"></span> of</label>
                                </div>
                                <div class="mb-3 col col-md-9">
                                    <input class="form-control form-control-lg" type="text" name="Name">
                                </div>
                            </div>
                            <div class="row hmrow" style="display: none;">
                                <div class="mb-3 col col-md-3 text-end">
                                    <label class="form-label">Notification</label>
                                </div>
                                <div class="mb-3 col col-md-9">
                                    <p>If you would like to notify someone of your gift, please provide their name and
                                        address (gift amount will not be included in notification letter).</p>
                                    <textarea rows="4" style="width: 100%;" name="Notification"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <div id="YourInformation"
                        class="div-YourInformation YourInformation mb-3 form-group content col-sm-12 col-md-12">
                        <h3 class="text-center">Your Information</h3>
                    </div>
                    <div class="div-FirstName mb-3 form-group col-sm-12 col-md-6  div-FirstName">
                        <label class="form-label" for="FirstName">First Name</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="FirstName"
                            name="FirstName" value="">
                    </div>
                    <div class="div-LastName mb-3 form-group col-sm-12 col-md-6  div-LastName">
                        <label class="form-label" for="LastName">Last Name</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="LastName"
                            name="LastName" value="">
                    </div>
                    <div class="div-Phone mb-3 form-group col-sm-12 col-md-6  div-Phone">
                        <label class="form-label" for="Phone">Phone</label>
                        <input data-format="(ddd) ddd-dddd" placeholder=""
                            class="form-control form-control-lg bfh-phone" type="tel" id="Phone" name="Phone" value="">
                    </div>
                    <div class="div-Email mb-3 form-group col-sm-12 col-md-6  div-Email">
                        <label class="form-label" for="Email">Email</label>
                        <input placeholder="" class="form-control form-control-lg " type="email" id="Email" name="Email"
                            value="">
                    </div>
                    <div id="" class="div-  mb-3 form-group content col-sm-12 col-md-12">
                        <h3 class="text-center">Payment Information</h3>
                    </div>
                    <div class="div-PaymentOptions mb-3 form-group col-sm-12 col-md-12  div-PaymentOptions">
                        * <label class="form-label" for="PaymentOptions">How would you like to pay?</label>
                        <select class="form-select form-select-lg" name="PaymentOptions" id="PaymentOptions"
                            required="required">
                            <option></option>
                            <option value="604950000">Credit Card</option>
                        </select>
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <script>jQuery(document).ready(function () { jQuery('.ofbf-form #PaymentOptions').append('<option></option><option value="604950000">Credit Card</option>'); });</script>
                    <div class="div-BankAccountName mb-3 form-group col-sm-12 col-md-6  div-BankAccountName"
                        style="display: none;">
                        * <label class="form-label" for="BankAccountName">Name on Account</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="BankAccountName"
                            name="BankAccountName" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <div class="div-BankAccountType mb-3 form-group col-sm-12 col-md-6  div-BankAccountType"
                        style="display: none;">
                        * <label class="form-label" for="BankAccountType">Bank Account Type</label>
                        <select class="form-select form-select-lg" name="BankAccountType" id="BankAccountType">
                            <option></option>
                            <option value="604950000">Personal Checking</option>
                            <option value="604950001">Personal Savings</option>
                            <option value="604950002">Business Checking</option>
                        </select>
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <script>jQuery(document).ready(function () { jQuery('.ofbf-form #BankAccountType').append('<option></option><option value="604950000">Personal Checking</option><option value="604950001">Personal Savings</option><option value="604950002">Business Checking</option>'); });</script>
                    <div class="div-BankRoutingNumber mb-3 form-group col-sm-12 col-md-6  div-BankRoutingNumber"
                        style="display: none;">
                        * <label class="form-label" for="BankRoutingNumber">Bank Routing Number</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="BankRoutingNumber"
                            name="BankRoutingNumber" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <div class="div-BankAccountNumber mb-3 form-group col-sm-12 col-md-6  div-BankAccountNumber"
                        style="display: none;">
                        * <label class="form-label" for="BankAccountNumber">Bank Account Number</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="BankAccountNumber"
                            name="BankAccountNumber" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <div class="div-CreditCardFirstName mb-3 form-group col-sm-12 col-md-6  div-CreditCardFirstName"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardFirstName">First Name on Card</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="CreditCardFirstName"
                            name="CreditCardFirstName" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <div class="div-CreditCardLastName mb-3 form-group col-sm-12 col-md-6  div-CreditCardLastName"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardLastName">Last Name on Card</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="CreditCardLastName"
                            name="CreditCardLastName" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <div class="div-CreditCardNumber mb-3 form-group col-sm-12 col-md-6  div-CreditCardNumber"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardNumber">Credit Card Number</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="CreditCardNumber"
                            name="CreditCardNumber" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <div class="div-CreditCardCvv mb-3 form-group col-sm-12 col-md-6  div-CreditCardCvv"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardCvv">CVV</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="CreditCardCvv"
                            name="CreditCardCvv" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <div class="div-CreditCardMonth mb-3 form-group col-sm-12 col-md-6  div-CreditCardMonth"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardMonth">Expiration Month</label>
                        <select class="form-select form-select-lg" name="CreditCardMonth" id="CreditCardMonth">
                            <option></option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <script>jQuery(document).ready(function () { jQuery('.ofbf-form #CreditCardMonth').append('<option></option><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option>'); });</script>
                    <div class="div-CreditCardYear mb-3 form-group col-sm-12 col-md-6  div-CreditCardYear"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardYear">Expiration Year</label>
                        <select class="form-select form-select-lg" name="CreditCardYear" id="CreditCardYear">
                            <option></option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2021">2021</option>
                        </select>
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <script>jQuery(document).ready(function () { jQuery('.ofbf-form #CreditCardYear').append('<option></option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2021">2021</option>'); });</script>
                    <div class="div-CreditCardAddress mb-3 form-group col-sm-12 col-md-6  div-CreditCardAddress"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardAddress">Billing Address</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="CreditCardAddress"
                            name="CreditCardAddress" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <div class="div-CreditCardCity mb-3 form-group col-sm-12 col-md-6  div-CreditCardCity"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardCity">Billing City</label>
                        <input placeholder="" class="form-control form-control-lg " type="text" id="CreditCardCity"
                            name="CreditCardCity" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <div class="div-CreditCardState mb-3 form-group col-sm-12 col-md-6  div-CreditCardState"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardState">Billing State</label>
                        <select class="form-select form-select-lg" name="CreditCardState" id="CreditCardState">
                            <option></option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PW">Palau</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VI">Virgin Islands</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                    <script>jQuery(document).ready(function () { jQuery('.ofbf-form #CreditCardState').append('<option></option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PW">Palau</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>'); });</script>
                    <div class="div-CreditCardZip mb-3 form-group col-sm-12 col-md-6  div-CreditCardZip"
                        style="display: none;">
                        * <label class="form-label" for="CreditCardZip">Zip</label>
                        <input pattern="\d{5}-?(\d{4})?" placeholder="" class="form-control form-control-lg "
                            type="text" id="CreditCardZip" name="CreditCardZip" value="">
                        <div class="invalid-feedback">This field is required</div>
                    </div>
                </div>
                <div class="mb-3 alert alert-success" role="alert" style="display: none;"></div>
                <div class="mb-3 alert alert-danger" role="alert" style="display: none;"></div>
                <div class="mb-3 col-md-auto d-flex justify-content-center">
                    <button id="form-submit" type="submit" class="btn btn-primary pull-right ">Donate</button>
                    <div style="height:0px;clear:both;"></div>
                </div>
            </form>
            <script>


            </script>
            <div class="container">
                <div class="row my-3">
                    <div style="text-align:center">
                        <p>For questions regarding your gift, please contact the<br>Ohio Farm Bureau Foundation
                            at&nbsp;<a class="donate-contact" title="614-246-8228" href="tel:614-246-8228"
                                data-feathr-click-track="true"
                                data-feathr-link-aids="[&quot;5f4d6b09ad07d4ae5f84ecb6&quot;],5f4d6b09ad07d4ae5f84ecb6"
                                target="_blank">614-246-8228</a>&nbsp;or&nbsp;<a class="donate-contact"
                                title="foundation@ofbf.org" href="mailto:foundation@ofbf.org"
                                data-feathr-click-track="true"
                                data-feathr-link-aids="[&quot;5f4d6b09ad07d4ae5f84ecb6&quot;],5f4d6b09ad07d4ae5f84ecb6"
                                target="_blank">foundation@ofbf.org</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-none d-md-block col-md-1 col-lg-1">
        </div>
    </div>
</div>




<?php include 'includes/footer.php'; ?>

<?php include 'includes/scripts.php'; ?>