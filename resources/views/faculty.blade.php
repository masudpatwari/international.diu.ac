@extends('layouts.master')
@section('content')
<div class="diu-page-title text-center text-light">
    <div class="container">
        <div class="diu-z-index-up">
            <h3>Faculty of {{ $faculty_info['title'] }}</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
    </div>
</div>
@if(!empty($faculty_info['dean']))
<section class="diu-faculty">
    <div class="container">
        <div class="card mb-4 border-0 bg-transparent">
            <div class="diu-people">
                <div class="diu-people-info text-right">
                    <h5><a href=""><strong>{{ $faculty_info['dean']['name'] }}</strong></a></h5>
                    <p>{{ $faculty_info['dean']['position'] }}</p>
                    <p>Faculty of {{ $faculty_info['title'] }}</p>
                    <p>Dhaka International University</p>
                    <p>{{ $faculty_info['dean']['mno1'] }}</p>
                    <p>{{ $faculty_info['dean']['email1'] }}</p>
                </div>
                <div class="diu-people-img">
                    <div class="people-img">
                        <img class="" src="{{ asset($faculty_info['dean']['profilepic']) }}" alt="{{ $faculty_info['dean']['name'] }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if(!empty($courses))
<section class="diu-faculty diu-section-bg">
    <div class="container">
        <div class="diu-faculty-programs">
            <div class="diu-section-title text-dark">
                <h5>Programs Under the {{ $faculty_info['title'] }} Faculty</h5>
            </div>
            <table class="table table-sm table-striped table-borderless">
                <tr>
                    <th>Name Of Program</th>
                    <th>Duration</th>
                    <th>Credit</th>
                    <th class="text-center">Syllabus</th>
                    <th></th>
                </tr>
                @foreach($courses as $course)
                <tr>
                    <td class="align-middle">{{ $course['name'] }}</td>
                    <td class="align-middle">{{ $course['duration'] }}</td>
                    <td class="align-middle">{{ $course['credit'] }}</td>
                    <td class="align-middle text-center">
                        <a href="javaScript:;" class="diu-btn" data-toggle="modal" data-target="#{{ $course['department'].''.$course['id'] }}">View</a>
                    </td>
                    <td class="text-right">
                        <a href="{{ route('register') }}" class="diu-btn diu-apply-btn">Apply Now</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="modal fade" id="law7" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">LL.B (Hons) 4 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2">1st Semester</th>
                                <th colspan="2">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>LL.BH-101</td>
                                <td> Jurisprudence and Legal Theorys</td>
                                <td>LL.BH-201 </td>
                                <td>Criminology</td>
                            </tr>
                            <tr>
                                <td>LL.BH-102 </td>
                                <td> Legal System of Bangladesh</td>
                                <td>LL.BH-202 </td>
                                <td>Equity and Trust</td>
                            </tr>
                            <tr>
                                <td>LL.BH-103</td>
                                <td> LL.BH-103 Roman Law</td>
                                <td>LL.BH-203 </td>
                                <td>Hindu Law</td>
                            </tr>
                            <tr>
                                <td>LL.BH-104</td>
                                <td> Basic English Language</td>
                                <td>LL.BH-204</td>
                                <td> Functional English </td>
                            </tr>
                            <tr>
                                <td>LL.BH-105</td>
                                <td> Introduction to Computer</td>
                                <td>LL.BH-205</td>
                                <td> Database Management System</td>
                            </tr>
                            <tr>
                                <th colspan="2">3rd Semesterr</th>
                                <th colspan="2">4th Semester</th>
                            </tr>
                            <tr>
                                <td>LL.BH-301</td>
                                <td>Interpretation of Statutes</td>
                                <td>LL.BH-401</td>
                                <td>Law of Transfer of Property-I</td>
                            </tr>
                            <tr>
                                <td>LL.BH-302</td>
                                <td>Law of Contract and Partnership</td>
                                <td>LL.BH-402 </td>
                                <td>Land Laws of Bangladesh-I</td>
                            </tr>

                            <tr>
                                <td>LL.BH-303 </td>
                                <td>Law of Tort</td>
                                <td>LL.BH-403</td>
                                <td> Muslim Law-I</td>
                            </tr>
                            <tr>
                                <th colspan="2">5th Semesterr</th>
                                <th colspan="2">6th Semester</th>
                            </tr>
                            <tr>
                                <td>LL.BH-501</td>
                                <td>Law of Transfer of Property-II</td>
                                <td>LL.BH-601 </td>
                                <td>Public Demand Recovery Act</td>
                            </tr>

                            <tr>
                                <td>LL.BH-502</td>
                                <td>Law of Transfer of Property-II</td>
                                <td></td>
                                <td>& Registration Act</td>
                            </tr>
                            <tr>
                                <td>LL.BH-503</td>
                                <td> Muslim Law-II</td>
                                <td>LL.BH-602</td>
                                <td> Administrative Law </td>
                            </tr>
                            <tr>
                                <td>LL.BH-504 </td>
                                <td>Constitutional Law-I</td>
                                <td>LL.BH-603</td>
                                <td> Constitutional Law-II</td>
                            </tr>
                            <tr>
                                <th colspan="2">7th Semester</th>
                                <th colspan="2">8th Semester</th>
                            </tr>
                            <tr>
                                <td>LL.BH-701</td>
                                <td> Law of Evidence-I</td>
                                <td>LL.BH-801</td>
                                <td> Law of Evidence-II</td>
                            </tr>

                            <tr>
                                <td>LL.BH-702 </td>
                                <td>LL.BH-702 Law of Criminal Procedure-I</td>
                                <td>LL.BH-802 </td>
                                <td>& LL.BH-802 Law of Criminal Procedure-II</td>
                            </tr>
                            <tr>
                                <td>LL.BH-703</td>
                                <td> Law of Crimes-I</td>
                                <td>LL.BH-803 </td>
                                <td> Law of Crimes-II </td>
                            </tr>
                            <tr>
                                <td>LL.BH-504 </td>
                                <td>Constitutional Law-I</td>
                                <td>LL.BH-804</td>
                                <td> Fiscal Law</td>
                            </tr>
                            <tr>
                                <th colspan="2">9th Semester</th>
                                <th colspan="2">10th Semester</th>
                            </tr>
                            <tr>
                                <td>LL.BH-901 </td>
                                <td> Labor and Industrial Law </td>
                                <td>LL.BH-1001</td>
                                <td> Law of Civil Procedure-I</td>
                            </tr>

                            <tr>
                                <td>LL.BH-902</td>
                                <td> Mercantile Law-I</td>
                                <td>LL.BH-1002 </td>
                                <td>Law of Drafting and Pleading</td>
                            </tr>
                            <tr>
                                <td>LL.BH-903 </td>
                                <td> Company and Banking Law</td>
                                <td>LL.BH-1003 </td>
                                <td> Public International Law-I</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>LL.BH-1004</td>
                                <td> Mercantile Law-II</td>
                            </tr>
                            <tr>
                                <th colspan="2">11th Semester</th>
                                <th colspan="2">12th Semester</th>
                            </tr>
                            <tr>
                                <td>LL.BH-1101 </td>
                                <td> Law of Civil Procedure-II </td>
                                <td> LL.BH-1201</td>
                                <td> Laws on Dispute Resolution and Legal Aid</td>
                            </tr>

                            <tr>
                                <td>LL.BH-1102 </td>
                                <td> Environmental Law</td>
                                <td>LL.BH-1202 </td>
                                <td>Specific Relief Act and Limitation Act</td>
                            </tr>
                            <tr>
                                <td>LL.BH-1103 </td>
                                <td> Public International Law-II</td>
                                <td>LL.BH-1203 </td>
                                <td> Special Criminal Laws</td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td></td>
                                <td>LL.BH-1204</td>
                                <td>Clinical Legal Education (with Research Monograph</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="2">Viva voce</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="law8" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">LL.M 1 year</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2">1st Semester</th>
                                <th colspan="2">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>LL.M. 901 </td>
                                <td> Comparative Constitutional Law</td>
                                <td>LL.M. 1001 </td>
                                <td>Principles of Civil Litigation</td>
                            </tr>
                            <tr>
                                <td> LL.M. 902 </td>
                                <td> International Human Rights Law</td>
                                <td>LL.M. 1002 </td>
                                <td>International Trade Law</td>
                            </tr>
                            <tr>
                                <td> LL.M. 903 </td>
                                <td> Private International Law</td>
                                <td>LL.M. 1003 </td>
                                <td> International Humanitarian Law </td>
                            </tr>
                            <tr>
                                <td>LL.M. 904 </td>
                                <td> International Environmental Law</td>
                                <td>LL.M. 1004 </td>
                                <td> Intellectual Property Law </td>
                            </tr>
                            <tr>
                                <td>LL.M. 905</td>
                                <td> Law of International Institutions </td>
                                <td>LL.M. 1006 </td>
                                <td> Research Monograph (with oral defense) </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="law9" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">LL.M 2 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2">1st Semester</th>
                                <th colspan="2">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>LL.M. 3101 </td>
                                <td> Legal History of Bangladesh</td>
                                <td>LL.M. 3201</td>
                                <td> Administrative Law </td>
                            </tr>
                            <tr>
                                <td> LL.M. 3102 </td>
                                <td>Comparative Legal System</td>
                                <td>LL.M. 3202 </td>
                                <td>Intellectual Property Law in Bangladesh</td>
                            </tr>
                            <tr>
                                <td>LL.M. 3103 </td>
                                <td>Environmental Laws of Bangladesh</td>
                                <td>LL.M. 3203 </td>
                                <td> Immigration and Refugee Law </td>
                            </tr>
                            <tr>
                                <td>LL.M. 3104 </td>
                                <td> General Clauses Act and Interpretation of Statutes</td>
                                <td>LL.M. 3204 </td>
                                <td>Laws on Dispute Resolution </td>
                            </tr>
                            <tr>
                                <td>LL.M. 3105</td>
                                <td> Criminology and Penology</td>
                                <td>LL.M. 3205 </td>
                                <td> Customs and Maritime Law</td>
                            </tr>
                            <tr>
                                <th colspan="2">3rd Semester</th>
                                <th colspan="2">4th Semester</th>
                            </tr>
                            <tr>
                                <td>LL.M. 3301 </td>
                                <td> Comparative Constitutional Law</td>
                                <td>LL.M. 3401 </td>
                                <td> Principles of Civil Litigation </td>
                            </tr>
                            <tr>
                                <td> LL.M. 3302 </td>
                                <td> International Human Rights Law</td>
                                <td>LL.M. 3402 </td>
                                <td>International Trade Law </td>
                            </tr>
                            <tr>
                                <td>LL.M. 3303 </td>
                                <td>Private International Law</td>
                                <td>LL.M. 3403 </td>
                                <td>International Humanitarian Law </td>
                            </tr>
                            <tr>
                                <td>LL.M. 3304 </td>
                                <td> International Environmental Law </td>
                                <td>LL.M. 3404 </td>
                                <td>Intellectual Property Law </td>
                            </tr>
                            <tr>
                                <td>LL.M. 3305 </td>
                                <td> Law of International Institutions </td>
                                <td>LL.M. 3205 </td>
                                <td> Customs and Maritime Law</td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> LL.M. 3406 </td>
                                <td> Research Monograph (with oral defense )</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="law10" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">MHRL 2 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2">1st Semester</th>
                                <th colspan="2">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>MHRL-101 </td>
                                <td> Jurisprudence of Human Rights </td>
                                <td>MHRL-201 </td>
                                <td>Human Rights under Regional System</td>
                            </tr>
                            <tr>
                                <td>MHRL-102</td>
                                <td> Gender and Law </td>
                                <td>MHRL-202 </td>
                                <td> Human Rights under Regional System </td>
                            </tr>
                            <tr>
                                <td>MHRL-103 </td>
                                <td> Public Internatioal Law and Human Rights</td>
                                <td>MHRL-203</td>
                                <td> Economics, Social and Cultural Right </td>
                            </tr>
                            <tr>
                                <td>MHRL-204 </td>
                                <td> Human Rights in Bangladesh</td>
                                <td>MHRL-204</td>
                                <td> Human Rights in Bangladesh</td>
                            </tr>
                            <tr>
                                <th colspan="2">3rd Semester</th>
                                <th colspan="2">4th Semester</th>
                            </tr>
                            <tr>
                                <td>MHRL-301 </td>
                                <td> International Humanitarian Law </td>
                                <td>MHRL-401 </td>
                                <td>Immigration and Refugee Law</td>
                            </tr>
                            <tr>
                                <td>MHRL-302 </td>
                                <td> Human Rights in Modern world</td>
                                <td>MHRL-402</td>
                                <td> Right to Development in International Law</td>
                            </tr>
                            <tr>
                                <td>MHRL-303</td>
                                <td> Consumer Protection Law </td>
                                <td>MHRL-304</td>
                                <td>Environment, Health and Intellectual Property Law </td>
                            </tr>
                            <tr>
                                <td>MHRL-304</td>
                                <td>Access to Justices Legal Aid and Human Rights</td>
                                <td>MHRL-204</td>
                                <td> Justice for Children</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>MHRL-205</td>
                                <td> Research Monograph </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>MHRL-406</td>
                                <td> Project Managemen </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="bba11" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">BBA 4 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2">1st Semester</th>
                                <th colspan="2">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>CCB 111 </td>
                                <td>Introduction to Business</td>
                                <td>CCB 121 </td>
                                <td>Fundamentals of Management</td>
                            </tr>
                            <tr>
                                <td>CCB 112 </td>
                                <td> Legal System of Bangladesh</td>
                                <td>CCB 122 </td>
                                <td>Business Mathematics-II</td>
                            </tr>
                            <tr>
                                <td>CCB 113 </td>
                                <td> Business Mathematics-I</td>
                                <td>CCB 123 </td>
                                <td>Business Communication</td>
                            </tr>
                            <tr>
                                <td>CCB 114 </td>
                                <td> Bangladesh Studies</td>
                                <td>CCB 124</td>
                                <td>Principales of Finance </td>
                            </tr>
                            <tr>
                                <th colspan="2">3rd Semester</th>
                                <th colspan="2">4th Semester</th>
                            </tr>
                            <tr>
                                <td>CCB 131</td>
                                <td> Principles of Marketing</td>
                                <td>CCB 211</td>
                                <td> Business Statistics-I</td>
                            </tr>
                            <tr>
                                <td>CCB 132 </td>
                                <td> Basic Accounting</td>
                                <td>CCB 212 </td>
                                <td> Intermediate Accounting</td>
                            </tr>
                            <tr>
                                <td>CCB 133</td>
                                <td> Microeconomics</td>
                                <td>CCB 213 </td>
                                <td>Computer Application in Business</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> </td>
                                <td>CCB 214</td>
                                <td> Macroeconomics </td>
                            </tr>
                            <tr>
                                <th colspan="2">5th Semester</th>
                                <th colspan="2">6th Semester</th>
                            </tr>
                            <tr>
                                <td>CCB 221</td>
                                <td> Business Statistics-II</td>
                                <td>CCB 231 </td>
                                <td> Industrial Psychology</td>
                            </tr>
                            <tr>
                                <td>CCB 222 </td>
                                <td> Business Law</td>
                                <td>CCB 232 </td>
                                <td> Cost Accounting</td>
                            </tr>
                            <tr>
                                <td>CCB 223 </td>
                                <td> Financial Management</td>
                                <td>CCB 233 </td>
                                <td>Marketing Management </td>
                            </tr>
                            <tr>
                                <td>CCB 224</td>
                                <td> E-Commerce </td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <th colspan="2">7th Semester</th>
                                <th colspan="2">8th Semester</th>
                            </tr>
                            <tr>
                                <td>CCB 311 </td>
                                <td>International Trade</td>
                                <td>CCB 321 </td>
                                <td>Operations Management</td>
                            </tr>
                            <tr>
                                <td>CCB 312 </td>
                                <td> Taxation </td>
                                <td>CCB 322 </td>
                                <td> Auditing </td>
                            </tr>
                            <tr>
                                <td>CCB 313 </td>
                                <td>Industrial and Labor Law</td>
                                <td>CCB 323 </td>
                                <td>Human Resource Management </td>
                            </tr>
                            <tr>
                                <td>CCB 314 </td>
                                <td>Organizational Behavior </td>
                                <td></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <th colspan="4">9th Semester</th>
                            </tr>
                            <tr>
                                <td>CCB 331 </td>
                                <td colspan="3">Insurance and Risk Management </td>
                            </tr>
                            <tr>
                                <td>CCB 332 </td>
                                <td colspan="3">Bank Management </td>
                            </tr>
                            <tr>
                                <td>CCB 333 </td>
                                <td colspan="3">Management Information Systems </td>
                            </tr>
                            <tr>
                                <td>CCB 333 </td>
                                <td colspan="3">Management Information Systems </td>
                            </tr>
                            <tr>
                                <th colspan="2">10th Semester (Major in Management)</th>
                                <th colspan="2">11th Semester (Major in Management)</th>
                            </tr>
                            <tr>
                                <td>MGT 411 </td>
                                <td> Research Methodology</td>
                                <td>MGT 421 </td>
                                <td>Cross Cultural Management</td>
                            </tr>
                            <tr>
                                <td>MGT 412 </td>
                                <td> Project Management </td>
                                <td>MGT 422 </td>
                                <td> Evolution of Management </td>
                            </tr>
                            <tr>
                                <td>MGT 413 </td>
                                <td> Total Quality Management</td>
                                <td>MGT 423 </td>
                                <td>Supply Chain Management</td>
                            </tr>
                            <tr>
                                <td>MGT 414 </td>
                                <td> Management of Technology </td>
                                <td>MGT 424 </td>
                                <td>Management of Multinational Enterprises </td>
                            </tr>
                            <tr>
                                <th colspan="2">10th Semester (Major in Human Resource Management) 1</th>
                                <th colspan="2">11th Semester (Major in Human Resource Management)</th>
                            </tr>
                            <tr>
                                <td>MGT 411 </td>
                                <td> Research Methodology</td>
                                <td>HRM 421 </td>
                                <td>Industrial Relations</td>
                            </tr>
                            <tr>
                                <td>HRM 412 </td>
                                <td> Project Management </td>
                                <td>HRM 422 </td>
                                <td> Training and Organizational Developmen </td>
                            </tr>
                            <tr>
                                <td>HRM 413 </td>
                                <td> Human Resource Planning</td>
                                <td>HRM 423 </td>
                                <td>Career Management</td>
                            </tr>
                            <tr>
                                <td>HRM 414 </td>
                                <td> Performance Management and Compensation Management </td>
                                <td>HRM 424 </td>
                                <td>Human Resource Management Practices in Bangladesh </td>
                            </tr>
                            <tr>
                                <th colspan="2">10th Semester (Major in Accounting Information Systems1</th>
                                <th colspan="2">11th Semester (Major in Accounting Information Systems)</th>
                            </tr>
                            <tr>
                                <td>AIS 411 </td>
                                <td> Research Methodology</td>
                                <td>AIS 421 </td>
                                <td>Accounting Theory </td>
                            </tr>
                            <tr>
                                <td>AIS 412 </td>
                                <td> Project Management</td>
                                <td>AIS 422 </td>
                                <td> Advanced Cost Accounting </td>
                            </tr>

                            <tr>
                                <td>AIS 413 </td>
                                <td> Advanced Financial Accounting</td>
                                <td>AIS 423 </td>
                                <td>Corporate Financial Reporting</td>
                            </tr>
                            <tr>
                                <td>AIS 414 </td>
                                <td>Management Accounting </td>
                                <td>AIS 424</td>
                                <td> Corporate Tax Planning </td>
                            </tr>
                            <tr>
                                <th colspan="2">10th Semester (Major in Management Information Systems) </th>
                                <th colspan="2">11th Semester (Major in Management Information Systems)</th>
                            </tr>
                            <tr>
                                <td>MIS 411</td>
                                <td> Research Methodology</td>
                                <td>MIS 421 </td>
                                <td>Network Essentials</td>
                            </tr>
                            <tr>
                                <td>MIS 412 </td>
                                <td> Project Management</td>
                                <td>MIS 422 </td>
                                <td> E-Commerce and Web Managemen </td>
                            </tr>
                            <tr>
                                <td>MIS 413 </td>
                                <td> System Analysis and Design</td>
                                <td>MIS 423 </td>
                                <td>Management of Technology </td>
                            </tr>
                            <tr>
                                <td>MIS 414 </td>
                                <td>Basic Database Management </td>
                                <td>MIS 424 </td>
                                <td> Supply Chain Management </td>
                            </tr>
                            <tr>
                                <th colspan="2">10th Semester (Major in Marketing) </th>
                                <th colspan="2">11th Semester (Major in Marketing)</th>
                            </tr>
                            <tr>
                                <td>MKT 41</td>
                                <td> Research Methodology</td>
                                <td>MKT 421 </td>
                                <td>Global Marketing </td>
                            </tr>
                            <tr>
                                <td>MKT 412 </td>
                                <td> Project Management</td>
                                <td>MKT 422 </td>
                                <td> E-Marketing </td>
                            </tr>
                            <tr>
                                <td>MKT 413 </td>
                                <td> Strategic Marketing </td>
                                <td>MKT 423</td>
                                <td>Integrated Marketing Communications </td>
                            </tr>
                            <tr>
                                <td>MKT 414</td>
                                <td> Marketing Information Systems</td>
                                <td>MKT 424 </td>
                                <td>Customer Relationship Managemen </td>
                            </tr>
                            <tr>
                                <th colspan="2">10th Semester (Major in Finance)</th>
                                <th colspan="2">11th Semester (Major in Finance)</th>
                            </tr>
                            <tr>
                                <td>FIN 411 </td>
                                <td> Research Methodology</td>
                                <td>MKT 421 </td>
                                <td>Real Estate Finance</td>
                            </tr>
                            <tr>
                                <td>FIN 412 </td>
                                <td> Project Management</td>
                                <td>FIN 422 </td>
                                <td> Working Capital Management </td>
                            </tr>
                            <tr>
                                <td>FIN 413 </td>
                                <td> Financial Analysis and Control </td>
                                <td>FIN 423</td>
                                <td> Investment Banking and Lease Financing </td>
                            </tr>
                            <tr>
                                <td>FIN 414 </td>
                                <td> Corporate Financ</td>
                                <td>FIN 424 </td>
                                <td>International Financial Management </td>
                            </tr>
                            <tr>
                                <th colspan="2">10th Semester (Major in Banking)</th>
                                <th colspan="2">11th Semester (Major in Banking)</th>
                            </tr>
                            <tr>
                                <td>BKM 411 </td>
                                <td> Research Methodology</td>
                                <td>BKM 421 </td>
                                <td>Retail Banking and E-Banking </td>
                            </tr>
                            <tr>
                                <td>BKM 412 </td>
                                <td>Project Management</td>
                                <td>BKM 422 </td>
                                <td> Islamic Banking </td>
                            </tr>
                            <tr>
                                <td>BKM 413 </td>
                                <td> Working capital Management </td>
                                <td>BKM 423 </td>
                                <td> Audit and Inspection of Banks </td>
                            </tr>
                            <tr>
                                <td>BKM 414 </td>
                                <td> Treasury Management</td>
                                <td>BKM 424 </td>
                                <td>Accounting for Financial Service Institutions </td>
                            </tr>
                            <tr>
                                <th colspan="2">10th Semester (Major in International Business)</th>
                                <th colspan="2">11th Semester (Major in International Business)</th>
                            </tr>

                            <tr>
                                <td>ITB 411</td>
                                <td> Research Methodology</td>
                                <td>ITB 421 </td>
                                <td>International Management </td>
                            </tr>
                            <tr>
                                <td>ITB 412 </td>
                                <td>Project Management</td>
                                <td>ITB 422 </td>
                                <td> International Human Resource Management2 </td>
                            </tr>

                            <tr>
                                <td>ITB 413</td>
                                <td>Fundamentals of International Business </td>
                                <td>ITB 423</td>
                                <td> International Financial Management </td>
                            </tr>
                            <tr>
                                <td>ITB 414 I</td>
                                <td> nternational Economics</td>
                                <td>ITB 424 </td>
                                <td>International Marketing </td>
                            </tr>
                            <tr>
                                <th colspan="4">12th Semester</th>
                            </tr>
                            <tr>
                                <td colspan="4"> Internship/Project Report & Viva-Voce </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="bba12" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">MBA 1 year</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="4" class="text-center">1st Semester</th>
                            </tr>
                            <tr>
                                <td>CCR 501</td>
                                <td colspan="3">Advanced Management Accounting</td>
                            </tr>
                            <tr>
                                <td>CCR 502</td>
                                <td colspan="3">International Business</td>
                            </tr>
                            <tr>
                                <td>CCR 503</td>
                                <td colspan="3">Security Analysis and Portfolio Management</td>
                            </tr>
                            <tr>
                                <td>CCR 504</td>
                                <td colspan="3">Management Information Systems</td>
                            </tr>
                            <tr>
                                <td>CCR 505</td>
                                <td colspan="3">Supply Chain Management</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="bba13" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">MBA 2 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2" class="text-center">1st Semester</th>
                                <th colspan="2" class="text-center">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>CCB 111</td>
                                <td>Introduction to Business</td>
                                <td>CCE 522</td>
                                <td>Human Resource Managemen</td>
                            </tr>
                            <tr>
                                <td>CCE 512</td>
                                <td> Principles of Management</td>
                                <td>CCE 523</td>
                                <td>Legal Environment of Business</td>
                            </tr>
                            <tr>
                                <td>CCE 513</td>
                                <td>Principles of Marketingt</td>
                                <td>CCE 524</td>
                                <td>Business Communication</td>
                            </tr>
                            <tr>
                                <td>CCE 514</td>
                                <td>Managerial Economics</td>
                                <td>CCE 531</td>
                                <td> Organizational Behavior</td>
                            </tr>
                            <tr>
                                <td>CCE 521</td>
                                <td>Quantitative Techniques for Decision Making</td>
                                <td>CCE 532</td>
                                <td>Financial Accounting</td>
                            </tr>
                            <tr>
                                <th colspan="4" class="text-center">3rd Semester</th>
                            </tr>
                            <tr>
                                <td>CCE 533</td>
                                <td colspan="3">Management Information Systems</td>
                            </tr>
                            <tr>
                                <td>CCE 534</td>
                                <td colspan="3">Cost and Management Accounting</td>
                            </tr>
                            <tr>
                                <td>CCE 541</td>
                                <td colspan="3">Marketing Management</td>
                            </tr>
                            <tr>
                                <td>CCE 542</td>
                                <td colspan="3">Financial Management</td>
                            </tr>
                            <tr>
                                <td>CCE 543</td>
                                <td colspan="3">Industrial and Labour Law</td>
                            </tr>
                            <tr>
                                <th colspan="4">Major Courses For RMBA & EMBA Programs</th>
                            </tr>
                            <tr>
                                <th colspan="2">Major in Management</th>
                                <th colspan="2">Major in Human Resource Management</th>
                            </tr>
                            <tr>
                                <td>MGT 551</td>
                                <td>Business Research</td>
                                <td>HRM 551</td>
                                <td>Business Research</td>
                            </tr>
                            <tr>
                                <td>MGT 552</td>
                                <td> Strategic Management</td>
                                <td>HRM 552</td>
                                <td>Strategic Management</td>
                            </tr>
                            <tr>
                                <td>MGT 553</td>
                                <td>Project Management</td>
                                <td>HRM 553</td>
                                <td>Strategic Human Resource Management</td>
                            </tr>
                            <tr>
                                <td>MGT 554</td>
                                <td>Operations Management</td>
                                <td>HRM 554</td>
                                <td> Conflict Management and Negotiation</td>
                            </tr>
                            <tr>
                                <td>MGT 555</td>
                                <td>Management Information Systems</td>
                                <td>HRM 555</td>
                                <td>Organizational Development and Change Management</td>
                            </tr>
                            <tr>
                                <td>MGT 556</td>
                                <td>Management Science</td>
                                <td>HRM 556</td>
                                <td>Training and Development</td>
                            </tr>
                            <tr>
                                <td>MGT 557</td>
                                <td>International Business</td>
                                <td>HRM 557</td>
                                <td> Compensation Management</td>
                            </tr>
                            <tr>
                                <td>MGT 558</td>
                                <td>Management of Multinational Enterprises</td>
                                <td>HRM 558</td>
                                <td> International Human Resource Management</td>
                            </tr>
                            <tr>
                                <td>MGT 559</td>
                                <td>Leadership and Entrepreneurship Development</td>
                                <td>HRM 559</td>
                                <td> Human Resource Management Information Systems</td>
                            </tr>
                            <tr>
                                <td>MGT 560</td>
                                <td>Management Thought</td>
                                <td>HRM 560</td>
                                <td>Industrial Relations and Collective Bargaining</td>
                            </tr>

                            <tr>
                                <th colspan="2">Major in Accounting Information Systems</th>
                                <th colspan="2">Major in Management Information Systems</th>
                            </tr>
                            <tr>
                                <td>AIS 551</td>
                                <td>Business Research</td>
                                <td>MIS 551</td>
                                <td> Business Research</td>
                            </tr>
                            <tr>
                                <td>AIS 552</td>
                                <td>Strategic Management</td>
                                <td>MIS 552</td>
                                <td>Strategic Management</td>
                            </tr>
                            <tr>
                                <td>AIS 553</td>
                                <td>Auditing</td>
                                <td>MIS 553</td>
                                <td>Information Technology</td>
                            </tr>
                            <tr>
                                <td>AIS 554</td>
                                <td>Taxation</td>
                                <td>MIS 554</td>
                                <td>Computer Programming</td>
                            </tr>
                            <tr>
                                <td>AIS 555</td>
                                <td>Project Management</td>
                                <td>MIS 555</td>
                                <td>Management Information Systems</td>
                            </tr>
                            <tr>
                                <td>AIS 556</td>
                                <td>Software in Accounting</td>
                                <td>MIS 556</td>
                                <td>Spreadsheet Analysis and Module Building</td>
                            </tr>
                            <tr>
                                <td>AIS 557</td>
                                <td>Accounting Information Systems</td>
                                <td>MIS 557</td>
                                <td>E-Commerce</td>
                            </tr>
                            <tr>
                                <td>AIS 558</td>
                                <td>Financial Statement Analysis</td>
                                <td>MIS 558</td>
                                <td>Database Management</td>
                            </tr>
                            <tr>
                                <td>AIS 559</td>
                                <td>Advanced Financial Accounting</td>
                                <td>MIS 559</td>
                                <td>Telecommunication and Networking for Business </td>
                            </tr>

                            <tr>
                                <th colspan="2">Major in Marketing</th>
                                <th colspan="2">Major in Finance</th>
                            </tr>
                            <tr>
                                <td>MKT 551</td>
                                <td>Business Research</td>
                                <td>FIN 551</td>
                                <td>Business Research</td>
                            </tr>
                            <tr>
                                <td>MKT 552</td>
                                <td>Strategic Management</td>
                                <td>FIN 552</td>
                                <td>Strategic Management</td>
                            </tr>
                            <tr>
                                <td>MKT 553</td>
                                <td>Marketing Communication</td>
                                <td>FIN 553</td>
                                <td>Capital Markets and Financial Institution</td>
                            </tr>
                            <tr>
                                <td>MKT 554</td>
                                <td>International Marketing</td>
                                <td>FIN 554</td>
                                <td>Insurance and Risk Management</td>
                            </tr>

                            <tr>
                                <td>MKT 555</td>
                                <td>Service Marketing</td>
                                <td>FIN 555</td>
                                <td>Capital Budgeting and Investment Analysis</td>
                            </tr>
                            <tr>
                                <td>MKT 556</td>
                                <td>Consumer Behavior</td>
                                <td>FIN 556</td>
                                <td>Public Finance </td>
                            </tr>
                            <tr>
                                <td>MKT 557</td>
                                <td>Brand Management</td>
                                <td>FIN 557</td>
                                <td>International Financial Management</td>
                            </tr>
                            <tr>
                                <td>MKT 557</td>
                                <td>Brand Management</td>
                                <td>FIN 557</td>
                                <td>International Financial Management</td>
                            </tr>
                            <tr>
                                <td>MKT 558</td>
                                <td>Agricultural Marketing</td>
                                <td>FIN 558</td>
                                <td>Corporate Finance</td>
                            </tr>
                            <tr>
                                <th colspan="2">Major in Bank Management</th>
                                <th colspan="2">Major in Merchandising</th>
                            </tr>
                            <tr>
                                <td>BKM 551</td>
                                <td>Business Research</td>
                                <td>MER 551</td>
                                <td>Business Research</td>
                            </tr>
                            <tr>
                                <td>BKM 552</td>
                                <td>Strategic Management</td>
                                <td>MER 552</td>
                                <td>Strategic Management</td>
                            </tr>
                            <tr>
                                <td>BKM 553</td>
                                <td>Theory and Practice of Banking</td>
                                <td>MER 553</td>
                                <td>RMG Business of Bangladesh</td>
                            </tr>
                            <tr>
                                <td>BKM 554</td>
                                <td>Fund Management in Banks</td>
                                <td>MER 554</td>
                                <td>Retail Merchandising</td>
                            </tr>
                            <tr>
                                <td>BKM 555</td>
                                <td>Credit Management</td>
                                <td>MER 555</td>
                                <td>Textile and Apparel Industry</td>
                            </tr>
                            <tr>
                                <td>BKM 556</td>
                                <td>Bank Marketing</td>
                                <td>MER 556</td>
                                <td>Quality Control Management in RMG</td>
                            </tr>
                            <tr>
                                <td>BKM 557</td>
                                <td>Central Banking</td>
                                <td colspan="2" rowspan="2">Internship/Project Report & Viva-Voce</td>
                            </tr>
                            <tr>
                                <td>BKM 558</td>
                                <td>Investment Banking</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="cse1" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">B.Sc in CSE 4 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="3" class="text-center">1st Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-101</td>
                                <td>Introduction to Computer Systems</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>PHY-101</td>
                                <td>Physics-I</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>GED-101</td>
                                <td>Principles of Accounting</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>GED-102</td>
                                <td>Bangladesh Studies</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">2nd Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-103 </td>
                                <td>Introduction to Computer Systems</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-104</td>
                                <td>Structured Programming Lab </td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>PHY-103</td>
                                <td>Physics-II</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>PHY-104</td>
                                <td>Physics-II Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>ENG-101</td>
                                <td>Basic English</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>MATH-101</td>
                                <td>Linear Algebra & Co-ordinate Geometry</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">3rd Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-105 </td>
                                <td>Digital Systems</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-106</td>
                                <td>Digital Systems Lab </td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CHEM-101</td>
                                <td>Chemistry</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CHEM-102</td>
                                <td>Chemistry Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>ENG-102</td>
                                <td>Communicative English</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>MATH-102</td>
                                <td>Differential and Integral Calculus</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">4th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-201 </td>
                                <td>Discrete Mathematics</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>EEE-201</td>
                                <td>Electrical Circuits </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>EEE-202</td>
                                <td>Electrical Circuits Lab</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>GED-201</td>
                                <td>Principles of Economics</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>MATH-201</td>
                                <td>Statistical Methods & Probability</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">5th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-203 </td>
                                <td>Electronic Devices & Circuits </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-204</td>
                                <td>Electronic Devices & Circuits Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-205</td>
                                <td>Data Structures </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-206</td>
                                <td>Data Structures Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>MATH-201</td>
                                <td>Differential Equations & Vector Analysis</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">6th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-207 </td>
                                <td>Object Oriented Programming </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-204</td>
                                <td>Object Oriented Programming Lab
                                </td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-209</td>
                                <td>Computer Organization & Architecture
                                </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>GED-202</td>
                                <td>Principles of Management </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>MATH-203</td>
                                <td>Complex Variables and Transforms (Laplace & Fourier)</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">7th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-301</td>
                                <td>Algorithm Design & Analysis </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-302</td>
                                <td>Algorithm Design & Analysis Lab
                                </td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-303</td>
                                <td>Numerical Analysis
                                </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-304</td>
                                <td>Numerical Analysis Lab </td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>EEE-301</td>
                                <td>Data & Telecommunication</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>GED-301</td>
                                <td>Law & Ethics in Engineering Practice
                                </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">8th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-305</td>
                                <td>Microprocessor, Microcontroller & Assembly Language </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-306</td>
                                <td>Microprocessor, Microcontroller & Assembly Language Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-307</td>
                                <td>Database Management Systems </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-308</td>
                                <td>Database Management Systems Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-</td>
                                <td>Elective Course (Section I) </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">9th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-309</td>
                                <td>Operating Systems</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-310</td>
                                <td>Operating Systems Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-311</td>
                                <td>Computer Networks</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-312</td>
                                <td>Computer Networks Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-</td>
                                <td>Elective Course (Section I) </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-</td>
                                <td>Elective Course (Section I) </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">10th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-401</td>
                                <td>Compiler Design</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-402</td>
                                <td>Compiler Design Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-403</td>
                                <td>Peripherals & Interfacing</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-404</td>
                                <td>Peripherals & Interfacing Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-</td>
                                <td>Elective Course (Section II) </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-</td>
                                <td>Elective Course (Section II) Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">11th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-405</td>
                                <td>Computer Graphics & Multimedia</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-406</td>
                                <td>Computer Graphics & Multimedia Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-407</td>
                                <td>Artificial Intelligence & Neural Networks</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-408</td>
                                <td>Artificial Intelligence & Neural Networks Lab</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-</td>
                                <td>Elective Course (Section II) </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">12th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE/td>
                                <td>Elective Course (Section II) </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE-406</td>
                                <td>Elective Course (Section II) Lab </td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>CSE-425</td>
                                <td>Project Work</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>9</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="cse2" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">M.Sc in CSE 1.5 year</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-501</td>
                                <td>Advanced Algorithm</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -502</td>
                                <td>Advanced Networking</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -503</td>
                                <td>Advanced Database</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -504</td>
                                <td>Advanced Graph Theory</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -505</td>
                                <td>Advanced Digital Signal Processing</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -506</td>
                                <td>Pattern Recognition</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -507</td>
                                <td>Advanced Simulation and Modeling</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -508</td>
                                <td>Cryptography and Network Security</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -509</td>
                                <td>Bioinformatics</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -510</td>
                                <td>Parallel Algorithm</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -511</td>
                                <td>Embedded System Design</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -512</td>
                                <td>Advanced Wireless and Mobile Communication</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -513</td>
                                <td>Advanced Optical Communication
                                </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -514</td>
                                <td>Advanced Optical Communication</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -515</td>
                                <td>Robotics and Computer Vision</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -516</td>
                                <td>Advanced Multimedia System</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -517</td>
                                <td>Teletraffic Engineering</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -518</td>
                                <td>Knowledge Engineering</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -519</td>
                                <td>Machine Learning</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -520</td>
                                <td>Wireless Sensor Network</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -521</td>
                                <td>Channel Modeling</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -522</td>
                                <td>Advanced Filter Design</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -523</td>
                                <td>Fault Tolerant Computing and Design</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -524</td>
                                <td>Advanced Digital Image Processing</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -525</td>
                                <td>Speech Recognition</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -526</td>
                                <td>Advanced Digital Communication</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -527</td>
                                <td>Radio Frequency Technology</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -528</td>
                                <td>Adaptive and Optimal Image Processing</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -529</td>
                                <td>Enterprise Application Integration</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -530</td>
                                <td>Enterprise Application Integration</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CSE -531</td>
                                <td>Project Work</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>CSE -532</td>
                                <td>Thesis Work</td>
                                <td>18</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="cse3" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">M.Sc in CSE 1 year</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="eete4" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">B.Sc in EETE 4 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="3" class="text-center">1st Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>CSE-111</td>
                                <td>Computer Fundamental</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>HUM-111</td>
                                <td>Bangladesh Studies</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>HUM-112</td>
                                <td>Fundamentals of Management</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>HUM-113</td>
                                <td>World Civilization</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">2nd Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>EETE-121</td>
                                <td>Electrical circuits-I</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Electrical circuits-I Laboratory</td>
                                <td>Bangladesh Studies</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>PHY-121</td>
                                <td>Physics-I (Waves & Oscillation, Optics, Heat & Thermodynamics) </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>MAT-121</td>
                                <td>Math-I (Linear Algebra & Co-ordinate Geometry)</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>HUM-121</td>
                                <td>Basic English</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">3rd Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>
                            <tr>
                                <td>EETE-131</td>
                                <td>Electronics-I</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>EETE-132</td>
                                <td>Electrical Circuits-II Laboratory</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>PHY-131</td>
                                <td>Physics-II (Electricity, Magnetism, Modern Physics, Mechanics)</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>PHY-132</td>
                                <td>Physics-II Laboratory</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>HUM-131</td>
                                <td>Communicative English</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>MAT-131</td>
                                <td>Math-II (Differential & Integral Calculus)</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">4rd Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>

                            <tr>
                                <td>EETE-211</td>
                                <td>Electronics-I</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-212</td>
                                <td>Electronics-I Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-213</td>
                                <td>Electrical Machines-I</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-214</td>
                                <td>Electrical Machines-I Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-215</td>
                                <td>Engineering Drawing</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>MAT-211</td>
                                <td>Math-IV (Statistics & Probability)</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">5th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>

                            <tr>
                                <td>EETE-221</td>
                                <td>Electrical Machines-II</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-222</td>
                                <td>Electrical Machines-II Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-223</td>
                                <td>Electronics-II</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-224</td>
                                <td>Electronics-II Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>MAT-221</td>
                                <td>Math-IV (Differential Equations & Vector Analysis)</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>HUM-221</td>
                                <td>Financial & Managerial Accounting</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">6th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>

                            <tr>
                                <td>EETE-231</td>
                                <td>Digital Electronics</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-232</td>
                                <td>Digital Electronics Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-233</td>
                                <td>Semiconductor Materials & Devices</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-234</td>
                                <td>Structured Programming</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>CSE-232</td>
                                <td>Structured Programming Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>MAT-231</td>
                                <td>Math-V (Complex Variables & Transforms (Laplace, Fourier & Z)</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">7th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>

                            <tr>
                                <td>EETE-311</td>
                                <td>Digital Electronics</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-312</td>
                                <td>Digital Electronics Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-313</td>
                                <td>Semiconductor Materials & Devices</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>CHM-311</td>
                                <td>Chemistry</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>CHM-312</td>
                                <td>Chemistry Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>11</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">8th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>

                            <tr>
                                <td>EETE-321</td>
                                <td>Digital Signal Processing</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-322</td>
                                <td>Digital Signal Processing Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-323</td>
                                <td>Fundamental of Communication Engineering</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>EETE-324</td>
                                <td>Fundamental of Communication Engineering Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-325</td>
                                <td>Electromagnetic Fields and Waves</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-327</td>
                                <td>Transmission and Distribution of Electric Power</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>14</td>
                            </tr>

                            <tr>
                                <th colspan="3" class="text-center">9th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>

                            <tr>
                                <td>EETE-331</td>
                                <td>Power Electronics</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-332</td>
                                <td>Power Electronics Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-333</td>
                                <td>Instrumentation and Measurement</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>EETE-334</td>
                                <td>Instrumentation and Measurement Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-335</td>
                                <td>Control Systems</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-336</td>
                                <td>Control Systems Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>12</td>
                            </tr>

                            <tr>
                                <th colspan="3" class="text-center">10th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>

                            <tr>
                                <td>EETE-411</td>
                                <td>Microwave & Antenna Engineering</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EETE-412</td>
                                <td>Microwave & Antenna Engineering Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-413</td>
                                <td>Renewable Energy Technology</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>EETE-415</td>
                                <td>Power System Analysis</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>10</td>
                            </tr>

                            <tr>
                                <th colspan="3" class="text-center">11th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>

                            <tr>
                                <td>EETE-421</td>
                                <td>Power Stations</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>EEE/ETE</td>
                                <td>Elective-I</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>EEE/ETE</td>
                                <td>Elective-II</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>EEE/ETE</td>
                                <td>Elective-II Laboratory</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>EETE-433E</td>
                                <td>Project and Thesis</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>9 or 10</td>
                            </tr>

                            <tr>
                                <th colspan="3" class="text-center">12th Semester</th>
                            </tr>
                            <tr>
                                <th>Code No.</th>
                                <th>Course Title</th>
                                <th>Credit</th>
                            </tr>

                            <tr>
                                <td>EEE/ETE</td>
                                <td>Elective-III</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>EEE/ETE</td>
                                <td>Elective-III Laboratory</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>EETE-433</td>
                                <td>Project and Thesis</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total credits</td>
                                <td>9 or 10</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="pha5" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">B. Pharm (Hon’s) 4 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="3" class="text-center">First Year First Semester</th>
                            </tr>
                            <tr>
                                <td>Pharm-101 </td>
                                <td>Inorganic Pharmacy-I </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>Pharm-102 </td>
                                <td> Inorganic Pharmacy-I -Lab</td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td>Pharm-103</td>
                                <td> Physical Pharmacy-I</td>
                                <td>Credit Hr: 3</td>
                            </tr>

                            <tr>
                                <td>Pharm-104</td>
                                <td> Physical Pharmacy-I-Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>

                            <tr>
                                <td>Math-101 </td>
                                <td> Mathematics & Statistics </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td>CS-101 </td>
                                <td> Computer Science Credit </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td>HUM-10</td>
                                <td> Introductory English </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total Credit Hours </td>
                                <td>17 </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">First Year Second Semester</th>
                            </tr>
                            <tr>
                                <td>PHARM-111 </td>
                                <td>Inorganic Pharmacy-II </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-112 </td>
                                <td> Inorganic Pharmacy-II -Lab</td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td>PHARM-113</td>
                                <td> Organic Pharmacy-I</td>
                                <td>Credit Hr: 3</td>
                            </tr>

                            <tr>
                                <td>PHARM-114</td>
                                <td> Organic Pharmacy-I-Lab b </td>
                                <td>Credit Hr: 1 </td>
                            </tr>

                            <tr>
                                <td>PHARM-115</td>
                                <td> Physical Pharmacy-II b </td>
                                <td>Credit Hr:3 </td>
                            </tr>

                            <tr>
                                <td>PHARM-116 </td>
                                <td>Physical Pharmacy-II-lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>

                            <tr>
                                <td>PHARM-117</td>
                                <td> Phannacognosy-I </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td>PHARM-118 </td>
                                <td>Pharmacognosy-I-Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>
                            <tr>
                                <td>HUM-117</td>
                                <td>Bangladesh Studies </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td>VV-111 </td>
                                <td>Viva-voce </td>
                                <td> Credit Hr: 1 </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total Credit Hours </td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Second Year First Semester</th>
                            </tr>
                            <tr>
                                <td>PHARM-201 </td>
                                <td>Organic Pharmacy-II </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-202 </td>
                                <td> Organic Pharmacy-II-Lab</td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td>PHARM-203 </td>
                                <td> Pharmacognosy-II </td>
                                <td>Credit Hr: 3</td>
                            </tr>

                            <tr>
                                <td>PHARM-204 </td>
                                <td>Pharmacognosy-11-Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>

                            <tr>
                                <td>PHARM-205</td>
                                <td>Basic Anatomy </td>
                                <td>Credit Hr: 1.5 </td>
                            </tr>

                            <tr>
                                <td>PHARM-206 </td>
                                <td>Physiology-I </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td>PHARM-207</td>
                                <td> Physiology-I Lab </td>
                                <td>Credit Hr. 1 </td>
                            </tr>

                            <tr>
                                <td>PHARM-208 </td>
                                <td>Pharmaceutical Microbiology-I </td>
                                <td>Credit Hr: 3</td>
                            </tr>
                            <tr>
                                <td>PHARM-209 </td>
                                <td>Pharmaceutical Microbiology-II-Lab</td>
                                <td>Credit Hr: 1 </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total Credit Hours </td>
                                <td>17.5 </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Second Year Second Semester</th>
                            </tr>
                            <tr>
                                <td>PHARM-211 </td>
                                <td>Physiology-II </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-212 </td>
                                <td> Physiology-II-Lab</td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td>PHARM-213 </td>
                                <td> Pharmaceutical Microbiology-II </td>
                                <td>Credit Hr: 3</td>
                            </tr>

                            <tr>
                                <td>PHARM-214 </td>
                                <td>Pharmaceutical Technology-I </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td>PHARM-215</td>
                                <td>Pharmaceutical Technology-I-Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>

                            <tr>
                                <td>PHARM-216 </td>
                                <td>Pharmacology-I </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td>PHARM-217</td>
                                <td> Pharmacology-I-Lab </td>
                                <td>Credit Hr. 1 </td>
                            </tr>

                            <tr>
                                <td>PHARM-218 </td>
                                <td>Biochemistry & Cellular Biology </td>
                                <td>Credit Hr: 3</td>
                            </tr>
                            <tr>
                                <td>PHARM-219 </td>
                                <td>Biochemistry & Cellular Biology-Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>
                            <tr>
                                <td>VV-211 </td>
                                <td>Viva-voce </td>
                                <td>Credit Hr: 1 </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total Credit Hours </td>
                                <td>20 </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Third Year First Semester</th>
                            </tr>
                            <tr>
                                <td>PHARM-301</td>
                                <td>Pharmaceutical Analysis-I </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-302 </td>
                                <td> Pharmaceutical Analysis-I-Lab </td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td>PHARM-303</td>
                                <td> Pharmacology-II </td>
                                <td>Credit Hr: 3</td>
                            </tr>

                            <tr>
                                <td>PHARM-304 </td>
                                <td>Pharmaceutical Technology-Il-Lab </td>
                                <td>Credit Hr: 1</td>
                            </tr>

                            <tr>
                                <td>PHARM-305 </td>
                                <td> Pharmacology-II </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td>PHARM-306 </td>
                                <td>Pharmacology-II-Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>

                            <tr>
                                <td>PHARM-307</td>
                                <td> Medicinal Chemistry-I </td>
                                <td>Credit Hr: 3 </td>
                            </tr>

                            <tr>
                                <td>PHARM-308 </td>
                                <td>Medicinal Chemistry-I-Lab </td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td>PHARM-309</td>
                                <td>Pathology </td>
                                <td>Credit Hr: 3</td>
                            </tr>
                            <tr>
                                <td>PHARM-310 </td>
                                <td> Nutraceuticals, Dietary Supplements mod Herbal Products </td>
                                <td>Credit Hr: 1.5 </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>Total Credit Hours </td>
                                <td>20.5 </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Third Year Second Semester</th>
                            </tr>
                            <tr>
                                <td>PHARM-311</td>
                                <td>Pharmaceutical Analysis-II </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-312 </td>
                                <td> Pharmaceutical Analysis-II-Lab </td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td>PHARM-313</td>
                                <td> Pharmaceutical Technology-III </td>
                                <td>Credit Hr: 3</td>
                            </tr>

                            <tr>
                                <td>PHARM-314 </td>
                                <td>Pharmaceutical Technology-III-Lab </td>
                                <td>Credit Hr: 1</td>
                            </tr>

                            <tr>
                                <td>PHARM-315 </td>
                                <td> Pharmacology-III </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-316 </td>
                                <td>Pharmacology-Ill-Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>
                            <tr>
                                <td>PHARM-317</td>
                                <td> Medicinal Chemistry-II </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-318 </td>
                                <td> Medicinal Chemistry-II-Lab </td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td>PHARM-319</td>
                                <td> Hospital & Community Pharmac </td>
                                <td>Credit Hr: 3</td>
                            </tr>
                            <tr>
                                <td>VV-311 </td>
                                <td> Viva-voce </td>
                                <td>Credit Hr: 1 </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total Credit Hours </td>
                                <td>20 </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Fourth Year First Semester</th>
                            </tr>
                            <tr>
                                <td>PHARM-401 </td>
                                <td>Pharmaceutical Analysis-III </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-402</td>
                                <td>Pharmaceutical Analysis-III-Lab </td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td>PHARM-403</td>
                                <td> Medicinal Chemistry-III</td>
                                <td>Credit Hr: 1.5</td>
                            </tr>
                            <tr>
                                <td>PHARM-404 </td>
                                <td> Cosmetology </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-405 </td>
                                <td>Cosmetology-Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>
                            <tr>
                                <td>PHARM-406 </td>
                                <td>Biopharmaceutics and Pharmacokinetics-1 </td>
                                <td> Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-407 </td>
                                <td> Biopharmaceutics and Pharmacokinetics-I Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>
                            <tr>
                                <td>PHARM-408 </td>
                                <td>Pharmaceutical Engineering </td>
                                <td>Credit Hr: 3</td>
                            </tr>
                            <tr>
                                <td>PHARM-409 </td>
                                <td> Clinical Pharmacy </td>
                                <td>Credit Hr: 3</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total Credit Hours </td>
                                <td>19.5 </td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Fourth Year Second Semester</th>
                            </tr>
                            <tr>
                                <td>PHARM-411 </td>
                                <td>Pharmaceutical Biotechnology </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-412</td>
                                <td>Advance Pharmacology and Toxicology </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-413</td>
                                <td> Biopharmaceutics-II </td>
                                <td>Credit Hr: 3</td>
                            </tr>
                            <tr>
                                <td>PHARM-414</td>
                                <td>Biopharmaceutics-II-Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>
                            <tr>
                                <td>PHARM-415 </td>
                                <td>Pharmaceutical Quality Control and Analytical Method Validation </td>
                                <td>Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-416 </td>
                                <td>Pharmaceutical Quality Control and Analytical Method Validation - Lab </td>
                                <td>Credit Hr: 1 </td>
                            </tr>
                            <tr>
                                <td>PHARM-417 </td>
                                <td> Pharmaceutical Marketing & Managemen </td>
                                <td> Credit Hr: 3 </td>
                            </tr>
                            <tr>
                                <td>PHARM-418</td>
                                <td> Pharmaceutical Regulatory Affairs </td>
                                <td>Credit Hr: 3</td>
                            </tr>
                            <tr>
                                <td>PHARM-419 </td>
                                <td> Project </td>
                                <td>Credit Hr: 3</td>
                            </tr>
                            <tr>
                                <td>PHARM-420 </td>
                                <td> In-Plant Training </td>
                                <td>Credit Hr: 1.5</td>
                            </tr>
                            <tr>
                                <td>VV-411 </td>
                                <td>Viva-Voce </td>
                                <td>Credit Hr: 1</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total Credit Hours </td>
                                <td>15.5 </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="civil6" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">B.Sc in Civil 4 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="3" class="text-center">Basic Science Courses (15.00)</th>
                            </tr>
                            <tr>
                                <td>CHEM 101</td>
                                <td>Engineering Chemistry I </td>
                                <td>3.0</td>
                            </tr>
                            <tr>
                                <td>CHEM 102</td>
                                <td>Engineering Chemistry II </td>
                                <td> 3.0</td>
                            </tr>
                            <tr>
                                <td>CHEM 114</td>
                                <td>Inorganic Quantitative Analysis Lab </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>PHY 101</td>
                                <td>Engineering Physics I</td>
                                <td>3.0</td>
                            </tr>
                            <tr>
                                <td>PHY 102</td>
                                <td>Engineering Physics Lab</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>PHY 105 </td>
                                <td>Engineering Physics II</td>
                                <td>3.0</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Mathematics Courses (12.00)</th>
                            </tr>
                            <tr>
                                <td>MATH 131</td>
                                <td>Mathematics I </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>MATH 133 </td>
                                <td>Mathematics II</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>MATH 231</td>
                                <td>Mathematics III</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>MATH 235 </td>
                                <td>Mathematics IV</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Basic Engineering Courses (42.50)</th>
                            </tr>
                            <tr>
                                <td>CE 100</td>
                                <td>Engineering Drawing*</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 101</td>
                                <td>Engineering Mechanics </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 102</td>
                                <td>Computer Aided Drafting*</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 103 </td>
                                <td>Geoinformatics: Surveying*</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 104</td>
                                <td>Computer Fundamental Applications Lab </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 105</td>
                                <td>Practical Surveying*</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>Shop 132</td>
                                <td>Workshop Sessional * </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>EEE 165</td>
                                <td>Basic Electrical Engineering</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>EEE 166</td>
                                <td> Basic Electrical Engineering Lab* </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 203</td>
                                <td>Engineering Geosciences </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 204 </td>
                                <td>Engineering Geosciences Sessional</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 205 </td>
                                <td>Numerical Methods and Analysisl</td>
                                <td> 3</td>
                            </tr>
                            <tr>
                                <td>CE 206 </td>
                                <td>Computer Programming Sessional l</td>
                                <td> 1.5</td>
                            </tr>
                            <tr>
                                <td>CE 207 </td>
                                <td>Engineering Computation Sessional </td>
                                <td> 1.5</td>
                            </tr>
                            <tr>
                                <td>CE 208 </td>
                                <td>Estimating and Costing* </td>
                                <td> 1.5</td>
                            </tr>
                            <tr>
                                <td>CE 209</td>
                                <td>Advance Construction Technology and HES Sessional </td>
                                <td> 1.5</td>
                            </tr>
                            <tr>
                                <td>CE 211</td>
                                <td> Mechanics of Solids I </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 212</td>
                                <td> Structural Mechanics Sessional</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 213</td>
                                <td>Mechanics of Solids II </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 261 </td>
                                <td>Fluid Mechanics</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 262</td>
                                <td> Fluid Mechanics Sessional </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Basic Civil Engineering Courses (55.50)</th>
                            </tr>
                            <tr>
                                <td>CE 200</td>
                                <td> Details of Construction*</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 201</td>
                                <td> Construction Materials </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 202</td>
                                <td> Construction Materials Sessional </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 312</td>
                                <td>Computer Aided Structural Analysis and Design Lab I</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 313 </td>
                                <td>Structural Analysis and Design II</td>
                                <td> 3</td>
                            </tr>

                            <tr>
                                <td>CE 315 </td>
                                <td>Design of Concrete Structures I</td>
                                <td> 3</td>
                            </tr>
                            <tr>
                                <td>CE 316 </td>
                                <td>Concrete Structures Design Sessional </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 317 </td>
                                <td>Design of Concrete Structures II </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 319 </td>
                                <td>Design of Steel Structures</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 320
                                </td>
                                <td> Steel Structure Design Lab </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 331</td>
                                <td>Environmental Engineering I </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 332</td>
                                <td>Environmental Engineering I Sessional </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 333</td>
                                <td> Environmental Engineering II</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 341</td>
                                <td>Geotechnical Engineering I</td>
                                <td>3</td>
                            </tr>

                            <tr>
                                <td>CE 342 </td>
                                <td>Geotechnical Engineering Sessional I</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 343</td>
                                <td> Geotechnical Engineering II </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td> CE 351 </td>
                                <td>Transportation Engineering I </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td> CE 353 </td>
                                <td>Transportation Engineering II </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td> CE 354</td>
                                <td>Transportation Engineering I Sessional</td>
                                <td> 1.5</td>
                            </tr>
                            <tr>
                                <td> CE 361</td>
                                <td>Hydraulic Engineering</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>CE 362</td>
                                <td>Hydraulic Engineering Sessional</td>
                                <td> 1.5</td>
                            </tr>
                            <tr>
                                <td>CE 363</td>
                                <td>Engineering Hydrology </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Advance Civil Engineering Elective Courses (64.00)</th>
                            </tr>
                            <tr>
                                <td>CE 400</td>
                                <td> Project & Thesis</td>
                                <td> 4.5</td>
                            </tr>
                            <tr>
                                <td> CE 402</td>
                                <td> Application of GIS in Civil Engineering </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 410</td>
                                <td> Concrete Structures Design Sessional II </td>
                                <td>1.5</td>
                            </tr>

                            <tr>
                                <td>CE 411</td>
                                <td> Structural Analysis and Design III </td>
                                <td> 3.0</td>
                            </tr>
                            <tr>
                                <td>CE 412</td>
                                <td> Computer Aided Structural Analysis and Design Lab II</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 413 </td>
                                <td> Introduction to Steel-Concrete Composite Structures </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 415</td>
                                <td> Prestressed Concrete </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 416</td>
                                <td> Computer Aided Structural Analysis and Design Lab III</td>
                                <td> 1.5 </td>
                            </tr>
                            <tr>
                                <td>CE 417</td>
                                <td>Design of Concrete Structures III </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 419</td>
                                <td> Introduction to Finite Element Method </td>
                                <td> 2.0</td>
                            </tr>
                            <tr>
                                <td>CE 421 </td>
                                <td>Dynamics of Structures</td>
                                <td> 2.0 </td>
                            </tr>
                            <tr>
                                <td>CE 431 </td>
                                <td> Design of Water Supply, Sanitation and Sewerage Systems </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 432
                                </td>
                                <td> Environmental Engineering Sessional II </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 433 </td>
                                <td>Solid and Hazardous Waste Management</td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>SCE 437 </td>
                                <td>Sustainable Development and Environmental Impact Assessment </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 441</td>
                                <td> Foundation Engineering </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 442</td>
                                <td> Geotechnical Engineering Sessional II </td>
                                <td> 1.5</td>
                            </tr>
                            <tr>
                                <td>CE 443</td>
                                <td> Earth Retaining Structures</td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 445 </td>
                                <td>Elementary Soil Dynamics</td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 451 </td>
                                <td>Traffic Planning & Management</td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 452</td>
                                <td>Transportation Engineering II Sessional</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>CE 453</td>
                                <td>Pavement Management, Drainage and Management </td>
                                <td> 2.0</td>
                            </tr>
                            <tr>
                                <td>CE 455</td>
                                <td> Urban Transportation Planning and Management </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 461</td>
                                <td>Irrigation and Flood Control</td>
                                <td> 3.0</td>
                            </tr>
                            <tr>
                                <td>CE 465</td>
                                <td> Flood Mitigation and Management
                                    <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 467</td>
                                <td> Ground Water Engineering</td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 469</td>
                                <td> River Engineering</td>
                                <td> 2.0</td>
                            </tr>
                            <tr>
                                <td>CE 471 </td>
                                <td> Hydraulic Structures</td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 472 </td>
                                <td> Water Resources Engineering Sessional I</td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td> CE 473</td>
                                <td>Coastal Engineering </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>CE 474</td>
                                <td> Water Resources Engineering Sessional II</td>
                                <td> 1.5</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Civil Engineering Professional Practice Courses (16.50)</th>
                            </tr>
                            <tr>
                                <td> CE 301</td>
                                <td> Professional Practice and Business Communication </td>
                                <td>3.0</td>
                            </tr>
                            <tr>
                                <td> CE 401 </td>
                                <td> Project Planning and Management</td>
                                <td> 3.0</td>
                            </tr>
                            <tr>
                                <td>CE 403</td>
                                <td> Socio-economic Aspects of Development Projects </td>
                                <td> 3.0</td>
                            </tr>
                            <tr>
                                <td> CE 405 </td>
                                <td> Business and Career Development </td>
                                <td> 3.0</td>
                            </tr>
                            <tr>
                                <td>CE 406 </td>
                                <td> Law and Ethics for Engineers </td>
                                <td>3.0</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center">Humanities and Social Science Courses (13.50)</th>
                            </tr>
                            <tr>
                                <td>ENG 101</td>
                                <td>English Fundamentals</td>
                                <td>3.0</td>
                            </tr>
                            <tr>
                                <td>ENG 102</td>
                                <td>Developing English Language Skills </td>
                                <td>1.5</td>
                            </tr>
                            <tr>
                                <td>HUM 113 </td>
                                <td>113 Economics </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>SOC 113 </td>
                                <td>Bangladesh Studies and Government*</td>
                                <td>3.0</td>
                            </tr>
                            <tr>
                                <td>HUM 213 </td>
                                <td>Principles of Accounting* </td>
                                <td>2.0</td>
                            </tr>
                            <tr>
                                <td>SOC 255 </td>
                                <td>Sociology</td>
                                <td>2.0</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="eng14" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">B.A (Hons) in English 4 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2" class="text-center">1st Semester</th>
                                <th colspan="2" class="text-center">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>Eng-101</td>
                                <td>Basic English Language-I</td>
                                <td>Eng-106</td>
                                <td>Basic English Language-II</td>
                            </tr>
                            <tr>
                                <td>Eng-102</td>
                                <td>History of English Literature-I</td>
                                <td>Eng-107</td>
                                <td> History of English Literature-II</td>
                            </tr>
                            <tr>
                                <td>Eng-103</td>
                                <td>History of American Literature-I</td>
                                <td>Eng-108 </td>
                                <td>History of American Literature-II</td>
                            </tr>
                            <tr>
                                <td>Eng-105</td>
                                <td> History of the World</td>
                                <td>Eng-110 </td>
                                <td>History of England and India</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">3rd Semester</th>
                                <th colspan="2" class="text-center">4th Semester</th>
                            </tr>
                            <tr>
                                <td>Eng-104</td>
                                <td>Ancient Western Philosophy</td>
                                <td>Eng-109</td>
                                <td>Modern Western Philosophy</td>
                            </tr>
                            <tr>
                                <td>Eng-201</td>
                                <td>Functional English</td>
                                <td>Eng-203</td>
                                <td> Classics in Translation-I</td>
                            </tr>
                            <tr>
                                <td>Eng-202</td>
                                <td>Theory of Literature-I</td>
                                <td>Eng-204 </td>
                                <td>Anglo-Saxon Poetry</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> </td>
                                <td>Eng-205 </td>
                                <td> Elizabethan & Restoration Drama-I</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">5rd Semester</th>
                                <th colspan="2" class="text-center">6th Semester</th>
                            </tr>
                            <tr>
                                <td>Eng-206</td>
                                <td>English Writing Skills</td>
                                <td>Eng-209</td>
                                <td>Old English Prosey</td>
                            </tr>
                            <tr>
                                <td>Eng-207 </td>
                                <td>Theory of Literature-II</td>
                                <td>Eng-210</td>
                                <td> Elizabethan & Restoration Drama-II</td>
                            </tr>
                            <tr>
                                <td>Eng-208</td>
                                <td>Classics in Translation-II</td>
                                <td>Eng-310 </td>
                                <td>Linguistics-I</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">7rd Semester</th>
                                <th colspan="2" class="text-center">8th Semester</th>
                            </tr>
                            <tr>
                                <td>Eng-302</td>
                                <td>Poetry from Chaucer to Donne</td>
                                <td>Eng-305</td>
                                <td> Victorian Poetry</td>
                            </tr>
                            <tr>
                                <td>Eng-303 </td>
                                <td> Romantic Poetry-I</td>
                                <td>Eng-306</td>
                                <td> Linguistics-II</td>
                            </tr>
                            <tr>
                                <td>Eng-304</td>
                                <td> Prose from Bacon to Defoe</td>
                                <td>Eng-307 </td>
                                <td>Poetry from Milton to Pope</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">9th Semester</th>
                                <th colspan="2" class="text-center">10th Semester</th>
                            </tr>
                            <tr>
                                <td>Eng-308</td>
                                <td> Romantic Poetry-II</td>
                                <td>Eng-401 </td>
                                <td> Contemporary Literary Criticism-I</td>
                            </tr>
                            <tr>
                                <td>Eng-309 </td>
                                <td> Prose from Swift to G.Eliot</td>
                                <td>Eng-402</td>
                                <td> American Prose</td>
                            </tr>
                            <tr>
                                <td>Eng-310 </td>
                                <td> Victorian Novel</td>
                                <td>Eng-403 </td>
                                <td> American Novels</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">11th Semester</th>
                                <th colspan="2" class="text-center">12th Semester</th>
                            </tr>
                            <tr>
                                <td>Eng-404</td>
                                <td>Third World Literature-I </td>
                                <td>Eng-407 </td>
                                <td>American Poetry</td>
                            </tr>
                            <tr>
                                <td>Eng-405 </td>
                                <td> Comprehensive Test</td>
                                <td>Eng-408 </td>
                                <td>American Drama</td>
                            </tr>
                            <tr>
                                <td>Eng-406 </td>
                                <td> Contemporary Literary Criticism-II</td>
                                <td>Eng-409 </td>
                                <td>Third World Literature-II </td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td></td>
                                <td>Eng-410 </td>
                                <td>Research Monograph </td>
                            </tr>
                            <tr>
                                <th colspan="4" class="text-left">Total Credit=120</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="eng15" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">M.A in English 2.5 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2" class="text-center">1st Semester</th>
                                <th colspan="2" class="text-center">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>Eng-101</td>
                                <td> Basic English Language</td>
                                <td>Eng-201 </td>
                                <td>Advanced English Writing Skill</td>
                            </tr>
                            <tr>
                                <td>Eng-102 </td>
                                <td> Functional English</td>
                                <td>Eng-202</td>
                                <td>Critical Literry Theory </td>
                            </tr>

                            <tr>
                                <td>Eng-103</td>
                                <td> History of English Literature</td>
                                <td>Eng-203</td>
                                <td>Poetry From Chaucer To pope</td>
                            </tr>
                            <tr>
                                <td>Eng-104</td>
                                <td>History of American Literature</td>
                                <td>Eng-204</td>
                                <td>Romantic Poetry</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">3rd Semester</th>
                                <th colspan="2" class="text-center">4th Semester</th>
                            </tr>
                            <tr>
                                <td>Eng-301</td>
                                <td> Introduction to Linguistics </td>
                                <td>Eng-401 </td>
                                <td>Twentieth Century English Fiction</td>
                            </tr>
                            <tr>
                                <td>Eng-302 </td>
                                <td> Elizabethan & Restoration Drama</td>
                                <td>Eng-402</td>
                                <td>Twentieth Century English Poerty</td>
                            </tr>

                            <tr>
                                <td>Eng-303</td>
                                <td>History of English Literature</td>
                                <td>Eng-403</td>
                                <td>Twentieth Century English Drama</td>
                            </tr>
                            <tr>
                                <td>Eng-304</td>
                                <td>History of American Literature</td>
                                <td>Eng-404</td>
                                <td>Contemporary Literary Criticism</td>
                            </tr>
                            <tr>
                                <th colspan="4" class="text-center">5th Semester</th>
                            </tr>
                            <tr>
                                <td>Eng-501</td>
                                <td colspan="3">Shakespeare</td>
                            </tr>
                            <tr>
                                <td> Eng-502 </td>
                                <td colspan="3">Introduction to American Poetry</td>
                            </tr>

                            <tr>
                                <td>Eng-503</td>
                                <td colspan="3">American Fiction and Drama</td>
                            </tr>
                            <tr>
                                <td>Eng-504</td>
                                <td colspan="3">Continental Literature</td>
                            </tr>
                            <tr>
                                <td>Eng-505</td>
                                <td colspan="3">Classics in Translation</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3">Research Monograph</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-right">Total Credit = 66</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="soc16" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">BSS (Hons) in Sociology 4 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2">1st Semester</th>
                                <th colspan="2">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>Soc: 101</td>
                                <td>Introductory Sociology(Part-I)</td>
                                <td>Soc: 201</td>
                                <td>Introductory Sociology(Part-II)</td>
                            </tr>
                            <tr>
                                <td>Soc: 10 </td>
                                <td> Introduction to Anthropology</td>
                                <td>Soc: 202</td>
                                <td> Cultural Anthropology</td>
                            </tr>

                            <tr>
                                <td>Soc: 103 </td>
                                <td>History of Political Thought</td>
                                <td>Soc: 203 </td>
                                <td>Western Social Though</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Soc: 204 </td>
                                <td>Basic English Language</td>
                            </tr>
                            <tr>
                                <th colspan="2">3rd Semester</th>
                                <th colspan="2">4nd Semester</th>
                            </tr>
                            <tr>
                                <td>Soc: 301 </td>
                                <td>Social Structure of Bangladesh)</td>
                                <td>Soc: 401 </td>
                                <td>Criminology</td>
                            </tr>
                            <tr>
                                <td>Soc: 302</td>
                                <td> Bangladesh Studies</td>
                                <td>Soc: 402</td>
                                <td> Social History</td>
                            </tr>
                            <tr>
                                <td>Soc: 303 </td>
                                <td>Society and Economy of Bangladesh</td>
                                <td>Soc: 403 </td>
                                <td>Sociology of Marriage and Famil</td>
                            </tr>
                            <tr>
                                <td>Soc: 304</td>
                                <td>Functional English</td>
                                <td>Soc: 404 </td>
                                <td>Sociology Demography</td>
                            </tr>
                            <tr>
                                <th colspan="2">5th Semester</th>
                                <th colspan="2">6th Semester</th>
                            </tr>
                            <tr>
                                <td>Soc: 501</td>
                                <td>Crime and Society</td>
                                <td>Elementary Social Statistics </td>
                                <td>Soc: 601 </td>
                            </tr>
                            <tr>
                                <td>Soc: 502</td>
                                <td> Sociology of Education</td>
                                <td>Soc: 602 </td>
                                <td> Classical Sociological Theory</td>
                            </tr>
                            <tr>
                                <td>Soc: 503 </td>
                                <td>World Civilization</td>
                                <td>Soc: 603 </td>
                                <td> Urban Sociology</td>
                            </tr>
                            <tr>
                                <td>Soc: 504</td>
                                <td> Population and Society</td>
                                <td>Soc: 604 </td>
                                <td> Social Thought in the East</td>
                            </tr>
                            <tr>
                                <th colspan="2">7th Semester</th>
                                <th colspan="2">8th Semester</th>
                            </tr>
                            <tr>
                                <td>Soc: 701</td>
                                <td> Advanced Statistics</td>
                                <td>Soc: 801 </td>
                                <td> Environmental Sociology</td>
                            </tr>
                            <tr>
                                <td>Soc: 702 </td>
                                <td>Contemporary Sociological Theory</td>
                                <td>Soc: 802 </td>
                                <td> Social Psychology </td>
                            </tr>
                            <tr>
                                <td>Soc: 703 </td>
                                <td> Rural Sociology</td>
                                <td>Soc: 803 </td>
                                <td> Gender and Development</td>
                            </tr>
                            <tr>
                                <th colspan="2">9th Semester</th>
                                <th colspan="2">10th Semester</th>
                            </tr>
                            <tr>
                                <td>Soc: 901 </td>
                                <td> Political Sociology </td>
                                <td>Soc: 1001 </td>
                                <td> Medical Sociology</td>
                            </tr>
                            <tr>
                                <td>Soc: 902 </td>
                                <td>Industrial Sociology</td>
                                <td>Soc: 1002 </td>
                                <td> Political Development in Bangladesh </td>
                            </tr>
                            <tr>
                                <td>Soc: 903 </td>
                                <td> Contemporary Problems and Issues of Gender</td>
                                <td>Soc: 1003 </td>
                                <td> Sociology of Mass Communication </td>
                            </tr>
                            <tr>
                                <th colspan="2">9th Semester</th>
                                <th colspan="2">10th Semester</th>
                            </tr>
                            <tr>
                                <td>Soc: 1101 </td>
                                <td> Research Methodology </td>
                                <td>Soc: 1201 </td>
                                <td>Social Problems in Bangladesh</td>
                            </tr>
                            <tr>
                                <td>Soc: 1102 </td>
                                <td>Sociology of Development and Underdevelopment</td>
                                <td>Soc: 1202</td>
                                <td> Sociology of Globalization </td>
                            </tr>
                            <tr>
                                <td>Soc: 1103 </td>
                                <td> Sociology of Disaster</td>
                                <td>Soc: 1203</td>
                                <td> Research Monograph </td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td></td>
                                <td>Soc: 1204 </td>
                                <td> Comprehensive and Viva Voce</td>
                            </tr>
                            <tr>
                                <th colspan="4" align="right">Total Credit: 126</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="soc17" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">MSS in Sociology 1 year</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2">1st Semester</th>
                                <th colspan="2">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>Soc-501</td>
                                <td>Classical Sociological Theor</td>
                                <td>Soc-506 </td>
                                <td>Contemporary Sociological Theory </td>
                            </tr>
                            <tr>
                                <td>Soc-502 </td>
                                <td>Social Inequality (Part-I)</td>
                                <td>Soc-507 </td>
                                <td> Social Inequality (Part-II)</td>
                            </tr>
                            <tr>
                                <td>Soc-503 </td>
                                <td>Human Rights - International</td>
                                <td>Soc-508 </td>
                                <td> Social, Culture and Economic Rights</td>
                            </tr>
                            <tr>
                                <td>Soc-504 </td>
                                <td>Sociology of Development</td>
                                <td>Soc-509 </td>
                                <td>Sociology of Development and Modernization </td>
                            </tr>
                            <tr>
                                <td>Soc-505</td>
                                <td> Theory Construction in Sociology</td>
                                <td>Soc-510 </td>
                                <td>Research Monograph </td>
                            </tr>
                            <tr>
                                <th colspan="4" align="right">Total Credit: 30</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="soc18" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">MSS in Sociology 2 years</h5>
                        </div>
                        <table class="table table-sm table-bordered" style="margin-bottom: 0">
                            <tr>
                                <th colspan="2">1st Semester</th>
                                <th colspan="2">2nd Semester</th>
                            </tr>
                            <tr>
                                <td>Soc-451</td>
                                <td>Introduction to Sociology</td>
                                <td>Soc-456 </td>
                                <td>Introduction to Anthropology </td>
                            </tr>

                            <tr>
                                <td>Soc-452</td>
                                <td> Western and Modern Social Though </td>
                                <td>Soc-457 </td>
                                <td> Population and Society</td>
                            </tr>
                            <tr>
                                <td>Soc-453 </td>
                                <td>Social Statistics</td>
                                <td>Soc-458 </td>
                                <td>Criminology</td>
                            </tr>
                            <tr>
                                <td>Soc-454 </td>
                                <td>Social Structure of Bangladesh</td>
                                <td>Soc-459 </td>
                                <td>Sociology of Environment</td>

                            </tr>

                            <tr>
                                <td>Soc-455 </td>
                                <td> Rural and Urban Society</td>
                                <td>Soc-460 </td>
                                <td> Research Methodology </td>
                            </tr>
                            <tr>
                                <th colspan="2">3nd Semester</th>
                                <th colspan="2">4rd Semester</th>
                            </tr>
                            <tr>
                                <td>Soc-501</td>
                                <td>Classical Sociological Theory</td>
                                <td>Soc-502 </td>
                                <td>Social Inequality(Part-I) </td>
                            </tr>

                            <tr>
                                <td>Soc-502 </td>
                                <td> Social Inequality(Part-I) </td>
                                <td>Soc-507 </td>
                                <td> Social Inequality(Part-II)</td>
                            </tr>

                            <tr>
                                <td>Soc-503 </td>
                                <td>Human Right-International Perspective</td>
                                <td>Soc-508 </td>
                                <td>Social, Culture and Economic Rights</td>
                            </tr>

                            <tr>
                                <td>Soc-504 </td>
                                <td>Sociology of Development </td>
                                <td>Soc-509 </td>
                                <td>9 Sociology of Development and Modernization</td>

                            </tr>

                            <tr>
                                <td>Soc-505 </td>
                                <td> Theory Construction in Sociology</td>
                                <td>Soc-510 </td>
                                <td> Research Monograph </td>
                            </tr>
                            <tr>
                                <th colspan="4" align="right">Total Credit: 60</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if($faculty_info['chairman']->count() > 0)
<section class="diu-faculty">
    <div class="container">
        <div class="card mb-4 border-0 bg-transparent">
            @foreach($faculty_info['chairman'] as $key => $chairman)
                @if(($key%2) == 0)
                <div class="diu-people">
                    <div class="diu-people-info text-right">
                        <h5><a href=""><strong>{{ $chairman['name'] }}</strong></a></h5>
                        <p>{{ $chairman['position'] }}</p>
                        <p>Department of {{ $chairman['dept'] }}</p>
                        <p>Dhaka International University</p>
                        <p>{{ $chairman['mno1'] }}</p>
                        <p>{{ $chairman['email1'] }}</p>
                    </div>
                    <div class="diu-people-img">
                        <div class="people-img">
                            <img class="" src="{{ $chairman['profilepic'] }}" alt="{{ $chairman['name'] }}">
                        </div>
                    </div>
                </div>
                @else
                <div class="diu-people">
                    <div class="diu-people-img">
                        <div class="people-img">
                            <img class="" src="{{ $chairman['profilepic'] }}" alt="{{ $chairman['name'] }}">
                        </div>
                    </div>
                    <div class="diu-people-info text-left">
                        <h5><a href=""><strong>{{ $chairman['name'] }}</strong></a></h5>
                        <p>{{ $chairman['position'] }}</p>
                        <p>Department of {{ $chairman['dept'] }}</p>
                        <p>Dhaka International University</p>
                        <p>{{ $chairman['mno1'] }}</p>
                        <p>{{ $chairman['email1'] }}</p>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endif
@if($faculty_info['teacher']->count() > 0)
<section class="diu-key-resource-person diu-section-bg">
    <div class="container">
        <div class="diu-section-title text-center text-light">
            <h3>Teacher Under the {{ $faculty_info['title'] }} Faculty</h3>
            <p>Here you can review some statistics about our Education Center</p>
        </div>
        <div class="diu-resource-person owl-carousel owl-theme diu-left-bottom">
            @foreach($faculty_info['teacher'] as $teacher)
                <div class="item">
                    <div class="card text-center">
                        <div class="diu-card-img">
                            <img class="" src="{{ asset($teacher['profilepic']) }}" alt="{{ $teacher['name'] }}">
                        </div>
                        <div class="card-body">
                            <a href="" class="card-title">{{ $teacher['name'] }}</a>
                        </div>
                        <div class="card-footer text-muted">
                            <p>{{ $teacher['position'] }}</p>
                            <p>{{ $teacher['email1'] }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection