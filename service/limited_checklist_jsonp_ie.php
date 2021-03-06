<?php
//$data = getDataAsJSON($_GET['id']);
//echo $_GET['jsonp_callback'] . '(' . $data . ');';

// FCA Checklist

header('Access-Control-Allow-Origin: *');
header('Content-Type: ' . ($callback ? 'application/javascript' : 'application/json') . ';charset=UTF-8');


header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$data = array(

    (object)array(
        'header' => 'Contact details',
        'list' => array('Provide a named person and their direct contact details for the <span class="linkage">Financial Services Register</span>.'),
        'popups' => array('<span class="ch-close">x</span><span class="ch-tip"></span><span class="ch-absolute-header">The Financial Service Register</span><p>The Financial Services Register is a public record on our website of all the firms and individuals in the financial services industry that we regulate.</p>'),

    ),
     (object)array(
        'header' => 'Firm details',
        'list' => array('Provide your firm’s <span class="linkage">OFT licence number</span> or <span class="linkage"> interim permission number.</span>',
                        'State your firm’s <span class="linkage">principal place of business</span> and <span class="linkage">legal status</span>.',
                        'State your Companies House registration and details if applicable (date of incorporation, <span class="linkage">registered office address</span>), and check this information matches what’s on the Companies House website.','State your firm’s financial year-end, and if you’re an incorporated firm, check this matches what is on the Companies House website.','State your firm’s head office address.','State your firm’s website address.','Supply your firm’s <span class="linkage">organisation structure chart</span>.','Provide details of <span class="linkage">professional advisers</span>, auditors and accountants, if you use them.'),
        'popups' => array(
                   '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">OFT licence number</span>
                  <p>The reference number that the Office of Fair Trading allocated to your firm when you received your consumer credit licence.</p> '
                  ,
                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">interim permission number</span>
                  <p>The number that we allocated to your firm when you registered with us for interim permission. You can find this by searching for your firm’s details on the consumer credit register on our website.</p> ',

                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">principial place of business</span>
                  <p>The main place where your firm’s work is performed or business is carried out. This will appear on the Financial Services Register.</p> ',

                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">legal status</span>
                  <p>The type of firm that you are: for example, sole trader, public limited company, private limited company, etc. We give a full list in our application form.</p><p>Please note that the legal status ‘sole trader’ means that the firm is an individual person. For an incorporated company, which is run by a single person, the correct status is likely to be \'private limited company\'.</p> ',

                    '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">registered office address</span>
                  <p>If you are an incorporated firm this will be the name you have registered at Companies House.</p> ',
                     '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">organisation structure chart</span>
                  <p>This should be a staff organisation structure chart that clearly indicates senior management and decision makers. We will need to know about the key officers and directors and their responsibilities within the structure of the firm.</p><p>We will not ask sole traders or sole director limited companies for this.</p> ',
                         '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">professional advisers</span>
                  <p>If you use a professional adviser (such as a compliance consultant) to help you with regulatory returns or compliance matters, then we will need their details.</p> '

                  ),
                  

    ),
    (object)array(
        'header' => 'Future plans',
        'list' => array('State the date your firm wishes to be <span class="linkage">authorised</span> from.',
                        'Supply alternative <span class="linkage">registered names</span> or <span class="linkage">trading names</span> which may be used and are approved by Companies House.',
                        'State whether your firm plans to appoint any <span class="linkage">appointed representatives.</span>'),
        'popups' => array(
                  ' <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">authorised</span>
                  <p>If your application is approved by the "FCA" you will be authorised. Firms and individuals can only conduct regulated activities in the UK if they are authorised by us to do so.</p> '
                  ,

                  ' <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">registered name</span>
                  <p>This is the name that will appear on the Financial Services Register in relation to your firm.</p>
                  <p>If you are an incorporated firm, then this is the full current firm name registered at Companies House.</p>
                  <p>If you are a sole trader, you should put your personal name as the registered name.</p> '


                  ,
                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">trading name</span>
                  <p>The name that your firm trades under.</p> '
                  ,
                   '      <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">appointed representatives</span>
                  <p>In broad terms, an appointed representative is a business which is not authorised, but has a contract with a firm (called \'the principal\') that allows it to carry out certain activities under the permission of the principal. There are certain requirements around who can be an appointed representative, set out on our website <a href="http://www.fca.org.uk/creditready">www.fca.org.uk/creditready</a></p> '

                  ),

    ),
    (object)array(
        'header' => "Details of firm's activities",
        'list' => array('Provide details of any credit agreements that you made before applying for authorisation and that were outside the <span class="linkage">scope of your
interim permission</span>. Please confirm whether you have applied for a <span class="linkage">validation order</span> or intend to do so for these agreements.'),
        'popups' => array(
                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">scope of permission</span>
                    <p>The regulated activities that your FCA interim permission allows you to carry on.</p> '
                  ,
                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">validation order</span>
                  <p>Before 1 April 2014, this term referred to an order for which firms could apply to the Office of Fair Trading to validate consumer credit or hire agreements that were entered into by an unlicensed creditor or as a result of an introduction by an unlicensed credit-broker.</p><p>Since 1 April 2014, the FCA has adopted the same terminology because industry is familiar with it. In the FCA context, the term is being used to refer to a notice made by the FCA allowing a regulated credit or hire agreement to be enforced or a notice allowing money paid or property transferred under those agreements to be retained.</p><p>There is further guidance on validation orders on our website.</p> '
                
                  ),

    ),
     (object)array(
        'header' => "Sole traders",
        'list' => array('Provide details of any <span class="linkage">locum arrangements</span> in place and any professional staff employed.'),
        'popups' => array(
                  '     <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">locum arrangements</span>
                  <p>A locum agreement is an arrangement with another firm who has the same permissions as you, to assist or help your customers on a temporary basis.</p><p>We ask about this because there is a potential risk to your customers if your firm is solely dependent on one individual to run the business and something unforeseen happens to that individual. We want to find out what arrangements you have in place if that were to happen.</p>'
                
                  ),

    ),
       (object)array(
        'header' => 'Financial details',
        'list' => array('<span class="linkage"><i>Not-for-profit</i></span> <i>debt advisers only</i>: State whether <span class="linkage">client money</span> is held by your organisation (including highest amount in the past year and/or anticipated highest amount to be held next year).','State the estimated <span class="linkage">consumer credit income.</span>','Confirm that the firm will remain solvent (supporting evidence is not required to be included within the application form,
but you must be able to provide upon the FCA’s request).'),
        'popups' => array(
                  '  <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">not-for-profit</span>
                  <p>For these purposes, a not-for-profit body is one which, by virtue of its constitution or any enactment;
                      <ul><li>
                      is required (after payment of outgoings) to apply the whole of its income, and any capital which it expends, for charitable or public purposes, and</li>
                      <li>is prohibited from directly or indirectly distributing amongst its members any part of its assets (otherwise than for charitable or public purposes).</li>
                      </ul>
                  </p>'
                  ,
                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">client money</span>
                  <p>This will only be relevant to certain types of consumer credit firms:</p><p>For client money (CASS) debt management firms (see the FCA Handbook glossary for a
definition) this means money of any currency it receives or holds on behalf of a client in
the course of, or in connection with, debt management activity.</p><p>For operators of an electronic system in relation to lending, it means money of any
currency that the firm holds for clients in the course of operating an electronic system in
relation to lending, but only in relation to facilitating a person becoming a lender under a
peer-to-peer agreement and in relation to certain supplemental activities.</p><p>See the FCA Handbook glossary for a full definition of Client Money.</p>'

                   ,
                    '             <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">consumer credit income</span>
                  <p>We have set a definition of this and how you should calculate it in your application form. See our Handbook: <a href="http://www.fshandbook.info/FS/html/FCA/FEES/4/Annex11B">www.fshandbook.info/FS/html/FCA/FEES/4/Annex11B</a></p>'
                 


                  ),

    ),
       (object)array(
        'header' => 'Firm history',
        'list' => array('Provide full details of any previously refused or withdrawn applications to any regulators.',
                         'Provide full details of previous names the firm has traded under and the dates they were used.',
                         'Provide full details of whether the firm has ever been regulated by the FCA or any other financial services regulator, including the
regulator’s address and the firm’s regulatory identification number.',
                          'Declare if the firm has ever been bankrupt, wound up, in administration or restructured due to insolvency.',
                          'Declare any criminal or civil investigations, unsatisfied judgments, material settlements, fraud convictions or any financial offence.',
                          'Provide details of any written material complaints against the firm within the last five years.', 
                          'Provide details if the firm has been criticised or censured by any financial services regulator, found guilty of unauthorised regulated
activities, and if the firm is currently involved in proceedings.'

                         ),
        'popups' => array(
                  
                  ),

    ),
  (object)array(
        'header' => 'What the firm does',
        'list' => array('State the number of clients your firm expects to have at authorisation and 12 months after.',
                    'Confirm that the firm has a <span class="linkage">regulatory business plan</span> (supporting evidence is not required to be included within the application
form, but you must be able to provide upon the FCA’s request).',
            'Know the firm’s key <span class="linkage">business risks</span> and confirm there’s a <span class="linkage">mitigation plan </span> (supporting evidence is not required to be included within
the application form, but you must be able to provide upon the FCA’s request).'


                         ),
        'popups' => array('<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">regulatory business plan</span><p>This will set out your business aims and objectives and detail how you will organise your
resources to achieve them. The level of detail that your plan goes into should be
proportionate to the complexity and scale of your business. Your business plan will help
us assess the adequacy of your resources and the suitability of your business model.</p><p>If you apply for full permission you must attach this to the online application form. If you
apply for limited permission you will not need to include it with your application but you
should be able to provide it later if we request it.</p><p>The business plan should include:</p><p><b>General information</b></p><ul><li>The background to the business.</li><li>Why you wish to carry out regulated activities.</li><li>Whether you have identified a particular business opportunity or identified a specific
customer base.</li><li>Any long-term strategy and expansion plans for your business.</li><li>Whether you plan to outsource functions to other companies, use self-employed
agents, compliance consultants, appointed representatives or a franchise business
model, and how you will control these relationships.</li><li>The experience of the senior management of your firm and their responsibilities,
including identifying areas they may specialise in.</li></ul><p><b>Information on customers</b></p><ul><li>Where you will source customers from (e.g. existing client base, credit brokers or lead
generators).</li><li>Key risks to your firm and your customers and how you propose to protect against
these. This will include how you plan to treat customers fairly, deal with vulnerable
customers or those in financial difficulty and protect against the risk of fraud and crime.</li><li>How you will assess affordability and creditworthiness and your process for rollover/
extension or re-financing decisions (if applicable).</li><li>Whether you report data to and use credit reference agencies.</li><li>Your plans in relation to financial promotions (e.g. website material, brochures and
other advertising) and how you will ensure these comply with the consumer credit
rules in the FCA Handbook (set out in CONC 3).</li></ul><p><b>Products and procedures</b></p><ul><li>Details of your sales process.</li><li>The types of products you will sell, any associated products, how you will take
payments (for example continuous payment authority) and whether you seek any
guarantees.</li><li>Whether you incentivise staff and how you do this. For example, do you have
incentives based on sales? If you offer a financial incentive, how do you calculate it?</li><li>
Details of any case management procedures you have and how you ensure the
accuracy of information provided to you.</li><li>Procedures for valuing customers’ assets (if applicable).</li><li>The proportion of arrears or defaults (if applicable).</li><li>Your arrears and recovery procedures and any template documents you use or intend
to use, if relevant.</li><li>The proportion of debts that you take legal action to recover (if applicable).</li><li>Whether you are a member of a trade body or professional association.</li><li>For debt-management firms, the proportion of debt-management plans that are not
completed (for example those where a customer enters into another debt solution,
settles their debts, stops paying or if contact is lost).</li></ul>'
                          ,
                         
                    '  
                    <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">business risks</span>
                  <p>
                    The key risks that your business faces, that could impact on your ability to meet FCA requirements. These will depend on the nature of your business.
                    Examples include your firm getting into financial difficulties, clients being given unsuitable advice, or inadequate systems and controls.
                  </p>',
                  '   <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">mitigation plan</span>
                  <p>How you plan to deal with risks in your business.</p>'

                  ),

    ),
  (object)array(
        'header' => 'Treating customers fairly',
        'list' => array(
            'Confirm whether you have procedures and management information to demonstrate how your firm’s customers are treated fairly.'


                         ),
        'popups' => array(
                    '   <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">treating customers fairly (TCF)</span>
                  <p>
                    This is one of our most fundamental principles for businesses, which are the principles that all FCA-regulated firms must comply with at all times. Principle six says “A firm must pay due regard to the interest of its customers and treat them fairly”. We explain more about this, and the six consumer outcomes, on our website.
        </p> '

                  ),

    ),
 (object)array(
        'header' => 'Systems and controls',
        'list' => array('Confirm that your firm is able to submit regular information about its regulated business via the FCA <span class="linkage">regulatory reporting system</span>.'
            ),
        'popups' => array(
                    '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">regulatory reporting system</span>
                  <p>
                   Once you become authorised, you will begin reporting information to us about your business on a regular basis through an online system on our website. This includes basic details of your consumer credit business for limited permission firms, and some additional key information for full permission firms.
                </p>'

                  ),

    ),
 (object)array(
        'header' => 'Compliance monitoring',
        'list' => array('Confirm that your firm has documentation of <span class="linkage">compliance procedures.</span>',
            'Confirm that your firm has a <span class="linkage">compliance monitoring programme document</span> (supporting evidence is not required to be included
within the application form, but you must be able to provide upon the FCA’s request).'
            ),
        'popups' => array(
                    '   <span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">compliance procedures</span>
                  <p>
                 Compliance procedures are a set of procedures that are put in place to ensure that a firm meets the regulatory requirements. The areas we expect to be covered include record keeping, complaints handling, reporting requirements, and protecting customer interests. This is covered in detail in our guidance notes on our website:

                </p>   

                <p>Limited permission notes pages 19-20</p>

                <p>Full permission notes pages 28-29</p>   ',
                '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">compliance monitoring programme document</span>
                  <p>A document that shows how you establish, maintain and carry out a programme of actions to check that your firm complies and continues to comply with its compliance procedures. This is covered in detail in our guidance notes on our website, with an example of what one looks like:</p> 

                  <p>Limited permission notes page 20.</p>

                  <p>Full permission notes page 30.</p> '

                  ),

    ),
 (object)array(
        'header' => 'Financial crime and market abuse',
        'list' => array('Confirm that your firm has steps in place to counter the risk of staff engaging in <span class="linkage">market abuse.</span>',
            'Confirm that procedures are in place to counter the risk of your firm being used to further <span class="linkage">financial crime</span>.'
            ),
        'popups' => array(
                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">market abuse</span>
                  <p>
               Certain types of behavior, such as insider dealing and market manipulation, can amount to market abuse. We will ask you to briefly describe the steps you have put in place to counter the risk that you or your staff may engage in activity which constitutes market abuse.

                </p>   '
                ,   '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">financial crime procedures</span>
                <p>The procedures you have in place to counter the risks that your firm might be used by
third parties to further financial crime (this includes any offence involving fraud or
dishonesty; misconduct in, or misuse of, information relating to financial markets or
handling the proceeds of crime).</p>  '

                  ),

    ),
  (object)array(
        'header' => 'Approved persons',
        'list' => array('State who your <span class="linkage">approved person(s)</span> will be, if applicable.'
            ),
        'popups' => array(
                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">approved person</span>
                  <p>At least one individual in most consumer credit firms must be approved by us when a firm applies to be authorised. The exception is most providers of not-for-profit debt advice and some sole traders. Approved persons are individuals who are approved to perform certain functions on behalf of a firm, and these functions are called ‘controlled functions’. We can approve an individual only when we are satisfied that they are fit and proper to perform the controlled function(s) they apply for. More detail on approved persons is available in our guide for firms.

                </p> '

                  ),

    ),
  (object)array(
        'header' => 'Controllers',
        'list' => array('State who your <span class="linkage">controllers</span> are, if applicable.'
            ),
        'popups' => array(
                  '<span class="ch-close">x</span>
                  <span class="ch-tip"></span>
                  <span class="ch-absolute-header">controller</span>
                  <p>
         This is a very broad concept, and generally speaking includes the beneficial owners of the business, who may be individuals or firms with an indirect shareholding in your firm.
 </p>   
 <p>
In more complex corporate structures, it can also include individuals, other than shareholders, who may be entitled to exercise significant influence over the management of the firm. This is not applicable to sole traders.
</p>
       '

                  ),

    ),


     

);
$json = json_encode($data);
echo $_GET['callback'] . '(' . $json . ')';