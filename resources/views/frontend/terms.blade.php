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
    <title>Terms and Conditions</title>
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
                <h2 class="terms-head">Terms And Conditions</h2>
                <p class="terms-desc">These Terms and Conditions (the “Terms”) constitute the legally binding agreement
                    between a customer (“Customer” or “you”)
                    and Skyrights with regard to the provision of our Services. <br> By accepting these Terms, you agree
                    to be bound by them,
                    any additional terms applicable to our Services you have selected, and the Skyrights Privacy
                    Statement.<br>
                    <br>
                    We recommend that you do not engage with Skyrights for any of our Services until you have read
                    and understood these Terms, the Privacy Statement, and Our Fees. If you have any questions, doubts,
                    or concerns, please contact us at info@Sky-rights.com or check out our FAQs.
                </p>
                <h3 class="terms-use">1. USE AND NATURE OF OUR SERVICES</h3>
                <h5 class="use-service">Use of our Services</h5>
                <p class="terms-desc">By accepting these Terms and using our Services you affirm you are (i) a natural
                    person over the age of legal majority in your country of residence who can enter into legally
                    binding agreements under applicable law, and (ii) authorized to enter into these Terms and any
                    Service specific terms on your own behalf, and, where applicable, on behalf of other passengers.
                </p>
                <h5 class="use-service">Nature of our Services</h5>
                <p class="terms-desc">The Skyrights Group provides services to help air passengers manage the impact of
                    flight disruption.
                    These services may change from time to time, but include facilitating the processing of Claims on
                    behalf
                    of passengers before Airlines enforcing air passengers' rights (including, but not limited to,
                    claiming compensation)
                    arising from delayed or canceled flights and/or other related issues.<br><br>
                    Skyrights is not a law firm; and is not acting as a lawyer on your behalf or providing you directly
                    with legal services.
                    Nevertheless, during the provision of our Services and in accordance with the Terms and Forms,
                    Skyrights may engage with
                    contract Lawyer​​s or contract attorneys for the purpose of providing our Services.<br><br>
                    If you have purchased an insurance product through Skyrights, Skyrights operates as a registered
                    insurance agent in accordance
                    with German regulation. Skyrights does not act as a risk bearer itself, but only assumes a function
                    as an intermediary.
                    These Terms do not apply to your purchase of the insurance product. Please refer to the policy
                    documents for the terms that cover
                    the insurance product you have purchased, including the name of the Skyrights Third Party who is
                    providing the coverage in the event
                    of damage.
                </p>
                <h3 class="terms-use">2. DEFINITIONS</h3>
                <div class="terms-desc mt-3">
                    In these Terms, the following defined terms shall have the meanings stated below:
                    “AH Signature” means a signature provided by you electronically via the online Skyrights
                    signing tool, and considered the equivalent of
                    a handwritten signature. In the event you are unable to provide a signature online,
                    a handwritten or scanned signature may be provided. <br><br>
                    “Skyrights” means Skyrights, a company based in Albania with its registered office at c/o Coolab,
                    Rruga e Kavajes..
                    “Skyrights Group Company” means any entity that is, directly or indirectly, controlled by Skyrights
                    or which controls Skyrights,
                    whether through the ownership of share capital and/or voting securities, by contract, or
                    otherwise.<br><br>
                    “Skyrights Third Party” means a person or entity under contract with Skyrights to assist in the
                    provision of our Services either
                    directly or indirectly to the Customer.
                    “Airline” means the commercial airline that operated the flight for which our Services may be
                    provided.<br><br>
                    “Air Passenger Rights Regulations” means any law, regulation, directive, international convention,
                    or similar,
                    whether issued on a state, federal, European Union, national, international, or regional level, and
                    case law,
                    upon which a consumer may claim monetary compensation, damages, or refunds in the event of
                    overbooked, delayed,
                    canceled, or otherwise disrupted flights or luggage-related issues. These may include, without
                    limitation, general
                    consumer protection laws, “EC 261”: Regulation (EC) No. 261/2004 of the European Parliament and of
                    the Council dated
                    11 February 2004; “UK 261”: The Air Passenger Rights and Air Travel Organisers’ Licensing
                    (Amendment) (EU Exit) Regulations 2019;
                    Turkish “SHY” passenger regulation, Canadian Transportation Act: Air Passenger Protection
                    Regulations, and “MC 99”: The Montreal Convention 1999. <br><br>
                    “Assignment Agreement” means the document, in electronic or other format, requested by Skyrights on
                    a case-by-case basis, whereby you and Skyrights agree
                    that Skyrights shall become the owner of the Claim, subject to the terms of the Assignment
                    Agreement, in order to collect and receive payments.<br><br>
                    “Authority Document” means the document which authorizes Skyrights and/or an Skyrights Group Company
                    or Skyrights Third Party to act on your behalf with regard to your Claim.
                    The document may be in many shapes and forms, due to various jurisdictional requirements, including,
                    but not limited to, a power of attorney or certificate of authorization.<br><br>
                    “Claim” means any claim against an Airline for monetary compensation, damages, or refund in
                    accordance with Air Passenger Rights Laws or an Airline’s goodwill.<br><br>
                    “Compensation Service” means the service whereby Skyrights, either by itself or together with its
                    Group Companies and Skyrights Third Parties, pursues a Claim on your behalf. This may include Legal
                    Action.<br><br>
                    “Customer” means you; the person who has accepted these Terms. The Customer may also be referred to
                    as “Client” on some documents.<br><br>
                    “Discretion” means the process by which Skyrights has the right to make decisions with regards to
                    your Claim; as described further below.<br><br>
                    “Eligible Claim” means a Claim that Skyrights has assessed, within its sole Discretion, as a Claim
                    that Skyrights is willing to pursue on your behalf by providing you with the Compensation Service.
                    <br><br>
                    “Eligibility Service” means the service provided by Skyrights to determine whether your Claim is an
                    Eligible Claim. <br><br>
                    “Flight Compensation” means the total amount of money, or other receivables (where accepted by
                    Skyrights in its Discretion),
                    paid by an Airline in relation to a Claim as compensation, refund, damages, settlement, a gesture of
                    goodwill, or otherwise,
                    to you or Skyrights as a result of the Compensation Services. For the avoidance of doubt, Flight
                    Compensation does not include
                    any payments or reimbursements of Legal Expenses, collection cost, interest, or similar, which have
                    been pre-financed
                    by Skyrights or result from Skyrights's intervention. <br><br>
                    “Fellow Passenger” means any passenger who the Customer has included in the Form for receipt of
                    Flight Compensation,
                    such as a family member or passenger that traveled together with the Customer on the Airline.
                    <br><br>
                    “Form” means the Assignment Form, Authority Document, power of attorney, or other documents which
                    enable
                    the Skyrights Group and Skyrights Third Parties to provide the Customer with our Services. Skyrights
                    will
                    determine which Form is the most appropriate on a Claim by Claim basis. <br><br>
                    “Goodwill Claim” is where Skyrights makes a request to the Airline, in absence of developed Air
                    Passenger Rights Regulations,
                    for Flight Compensation. The Flight Compensation for Goodwill Claims may be monetary or in kind,
                    such as a flight voucher,
                    fidelity points, or air miles. <br><br>
                    “Information Service” means Skyrights's provision of flight information, airline information,
                    airport information,
                    other travel-related information, and information about air passenger rights under applicable Air
                    Passenger Rights Regulations.
                    The information may be either specific to the Customer’s flight or non-flight-specific general
                    information.
                    The information will be delivered through electronic communication, including email, a personalized
                    dashboard,
                    or Skyrights controlled websites. <br><br>
                    “Lawyer” means any attorney at law and/or law firm that Skyrights has contracted with for Legal
                    Action or other legal services with regard to a Claim.<br><br>
                    “Legal Action” means the preparation and filing of a Claim for judicial action, either by filing the
                    Claim in court or before a government body, such as a national enforcement body (NEB), or handing
                    over a Claim to a Lawyer,
                    for presenting the Claim directly to the Airline or for judicial action, or moving the Claim from
                    one jurisdiction to another. <br><br>
                    “Legal Action Fee” means the fee listed in Our Fees that Skyrights charges you when you receive
                    Flight Compensation for the provision of the Compensation Service that included Legal Action.
                    The Legal Action Fee is paid in addition to the Service Fee. <br><br>
                    “Legal Expenses” means all fees incurred by, paid by, or awarded to you or the Skyrights Group in
                    furtherance of a Legal Action, including, but not limited to, attorneys fees, application fees,
                    court and clerk costs, translation costs, bailiff’s costs, extrajudicial collection, or any other
                    related fees and expenses. <br><br>
                    “Member” means a Customer who has purchased an Skyrights Plus Membership.
                    “Membership Period” means the period of time when an Skyrights Plus Member is entitled to use the
                    Skyrights Plus Services.
                    For a yearly Member this is from the date and time of purchase for one full year, unless renewed.
                    For a single booking
                    this is from the date and time of purchase and continues for a limited time thereafter (as further
                    described in these Terms)
                    and is only applicable to the flight for which the Membership was purchased. <br><br>
                    “Our Fees” means the fees and charges listed here specifying accepted currencies, methods of payment
                    which are payable by you to Skyrights. In addition to Our Fees,
                    Skyrights may be entitled to Legal Expenses from the Airline as described in these Terms. <br><br>
                    “Reassignment Form” means the document that you and Skyrights sign assigning the rights of your
                    Claim back to you,
                    or authorizing your Claim back to you. <br><br>
                    “Service Fee” means the fee listed in Our Fees that Skyrights charges you when you receive Flight
                    Compensation
                    following the provision of the Compensation Service. <br><br>
                    “Services” means any of our services, including, without limitation, the Eligibility Service,
                    Compensation Service,
                    Information Service, or Skyrights Plus Services provided by Skyrights or an Skyrights Third Party to
                    you in accordance
                    with these Terms and any additional terms specific to the Services selected by you.
                    “Withdrawal” means the process set forth in the Withdrawal and Termination section by
                    which the Customer withdraws from either the Compensation Service or the Membership or whereby
                    Skyrights withdraws from the Compensation Service.
                    “VAT” means any system of value added tax.
                    <h3 class="terms-use mt-5">3. THE ELIGIBILITY AND INFORMATION SERVICES</h3>
                    <h3 class="terms-use mt-3">Getting Started</h3>
                    <p class="terms-desc">
                        After you have accepted these Terms, Skyrights will provide you the Eligibility Service and
                        Information Service to determine whether Skyrights believes, in its sole Discretion, you have an
                        Eligible Claim.
                        If Skyrights makes this determination, Skyrights will provide you with the Form. The purpose of
                        the Form is to permit Skyrights to engage on your behalf either directly or indirectly with
                        Lawyers, the Airline or its representatives, and/or courts in order to obtain Flight
                        Compensation.
                        Provision of the Information Service or Eligibility Service by Skyrights shall not constitute a
                        binding offer to provide you with any other Services, including, without limitation, the
                        Compensation Service.
                    </p>
                    <h3 class="terms-use mt-5">4. COMPENSATION SERVICE</h3>
                    <h3 class="terms-use mt-3">Submitting the Form</h3>
                    <p class="terms-desc">
                        Prior to commencing the Compensation Service, you will be required to:
                        authorize your AH Signature on the Form which will specify that you:
                        agree to receive the Compensation Service.
                        acknowledge that Skyrights will only claim Flight Compensation that is monetary, and that it is
                        in Skyrights’s sole Discretion to accept travel vouchers and/or other services as Flight
                        Compensation and that Airline offers for non-monetary compensation may be treated by Skyrights
                        as an Airline’s refusal of Flight Compensation.
                        affirm that you are not pursuing the Claim by any other means either directly or through any
                        other third parties and no legal dispute is directly or indirectly pending or expected between
                        you and the Airline on the same matter.
                        <br><br>
                        If you have any existing engagement or assignments with regard to your Claim, you must cancel
                        these immediately.
                        If you have not done these steps, you will not receive the Compensation Service.
                        Upon receipt and review of the Form, Skyrights will confirm to you in writing, either by email
                        or other written form, that Skyrights will commence the Compensation Service. Skyrights may
                        decide, in its sole Discretion, whether to proceed with or reject the provision of the
                        Compensation Service, or may request further information or documentation prior to commencement
                        of the Compensation Service.
                        <br><br>
                        After submitting the Form,
                        you may not assign the Claim to any other party as the legal title to the Claim has been
                        assigned to Skyrights.
                        you may not mandate or authorize another third party to act on your behalf concerning the same
                        Claim.
                        <br><br>
                        If you receive any direct payments or any other compensation from the Airline after entering
                        into the Compensation Agreement, you must advise Skyrights immediately. Such payments shall be
                        considered Flight Compensation and entitle Skyrights to the Service Fee, and Legal Action Fee if
                        Legal Action was taken by Skyrights prior to you having received payment from the Airline.
                        After submitting the Form, you must cease negotiations with the Airline and direct any
                        communication you have with the Airline regarding your Claim to Skyrights.
                    </p>
                    <br><br>
                    <h3 class="terms-use mt-3">Reassignment</h3>
                    <p class="terms-desc">
                        Your claim may be reassigned back to you either at your request or by Skyrights’s initiative.
                        In each case, this will be done in writing by you and Skyrights signing a Reassignment Form.
                        In the event that you have signed an Authority Document, you may Withdraw the authority given in
                        the Authority Document
                        by giving written notice to Skyrights.
                    </p>
                    <h3 class="terms-use mt-3">Withdrawal</h3>
                    <p>At any time after signing and submitting the Form, you have the right to Withdraw and/or reassign
                        your Claim as described in the Withdrawal and Termination section below.
                        Skyrights may also Withdraw from the Compensation Service as described in the Withdrawal and
                        Termination section below.
                    </p>
                    <h3 class="terms-use mt-3">Customer Representative</h3>
                    <p class="terms-desc">If you are acting as the representative or on behalf of a passenger or
                        passengers, then you shall first obtain a power of attorney to act on their behalf and produce
                        evidence of such upon request by Skyrights. For minor passengers, you shall provide their
                        complete data, including: name, birthdate of the minor, the names and signatures of the
                        custodians or legal guardians.
                    </p>
                    <h3 class="terms-use mt-3">Commencing the Compensation Services</h3>
                    <p class="terms-desc">
                        Where Skyrights has notified you in writing as stated above, Skyrights will provide the
                        Compensation Service with the intention of obtaining Flight Compensation on your behalf.
                        You will provide Skyrights with all data or information that is required for the execution of
                        the Compensation Service. You warrant that the data and information you provide is correct,
                        complete, and true, and, where applicable, with the consent of Fellow Passengers. Flight data
                        and information may be submitted to Skyrights via the website, email, other electronic or
                        software solutions supported by Skyrights, or phone.
                        Skyrights may request that you provide additional information such as:
                        passenger name, surname, email address, phone number, type of disruption (delay, canceled
                        flight, or denied boarding/overbooking), reason for delay (if possible), length of delay, name
                        of the Airline, flight number, date of the flight, place of departure and arrival, and
                        description of incident.
                        an additional Form which may be sent to Skyrights via the web form or any other electronic
                        solutions supported by Skyrights, or using email, or postal service.
                        You acknowledge that failure to provide Skyrights with any such information will negatively
                        impact Skyrights’s ability to provide the Compensation Service.
                    </p>
                    <h3 class="terms-use mt-3">Flight Compensation and Legal Action</h3>
                    <p class="terms-desc">
                        On receiving your Form, Skyrights will prepare a request for payment and send it to the Airline
                        and handle all further correspondence. For this part of the Compensation Service, if Flight
                        Compensation is paid, you will be required to pay Skyrights the Service Fee.
                        If the Airline fails to pay Flight Compensation within a reasonable period after being notified
                        by Skyrights, or should Skyrights, in its sole Discretion, assess that the Airline is unlikely
                        to respond to a request for payment, Skyrights may initiate Legal Action.
                        In the event that Legal Action is initiated and Flight Compensation is paid, you will be
                        required to pay Skyrights the Legal Action Fee in addition to the Service Fee.
                        In the event that a Lawyer is used for Legal Action, you expressly consent to Skyrights
                        providing the Lawyer access to all the data communicated to Skyrights in order for the Lawyer to
                        take Legal Action.
                        Where a separate Form or other additional documents are required to undertake Legal Action, you
                        undertake to provide such additional documents. In cases where you have signed an Assignment
                        Agreement, and later sign an Authority Document (or similar), you accept that the Authority
                        Document assigns the Claim back to you.
                        If Skyrights or the Lawyer commences Legal Action to pursue a Claim, Skyrights will cover any
                        Legal Expenses incurred during the Legal Action, even if the Legal Action is lost. In the event
                        that the lawsuit is won or a settlement has been reached between the Airline and Skyrights,
                        Skyrights may cover any costs incurred that are not covered by the Airline. When applicable, if
                        a lawsuit is won, a claim for reimbursement of Legal Expenses will be put forward. The same
                        applies to Legal Expenses regardless of whether the legal proceedings are performed by Skyrights
                        or a Lawyer. For the avoidance of doubt, all reimbursements, including Legal Expenses and
                        interest, shall belong to Skyrights.
                        You agree and acknowledge that the final outcome of Legal Action and obtaining Flight
                        Compensation may take years.
                    </p>
                    <h3 class="terms-use mt-3">Settlements</h3>
                    <p class="terms-desc">
                        Skyrights, in its sole Discretion, may offer to or accept from the Airline individual or
                        collective Claim settlements for Flight Compensation.
                        You acknowledge that the decision to accept a settlement from the Airline for Flight
                        Compensation rests solely with Skyrights, since you have assigned the Claim to Skyrights. In
                        case Skyrights acts on your behalf in accordance with an Authority Document, you authorize
                        Skyrights to accept or reject settlement offers based on Skyrights’s Discretion, without the
                        need for your additional consent.
                        Skyrights may pursue the assigned Claim in its own name, with or without the help of a Lawyer.
                        Where appropriate and/or legally necessary, Skyrights may reassign the Claim to you and you
                        agree to authorize again Skyrights with an Authority Document to deliver the Compensation
                        Service and collect and/or receive payments.
                        You are responsible for providing the correct data to proceed with the Compensation Service.
                        Skyrights shall not be held liable for any incorrect communications, documents, incorrect
                        data/information, and fraudulent conduct shared by you. In the event that you provided
                        deliberately incorrect information or data, in addition to any other recourse Skyrights may have
                        under these Terms, you will, upon request by Skyrights, reimburse Skyrights for the Legal
                        Expenses.
                    </p>
                    <h3 class="terms-use mt-3">Goodwill Claims
                    </h3>
                    <p class="terms-desc">In jurisdictions where the Air Passenger Rights Regulations may be less
                        developed and obtaining Flight Compensation less likely, upon your decision to proceed,
                        Skyrights may attempt to obtain Flight Compensation through a Goodwill Claim.</p>
                    <h3 class="terms-use mt-3">How Skyrights makes decisions with regards to your Claim
                    </h3>
                    <p class="terms-desc">
                        Skyrights uses its Discretion in making decisions regarding whether to pursue your Claim during
                        the Eligibility Service or at any time during the Compensation Service, including whether to
                        pursue your Claim with Legal Action, to make or accept a settlement offer from the Airline, to
                        withdraw the Claim, or to pursue a Goodwill Claim.
                        Skyrights’s Discretion is based on a number of factors including, without limitation, the
                        applicable Air Passenger Rights Regulations, the jurisdictions and court systems in which we may
                        pursue your Claim, Legal Expenses and the likelihood that Skyrights may obtain or be obliged to
                        pay Legal Expenses, the Airline’s historic behavior with similar Claims, the average length of
                        time it may take to obtain Flight Compensation or a favorable ruling through Legal Action, the
                        quality of the information that you have provided Skyrights with regards to your Claim, any
                        factual information that may make obtaining Flight Compensation difficult, advice from Lawyers,
                        and Skyrights’s experience with similar Claims.
                    </p>
                    <h3 class="terms-use mt-5">5. Skyrights PLUS MEMBERSHIP
                    </h3>
                    <h3 class="terms-use mt-3">Signing up for Skyrights Plus Membership
                    </h3>
                    <p class="terms-desc">You may join the Membership by paying the Skyrights Plus Membership Fee (see
                        Our Fees) or by obtaining Skyrights Plus Membership through a Skyrights Third Party that is
                        authorized by Skyrights to make Membership available to you.
                    </p>
                    <h3 class="terms-use mt-5">6. FEES AND PAYMENTS
                    </h3>
                    <h3 class="terms-use mt-3">Our Fees
                    </h3>
                    <p class="terms-desc">
                        Our Fees is the price list that details all the fees, charges, and prices that Skyrights
                        receives in consideration for providing you with our Products and Services.
                        Skyrights provides you with the Eligibility Service and Information Service free of charge.
                        Skyrights provides Compensation Service free of charge except where Skyrights is successful in
                        obtaining Flight Compensation for you.
                        If Skyrights is successful, Skyrights will transfer the Flight Compensation to you, subject to
                        Our Fees.
                        If you have provided Skyrights with incorrect or incomplete payment information and the amounts
                        we have paid to you for Flight Compensation have been returned to Skyrights, Skyrights will make
                        reasonable efforts to contact you, including email reminders and other means of communication
                        provided by you to Skyrights. If you do not respond to provide correct payment information,
                        Skyrights shall be entitled to keep the part of the Flight Compensation that otherwise should
                        have been transferred to the Customer.
                        In the event that the Flight Compensation and/or Legal Expenses, interest, or similar are
                        transferred directly from the Airline to you, you will (i) as soon as reasonably practicable,
                        inform Skyrights of the payment, and (ii) be invoiced and liable to pay Our Fees, Legal
                        Expenses, interest, or similar, if any, to Skyrights without unreasonable delay.
                        When Skyrights has paid the Flight Compensation in accordance with the instruction of and method
                        selected by the Customer, Skyrights shall not be liable for:
                        checks, prepaid debit cards, credit cards, and similar lost in transit to the Customer;
                        any effect of the Customer giving wrong bank account information, wrong address, or similar,
                        including, but not limited to, the Flight Compensation being paid to the wrong receiver. If
                        Flight Compensation has been paid to a wrong receiver at the fault of the Customer, Skyrights
                        shall not be obligated to actively reclaim it.
                        You shall not be entitled to claim any interest on the Flight Compensation during the time
                        period between when Skyrights receives it and when it is transferred to you. Skyrights reserves
                        the right to retain any interest that it has recovered from the Airline, including interest
                        recovered following Legal Action.
                        Skyrights shall not be liable for any amount of compensation, damages, or similar, if we are
                        prevented from transferring the payment to you by an event beyond Skyrights’s control,
                        including, but not limited to, strike, lock-out, labor dispute, force majeure, natural
                        disasters, war, riot, civil commotion, malicious damage, compliance with a law or governmental
                        order, rule, regulation or direction, accident, breakdown of plant or machinery, fire, flood,
                        and storm.
                        The Service Fee and the Legal Action Fee apply to any kind of settlement whenever Skyrights is
                        able to obtain Flight Compensation whether obtained through court decision, settlement with the
                        Airline, or where Skyrights has settled the Claim with the Airline jointly with other Claims.
                    </p>
                    <h3 class="terms-use mt-5">7. WITHDRAWAL AND TERMINATION
                    </h3>
                    <h3 class="terms-use mt-3">Your Right of Withdrawal of Compensation Service and Membership
                    </h3>
                    <p class="terms-desc">
                        If you qualify as a consumer under the European Union (EU), the European Economic Area (EEA),
                        and the UK consumer regulations, meaning that you are an individual who engages in a legal
                        transaction for a purpose other than your commercial or independent vocational activity, then
                        you possess a legal right of withdrawal.
                        You have the right to withdraw from the Compensation Service or Membership within 14 days from
                        the commencement of the Compensation Service or Membership for free and without the need to
                        specify any reasons. To exercise your right to Withdrawal, the Withdrawal must be communicated
                        (e.g., by letter, email, or contact form) within the 14-day period mentioned above, and it must
                        clearly state your wish to withdraw from the Compensation Service or Membership. Due to the
                        nature of the service provided, you cannot withdraw from our Compensation Service or Membership
                        if Skyrights has informed you that the Airline has accepted the Claim, as in such an event we
                        have completed the service you requested.
                        The Withdrawal shall be sent to:<br><br>
                        —----------<br><br>
                        Sample cancellation form<br><br>
                        I hereby terminate the agreement concluded by me:<br><br>
                        Skyrights Claim number:<br><br>
                        Date claim was filed:<br><br>
                        Name of customer:<br><br>
                        Address of the customer:<br><br>
                        Signature of customer:<br><br>
                        Date:<br><br>
                        —---------<br><br>
                        *End of sample text
                        Following the 14-day Withdrawal period, you may Withdraw your acceptance of the Compensation
                        Service or Membership subject to the Terms.
                    </p>
                    <h3 class="terms-use mt-3">Withdrawal of Compensation Service by Skyrights
                    </h3>
                    <p class="terms-desc">Skyrights has the right to withdraw from the Compensation Service in the event
                        of identifying obstacles beyond the control of Skyrights that prevent Skyrights from obtaining
                        Compensation for you. These may include, but are not limited to, Airline insolvency, court
                        closure, lockdown measures, low Flight Compensation value etc. In these cases, Skyrights shall
                        notify you of the obstacles and close your Claim. No fee will apply.
                    </p>
                    <h3 class="terms-use mt-3">Termination of the Compensation Service</h3>
                    <p class="terms-desc">The Compensation Service will terminate upon the earlier of the following to
                        occur:
                        When the Claim has been settled with the Airline, you have received the Flight Compensation, and
                        all amounts payable by you to Skyrights, if any, have been paid, or
                        Either you or Skyrights, at any time for any reason, give timely written notice of termination;
                        or
                        By Skyrights immediately where (i) you have breached your obligations under the Terms, (ii) you
                        have provided incorrect information, engaged in fraud, or engaged in activities that Skyrights
                        may reasonably suspect to be misleading or fraudulent, in which case you will not be entitled to
                        the Flight Compensation.
                        Skyrights reserves the right to claim its losses when terminating as a result of your breach.
                    </p>
                    <h3 class="terms-use mt-3">Skyrights Right to Refuse or Terminate Membership</h3>
                    <p class="terms-desc">Skyrights reserves the right to refuse the Membership to any person and, in
                        case of breach of the Terms by the Member, terminate the Membership at any time.
                    </p>
                    <h3 class="terms-use mt-3">Consequence of Termination and Withdrawal of the Compensation Service
                    </h3>
                    <p class="terms-desc">Upon termination of the Compensation Services for any reason, you shall
                        immediately pay any fees payable to Skyrights under the Terms, including without limitation in
                        the case of Customer Withdrawal after the Airline confirms the payment of Flight Compensation.
                        Skyrights will not automatically reassign your Claim to you upon Withdrawal or termination. You
                        must request Skyrights to reassign your Claim, and Skyrights will send you the Reassignment Form
                        for you to sign.
                        In the event that you Withdraw from the Compensation Service or Skyrights terminates due to your
                        breach of the Terms, Skyrights shall be entitled to obtain the following from you:
                        Skyrights’s Legal Expenses, if Skyrights has commenced a Legal Action; or,
                        An amount equal to the Legal Expenses, if, following the withdrawal, Skyrights is requested by a
                        Judicial Authority to pay the Legal Expenses due to the Airline; or,
                        Skyrights’s Service Fee, and, where there was Legal Action, the Legal Action Fee, where you
                        subsequently obtained Flight Compensation directly from the Airline.
                    </p>
                    <h3 class="terms-use mt-5">8. DATA PROTECTION
                    </h3>
                    <p class="terms-desc">All personal data collected during the provision of our Services, or connected
                        to the provision of our Services, will be subject to the Skyrights Privacy Statement.
                    </p>
                    <h3 class="terms-use mt-5">9. GENERAL PROVISIONS
                    </h3>
                    <h3 class="terms-use">Third Parties Services</h3>
                    <p class="terms-desc">Our Services may contain links to third-party providers’ websites or
                        interfaces to book services via third parties. Such websites/services are controlled by
                        independent parties under which Skyrights has no control. Although our Services may provide
                        information about or access to third-party suppliers and facilitate use of these third-party
                        providers, such Services do not constitute any sponsorship, affiliation, or endorsement of these
                        third-party providers.
                        We remind you that by accessing third-party websites/services or using third-party services made
                        available through our Services, you agree to be bound by these third parties’ policies and terms
                        and conditions. We encourage you to review these terms and conditions and policies and to use
                        them at your own risk.
                        You hereby acknowledge and agree that Skyrights will not be a party to any agreement entered
                        with any such third party and will not be responsible for any errors or omissions in such third
                        parties’ services or for any direct or indirect claim, breach, loss or damage caused or
                        allegedly caused by or in connection with the access or use of such third parties’ services.
                    </p>
                    <h3 class="terms-use mt-3">Disclaimer of Warranties and Limitation of Liability</h3>
                    <p class="terms-desc">Skyrights has many sources of information and data that make up the
                        information and services available under these Terms. Although Skyrights tries to provide
                        accurate information, our Services may be subject to omissions and errors. Our Services are
                        provided ‘as is’. To the fullest extent permitted by law, Skyrights disclaims all warranties,
                        either express or implied, statutory or otherwise, including but not limited to the implied
                        warranties of merchantability, non-infringement of third party’s rights, accuracy of
                        information, and fitness for a particular purpose. Skyrights makes no representations or
                        warranties that our Services will result in Flight Compensation, meet your requirements or be
                        secure, free of viruses or other harmful components, timely, uninterrupted, accurate, complete,
                        or reliable. You acknowledge and agree that your use of our Services is at your own risk. To the
                        fullest extent permitted by applicable law, Skyrights and its Group Companies will not be liable
                        for any direct, indirect, punitive, incidental, special, consequential losses or damages, or any
                        loss of income, profits, goodwill arising out of or in any way related to i) our Services, ii)
                        delay or inability to access our Services; iii) virus, bugs, trojan horses, software,
                        information, third parties’ linked websites, services obtained through the use of our Services,
                        iv) or any other matter relating to our Services, whether based on contract, tort, strict
                        liability, or otherwise, even if Skyrights, its Group Companies, or any of its suppliers has
                        been advised of the possibility of such damages.
                        These Terms do not affect any of your statutory legal rights that cannot be excluded by law. If
                        you are not satisfied with any portion of our Services or with these Terms, your sole and
                        exclusive remedy is Withdrawal in accordance with the Terms.
                    </p>
                    <h3 class="terms-use mt-3">Modifications and Entire Agreement
                    </h3>
                    <p class="terms-desc">Any new features of our Services will be subject to these Terms. Skyrights
                        reserves the right to amend sections of these Terms at any time without further notice. The
                        latest version will always be available on the Skyrights website. Please visit the Skyrights
                        Website from time to time to review the changes as they are binding to you. Your continued use
                        of our Services following the posting of changes to these Terms or other policies means you
                        accept the changes.
                        These Terms are the complete and exclusive statement relating to its subject matter and
                        supersede all prior communications (oral or in writing) between you and Skyrights.
                        You may not transfer any of your rights or obligations under these Terms without our prior
                        written consent. Skyrights may transfer any of its rights or obligations under these Terms to
                        any Skyrights Group Companies or any third party designated by Skyrights.
                    </p>
                </div>
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