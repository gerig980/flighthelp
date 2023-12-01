<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Kompensim per vonesa fluturimi">
    <meta name="keywords"
        content="Anullim fluturimi, Shtyrje fluturimi, Vonesa fluturimi,Kompensim fluturimi,kompani ajrore, bileta">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/css/form-style.css') }}" />
    <title>Privacy Statement</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img class="logo"
                    src="{{ URL::asset('frontend/assets/images/skyrights/skyrightslogo.png') }}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li><a class="nav-link" href="#whyus">{{__('home.why')}} </a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">{{__('home.about')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('ourfee') }}">{{__('home.ourfee')}}</a></li>
                        <div class="dropdown ms-1 topbar-head-dropdown header-item">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(app()->getLocale() == 'al')
                                AL <span class="fi fi-al"></span>

                                @else
                                EN <span class="fi fi-gb"></span>
                                @endif
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                @if(app()->getLocale() == 'en')
                                <a href="locale/en" class="dropdown-item notify-item language py-2 selected"
                                    data-lang="en" title="English">
                                    <span class="fi fi-gb "></span>
                                    <span class="align-middle">English</span>
                                </a>
                                <a href="locale/al" class="dropdown-item notify-item language py-2 " data-lang="al"
                                    title="Albanian">
                                    <span class="fi fi-al "></span>
                                    <span class="align-middle">Albanian</span>
                                </a>
                                @elseif(app()->getLocale() == 'al')
                                <a href="locale/en" class="dropdown-item notify-item language py-2 " data-lang="en"
                                    title="English">
                                    <span class="fi fi-gb "></span>
                                    <span class="align-middle">English</span>
                                </a>
                                <a href="locale/al" class="dropdown-item notify-item language py-2 selected"
                                    data-lang="al" title="Albanian">
                                    <span class="fi fi-al "></span>
                                    <span class="align-middle">Albanian</span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="section-terms">
        <div class="container">

            <div class="col-lg-8" style="margin: auto">
                <h2 class="terms-head">Privacy Statement</h2>
                <p class="terms-desc">We view data privacy as a fundamental component of doing business. Our Privacy
                    Statement and practices are focused on processing personal data appropriately and lawfully, while
                    providing confidentiality, integrity and availability.<br><br>
                    This Privacy Statement applies to www.Sky-rights.com, owned and operated by Skyrights’s primary
                    operational entity, Skyrights. For the purpose of this Privacy Statement, the terms “Skyrights”,
                    “we”, “us”, or “our”, refers to the whole company group or each of the companies as the case may
                    be.<br><br>
                    This Privacy Statement represents the full online privacy policy applicable to our activities. The
                    Privacy Statement explains the types of information we collect, how we use, share, and secure the
                    information you provide. It also describes your choices regarding use, access and correction of your
                    personal data.<br><br>
                    We process personal data within the EU. Our activities are governed in accordance with the General
                    Data Protection Regulation (EU) 2016/679 (the “GDPR”), which is a directly binding legislative act.
                    The GDPR protects fundamental rights and freedoms of natural persons and in particular their right
                    to the protection of personal data.<br><br>
                    Skyrights is considered to be the data controller and will determine the purposes and means of the
                    processing of personal data.
                </p>
                <h3 class="terms-use">Definitions</h3>
                <p class="terms-desc">In this Privacy Statement, unless otherwise defined herein, the capitalized terms
                    below shall have the same meaning as in our Terms And Conditions.
                </p>
                <h5 class="use-service">Personal data</h5>
                <p class="terms-desc">Personal data means any information relating to an identified or identifiable
                    natural person. Personal data includes all types of information that directly or indirectly identify
                    a person, such as names, dates of birth, addresses, e-mail addresses, telephone numbers etc.
                </p>
                <h3 class="terms-use mt-5">Principles</h3>
                <p class="terms-desc mt-3">
                    Our Privacy Statement is based on the following data protection principles:
                    The processing of personal data shall take place in a lawful, fair and transparent way;<br><br>
                    The collection of personal data shall only be performed for specified, explicit and legitimate
                    purposes and not further processed in a manner that is incompatible with those purposes;<br><br>
                    The collection of personal data shall be adequate, relevant and limited to what is necessary in
                    relation to the purpose for which they are processed;<br><br>
                    The personal data shall be accurate and where necessary, kept up to date;<br><br>
                    Every reasonable step shall be taken to ensure that personal data that are inaccurate having regard
                    to the purposes for which they are processed, are erased or rectified without delay;<br><br>
                    Personal data shall be kept in a form which permits identification for no longer than it is
                    necessary for the purpose for which the personal data are processed;<br><br>
                    All personal data shall be kept confidential and stored in a manner that ensures appropriate
                    security;<br><br>
                    Personal data shall not be shared with third parties unless the transfer is necessary in order for
                    Skyrights to deliver the services in the Agreement;<br><br>
                    You have the right to request access to and rectification or erasure of personal data, or
                    restriction of processing, or to object to processing as well as the right of data portability.
                </p>
                <h3 class="terms-use mt-5">Collection and Use of personal data
                </h3>
                <p class="terms-desc">
                    If you would like to benefit from our services and submit information to us, you may be asked to
                    provide personal data in order for us to operate and improve our business and services. Personal
                    data may be submitted via our website, email, other electronic or software solutions supported by
                    us, postal service or phone. All personal data is collected in accordance with the GDPR. We will
                    process personal data only to the extent required for a specified, explicit and legitimate purpose
                    or for a purpose required by law in places where we operate.<br><br>
                    We primarily collect personal data such as names, dates of birth, addresses, e-mail addresses,
                    telephone numbers, passports/IDs and national identification numbers. We collect this personal data
                    for the purpose of delivering our Eligibility Service, Information Service and Justice as a Service
                    in accordance with the Agreement. This is the core activity of Skyrights as a business.<br><br>
                    Furthermore, we collect personal data for other purposes such as statistics, administration and
                    communication, IT and security administration, physical security, authentication and authorization
                    systems, support systems, collaboration of internal projects and organizational teams and
                    activities.<br><br>
                    We purchase flight data from third parties, e.g. information on delayed or cancelled flights within
                    a given time etc. This information is non-personal data, which we combine with personal data. This
                    Eligibility Service is only used to inform about the likelihood of having an eligible Claim. We will
                    provide our Justice as a Service for eligible Claims on request.
                </p>
                <h3 class="terms-use mt-5">Use of personal data
                </h3>
                <p class="terms-desc">
                    We will use personal data for the purpose it is collected, and keep the data for no longer than
                    necessary for that purpose. We may retain your information for as long as your account is active or
                    as needed to provide services, comply with our legal obligations or any of the purposes listed
                    above. Access to personal data is strictly limited to personnel of Skyrights and its controlled
                    subsidiaries and affiliates who have the appropriate authorization under a corporate binding
                    agreement with Skyrights, and a clear business need for the data.
                </p>
                <br><br>
                <h3 class="terms-use mt-5">Use of Cookies</h3>
                <p class="terms-desc">
                    Our website and our partners use cookies or similar technologies to ensure the best user experience
                    and to analyze trends, administer the website, track users’ movements around the website, and to
                    gather demographic information about our user base as a whole. Cookies are small text files that are
                    placed on your device to track usage patterns and record preferences. Our cookies do not contain
                    information that can directly identify persons. We gather certain information automatically by the
                    use of cookies and tracking technologies such as Internet Protocol (IP) addresses, browser type,
                    Internet Service Provider (ISP), referring/exit pages, the files viewed on our site (e.g. HTML
                    pages, graphics), operating system, date/time stamp, and/or clickstream data to analyze trends in
                    the aggregate and administer site. You can control the use of cookies at the individual browser
                    level, but if you choose to disable cookies, it may limit the use of certain features or functions
                    on our website or service.
                    For more information about our use of cookies, please also read our Cookie Policy.
                </p>
                <h3 class="terms-use mt-5">Sharing of personal data</h3>
                <p>We will only transfer the personal data to third parties under the conditions as listed below:
                    if you have given consent;<br>
                    if it is for a purpose directly related to the original purpose for which the personal data was
                    collected;<br>
                    if it is necessary for the preparation, negotiation and fulfilling the Agreement with you;<br>
                    if it is required due to legal obligation, administrative or court order;<br>
                    if it is required for the establishment or protection of legal claims or in defense of court
                    actions;<br>
                    if it is required for responding to lawful requests by public authorities, including to meet
                    national security or law enforcement requirements
                    if it serves the prevention of misuse or other illegal activities, such as deliberate attacks, to
                    ensure data security.<br>
                    Occasionally we sign up with other companies and business partners, in and outside the European
                    Economic Area, to work on our behalf, such as legal representatives, to take Legal Action, or
                    technology companies for processing and delivery of systems and technologies to enhance our products
                    and services, and we will share necessary information in these cases. Before we share personal
                    information, we enter into written agreements with the recipients which contain data protection
                    terms that safeguard your data.<br>
                    Service providers will only be permitted to obtain the personal data that they need to deliver their
                    service. We will not disclose personal data to third parties for the purpose of allowing them to
                    market their products or services to you. If you do not want us to share personal data with these
                    companies, please contact the Data Protection Officer (“DPO”) e-mail: privacy@Sky-rights.com
                </p>
                <h3 class="terms-use mt-5">Security of processing</h3>
                <p class="terms-desc">The security of your personal data is important to us. We will process personal
                    data securely, apply and maintain appropriate and generally accepted standards of technical and
                    organizational measures to protect personal data against accidental or unlawful destruction or
                    accidental loss, alteration, unauthorized disclosure or access, in particular where the processing
                    involves the transmission of data over a network, and against all other unlawful forms of
                    processing. Questions about the security of personal data, can be directed to the DPO e-mail:
                    privacy@Sky-rights.com
                </p>
                <h3 class="terms-use mt-5">Your data protection rights</h3>
                <p class="terms-desc">
                    You have the right to request access to and rectification or erasure of personal data, or
                    restriction of processing, or to object to processing as well as the right of data portability, at
                    any time. To help us keep personal data updated, we advise you to inform us of any changes or
                    discrepancies. To view and/or edit personal data, or receive information on how long we intend to
                    retain personal data or other questions related to the access of personal data, or if you would like
                    to request that we provide you with information about whether we hold, or process on behalf of a
                    third party, any of your personal data, please contact the DPO e-mail: privacy@Sky-rights.com. We
                    will respond to your request within a reasonable timeframe.
                </p>
                <h3 class="terms-use mt-5">Applying for a job</h3>
                <p class="terms-desc">
                    For job applications we use a third party recruitment tool for management purposes. When applying
                    for a job position at Skyrights personal data will be processed and controlled by Skyrights.
                    Applications shall not be stored for longer than necessary or shared with any third parties. If you
                    wish to access, rectify, or erase personal data, restriction of processing, or to object to
                    processing as well as use the right of data portability, please contact the DPO e-mail:
                    privacy@Sky-rights.com
                </p>
                <h3 class="terms-use mt-3">Marketing e-mails and Advertising Preferences</h3>
                <p class="terms-desc">
                    Upon consent we are allowed to send marketing e-mails. This specific form of consent must be freely
                    given, specific informed and unambiguous. These requirements are fulfilled when you opt-in to
                    receive marketing e-mails (actively agreed).
                    You will always have the right to object, on request and free of charge, to the processing of your
                    personal data relating for purposes of direct marketing activities without having to provide
                    specific justifications. You can do so by using the “Unsubscribe” link found in emails received from
                    us or by contacting us at privacy@Sky-rights.com. If you object, your personal data will no longer
                    be processed for direct marketing.
                    The marketing e-mails contain information which we believe may be of interest, such as the latest
                    news on our products and services.
                    We partner with a third party to display advertising on our website or to manage our advertising on
                    other sites. Our third party partner may use cookies or similar technologies in order to provide you
                    advertising based upon your browsing activities and interests. If you’re located in the European
                    Union and wish to opt out of interest-based advertising click here. Please note you will continue to
                    receive generic ads.

                </p>
                <h3 class="terms-use mt-5">Responsibility
                </h3>
                <p class="terms-desc">The Privacy Statement is under the responsibility of our Legal Team, who have the
                    overall responsibility to ensure compliance. The DPO is ensuring compliance with the Privacy
                    Statement on a daily basis and is involved in all issues related to the protection of personal data.
                    We are responsible for and will at any given time be able to demonstrate compliance with the GDPR as
                    well as our principles set out in this Privacy Statement. We shall maintain records of processing
                    activities under our responsibility containing the information required by the GDPR and where
                    applicable make the records available to the supervisory authority on request.
                    Any inquiries concerning this Privacy Statement can be directed to the DPO e-mail:
                    privacy@Sky-rights.com
                </p>
                <h3 class="terms-use mt-5">Complaint
                </h3>
                <p class="terms-desc">
                    You have the right to file a complaint concerning our processing of your personal data. All queries
                    and complaints shall be handled in a timely manner by the DPO in accordance with internal
                    procedures. Complaints can be submitted to the DPO e-mail: privacy@Sky-rights.com.
                    In the unlikely event that you consider that our processing of your personal data infringes the
                    GDPR, or any other data privacy law, you may also lodge a complaint with a supervisory authority.
                </p>
                <h3 class="terms-use mt-5">Changes to this Privacy Statement
                </h3>
                <p class="terms-desc">This Privacy Statement may be updated from time to time, e.g. due to modifications
                    of relevant legislation or changes to our corporate structure. If any material changes are made, you
                    will be notified by e-mail or by means of notice on the website prior to the change becoming
                    effective. We encourage you to periodically review this page for the latest information on our
                    privacy practices.
                </p>
            </div>
        </div>
    </div>
    <div class="section-4">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="logo">
                            <img src="{{ URL::asset('frontend/assets/images/skyrights/skyrightslogo.png') }}"
                                class="logo-footer">
                            <p class="footer-desc">SkyRights is a part of the Association of Passenger Rights Advocates
                                (APRA) whose mission is to promote and protect passengers’ rights.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        {{-- <h6>Know Your Rights</h6>
                        <ul>
                            <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                            <li><a href="">Lorem ipsum dolor sit amet.</a></li>

                        </ul> --}}
                    </div>
                    <div class="col-lg-3 col-md-2">
                        <h6>OUR COMPANY</h6>
                        <ul>
                            <li><a href="{{ route('home') }}#about">About us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-2">
                        <h6>OTHER</h6>
                        <ul>
                            <li><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>

                        </ul>
                    </div>
                </div>
                <div class="row text-center">
                    <p class="text-center development-footer"> Copyright &copy;
                        <script
                            type="text/javascript">var year = new Date(); document.write(year.getFullYear());</script>
                        SkyRights.al</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>