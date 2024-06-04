<?php include 'includes/head.php'; ?>

<?php include 'includes/header.php'; ?>

<section class="inner-banner">
    <div class="inner-img">
        <img src="images/inner-banner.png" class="d-block w-100" alt="...">
    </div>
    <h3 class="inner-heading">scholorships</h3>
</section>
<section class="membership-strip">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="member-content">
                    <h3 class="text-center">Ohio Farm Bureau Foundation Scholarships</h3>
                    <p class="text-center  pt-4">The Ohio Farm Bureau Foundation annually awards scholarships to
                        students planning to pursue
                        careers in agriculture and to adults seeking continuing education in agriculture-related
                        studies. To support the future of agriculture throughout Ohio, each county has a scholarship
                        fund to allot to its local students. Other scholarships focus on specific issues such as women’s
                        leadership in agriculture, livestock and crop sciences at the Agricultural Technical Institute,
                        sheep production and management, and more. </p>

                </div>
            </div>
        </div>
    </div>
</section>


<div class="site-main container">

    <div class="row my-5">
        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 mt0 mb16">
            <div class="card card--with-padding mb16 post-search">
                <h4 class="d-none d-sm-block mt0">Filter options</h4>
                <button type="button" class="btn d-block d-sm-none btn-primary btn-block mb0 modal-button-show"
                    data-toggle="modal" data-target="#scholarship-filter-modal">Show scholarship filters</button>
                <form class="d-none d-sm-block method=" get"="">
                    <div>
                        <div>
                            <h6 class="my16">Gender</h6>
                            <label for="scholarship-male" title="Male" class="btn btn-ofbf-default btn-block text-left">
                                <input type="checkbox" name="ofbf-scholarship-gender-types[]" id="scholarship-male"
                                    value="male">
                                Male </label>
                            <label for="scholarship-female" title="Female"
                                class="btn btn-ofbf-default btn-block text-left">
                                <input type="checkbox" name="ofbf-scholarship-gender-types[]" id="scholarship-female"
                                    value="female">
                                Female </label>
                        </div>
                        <div>
                            <h6 class="my16">Membership</h6>
                            <label for="scholarship-ohio-farm-bureau" title="Ohio Farm Bureau"
                                class="btn btn-ofbf-default btn-block text-left">
                                <input type="checkbox" name="ofbf-scholarship-membership-types[]"
                                    id="scholarship-ohio-farm-bureau" value="ohio farm bureau">
                                Ohio Farm Bureau </label>
                            <label for="scholarship-ohio-sheep-improvement" title="Ohio Sheep Improvement"
                                class="btn btn-ofbf-default btn-block text-left">
                                <input type="checkbox" name="ofbf-scholarship-membership-types[]"
                                    id="scholarship-ohio-sheep-improvement" value="ohio sheep improvement">
                                Ohio Sheep Improvement </label>
                        </div>
                        <div>
                            <h6 class="my16">School Year</h6>
                            <label for="scholarship-entering-college-training" title="Entering College / Training"
                                class="btn btn-ofbf-default btn-block text-left">
                                <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                    id="scholarship-entering-college-training" value="entering college / training">
                                Entering College / Training </label>
                            <label for="scholarship-first-year" title="First Year"
                                class="btn btn-ofbf-default btn-block text-left">
                                <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                    id="scholarship-first-year" value="first year">
                                First Year </label>
                            <label for="scholarship-second-year" title="Second Year"
                                class="btn btn-ofbf-default btn-block text-left">
                                <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                    id="scholarship-second-year" value="second year">
                                Second Year </label>
                            <label for="scholarship-third-year" title="Third Year"
                                class="btn btn-ofbf-default btn-block text-left">
                                <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                    id="scholarship-third-year" value="third year">
                                Third Year </label>
                            <label for="scholarship-graduate-school" title="Graduate School"
                                class="btn btn-ofbf-default btn-block text-left">
                                <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                    id="scholarship-graduate-school" value="graduate school">
                                Graduate School </label>
                        </div>
                        <div>
                            <h6 class="my16">County</h6>
                            <select id="county" class="form-control" name="ofbf-scholarship-counties[]" size="6"
                                title="Hold the CTRL key and then click to select multiple or deselect" multiple="">
                                <option value="all" "="">All counties</option>
    <option value=" 001" "="">Adams</option>
    <option value=" 002" "="">Allen</option>
    <option value=" 003" "="">Ashland</option>
    <option value=" 004" "="">Ashtabula</option>
    <option value=" 005" "="">Athens</option>
    <option value=" 006" "="">Auglaize</option>
    <option value=" 007" "="">Belmont</option>
    <option value=" 008" "="">Brown</option>
    <option value=" 009" "="">Butler</option>
    <option value=" 010" "="">Carroll</option>
    <option value=" 011" "="">Champaign</option>
    <option value=" 012" "="">Clark</option>
    <option value=" 013" "="">Clermont</option>
    <option value=" 014" "="">Clinton</option>
    <option value=" 015" "="">Columbiana</option>
    <option value=" 016" "="">Coshocton</option>
    <option value=" 017" "="">Crawford</option>
    <option value=" 018" "="">Cuyahoga</option>
    <option value=" 019" "="">Darke</option>
    <option value=" 020" "="">Defiance</option>
    <option value=" 021" "="">Delaware</option>
    <option value=" 022" "="">Erie</option>
    <option value=" 023" "="">Fairfield</option>
    <option value=" 024" "="">Fayette</option>
    <option value=" 025" "="">Franklin</option>
    <option value=" 026" "="">Fulton</option>
    <option value=" 027" "="">Gallia</option>
    <option value=" 028" "="">Geauga</option>
    <option value=" 029" "="">Greene</option>
    <option value=" 030" "="">Guernsey</option>
    <option value=" 031" "="">Hamilton</option>
    <option value=" 032" "="">Hancock</option>
    <option value=" 033" "="">Hardin</option>
    <option value=" 034" "="">Harrison</option>
    <option value=" 035" "="">Henry</option>
    <option value=" 036" "="">Highland</option>
    <option value=" 037" "="">Hocking</option>
    <option value=" 038" "="">Holmes</option>
    <option value=" 039" "="">Huron</option>
    <option value=" 040" "="">Jackson</option>
    <option value=" 041" "="">Jefferson</option>
    <option value=" 042" "="">Knox</option>
    <option value=" 043" "="">Lake</option>
    <option value=" 044" "="">Lawrence</option>
    <option value=" 045" "="">Licking</option>
    <option value=" 046" "="">Logan</option>
    <option value=" 047" "="">Lorain</option>
    <option value=" 048" "="">Lucas</option>
    <option value=" 049" "="">Madison</option>
    <option value=" 050" "="">Mahoning</option>
    <option value=" 051" "="">Marion</option>
    <option value=" 052" "="">Medina</option>
    <option value=" 053" "="">Meigs</option>
    <option value=" 054" "="">Mercer</option>
    <option value=" 055" "="">Miami</option>
    <option value=" 056" "="">Monroe</option>
    <option value=" 057" "="">Montgomery</option>
    <option value=" 058" "="">Morgan</option>
    <option value=" 059" "="">Morrow</option>
    <option value=" 060" "="">Muskingum</option>
    <option value=" 061" "="">Noble</option>
    <option value=" 062" "="">Ottawa</option>
    <option value=" 063" "="">Paulding</option>
    <option value=" 064" "="">Perry</option>
    <option value=" 065" "="">Pickaway</option>
    <option value=" 066" "="">Pike</option>
    <option value=" 067" "="">Portage</option>
    <option value=" 068" "="">Preble</option>
    <option value=" 069" "="">Putnam</option>
    <option value=" 070" "="">Richland</option>
    <option value=" 071" "="">Ross</option>
    <option value=" 072" "="">Sandusky</option>
    <option value=" 073" "="">Scioto</option>
    <option value=" 074" "="">Seneca</option>
    <option value=" 075" "="">Shelby</option>
    <option value=" 076" "="">Stark</option>
    <option value=" 077" "="">Summit</option>
    <option value=" 078" "="">Trumbull</option>
    <option value=" 079" "="">Tuscarawas</option>
    <option value=" 080" "="">Vinton</option>
    <option value=" 081" "="">Van Wert</option>
    <option value=" 083" "="">Warren</option>
    <option value=" 084" "="">Washington</option>
    <option value=" 085" "="">Wayne</option>
    <option value=" 086" "="">Williams</option>
    <option value=" 087" "="">Wood</option>
    <option value=" 088" "="">Wyandot</option>
    </select>
    </div>
    </div>
    <input class=" btn btn-primary btn-block mt16" type="submit" value="Filter" data-dismiss="modal">
                </form>
            </div>
        </div>

        <div id="content" class="col-xs-12 col-sm-7 col-md-8 col-lg-9" role="main">
            <div class="row">
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-116399"
                        class="post-116399 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships _ofbf_scholarship_county-all">
                        <a href="https://ofbf.org/foundation/scholarships/bill-and-helen-swank/"
                            title="Apply for the Bill and Helen Swank Scholarship scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2019/10/Swank-Composite-1968-1996-704x396.jpg"
                                        class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2019/10/Swank-Composite-1968-1996-704x396.jpg 704w, https://ofbf.org/app/uploads/2019/10/Swank-Composite-1968-1996-368x207.jpg 368w, https://ofbf.org/app/uploads/2019/10/Swank-Composite-1968-1996-768x432.jpg 768w, https://ofbf.org/app/uploads/2019/10/Swank-Composite-1968-1996-736x414.jpg 736w, https://ofbf.org/app/uploads/2019/10/Swank-Composite-1968-1996-1104x621.jpg 1104w, https://ofbf.org/app/uploads/2019/10/Swank-Composite-1968-1996-1408x792.jpg 1408w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo"
                                        title="William C Swank memorial"></div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Bill and Helen Swank Scholarship </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/bill-and-helen-swank/">
                                    </div>
                                    <p>In honor of the legacy of Dr. C. William Swank, who served as Ohio Farm
                                        Bureau executive vice president from…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/bill-and-helen-swank/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-73091"
                        class="post-73091 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships _ofbf_scholarship_county-4561 _ofbf_scholarship_county-4562 _ofbf_scholarship_county-4069 _ofbf_scholarship_county-4070 _ofbf_scholarship_county-4563 _ofbf_scholarship_county-4564 _ofbf_scholarship_county-4071 _ofbf_scholarship_county-4565 _ofbf_scholarship_county-4566 _ofbf_scholarship_county-4072 _ofbf_scholarship_county-4567 _ofbf_scholarship_county-4568 _ofbf_scholarship_county-4569 _ofbf_scholarship_county-4570 _ofbf_scholarship_county-4073 _ofbf_scholarship_county-4074 _ofbf_scholarship_county-4571 _ofbf_scholarship_county-4075 _ofbf_scholarship_county-4572 _ofbf_scholarship_county-4573 _ofbf_scholarship_county-4574 _ofbf_scholarship_county-4505 _ofbf_scholarship_county-4575 _ofbf_scholarship_county-4576 _ofbf_scholarship_county-4577 _ofbf_scholarship_county-4578 _ofbf_scholarship_county-4579 _ofbf_scholarship_county-4076 _ofbf_scholarship_county-4580 _ofbf_scholarship_county-4077 _ofbf_scholarship_county-4581 _ofbf_scholarship_county-4582 _ofbf_scholarship_county-4583 _ofbf_scholarship_county-4078 _ofbf_scholarship_county-4584 _ofbf_scholarship_county-4585 _ofbf_scholarship_county-4586 _ofbf_scholarship_county-4079 _ofbf_scholarship_county-4587 _ofbf_scholarship_county-4588 _ofbf_scholarship_county-4080 _ofbf_scholarship_county-4081 _ofbf_scholarship_county-4082 _ofbf_scholarship_county-4589 _ofbf_scholarship_county-4064 _ofbf_scholarship_county-4590 _ofbf_scholarship_county-4591 _ofbf_scholarship_county-4592 _ofbf_scholarship_county-4593 _ofbf_scholarship_county-4083 _ofbf_scholarship_county-4594 _ofbf_scholarship_county-4084 _ofbf_scholarship_county-4595 _ofbf_scholarship_county-4596 _ofbf_scholarship_county-4597 _ofbf_scholarship_county-4085 _ofbf_scholarship_county-4598 _ofbf_scholarship_county-4086 _ofbf_scholarship_county-4599 _ofbf_scholarship_county-4087 _ofbf_scholarship_county-4088 _ofbf_scholarship_county-4600 _ofbf_scholarship_county-4601 _ofbf_scholarship_county-4089 _ofbf_scholarship_county-4602 _ofbf_scholarship_county-4603 _ofbf_scholarship_county-4090 _ofbf_scholarship_county-4604 _ofbf_scholarship_county-4605 _ofbf_scholarship_county-4560 _ofbf_scholarship_county-4606 _ofbf_scholarship_county-4607 _ofbf_scholarship_county-4608 _ofbf_scholarship_county-4609 _ofbf_scholarship_county-4610 _ofbf_scholarship_county-4091 _ofbf_scholarship_county-4092 _ofbf_scholarship_county-4093 _ofbf_scholarship_county-4094 _ofbf_scholarship_county-4611 _ofbf_scholarship_county-4612 _ofbf_scholarship_county-4613 _ofbf_scholarship_county-4095 _ofbf_scholarship_county-4096 _ofbf_scholarship_county-all">
                        <a href="https://ofbf.org/foundation/scholarships/cindy-hollingshead/"
                            title="Apply for the Cindy Hollingshead Scholarship scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2016/01/cindy-704x396.jpg"
                                        class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2016/01/cindy-704x396.jpg 704w, https://ofbf.org/app/uploads/2016/01/cindy-704x396-368x207.jpg 368w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo" title="cindy 704x396">
                                </div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Cindy Hollingshead Scholarship </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/cindy-hollingshead/">
                                    </div>
                                    <p>The Cindy Hollingshead Scholarship fund was established to honor Cynthia Anne
                                        (Cindy) Hollingshead for 39 years of service as executive…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/cindy-hollingshead/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-108683"
                        class="post-108683 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships _ofbf_scholarship_county-all">
                        <a href="https://ofbf.org/foundation/scholarships/dr-david-benfield-scholarship/"
                            title="Apply for the Dr. David A. Benfield Scholarship for Students in Livestock and Crop Sciences at ATI scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2021/12/Ohio-Farm-Bureau-Foundation-704x396.jpeg"
                                        class="attachment-medium size-medium wp-post-image"
                                        alt="Ohio Farm Bureau Foundation" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2021/12/Ohio-Farm-Bureau-Foundation-704x396.jpeg 704w, https://ofbf.org/app/uploads/2021/12/Ohio-Farm-Bureau-Foundation-368x207.jpeg 368w, https://ofbf.org/app/uploads/2021/12/Ohio-Farm-Bureau-Foundation-768x432.jpeg 768w, https://ofbf.org/app/uploads/2021/12/Ohio-Farm-Bureau-Foundation-1536x864.jpeg 1536w, https://ofbf.org/app/uploads/2021/12/Ohio-Farm-Bureau-Foundation-2048x1152.jpeg 2048w, https://ofbf.org/app/uploads/2021/12/Ohio-Farm-Bureau-Foundation-736x414.jpeg 736w, https://ofbf.org/app/uploads/2021/12/Ohio-Farm-Bureau-Foundation-1104x621.jpeg 1104w, https://ofbf.org/app/uploads/2021/12/Ohio-Farm-Bureau-Foundation-1408x792.jpeg 1408w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo"
                                        title="Ohio Farm Bureau Foundation"></div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Dr. David A. Benfield Scholarship for Students in Livestock and Crop Sciences at
                                    ATI </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/dr-david-benfield-scholarship/">
                                    </div>
                                    <p>The Dr. David A. Benfield Scholarship for Students in Livestock and Crop
                                        Sciences at ATI was established in 2019 by…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/dr-david-benfield-scholarship/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-73095"
                        class="post-73095 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships _ofbf_scholarship_county-4561 _ofbf_scholarship_county-4562 _ofbf_scholarship_county-4069 _ofbf_scholarship_county-4070 _ofbf_scholarship_county-4563 _ofbf_scholarship_county-4564 _ofbf_scholarship_county-4071 _ofbf_scholarship_county-4565 _ofbf_scholarship_county-4566 _ofbf_scholarship_county-4072 _ofbf_scholarship_county-4567 _ofbf_scholarship_county-4568 _ofbf_scholarship_county-4569 _ofbf_scholarship_county-4570 _ofbf_scholarship_county-4073 _ofbf_scholarship_county-4074 _ofbf_scholarship_county-4571 _ofbf_scholarship_county-4075 _ofbf_scholarship_county-4572 _ofbf_scholarship_county-4573 _ofbf_scholarship_county-4574 _ofbf_scholarship_county-4505 _ofbf_scholarship_county-4575 _ofbf_scholarship_county-4576 _ofbf_scholarship_county-4577 _ofbf_scholarship_county-4578 _ofbf_scholarship_county-4579 _ofbf_scholarship_county-4076 _ofbf_scholarship_county-4580 _ofbf_scholarship_county-4077 _ofbf_scholarship_county-4581 _ofbf_scholarship_county-4582 _ofbf_scholarship_county-4583 _ofbf_scholarship_county-4078 _ofbf_scholarship_county-4584 _ofbf_scholarship_county-4585 _ofbf_scholarship_county-4586 _ofbf_scholarship_county-4079 _ofbf_scholarship_county-4587 _ofbf_scholarship_county-4588 _ofbf_scholarship_county-4080 _ofbf_scholarship_county-4081 _ofbf_scholarship_county-4082 _ofbf_scholarship_county-4589 _ofbf_scholarship_county-4064 _ofbf_scholarship_county-4590 _ofbf_scholarship_county-4591 _ofbf_scholarship_county-4592 _ofbf_scholarship_county-4593 _ofbf_scholarship_county-4083 _ofbf_scholarship_county-4594 _ofbf_scholarship_county-4084 _ofbf_scholarship_county-4595 _ofbf_scholarship_county-4596 _ofbf_scholarship_county-4597 _ofbf_scholarship_county-4085 _ofbf_scholarship_county-4598 _ofbf_scholarship_county-4086 _ofbf_scholarship_county-4599 _ofbf_scholarship_county-4087 _ofbf_scholarship_county-4088 _ofbf_scholarship_county-4600 _ofbf_scholarship_county-4601 _ofbf_scholarship_county-4089 _ofbf_scholarship_county-4602 _ofbf_scholarship_county-4603 _ofbf_scholarship_county-4090 _ofbf_scholarship_county-4604 _ofbf_scholarship_county-4605 _ofbf_scholarship_county-4560 _ofbf_scholarship_county-4606 _ofbf_scholarship_county-4607 _ofbf_scholarship_county-4608 _ofbf_scholarship_county-4609 _ofbf_scholarship_county-4610 _ofbf_scholarship_county-4091 _ofbf_scholarship_county-4092 _ofbf_scholarship_county-4093 _ofbf_scholarship_county-4094 _ofbf_scholarship_county-4611 _ofbf_scholarship_county-4612 _ofbf_scholarship_county-4613 _ofbf_scholarship_county-4095 _ofbf_scholarship_county-4096 _ofbf_scholarship_county-4614 _ofbf_scholarship_county-4615 _ofbf_scholarship_county-4616 _ofbf_scholarship_county-all">
                        <a href="https://ofbf.org/foundation/scholarships/jack-fisher/"
                            title="Apply for the Jack Fisher Scholarship scholarship" data-feathr-click-track="true"
                            data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2016/07/JackFisher_2016-704x396.jpg"
                                        class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2016/07/JackFisher_2016-704x396.jpg 704w, https://ofbf.org/app/uploads/2016/07/JackFisher_2016-368x207.jpg 368w, https://ofbf.org/app/uploads/2016/07/JackFisher_2016-768x432.jpg 768w, https://ofbf.org/app/uploads/2016/07/JackFisher_2016-1536x864.jpg 1536w, https://ofbf.org/app/uploads/2016/07/JackFisher_2016-2048x1153.jpg 2048w, https://ofbf.org/app/uploads/2016/07/JackFisher_2016-736x414.jpg 736w, https://ofbf.org/app/uploads/2016/07/JackFisher_2016-1104x621.jpg 1104w, https://ofbf.org/app/uploads/2016/07/JackFisher_2016-1408x792.jpg 1408w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo"
                                        title="JackFisher_2016"></div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Jack Fisher Scholarship </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/jack-fisher/"></div>
                                    <p>The scholarship’s namesake John C. “Jack” Fisher believes in this saying from
                                        Ohio Farm Bureau’s first executive vice president Murray…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/jack-fisher/"></div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-160847"
                        class="post-160847 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-marion-county tag-scholarships _ofbf_scholarship_county-4594">
                        <a href="https://ofbf.org/foundation/scholarships/james-h-johnson-scholarship-marion-county/"
                            title="Apply for the James H. Johnson Scholarship Fund for Marion County scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2020/03/Marion_County-704x396.jpg"
                                        class="attachment-medium size-medium wp-post-image"
                                        alt="Marion County Farm Bureau" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2020/03/Marion_County-704x396.jpg 704w, https://ofbf.org/app/uploads/2020/03/Marion_County-368x207.jpg 368w, https://ofbf.org/app/uploads/2020/03/Marion_County-768x432.jpg 768w, https://ofbf.org/app/uploads/2020/03/Marion_County-736x414.jpg 736w, https://ofbf.org/app/uploads/2020/03/Marion_County-1104x621.jpg 1104w, https://ofbf.org/app/uploads/2020/03/Marion_County-1408x792.jpg 1408w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo" title="Marion_County">
                                </div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    James H. Johnson Scholarship Fund for Marion County </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/james-h-johnson-scholarship-marion-county/">
                                    </div>
                                    <p>The James H. Johnson Scholarship Fund was established in 1998 by the Marion
                                        County Farm Bureau Board of Trustees in…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/james-h-johnson-scholarship-marion-county/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-108081"
                        class="post-108081 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships _ofbf_scholarship_county-4591 _ofbf_scholarship_county-all">
                        <a href="https://ofbf.org/foundation/scholarships/joseph-kelly-memorial-scholarship/"
                            title="Apply for the Joseph Kelly Memorial Scholarship scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2020/01/kelly.jpg"
                                        class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2020/01/kelly.jpg 704w, https://ofbf.org/app/uploads/2020/01/kelly-368x207.jpg 368w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo" title="kelly">
                                </div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Joseph Kelly Memorial Scholarship </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/joseph-kelly-memorial-scholarship/">
                                    </div>
                                    <p>This scholarship was established in 2018 to honor the life of Joseph Kelly
                                        and to continue his legacy of generosity…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/joseph-kelly-memorial-scholarship/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-73097"
                        class="post-73097 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships _ofbf_scholarship_county-4069 _ofbf_scholarship_county-4070 _ofbf_scholarship_county-4071 _ofbf_scholarship_county-4072 _ofbf_scholarship_county-4073 _ofbf_scholarship_county-4074 _ofbf_scholarship_county-4075 _ofbf_scholarship_county-4076 _ofbf_scholarship_county-4077 _ofbf_scholarship_county-4078 _ofbf_scholarship_county-4079 _ofbf_scholarship_county-4080 _ofbf_scholarship_county-4081 _ofbf_scholarship_county-4082 _ofbf_scholarship_county-4064 _ofbf_scholarship_county-4083 _ofbf_scholarship_county-4084 _ofbf_scholarship_county-4085 _ofbf_scholarship_county-4086 _ofbf_scholarship_county-4087 _ofbf_scholarship_county-4088 _ofbf_scholarship_county-4089 _ofbf_scholarship_county-4090 _ofbf_scholarship_county-4091 _ofbf_scholarship_county-4092 _ofbf_scholarship_county-4093 _ofbf_scholarship_county-4094 _ofbf_scholarship_county-4095 _ofbf_scholarship_county-4096">
                        <a href="https://ofbf.org/foundation/scholarships/kenny-walter/"
                            title="Apply for the Kenny Walter Scholarship scholarship" data-feathr-click-track="true"
                            data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2016/10/2118x1188_KennyWalters-704x396.jpg"
                                        class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2016/10/2118x1188_KennyWalters-704x396.jpg 704w, https://ofbf.org/app/uploads/2016/10/2118x1188_KennyWalters-368x207.jpg 368w, https://ofbf.org/app/uploads/2016/10/2118x1188_KennyWalters-768x431.jpg 768w, https://ofbf.org/app/uploads/2016/10/2118x1188_KennyWalters-1536x862.jpg 1536w, https://ofbf.org/app/uploads/2016/10/2118x1188_KennyWalters-2048x1149.jpg 2048w, https://ofbf.org/app/uploads/2016/10/2118x1188_KennyWalters-736x414.jpg 736w, https://ofbf.org/app/uploads/2016/10/2118x1188_KennyWalters-1104x621.jpg 1104w, https://ofbf.org/app/uploads/2016/10/2118x1188_KennyWalters-1408x792.jpg 1408w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo" title="Kenny Walter">
                                </div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Kenny Walter Scholarship </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/kenny-walter/"></div>
                                    <p>Known as “Mr. Farm Bureau” to his family and friends, Kenny Walter devoted 34
                                        years of his life to Ohio…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/kenny-walter/"></div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-161103"
                        class="post-161103 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-hardin-county tag-scholarships _ofbf_scholarship_county-4583">
                        <a href="https://ofbf.org/foundation/scholarships/lou-ann-putnam-harrold-scholarship-hardin-county/"
                            title="Apply for the Lou Ann Putnam Harrold Scholarship Fund for Hardin County scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2024/01/LouAnn-Putnam-scholarship-704x396.jpg"
                                        class="attachment-medium size-medium wp-post-image"
                                        alt="Lou Ann Putnam Harrold Scholarship" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2024/01/LouAnn-Putnam-scholarship-704x396.jpg 704w, https://ofbf.org/app/uploads/2024/01/LouAnn-Putnam-scholarship-368x207.jpg 368w, https://ofbf.org/app/uploads/2024/01/LouAnn-Putnam-scholarship-768x432.jpg 768w, https://ofbf.org/app/uploads/2024/01/LouAnn-Putnam-scholarship-1536x864.jpg 1536w, https://ofbf.org/app/uploads/2024/01/LouAnn-Putnam-scholarship-2048x1152.jpg 2048w, https://ofbf.org/app/uploads/2024/01/LouAnn-Putnam-scholarship-736x414.jpg 736w, https://ofbf.org/app/uploads/2024/01/LouAnn-Putnam-scholarship-1104x621.jpg 1104w, https://ofbf.org/app/uploads/2024/01/LouAnn-Putnam-scholarship-1408x792.jpg 1408w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo"
                                        title="LouAnn-Putnam-scholarship"></div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Lou Ann Putnam Harrold Scholarship Fund for Hardin County </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/lou-ann-putnam-harrold-scholarship-hardin-county/">
                                    </div>
                                    <p>The Lou Ann Putnam Memorial Scholarship Fund for Hardin County provides
                                        scholarship support to deserving individuals in perpetuity, opening the…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/lou-ann-putnam-harrold-scholarship-hardin-county/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-73089"
                        class="post-73089 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships _ofbf_scholarship_county-4561 _ofbf_scholarship_county-4562 _ofbf_scholarship_county-4069 _ofbf_scholarship_county-4070 _ofbf_scholarship_county-4563 _ofbf_scholarship_county-4564 _ofbf_scholarship_county-4071 _ofbf_scholarship_county-4565 _ofbf_scholarship_county-4566 _ofbf_scholarship_county-4072 _ofbf_scholarship_county-4567 _ofbf_scholarship_county-4568 _ofbf_scholarship_county-4569 _ofbf_scholarship_county-4570 _ofbf_scholarship_county-4073 _ofbf_scholarship_county-4074 _ofbf_scholarship_county-4571 _ofbf_scholarship_county-4075 _ofbf_scholarship_county-4572 _ofbf_scholarship_county-4573 _ofbf_scholarship_county-4574 _ofbf_scholarship_county-4505 _ofbf_scholarship_county-4575 _ofbf_scholarship_county-4576 _ofbf_scholarship_county-4577 _ofbf_scholarship_county-4578 _ofbf_scholarship_county-4579 _ofbf_scholarship_county-4076 _ofbf_scholarship_county-4580 _ofbf_scholarship_county-4077 _ofbf_scholarship_county-4581 _ofbf_scholarship_county-4582 _ofbf_scholarship_county-4583 _ofbf_scholarship_county-4078 _ofbf_scholarship_county-4584 _ofbf_scholarship_county-4585 _ofbf_scholarship_county-4586 _ofbf_scholarship_county-4079 _ofbf_scholarship_county-4587 _ofbf_scholarship_county-4588 _ofbf_scholarship_county-4080 _ofbf_scholarship_county-4081 _ofbf_scholarship_county-4082 _ofbf_scholarship_county-4589 _ofbf_scholarship_county-4064 _ofbf_scholarship_county-4590 _ofbf_scholarship_county-4591 _ofbf_scholarship_county-4592 _ofbf_scholarship_county-4593 _ofbf_scholarship_county-4083 _ofbf_scholarship_county-4594 _ofbf_scholarship_county-4084 _ofbf_scholarship_county-4595 _ofbf_scholarship_county-4596 _ofbf_scholarship_county-4597 _ofbf_scholarship_county-4085 _ofbf_scholarship_county-4598 _ofbf_scholarship_county-4086 _ofbf_scholarship_county-4599 _ofbf_scholarship_county-4087 _ofbf_scholarship_county-4088 _ofbf_scholarship_county-4600 _ofbf_scholarship_county-4601 _ofbf_scholarship_county-4089 _ofbf_scholarship_county-4602 _ofbf_scholarship_county-4603 _ofbf_scholarship_county-4090 _ofbf_scholarship_county-4604 _ofbf_scholarship_county-4605 _ofbf_scholarship_county-4560 _ofbf_scholarship_county-4606 _ofbf_scholarship_county-4607 _ofbf_scholarship_county-4608 _ofbf_scholarship_county-4609 _ofbf_scholarship_county-4610 _ofbf_scholarship_county-4091 _ofbf_scholarship_county-4092 _ofbf_scholarship_county-4093 _ofbf_scholarship_county-4094 _ofbf_scholarship_county-4611 _ofbf_scholarship_county-4612 _ofbf_scholarship_county-4613 _ofbf_scholarship_county-4095 _ofbf_scholarship_county-4096 _ofbf_scholarship_county-4614 _ofbf_scholarship_county-4615 _ofbf_scholarship_county-all">
                        <a href="https://ofbf.org/foundation/scholarships/ohio-farm-bureau-scholars/"
                            title="Apply for the Ohio Farm Bureau Scholars Scholarship scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="702" height="150"
                                        src="https://ofbf.org/app/uploads/2016/12/GRADUATES-702x396.jpg"
                                        class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2016/12/GRADUATES-702x396.jpg 702w, https://ofbf.org/app/uploads/2016/12/GRADUATES-368x207.jpg 368w, https://ofbf.org/app/uploads/2016/12/GRADUATES.jpg 704w"
                                        sizes="(max-width: 702px) 100vw, 702px" itemprop="photo" title="graduates">
                                </div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Ohio Farm Bureau Scholars Scholarship </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/ohio-farm-bureau-scholars/">
                                    </div>
                                    <p>The Ohio Farm Bureau Foundation Scholar award recognizes students for
                                        academic effort, community service and career interests that use
                                        agriculture…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/ohio-farm-bureau-scholars/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-108073"
                        class="post-108073 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships _ofbf_scholarship_county-all">
                        <a href="https://ofbf.org/foundation/scholarships/ohio-horsemens-benevolent-protective-association-scholarship/"
                            title="Apply for the Ohio Horsemen’s Benevolent &amp; Protective Association Scholarship scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2020/01/horsemens.jpg"
                                        class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2020/01/horsemens.jpg 704w, https://ofbf.org/app/uploads/2020/01/horsemens-368x207.jpg 368w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo" title="horsemens">
                                </div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Ohio Horsemen’s Benevolent &amp; Protective Association Scholarship </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/ohio-horsemens-benevolent-protective-association-scholarship/">
                                    </div>
                                    <p>The Ohio Horsemen’s Benevolent &amp; Protective Association Scholarship
                                        annually awards scholarships to graduating high school students who plan to
                                        pursue…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/ohio-horsemens-benevolent-protective-association-scholarship/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-108063"
                        class="post-108063 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships _ofbf_scholarship_county-4561 _ofbf_scholarship_county-4069 _ofbf_scholarship_county-4070 _ofbf_scholarship_county-4563 _ofbf_scholarship_county-4564 _ofbf_scholarship_county-4567 _ofbf_scholarship_county-4570 _ofbf_scholarship_county-4073 _ofbf_scholarship_county-4074 _ofbf_scholarship_county-4571 _ofbf_scholarship_county-4572 _ofbf_scholarship_county-4573 _ofbf_scholarship_county-4505 _ofbf_scholarship_county-4576 _ofbf_scholarship_county-4579 _ofbf_scholarship_county-4077 _ofbf_scholarship_county-4582 _ofbf_scholarship_county-4583 _ofbf_scholarship_county-4078 _ofbf_scholarship_county-4584 _ofbf_scholarship_county-4585 _ofbf_scholarship_county-4079 _ofbf_scholarship_county-4587 _ofbf_scholarship_county-4588 _ofbf_scholarship_county-4081 _ofbf_scholarship_county-4590 _ofbf_scholarship_county-4594 _ofbf_scholarship_county-4595 _ofbf_scholarship_county-4596 _ofbf_scholarship_county-4085 _ofbf_scholarship_county-4087 _ofbf_scholarship_county-4088 _ofbf_scholarship_county-4600 _ofbf_scholarship_county-4601 _ofbf_scholarship_county-4603 _ofbf_scholarship_county-4604 _ofbf_scholarship_county-4605 _ofbf_scholarship_county-4606 _ofbf_scholarship_county-4607 _ofbf_scholarship_county-4608 _ofbf_scholarship_county-4609 _ofbf_scholarship_county-4610 _ofbf_scholarship_county-4094 _ofbf_scholarship_county-4611 _ofbf_scholarship_county-4612 _ofbf_scholarship_county-4095 _ofbf_scholarship_county-4096 _ofbf_scholarship_county-4614 _ofbf_scholarship_county-4616">
                        <a href="https://ofbf.org/foundation/scholarships/richard-carole-cocks-scholarship/"
                            title="Apply for the Richard &amp; Carole Cocks Scholarship scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2020/01/Richard-Cocks-704x396.jpg"
                                        class="attachment-medium size-medium wp-post-image" alt="Richard Cocks"
                                        loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2020/01/Richard-Cocks-704x396.jpg 704w, https://ofbf.org/app/uploads/2020/01/Richard-Cocks-368x207.jpg 368w, https://ofbf.org/app/uploads/2020/01/Richard-Cocks-768x432.jpg 768w, https://ofbf.org/app/uploads/2020/01/Richard-Cocks-1536x864.jpg 1536w, https://ofbf.org/app/uploads/2020/01/Richard-Cocks-2048x1152.jpg 2048w, https://ofbf.org/app/uploads/2020/01/Richard-Cocks-736x414.jpg 736w, https://ofbf.org/app/uploads/2020/01/Richard-Cocks-1104x621.jpg 1104w, https://ofbf.org/app/uploads/2020/01/Richard-Cocks-1408x792.jpg 1408w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo" title="Richard Cocks">
                                </div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Richard &amp; Carole Cocks Scholarship </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/richard-carole-cocks-scholarship/">
                                    </div>
                                    <p>The&nbsp;Richard &amp; Carole Cocks Scholarship&nbsp;was established in 2020
                                        by Mr. Richard Cocks. Richard is a chemical engineer who spent his…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/richard-carole-cocks-scholarship/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="col-xs-12 col-lg-4 clearfix mt0">
                    <article itemscope="" itemtype="http://schema.org/Article" id="post-116713"
                        class="post-116713 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry tag-scholarships tag-yvonne-lesicko-memorial-fund _ofbf_scholarship_county-all">
                        <a href="https://ofbf.org/foundation/scholarships/yvonne-lesicko-memorial-scholarship/"
                            title="Apply for the Yvonne Lesicko Memorial Scholarship scholarship"
                            data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                            <header class="entry-header clearfix">
                                <div class="image-wrapper ratio_16-9"><img width="704" height="150"
                                        src="https://ofbf.org/app/uploads/2020/12/Lesicko-OFBF-Foundation-1-704x396.png"
                                        class="attachment-medium size-medium wp-post-image" alt="" loading="lazy"
                                        srcset="https://ofbf.org/app/uploads/2020/12/Lesicko-OFBF-Foundation-1-704x396.png 704w, https://ofbf.org/app/uploads/2020/12/Lesicko-OFBF-Foundation-1-368x207.png 368w, https://ofbf.org/app/uploads/2020/12/Lesicko-OFBF-Foundation-1-768x432.png 768w, https://ofbf.org/app/uploads/2020/12/Lesicko-OFBF-Foundation-1-1536x864.png 1536w, https://ofbf.org/app/uploads/2020/12/Lesicko-OFBF-Foundation-1-2048x1152.png 2048w, https://ofbf.org/app/uploads/2020/12/Lesicko-OFBF-Foundation-1-736x414.png 736w, https://ofbf.org/app/uploads/2020/12/Lesicko-OFBF-Foundation-1-1104x621.png 1104w, https://ofbf.org/app/uploads/2020/12/Lesicko-OFBF-Foundation-1-1408x792.png 1408w"
                                        sizes="(max-width: 704px) 100vw, 704px" itemprop="photo"
                                        title="Lesicko-OFBF-Foundation (1)"></div>
                                <h1 itemprop="name" class="font-medium entry-title">
                                    Yvonne Lesicko Memorial Scholarship </h1>
                            </header>
                            <div class="entry-content">
                                <strong>
                                    <p>Apply 1/2/2024 - 3/31/2024</p>
                                </strong>
                                <span class="preview block mb16">
                                    <div class="at-above-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/yvonne-lesicko-memorial-scholarship/">
                                    </div>
                                    <p>The Yvonne Lesicko Memorial Scholarship fund was established in honor of
                                        Yvonne Lesicko, Ohio Farm Bureau’s vice president of public…</p>
                                    <div class="at-below-post-arch-page addthis_tool"
                                        data-url="https://ofbf.org/foundation/scholarships/yvonne-lesicko-memorial-scholarship/">
                                    </div>
                                    <p></p>
                                </span>

                            </div>
                        </a>
                    </article>
                </div>
                <div class="row" style="width:100%;text-align:center; clear:both;width:100%; flex:0 0 100%;">
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-73085"
                            class="post-73085 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/dr-jack-judy/"
                                title="Dr. Jack Judy Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2016/03/dr-judy.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Dr. Jack Judy Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 3/15/2024 - 6/24/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Dr. Jack Judy was a member of the Ohio State University Department of
                                            Animal Science until his retirement in
                                            1984….<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-111434"
                            class="post-111434 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/high-family-memorial-scholarship/"
                                title="High Family Memorial Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/04/Glenn-A-High-Scholarship.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        High Family Memorial Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 3/15/2024 - 6/24/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The High Family Memorial Scholarship may be awarded annually by The Ohio
                                            Sheep Improvement Association. The scholarship is given
                                            in…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-152637"
                            class="post-152637 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/ohio-lamb-and-wool-ambassador-scholarship/"
                                title="Ohio Lamb and Wool Ambassador Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2023/03/Ohio-Sheep-Improvement-Association.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Ohio Lamb and Wool Ambassador Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 3/15/2024 - 6/24/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Ohio Lamb and Wool Ambassador Scholarship Program has been created to
                                            assist the Ohio Lamb and Wool Ambassador
                                            with…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-73083"
                            class="post-73083 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/ralph-h-grimshaw/"
                                title="Ralph H. Grimshaw Memorial Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2016/03/RalphGrimshaw.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Ralph H. Grimshaw Memorial Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 3/15/2024 - 6/24/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Ralph Grimshaw Memorial Scholarship is awarded annually by the Ohio
                                            Sheep Improvement Association. The scholarship is given in
                                            honor…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-97943"
                            class="post-97943 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/summit-county-farm-bureau-robert-h-eckart-memorial-scholarship/"
                                title="Robert H. Eckart Memorial Scholarship of Summit County"
                                data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/12/scholarship.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Robert H. Eckart Memorial Scholarship of Summit County </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/1/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Robert H. Eckart Memorial Scholarship of Summit County was
                                            established in honor of Robert Eckart for his extended
                                            service…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-86544"
                            class="post-86544 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/putnam-county-scholarship/"
                                title="Andrea Karhoff Scholarship of Putnam County" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/10/scholarship-2022.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Andrea Karhoff Scholarship of Putnam County </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Putnam County Farm Bureau will award scholarships for the college
                                            year 2023. The scholarship award recipients will be
                                            recognized…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-84008"
                            class="post-84008 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/betty-hansen-scholarship/"
                                title="Betty Hansen Scholarship of Cuyahoga County" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/01/Cuyahoga_County.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Betty Hansen Scholarship of Cuyahoga County </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Betty Hansen Memorial Scholarship Program was established by the
                                            Cuyahoga County Farm Bureau in 1992 to honor Betty
                                            Hansen…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-150091"
                            class="post-150091 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/betty-hildebrand-memorial-scholarship-of-hancock-county/"
                                title="Betty Hildebrand Memorial Scholarship of Hancock County"
                                data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/03/Hancock_County.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Betty Hildebrand Memorial Scholarship of Hancock County </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Betty Hildebrand Memorial Scholarship of Hancock County assists
                                            students who plan to pursue careers focusing on
                                            agriculture.<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-95318"
                            class="post-95318 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/bruce-carlene-patterson/"
                                title="Bruce and Carlene Patterson Agricultural Scholarship"
                                data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2024/01/Bruce-Carlene-Patterson-Scholarship.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Bruce and Carlene Patterson Agricultural Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Bruce and Carlene Patterson Agricultural Scholarship Fund was
                                            established to provide scholarship support to deserving individuals in
                                            perpetuity,
                                            opening…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-116373"
                            class="post-116373 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/carroll-county-farm-bureau-scholarship/"
                                title="Carroll County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/04/2112x1188_Carroll.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Carroll County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Carroll County Farm Bureau awards scholarships for qualified students
                                            from Carroll County who are or will be pursuing
                                            further…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-99748"
                            class="post-99748 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/columbiana-county-farm-bureau-scholarship/"
                                title="Columbiana County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/10/scholarship-2022.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Columbiana County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Columbiana County Farm Bureau awards scholarships to students who are
                                            graduating high school or who are currently enrolled in
                                            college.<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-73093"
                            class="post-73093 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/darwin-bryan/"
                                title="Darwin Bryan Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2016/01/darwinbryan-704x396.png"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Darwin Bryan Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Darwin Bryan Scholarship fund was established in 1985 in honor of
                                            Darwin R. Bryan whose enthusiastic leadership during
                                            his…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-84004"
                            class="post-84004 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/erie-county-scholarships/"
                                title="Erie County Scholarships" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2021/01/scholarship-1-1-1104x621.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Erie County Scholarships </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Erie County Farm Bureau has multiple scholarship opportunities for
                                            students pursuing post-secondary education. General scholarship for
                                            students attending a
                                            two…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-150099"
                            class="post-150099 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/hardin-county-scholarship/"
                                title="Hardin County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/03/Hardin_County.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Hardin County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Hardin County Farm Bureau offers scholarship opportunities for graduating
                                            seniors planning to study in any field or for graduating
                                            seniors…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-116389"
                            class="post-116389 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/harrison-county-farm-bureau-scholarship/"
                                title="Harrison County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/02/scholarships-736x414.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Harrison County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Harrison County Farm Bureau awards scholarships for qualified students
                                            from Harrison County continuing their education and becoming
                                            self-directing, productive
                                            and…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-108373"
                            class="post-108373 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/huron-county-farm-bureau-inc-agricultural-500-00-scholarship/"
                                title="Huron County Agricultural Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/03/scholarship-photo-e1642002333257.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Huron County Agricultural Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Huron County Farm Bureau will be offering scholarships for graduating
                                            high school seniors who will be majoring in an
                                            agricultural…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-108382"
                            class="post-108382 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/huron-county-farm-bureau-inc-continuing-education-500-00-scholarship/"
                                title="Huron County Continuing Education Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/01/Huron_County.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Huron County Continuing Education Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Huron County Farm Bureau awards scholarships for qualified students from
                                            Huron County who are pursuing a degree in agriculture
                                            or…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-116392"
                            class="post-116392 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/jefferson-county-farm-bureau-scholarship/"
                                title="Jefferson County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/04/2112x1188_Jefferson.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Jefferson County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Jefferson County Farm Bureau awards scholarships for qualified students
                                            from Jefferson County continuing their education and becoming
                                            self-directing, productive
                                            and…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-85082"
                            class="post-85082 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/knox-county-scholarship/"
                                title="Knox County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/01/knox-scholarship.png"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Knox County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Knox County Farm Bureau awards scholarships to a qualified high school
                                            senior or person enrolled in college from Knox
                                            County…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-117115"
                            class="post-117115 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/lake-county-farm-bureau-scholarship/"
                                title="Lake County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/04/2112x1188_Lake.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Lake County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Lake County Farm Bureau offers a renewable scholarship based on the
                                            number of qualifying
                                            applications.<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-116396"
                            class="post-116396 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/lawrence-county-farm-bureau-scholarship/"
                                title="Lawrence County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/04/2112x1188_Lawrence.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Lawrence County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Lawrence County Farm Bureau offers a scholarship to a student who is a
                                            Lawrence County resident. Special preference is
                                            given…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-73078"
                            class="post-73078 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/licking-county-scholarship/"
                                title="Licking County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2017/02/Scholarship-Licking.png"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Licking County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Licking County Farm Bureau Board of Trustees awards scholarships to
                                            the next generation of youth pursuing a career
                                            in…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-85294"
                            class="post-85294 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/lorain-county-scholarship/"
                                title="Lorain County Scholarships" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/03/Lorain_County_logo.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Lorain County Scholarships </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Lorain County Farm Bureau has multiple scholarship opportunities for
                                            students pursuing post-secondary education. General Scholarship for
                                            students attending a
                                            two…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-87296"
                            class="post-87296 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/lucas-county-scholarship/"
                                title="Lucas County Scholarships" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/04/2112x1188_Lucas.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Lucas County Scholarships </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Lucas County Farm Bureau offers numerous scholarships to qualifying
                                            students.<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-99746"
                            class="post-99746 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/mahoning-county-scholarship/"
                                title="Mahoning County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/03/scholarship-photo-e1642002333257.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Mahoning County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Mahoning County Farm Bureau awards scholarships to deserving students to
                                            help offset educational costs for the following school
                                            year.<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-84878"
                            class="post-84878 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/medina-county-scholarship/"
                                title="Medina County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/01/graduation-celebration.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Medina County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Medina County Farm Bureau awards scholarships to high school seniors or
                                            individuals currently enrolled in a two or four-year
                                            university….<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-99361"
                            class="post-99361 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/monroe-county-scholarship/"
                                title="Monroe County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/10/scholarship-2022.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Monroe County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Monroe County Farm Bureau offers scholarships through the Ohio Farm
                                            Bureau Foundation in honor of Bill and Glenda
                                            Thomas,…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-86759"
                            class="post-86759 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/morgan-county-scholarship/"
                                title="Morgan County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/02/scholar-hat.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Morgan County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Morgan County Farm Bureau Board of Trustees established the Morgan
                                            County Scholarship Fund to assist high school or
                                            college…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-150101"
                            class="post-150101 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/mularcik-welding-scholarship-summit-county/"
                                title="Mularcik Welding Scholarship for Summit County" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2023/01/Mularcik-welding-scholarship.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Mularcik Welding Scholarship for Summit County </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Brad Mularcik, a long-standing member of the Summit County Farm Bureau,
                                            believes that there is too little attention paid
                                            to…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-87310"
                            class="post-87310 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/ottawa-county-scholarship/"
                                title="Ottawa County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/02/ScholarshipApplication-720x350.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Ottawa County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Ottawa County Farm Bureau offers scholarships to eligible students.
                                            Priority will be given to those majoring in an agricultural
                                            or…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-86547"
                            class="post-86547 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/paulding-county-scholarship/"
                                title="Paulding County Scholarships" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/10/scholarship-2022.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Paulding County Scholarships </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Paulding County Farm Bureau awards scholarships for qualified students
                                            from Paulding who are or will be pursuing further education.
                                            For…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-87191"
                            class="post-87191 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/perry-county-farm-bureau/"
                                title="Perry County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/02/scholar1.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Perry County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Perry County Farm Bureau Board of Trustees established the Perry County
                                            Scholarship Fund to assist high school or college
                                            students…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-99743"
                            class="post-99743 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/robert-brookover-scholarship/"
                                title="Robert Brookover Scholarship of Portage County" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/10/Portage_County-e1635774338184.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Robert Brookover Scholarship of Portage County </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Portage County Farm Bureau awards scholarships to students who are
                                            graduating from high school or who are currently enrolled
                                            in…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-87312"
                            class="post-87312 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/sandusky-county-scholarship/"
                                title="Sandusky County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/03/scholarship-photo-e1642002333257.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Sandusky County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Sandusky County Farm Bureau offers scholarships to assist a graduating
                                            senior.<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-150097"
                            class="post-150097 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/seneca-county-scholarship/"
                                title="Seneca County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/03/Seneca_County.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Seneca County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Seneca County Farm Bureau offers two scholarships to graduating high
                                            school seniors who are children/dependents of Seneca County Farm
                                            Bureau…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="12">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-99740"
                            class="post-99740 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/stark-county-farm-bureau-scholarship/"
                                title="Stark County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/01/graduation-celebration.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Stark County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Stark County Farm Bureau awards four scholarships to students who are
                                            graduating high school or currently enrolled in college.
                                            These…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="8">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-86558"
                            class="post-86558 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/allen-county-scholarship/"
                                title="The Ed Ulrich Scholarship of Allen County" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/10/scholarship-2022.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        The Ed Ulrich Scholarship of Allen County </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Allen County Farm Bureau awards scholarships for qualified students
                                            from Allen County who are or will be pursuing
                                            further…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="8">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-116380"
                            class="post-116380 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/tuscarawas-county-farm-bureau-scholarship/"
                                title="Tuscarawas County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2020/04/2112x1188_Tuscarawas.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Tuscarawas County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Tuscarawas County Farm Bureau awards scholarships for qualified students
                                            from Tuscarawas County who are or will be pursuing further
                                            education.<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="8">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-86555"
                            class="post-86555 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/van-wert-county-scholarship/"
                                title="Van Wert County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2022/09/Scholarships-photo.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Van Wert County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Van Wert County Farm Bureau awards scholarships for qualified students
                                            from Van Wert County who are or will be
                                            pursuing…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="8">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-86740"
                            class="post-86740 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/washington-county-scholarship/"
                                title="Washington County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/01/cap-and-gown.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Washington County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The Washington County Farm Bureau Scholarship Fund was established by the
                                            Washington County Farm Bureau Board of Trustees to
                                            assist…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="8">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-84879"
                            class="post-84879 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/wayne-county-scholarship/"
                                title="Wayne County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2021/01/scholarship-1-1-1104x621.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Wayne County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Wayne County Farm Bureau awards scholarships to high school seniors or
                                            individuals currently enrolled in a two or four-year
                                            university….<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="8">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-87299"
                            class="post-87299 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/wood-county-scholarship/"
                                title="Wood County Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/02/scholarship-2.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Wood County Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 3/31/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>Wood County Farm Bureau offers agricultural related and non-agricultural
                                            related scholarships to eligible students.
                                            &nbsp;<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="8">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-87375"
                            class="post-87375 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/lead/"
                                title="Ohio Sheep Improvement Association LEAD Scholarship"
                                data-feathr-click-track="true" data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2021/11/OSIA_Lead_Logo.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Ohio Sheep Improvement Association LEAD Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 3/15/2024 - 6/24/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>The OSIA LEAD Council Scholarship may be awarded annually by The Ohio
                                            Sheep Improvement Association. The scholarship is given
                                            to…<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-lg-4 " data-total-posts="8">
                        <article itemscope="" itemtype="http://schema.org/Article" id="post-107821"
                            class="post-107821 ofbf_scholarship type-ofbf_scholarship status-publish has-post-thumbnail hentry">
                            <a href="https://ofbf.org/foundation/scholarships/cuyahoga-county-partnership-scholarship/"
                                title="Cuyahoga County Partnership Scholarship" data-feathr-click-track="true"
                                data-feathr-link-aids="5f4d6b09ad07d4ae5f84ecb6">
                                <header class="entry-header clearfix">
                                    <div class="image-wrapper ratio_16-9">
                                        <img width="704" height="150"
                                            src="https://ofbf.org/app/uploads/2018/01/Cuyahoga_County.jpg"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                                            sizes="(max-width: 704px) 100vw, 704px" itemprop="photo">
                                    </div>
                                    <h1 itemprop="name" class="font-medium entry-title">
                                        Cuyahoga County Partnership Scholarship </h1>
                                </header><!-- .entry-header -->
                                <div class="entry-content">
                                    <strong>
                                        <p>Apply 1/2/2024 - 7/1/2024</p>
                                    </strong>
                                    <span class="preview block mb16">
                                        <p>All Cuyahoga County high school graduating seniors are invited to apply
                                            for the Cuyahoga Farm Bureau/Cuyahoga County Fair Partnership
                                            Scholarship….<!-- AddThis Advanced Settings generic via filter on get_the_excerpt --><!-- AddThis Share Buttons generic via filter on get_the_excerpt --><!-- AddThis Related Posts generic via filter on get_the_excerpt -->
                                        </p>
                                    </span>
                                    <!--<button class="btn btn-primary btn-block mt16">Apply Online</button>-->
                                </div><!-- .entry-content -->
                            </a>
                        </article>
                    </div>
                </div><br><br>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="scholarship-filter-modal" tabindex="-1" role="dialog"
    aria-labelledby="scholarship-filter-modal-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <p class="h4 modal-title" id="scholarship-filter-modal-label">Filter options</p>
            </div>
            <div class="modal-body">
                <div>
                    <div>
                        <h6 class="my16">Gender</h6>
                        <label for="scholarship-male" title="Male" class="btn btn-ofbf-default btn-block text-left">
                            <input type="checkbox" name="ofbf-scholarship-gender-types[]" id="scholarship-male"
                                value="male">
                            Male </label>
                        <label for="scholarship-female" title="Female" class="btn btn-ofbf-default btn-block text-left">
                            <input type="checkbox" name="ofbf-scholarship-gender-types[]" id="scholarship-female"
                                value="female">
                            Female </label>
                    </div>
                    <div>
                        <h6 class="my16">Membership</h6>
                        <label for="scholarship-ohio-farm-bureau" title="Ohio Farm Bureau"
                            class="btn btn-ofbf-default btn-block text-left">
                            <input type="checkbox" name="ofbf-scholarship-membership-types[]"
                                id="scholarship-ohio-farm-bureau" value="ohio farm bureau">
                            Ohio Farm Bureau </label>
                        <label for="scholarship-ohio-sheep-improvement" title="Ohio Sheep Improvement"
                            class="btn btn-ofbf-default btn-block text-left">
                            <input type="checkbox" name="ofbf-scholarship-membership-types[]"
                                id="scholarship-ohio-sheep-improvement" value="ohio sheep improvement">
                            Ohio Sheep Improvement </label>
                    </div>
                    <div>
                        <h6 class="my16">School Year</h6>
                        <label for="scholarship-entering-college-training" title="Entering College / Training"
                            class="btn btn-ofbf-default btn-block text-left">
                            <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                id="scholarship-entering-college-training" value="entering college / training">
                            Entering College / Training </label>
                        <label for="scholarship-first-year" title="First Year"
                            class="btn btn-ofbf-default btn-block text-left">
                            <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                id="scholarship-first-year" value="first year">
                            First Year </label>
                        <label for="scholarship-second-year" title="Second Year"
                            class="btn btn-ofbf-default btn-block text-left">
                            <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                id="scholarship-second-year" value="second year">
                            Second Year </label>
                        <label for="scholarship-third-year" title="Third Year"
                            class="btn btn-ofbf-default btn-block text-left">
                            <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                id="scholarship-third-year" value="third year">
                            Third Year </label>
                        <label for="scholarship-graduate-school" title="Graduate School"
                            class="btn btn-ofbf-default btn-block text-left">
                            <input type="checkbox" name="ofbf-scholarship-school-year-types[]"
                                id="scholarship-graduate-school" value="graduate school">
                            Graduate School </label>
                    </div>
                    <div>
                        <h6 class="my16">County</h6>
                        <select id="county" class="form-control" name="ofbf-scholarship-counties[]" size="6"
                            title="Hold the CTRL key and then click to select multiple or deselect" multiple="">
                            <option value="all" "="">All counties</option>
    <option value=" 001" "="">Adams</option>
    <option value=" 002" "="">Allen</option>
    <option value=" 003" "="">Ashland</option>
    <option value=" 004" "="">Ashtabula</option>
    <option value=" 005" "="">Athens</option>
    <option value=" 006" "="">Auglaize</option>
    <option value=" 007" "="">Belmont</option>
    <option value=" 008" "="">Brown</option>
    <option value=" 009" "="">Butler</option>
    <option value=" 010" "="">Carroll</option>
    <option value=" 011" "="">Champaign</option>
    <option value=" 012" "="">Clark</option>
    <option value=" 013" "="">Clermont</option>
    <option value=" 014" "="">Clinton</option>
    <option value=" 015" "="">Columbiana</option>
    <option value=" 016" "="">Coshocton</option>
    <option value=" 017" "="">Crawford</option>
    <option value=" 018" "="">Cuyahoga</option>
    <option value=" 019" "="">Darke</option>
    <option value=" 020" "="">Defiance</option>
    <option value=" 021" "="">Delaware</option>
    <option value=" 022" "="">Erie</option>
    <option value=" 023" "="">Fairfield</option>
    <option value=" 024" "="">Fayette</option>
    <option value=" 025" "="">Franklin</option>
    <option value=" 026" "="">Fulton</option>
    <option value=" 027" "="">Gallia</option>
    <option value=" 028" "="">Geauga</option>
    <option value=" 029" "="">Greene</option>
    <option value=" 030" "="">Guernsey</option>
    <option value=" 031" "="">Hamilton</option>
    <option value=" 032" "="">Hancock</option>
    <option value=" 033" "="">Hardin</option>
    <option value=" 034" "="">Harrison</option>
    <option value=" 035" "="">Henry</option>
    <option value=" 036" "="">Highland</option>
    <option value=" 037" "="">Hocking</option>
    <option value=" 038" "="">Holmes</option>
    <option value=" 039" "="">Huron</option>
    <option value=" 040" "="">Jackson</option>
    <option value=" 041" "="">Jefferson</option>
    <option value=" 042" "="">Knox</option>
    <option value=" 043" "="">Lake</option>
    <option value=" 044" "="">Lawrence</option>
    <option value=" 045" "="">Licking</option>
    <option value=" 046" "="">Logan</option>
    <option value=" 047" "="">Lorain</option>
    <option value=" 048" "="">Lucas</option>
    <option value=" 049" "="">Madison</option>
    <option value=" 050" "="">Mahoning</option>
    <option value=" 051" "="">Marion</option>
    <option value=" 052" "="">Medina</option>
    <option value=" 053" "="">Meigs</option>
    <option value=" 054" "="">Mercer</option>
    <option value=" 055" "="">Miami</option>
    <option value=" 056" "="">Monroe</option>
    <option value=" 057" "="">Montgomery</option>
    <option value=" 058" "="">Morgan</option>
    <option value=" 059" "="">Morrow</option>
    <option value=" 060" "="">Muskingum</option>
    <option value=" 061" "="">Noble</option>
    <option value=" 062" "="">Ottawa</option>
    <option value=" 063" "="">Paulding</option>
    <option value=" 064" "="">Perry</option>
    <option value=" 065" "="">Pickaway</option>
    <option value=" 066" "="">Pike</option>
    <option value=" 067" "="">Portage</option>
    <option value=" 068" "="">Preble</option>
    <option value=" 069" "="">Putnam</option>
    <option value=" 070" "="">Richland</option>
    <option value=" 071" "="">Ross</option>
    <option value=" 072" "="">Sandusky</option>
    <option value=" 073" "="">Scioto</option>
    <option value=" 074" "="">Seneca</option>
    <option value=" 075" "="">Shelby</option>
    <option value=" 076" "="">Stark</option>
    <option value=" 077" "="">Summit</option>
    <option value=" 078" "="">Trumbull</option>
    <option value=" 079" "="">Tuscarawas</option>
    <option value=" 080" "="">Vinton</option>
    <option value=" 081" "="">Van Wert</option>
    <option value=" 083" "="">Warren</option>
    <option value=" 084" "="">Washington</option>
    <option value=" 085" "="">Wayne</option>
    <option value=" 086" "="">Williams</option>
    <option value=" 087" "="">Wood</option>
    <option value=" 088" "="">Wyandot</option>
    </select>
    </div>
    </div>
    <input class=" btn btn-primary btn-block mt16" type="submit" value="Filter" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ofbf.org/app/themes/ofbf/dist/js/loadmore.js"></script>
    </div>


    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>