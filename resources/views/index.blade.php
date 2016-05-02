@extends('layouts.app')

@section('content')
<div class="container">
    <div class="index-logo">
        <div class="index-logo-inner panel-body">
            <img class="col-xs-12" src="{{ asset('images/logo.png') }}" />
            <div class="page-header">
                <h3>Discover</h3>
            </div>
            <div class="text-center">
                <h3><a href="#main" class="btn btn-default">Borneo Reefer</a></h3>
                <h3><a href="#services" class="btn btn-default">Our Services</a></h3>
                <h3><a href="#values" class="btn btn-default">Our Values</a></h3>
                <h3><a href="#mission" class="btn btn-default">Our Misson</a></h3>
                <h3><a href="#history" class="btn btn-default">Our History</a></h3>
                <h3><a href="#find" class="btn btn-default">Find Us</a></h3>
            </div>
        </div>
    </div>
    <div class="row-page">
        <div class="col-xs-12 col-sm-8">
            <div class="page-header" id="main">
                <h1>We're Borneo Reefer</h1>
            </div>
            <div class="text-right">
                <h3>A Container Refrigeration Company</h3>
                <h3>Based in Kuching</h3>
                <h3>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#services" aria-expanded="true" aria-controls="collapseServices">Our Services</a>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#service" aria-expanded="false" aria-controls="collapseService">Service List</a>
                </h3>
            </div>
            <div class="collapse in" id="services">
                <div class="well">
                    <div id="carousel-services" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">Pre-Trip Inspection</div>
                            <div class="item">Washing</div>
                            <div class="item">Plugging & Unplugging (On Dock & On Board Vessel)</div>
                            <div class="item">Pre-Sail Check On Board Vessel</div>
                            <div class="item">Reefer Monitoring</div>
                            <div class="item">Reefer Survey & Valuation</div>
                            <div class="item">Data-Logger Readings & Analysis</div>
                            <div class="item">Emergency Reefer Care Response (24 hour/365 Days)</div>
                            <div class="item">Reefer Machinery Repair</div>
                            <div class="item">Reefer Structural Repair</div>
                            <div class="item">Sales of reconditioned Reefer units for cold storage</div>
                            <div class="item">Sales & Maintenance of “Clip-On” & “Underslung” Generator Sets</div>
                            <div class="item">Other Industrial Refrigeration Related Services</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse" id="service">
                <div class="well">
                <ol>
                    <li data-target="#carousel-services" data-slide-to="0">Pre-Trip Inspection</li>
                    <li data-target="#carousel-services" data-slide-to="1">Washing</li>
                    <li data-target="#carousel-services" data-slide-to="2">Plugging & Unplugging (On Dock & On Board Vessel)</li>
                    <li data-target="#carousel-services" data-slide-to="3">Pre-Sail Check On Board Vessel</li>
                    <li data-target="#carousel-services" data-slide-to="4">Reefer Monitoring</li>
                    <li data-target="#carousel-services" data-slide-to="5">Reefer Survey & Valuation</li>
                    <li data-target="#carousel-services" data-slide-to="6">Data-Logger Readings & Analysis</li>
                    <li data-target="#carousel-services" data-slide-to="7">Emergency Reefer Care Response (24 hour/365 Days)</li>
                    <li data-target="#carousel-services" data-slide-to="8">Reefer Machinery Repair</li>
                    <li data-target="#carousel-services" data-slide-to="9">Reefer Structural Repair</li>
                    <li data-target="#carousel-services" data-slide-to="10">Sales of reconditioned Reefer units for cold storage</li>
                    <li data-target="#carousel-services" data-slide-to="11">Sales & Maintenance of “Clip-On” & “Underslung” Generator Sets</li>
                    <li data-target="#carousel-services" data-slide-to="12">Other Industrial Refrigeration Related Services</li>
                </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row-page">
        <div class="col-xs-12 col-sm-8">
            <div class="page-header">
                <div class="space-header" id="values"></div>
                <h1>Our Values</h1>
            </div>
            <div class="well text-left">
                <ul>
                    <li><h4>Team Work</h4></li>
                    <li><h4>Customer Focus</h4></li>
                    <li><h4>Quality & Professionalism</h4></li>
                    <li><h4>Open Communication</h4></li>
                    <li><h4>Continuous Improvement & Innovation</h4></li>
                    <li><h4>Ethical Business Practice</h4></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row-page">
        <div class="col-xs-12 col-sm-8">
            <div class="page-header">
                <div class="space-header" id="mission"></div>
                <h1>Our Mission</h1>
            </div>
            <div class="well text-left">
                <ul>
                    <li><h4>Providing clients and associates with the highest standard of service at all times.</h4></li>
                    <li><h4>Nurturing personnel though ample space for self-development through responsibility and job satisfaction.</h4></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row-page">
        <div class="col-xs-12 col-sm-8">
            <div class="page-header">
                <div class="space-header" id="history"></div>
                <h1>Our History</h1>
            </div>
            <div class="well text-left">
                <p>Mr. Maniam, The Managing Director, started his career at MCS Container Sdn. Bhd. in the year 1991. In the year 2000, Mr. Maniam went into business with his two younger brothers by forming Passage Back-Up Sdn. Bhd in Port Klang with the main idea of exploring the world of containerization. Passage Back-Up was the first company of its kind to do major reefer container structural repair while focusing on a total reefer service concept.  </p>
 	            <p>In due time, Passage Back-Up Sdn. Bhd was able to proudly include shipping industry giants like Hapag-Lyod, NYK, PIL, PDZ and P&O into its clientele. Borneo Reefer Sdn. Bhd was set up in 2003 to pave way to the birth of a localised Total Reefer Care Service industry in Kuching, Sarawak. Since its inception, Borneo Reefer has tirelessly worked to help Shipping Liners and their local agents to reduce the number of freight claims by assuring that every single Reefer unit is in optimum working condition before it is despatched for the consignee’s premises for loading.</p>
	            <p>In 2013, Borneo Reefer was given the opportunity by Senari Machinery Sdn. Bhd to provide Pre-Trip Inspection (PTI) services for a selected group of clients at Senari Port’s On-Dock Depot (ODD) facility. </p>
            </div>
        </div>
    </div>
    <div class="row-page">
        <div class="col-xs-12 col-sm-8">
            <div class="page-header">
                <div class="space-header" id="find"></div>
                <h1>Find Us</h1>
            </div>
            <div class="text-right">
                <h3>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#contact" aria-expanded="true" aria-controls="collapseContact">Contact</a>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#address" aria-expanded="false" aria-controls="collapseAddress">Address</a>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#map" aria-expanded="false" aria-controls="collapseMap">Map</a>
                </h3>
            </div>
            <div class="collapse in" id="contact">
                <div class="well">
                    <address>
                        <abbr title="Mobile">Mobile:</abbr> +60 123456789<br/>
                        <abbr title="Phone">Phone:</abbr> +60 82222<br/>
                        <abbr title="Email">Email:</abbr> reefer@example.com<br/>
                    </address>
                </div>
            </div>
            <div class="collapse" id="address">
                <div class="well">
                    <address>
                        <strong>Borneo Reefer</strong><br>
                        1st floor, Lot 1905, Section 66, KTLD,<br>
                        Jalan Pending,<br>
                        93450 Kuching, Sarawak<br>
                    </address>
                </div>
            </div>
            <div class="collapse" id="map">
                <div class="well">
                    Map
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script_extra')
    <script src="{{ asset('js/index.js') }}" ></script>
@stop
