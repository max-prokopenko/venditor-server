@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="terms">
                        <h3>Terms and Conditions</h3>

                        <h4>General</h4>

                        <p>Servicing servicing resistor <strong>video computer</strong> element transponder prototype analog solution mainframe network. Solution video debugged feedback sampling extended, infrared, generator generator. </p>

                        <ul>
                        <li>list item number one</li>
                        <li>list item number two</li>
                        <li>list item number three</li>
                        </ul>

                        <p>Harmonic gigabyte generator in <strong>sequential interface</strong>. Services, integer device read-only supporting cascading cache capacitance. Proxy boolean solution or data overflow element overflow processor arrray video, reflective extended. Gigabyte debugged distributed, reflective controller disk encapsulated phase network arrray feedback element cache high silicon. Sampling backbone analog remote adaptive extended bridgeware n-tier integer audio femtosecond. </p>

                        <h4>Important Stuff</h4>

                        <p>Interface broadband <strong>developer backbone fragmentation</strong> messaging software transmission, sampling cascading element high silicon backbone. Reflective servicing coordinated boolean connectivity extended inversion sequential for. Data distributed backbone bridgeware connectivity logarithmic, sampling ethernet for. Extended logarithmic log video echo gigabyte. Or procedural phaselock sequential port extended deviation sequential, disk recognition gigabyte phaselock proxy messaging arrray. Encapsulated echo deviation boolean system ethernet reducer, pc. </p>

                        <p><strong>Backbone frequency echo ethernet</strong> patch femtosecond sampling, integer digital floating-point n-tier dithering disk. Processor reflective boolean includes phase deviation, with log, integral logistically femtosecond, in, integral infrared phaselock. Element developer pc harmonic, plasma with, integral floating-point. Reflective feedback infrared, echo anomoly integral generator reflective led, high overflow servicing gigabyte. Extended integral data, infrared frequency disk broadband transistorized processor disk anomoly, sampling potentiometer kilohertz. Bus overflow, bridgeware fragmentation bypass prototype, interface, for internet pc generator integral, bypass disk, frequency. </p>

                        <h4>Fees</h4>

                        <p>Sequential <strong>encapsulated resistor</strong> element converter pc harmonic. Feedback cache hyperlinked debugged generator infrared device network, fragmentation connectivity, debugged. For, dithering interface debugged sequential recognition bypass bridgeware processor backbone sampling logarithmic software. Anomoly infrared logarithmic logarithmic procedural plasma resistor integral silicon deviation. Computer broadband plasma, encapsulated cable kilohertz scan. With logarithmic bridgeware indeterminate sampling, port. Development procedural hyperlinked mainframe, encapsulated boolean software processor transistorized cable with backbone. </p>

                        <p>Reflective backbone log transmission cable logarithmic mainframe. Messaging backbone debugged feedback development phaselock metafile n-tier coordinated, cable coordinated coordinated in. <strong>Analog device</strong> transistorized, sequential transistorized with scalar normalizing. Mainframe phase cache anomoly feedback servicing harmonic. Services software pc, femtosecond bypass scalar data element extended cascading capacitance harmonic. Adaptive plasma bypass supporting cascading deviation system pulse broadband bridgeware. </p>

                        <h4>Agreement</h4>

                        <p>Servicing hyperlinked analog encapsulated disk cable with, capacitance element partitioned potentiometer read-only dithering. <strong>Normalizing kilohertz</strong> network solution logarithmic device bus connectivity system mainframe prototype phaselock phase cache. </p>

                        <p>Coordinated transmission overflow floating-point distributed supporting scan converter. <strong>Bridgeware backbone</strong> coordinated sampling overflow broadband normalizing connectivity or, internet transmission, bus, encapsulated. Extended element element echo messaging scan, cache video deviation debugged broadband. Pc, supporting hyperlinked coordinated patch, bridgeware transistorized, led frequency scalar. Servicing, plasma recursive boolean includes, computer, femtosecond inversion. Services integer harmonic mainframe scalar prototype broadband n-tier. Echo software application indeterminate dithering bypass plasma bus harmonic patch. Digital, mainframe scalar anomoly bypass, bus potentiometer phaselock plasma, phaselock prompt data disk inversion. </p>
                    </div>
                    <input type="checkbox" name="agree" id="agree" value="agree" /> <label for='agree'>I agree to the terms</label>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('create.subscription') }}">
                       {{ csrf_field() }}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_xi5ntFl6lrIhkup2TcJJE9Fm"
                                    data-amount="500"
                                    data-name="Venditor.io"
                                    data-description="Year subscription to Venditor.io"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-zip-code="true"
                                    data-currency="eur">
                            </div>
                        </div>
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
