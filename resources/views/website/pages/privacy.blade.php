@extends('website.layout')
@section('title', trans('website.general.privacy'))

@section('content')

    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">@lang('website.general.privacy')</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('homepage') }}">@lang('website.general.homepage')</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">@lang('website.general.privacy')</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">@lang('website.general.privacy')</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-12 mb-5">
                <p><strong>1. General provisions</strong></p>
                <p>1.1. This privacy policy regulates the principles of collection, processing, and storage of personal data. Personal data is processed and stored by&nbsp;<strong>MERCHANT NAME</strong>, who is the controller of the personal data (hereinafter the controller).</p>
                <p>1.2. For the purposes of this privacy policy, a data subject means the customer or another natural person whose personal data is processed by the controller.</p>
                <p>1.3. For the purposes of this privacy policy, a customer means anyone who purchases goods or services on the controller&rsquo;s website.</p>
                <p>1.4. The controller observes the principles relating to personal data processing provided by legislation and, among other things, processes personal data in a lawful, fair, and secure manner. The controller is able to declare that personal data has been processed in accordance with the provisions of the legislation.</p>
                <p><strong>2. Collection, processing, and storage of personal data</strong></p>
                <p>2.1. The personal data collected, processed, and stored by the controller has been collected electronically, mainly via the website and e-mail.<strong>&nbsp;(NB! PLEASE MODIFY IF DATA ARE ALSO COLLECTED ON PAPER.)</strong></p>
                <p>2.2. By sharing their personal data, the data subject grants the controller the right to collect, arrange, use and administer, for the purpose defined in the privacy policy, the personal data that the data subject shares with the controller either directly or indirectly when purchasing goods or services on the website.</p>
                <p>2.3. The data subject is liable for the accuracy, correctness, and integrity of the data submitted by them. The submission of knowingly false data is regarded as a breach of the privacy policy. The data subject is required to immediately notify the controller of any changes in the data submitted.</p>
                <p>2.4. The controller is not liable for any damage or loss caused to the data subject or a third party as a result of the submission of false data by the data subject.</p>
                <p><strong>3. Processing of personal data of customers</strong></p>
                <p>3.1. The controller may process the following personal data of the data subject:</p>
                <p>3.1.1. Given name and surname;</p>
                <p>3.1.2. Date of birth;</p>
                <p>3.1.3. Telephone number;</p>
                <p>3.1.4. E-mail address;</p>
                <p>3.1.5. Delivery address;</p>
                <p>3.1.6. Bank account number;</p>
                <p>3.1.7. Payment card details;<br><strong>(NB! PLEASE MODIFY THE LIST ACCORDING TO THE TYPES OF DATA SUBJECT TO PROCESSING. PLEASE REMOVE IF ANY DATA INCLUDED IN THE LIST ARE NOT COLLECTED.)</strong></p>
                <p>3.2. In addition to the foregoing, the controller has the right to collect data about the customer that are available in public registers.</p>
                <p>3.3. The legal basis for the processing of personal data points (a), (b), (c) and (f) of Article 6(1) of the General Data Protection Regulation:</p>
                <p>(a) the data subject has given consent to the processing of his or her personal data for one or more specific purposes;</p>
                <p>(b) processing is necessary for the performance of a contract to which the data subject is a party or in order to take steps at the request of the data subject prior to entering into a contract;</p>
                <p>(c) processing is necessary for compliance with a legal obligation to which the controller is subject;</p>
                <p>(f) processing is necessary for the purposes of the legitimate interests pursued by the controller or by a third party, except where such interests are overridden by the interests or fundamental rights and freedoms of the data subject which require protection of personal data, in particular where the data subject is a child.</p>
                <p>3.4. Processing of personal data according to the purpose of processing:</p>
                <p>3.4.1. Purpose of processing &ndash; security and safety<br>The maximum period of storage of personal data &ndash; according to the terms specified by law</p>
                <p>3.4.2. Purpose of processing &ndash; the processing of orders<br>Maximum period of storage of personal data &ndash;&nbsp;<strong>(SPECIFY HOW LONG IS THE DATA STORED?)<br></strong></p>
                <p>3.4.3. Purpose of processing &ndash; ensuring the functioning of online store services<br>Maximum period of storage of personal data &ndash;&nbsp;<strong>(SPECIFY HOW LONG IS THE DATA STORED?)<br></strong></p>
                <p>3.4.4. Purpose of processing &ndash; customer management<br>Maximum period of storage of personal data &ndash;&nbsp;<strong>(SPECIFY HOW LONG IS THE DATA STORED?)<br></strong></p>
                <p>3.4.5. Purpose of processing &ndash; financial activities, accounting<br>Maximum period of storage of personal data &ndash; according to the terms specified by law</p>
                <p>3.4.6. Purpose of processing &ndash; marketingMaximum period of storage of personal data &ndash;&nbsp;<strong>(SPECIFY HOW LONG IS THE DATA STORED?)</strong><br><strong>(NB! DEPENDING ON THE CONTROLLER, IT MAY PROVE TO BE NECESSARY TO MODIFY THE FOREGOING LIST)</strong></p>
                <p><strong><br></strong>3.5. The controller has the right to share personal data of customers with third parties such as processors, accountants, transport and courier companies, companies providing transfer services. The controller is in charge of the processing of personal data. The controller transmits the personal data necessary for making payments to the processor, Maksekeskus AS.</p>
                <p>3.6. The controller processes and stores personal data of the data subject implementing the organizational and technical measures to ensure that the personal data is protected against any accidental or unlawful destruction, alteration, disclosure, and any other unlawful processing.</p>
                <p>3.7. The controller stores the data of the data subjects depending on the purpose of processing, but no longer than for&nbsp;<strong>(SPECIFY)</strong> years.</p>
                <p><strong>4. Rights of the data subject</strong></p>
                <p>4.1. The data subject has the right to gain access to and examine their personal data.</p>
                <p>4.2. The data subject has the right to obtain information on the processing of their personal data.</p>
                <p>4.3. The data subject has the right to modify or rectify inaccurate data.</p>
                <p>4.4. If the controller processes personal data of the data subject based on the consent granted by the latter, the data subject has the right to withdraw their consent at any time.</p>
                <p>4.5. To exercise their rights, the data subject can contact the customer support of the online store at&nbsp;<strong>(ADD SUPPORT E-MAIL ADDRESS)</strong>.</p>
                <p>4.6. To protect their rights, the data subject can file a complaint with the Data Protection Inspectorate.</p>
                <p><strong>5. Final provisions</strong></p>
                <p>5.1. These data protection terms and conditions have been prepared in compliance with Regulation (EU) 2016/679 of the European Parliament and of the Council on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (General Data Protection Regulation), the Personal Data Protection Act of the Republic of Estonia and legislation of the Republic of Estonia and the European Union.</p>
                <p>5.2. The controller has the right to amend the data protection terms and conditions in part or in full, notifying the data subjects of the amendments via&nbsp;<strong>(ADD SHOP URL)</strong>.</p>
            </div>
        </div>
    </div>
@endsection
